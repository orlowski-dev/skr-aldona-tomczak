
<div class="mb-off-categ">

    <?php
        $categoriesFull = [
            "Zabiegi specjalistyczne",
            "Pielęgnacja twarzy",
            "Zabiegi upiększające",
            "Epilacja laserowa",
            "Depilacja woskiem",
            "Manicure / Pedicure",
            "Stylizacja paznokci"
        ];
        if ($category_b === "zabiegi_specjalistyczne") {
            echo '<div class="sl1">';
            echo '<div class="slct"><span>Kategoria: </span> Zabiegi specjalistyczne</div>';
            echo '<button onclick="toogleOfferCateg();">';
            echo '<img src="./assets/ico/filter-alt2.svg" alt="filter icon">';
            echo '</button>';
            echo '</div>';
            echo '<div class="more">';
            echo '<a href="./oferta.php?kategoria=pielegnacja_twarzy">Pielęgnacja twarzy</a>';
            echo '<a href="./oferta.php?kategoria=zabiegi_upiekszajace">Zabiegi upiększające</a>';
            echo '<a href="./oferta.php?kategoria=epilacja_laserowa">Epilacja laserowa</a>';
            echo '<a href="./oferta.php?kategoria=depilacja_woskiem">Depilacja woskiem</a>';
            echo '<a href="./oferta.php?kategoria=manicure_pedicure">Manicure / Pedicure</a>';
            echo '<a href="./oferta.php?kategoria=stylizacja_paznokci">Stylizacja paznokci</a>';
            echo '</div>';   
        }
        if ($category_b === "pielegnacja_twarzy") {
            echo '<div class="sl1">';
            echo '<div class="slct"><span>Kategoria: </span> Pielęgnacja twarzy</div>';
            echo '<button onclick="toogleOfferCateg();">';
            echo '<img src="./assets/ico/filter-alt2.svg" alt="filter icon">';
            echo '</button>';
            echo '</div>';
            echo '<div class="more">';
            echo '<a href="./oferta.php?kategoria=zabiegi_specjalistyczne">Zabiegi specjalistyczne</a>';
            echo '<a href="./oferta.php?kategoria=zabiegi_upiekszajace">Zabiegi upiększające</a>';
            echo '<a href="./oferta.php?kategoria=epilacja_laserowa">Epilacja laserowa</a>';
            echo '<a href="./oferta.php?kategoria=depilacja_woskiem">Depilacja woskiem</a>';
            echo '<a href="./oferta.php?kategoria=manicure_pedicure">Manicure / Pedicure</a>';
            echo '<a href="./oferta.php?kategoria=stylizacja_paznokci">Stylizacja paznokci</a>';
            echo '</div>';   
        }
        if ($category_b === "zabiegi_upiekszajace") {
            echo '<div class="sl1">';
            echo '<div class="slct"><span>Kategoria: </span> Zabiegi upiększające</div>';
            echo '<button onclick="toogleOfferCateg();">';
            echo '<img src="./assets/ico/filter-alt2.svg" alt="filter icon">';
            echo '</button>';
            echo '</div>';
            echo '<div class="more">';
            echo '<a href="./oferta.php?kategoria=zabiegi_specjalistyczne">Zabiegi specjalistyczne</a>';
            echo '<a href="./oferta.php?kategoria=pielegnacja_twarzy">Pielęgnacja twarzy</a>';
            echo '<a href="./oferta.php?kategoria=epilacja_laserowa">Epilacja laserowa</a>';
            echo '<a href="./oferta.php?kategoria=depilacja_woskiem">Depilacja woskiem</a>';
            echo '<a href="./oferta.php?kategoria=manicure_pedicure">Manicure / Pedicure</a>';
            echo '<a href="./oferta.php?kategoria=stylizacja_paznokci">Stylizacja paznokci</a>';
            echo '</div>';   
        }
        if ($category_b === "epilacja_laserowa") {
            echo '<div class="sl1">';
            echo '<div class="slct"><span>Kategoria: </span> Epilacja laserowa</div>';
            echo '<button onclick="toogleOfferCateg();">';
            echo '<img src="./assets/ico/filter-alt2.svg" alt="filter icon">';
            echo '</button>';
            echo '</div>';
            echo '<div class="more">';
            echo '<a href="./oferta.php?kategoria=zabiegi_specjalistyczne">Zabiegi specjalistyczne</a>';
            echo '<a href="./oferta.php?kategoria=pielegnacja_twarzy">Pielęgnacja twarzy</a>';
            echo '<a href="./oferta.php?kategoria=zabiegi_upiekszajace">Zabiegi upiększające</a>';
            echo '<a href="./oferta.php?kategoria=depilacja_woskiem">Depilacja woskiem</a>';
            echo '<a href="./oferta.php?kategoria=manicure_pedicure">Manicure / Pedicure</a>';
            echo '<a href="./oferta.php?kategoria=stylizacja_paznokci">Stylizacja paznokci</a>';
            echo '</div>';   
        }
        if ($category_b === "depilacja_woskiem") {
            echo '<div class="sl1">';
            echo '<div class="slct"><span>Kategoria: </span>Depilacja woskiem</div>';
            echo '<button onclick="toogleOfferCateg();">';
            echo '<img src="./assets/ico/filter-alt2.svg" alt="filter icon">';
            echo '</button>';
            echo '</div>';
            echo '<div class="more">';
            echo '<a href="./oferta.php?kategoria=zabiegi_specjalistyczne">Zabiegi specjalistyczne</a>';
            echo '<a href="./oferta.php?kategoria=pielegnacja_twarzy">Pielęgnacja twarzy</a>';
            echo '<a href="./oferta.php?kategoria=zabiegi_upiekszajace">Zabiegi upiększające</a>';
            echo '<a href="./oferta.php?kategoria=epilacja_laserowa">Epilacja laserowa</a>';
            echo '<a href="./oferta.php?kategoria=manicure_pedicure">Manicure / Pedicure</a>';
            echo '<a href="./oferta.php?kategoria=stylizacja_paznokci">Stylizacja paznokci</a>';
            echo '</div>';   
        }
        if ($category_b === "manicure_pedicure") {
            echo '<div class="sl1">';
            echo '<div class="slct"><span>Kategoria: </span>Manicure / Pedicure</div>';
            echo '<button onclick="toogleOfferCateg();">';
            echo '<img src="./assets/ico/filter-alt2.svg" alt="filter icon">';
            echo '</button>';
            echo '</div>';
            echo '<div class="more">';
            echo '<a href="./oferta.php?kategoria=zabiegi_specjalistyczne">Zabiegi specjalistyczne</a>';
            echo '<a href="./oferta.php?kategoria=pielegnacja_twarzy">Pielęgnacja twarzy</a>';
            echo '<a href="./oferta.php?kategoria=zabiegi_upiekszajace">Zabiegi upiększające</a>';
            echo '<a href="./oferta.php?kategoria=epilacja_laserowa">Epilacja laserowa</a>';
            echo '<a href="./oferta.php?kategoria=depilacja_woskiem">Depilacja woskiem</a>';
            echo '<a href="./oferta.php?kategoria=stylizacja_paznokci">Stylizacja paznokci</a>';
            echo '</div>';   
        }
        if ($category_b === "stylizacja_paznokci") {
            echo '<div class="sl1">';
            echo '<div class="slct"><span>Kategoria: </span>Stylizacja paznokci</div>';
            echo '<button onclick="toogleOfferCateg();">';
            echo '<img src="./assets/ico/filter-alt2.svg" alt="filter icon">';
            echo '</button>';
            echo '</div>';
            echo '<div class="more">';
            echo '<a href="./oferta.php?kategoria=zabiegi_specjalistyczne">Zabiegi specjalistyczne</a>';
            echo '<a href="./oferta.php?kategoria=pielegnacja_twarzy">Pielęgnacja twarzy</a>';
            echo '<a href="./oferta.php?kategoria=zabiegi_upiekszajace">Zabiegi upiększające</a>';
            echo '<a href="./oferta.php?kategoria=epilacja_laserowa">Epilacja laserowa</a>';
            echo '<a href="./oferta.php?kategoria=depilacja_woskiem">Depilacja woskiem</a>';
            echo '<a href="./oferta.php?kategoria=manicure_pedicure">Manicure / Pedicure</a>';
            echo '</div>';   
        }
        
    ?>
</div>