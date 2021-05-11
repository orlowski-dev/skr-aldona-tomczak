<?php
    require_once('./php/connect_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derma OXY - Salon Kosmetyczny Aldona Tomczak</title>
    <link rel="stylesheet" href="./assets/css/main-1.01.css">
    <link rel="shortcut icon" href="./assets/ico/favicon.png" type="image/png">
    <meta name="description" content="Salon Kosmetyczny Aldona Tomczak Raciąż Zabiegi">
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
        <div class="treatnent-wrapper wrapper-1200">
            <?php
                $gSlug = $_GET['slug'];
                $query = "SELECT * FROM treatments WHERE slug LIKE '$gSlug'" ;
                
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="content">';
                        echo '<h1>'.$row['name'].'</h1>';
                        if ($row['label'] != NULL) {
                            echo '<span class="tre-name-expl">';
                            echo $row['label'];
                            echo '</span>';
                        }
                        if ($row['image'] != NULL) {
                            echo '<img src="'.$row['image'].'" alt="" class="treatment-img">';
                        }
                        echo '<h2>O Zabiegu</h2>';
                        echo '<p>';
                        echo $row['description'];
                        echo '</p>';
                        echo '</div>';
                        echo '<div class="quick-info">';
                        echo '<div class="table-wra">';
                        echo '<span class="title">Cena</span>';
                        echo '<span class="price">'.$row['price'].'</span>';
                        echo '<span class="title">Czas trwania</span>';
                        echo '<span>'.$row['duration'].'</span>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            ?>
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