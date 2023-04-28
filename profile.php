<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contents="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <!--bedava ikonlar için cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--Google'dan aldığım font (Monserrat)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;900&display=swap"
          rel="stylesheet">
          <link rel="stylesheet" href="./css/style.css">


    <!--Swipe JS // kaynagi: https://swiperjs.com/get-started#use-swiper-from-cdn -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

<nav>
    <div class="container nav__container">
        <a href="index.php"><h3>Ratemeup</h3></a>
        <u1 class="nav__menu">
        <li><a href="index.php">Cıkış Yap</a></li>
        </u1>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
</nav>

</div>
<br><br>
    <div class="container" style="text-align:center">
    <h1><b>HOŞGELDİN</b></h1></p></div><br>
    <div class="container">
           <p>
           <?php

session_start();
if(isset($_SESSION["kullanici_adi"]))
{
   echo "<h4>Selam ".$_SESSION["kullanici_adi"]. " ;</h4>";
    //echo "<h3>".$_SESSION["email"]."</h3>";
    //echo "<a href='cikis.php' style ='color:red; background-color:yellow;border:1px solid red; padding: 5px 5px'>Çıkıs Yap</a><br><br>";
    
}
else
{
    echo "Bu sayfayı görüntüleme yetkiniz yoktur";
}
?> 
</p>  
Kendinizi keşfetmek için oluşturduğumuz bu proje, birçok farklı test, anket ve öz-değerlendirme aracı sunarak kişinin kendini daha iyi anlamasını sağlar. 
Bu sayfada bulunan araçlar kişinin güçlü ve zayıf yönlerini, ilgi alanlarını, kişilik özelliklerini ve hedeflerini belirlemesine yardımcı olur.
Bu sayfa üzerinden yapacağınız testler ve öz-değerlendirmeler sonucunda kendinizi daha iyi anlayabilirsiniz. 
Kendinize dair farkındalığınız artar, ne istediğinizi ve nelerden hoşlandığınızı daha net bir şekilde görebilirsiniz. 
Böylelikle hayatınızda daha sağlıklı kararlar alabilir, hedeflerinize daha kolay odaklanabilirsiniz.
Oluşturduğumuz bu test, kişinin kendini keşfetmesi için büyük bir fırsat sunar. 
Ancak burada yapacağınız testlerin sonucuna tamamen güvenmek yerine, bu sonuçları bir başka kaynakla da karşılaştırmak faydalı olabilir. 
Kendinizi tanıdığınızda hayatınızın daha da anlamlı ve keyifli hale geleceğini unutmayın.</p>      
        
</div>
<section class="courses">
    <h2>Erişime Açık Testler</h2>
    <div class="container courses__container">
        <article class="course">
            <div class="course__image">
                <img src="./foto/course2.jpg">
            </div>
            <div class="course__info">
                <h4>Politik Görüş Testi</h4>
                <p>Politik görüş testi, birçok kişi için siyasi felsefelerini belirlemede faydalı bir araç olabilir. 
                    Tabii, sonuçlara tamamen güvenmek yerine kendi deneyimlerinizi, değerlerinizi ve inançlarınızi dikkate almanız önemlidir.
                </p>
                <a href="politik_gorus.php" class="btn btn-primary"> Hemen Başla </a>
            </div>
        </article>

        <article class="course">
            <div class="course__image">
                <img src="./foto/course2.jpg">
            </div>
            <div class="course__info">
                <h4>Felsefi Görüş Testi</h4>
                <p>Bu test, kişilerin felsefi görüşlerini anlamalarına ve kendilerini nereye konumlandırdıklarını belirlemelerine yardımcı olabilir. 
                    Test, birçok farklı soru ve kategori kullanır ve sonuçlarına göre, kişilerin felsefi görüşlerini belirleyebilir.
                </p>
                <a href="felsefi_gorus.php" class="btn btn-primary"> Hemen Başla </a>
            </div>
        </article>

        <article class="course">
            <div class="course__image">
                <img src="./foto/course2.jpg">
            </div>
            <div class="course__info">
                <h4>Psikolojik Analiz Testi</h4>
                <p>Bu testimiz kişinin zihinsel sağlığı, kişilik özellikleri, duygusal durumu, bireylerin düşünce yapısını, 
                    kişilik özelliklerini ve duygusal tepkilerini ölçmek için tasarlanmıştır.  
                </p>
                <a href="duygu_gorus.php" class="btn btn-primary"> Hemen Başla </a>
            </div>
        </article>

    </div>
</section>
</div>
<footer>
    <div class="container footer__container">
        <div class="footer__1">
            <a href="index.php" class="footer__logo"><h4>RateMeUp</h4></a>
            <p>
            Sayfamızda bulunan testler kişinin güçlü ve zayıf yönlerini, ilgi alanlarını vb. özelliklerini  belirlemesine yardımcı olur.            </p>
        </div>


        <div class="footer__2">
            <h4>Bağlantılar</h4>
            <ul class="permalinks"></ul>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li><a href="contact.php">Hakkımızda</a></li>
            <li><a href="contact.php#iletisim">İletişim</a></li>
            </u1>
        </div>

        <div class="footer__3">
            <h4>Güvenlik</h4>
            <ul class="Bize Ulaşın"></ul>
            <li><a href="gizlilik.php"> Gizlilik Politikası</a></li>
            <li><a href="contact.php"> Biz kimiz</a></li>
            <li><a href="index.php#testler"> Testler üzerine</a></li>
            </u1>
        </div>


        <div class="footer__4">
            <h4>İletişim</h4>
            <ul class="Bize Ulaşın"></ul>
            <div>
                <p>Cihangir Mah. Duygu Sokak No:2 Avcılar / İstanbul</p>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; Tüm Hakları Saklıdır</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="./main.js"></script>
</body>
</html>
