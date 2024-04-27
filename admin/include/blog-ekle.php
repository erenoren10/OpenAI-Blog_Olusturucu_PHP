<?php
$title = "Ekle";

if ($_GET['islem'] == 'duzenle') {
    $title = "Düzenle";
    $guncelle = $VT->baglanti->query("select * from bloglar where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
}


?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
if ($_GET["durum"] == 'Basarili') {
    ?>
    <script>
        Swal.fire({
            position: 'top',
            icon: 'success',
            title: 'İşleminiz Başarıyla Kaydedildi',
            showConfirmButton: false,
            timer: 1500
        })

    </script>
<?php } else if ($_GET["durum"] == 'Hata') { ?>
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'Hata, işlem yapılamadı!',
                showConfirmButton: false,
                timer: 1500
            })

        </script>
<?php } ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">&nbsp; + Blog
                        <?= $title ?>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active"> Blog
                            <?= $title ?>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <?php
            if ($_POST) {

                if (!empty($_POST["adi"]) && !empty($_POST["etiket"]) && !empty($_POST["sira"])) {

                    if (isset($_POST['blog-ekle'])) {

                        function seflink($string)
                        {
                            $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
                            $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
                            $string = strtolower(str_replace($find, $replace, $string));
                            $string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
                            $string = trim(preg_replace('/\s+/', ' ', $string));
                            $string = str_replace(' ', '-', $string);
                            return $string;
                        }

                        $seo = seflink($_POST['adi']);


                        $tur = "Bloglar";


                        if (!empty($_FILES["resim"]["name"])) {
                            $yukle = $VT->upload("resim", "../images/bloglar/");
                            if ($yukle != false) {
                                $ekle = $VT->SorguCalistir("INSERT INTO bloglar", "SET kategori=?, sira=?, adi=?,onaciklama=?,title=?,resim=?,etiket=?, seo=?, durum=?, tur=?, eklenme_tarihi=?", array($_POST['kategori'], $_POST['sira'], $_POST['adi'], $_POST["onaciklama"], $_POST["title"], $yukle, $_POST["etiket"], $seo, 1, $tur, date("Y-m-d")));
                                if ($ekle) {
                                    header('location:' . $_POST['link'] . '?durum=Basarili');
                                } else {
                                    header('location:' . $_POST['link'] . '?durum=Hata');
                                }
                            } else {
                                ?>
                                <div class="alert alert-info">Resim yükleme işleminiz başarısız.</div>
                                <?php
                            }
                        } else {
                            $ekle = $VT->SorguCalistir("INSERT INTO bloglar", "SET kategori=?, sira=?, adi=?,onaciklama=?,title=?,etiket=?, seo=?, durum=?, tur=?, eklenme_tarihi=?", array($_POST['kategori'], $_POST['sira'], $_POST['adi'], $_POST["onaciklama"], $_POST["title"], $_POST["etiket"], $seo, 1, $tur, date("Y-m-d")));
                            if ($ekle) {
                                header('location:' . $_POST['link'] . '?durum=Basarili');
                            } else {
                                header('location:' . $_POST['link'] . '?durum=Hata');
                            }
                        }

                        if ($ekle != false) {
                            ?>
                            <div class="alert alert-success">İşleminiz başarıyla kaydedildi.</div>
                            <?php
                        } else {
                            ?>
                            <div class="alert alert-danger">İşleminiz sırasında bir sorunla karşılaşıldı. Lütfen daha sonra tekrar
                                deneyiniz.
                            </div>
                            <?php
                        }

                        /*$ekle = $VT->SorguCalistir("INSERT INTO bloglar", "SET kategori=?, sira=?, adi=?,aciklama=?, title=?,etiket=?, seo=?,  resim=?, durum=?, tur=?, eklenme_tarihi=?", array($_POST['kategori'], $_POST['sira'], $_POST['adi'], $_POST["description"], $_POST["title"], $_POST["etiket"], $seo, $resim, 1, $tur, date("Y-m-d")));
                        if ($ekle) {
                            header('location:' . $_POST['link'] . '?durum=Basarili');
                        } else {
                            header('location:' . $_POST['link'] . '?durum=Hata');
                        }*/


                    }

                    if (isset($_POST['blog-guncelle'])) {

                        function seflink($string)
                        {
                            $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
                            $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
                            $string = strtolower(str_replace($find, $replace, $string));
                            $string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
                            $string = trim(preg_replace('/\s+/', ' ', $string));
                            $string = str_replace(' ', '-', $string);
                            return $string;
                        }
                        $seo = seflink($_POST['adi']);

                        $tur = "Bloglar";



                        $id = $_POST['id'];

                        if (!empty($_FILES["resim"]["name"])) {
                            $yukle = $VT->upload("resim", "../images/bloglar/");
                            if ($yukle != false) {
                                $ekle = $VT->SorguCalistir("UPDATE bloglar", "SET kategori=?, sira=?, adi=?,onaciklama=?,title=?,resim=?,etiket=?, seo=?, durum=?, tur=?, guncelleme_tarihi=? WHERE id=?", array($_POST['kategori'], $_POST['sira'], $_POST['adi'], $_POST["onaciklama"], $_POST["title"], $yukle, $_POST["etiket"], $seo, 1, $tur, date("Y-m-d"), $id));
                                if ($ekle) {
                                    header('location:' . $_POST['link'] . '&durum=Basarili');
                                } else {
                                    header('location:' . $_POST['link'] . '&durum=Hata');
                                }
                            } else {
                                ?>
                                <div class="alert alert-info">Resim yükleme işleminiz başarısız.</div>
                                <?php
                            }
                        } else {
                            $ekle = $VT->SorguCalistir("UPDATE bloglar", "SET kategori=?, sira=?, adi=?,onaciklama=?,title=?,etiket=?, seo=?, durum=?, tur=?, guncelleme_tarihi=? WHERE id=?", array($_POST['kategori'], $_POST['sira'], $_POST['adi'], $_POST["onaciklama"], $_POST["title"], $_POST["etiket"], $seo, 1, $tur, date("Y-m-d"), $id));
                            if ($ekle) {
                                header('location:' . $_POST['link'] . '&durum=Basarili');
                            } else {
                                header('location:' . $_POST['link'] . '&durum=Hata');
                            }
                        }

                        if ($ekle != false) {
                            $veri = $VT->VeriGetir("bloglar", "WHERE ID=?", array($id), "ORDER BY ID ASC", 1);
                            ?>
                            <div class="alert alert-success">İşleminiz başarıyla kaydedildi.</div>
                            <?php
                        } else {
                            ?>
                            <div class="alert alert-danger">İşleminiz sırasında bir sorunla karşılaşıldı. Lütfen daha sonra tekrar
                                deneyiniz.
                            </div>
                            <?php
                        }


                        /*$ekle = $VT->SorguCalistir("UPDATE blog_kategori", "SET kategori=?, sira=?, adi=?,aciklama=?, title=?,etiket=?, seo=?,  resim=?, durum=?, tur=?, eklenme_tarihi=?", array($_POST['kategori'], $_POST['sira'], $_POST['adi'], $_POST["description"], $_POST["title"], $_POST["etiket"], $seo, $resim, 1, $tur, date("Y-m-d")));
                        if ($ekle1) {
                            header('location:' . $_POST['link'] . '&durum=Basarili');
                        } else {
                            header('location:' . $_POST['link'] . '&durum=Hata');
                        }*/
                    }
                } else {
                    ?>
                    <div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>
                    <?php
                }
            }

            ?>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="card-body card card-primary">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kategori Seç</label>
                                    <select class="form-control select2" style="width: 100%;" name="kategori">
                                        <?php
                                        $c = $VT->baglanti->query("select * from blog_kategori order by id desc")->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($c as $g) {
                                            ?>
                                            <option value="<?= $g["id"] ?>" <?php if ($g["id"] == $guncelle["kategori"]) {
                                                  echo "selected";
                                              } ?>>
                                                <?= $g["adi"] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Blog Adı</label>
                                    <input type="text" class="form-control" placeholder="Blog Adı ..." name="adi"
                                        value="<?= $guncelle["adi"] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Blog Başlık</label>
                                    <input type="text" class="form-control" placeholder="Blog Adı ..." name="title"
                                        value="<?= $guncelle["title"] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ön Açıklama</label>
                                    <textarea class="textarea" placeholder="Açıklama alanıdır." name="onaciklama"
                                        style="width: 100%; height: 350px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $guncelle["onaciklama"] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Resim</label> 
                                    <input type="file" class="form-control" placeholder="Resim Seçiniz ..."
                                        name="resim">
                                    <div class="image-uploads">
                                        <?php if ($_GET['islem'] == 'duzenle') { ?>
                                            <img src="../resimler/<?= $guncelle["resim"] ?>" width="50">
                                            <h4>Buradan Resmi Değiştirebilirsiniz</h4>
                                        <?php } else { ?>
                                            <img src="assets/img/icons/upload.svg">
                                            <h4>Buradan Resim Ekleyebilirsiniz </h4>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="col-md-12">
                                <div class="form-group">
                                    <label>Günlük Kaç Makale Yayınlansın?</label>
                                    <input type="number" class="form-control" name="dailyArticleCount">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Makaleler Kaç Dakikada Bir Yayınlansın?</label>
                                    <input type="number" class="form-control" name="publishİnterval">
                                </div>
                            </div>-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Blog Sıra</label>
                                    <input type="text" class="form-control" placeholder="Blog Sıra ..." name="sira"
                                        value="<?= $guncelle["sira"] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Blog Anahtar</label>
                                    <input type="text" class="form-control" placeholder="Blog Anahtar (Kelimelerin aralarına virgül koyunuz!)..." name="etiket"
                                        value="<?= $guncelle["etiket"] ?>">
                                </div>
                            </div>
                            <?php if ($_GET['islem'] == 'duzenle') { ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Blog Makale</label>
                                    <textarea class="form-control" style="resize: vertical;height: 500px;" readonly><?= $guncelle["aciklama"] ?? "Makale Yazılmamış" ?></textarea>
                                </div>
                            </div>
                            <?php }?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Başlık Sonuna Ekle</label>
                                    <textarea type="text" class="form-control" cols="10" rows="3"
                                        name="publishİnterval"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Makale Sonuna Ekle</label>
                                    <textarea type="text" class="form-control" cols="10" rows="3"
                                        name="publishİnterval"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php if ($_GET['islem'] == 'duzenle') { ?>
                                        <input type="hidden" name="id" value="<?= $guncelle["id"] ?>">
                                        <input type="hidden" name="link" value="<?= $_SERVER["REQUEST_URI"] ?>">
                                        <button type="submit" class="btn btn-block btn-primary" name="blog-guncelle">Blog
                                            Güncelle</button>
                                    <?php } else { ?>
                                        <input type="hidden" name="link" value="<?= $_SERVER["REQUEST_URI"] ?>">
                                        <button type="submit" class="btn btn-block btn-primary" name="blog-ekle">Blog
                                            Ekle</button>
                                    <?php } ?>
                                </div>
                            </div>

                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </form>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

