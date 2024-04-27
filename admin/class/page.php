<?php


if($seo=='blog-arsiv'){
	include("detay/archive.php");
}else if($seo=='iletisim'){
	include("detay/contact.php");
}else if($seo=='hizmetler'){
	include("detay/hizmetler.php");
}else if($seo=='subeler'){
	include("detay/subeler.php");
}else if($seo=='ekipmanlar'){
	include("detay/ekipmanlar.php");
}else if($seo=='talep-formu'){
	include("detay/talep-formu.php");
}else if($seo=='teklif-al'){
	include("detay/teklif-al.php");
}else if($seo=='blog'){
	include("detay/blog.php");
}else if($seo=='urunler'){
	include("detay/urunler.php");
}else if($seo=='kariyer'){
	include("detay/kariyer.php");
}else if($seo=='sepet'){
	include("detay/sepet.php");
}else if($seo=='ekibimiz'){
	include("detay/ekibimiz.php");
}else if($bloglar["adi"]!=''){
	include("detay/blog-detay.php");
}else if($ekibimiz["adi"]!=''){
	include("detay/ekip-detay.php");
}else if($sayfalar["adi"]!=''){
	include("detay/sayfa-detay.php");
}else if($hizmetler["adi"]!=''){
	include("detay/hizmet-detay.php");
}else if($haberler["adi"]!=''){
	include("detay/blog-detay.php");
}else if($proje_kategori["adi"]!=''){
	include("detay/projeler.php");
}else if($projeler["adi"]!=''){
	include("detay/proje-detay.php");
}else if($urun_kategori["adi"]!=''){
	include("detay/kategori.php");
}else if($urunler["adi"]!=''){
	include("detay/urun-detay.php");
}else if($seo=='galeri'){
	include("detay/galeri.php");
}else if($seo=='video'){
	include("detay/video.php");
}else if($seo=='banka-hesaplari'){
	include("detay/banka-hesaplari.php");
}else if($seo=='kataloglar'){
	include("detay/kataloglar.php");
}else if($seo=='referanslar'){
	include("detay/referanslar.php");
}else if($seo=='sss'){
	include("detay/sss.php");
}else {
	include("detay/404.php");
}	

?>