<?php
$seo =$_GET['seo'];




if($seo=='blog-arsiv'){
	$adi = "Blog Arşiv";
	$desc = $des;
}else if($seo=='iletisim'){
	$adi ="İletişim";
	$desc = $des;
}else if($seo=='hizmetler'){
	$adi =$dilsec["hizmetler"];
	$desc = $des;
}else if($seo=='ekipmanlar'){
	$adi =$dilsec["ekipmanlar"];
	$desc = $des;
}else if($seo=='urunler'){
	$adi =$dilsec["urunler"];
	$desc = $des;
}else if($seo=='subeler'){
	$adi =$dilsec["subeler"];
	$desc = $des;
}else if($seo=='sepet'){
		$adi =$dilsec["sepetim"];
	$desc = $des;
}else if($seo=='talep-formu'){
		$adi ="Talep Formu";
	$desc = $des;
}else if($seo=='teklif-al'){
		$adi =$dilsec["teklifal"];
	$desc = $des;
}else if($seo=='blog'){
		$adi =$dilsec["blog"];
	$desc = $des;
}else if($seo=='ekibimiz'){
	$adi =$dilsec["ekibimiz"];
	$desc = $des;
}else if($seo=='referanslar'){
	$adi =$dilsec["referanslar"];
	$desc = $des;
}else if($seo=='sss'){
	$adi ="S.S.S";
	$desc = $des;
}else if($bloglar = $baglan->baglanti->query("select * from bloglar where seo='$seo' and tur='Bloglar'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$bloglar["adi"];
	$id = $bloglar["id"];
	$desc = $bloglar["onaciklama"];
}else if($ekibimiz = $db->query("select * from ekibimiz where seo='$seo' and tur='ekibimiz'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$ekibimiz["adi"];
	$id = $ekibimiz["id"];
	$desc = $ekibimiz["onaciklama"];
}else if($haberler = $db->query("select * from haberler where seo='$seo' and tur='haberler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$haberler["adi"];
	$id = $haberler["id"];
	$desc = $haberler["onaciklama"];
}else if($sayfalar = $db->query("select * from sayfalar where seo='$seo' and tur='sayfalar'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$sayfalar["adi"];
	$id = $sayfalar["id"];
	$desc = $sayfalar["onaciklama"];
}else if($hizmetler = $db->query("select * from hizmetler where seo='$seo' and tur='hizmetler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$hizmetler["adi"];
	$id = $hizmetler["id"];
	$desc = $hizmetler["onaciklama"];
}else if($proje_kategori = $db->query("select * from proje_kategori where seo='$seo' and tur='proje_kategori' ")->fetch(PDO::FETCH_ASSOC)){
	$adi =$proje_kategori["adi"];
	$id = $proje_kategori["id"];
	$desc = $proje_kategori["onaciklama"];
}else if($projeler = $db->query("select * from projeler where seo='$seo' and tur='projeler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$projeler["adi"];
	$id = $projeler["id"];
	$desc = $projeler["onaciklama"];
}else if($urun_kategori = $db->query("select * from urun_kategori where seo='$seo' and tur='urun_kategori'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$urun_kategori["adi"];
	$id = $urun_kategori["id"];
	$desc = $urun_kategori["onaciklama"];
}else if($urunler = $db->query("select * from urunler where seo='$seo' and tur='urunler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$urunler["adi"];
	$id = $urunler["id"];
	$desc = $urunler["onaciklama"];
}else if($seo=='galeri'){
		$adi =$dilsec["galeri"];
	$desc = $des;
}else if($seo=='video'){
	$adi =$dilsec["video"];
	$desc = $des;
}else if($seo=='banka-hesaplari'){
	$adi =$dilsec["bankahesaplari"];
	$desc = $des;
}else if($seo=='kataloglar'){
		$adi =$dilsec["kataloglar"];
	$desc = $des;
}else {
	$adi ="404";
	$desc = $des;	
}
?>