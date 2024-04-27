<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">&nbsp; + Yeni Makale Oluştur</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= SITE ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Yeni Makale Oluştur</li>
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
                if (isset ($_POST["makaleBaslik"]) && !empty ($_POST["makaleBaslik"])) {
                    $id = $_POST["blog"];
                    $generated_texts = array();
                    $konuBasliklari = explode("\n", $_POST["makaleBaslik"]);
                    foreach ($konuBasliklari as $key => $konuBasligi) {
                        echo $key + 1 . " " . $konuBasligi . "<br>";

                        $data = '{
                            "model" : "gpt-3.5-turbo",
                            "messages" : [{"role": "user", "content": "' . $_POST["subtitlePrompt"] . $konuBasligi . '"}],
                            "temperature" : 0.8
                           
                        }';

                        $curl = curl_init();
                        curl_setopt_array($curl, [
                            CURLOPT_URL => 'https://api.openai.com/v1/chat/completions',
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => '',
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => 'POST',
                            CURLOPT_POSTFIELDS => $data,
                            CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $_POST["openapi"] . '', 'Content-Type: application/json'],
                            CURLOPT_SSL_VERIFYPEER => false,
                        ]);

                        $response = curl_exec($curl);

                        curl_close($curl);

                        $response = json_decode($response);
                        if (isset ($response->error->message)) {
                            $errMessage = $response->error->message;
                            print_r($errMessage);
                        }


                        $text = $response->choices[0]->message->content;
                        $datas = json_decode($text, true);
                        $titles = $datas['titles'];


                        foreach ($titles as $title) {
                            $data = '{
                                "model" : "gpt-3.5-turbo",
                                "messages" : [{"role": "user", "content": "' . $_POST["writePrompt"] . $title . '"}],
                                "temperature" : 0.8     
                            }';

                            $curl = curl_init();
                            curl_setopt_array($curl, [
                                CURLOPT_URL => 'https://api.openai.com/v1/chat/completions',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'POST',
                                CURLOPT_POSTFIELDS => $data,
                                CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $_POST["openapi"] . '', 'Content-Type: application/json'],
                                CURLOPT_SSL_VERIFYPEER => false,
                            ]);

                            $response = curl_exec($curl);

                            curl_close($curl);

                            $response = json_decode($response);
                            if (isset ($response->error->message)) {
                                $errMessage = $response->error->message;
                                print_r($errMessage);
                            }


                            $text = $response->choices[0]->message->content;

                            $generated_texts[] = $text;
                        }

                        $combined_text = implode(" ", $generated_texts);



                        $ekle_aciklama = $VT->SorguCalistir("UPDATE bloglar", "SET aciklama=?,  guncelleme_tarihi=? WHERE id=?", array($combined_text, date("Y-m-d"), $id));
                    }
                } else {
                    $id = $_POST["blog"];
                    $generated_texts = array();
                    $sorgu = $VT->VeriGetir("bloglar", "WHERE id=?", array($id), "");
                    $konuBasligi = $sorgu[0]["title"];
                    
                    $data = '{
                            "model" : "gpt-3.5-turbo",
                            "messages" : [{"role": "user", "content": "' . $_POST["subtitlePrompt"] . $konuBasligi . '"}],
                            "temperature" : 0.8
                           
                        }';

                    $curl = curl_init();
                    curl_setopt_array($curl, [
                        CURLOPT_URL => 'https://api.openai.com/v1/chat/completions',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $data,
                        CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $_POST["openapi"] . '', 'Content-Type: application/json'],
                        CURLOPT_SSL_VERIFYPEER => false,
                    ]);

                    $response = curl_exec($curl);

                    curl_close($curl);

                    $response = json_decode($response);
                    if (isset ($response->error->message)) {
                        $errMessage = $response->error->message;
                        print_r($errMessage);
                    }


                    $text = $response->choices[0]->message->content;
                    $datas = json_decode($text, true);
                    $titles = $datas['titles'];


                    foreach ($titles as $title) {
                        $data = '{
                                "model" : "gpt-3.5-turbo",
                                "messages" : [{"role": "user", "content": "' . $_POST["writePrompt"] . $title . '"}],
                                "temperature" : 0.8     
                            }';

                        $curl = curl_init();
                        curl_setopt_array($curl, [
                            CURLOPT_URL => 'https://api.openai.com/v1/chat/completions',
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => '',
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => 'POST',
                            CURLOPT_POSTFIELDS => $data,
                            CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $_POST["openapi"] . '', 'Content-Type: application/json'],
                            CURLOPT_SSL_VERIFYPEER => false,
                        ]);

                        $response = curl_exec($curl);

                        curl_close($curl);

                        $response = json_decode($response);
                        if (isset ($response->error->message)) {
                            $errMessage = $response->error->message;
                            print_r($errMessage);
                        }


                        $text = $response->choices[0]->message->content;

                        $generated_texts[] = $text;
                    }

                    $combined_text = implode(" ", $generated_texts);



                    $ekle_aciklama = $VT->SorguCalistir("UPDATE bloglar", "SET aciklama=?,  guncelleme_tarihi=? WHERE id=?", array($combined_text, date("Y-m-d"), $id));


                }

            }
            ?>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="card-body card card-primary">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Blog Seçiniz</label>
                                    <select class="form-control" name="blog">
                                        <?php
                                        $c = $VT->baglanti->query("select * from bloglar order by id desc")->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($c as $g) {
                                            ?>
                                            <option value="<?= $g["id"] ?>">
                                                <?= $g["adi"] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Görev adı veya İş Tanımı (Ayrıştırmak için not)</label>
                                    <input type="text" class="form-control" placeholder="Görev adı veya İş Tanımı ..."
                                        name="missionName">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Openai Api'si</label>
                                    <input type="text" class="form-control" placeholder="sk-123465789101112131415..."
                                        name="openapi" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Subtitle's Prompt (Opsiyonel)</label>
                                    <input style="background-color: bisque" type="text" class="form-control"
                                        value="Türkiye'de sana verilen konu hakkında en çok aranan 10 anahtar kelimeyi belirle. Çıktın sadece json formatında ve titles anahtarı ile dönmeli.konu:"
                                        name="subtitlePrompt">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Write Prompt (Opsiyonel)</label>
                                    <textarea type="text" class="form-control" cols="10" rows="3"
                                        style="background-color: bisque"
                                        name="writePrompt">Makale formatında html etiketlerini (table,thead,tbody,tr,th,td,ul,ol,li,p,strong,em,small vb etiketleri) kullanarak yanıt ver başlık etiketi <h%tag> olmalı ve başka başlık kullanmamalısın ve profesyonel bir içerik yazarı gibi davranmanı istiyorum. Sana vereceğim konu hakkında bana kısa ve net bilgi ver. Türkçe olarak hazırla. konu:</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>description Prompt (Opsiyonel)</label>
                                    <textarea type="text" class="form-control" cols="10" rows="3"
                                        style="background-color: bisque"
                                        name="descriptionPrompt">Seo description üretiyorsun vereceğim başlık ile ilgili açıklaman 140 karakteri geçmeyecek. Sadece türkçe kısa açıklama üreteceksin</textarea>
                                </div>
                            </div>
                            <p>--Eğer Boş bırakırsanız seçilen blog'un promptlarına göre otomatik üretilecektir--</p>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Makalele Oluşturulacak Konu Başlıkları (Konu Başlığı kadar promptlara göre
                                        makale üretilecektir.)</label>
                                    <textarea name="makaleBaslik" class="form-control" cols="30" rows="10"
                                        placeholder="Konu başlığı şeklinde alt alta girebilirsiniz."></textarea>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Oluştur</button>
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