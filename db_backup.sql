-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 09:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28070581_skr`
--

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `slug` varchar(125) COLLATE utf8_polish_ci NOT NULL,
  `label` text COLLATE utf8_polish_ci DEFAULT NULL,
  `description` text COLLATE utf8_polish_ci DEFAULT NULL,
  `image` varchar(125) COLLATE utf8_polish_ci DEFAULT NULL,
  `price` text COLLATE utf8_polish_ci NOT NULL,
  `duration` varchar(10) COLLATE utf8_polish_ci DEFAULT NULL,
  `category` varchar(125) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`id`, `name`, `slug`, `label`, `description`, `image`, `price`, `duration`, `category`) VALUES
(1, 'Derma OXY', 'derma_oxy', ' Infuzja tlenowa ', 'Infuzja tlenowa DermaOXY oparta jest na wtłaczaniu preparatów aktywnych do głębokich warstw skóry za pomocą czystego tlenu. Jest to rewolucyjna metoda odmładzania skóry, nawilżania na poziomie komórkowym oraz redukcji zmarszczek opatentowana w Danii. DermaOXY to synergiczne połączenie dwóch technologii: wprowadzania w skórę wysoce skoncentrowanych składników aktywnych w postaci serum za pomocą tlenu oraz terapii czystym tlenem odpowiednio stężonym i sprężonym. Skoncentrowane składniki aktywne w postaci serum wtłaczane są za pomocą tlenu do głębokich warstw skóry, dzięki czemu pierwsze efekty widoczne są natychmiast po zabiegu. Spektakularne efekty osiągamy dzięki silnie skoncentrowanym składnikom aktywnym m.in kwas hialuronowy, wyciąg z jadu węża (pseudobotox), peptydy, antyoksydanty, witaminy i minerały oraz ekstrakty z alg.\r\n<br><br>\r\nEfekt po jednym zabiegu utrzymuje się do miesiąca, natomiast po serii zabiegów nawet do pół roku. ', './assets/img/derma_oxy.jpg', '250 zł', '1h', 'zabiegi_specjalistyczne'),
(2, 'Mezoterapia Mikroigłowa', 'mezoterapia_mikroiglowa', NULL, 'Mezoterapia mikroigłowa polega na intensywnym, bardzo gęstym i odpowiednio głębokim nakłuwaniu wybranych okolic twarzy, które chcemy poddać regeneracji. Podczas jednego zabiegu na twarzy powstają dziesiątki tysięcy malutkich nakłuć\r\nMikronakłucia zmuszają skórę do intensywnej regeneracji. Wywołany stan zapalny powoduje dość intensywne, ale bezbolesne zaczerwienienie i opuchnięcie skóry. Jest to zjawisko naturalne i ustępuje całkowicie w ciągu 1-3 dni.\r\nWykonanie serii zabiegów skutkuje poprawą zarówno strukturalną, jak i funkcjonalną skóry. Jej rezultatem jest m.in. zwiększenie napięcia i elastyczności skóry, pogrubienie naskórka oraz poprawa jego funkcji.\r\nZabiegi ujędrniają skórę, niwelują blizny po przebytym trądziku, redukują drobne zmarszczki i przebarwienia. Pogrubienie skóry i naskórka powoduje nie tylko redukcję istniejących zmarszczek, ale także to, że popękane naczynka stają się mniej widoczne.Skóra odzyskuje zdrowy i młody wygląd.\r\nEfekty mezoterapii mikroigłowej widoczne są dopiero po pewnym czasie. Najlepsze rezultaty przynosi seria 4-6 zabiegów powtarzanych w odstępach co 2-4 tygodnie.\r\n', NULL, '200 zł', '1h', 'zabiegi_specjalistyczne'),
(3, 'RETINOL Collagen Boost', 'retinol_collagen_boost', NULL, 'Retinol to najczystsza i najbardziej aktywna biochemicznie forma witaminy A. Jego zbawienne działanie na skórę jest udowodnione klinicznie. Retinol polecany jest szczególnie w przypadku cery dojrzałej i wiotkiej oraz jako składnik nawilżający i przedłużający młodość komórek skóry. Skuteczny jest również w walce z trądzikiem.\r\n<br><br>\r\nRetinol reorganizuje strukturę skóry dojrzałej sprawiając, że:\r\n<ul>\r\n<li>Staje się jędrniejsza</li>\r\n<li>Bardziej elastyczna</li>\r\n<li>Zmniejszają się drobne zmarszczki  i blizny</li>\r\n<li>Poprawiają się rysy twarzy</li>\r\n<li>Wypłycają się zmarszczki głębokie</li> \r\n</ul>\r\n<br><br>\r\nDziała zbawiennie na skórę trądzikową:\r\n<br><br>\r\n<ul>\r\n<li>Zwęża pory skóry</li>\r\n<li>Reguluje pracę gruczołów łojowych</li>\r\n<li>Zmniejsza przetłuszczanie się skóry</li>\r\n</li>Redukuje tendencje do tworzenia się zaskórników i wyprysków</li>\r\n<br><br>\r\nCzęstotliwość wykonywania – raz w miesiącu, ilość w serii 3-5\r\n\r\n</ul>', NULL, '250 zł', '1h', 'zabiegi_specjalistyczne'),
(4, 'Peelingi chemiczne CHARM MEDI', 'peelingi_chemiczne_charm_medi', NULL, '<h4>Kwas Migdałowy</h4>\r\nDziała delikatnie keratolitycznie; zmniejsza rozszerzone pory;zapobiega powstawaniu zaskórników i stanów zapalnych; wykazuje działanie antybakteryjne i antyseptyczne; rozjaśnia przebarwienia różnego pochodzenia; redukuje blizny; wygładza drobne zmarszczki powstałe w wyniku fotostarzenia; reguluje odnowę komórkową ; stymuluje syntezę kolagenu i elastyny dzięki czemu skóra jest bardziej jędrna i elastyczna <br><br>\r\n<h4>Kwas Glikolowy</h4>\r\nPoprawia nawilżenie skóry; zmniejsza grubość warstwy rogowej co daje skórze gładkość, ładny kolor oraz redukuje płytkie zmarszczki; wygładza głębsze zmarszczki;  rozjaśnia przebarwienia<br><br>\r\n<h4>Kwas Salicylowy</h4>        Działa przeciwzapalnie i antyseptycznie; oczyszcza skórę z zaskórników; wyrównuje strukturę skóry; zwęża  ujścia gruczołów łojowych; zmniejsza wydzielanie sebum; zapobiega powstawaniu ognisk zapalnych;<br><br> \r\n<h4>Kwas Pirogronowy</h4>\r\nReguluje pracę gruczołów łojowych; eliminuje zaskórniki i zapobiega powstawaniu nowych; pobudza fibroblasty do produkcji włókien kolagenowych; spłyca zmarszczki; rozjaśnia plamy starcze<br><br>\r\n', NULL, '150 zł', '1h', 'zabiegi_specjalistyczne'),
(5, 'Peeling kawitacyjny z sonoforezą, mikromasażem', 'peeling_kawitacyjny_z_sonoforeza_mikromasazem', NULL, NULL, NULL, '120 zł', '', 'pielegnacja_twarzy'),
(6, 'Mikrodermabrazja diamentowa ', 'mikrodermabrazja', NULL, 'Zabieg mechanicznego złuszczania warstwy rogowej naskórka. Efektem jest rozjaśnienie, wygładzenie oraz ujędrnienie. Po zabiegu skóra jest idealnie przygotowana do dalszej kuracji kosmetykami . Mikrodermabrazja polecana jest do każdego typu skóry oprócz naczyniowej.', NULL, '120 zł', '', 'pielegnacja_twarzy'),
(7, 'Oczyszcanie manualne', 'oczyszczanie_manualne', NULL, 'Zabieg kosmetyczny, który składa z odpowiedniego przygotowania, rozpulchnienia skóry przed przystąpieniem do usuwania zaskórników następnie po oczyszczeniu skóry wykonuje się Darsonwalizację dzięki czemu skóra jest zdezynfekowana i pory zostają zwężone. Jest to w niektórych przypadkach jedyna  skuteczna metoda, by pozbyć się niedoskonałości.', NULL, '90 - 120 zł', '', 'pielegnacja_twarzy'),
(8, 'Zabieg TXC', 'zabieg_txc', NULL, 'Terapia na bazie witaminy C i kwasu traneksamowego – substancji  wykorzystywanej w medycynie, niwelującej przebarwienia różnego pochodzenia i podrażnienia oraz rumień skórny.  Kwas traneksamowy  rozjaśnia  różnego rodzaju przebarwienia a  przede wszystkim zapobiega powstawaniu nowych poprzez blokowanie wydzielania  i  kumulowania się melaniny. Działa łagodząco i przeciwzapalnie, nawilża oraz pozostawia skórę rozświetloną i pełną blasku.\r\n', NULL, '150 zł', '', 'pielegnacja_twarzy'),
(9, 'Water Box', 'water_box', NULL, 'Terapia na bazie kwasu hialuronowego  o różnej masie cząsteczkowej. Celem  zabiegu jest ochrona przed nadmierną utratą wody przez naskórek. Stymulacja produkcji ceramidów, które zwiększają szczelność i odporność skóry na czynniki zewnętrzne. Wygładzenie i opóżnienie procesów starzenia skóry.\r\n', NULL, '150 zł', '', 'pielegnacja_twarzy'),
(10, 'US AZA Acne', 'us_aza_acne', NULL, 'Zabieg zmniejsza trądzik zapalny, grudkowo-krostkowy oraz objawy trądziku różowatego. Hamuje rozwój mikroorganizmów powodujących trądzik i stany zapalne. \r\n', NULL, '130 zł', '', 'pielegnacja_twarzy'),
(11, 'Zabiegi z zastosowaniem masek algowych', 'zabiegi_z_zastosowaniem_masek_algowych', '', '<h4>Aktywne ceramidy</h4>\r\nZabieg dla skóry suchej i odwodnionej, wymagającej natychmiastowego nawilżenia\r\n<h4>Owoc dzikiej róży</h4> dla cery dojrzałej z mocno rozszerzonymi naczyniami krwionośnymi.\r\n<h4>Kaktus meksykański </h4>detoksykujący  zabieg dla cery tłustej i mieszanej.\r\n<h4>Kontrola wieku </h4>opóźniający procesy starzenia się zabieg dla cery z pierwszymi objawami starzenia.\r\n', NULL, '90 zł', '', 'pielegnacja_twarzy'),
(12, 'przedłużanie rzęs metodą 1/1', 'przedluzanie_rzes_metoda_1_1', NULL, '', NULL, '200 zł', '', 'zabiegi_upiekszajace'),
(13, 'makijaż', 'makijaz', NULL, '', NULL, '90 zł', '', 'zabiegi_upiekszajace'),
(14, 'regulacja brwi', 'regulacja_brwi', NULL, '', NULL, '15 zł', '', 'zabiegi_upiekszajace'),
(15, 'henna brwi z regulacją', 'henna_brwi_z_regulacja', NULL, '', NULL, '20 zł', '', 'zabiegi_upiekszajace'),
(16, 'henna rzęs i brwi + regulacja', 'henna_rzes_i_brwi_plus_regulacja', NULL, '', NULL, '30 zł', '', 'zabiegi_upiekszajace'),
(17, 'lifting i laminacja rzęs', 'lifting_i_laminacja_rzes', NULL, '', NULL, '60 zł', '', 'zabiegi_upiekszajace'),
(18, 'laminacja brwi', 'laminacja_brwi', NULL, '', NULL, '60 zł', '', 'zabiegi_upiekszajace'),
(19, 'przekłucie uszu', 'przeklucie_uszu', NULL, '', NULL, '50 zł', '', 'zabiegi_upiekszajace'),
(20, 'Wąsik', 'wasik', NULL, NULL, NULL, '100 zł', NULL, 'epilacja_laserowa'),
(21, 'Broda', 'broda', NULL, NULL, NULL, '130 zł', NULL, 'epilacja_laserowa'),
(22, 'Baki', 'baki', NULL, NULL, NULL, '130 zł', NULL, 'epilacja_laserowa'),
(23, 'Policzki', 'policzki', NULL, NULL, NULL, '130 zł', NULL, 'epilacja_laserowa'),
(24, 'Cała Twarz', 'cala_twarz', NULL, NULL, NULL, '300 zł', NULL, 'epilacja_laserowa'),
(25, 'Pachy', 'pachy', NULL, NULL, NULL, '150 zł', NULL, 'epilacja_laserowa'),
(26, 'Ręce', 'rece', NULL, NULL, NULL, '220 zł', NULL, 'epilacja_laserowa'),
(27, 'Bikini', 'bikini', NULL, NULL, NULL, '180 zł', NULL, 'epilacja_laserowa'),
(28, 'Bikini Całkowite', 'bikini_calkowite', NULL, NULL, NULL, '220 zł', NULL, 'epilacja_laserowa'),
(29, 'Pośladki', 'posladki', NULL, NULL, NULL, '180 zł', NULL, 'epilacja_laserowa'),
(30, 'Uda', 'uda', NULL, NULL, NULL, '250 zł', NULL, 'epilacja_laserowa'),
(31, 'Łydki', 'lydki', NULL, NULL, NULL, '220 zł', NULL, 'epilacja_laserowa'),
(32, 'Całe Nogi', 'cale_nogi', NULL, NULL, NULL, '400 zł', NULL, 'epilacja_laserowa'),
(33, 'łydki', 'w_lydki', NULL, NULL, NULL, '30 zł', NULL, 'depilacja_woskiem'),
(34, 'Całe nogi', 'w_cale_nogi', NULL, NULL, NULL, '60 zł', NULL, 'depilacja_woskiem'),
(35, 'bikini', 'w_bikini', NULL, NULL, NULL, '30 zł', NULL, 'depilacja_woskiem'),
(36, 'pachy', 'w_pachy', NULL, NULL, NULL, '25 zł', NULL, 'depilacja_woskiem'),
(37, 'ręce', 'w_rece', NULL, NULL, NULL, '30 zł', NULL, 'depilacja_woskiem'),
(38, 'wąsik', 'w_wasik', NULL, NULL, NULL, '15 zł', NULL, 'depilacja_woskiem'),
(39, 'broda', 'w_broda', NULL, NULL, NULL, '20 zł', NULL, 'depilacja_woskiem'),
(40, 'manicure klasyczny', 'manicure_klasyczny', NULL, NULL, NULL, '30 zł', NULL, 'manicure_pedicure'),
(41, 'manicure klasyczny + lakier / odżywka', 'manicure_klasyczny_lak_od', NULL, NULL, NULL, '35 zł', NULL, 'manicure_pedicure'),
(42, 'mani hybrydowy', 'mani_hybrydowy', NULL, NULL, NULL, '65 zł', NULL, 'manicure_pedicure'),
(43, 'mani hybr francuski', 'mani_hybr_francusk', NULL, NULL, NULL, '75 zł', NULL, 'manicure_pedicure'),
(44, 'pomalowanie hybrydą', 'pomalowanie_hybryda', NULL, NULL, NULL, '45 zł', NULL, 'manicure_pedicure'),
(45, 'usunięcie hybrydy', 'usuniecie_hybrydy', NULL, NULL, NULL, '20 zł', NULL, 'manicure_pedicure'),
(46, 'pedicure', 'pedicure', NULL, NULL, NULL, '55 zł', NULL, 'manicure_pedicure'),
(47, 'pedicure z malowaniem', 'pedi_z_malowaniem', NULL, NULL, NULL, '65 zł', NULL, 'manicure_pedicure'),
(48, 'pedicure hybrydowy', 'pedi_hybrydowy', NULL, NULL, NULL, '90 zł', NULL, 'manicure_pedicure'),
(49, 'korekta paznokci u stóp masą akrylową', 'korekta_paznokci', NULL, NULL, NULL, '70 zł', NULL, 'manicure_pedicure'),
(50, 'Przedłużenie paznokci', 'przedluzenie_paznokci', NULL, NULL, NULL, '90 zł', NULL, 'stylizacja_paznokci'),
(51, 'przedłużenie paznokci +hybryda', 'przedluzenie_paznokci_hybryda', NULL, NULL, NULL, '130 zł', NULL, 'stylizacja_paznokci'),
(52, 'uzupełnienie', 'uzupelnienie', NULL, NULL, NULL, '50 zł', NULL, 'stylizacja_paznokci'),
(53, 'uzupełnienie + hybryda', 'uzupelnienie_hybryda', NULL, NULL, NULL, '85 zł', NULL, 'stylizacja_paznokci'),
(54, 'opiłowanie', 'opilowanie', NULL, NULL, NULL, '40 zł', NULL, 'stylizacja_paznokci'),
(55, 'opiłowanie + hybryda', 'opilowanie_hybryda', NULL, NULL, NULL, '65 zł', NULL, 'stylizacja_paznokci'),
(56, 'usunięcie akrylu', 'usuniecie_akrylu', NULL, NULL, NULL, '40 zł', NULL, 'stylizacja_paznokci'),
(57, 'zdobienie', 'zdobienie', NULL, NULL, NULL, 'od 10 zł', NULL, 'stylizacja_paznokci'),
(58, 'uzupełnienie rzęs', 'uzupelnienie_rzes', NULL, NULL, NULL, '100 zł', NULL, 'zabiegi_upiekszajace'),
(59, 'Ferul-F-Peel', 'ferul-f-peel', NULL, 'To antyoksydacyjny program dla skóry dojrzałej z kompleksem kwasów AHA, kwasem Ferulowym i szikimowym.  Zabieg poprawia koloryt skóry, redukuje drobne zmarszczki, wzmacnia barierę hydrolipidową naskórka, stymuluje odnowę komórkową, neutralizuje wolne rodniki oraz pobudza syntezę kolagenu i elastyny. ', NULL, '170 zł', '1h', 'zabiegi_specjalistyczne'),
(60, 'Henna pudrowa', 'henna_pudrowa', NULL, NULL, NULL, '70 zł', NULL, 'zabiegi_upiekszajace');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
