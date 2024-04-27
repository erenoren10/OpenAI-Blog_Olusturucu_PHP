-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Nis 2024, 13:26:12
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yonetimpaneli`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(160) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `aciklama` varchar(255) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `url` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ID`, `baslik`, `anahtar`, `aciklama`, `telefon`, `mail`, `adres`, `fax`, `url`) VALUES
(1, 'Blog oluşturma', 'yönetim paneli, admin panel, chat-gpt', 'AI ile Blog oluşturma', '555555555555', 'test@hotmail.com', 'mahalle cadde', '555555555555', 'http://localhost/blog-gpt/admin/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bloglar`
--

CREATE TABLE `bloglar` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `dil` int(11) DEFAULT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `etiket` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `bloglar`
--

INSERT INTO `bloglar` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`, `hit`, `dil`, `title`, `etiket`, `description`) VALUES
(10, 'Deneme Yeni', '1', '165e96f50d9ee9.jpg', '9', '<p>ÖNacıklama1</p>', '1', '<!DOCTYPE html>\n<html lang=\"tr\">\n<head>\n<meta charset=\"UTF-8\">\n<title>Geleceğin Mesleği Nedir?</title>\n</head>\n<body>\n\n<p><strong>Geleceğin Mesleği Nedir?</strong></p>\n\n<p>Günümüzde hızla değişen teknoloji ve iş dünyasında, geleceğin mesleği konusunda birçok tartışma yapılıyor. Bilim, teknoloji, mühendislik ve matematik alanlarına olan talebin artmasıyla birlikte, STEM mesleklerinin gelecekte daha da önem kazanacağı öngörülüyor.</p>\n\n<p>Yapay zeka, veri bilimi, uzaktan çalışma ve dijital pazarlama gibi alanlarda uzmanlaşmış kişilerin iş bulma olasılıklarının yüksek olduğu düşünülüyor. Ayrıca yeşil enerji, sürdürülebilirlik ve biyoteknoloji gibi alanlarda da geleceğin mesleklerinin şekilleneceği öne sürülüyor.</p>\n\n<p><strong>Özetle, geleceğin mesleği, teknolojiye ve yeniliklere uyum sağlayabilen, problem çözme becerilerine sahip ve sürekli öğrenmeye açık olan bireylerin tercih ettiği meslekler olacaktır.</strong></p>\n\n</body>\n</html> <!DOCTYPE html>\n<html lang=\"tr\">\n\n<head>\n    <meta charset=\"UTF-8\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Geleceğin Meslekleri 2021</title>\n</head>\n\n<body>\n    <h1>Geleceğin Meslekleri 2021</h1>\n\n    <p>Gelecekte teknolojinin hızla ilerlemesi ve dijital dönüşümün etkisiyle birlikte iş dünyasında yeni meslek alanları ortaya çıkmaktadır. Bu yeni meslekler, teknolojiye uyum sağlayabilen ve dijital becerilere sahip olan bireyler için büyük fırsatlar sunmaktadır.</p>\n\n    <h2>Veri Bilimcisi</h2>\n    <p>Veri bilimi, büyük veri analizi yaparak işletmelere stratejik kararlar almalarında yardımcı olur. Veri bilimcileri, verileri analiz eder, trendleri belirler ve gelecekteki eğilimleri tahmin eder.</p>\n\n    <h2>Yapay Zeka Uzmanı</h2>\n    <p>Yapay zeka uzmanları, makine öğrenmesi ve derin öğrenme tekniklerini kullanarak yapay zeka uygulamaları geliştirir. Bu alanın gelecekte büyük bir öneme sahip olması beklenmektedir.</p>\n\n    <h2>Robotik Mühendisi</h2>\n    <p>Robotik mühendisleri, robotik sistemlerin tasarımı, geliştirilmesi ve bakımı konusunda uzmanlaşmış mühendislerdir. Gelecekte robotların hayatımızdaki önemi arttıkça robotik mühendislerine olan ihtiyaç da artacaktır.</p>\n\n    <h2>Cybersecurity Uzmanı</h2>\n    <p>Cybersecurity uzmanları, bilgisayar sistemlerini güvenli hale getirmek ve bilgi güvenliğini sağlamak için çalışan profesyonellerdir. Siber saldırıların artmasıyla birlikte cybersecurity uzmanlarına olan talep de artmaktadır.</p>\n\n    <h2>Blockchain Uzmanı</h2>\n    <p>Blockchain teknolojisi, merkezi olmayan ve güvenli bir veri tabanı oluşturmayı sağlar. Blockchain uzmanları, bu teknolojiyi kullanarak finansal işlemleri güvenli hale getirir ve verilerin korunmasını sağlar.</p>\n\n</body>\n\n</html> <!DOCTYPE html>\n<html>\n<head>\n<title>Geleceğin Önemli Meslekleri</title>\n</head>\n<body>\n<p>Gelecekte teknolojinin hızla ilerlemesi ve değişen iş dünyası, bazı mesleklerin daha da önemli hale gelmesine neden olacaktır. Bu meslekler arasında;</p>\n<ul>\n<li><strong>Yapay Zeka Mühendisleri:</strong> Yapay zeka, otomasyon ve makine öğrenimi gibi alanlarda uzmanlaşan mühendisler büyük talep görecektir.</li>\n<li><strong>Veri Analistleri:</strong> Büyük veri analizi ve veri madenciliği becerilerine sahip olan uzmanlar, şirketlerin karar alma süreçlerinde önemli bir rol oynayacaktır.</li>\n<li><strong>Uzaktan Çalışma Uzmanları:</strong> Uzaktan çalışmanın yaygınlaşmasıyla birlikte, uzmanlar bu alanda danışmanlık ve eğitim hizmetleri sunacaklardır.</li>\n<li><strong>Yeşil Enerji Mühendisleri:</strong> Çevre dostu ve sürdürülebilir enerji kaynaklarına olan talep arttıkça, yeşil enerji mühendisleri önemli bir rol oynayacaktır.</li>\n</ul>\n<p>Bu meslekler, gelecekte iş dünyasında büyük bir etkiye sahip olacak ve uzmanlık gerektirecektir. Bu nedenle gençlerin bu alanlara yönelerek kendilerini geliştirmeleri önemlidir.</p>\n</body>\n</html> <!DOCTYPE html>\n<html>\n<head>\n  <title>Gelecekte Hangi Meslekler Daha Fazla Talep Görecek?</title>\n</head>\n<body>\n\n  <h1>Gelecekte Hangi Meslekler Daha Fazla Talep Görecek?</h1>\n\n  <p>Günümüzün hızla değişen ve gelişen teknolojik dünyasında, bazı meslekler daha fazla talep görmekte ve önem kazanmaktadır. Gelecekte daha fazla talep görecek meslekler arasında şunlar yer almaktadır:</p>\n\n  <ul>\n    <li><strong>Veri Bilimcileri:</strong> Büyük veri analizi ve yapay zeka alanındaki gelişmelerle birlikte veri bilimcilerinin önemi artmaktadır.</li>\n    <li><strong>Yazılım Geliştiricileri:</strong> Teknolojinin her alanda yaygınlaşmasıyla yazılım geliştiricilerinin ihtiyacı artmaktadır.</li>\n    <li><strong>Dijital Pazarlama Uzmanları:</strong> İnternetin ve dijital platformların önemi arttıkça dijital pazarlama uzmanlarına olan talep de artmaktadır.</li>\n    <li><strong>Yapay Zeka Uzmanları:</strong> Yapay zeka teknolojilerinin gelişmesiyle birlikte yapay zeka uzmanlarına olan talep de artmaktadır.</li>\n    <li><strong>Robotik Mühendisleri:</strong> Otomasyon sistemlerinin yaygınlaşmasıyla birlikte robotik mühendislerine olan talep artmaktadır.</li>\n  </ul>\n\n  <p>Bu mesleklerin yanı sıra, sağlık sektörü, yeşil enerji ve çevre teknolojileri gibi alanlarda da gelecekte daha fazla talep görecek mesleklerin ortaya çıkması beklenmektedir.</p>\n\n</body>\n</html> <!DOCTYPE html>\n<html>\n<head>\n<title>Geleceğin En İyi Meslekleri</title>\n</head>\n<body>\n\n<h1>Geleceğin En İyi Meslekleri</h1>\n\n<p>Günümüzde teknolojinin hızla gelişmesi ve dünya ekonomisindeki değişimler, iş dünyasında da büyük bir dönüşüme neden olmaktadır. Bu dönüşümle birlikte bazı meslekler ön plana çıkmakta ve geleceğin en iyi meslekleri olarak kabul edilmektedir.</p>\n\n<h2>Teknoloji Alanında Meslekler</h2>\n<ul>\n<li>Yapay zeka uzmanı</li>\n<li>Veri bilimci</li>\n<li>Robotik mühendisi</li>\n<li>Blockchain uzmanı</li>\n</ul>\n\n<h2>Sağlık Alanında Meslekler</h2>\n<ul>\n<li>Genetik danışmanı</li>\n<li>Biyoinformatik uzmanı</li>\n<li>Nanoteknoloji uzmanı</li>\n<li>Dijital sağlık uzmanı</li>\n</ul>\n\n<h2>Çevre ve Enerji Alanında Meslekler</h2>\n<ul>\n<li>Yeşil enerji uzmanı</li>\n<li>Çevre mühendisi</li>\n<li>Biyoçeşitlilik uzmanı</li>\n<li>İklim değişikliği uzmanı</li>\n</ul>\n\n<p>Bu mesleklerin önümüzdeki yıllarda daha da önem kazanması ve büyük talep görmesi beklenmektedir. Dolayısıyla, bu alanlarda kariyer yapmayı düşünen kişilerin bu meslekleri değerlendirmeleri ve gerekli eğitimleri almaları önemlidir.</p>\n\n</body>\n</html> <!DOCTYPE html>\n<html lang=\"tr\">\n<head>\n<meta charset=\"UTF-8\">\n<title>Gelecekte Popüler Meslekler</title>\n</head>\n<body>\n\n<h1>Gelecekte Popüler Meslekler</h1>\n\n<p>Gelecekte popüler meslekler hakkında kısa ve net bilgilere göz atalım.</p>\n\n<h2>Teknoloji Alanında Meslekler</h2>\n<ul>\n  <li>Yapay zeka uzmanı</li>\n  <li>Veri bilimcisi</li>\n  <li>Cybersecurity uzmanı</li>\n</ul>\n\n<h2>Yeşil Enerji Sektörü Meslekleri</h2>\n<ul>\n  <li>Güneş enerjisi uzmanı</li>\n  <li>Rüzgar enerjisi teknisyeni</li>\n  <li>Çevre mühendisi</li>\n</ul>\n\n<h2>Sağlık Sektöründe Yükselen Meslekler</h2>\n<ul>\n  <li>Telemedicine doktoru</li>\n  <li>Genetik danışmanı</li>\n  <li>Uzaktan sağlık hizmetleri uzmanı</li>\n</ul>\n\n<h2>Dijital Pazarlama Meslekleri</h2>\n<ul>\n  <li>Sosyal medya uzmanı</li>\n  <li>SEO uzmanı</li>\n  <li>E-ticaret yöneticisi</li>\n</ul>\n\n<p>Gelecekte popüler meslekler arasında teknoloji, yeşil enerji, sağlık ve dijital pazarlama sektörlerindeki işler ön plana çıkıyor. Bu alanlarda uzmanlaşarak kariyer yapabilirsiniz.</p>\n\n</body>\n</html> <!DOCTYPE html>\n<html lang=\"tr\">\n<head>\n<meta charset=\"UTF-8\">\n<title>Geleceğin Meslekleri ve Maaşları</title>\n</head>\n<body>\n<p>\nGeleceğin meslekleri ve maaşları hakkında yapılan araştırmalar, teknolojinin hızla ilerlemesiyle birlikte iş dünyasında da değişimlerin yaşanacağını gösteriyor. Peki, hangi meslekler gelecekte daha çok talep görecek ve daha yüksek maaşlar sunacak?\n</p>\n\n<h1>1. Veri Bilimcisi</h1>\n<p>\nVeri bilimi, büyük veri analizi ve yapay zeka gibi konularla ilgilenen uzmanlar geleceğin en çok aranan meslek gruplarından birini oluşturacak. Veri bilimcileri, şirketlerin verilerini analiz ederek stratejik kararlar almalarına yardımcı olacak ve yüksek maaşlar alacaklar.\n</p>\n\n<h1>2. Yapay Zeka ve Makine Öğrenmesi Uzmanı</h1>\n<p>\nYapay zeka ve makine öğrenmesi alanında uzmanlaşan kişiler, otomasyon ve robotik sistemlerin geliştirilmesine öncülük edecekler. Bu alandaki uzmanlar da gelecekte yüksek maaşlarla çalışacaklar.\n</p>\n\n<h1>3. Uzaktan Çalışma Uzmanı</h1>\n<p>\nTeknolojinin gelişmesiyle birlikte uzaktan çalışma modelleri de yaygınlaşıyor. Uzaktan çalışma uzmanları, şirketlerin uzaktan çalışma süreçlerini yönetecek ve çalışanların verimliliğini artıracak stratejiler geliştirecekler.\n</p>\n\n<h1>4. Blockchain Uzmanı</h1>\n<p>\nBlockchain teknolojisi, güvenli veri transferi için kullanılan bir teknoloji olarak dikkat çekiyor. Blockchain uzmanları, şirketlerin bu teknolojiyi kullanarak verilerini korumalarına yardımcı olacaklar ve yüksek maaşlarla çalışacaklar.\n</p>\n\n<h1>5. Sağlık Teknolojileri Uzmanı</h1>\n<p>\nTıp alanındaki teknolojik gelişmeler, sağlık teknolojileri uzmanlarının önemini artırıyor. Sağlık teknolojileri uzmanları, sağlık sektöründeki dijital dönüşüm sürecini yönetecek ve yüksek maaşlar alacaklar.\n</p>\n\n</body>\n</html> <!DOCTYPE html>\n<html lang=\"tr\">\n<head>\n<meta charset=\"UTF-8\">\n<title>Gelecekte Hangi Meslekler Yok Olacak?</title>\n</head>\n<body>\n\n<p>Gelecekte teknoloji ve otomasyonun hızla ilerlemesiyle birlikte bazı mesleklerin yok olacağı öngörülmektedir. Bu meslekler genellikle rutin, tekrarlayıcı ve düşük düzeyde beceri gerektiren mesleklerdir.</p>\n\n<h2>1. Banka Memurluğu</h2>\n<p>Artık bankacılık işlemleri çoğunlukla online platformlar üzerinden gerçekleştirilmektedir. Bu nedenle banka şubelerindeki fiziki işlemleri yapan banka memurlarının sayısının azalması beklenmektedir.</p>\n\n<h2>2. Kasiyerlik</h2>\n<p>Self-servis kioskların ve online alışverişin yaygınlaşmasıyla birlikte kasiyerlerin iş hacmi azalacaktır. Özellikle market ve mağazalarda kendi alışverişini yapabilen müşterilerin sayısının artmasıyla kasiyer ihtiyacı azalacaktır.</p>\n\n<h2>3. Veri Giriş Elemanı</h2>\n<p>Otomasyon ve yapay zeka teknolojilerinin gelişmesiyle birlikte veri girişi işlemleri otomatik hale gelecektir. Bu nedenle manuel olarak veri girişi yapan elemanların işsiz kalma riski bulunmaktadır.</p>\n\n<h2>4. Taksici</h2>\n<p>Otonom araç teknolojisinin ilerlemesiyle birlikte sürücüsüz taksi ve taşımacılık hizmetleri yaygınlaşacaktır. Bu durumda taksicilerin iş hacmi ve geliri azalacaktır.</p>\n\n<h2>5. Muhasebecilik</h2>\n<p>Yapay zeka ve otomasyonun muhasebe işlemlerinde kullanılmasıyla birlikte geleneksel muhasebe yöntemlerine olan ihtiyaç azalacaktır. Bu nedenle muhasebecilerin bazı görevleri otomatikleştirilecek ve meslekleri önemli ölçüde değişecektir.</p>\n\n</body>\n</html> <!DOCTYPE html>\n<html lang=\"tr\">\n<head>\n    <meta charset=\"UTF-8\">\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Geleceğin Meslekleri</title>\n</head>\n<body>\n\n    <h1>Geleceğin Meslekleri</h1>\n\n    <p>Gelecekte teknolojinin hızla ilerlemesi ve dijitalleşmenin yaygınlaşması, birçok yeni meslek alanının ortaya çıkmasına neden olacaktır. İşte geleceğin en potansiyelli meslekleri:</p>\n\n    <h2>Teknoloji ve Yazılım Geliştiricileri</h2>\n    <p>Teknoloji alanındaki gelişmelerle birlikte yazılım ve uygulama geliştiricileri büyük talep göreceklerdir. Yapay zeka, veri bilimi ve blokzincir gibi alanlarda uzmanlık gerektiren bu meslekler geleceğin en önemli meslekleri arasında yer alacaktır.</p>\n\n    <h2>Yapay Zeka ve Makine Öğrenimi Uzmanları</h2>\n    <p>Yapay zeka ve makine öğrenimi alanındaki gelişmeler, bu alanda uzmanlaşmış kişilere olan ihtiyacı artıracaktır. Veri analizi, derin öğrenme ve yapay zeka uygulamaları konusunda uzmanlaşmış profesyoneller gelecekte büyük önem kazanacaktır.</p>\n\n    <h2>Dijital Pazarlama Uzmanları</h2>\n    <p>Dijital pazarlama, internet ve sosyal medya platformlarının yaygınlaşmasıyla birlikte büyük bir ivme kazanmıştır. Gelecekte markaların dijital varlıklarını yöneten dijital pazarlama uzmanları büyük talep görecektir.</p>\n\n    <h2>Blokzincir Uzmanları</h2>\n    <p>Blokzincir teknolojisi, güvenli ve şeffaf veri saklama alanında büyük bir devrim yaratmıştır. Blokzincir uzmanları, bu teknolojiyi kullanarak finans, sağlık, lojistik ve diğer birçok sektördeki iş süreçlerini optimize edeceklerdir.</p>\n\n    <h2>Yeşil Enerji Uzmanları</h2>\n    <p>Çevre dostu enerji kaynaklarına olan talebin artmasıyla birlikte yeşil enerji uzmanları büyük önem kazanacaktır. Güneş enerjisi, rüzgar enerjisi ve diğer yenilenebilir enerji kaynakları konusunda uzmanlaşmış profesyoneller, gelecekte enerji sektöründe öncü rol oynayacaklardır.</p>\n\n</body>\n</html> <!DOCTYPE html>\n<html>\n<head>\n<title>Geleceğin Meslekleri Hakkında Bilgi</title>\n</head>\n<body>\n<p>\nGeleceğin meslekleri hakkında bilgi edinmek, iş dünyasının sürekli değişen dinamiklerine ayak uydurmak ve kariyer planlaması yapmak için oldukça önemlidir. Günümüzde teknolojinin hızla ilerlemesi ve dijital dönüşüm süreci, birçok mesleğin evrim geçirmesine ve yeni mesleklerin ortaya çıkmasına neden olmaktadır.\n</p>\n\n<p>\nYapay zeka, robotik, veri analizi, uzaktan çalışma gibi alanlarda uzmanlaşan kişiler, geleceğin en önemli mesleklerine adım atmaktadırlar. Veri bilimcileri, siber güvenlik uzmanları, yapay zeka mühendisleri, uzaktan çalışma uzmanları gibi meslekler, önümüzdeki yıllarda büyük talep görecektir.\n</p>\n\n<p>\nAyrıca yeşil ekonomi, sürdürülebilirlik ve iklim değişikliği gibi konularda uzmanlaşan kişiler de gelecekte çok değerli olacaktır. Yenilenebilir enerji uzmanları, çevre danışmanları, su kaynakları yöneticileri gibi meslekler, gelecekte iş dünyasında önemli bir yere sahip olacaktır.\n</p>\n\n<p>\nGelişen teknoloji ile birlikte dijital pazarlama uzmanları, e-ticaret yöneticileri, mobil uygulama geliştiricileri gibi meslekler de büyük talep görmektedir. İnternet ve mobil teknolojilerin yaygınlaşması, bu alanlarda uzmanlaşan kişilere yeni kariyer fırsatları sunmaktadır.\n</p>\n\n<p>\nSonuç olarak, geleceğin meslekleri hakkında bilgi sahibi olmak ve kendini bu alanlarda geliştirmek, iş dünyasındaki rekabetçi ortamda öne geçmenizi sağlayacaktır. Sürekli öğrenmeye ve kendinizi yenilemeye açık olmak, gelecekte başarılı bir kariyer yapmanızı sağlayacaktır.\n</p>\n\n</body>\n</html>', 'deneme-yeni', 'Bloglar', '2024-03-10', '2024-03-11', NULL, NULL, 'Geleceğin Mesleği Nedir ?', 'etkiket,deneme,etiketdeneme', NULL),
(12, 'Deneme adı', '3', NULL, '9', 'önaçıklamaa', '2', NULL, 'deneme-adi', 'Bloglar', '2024-03-11', NULL, NULL, NULL, 'deneme başlık', 'deneme anahtar', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_kategori`
--

CREATE TABLE `blog_kategori` (
  `id` int(11) NOT NULL,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `dil` int(11) DEFAULT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `etiket` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `blog_kategori`
--

INSERT INTO `blog_kategori` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`, `hit`, `dil`, `title`, `etiket`, `description`) VALUES
(5, 'deneme', '2', NULL, '0', NULL, '1', '<p>deneme    </p>', 'deneme', 'blog_kategori', '2024-03-10', NULL, NULL, NULL, 'deneme başlık', 'deneme anahtar', '<p>deneme    </p>'),
(9, 'yeni2', '5', NULL, '0', NULL, '1', 'yeni aciklama', 'yeni2', 'blog_kategori', '2024-03-10', '2024-03-10', NULL, NULL, 'deneme başlık', 'deneme anahtar', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `metin` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`ID`, `baslik`, `seflink`, `kategori`, `metin`, `resim`, `anahtar`, `description`, `durum`, `sirano`, `tarih`) VALUES
(1, 'Hizmet Adı', 'hizmet-adi', 3, '<p>Bu bir hizmet açıklamasıdır.</p>', '15e25ffbcc52dd.png', 'hizmet, bilgi', 'bu bir açıklamadır.', 1, 1, '2020-01-24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `tablo` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`ID`, `baslik`, `seflink`, `tablo`, `anahtar`, `description`, `durum`, `sirano`, `tarih`) VALUES
(1, 'Kurumsal', 'kurumsal', 'modul', NULL, NULL, 1, NULL, '2020-01-04'),
(2, 'Ürünler', 'urunler', 'modul', NULL, NULL, 1, NULL, '2020-01-14'),
(3, 'Hizmetler', 'hizmetler', 'modul', NULL, NULL, 1, NULL, '2020-01-14'),
(4, 'Bloglar', 'bloglar', 'modul', NULL, NULL, 1, NULL, '2020-01-14'),
(5, 'Projeler', 'projeler', 'modul', NULL, NULL, 1, NULL, '2020-01-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `ID` int(11) NOT NULL,
  `adsoyad` varchar(120) DEFAULT NULL,
  `kullanici` varchar(100) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `mail` varchar(120) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`ID`, `adsoyad`, `kullanici`, `sifre`, `mail`, `tarih`) VALUES
(1, 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'test@hotmail.com', '2020-02-02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurumsal`
--

CREATE TABLE `kurumsal` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `metin` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `moduller`
--

CREATE TABLE `moduller` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `tablo` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `moduller`
--

INSERT INTO `moduller` (`ID`, `baslik`, `tablo`, `durum`, `tarih`) VALUES
(4, 'Hizmetler', 'hizmetler', 1, '2020-01-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE `projeler` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `metin` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `metin` text DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `anahtar` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `durum` int(5) DEFAULT NULL,
  `sirano` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ziyaretciler`
--

CREATE TABLE `ziyaretciler` (
  `ID` double NOT NULL,
  `IP` varchar(20) DEFAULT NULL,
  `tekil` int(11) DEFAULT NULL,
  `cogul` int(11) DEFAULT NULL,
  `tarayici` varchar(50) DEFAULT NULL,
  `xr` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ziyarettarayici`
--

CREATE TABLE `ziyarettarayici` (
  `ID` int(11) NOT NULL,
  `tarayici` varchar(50) DEFAULT NULL,
  `ziyaret` double NOT NULL,
  `hiz` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ziyarettarayici`
--

INSERT INTO `ziyarettarayici` (`ID`, `tarayici`, `ziyaret`, `hiz`) VALUES
(1, 'chrome', 1, NULL),
(2, 'explorer', 1, NULL),
(3, 'firefox', 1, NULL),
(4, 'diger', 1, NULL),
(5, 'sayfahizi', 4, '2.86');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `bloglar`
--
ALTER TABLE `bloglar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog_kategori`
--
ALTER TABLE `blog_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kurumsal`
--
ALTER TABLE `kurumsal`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `moduller`
--
ALTER TABLE `moduller`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `ziyaretciler`
--
ALTER TABLE `ziyaretciler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `ziyarettarayici`
--
ALTER TABLE `ziyarettarayici`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bloglar`
--
ALTER TABLE `bloglar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `blog_kategori`
--
ALTER TABLE `blog_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kurumsal`
--
ALTER TABLE `kurumsal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `moduller`
--
ALTER TABLE `moduller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `ziyaretciler`
--
ALTER TABLE `ziyaretciler`
  MODIFY `ID` double NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ziyarettarayici`
--
ALTER TABLE `ziyarettarayici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
