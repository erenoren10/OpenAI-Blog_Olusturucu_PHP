<?php
if (!empty($_GET["tablo"]) && !empty($_GET["ID"])) {
	$tablo = $VT->filter($_GET["tablo"]);
	$ID = $VT->filter($_GET["ID"]);
	$kontrol = $VT->VeriGetir("moduller", "WHERE tablo=? AND durum=?", array($tablo, 1), "ORDER BY ID ASC", 1);
	if ($kontrol != false) {
		$veri = $VT->VeriGetir($kontrol[0]["tablo"], "WHERE ID=?", array($ID), "ORDER BY ID ASC", 1);
		if ($veri != false) {
			$sil = $VT->SorguCalistir("DELETE FROM " . $tablo, "WHERE ID=?", array($ID), 1);
			?>
			<meta http-equiv="refresh" content="0;url=<?= SITE ?>liste/<?= $kontrol[0]["tablo"] ?>">
			<?php
		} else {
			?>
			<meta http-equiv="refresh" content="0;url=<?= SITE ?>liste/<?= $kontrol[0]["tablo"] ?>">
			<?php
		}

	} else {
		if($tablo=="kategori"){
			$kontrol = $VT->VeriGetir("blog_kategori", "WHERE id=? AND durum=?", array($ID, 1), "ORDER BY ID ASC", 1);
			if ($kontrol != false) {
				$sil = $VT->SorguCalistir("DELETE FROM blog_kategori", "WHERE ID=?", array($ID), 1);
				?>
				<meta http-equiv="refresh" content="0;url=<?= SITE ?>kategori-listele">
	
	
			<?php } else { ?>
				<meta http-equiv="refresh" content="0;url=<?= SITE ?>">
			<?php }
		}
		if($tablo=="blog"){
			$kontrol = $VT->VeriGetir("bloglar", "WHERE id=? AND durum=?", array($ID, 1), "ORDER BY ID ASC", 1);
			if ($kontrol != false) {
				$sil = $VT->SorguCalistir("DELETE FROM bloglar", "WHERE ID=?", array($ID), 1);
				?>
				<meta http-equiv="refresh" content="0;url=<?= SITE ?>blog-listele">
	
	
			<?php } else { ?>
				<meta http-equiv="refresh" content="0;url=<?= SITE ?>">
			<?php }
		}

	}
} else {
	?>
	<meta http-equiv="refresh" content="0;url=<?= SITE ?>">
	<?php
}
?>