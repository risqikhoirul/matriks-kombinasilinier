<?php

$a11 = $_GET['a11'];
$a12 = $_GET['a12'];
$a13 = $_GET['a13'];
$a21 = $_GET['a21'];
$a22 = $_GET['a22'];
$a23 = $_GET['a23'];
$a31 = $_GET['a31'];
$a32 = $_GET['a32'];
$a33 = $_GET['a33'];
$b1 = $_GET['b1'];
$b2 = $_GET['b2'];
$b3 = $_GET['b3'];

$an1 = ((int)$a11 * (int)$b1) + ((int)$a12 * (int)$b2) + ((int)$a13 * (int)$b3);
$an2 = ((int)$a21 * (int)$b1) + ((int)$a22 * (int)$b2) + ((int)$a23 * (int)$b3);
$an3 = ((int)$a31 * (int)$b1) + ((int)$a32 * (int)$b2) + ((int)$a33 * (int)$b3);
?>
<html>
    <head>
    <link rel="stylesheet" href="style.css" />
    <title>Hasil Perhitungan</title>
    </head>
<body>
<nav><a href="matriks.html">Risqi Tools</a></nav>
  <br>
   <h1> Produk Matriks Sebagai Kombinas Linier</h1> 
<h3>Matriks:</h3>
<div class="main">
    <h2>A =</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>
                <?php echo $a11;?>
            </td>
            <td>
                <?php echo $a12;?>
            </td>
            <td>
                <?php echo $a13;?>
            </td>
        </tr>
        <tr>
        <td>
                <?php echo $a21;?>
            </td>
            <td>
                <?php echo $a22;?>
            </td>
            <td>
                <?php echo $a23;?>
            </td>
        </tr>
        <tr>
        <td>
                <?php echo $a31;?>
            </td>
            <td>
                <?php echo $a32;?>
            </td>
            <td>
                <?php echo $a33;?>
            </td>
        </tr>
    </table>
    <h2>B =</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
        <td>
                <?php echo $b1;?>
            </td>
        </tr>
        <tr>
        <td>
                <?php echo $b2;?>
            </td>
        </tr>
        <tr>
        <td>
                <?php echo $b3;?>
            </td>
        </tr>
    </table>
    <br>
    <h2>An =</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
        <td>
                <?php echo $an1;?>
            </td>
        </tr>
        <tr>
        <td>
                <?php echo $an2;?>
            </td>
        </tr>
        <tr>
        <td>
                <?php echo $an3;?>
            </td>
        </tr>
    </table></div>
    <br>
    <h3>Dapat ditulis sebagai kondisi linier:</h3><br>
    <div class="main">
        <h2><?php echo $b1; ?></h2>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td>
                <?php echo $a11; ?></h2> 
                </td>
            </tr>
            <tr>
                <td>
                <?php echo $a21; ?></h2> 
                </td>
            </tr>
            <tr>
                <td>
                <?php echo $a31; ?></h2> 
                </td>
            </tr>
        </table>
        <h3><?php if ($b2 >= 0 ){
                    
                    echo "+ $b2";}
                    else {
                        echo $b2;
                    } ?></h3>
        <table border="1" cellspacing="0" cellpadding="5">
        <tr>
                <td>
                <?php echo $a12; ?></h2> 
                </td>
            </tr>
            <tr>
                <td>
                <?php echo $a22; ?></h2> 
                </td>
            </tr>
            <tr>
                <td>
                <?php echo $a32; ?></h2> 
                </td>
            </tr>
        </table>
        <h3><?php if ($b3 >= 0 ){
                    
        echo "+ $b3";}
        else {
            echo $b3;
        } ?></h3>
        <table border="1" cellspacing="0" cellpadding="5">
        <tr>
                <td>
                <?php echo $a13; ?></h2> 
                </td>
            </tr>
            <tr>
                <td>
                <?php echo $a23; ?></h2> 
                </td>
            </tr>
            <tr>
                <td>
                <?php echo $a33; ?></h2> 
                </td>
            </tr>
</table>
        <h3>=</h3>
        <table border="1" cellspacing="0" cellpadding="5">
        <tr>
                <td>
                <?php echo $an1; ?></h2> 
                </td>
            </tr>
            <tr>
                <td>
                <?php echo $an2; ?></h2> 
                </td>
            </tr>
            <tr>
                <td>
                <?php echo $an3; ?></h2> 
                </td>
            </tr>
</table>
    </div>
    </body>
    </html>