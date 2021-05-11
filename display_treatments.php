<?php     
    $category = $_GET['kategoria'];                   
    $sql = "SELECT name, label, description, price, duration, slug FROM treatments WHERE category LIKE '$category'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $desc = $row['description'];
        $desc = substr($desc, 0, 300);

        $link = "https://salonkosmetycznyatomczak.pl/zabiegi.php?slug=".$row['slug'];
        $link_production = "http://localhost/skr/zabiegi.php?slug=".$row['slug'];

        echo '<div class="elem">';
        echo '<div class="header-sect">';
        echo '<h1>'.$row['name'].'</h1> <span class="price">'.$row['price'].'</span>';
        echo '</div>';
        if ($row['label'] != NULL) {
            echo '<p class="elem-label">';
            echo $row['label'];
            echo '</p>';
        }
        if ($row['description'] != NULL) {
            echo '<p class="quict-desc">';
            echo $desc.'...';
            echo '</p>';
        }
        
        echo ' <div class="elem-actis">';
        
        if ($row['duration'] != NULL) {
            echo '<span class="durat">Czas trwania: '.$row['duration'].'</span>';
        }
        
        if ($row['description'] != NULL) {
            echo '<a href="'.$link.'">Czytaj o zabiegu ></a>';
        }
        echo '</div>';
        echo '</div>';
    }
    } else {
        echo "Ups.. Coś poszło nie tak :(";
    }
?>