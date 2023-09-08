<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../css/projecten.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700&display=swap" rel="stylesheet">
<script src="../javascript/script.js"></script>
</head>
<body>
<header class="sticky-header"> 
    <ul>
        <li><a href="../../index.html" style="color: black;">Home</a></li>
        <li><a href="#" style="color: #FFA500;">Projecten</a></li>
        <li><a href="overmij.html" style="color: black;">Over mij</a></li>
        <li><a href="contact.php" style="color: black;">Contact</a></li>
      </ul>
</header>
<div class="project-wrapper">
<div class="rectangle5"></div>
<div class="project-tekst">
                <p>klik op een van de plaatjes om naar mijn weergeven project te gaan</p>
            </div>
            </div>
<div id="projecten">
    <div class="row">
        <?php
        require_once "db.php";
        $statement = $db->query("SELECT * FROM portfolio");
        $counter = 0;
        while ($row = $statement->fetch()) {
            if ($counter % 3 == 0 && $counter > 0) {
                ?>
                </div><div class="row">
                <?php
            }
            ?>
            <div class="column">
                <div class="project-container">
                    <a href="<?= $row['link']?>" target="_blank">
                        <div class="afbeelding-wrapper">
                        <div class="project-titel"><?= $row['titel']?></div>
                            <img src="../<?= $row['foto']?>" alt="<?= $row['title']?>" draggable="false">
                        </div>
                    </a>
                    
                </div>
                <div class="project-omschrijving"><?= $row['omschrijving']?></div>
                    <div class="project-datum"><?= $row['datum']?></div>
            </div>
            <?php
            $counter++;
        }
        ?>
    </div>
</div>
<footer class="footer-overmij">
    </footer>
    </body> 
    </html>