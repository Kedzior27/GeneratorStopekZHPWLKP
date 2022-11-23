
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="pragma" content="no-cache">
    <title>Chorągiew Wielkopolska ZHP - Generator stopek</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

if(isset($_POST['imie']) && isset($_POST['nazwisko'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $stopienInstr = $_POST['stopienInstr'];
    $funkcja = $_POST['funkcja'];
    $tel = $_POST['telefon'];
    $mail = $_POST['poczta'];
    $przy = $_POST['przydzial'];
    $fun2 = $_POST['funkcja2'];
}

?>
    <div class="container2">
        <div class="header">
            <h3>Generator stopek</h3>
        </div>
        <div id="generator">
            <div class="spacer"></div>
            <div class="spacer"></div>

                            <h4>Poniżej znajdziesz wygenerowaną stopkę.<br/>Skopiuj wyłącznie zawartość wewnątrz poniższego obramowania.</h4>
                <div class="footer-container">
				<br/>
                    <tbody>
                        <tr>
                            <td valign="middle" style="padding:6px 6px 6px 15px"></td>
                            <td>
                            </td>
                            <td valign="middle" style="padding:6px 15px 6px 6px; border-right:1px solid #003B6F"></td>
                            <td valign="middle" style="padding:6px 6px 6px 15px">
                                <span style="font-size:12px; font-family: 'Trebuchet MS',sans-serif">
                                <div style="padding-bottom:10px;">
                                <b>Czuwaj!</b><br>
                                    <b><?php echo "$stopienInstr $imie $nazwisko"?></b><br/>
                                    <?php echo "$funkcja"?><br/>
                                    <?php echo "$fun2"?><br/>
                                   <b> <?php echo "$przy"?><br/></b></div>
								<hr style="border: 0px; background: #003B6F; height: 1px;">
                                <div style="padding-top:10px;">
                                    <b>Chorągiew Wielkopolska ZHP im. Powstańców Wielkopolskich 1918/1919</b><br>
                                    <b><i>ul. Wilków Morskich 23/25, 60-480 Poznań</i></b><br>
                                    <a>mob. </a><?php echo "$tel"?><br/>
                                    <a>e-mail </a><?php echo "$mail"?><br/>
                                    <a href="https://zhp.wlkp.pl/" target="_blank" rel="noopener noreferrer">zhp.wlkp.pl</a>
                                </div>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
    </div>
</body>
</html>
