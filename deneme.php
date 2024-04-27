<?php

include("admin/class/VT.php");

$sql = "SELECT COUNT(*) as total FROM bloglar WHERE durum = 1";
$result = $baglan->baglanti->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$totalItems = $row['total'];

$itemsPerPage = 5;


$currentpage = isset($_GET['page']) ? $_GET['page'] : 1;


$totalPages = ceil($totalItems / $itemsPerPage);


$startIndex = ($currentpage - 1) * $itemsPerPage;


$sql = "SELECT * FROM bloglar WHERE durum=1 LIMIT $startIndex, $itemsPerPage";
$result = $baglan->baglanti->query($sql);

$pageLinks = '<div class="template-pagination pagination-center"><ul>';

// Önceki sayfa bağlantısı
if ($currentpage > 1) {
    $prevPage = $currentpage - 1;
    $pageLinks .= '<li><a href="?page=' . $prevPage . '">Prev</a></li>';
} else {
    $pageLinks .= '<li class="disabled">Prev</li>';
}

// İlk sayfa bağlantısı
if ($currentpage > 2) {
    $pageLinks .= '<li><a href="?page=1">1</a></li>';
    if ($currentpage > 3) {
        $pageLinks .= '<li class="disabled">...</li>';
    }
}

// Aralık bağlantıları
for ($i = max(1, $currentpage - 2); $i <= min($currentpage + 2, $totalPages); $i++) {
    $isActive = ($currentpage == $i) ? 'selected' : '';
    $pageLinks .= '<li class="' . $isActive . '"><a href="?page=' . $i . '">' . $i . '</a></li>';
}

// Son sayfa bağlantısı
if ($currentpage < $totalPages) {
    if ($currentpage < $totalPages - 2) {
        $pageLinks .= '<li class="disabled">...</li>';
    }
    $pageLinks .= '<li><a href="?page=' . $totalPages . '">' . $totalPages . '</a></li>';
}

// Sonraki sayfa bağlantısı
if ($currentpage < $totalPages) {
    $nextPage = $currentpage + 1;
    $pageLinks .= '<li><a href="?page=' . $nextPage . '">Next</a></li>';
} else {
    $pageLinks .= '<li class="disabled">Next</li>';
}

$pageLinks .= '</ul></div>';




// Sayfalama sonuçlarını göster
echo '<h1>Sayfalama Örneği</h1>';
echo '<div>Sayfa ' . $currentpage . ' / ' . $totalPages . '</div>';
echo '<ul>';
foreach ($result as $row) {
    echo '<li>' . $row['adi'] . '</li>';
}
echo '</ul>';
echo '<div class="pagination">' . $pageLinks . '</div>';


?>

<link rel="stylesheet" href="assets/css/fonts/icomoon.css">
    <link rel="stylesheet" href="assets/css/vendor/slick/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">


    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">
