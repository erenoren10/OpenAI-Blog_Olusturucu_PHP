<?php 
$kat_isim_cek = $baglan->VeriGetir("blog_kategori","WHERE id=?",array($bloglar["kategori"]),"ORDER BY ID ASC",1);


?>
<section class="space-top-60 space-bottom-60 single-blog-wrap1 bg-color-light-1 transition-default">
    <div class="container">
        <div class="row sticky-coloum-wrap">
            <div class="col-lg-8 sticky-coloum-item">
                <div class="single-blog-content content-layout1 pe-lg-4">
                    <div class="entry-category style-2 color-dark-1">
                        <ul>
                            <li>
                                <a href="archive-layout1.php"><?= $kat_isim_cek[0]["adi"] ?></a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="entry-title color-dark-1"><?= $bloglar["title"]?></h1>
                    <ul class="entry-meta color-dark-1">
                        <li class="post-author">
                            by
                            <a href="author.php">
                                Admin
                            </a>
                        </li>
                        <li>
                            <i class="regular-calendar-01"></i><?= $bloglar["eklenme_tarihi"]?>
                        </li>
                        <!--<li>
                            <i class="regular-clock-circle"></i>9 min read
                        </li>
                        <li>
                            <i class="regular-eye"></i>9k
                        </li>
                        <li>
                            <i class="regular-chatting"></i>2 Comments
                        </li>-->
                    </ul>
                    <div class="axil-social social-layout-1 size-small gap-12">
                        <ul>
                            <li class="facebook">
                                <a aria-label="Learn more from Facebook" href="https://facebook.com/">
                                    <i class="solid-facebook2"></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a aria-label="Learn more from Instagram" href="https://instagram.com/">
                                    <i class="regular-instagram"></i>
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
                            <li class="youtube">
                                <a aria-label="Learn more from Youtube" href="https://youtube.com/">
                                    <i class="solid-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-4 box-border-dark-1 radius-default transition-default">
                        <div class="figure-holder img-height-100 radius-medium">
                            <img width="810" height="490" src="images/bloglar/<?= $bloglar["resim"]?>" alt="Post">
                        </div>
                    </div>
                    <?=$bloglar["aciklama"]?>
                    <div class="tag-share-wrap">
                        <div class="tagcloud-wrap">
                            <h4 class="mb-2 h4-small">Tags:</h4>
                            <div class="tagcloud">
                                <?php $etiket = explode(",",$bloglar["etiket"]);
                                        foreach($etiket as $deger){
                                        ?>
                                <a href="archive-layout1.php" class="tag-cloud-link">
                                    <span class="icon-holder">
                                    </span><?=$deger?>
                                </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="share-wrap">
                            <h4 class="mb-2 h4-small">Share:</h4>
                            <div class="axil-social social-layout-1 size-large gap-12">
                                <ul>
                                    <li class="facebook">
                                        <a aria-label="Learn more from Facebook" href="https://facebook.com/">
                                            <i class="solid-facebook2"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a aria-label="Learn more from Instagram" href="https://instagram.com/">
                                            <i class="regular-instagram"></i>
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
                                    <li class="youtube">
                                        <a aria-label="Learn more from Youtube" href="https://youtube.com/">
                                            <i class="solid-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="author-wrap bg-color-mimosa">
                        <div class="author-thumb img-height-100">
                            <img width="178" height="178" src="assets/media/blog/author.webp" alt="Author Figure">
                        </div>
                        <div class="author-content">
                            <h4 class="entry-title color-dark-1-fixed">Georges Embolo</h4>
                            <div class="author-designation">Lead Designer</div>
                            <p class="entry-description color-dark-1-fixed">While the law might seem obvious, designers
                                often engage in creative work where they try to reinvent the wheel for the sake of
                                novelty.</p>
                            <div class="axil-social social-layout-2 color-dark-1-fixed size-medium gap-12">
                                <ul>
                                    <li class="pinterest">
                                        <a aria-label="Learn more from Pinterest" href="https://pinterest.com/">
                                            <i class="regular-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a aria-label="Learn more from Instagram" href="https://instagram.com/">
                                            <i class="regular-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a aria-label="Learn more from Twitter" href="https://twitter.com/">
                                            <i class="regular-tweeter"></i>
                                        </a>
                                    </li>
                                    <li class="mail-fast">
                                        <a aria-label="Learn more from Mail Fast" href="https://mail-fast.com/">
                                            <i class="regular-mail-fast"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post-navigation">
                        <div class="post-box prev-post">
                            <div class="figure-holder">
                                <a href="post-format-default.php" class="link-wrap img-height-100"><img width="540"
                                        height="540" src="assets/media/blog/post60.webp" alt="Post"></a>
                            </div>
                            <div class="content-holder">
                                <a href="post-format-default.php" class="text-box prev-text">
                                    <div class="icon-holder"><i class="regular-arrow-left"></i></div>Previous Post
                                </a>
                                <h3 class="entry-title h3-small color-dark-1 underline-animation"><a
                                        href="post-format-default.php" class="link-wrap">Underwater Exercise Is Used
                                        Strengthen Weak Muscles</a></h3>
                            </div>
                        </div>
                        <div class="post-box next-post">
                            <div class="figure-holder">
                                <a href="post-format-default.php" class="link-wrap img-height-100"><img width="540"
                                        height="540" src="assets/media/blog/post61.webp" alt="Post"></a>
                            </div>
                            <div class="content-holder">
                                <a href="post-format-default.php" class="text-box next-text">Next Post<div
                                        class="icon-holder"><i class="regular-arrow-right"></i></div></a>
                                <h3 class="entry-title h3-small color-dark-1 underline-animation"><a
                                        href="post-format-default.php" class="link-wrap">The Science Skin-car A Long Way
                                        But There’s Still</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="post-comment">
                        <div class="section-heading heading-style-7">
                            <h3 class="title h3-regular">7 Comments</h3>
                        </div>
                        <ul class="comment-list">
                            <li>
                                <div class="each-comment">
                                    <div class="comment-figure img-height-100">
                                        <img width="500" height="500" src="assets/media/blog/post17.webp" alt="Comment">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="comment-title">Naiska Haack</h4>
                                        <div class="comment-meta"><span class="post-date">Oct 10, 2022</span></div>
                                        <p class="comment-comment">Creative work where they try to reinvent the wheel
                                            for the sake of novelty, we as designers are tasked with providing clients
                                            and users with new and inventive solutions.</p>
                                        <a href="#" class="item-btn">Reply</a>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li>
                                        <div class="each-comment">
                                            <div class="comment-figure img-height-100">
                                                <img width="500" height="500" src="assets/media/blog/post18.webp"
                                                    alt="Comment">
                                            </div>
                                            <div class="comment-content">
                                                <h4 class="comment-title">Simmy Mack</h4>
                                                <div class="comment-meta"><span class="post-date">Oct 10, 2022</span>
                                                </div>
                                                <p class="comment-comment">Creative work where they try to reinvent the
                                                    wheel for the sake of novelty, we as designers are tasked with
                                                    providing clients and users with new and inventive solutions.</p>
                                                <a href="#" class="item-btn">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="each-comment">
                                    <div class="comment-figure img-height-100">
                                        <img width="500" height="500" src="assets/media/blog/post19.webp" alt="Comment">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="comment-title">Arlene McCoy</h4>
                                        <div class="comment-meta"><span class="post-date">Oct 10, 2022</span></div>
                                        <p class="comment-comment">Creative work where they try to reinvent the wheel
                                            for the sake of novelty, we as designers are tasked with providing clients
                                            and users with new and inventive solutions.</p>
                                        <a href="#" class="item-btn">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="leave-comment">
                        <div class="section-heading heading-style-7">
                            <h3 class="title h3-regular">Post A Comment</h3>
                        </div>
                        <p class="mb-4">Your email address will not be published. Required fields are marked *</p>
                        <form class="leave-form-box">
                            <div class="row g-2">
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name" id="name"
                                        data-error="Name field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" placeholder="Your E-mail*" class="form-control" name="email"
                                        id="leave-email" data-error="E-mail field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="checkbox" id="show-message" name="show-message" value="Bike">
                                    <label class="show-message-label" for="show-message">Don’t show this message
                                        again</label>
                                </div>
                                <div class="col-12 form-group">
                                    <div class="section-heading heading-style-7">
                                        <h3 class="title h3-regular">Leave a Reply</h3>
                                    </div>
                                    <textarea class="textarea form-control" placeholder="Message" name="message"
                                        id="leave-message" rows="5" cols="20" data-error="Message field is required"
                                        required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group mt-2">
                                    <button type="submit" data-toggle="modal" data-target="#exampleModalCenter"
                                        class="axil-btn axil-btn-fill btn-color-alter axil-btn-large"><span><span>Post
                                                Comment</span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sticky-coloum-item">
                <div class="sidebar-global sidebar-layout4">
                    <div class="sidebar-widget">
                        <div class="widget-banner banner-layout1">
                            <div class="radius-default box-border-dark-1 img-height-100">
                                <div class="figure-holder radius-medium">
                                    <img width="700" height="294" src="assets/media/banner/banner2.webp" alt="Banner">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="sidebar-widget">
                        <div class="widget-search search-layout1 radius-default padding-40 box-border-dark-1">
                            <h3 class="title h3-medium">Search</h3>
                            <p class="description">Type here & press enter</p>
                            <form>
                                <button aria-label="Search" type="button" class="icon-holder"><i
                                        class="regular-search-02"></i></button>
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>



                    <div class="sidebar-widget">
                        <div class="section-heading heading-style-6">
                            <h3 class="title">Explore Topics</h3>
                        </div>
                        <div class="widget-category category-layout1 bg-color-tidal radius-default box-border-dark-1">
                            <ul class="category-list">
                                <li>
                                    <a href="archive-layout1.php">Culture</a>(2)
                                </li>
                                <li>
                                    <a href="archive-layout1.php">Travel</a>(1)
                                </li>
                                <li>
                                    <a href="archive-layout1.php">Business</a>(5)
                                </li>
                                <li>
                                    <a href="archive-layout1.php">Trending</a>(4)
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="sidebar-widget">
                        <div class="section-heading heading-style-6">
                            <h3 class="title">Short Stories</h3>
                        </div>
                        <div class="widget-post post-layout1">
                            <div class="post-box">
                                <div class="figure-holder radius-default">
                                    <a href="post-format-default.php"
                                        class="link-wrap figure-overlay img-height-100"><img width="700" height="470"
                                            src="assets/media/blog/post23.webp" alt="Post"></a>
                                </div>
                                <div class="content-holder">
                                    <h3 class="entry-title color-light-1-fixed h3-small underline-animation"><a
                                            href="post-format-default.php" class="link-wrap">Top 5 Street Tacos In Usa
                                            Top 5 Street Tacos
                                            In Usa</a></h3>
                                    <ul class="entry-meta color-light-1-fixed">
                                        <li>
                                            <i class="regular-clock-circle"></i>2 min read
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-box">
                                <div class="figure-holder radius-default">
                                    <a href="post-format-default.php"
                                        class="link-wrap figure-overlay img-height-100"><img width="140" height="140"
                                            src="assets/media/blog/post14.webp" alt="Post"></a>
                                </div>
                                <div class="content-holder">
                                    <h3 class="entry-title color-dark-1 underline-animation h3-extra-small"><a
                                            href="post-format-default.php" class="link-wrap">Smarter Food 101 Tips For
                                            Your Health</a></h3>
                                    <ul class="entry-meta color-dark-1">
                                        <li>
                                            <i class="regular-clock-circle"></i>2 min read
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-box">
                                <div class="figure-holder radius-default">
                                    <a href="post-format-default.php"
                                        class="link-wrap figure-overlay img-height-100"><img width="140" height="140"
                                            src="assets/media/blog/post15.webp" alt="Post"></a>
                                </div>
                                <div class="content-holder">
                                    <h3 class="entry-title color-dark-1 underline-animation h3-extra-small"><a
                                            href="post-format-default.php" class="link-wrap">Virtual Reality (VR), The
                                            Use Computer
                                            Modeling</a></h3>
                                    <ul class="entry-meta color-dark-1">
                                        <li>
                                            <i class="regular-clock-circle"></i>8 min read
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-box">
                                <div class="figure-holder radius-default">
                                    <a href="post-format-default.php"
                                        class="link-wrap figure-overlay img-height-100"><img width="140" height="140"
                                            src="assets/media/blog/post16.webp" alt="Post"></a>
                                </div>
                                <div class="content-holder">
                                    <h3 class="entry-title color-dark-1 underline-animation h3-extra-small"><a
                                            href="post-format-default.php" class="link-wrap">Reality Hosting, The Use
                                            Computer Modeling</a>
                                    </h3>
                                    <ul class="entry-meta color-dark-1">
                                        <li>
                                            <i class="regular-clock-circle"></i>5 min read
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="widget-banner banner-layout2">
                            <div class="figure-holder radius-default box-border-dark-1">
                                <a href="#" class="link-wrap img-height-100"><img width="700" height="772"
                                        src="assets/media/banner/banner3.webp" alt="Banner"></a>
                            </div>
                        </div>
                    </div>





                    <div class="sidebar-widget">
                        <div class="widget-newsletter newsletter-layout1 box-border-dark-1">
                            <h2 class="title">NEWSLETTER THAT MAKES YOU HUNGRY!</h2>
                            <div class="sub-title">Sign Up for free</div>
                            <form action="#" class="newsletter-form">
                                <input type="email" class="email-input" placeholder="Email Address">
                                <button type="submit"
                                    class="axil-btn axil-btn-fill axil-btn-dark-fixed w-100 axil-btn-bold">
                                    Subscribe<i class="solid-navigation"></i>
                                </button>
                            </form>
                        </div>
                    </div>



                    <div class="sidebar-widget">
                        <div class="section-heading heading-style-6">
                            <h3 class="title">Recommended topics</h3>
                        </div>
                        <div class="widget-tagcloud tagcloud-layout4">
                            <a href="archive-layout1.php"
                                class="tag-cloud-link box-shadow-small shadow-style-2 box-border-dark-1">
                                <span class="icon-holder">
                                    <i class="regular-medical-service"></i>
                                </span>Healthcare
                            </a>
                            <a href="archive-layout1.php"
                                class="tag-cloud-link box-shadow-small shadow-style-2 box-border-dark-1">
                                <span class="icon-holder">
                                    <i class="regular-shopping-basket2"></i>
                                </span>Fashion
                            </a>
                            <a href="archive-layout1.php"
                                class="tag-cloud-link box-shadow-small shadow-style-2 box-border-dark-1">
                                <span class="icon-holder">
                                    <i class="solid-interactive"></i>
                                </span>History
                            </a>
                            <a href="archive-layout1.php"
                                class="tag-cloud-link box-shadow-small shadow-style-2 box-border-dark-1">
                                <span class="icon-holder">
                                    <i class="regular-graduation-cap1"></i>
                                </span>Education
                            </a>
                            <a href="archive-layout1.php"
                                class="tag-cloud-link box-shadow-small shadow-style-2 box-border-dark-1">
                                <span class="icon-holder">
                                    <i class="regular-globe-stand"></i>
                                </span>World
                            </a>
                            <a href="archive-layout1.php"
                                class="tag-cloud-link box-shadow-small shadow-style-2 box-border-dark-1">
                                <span class="icon-holder">
                                    <i class="solid-interactive"></i>
                                </span>History
                            </a>
                            <a href="archive-layout1.php"
                                class="tag-cloud-link box-shadow-small shadow-style-2 box-border-dark-1">
                                <span class="icon-holder">
                                    <i class="regular-graduation-cap1"></i>
                                </span>Education
                            </a>
                            <a href="archive-layout1.php"
                                class="tag-cloud-link box-shadow-small shadow-style-2 box-border-dark-1">
                                <span class="icon-holder">
                                    <i class="solid-interactive"></i>
                                </span>History
                            </a>
                            <a href="archive-layout1.php"
                                class="tag-cloud-link box-shadow-small shadow-style-2 box-border-dark-1">
                                <span class="icon-holder">
                                    <i class="regular-shopping-basket2"></i>
                                </span>Fashion
                            </a>
                        </div>
                    </div>



                    <div class="sidebar-widget">
                        <div class="widget-follow follow-layout1 radius-default padding-40 box-border-dark-1">
                            <h3 class="title h3-medium">Follow Us</h3>
                            <p class="description">Follow us on Social Network</p>
                            <div class="axil-social social-layout-1 size-small gap-12 justify-content-center">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://facebook.com/" aria-label="Learn more from Facebook">
                                            <i class="solid-facebook2"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://instagram.com/" aria-label="Learn more from Instagram">
                                            <i class="regular-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="mail-fast">
                                        <a aria-label="Learn more from Mail fast" href="https://mail-fast.com/">
                                            <i class="regular-mail-fast"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="https://pinterest.com/" aria-label="Learn more from Pinterest">
                                            <i class="solid-pinterest-01"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://youtube.com/" aria-label="Learn more from Youtube">
                                            <i class="solid-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>



            </div>
        </div>
    </div>
</section>