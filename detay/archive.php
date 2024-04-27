<!--=====================================-->
<!--=          Contact Area Start       =-->
<!--=====================================-->

<?php 

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


if ($currentpage > 1) {
    $prevPage = $currentpage - 1;
    $pageLinks .= '<li><a href="?page=' . $prevPage . '">Prev</a></li>';
} else {
    $pageLinks .= '<li class="disabled">Prev</li>';
}


if ($currentpage > 2) {
    $pageLinks .= '<li><a href="?page=1">1</a></li>';
    if ($currentpage > 3) {
        $pageLinks .= '<li class="disabled">...</li>';
    }
}


for ($i = max(1, $currentpage - 2); $i <= min($currentpage + 2, $totalPages); $i++) {
    $isActive = ($currentpage == $i) ? 'selected' : '';
    $pageLinks .= '<li class="' . $isActive . '"><a href="?page=' . $i . '">' . $i . '</a></li>';
}


if ($currentpage < $totalPages) {
    if ($currentpage < $totalPages - 2) {
        $pageLinks .= '<li class="disabled">...</li>';
    }
    $pageLinks .= '<li><a href="?page=' . $totalPages . '">' . $totalPages . '</a></li>';
}


if ($currentpage < $totalPages) {
    $nextPage = $currentpage + 1;
    $pageLinks .= '<li><a href="?page=' . $nextPage . '">Next</a></li>';
} else {
    $pageLinks .= '<li class="disabled">Next</li>';
}

$pageLinks .= '</ul></div>';
?>

<section class="archive-wrap-layout-1 space-top-60 bg-color-light-1 transition-default">
    <div class="container">
        <div class="row g-3 justify-content-center">
            <div class="col-xl-8 col-lg-9 col-sm-10 col-12">
                <?php 
                foreach ($result as $blog) {
                    ?>

                    <div class="post-box-layout19 figure-scale-animation">
                        <ul class="entry-meta color-dark-1">
                            <li class="post-author">
                                <a href="author.php">
                                    <img src="assets/media/blog/profile2.webp" alt="Author">
                                    Admin
                                </a>
                            </li>
                            <li>
                                <i class="regular-calendar"></i><?= $blog["eklenme_tarihi"]?>
                            </li>
                        </ul>
                        <h3 class="entry-title h3-extra-large color-dark-1 underline-animation"><a
                                href="<?= $blog["seo"]?>" class="link-wrap"><?= $blog["title"]?></a>
                        </h3>
                        <div class="figure-holder radius-medium box-border-dark-1">
                            <a href="<?= $blog["seo"]?>" class="link-wrap img-height-100"><img width="810" height="440"
                                    src="images/bloglar/<?= $blog["resim"]?>" alt="Post"></a>
                        </div>
                        <p class="entry-description color-dark-1"><?= mb_substr(strip_tags(stripslashes($blog["aciklama"])), 0, 230, "UTF-8"); echo "..."; ?></p>
                        <div class="post-footer">
                            <div class="axil-social social-layout-1 size-small gap-12">
                                <ul>
                                    <li class="facebook">
                                        <a aria-label="Learn more from Facebook" href="https://facebook.com/">
                                            <i class="solid-facebook2"></i>
                                        </a>
                                    </li>
                                    <li class="mail-fast">
                                        <a aria-label="Learn more from Mail fast" href="https://mail-fast.com/">
                                            <i class="regular-mail-fast"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a aria-label="Learn more from Pinterest" href="https://pinterest.com/">
                                            <i class="solid-pinterest-01"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?= $blog["seo"]?>" class="btn-text color-dark-1">Continue Reading<span
                                    class="icon-holder"><i class="regular-arrow-right"></i></span></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php echo $pageLinks ; ?>
    </div>
</section>