<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">&nbsp; + Blog Yönetimi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Blog Yönetimi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width:50px;">id</th>
                                <th>Blog Adı</th>
                                <th>Ön Açıklama</th>
                                <th>Makale</th>
                                <th>kategori Adı</th>
                                <th>Durum</th>
                                <th style="width:80px;">Tarih</th>
                                <th style="width:120px;">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cek = $VT->baglanti->query("select * from bloglar order by id desc")->fetchAll(PDO::FETCH_ASSOC);
                            ;


                            foreach ($cek as $key => $goster) {
                                if ($goster["durum"] == 1) {
                                    $aktifpasif = ' checked="checked"';
                                } else {
                                    $aktifpasif = '';
                                }
                                ?>
                                <tr>
                                    <td>
                                        <?= $key + 1 ?>
                                    </td>
                                    <td>
                                        <a href="kategori-ekle?islem=duzenle&id=<?= $goster["id"] ?>">
                                            <?= $goster["adi"] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= mb_substr(strip_tags(stripslashes($goster["onaciklama"])), 0, 130, "UTF-8"); ?>
                                    </td>
                                    <td>
                                        <?php if (!empty($goster["aciklama"])) {
                                            echo mb_substr(strip_tags(stripslashes($goster["aciklama"])), 0, 130, "UTF-8");
                                        }else{ echo "Makale Yazılmadı";} ?>
                                    </td>
                                    <td>
                                        <?php
                                        $kat_id = $goster["kategori"];

                                        $blog_kat_cek = $VT->VeriGetir("blog_kategori", "WHERE id=?", array($kat_id), "ORDER BY ID ASC", 1);
                                        $blog_kat_cek = $VT->baglanti->query("select * from blog_kategori WHERE id='$kat_id' order by id desc")->fetch(PDO::FETCH_ASSOC);
                                        echo $blog_kat_cek["adi"];
                                        ?>
                                    </td>
                                    <td>
                                        <div
                                            class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox"
                                                class="custom-control-input aktifpasif<?= $goster["id"] ?>"
                                                id="customSwitch3<?= $goster["id"] ?>" <?= $aktifpasif ?>
                                                value="<?= $goster["id"] ?>"
                                                onclick="aktifpasif(<?= $goster["id"] ?>,'bloglar');">
                                            <label class="custom-control-label"
                                                for="customSwitch3<?= $goster["id"] ?>"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <?= $goster["eklenme_tarihi"] ?>
                                    </td>
                                    <td>
                                        <a href="<?= SITE ?>blog-ekle?islem=duzenle&id=<?= $goster["id"] ?>"
                                            class="btn btn-warning btn-sm">Düzenle</a>
                                        <a href="<?= SITE ?>sil/blog/<?= $goster["id"] ?>"
                                            class="btn btn-danger btn-sm">Kaldır</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="width:50px;">id</th>
                                <th>Blog Adı</th>
                                <th>Ön Açıklama</th>
                                <th>Makale</th>
                                <th>kategori Adı</th>
                                <th>Durum</th>
                                <th style="width:80px;">Tarih</th>
                                <th style="width:120px;">İşlem</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- /.card-body -->
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>