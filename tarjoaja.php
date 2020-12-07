<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Työnhaku</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        if (isset($_POST['filter']))
        {
            $filter = $_POST['filter'];
        }
        else
        {
            $filter = '>=';
        }
        if (isset($_POST['lukeminen']))
        {
            $lukeminen = $_POST['lukeminen'];
        }
        else
        {
            $lukeminen = 0;
        }
        if (isset($_POST['kirjoittaminen']))
        {
            $kirjoittaminen = $_POST['kirjoittaminen'];
        }
        else
        {
            $kirjoittaminen = 0;
        }
        if (isset($_POST['puhuminen']))
        {
            $puhuminen = $_POST['puhuminen'];
        }
        else
        {
            $puhuminen = 0;
        }
        if (isset($_POST['hengittaminen']))
        {
            $hengittaminen = $_POST['hengittaminen'];
        }
        else
        {
            $hengittaminen = 0;
        }
        if (isset($_POST['elaminen']))
        {
            $elaminen = $_POST['elaminen'];
        }
        else
        {
            $elaminen = 0;
        }
        if (isset($_POST['tuijottaminen']))
        {
            $tuijottaminen = $_POST['tuijottaminen'];
        }
        else
        {
            $tuijottaminen = 0;
        }
        ?>
        <form action='tarjoaja.php' method='post' enctype="multipart/form-data" id='hakuform'>
            <table class='tarjoaja'>
                <tr>
                    <td></td>
                    <td class='haku'><label for='lukeminen'>Lukeminen</label></td>
                    <td class='haku'><label for='kirjoittaminen'>Kirjoittaminen</label></td>
                    <td class='haku'><label for='puhuminen'>Puhuminen</label></td>
                    <td class='haku'><label for='hengittaminen'>Hengittäminen</label></td>
                    <td class='haku'><label for='elaminen'>Eläminen</label></td>
                    <td class='haku'><label for='tuijottaminen'>Tyhjyyteen tuijottaminen</label></td>                    
                </tr>
                <tr>
                    <td>
                        <select name='filter'>
                            <option value='='<?php if($filter=='=') print 'selected' ?>>Täsmälleen</option>
                            <option value='>='<?php if($filter=='>=') print 'selected' ?>>Vähintään</option>                            
                        </select>
                    </td>
                    <td>
                        <select name='lukeminen'>
                            <option value="4"<?php if($lukeminen==4) print 'selected' ?>>Erinomainen</option>
                            <option value="3"<?php if($lukeminen==3) print 'selected' ?>>Hyvä</option>
                            <option value="2"<?php if($lukeminen==2) print 'selected' ?>>Kohtalainen</option>
                            <option value="1"<?php if($lukeminen==1) print 'selected' ?>>Vähäinen</option>
                            <option value='0'<?php if($lukeminen==0) print 'selected' ?>>Ei ole</option>
                        </select>
                    </td>
                    <td>
                        <select name='kirjoittaminen'>
                            <option value="4"<?php if($kirjoittaminen==4) print 'selected' ?>>Erinomainen</option>
                            <option value="3"<?php if($kirjoittaminen==3) print 'selected' ?>>Hyvä</option>
                            <option value="2"<?php if($kirjoittaminen==2) print 'selected' ?>>Kohtalainen</option>
                            <option value="1"<?php if($kirjoittaminen==1) print 'selected' ?>>Vähäinen</option>
                            <option value='0'<?php if($kirjoittaminen==0) print 'selected' ?>>Ei ole</option>
                        </select>
                    </td>
                    <td>
                        <select name='puhuminen'>
                            <option value="4"<?php if($puhuminen==4) print 'selected' ?>>Erinomainen</option>
                            <option value="3"<?php if($puhuminen==3) print 'selected' ?>>Hyvä</option>
                            <option value="2"<?php if($puhuminen==2) print 'selected' ?>>Kohtalainen</option>
                            <option value="1"<?php if($puhuminen==1) print 'selected' ?>>Vähäinen</option>
                            <option value='0'<?php if($puhuminen==0) print 'selected' ?>>Ei ole</option>
                        </select>
                    </td>
                    <td>
                        <select name='hengittaminen'>
                            <option value="4"<?php if($hengittaminen==4) print 'selected' ?>>Erinomainen</option>
                            <option value="3"<?php if($hengittaminen==3) print 'selected' ?>>Hyvä</option>
                            <option value="2"<?php if($hengittaminen==2) print 'selected' ?>>Kohtalainen</option>
                            <option value="1"<?php if($hengittaminen==1) print 'selected' ?>>Vähäinen</option>
                            <option value='0'<?php if($hengittaminen==0) print 'selected' ?>>Ei ole</option>
                        </select>
                    </td>
                    <td>
                        <select name='elaminen'>
                            <option value="4"<?php if($elaminen==4) print 'selected' ?>>Erinomainen</option>
                            <option value="3"<?php if($elaminen==3) print 'selected' ?>>Hyvä</option>
                            <option value="2"<?php if($elaminen==2) print 'selected' ?>>Kohtalainen</option>
                            <option value="1"<?php if($elaminen==1) print 'selected' ?>>Vähäinen</option>
                            <option value='0'<?php if($elaminen==0) print 'selected' ?>>Ei ole</option>
                        </select>
                    </td>
                    <td>
                        <select name='tuijottaminen'>
                            <option value="4"<?php if($tuijottaminen==4) print 'selected' ?>>Erinomainen</option>
                            <option value="3"<?php if($tuijottaminen==3) print 'selected' ?>>Hyvä</option>
                            <option value="2"<?php if($tuijottaminen==2) print 'selected' ?>>Kohtalainen</option>
                            <option value="1"<?php if($tuijottaminen==1) print 'selected' ?>>Vähäinen</option>
                            <option value='0'<?php if($tuijottaminen==0) print 'selected' ?>>Ei ole</option>
                        </select>
                    </td>
                    <td><input type='submit' value='Hae'/></td>
                </tr>
            </table>
        </form>
        <br>
        <table class='tarjoaja'>
            <tr class='tarjoaja'>
                <th class='tarjoaja'>Nimi</th>
                <th class='tarjoaja'>Sähköposti</th>
                <th class='tarjoaja'>Puhelinnumero</th>
                <th class='tarjoaja'>Osoite</th>
                <th class='tarjoaja'>Postinumero</th>
                <th class='tarjoaja'>Muuta</th>
                <th class='tarjoaja'>Osaaminen</th>
                <th class='tarjoaja'>CV</th>               
            </tr>            
        <?php
        
        
        $tietokanta = mysqli_connect('localhost','root','','tyonhaku'); // palvelin, käyttäjä, salasana, tietokanta
        mysqli_query($tietokanta,"SET NAMES 'utf8'"); 
        mysqli_query($tietokanta,"SET CHARACTER SET 'utf8'");
        if ($tietokanta)
        {            
            if ($filter=='=')
            {                
                $sql = 'SELECT * FROM hakija WHERE osaaminen1 ='. $lukeminen .' AND osaaminen2 ='. $kirjoittaminen .' AND osaaminen3 ='. $puhuminen .' AND osaaminen4 ='. $hengittaminen .' AND osaaminen5 ='. $elaminen .' AND osaaminen6 ='. $tuijottaminen;
            }
            if ($filter =='>=')
            {
                $sql = 'SELECT * FROM hakija WHERE osaaminen1 >='. $lukeminen .' AND osaaminen2 >='. $kirjoittaminen .' AND osaaminen3 >='. $puhuminen .' AND osaaminen4 >='. $hengittaminen .' AND osaaminen5 >='. $elaminen .' AND osaaminen6 >='. $tuijottaminen;                
            }
            $kysely = mysqli_query($tietokanta, $sql);
            if ($kysely)
            {
                while($tietue=mysqli_fetch_assoc($kysely))
                {
                    print '<tr class="tarjoaja">';                    
                    print "<td class='tarjoaja'>". $tietue['nimi'] ."</td>";
                    print "<td class='tarjoaja'>". $tietue['sahkoposti'] ."</td>";
                    print "<td class='tarjoaja'>". $tietue['puhelinnumero'] ."</td>";
                    print "<td class='tarjoaja'>". $tietue['osoite'] ."</td>";
                    print "<td class='tarjoaja'>". $tietue['postinumero'] ."</td>";
                    print "<td class='tarjoaja'>". $tietue['muuta'] ."</td>";
                    print "<td class='tarjoaja'>";
                    print "<table class='tarjoaja'>";
                    print "<tr class='tarjoaja'>";
                    print "<td class='tarjoaja'>Lukeminen</td>";
                    print "<td class='tarjoaja'>Kirjoittaminen</td>";
                    print "<td class='tarjoaja'>Puhuminen</td>";
                    print "<td class='tarjoaja'>Hengittäminen</td>";
                    print "<td class='tarjoaja'>Eläminen</td>";
                    print "<td class='tarjoaja'>Tyhjyyteen tuijottaminen</td>";
                    print "</tr>";
                    print "<tr class='tarjoaja'>";
                    switch($tietue['osaaminen1'])
                    {
                        case 4:
                            $osaaminen1 = 'E';
                            break;
                        case 3:
                            $osaaminen1 = 'H';
                            break;
                        case 2:
                            $osaaminen1 = 'K';
                            break;
                        case 1:
                            $osaaminen1 = 'V';
                            break;
                        case 0:
                            break;
                    }
                    switch($tietue['osaaminen2'])
                    {
                        case 4:
                            $osaaminen2 = 'E';
                            break;
                        case 3:
                            $osaaminen2 = 'H';
                            break;
                        case 2:
                            $osaaminen2 = 'K';
                            break;
                        case 1:
                            $osaaminen2 = 'V';
                            break;
                        case 0:
                            break;
                    }
                    switch($tietue['osaaminen3'])
                    {
                        case 4:
                            $osaaminen3 = 'E';
                            break;
                        case 3:
                            $osaaminen3 = 'H';
                            break;
                        case 2:
                            $osaaminen3 = 'K';
                            break;
                        case 1:
                            $osaaminen3 = 'V';
                            break;
                        case 0:
                            break;
                    }
                    switch($tietue['osaaminen4'])
                    {
                        case 4:
                            $osaaminen4 = 'E';
                            break;
                        case 3:
                            $osaaminen4 = 'H';
                            break;
                        case 2:
                            $osaaminen4 = 'K';
                            break;
                        case 1:
                            $osaaminen4 = 'V';
                            break;
                        case 0:
                            break;
                    }
                    switch($tietue['osaaminen5'])
                    {
                        case 4:
                            $osaaminen5 = 'E';
                            break;
                        case 3:
                            $osaaminen5 = 'H';
                            break;
                        case 2:
                            $osaaminen5 = 'K';
                            break;
                        case 1:
                            $osaaminen5 = 'V';
                            break;
                        case 0:
                            break;
                    }
                    switch($tietue['osaaminen6'])
                    {
                        case 4:
                            $osaaminen6 = 'E';
                            break;
                        case 3:
                            $osaaminen6 = 'H';
                            break;
                        case 2:
                            $osaaminen6 = 'K';
                            break;
                        case 1:
                            $osaaminen6 = 'V';
                            break;
                        case 0:
                            break;
                    }
                    print "<th class='tarjoaja center'>". $osaaminen1 ."</th>";
                    print "<th class='tarjoaja center'>". $osaaminen2 ."</th>";
                    print "<th class='tarjoaja center'>". $osaaminen3 ."</th>";
                    print "<th class='tarjoaja center'>". $osaaminen4 ."</th>";
                    print "<th class='tarjoaja center'>". $osaaminen5 ."</th>";
                    print "<th class='tarjoaja center'>". $osaaminen6 ."</th>";                          
                    print "</tr>";
                    print "</table>";                    
                    print "</td>";
                    print "<td class='tarjoaja'>";
                    print "<table class='tarjoaja'>";
                    print "<tr class='tarjoaja'>";
                    print "<td class='tarjoaja'>.doc</td>";
                    print "<td class='tarjoaja'>.rtf</td>";
                    print "<td class='tarjoaja'>.pdf</td>";
                    print "</tr>";
                    $nimi = $tietue['nimi'];
                    $nimi = preg_replace('/\s+/','',$nimi);
                    if (file_exists('cv/'.$nimi.'.doc') || file_exists('cv/'.$nimi.'.docx'))
                    {
                        if (file_exists('cv/'.$nimi.'.doc'))
                        {
                            print "<td class='tarjoaja'><a class='cv' href='cv/".$nimi.".doc'>Avaa</a></td>";
                        }
                        else
                        {
                            print "<td class='tarjoaja'><a class='cv' href='cv/".$nimi.".docx'>Avaa</a></td>"; 
                        }
                    }
                    else
                    {
                        print "<td class='tarjoaja'>-</td>";
                    }
                    if (file_exists('cv/'.$nimi.'.rtf'))
                    {
                        print "<td class='tarjoaja'><a class='cv' href='cv/".$nimi.".rtf'>Avaa</a></td>";
                    }
                    else
                    {
                        print "<td class='tarjoaja'>-</td>";
                    }
                    if (file_exists('cv/'.$nimi.'.pdf'))
                    {
                        print "<td class='tarjoaja'><a class='cv' href='cv/".$nimi.".pdf'>Avaa</a></td>";
                    }
                    else
                    {
                        print "<td class='tarjoaja'>-</td>";
                    }                    
                    print "</table>";
                    print "</td>";
                    print "</tr>";
                }
            }
            else
            {
                print '<h1>Virhe tietokantakyselyä tehtäessä' . mysqli_error($tietokanta) . '</h1>';
            }
        }
        else
        {
            print '<h1>Virhe tietokantaan yhdistettäessä: ' . mysqli_error($tietokanta) . '</h1>';
        }
        ?>        
        </table>
    </body>
</html>

