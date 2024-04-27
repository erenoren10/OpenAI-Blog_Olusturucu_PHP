<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Kategori Listele
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">
                            Kategori Listele
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
                    <a href="<?= SITE ?>kategori-ekle" class="btn btn-success"
                        style="float:right; margin-bottom:10px;"><i class="fa fa-plus"></i> YENİ EKLE</a>
                </div>
            </div>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width:50px;">Sıra</th>
                                <th>İsim</th>
                                <th>Açıklama</th>
                                <th style="width:50px;">Durum</th>
                                <th style="width:80px;">Tarih</th>
                                <th style="width:120px;">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $cek = $VT->baglanti->query("select * from blog_kategori order by id desc")->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($cek as $key => $goster) {
                                    if ($goster["durum"] == 1) {
                                        $aktifpasif = ' checked="checked"';
                                      } else {
                                        $aktifpasif = '';
                                      }
                                    ?>
                                    <td>
                                        <?= $key+1 ?>
                                    </td>
                                    <td>
                                        <a href="kategori-ekle?islem=duzenle&id=<?= $goster["id"] ?>">
											<?= $goster["adi"] ?>
										</a>
                                    </td>
                                    <td>
                                        <?= mb_substr(strip_tags(stripslashes($goster["description"])), 0, 130, "UTF-8") . "..."; ?>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input aktifpasif<?= $goster["id"] ?>"
                                            id="customSwitch3<?= $goster["id"] ?>" <?= $aktifpasif ?> value="<?= $goster["id"] ?>"
                                            onclick="aktifpasif(<?= $goster["id"]?>,'kategori');">
                                            <label class="custom-control-label" for="customSwitch3<?= $goster["id"] ?>"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <?= $goster["eklenme_tarihi"] ?>
                                    </td>
                                    <td>
                                        <a href="<?= SITE ?>kategori-ekle?islem=duzenle&id=<?= $goster["id"] ?>"
                                            class="btn btn-warning btn-sm">Düzenle</a>
                                        <a href="<?= SITE ?>sil/kategori/<?= $goster["id"] ?>"
                                            class="btn btn-danger btn-sm">Kaldır</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="width:50px;">Sıra</th>
                                <th>Kategori adı</th>
                                <th>Açıklama</th>
                                <th style="width:50px;">Durum</th>
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