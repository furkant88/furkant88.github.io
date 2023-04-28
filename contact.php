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
        <li><a href="index.php">Anasayfa</a></li>
            <li><a href="Courses.html">Kişilik Havuzu</a></li>
            <li><a href="kayit.php">Kullanıcı Kayit</a></li>
            <li><a href="login.php">Kullanıcı Giriş</a></li>
            <li><a href="Contact.php">Hakkımızda</a></li>
        </u1>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
</nav>

</div>
<header>
    <div class="container"><?php if(isset($_POST["gonder"])){
    echo '<div class="alert alert-success" role="alert">Mesajınız başarıyla iletilmiştir!</div>';
}?></div>
    <div class="container header__container">
        <div class="header__left">
            <h1><b>Hakkımızda</b></h1>
            <p>
            Kendimizi tanımak, hayatımızı daha iyi anlamak, hedeflerimize odaklanmak ve gerçek potansiyelimizi ortaya çıkarmak için önemlidir. Kendimizi keşfetmenin yolu ise bazen bir rehber veya yardımcıya ihtiyaç duymaktan geçebilir. İnternetin sunduğu imkanlar sayesinde kendimizi tanıyabileceğimiz birçok kaynak bulunmaktadır. Bu kaynaklardan biri de bizim oluşturduğumuz kendini keşfetme sayfasıdır.            </p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem quidem, quasi placeat accusantium laboriosam facilis repellendus neque ex assumenda nostrum deleniti quae, nobis perferendis nam dignissimos eligendi necessitatibus vel suscipit!

        </div>
        <div class="header__right">
            <div class="header__right-image">
                <img src="./foto/contact_header2.png">
            </div>
        </div>
</header>

<div class="container">
Sormak istediğiniz bir şey var mı? Lütfen doğrudan bizimle iletişime geçmekten çekinmeyin.
 Ekibimiz size yardımcı olmak için birkaç saat içinde size geri dönecektir. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
 Earum quia tenetur voluptatibus! Reiciendis molestias vero suscipit explicabo maiores quaerat odit itaque, dolorem nesciunt voluptates. 
 Fugiat ex expedita facere quibusdam nihil?

</div>
<a name="iletisim"></a>
<div class="container">
<section class="mb-4">

    <h2 class="h1-responsive font-weight-bold text-center my-4">İletişime geç</h2>

    <p class="text-center w-responsive mx-auto mb-5">Sormak istediğiniz bir şey var mı? Lütfen doğrudan bizimle iletişime geçmekten çekinmeyin. 
        Ekibimiz size yardımcı olmak için birkaç saat içinde size geri dönecektir.</p>

    <div class="row">
        <div class="col-md-9 mb-md-0 mb-5">
            <form action="" method="POST" >

                <div class="row">

                    <div class="col-md-5">
                        <div class="md-form mb-0">
                            <input type="text" class="form-control" required>
                            <label for="name">Ad Soyad</label>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="md-form mb-0">
                            <input type="text" class="form-control" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text"  rows="3" class="form-control md-textarea" required></textarea>
                            <label for="message">Mesaj kısmı</label>
                        </div>
                    </div>
                </div>
                <div class="text-center text-md-left">
                <button class="btn btn-primary" name="gonder">Gönder</button>
            </div>
            
            </form>



            
            <div class="status"></div>
        </div>
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>İstanbul, Avcılar 34000, Türkiye</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>0123456789</p>
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>

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
