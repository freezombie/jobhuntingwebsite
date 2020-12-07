<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include_once 'inc/virhe.php';
    if(isset($_SESSION['lukeminen']))
    {
       $lukeminen = $_SESSION['lukeminen'];
    }
    else
    {
        $lukeminen = 0;
    }
    if(isset($_SESSION['kirjoittaminen']))
    {
       $kirjoittaminen = $_SESSION['kirjoittaminen'];
    }
    else
    {
        $kirjoittaminen = 0;
    }
    if(isset($_SESSION['puhuminen']))
    {
       $puhuminen = $_SESSION['puhuminen'];
    }
    else
    {
        $puhuminen = 0;
    }
    if(isset($_SESSION['hengittaminen']))
    {
       $hengittaminen = $_SESSION['hengittaminen'];
    }
    else
    {
        $hengittaminen = 0;
    }
    if(isset($_SESSION['elaminen']))
    {
       $elaminen = $_SESSION['elaminen'];
    }
    else
    {
        $elaminen = 0;
    }
    if(isset($_SESSION['tuijottaminen']))
    {
       $tuijottaminen = $_SESSION['tuijottaminen'];
    }
    else
    {
        $tuijottaminen = 0;
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Työnhaku</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <form action="lahetahakemus.php" method="post" enctype="multipart/form-data">
            <table class="firsttable">
                <tr>
                    <td style="width: 20vw"><label for="nimi">Nimi</label></td>                    
                    <td><input name="nimi" id="nimi" size="30" maxlength="100" required <?php if(isset($_SESSION['nimi'])) print "value='".$_SESSION['nimi']."'";?>/></td>
                </tr>
                <tr>
                    <td><label for="sposti">Sähköposti</label></td> 
                    <td><input name="sposti" id="sposti" size="30" maxlength="100" type="email" required <?php if(isset($_SESSION['sposti'])) print "value='".$_SESSION['sposti']."'";?>/></td>
                </tr>
                <tr>
                    <td><label for="puhnro">Puhelinnumero</label></td> 
                    <td><input name="puhnro" id="puhnro" size="30" maxlength="13" required <?php if(isset($_SESSION['puhnro'])) print "value='".$_SESSION['puhnro']."'";?>/></td>
                </tr>
                <tr>
                    <td><label for="osoite">Osoite</label></td> 
                    <td><input name="osoite" id="osoite" size="30" maxlength="100" required <?php if(isset($_SESSION['osoite'])) print "value='".$_SESSION['osoite']."'";?>/></td>
                </tr>
                <tr>
                    <td><label for="postinro">Postinumero</label></td> 
                    <td><input name="postinro" id="postinro" size="30" maxlength="5" type="number" required <?php if(isset($_SESSION['postinro'])) print "value='".$_SESSION['postinro']."'";?>/></td>
                </tr>
                <tr>
                    <td><label for="muuta">Muuta</label></td>
                    <td><textarea name="muuta" id="muuta" cols="31" rows="4" placeholder="Jos on jotain muuta huomautettavaa, kirjoita se tähän."><?php if(isset($_SESSION['muuta'])) print $_SESSION['muuta'];?></textarea></td>
                </tr>
            </table>
            <table class="secondtable">
                <tr>
                    <th>Osaaminen</th>
                    <td class="center">Lukeminen</td>
                    <td class="center">Kirjoittaminen</td>
                    <td class="center">Puhuminen</td>
                    <td class="center">Hengittäminen</td>
                    <td class="center">Eläminen</td>
                    <td class="center">Tyhjyyteen tuijottaminen</td>                    
                </tr>
                <tr>
                    <th>Erinomainen</th>
                    <td class="radio"><input type="radio" name="lukeminen" value="4"<?php if($lukeminen==4) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="kirjoittaminen" value="4"<?php if($kirjoittaminen==4) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="puhuminen" value="4"<?php if($puhuminen==4) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="hengittaminen" value="4"<?php if($hengittaminen==4) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="elaminen" value="4"<?php if($elaminen==4) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="tuijottaminen" value="4"<?php if($tuijottaminen==4) print ' checked'?>/></td>
                </tr>
                <tr>
                    <th>Hyvä</th>
                    <td class="radio"><input type="radio" name="lukeminen" value="3"<?php if($lukeminen==3) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="kirjoittaminen" value="3"<?php if($kirjoittaminen==3) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="puhuminen" value="3"<?php if($puhuminen==3) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="hengittaminen" value="3"<?php if($hengittaminen==3) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="elaminen" value="3"<?php if($elaminen==3) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="tuijottaminen" value="3"<?php if($tuijottaminen==3) print ' checked'?>/></td>
                </tr>
                <tr>
                    <th>Kohtalainen</th>
                    <td class="radio"><input type="radio" name="lukeminen" value="2"<?php if($lukeminen==2) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="kirjoittaminen" value="2"<?php if($kirjoittaminen==2) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="puhuminen" value="2"<?php if($puhuminen==2) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="hengittaminen" value="2"<?php if($hengittaminen==2) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="elaminen" value="2"<?php if($elaminen==2) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="tuijottaminen" value="2"<?php if($tuijottaminen==2) print ' checked'?>/></td>
                </tr>
                <tr>
                    <th>Vähäinen</th>
                    <td class="radio"><input type="radio" name="lukeminen" value="1"<?php if($lukeminen==1) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="kirjoittaminen" value="1"<?php if($kirjoittaminen==1) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="puhuminen" value="1"<?php if($puhuminen==1) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="hengittaminen" value="1"<?php if($hengittaminen==1) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="elaminen" value="1"<?php if($elaminen==1) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="tuijottaminen" value="1"<?php if($tuijottaminen==1) print ' checked'?>/></td>
                </tr>
                <tr>
                    <th>Ei ole</th>
                    <td class="radio"><input type="radio" name="lukeminen" value="0"<?php if($lukeminen==0) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="kirjoittaminen" value="0"<?php if($kirjoittaminen==0) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="puhuminen" value="0"<?php if($puhuminen==0) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="hengittaminen" value="0"<?php if($hengittaminen==0) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="elaminen" value="0"<?php if($elaminen==0) print ' checked'?>/></td>
                    <td class="radio"><input type="radio" name="tuijottaminen" value="0"<?php if($tuijottaminen==0) print ' checked'?>/></td>
                </tr>
            </table>
            <br><br>
            <label for="CV" style="font-weight: bold">Liitä CV:</label> <input type='file' name='CV' style="margin-left: 2vw" accept="application/msword,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.rtf"/>
            <!--Tällä hetkellä hyväksytään vain word dokumentteja, rtf ja pdf tiedostoja-->
            <input type="submit" value="Lähetä hakemus" style="margin-left: 13.5vw"/>
        </form>
        <?php session_unset() ?>
    </body>
</html>
