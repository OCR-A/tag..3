<!DOCTYPE html>
<html>
    <head>
        <title>Titel</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="bootstrap.css"/>
    </head>
    <body>
        <div class="site">
            <div class="header">Header</div>
            <div class="nav">Navigation</div>
            <div class="content">
            <h1>Ausgabe PHP:</h1>
                <div class="ausgabePHP">
            <?php

                $i = 0;

                $y = 2;

                while ($y < 5) {
                    echo $y ."<p>ziel verfehlt,Variable y ausgegeben<p>";
                    $y++;
                }          


                while ($i < 10) {
                    echo $i;
                    $i++;
                }          

                /**
                 * AUFGABE:
                 * 1) Programmiere eine Variable j = 0
                 * 2) Nimm diese Variable j als Zählervariable für while-Schleife
                 * 3) Die Schleifenbedingung der while Schleife ist < 5
                 * 4) Gib die Zählervariable j per echo-Befehl als <p>-Tag aus.
                 * 5) Erhöhe die Zählervariable j
                 */                

                 
                     
            ?>       
                </div>     
            </div>
            <div class="footer">Footer</div>        
        </div>
    </body>
</html>