<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP uppgift 1</title>
</head>
<body>
<section><h1>Tabeller</h1></section>
<section class="tabell">
<table class="fem">
    <tr>
        <?php
        $fem = 5;
        for($i = 1; $i<11; $i++){
            $resultat = $fem * $i;

            echo"<tr>
            <td> $fem X $i = </td> <td>$resultat</td>
            </tr>";
        }
        ?>
</tr>
</table>

<br>

<table class="tio">
    <tr>
        <?php
        $tio = 10;
        for($i = 1; $i<11; $i++){
            $resultat = $tio * $i;

            echo"<tr>
            <td> $tio X $i = </td> <td>$resultat</td>
            </tr>";
        }
        ?>
</tr>
</table>

<br>

<table class="femton">
    <tr>
        <?php
        $femton = 15;
        for($i = 1; $i<11; $i++){
            $resultat = $femton * $i;

            echo"<tr>
            <td> $femton X $i = </td> <td>$resultat</td>
            </tr>";
        }
        ?>
</tr>
</table>
</section>
</body>
</html>