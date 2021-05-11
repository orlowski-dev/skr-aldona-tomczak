<?php
    require_once('./php/connect_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Salon Kosmetyczny Aldona Tomczak Raciąż Cennik">
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
    <title>cennik - Salon Kosmetyczny Aldona Tomczak</title>
    <link rel="stylesheet" href="./assets/css/main-1.01.css">
    <link rel="shortcut icon" href="./assets/ico/favicon.png" type="image/png">
</head>
<body>
    <?php
        include_once('./page-hd-navig.php');
    ?>
    <main>
        <div class="wrapper-1200">
            <div class="price-lists-wrapper">
                <h1 class="clss-h">cennik <img src="./assets/ico/str-hrt.svg" alt="header dec icon"></h1>
                <div class="table">
                    <div class="header">Nazwa zabiegu</div>
                    <div class="header">Cena</div>
                    <?php
                        $categories = ["zabiegi_specjalistyczne", "pielegnacja_twarzy", "zabiegi_upiekszajace", "depilacja_woskiem", "epilacja_laserowa", "stylizacja_paznokci", "manicure_pedicure"];                        $sql = "SELECT name, price, category FROM treatments WHERE category LIKE 'zabiegi_specjalistyczne'";

                        for ($i = 0; $i < count($categories); $i++) {
                            $sql = "SELECT name, price FROM treatments WHERE category LIKE '$categories[$i]'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                if ($categories[$i] === 'zabiegi_specjalistyczne') {
                                    echo '<div class="td sep">Zabiegi Specjalistyczne</div>';
                                    echo '<div class="td sep"></div>';
                                } 
                                if ($categories[$i] === 'pielegnacja_twarzy') {
                                    echo '<div class="td sep">Pielęgnacja Twarzy</div>';
                                    echo '<div class="td sep"></div>';
                                } 
                                if ($categories[$i] === 'zabiegi_upiekszajace') {
                                    echo '<div class="td sep">Zabiegi Upiększające</div>';
                                    echo '<div class="td sep"></div>';
                                }
                                if ($categories[$i] === 'epilacja_laserowa') {
                                    echo '<div class="td sep">Epilacja Laserowa</div>';
                                    echo '<div class="td sep"></div>';
                                }
                                if ($categories[$i] === 'depilacja_woskiem') {
                                    echo '<div class="td sep">Depilacja Woskiem</div>';
                                    echo '<div class="td sep"></div>';
                                }
                                if ($categories[$i] === 'manicure_pedicure') {
                                    echo '<div class="td sep">Manicure / Pedicure </div>';
                                    echo '<div class="td sep"></div>';
                                }
                                if ($categories[$i] === 'stylizacja_paznokci') {
                                    echo '<div class="td sep">Stylizacja Paznokci</div>';
                                    echo '<div class="td sep"></div>';
                                }
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="td">'.$row['name'].'</div>';
                                    echo '<div class="td">'.$row['price'].'</div>';
                                }
                            } else {
                                echo "Coś poszło nie tak :(";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php
        include_once('./footer.php');
    ?>
    <div class="copy" style="font-size: 0.8rem;">
        WSZYSTKIE PRAWA ZASTRZEŻONE  ⓒ 2021 Salon Kosmetyczny Aldona Tomczak <br> Design and Made by <a href="https://weboozu.pl" style="color: #ada493;">Weboozu Patryk Orłowski</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="./assets/js/sticky-elem.js"></script>
    <script src="./assets/js/mobile-nav.js"></script>
</body>
</html>
<?php
    $conn->close();
?>