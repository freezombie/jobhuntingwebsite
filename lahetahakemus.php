<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nimi = $_POST["nimi"];
        $osoite = $_POST["osoite"];
        $postinumero = $_POST["postinro"];
        $puhnro = $_POST["puhnro"];
        $sposti = $_POST["sposti"];
        $muuta = $_POST["muuta"];
        
        $lukeminen = $_POST["lukeminen"];
        $kirjoittaminen = $_POST["kirjoittaminen"];
        $puhuminen = $_POST["puhuminen"];
        $hengittaminen = $_POST["hengittaminen"];
        $elaminen = $_POST["elaminen"];
        $tuijottaminen = $_POST["tuijottaminen"];
        
        $kansionnimi = "cv/";
        $tiedostonnimi =  preg_replace('/\s+/','',$nimi);
        
        $tietokanta = mysqli_connect('localhost','root','','tyonhaku'); // palvelin, käyttäjä, salasana, tietokanta
        
        $_SESSION['nimi'] = $nimi;
        $_SESSION['osoite'] = $osoite;
        $_SESSION['postinro'] = $postinumero;
        $_SESSION['puhnro'] = $puhnro;
        $_SESSION['sposti'] = $sposti;
        $_SESSION['muuta'] = $muuta;
        
        $_SESSION['lukeminen'] = $lukeminen;
        $_SESSION['kirjoittaminen'] = $kirjoittaminen;
        $_SESSION['puhuminen'] = $puhuminen;
        $_SESSION['hengittaminen'] = $hengittaminen;
        $_SESSION['elaminen'] = $elaminen;
        $_SESSION['tuijottaminen'] = $tuijottaminen;
        
        switch ($_FILES['CV']['error'])
        {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
            {
                $_SESSION['error'] = 'Unohdit liittää CVn';
                header('location: hakija.php');
                exit;
            }
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
            {
                $_SESSION['error'] = 'Tiedoston koko ylitti PHPn sallitun tiedostonkokorajan'; // Näitä voi vaihtaa php.inistä
                header('location: hakija.php');
                exit;
            }
            default:
            {
                $_SESSION['error'] = 'Tuntematon virhe!';
                header('location: hakija.php');
                exit;
            }
        }
        if($_FILES['CV']['size']> 1000000)
        {
            $_SESSION['error'] = 'Tiedoston koko ylitti sallitun tiedostonkokorajan';
            header('location: hakija.php');
            exit;
        }
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        if (false === $ext = array_search($finfo->file($_FILES['CV']['tmp_name']),array('pdf' => 'application/pdf', 'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'rtf' => 'text/rtf', 'doc' => 'application/msword',),true))
        {
            $tyyppi = $finfo->file($_FILES['CV']['tmp_name']);
            $_SESSION['error'] = 'Tiedoston muoto on väärä, tiedostosi oli muotoa: '. $tyyppi;
            header('location: hakija.php');
            exit;
        }
        $tiedostonnimi .=  '.' . $ext;
        if (!move_uploaded_file($_FILES['CV']['tmp_name'],"$kansionnimi/$tiedostonnimi"))
        {
            $_SESSION['error'] = 'Tiedoston siirto epäonnistui';
            header('location: hakija.php');
            exit;
        }        
        
        if(!filter_var($sposti, FILTER_VALIDATE_EMAIL))
        {
            $_SESSION['error'] = 'Sähköpostin muoto ei ollut kelvollinen';
            header('location: hakija.php');
            exit;
        }
        
        if ($tietokanta)
        {
            $sql = "INSERT INTO hakija (nimi,sahkoposti,puhelinnumero,osoite,postinumero,muuta,osaaminen1,osaaminen2,osaaminen3,osaaminen4,osaaminen5,osaaminen6)"
                    . "VALUES ('$nimi','$sposti','$puhnro','$osoite','$postinumero','$muuta','$lukeminen','$kirjoittaminen','$puhuminen','$hengittaminen','$elaminen','$tuijottaminen')";
            $kysely=  mysqli_query($tietokanta,$sql);
            if (!$kysely)
            {
                $_SESSION['error'] = 'Virhe suorittaessa tietokantakyselyä: ' . mysqli_error($tietokanta);
                header('location: hakija.php');
            }
            mysqli_close($tietokanta);
        }
        else
        {
            $_SESSION['error']='Virhe tietokantayhteydessä';
            header('location: hakija.php');
        }
        
        print '<h1>Hakemuksesi vastaanotettiin onnistuneesti</h1>';
        print '<a href=index.php>Palaa etusivulle</a>';
        ?>
    </body>
</html>
