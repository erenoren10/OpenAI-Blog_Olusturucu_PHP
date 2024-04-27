
<?php
$title = "Ekle";

if ($_GET['islem'] == 'duzenle') {
    $title = "Düzenle";
    $guncelle = $VT->baglanti->query("select * from blog_kategori where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
}


?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
if($_GET["durum"]=='Basarili'){
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
<?php } else if($_GET["durum"]=='Hata') {?>
<script>
   Swal.fire({
  position: 'top',
  icon: 'error',
  title: 'Hata, işlem yapılamadı!',
  showConfirmButton: false,
  timer: 1500
})

</script>
<?php }?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Kategori
                        <?= $title ?>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Kategori
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
            <div class="row">
                <div class="col-md-12">
                    <a href="<?= SITE ?>kategori-listele" class="btn btn-info"
                        style="float:right; margin-bottom:10px; margin-left:10px;"><i class="fas fa-bars"></i> LİSTE</a>
                </div>
            </div>

            <?php
            if ($_POST) {
             
                if (!empty($_POST["adi"]) && !empty($_POST["etiket"]) && !empty($_POST["description"]) && !empty($_POST["sira"])) {
                    
                    if (isset($_POST['kategori-ekle'])) {
                        
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


                        $tur = "blog_kategori";


                        $klasorbanka = "../../resimler/";
                        $resim_tmpbanka = $_FILES['resim']['tmp_name'];
                        if (empty($resim_tmpbanka)) {
                            $resim = "resim-yok";
                        } else {

                            if ($_FILES["resim"]["type"] == "image/gif" || $_FILES["resim"]["type"] == "image/png" || $_FILES["resim"]["type"] == "image/jpg" || $_FILES["resim"]["type"] == "image/jpeg") {
                                $random = rand(0, 9999999);

                                $resim1 = $random . "-" . $seo . "." . substr($_FILES['resim']['name'], -3);

                                move_uploaded_file($_FILES['resim']['tmp_name'], $klasorbanka . "/" . $resim1);

                                $file = "../../resimler/" . $resim1;
                                $image = imagecreatefromstring(file_get_contents($file));
                                ob_start();
                                imagejpeg($image, NULL, 100);
                                $cont = ob_get_contents();
                                ob_end_clean();
                                $randomm = rand(0, 965465465465456);
                                imagedestroy($image);
                                $content = imagecreatefromstring($cont);
                                $output = '../../resimler/' . $random . '-' . $seo . '.webp';
                                $resim = $random . '-' . $seo . '.webp';
                                imagewebp($content, $output);
                                imagedestroy($content);
                                unlink('../../resimler/' . $resim1);
                            } else {
                                $bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
                            }
                        }
                        
                        $ekle = $VT->SorguCalistir("INSERT INTO blog_kategori", "SET kategori=?, sira=?, adi=?,aciklama=?, title=?,etiket=?, seo=?,  resim=?, durum=?, tur=?, eklenme_tarihi=?", array($_POST['kategori'], $_POST['sira'], $_POST['adi'], $_POST["description"], $_POST["title"], $_POST["etiket"], $seo, $resim, 1, $tur, date("Y-m-d")));
                        if ($ekle) {
                            header('location:' . $_POST['link'] . '?durum=Basarili');
                        } else {
                            header('location:' . $_POST['link'] . '?durum=Hata');
                        }


                    }

                    if (isset($_POST['kategori-guncelle'])) {
                        print_r("girdi4");
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

                        $tur = "blog_kategori";



                        $id = $_POST['id'];

                        /*$klasord = "../../resimler/";
                        $resim_tmpd = $_FILES['resim']['tmp_name'];
                        if (empty($resim_tmpd)) {
                            $duzenlenecek_id = $_GET['id'];
                            $ayar_kaydi = $db->query("SELECT * FROM urun_kategori WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
                            $resim = $ayar_kaydi['resim'];
                        } else {

                            if ($_FILES["resim"]["type"] == "image/gif" || $_FILES["resim"]["type"] == "image/png" || $_FILES["resim"]["type"] == "image/jpg" || $_FILES["resim"]["type"] == "image/jpeg") {

                                $ayar_kaydi = $db->query("SELECT * FROM urun_kategori WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
                                if ($ayar_kaydi['resim'] != "resim-yok") {
                                    unlink("../../resimler/" . $ayar_kaydi['resim']);
                                }

                                $random = rand(0, 999);

                                $resim1 = $random . "-" . $seo . $_FILES['resim'];

                                move_uploaded_file($_FILES['resim']['tmp_name'], $klasord . "/" . $resim1);
                                $file = "../../resimler/" . $resim1;
                                $image = imagecreatefromstring(file_get_contents($file));
                                ob_start();
                                imagejpeg($image, NULL, 100);
                                $cont = ob_get_contents();
                                ob_end_clean();

                                imagedestroy($image);
                                $content = imagecreatefromstring($cont);
                                $output = '../../resimler/' . $random . '-' . $seo . '.webp';
                                $resim = $random . '-' . $seo . '.webp';
                                imagewebp($content, $output);
                                imagedestroy($content);
                                unlink('../../resimler/' . $resim1);

                            } else {
                                $bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
                            }
                        }*/


                        $ekle = $VT->SorguCalistir("UPDATE blog_kategori", "SET kategori=?, sira=?, adi=?,aciklama=?, title=?,etiket=?, seo=?,  resim=?, durum=?, tur=?, guncelleme_tarihi=? WHERE id=?", array($_POST['kategori'], $_POST['sira'], $_POST['adi'], $_POST["description"], $_POST["title"], $_POST["etiket"], $seo, $resim, 1, $tur, date("Y-m-d"),$id));
                        if ($ekle) {
                            header('location:' . $_POST['link'] . '&durum=Basarili');
                        } else {
                            header('location:' . $_POST['link'] . '&durum=Hata');
                        }
                    }
                } else {
                    ?>
                    <div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>
                    <?php
                }
            }
            ?>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="col-md-8">
                    <div class="card-body card card-primary">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kategori Seç</label>
                                    <select class="form-control select2" style="width: 100%;" name="kategori">
                                        <option value="0" <?php if ($guncelle["kategori"] == 0) {
                                            echo "selected";
                                        } ?>>Ana
                                            Kategori</option>
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
                                <!-- /.col -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kategori Sıra</label>
                                    <input type="text" name="sira" class="form-control" placeholder="Sıra ..."
                                        value="<?= $guncelle["sira"] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kategori Adı</label>
                                    <input type="text" class="form-control" placeholder="KategoriAdı..." name="adi"
                                        value="<?= $guncelle["adi"] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Açıklama</label>
                                    <textarea class="textarea" placeholder="Açıklama alanıdır." name="description"
                                        style="width: 100%; height: 350px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $guncelle["aciklama"] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Başlık</label>
                                    <input type="text" class="form-control" placeholder="Başlık ..." name="title"
                                        value="<?= $guncelle["title"] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Anahtar</label>
                                    <input type="text" class="form-control" placeholder="Anahtar ..." name="etiket"
                                        value="<?= $guncelle["etiket"] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php if ($_GET['islem'] == 'duzenle') { ?>
                                        <input type="hidden" name="id" value="<?= $guncelle["id"] ?>">
                                        <input type="hidden" name="link" value="<?= $_SERVER["REQUEST_URI"] ?>">
                                        <button type="submit" class="btn btn-block btn-primary" name="kategori-guncelle">Kategori Güncelle</button>
                                    <?php } else { ?>
                                        <input type="hidden" name="link" value="<?= $_SERVER["REQUEST_URI"] ?>">
                                        <button type="submit" class="btn btn-block btn-primary" name="kategori-ekle">Kategori Ekle</button>
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