<?php
    require_once('./php/connect_db.php');
    $category_b = $_GET['kategoria'];
    $category = str_replace('_', ' ', $category_b);
    $category = ucwords($category);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        echo '<title>Oferta :: '.$category.' - Salon Kosmetyczny Aldona Tomczak</title>';
    ?>
    <link rel="stylesheet" href="./assets/css/main-1.01.css">
    <link rel="shortcut icon" href="./assets/ico/favicon.png" type="image/png">
    <meta name="description" content="Salon Kosmetyczny Aldona Tomczak Raciąż Oferta">
    <meta name="keywords" content="
    salon kosmetyczny raciaz,
    salon kosmetyczny raiąż,
    salon kosmetyczny aldona tomczak,
    raciaz,
    salon kosmetyczny,
    salon kosmetyczny aldona tomczak raciaz,
    kosmetyczka,
    kosmetyczka raciąż,
    kosmetyczka raciaz,
    ">
</head>
<body>
    <?php
        include_once('./page-hd-navig.php');
    ?>
    <main>
        <div class="offer-wrapper wrapper-1200">
            <h1 class="clss-h">Nasza Oferta<img src="./assets/ico/str-hrt.svg" alt="header dec icon"></h1>
            <?php
                include_once('mb-off-categ.php');
            ?>
            <div class="wrapper">
                <div class="wrapper-content">
                <?php
                    echo '<h1 class="wrapper-content-label">'.$category.'</h1>';
                    if ($category_b === 'epilacja_laserowa') {
                        echo '
                            <p class="epil-p">Epilacja to trwałe usuwanie zbędnego owłosienia
                            Dzięki zastosowanej długości fali w laserze diodowym Medika 808, możemy trwale pozbyć się włosów po kilku zabiegach. Działanie lasera oparte jest na zjawisku selektywnej fototermolizy. Światło lasera pochłaniane jest przez mieszek włosowy zawierający melaninę. Następnie zamieniane jest na ciepło, które niszczy elementy włosa, powodując jego trwałą utratę i destrukcję mieszka.
                            Zjawisko to najskuteczniejsze jest dla ciemnych włosów znajdujących się w fazie aktywnego wzrostu(anagen). Pozostałe okresy wzrostowe czyli faza zaniku - katagen i faza spoczynku - telogen są ,, nieme" na działanie lasera. Dlatego potrzebnych jest kilka powtórzeń w odstępach od 4 do 8 tygodni. </p>
                        ';
                    }
                    include_once('./display_treatments.php');
                    echo '</div>';
                ?>
                
                <?php
                    include_once('./offers-types-aside.php');
                ?>
            </div>
        </div>
    </main>
    <?php
        include_once('./footer.php')
    ?>
    <div class="copy" style="font-size: 0.8rem;">
        WSZYSTKIE PRAWA ZASTRZEŻONE  ⓒ 2021 Salon Kosmetyczny Aldona Tomczak <br> Design and Made by <a href="https://weboozu.pl" style="color: #ada493;">Weboozu Patryk Orłowski</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="./assets/js/sticky-elem.js"></script>
    <script src="./assets/js/mobile-nav.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>
<?php
    $conn->close();
?>