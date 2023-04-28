<?php
include("baglanti.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contents="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
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
<br><br><br>
<div class="container text-center"style="margin-top: 50px;"><h1><b>Kayıt Ol</b></h1></div>

    <div class="container">
    
    <?php 
    $username_err=$email_err=$parola_err=$parolatkr_err="";

    if(isset($_POST["kaydet"]))
    {
        //Kullanıcı adı hata dogrulama
        if(empty($_POST["kullaniciadi"]))
        {
            $username_err="Kullanıcı adı boş geçilemez";
        }
        elseif(strlen($_POST["kullaniciadi"])<6)
        {
            $username_err="Kullanıcı adı en az 6 karakter olmalıdır";
        }
        else if (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullaniciadi"])) 
        {
            $username_err="Kullanıcı adı büyük küçük harf ve rakamdan oluşmalıdır";
            }
            else
            {
                $username=$_POST["kullaniciadi"];
            }
    //Email hata dogrulama
    if(empty($_POST["email"]))
    {
    $email_err="Email alanı boş gecilemez";
    }
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err= "Geçersiz email formatı";
      }
      else{
        $email=$_POST["email"];
      }
    
    //Parola hata dogrulama
    if(empty($_POST["parola"]))
    {
    $parola_err="Parola boş geçilemez";
    }
    else
    {
        $parola=password_hash($_POST["parola"],PASSWORD_DEFAULT);
    }
    
    // Parola tekrar hata 
    if(empty($_POST["parolatkr"]))
    {
    $parolatkr_err="Parola tekrar boş geçilemez";
    }
    else if($_POST["parola"]!=$_POST["parolatkr"])
    {
    $parolatkr_err="Parolara eşleşmiyor";
    }
    else
    {
    $parolatkr=$_POST["parolatkr"];
    }
    
    
    if(isset($username) && isset($email) && isset($parola)){
    
    
        $ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$username','$email','$parola')";
        $calistirekle = mysqli_query($baglanti,$ekle);
    
        mysqli_close($baglanti);
    
        if($calistirekle){
          echo '<div class="alert alert-success" role="alert">
          Kayıt Başarılı!
        </div>';
      }
      else{
          echo '<div class="alert alert-danger" role="alert">
          Kayıt Başarısız!
        </div>';
      }
    }
}
    ?>
<form action="kayit.php" method="POST">
    <div class="container p-5" style="margin-top: 20px;">
    <div class="card bg-secondary p-3">
        <div class="form-group">
    <label for="exampleInputEmail1">Kullanıcı Adı</label>
    <input type="text" class="form-control <?php if(!empty($username_err)){echo"is-invalid";}?> " id="exampleInputEmail1" name="kullaniciadi" placeholder="example123"> 
    <div class="invalid-feedback">
      <?php echo $username_err; ?>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control <?php if(!empty($email_err)){echo"is-invalid";}?> " id="exampleInputEmail1" name="email"placeholder="example@example.com"> 
    <div class="invalid-feedback">
      <?php  echo $email_err;?>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Parola</label>
    <input type="password" class="form-control <?php if(!empty($parola_err)){echo"is-invalid";}?>" id="exampleInputPassword1" name="parola" placeholder="password123">
    <div class="invalid-feedback">
      <?php echo $parola_err;?>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Parola Tekrar</label>
    <input type="password" class="form-control <?php if(!empty($parolatkr_err)){echo"is-invalid";}?>" id="exampleInputPassword1" name="parolatkr" placeholder="password123">
    <div class="invalid-feedback">
      <?php echo $parolatkr_err;?>
    </div>
  </div>
  <br><button type="submit" name="kaydet" class="btn btn-primary"><b>Kayıt Ol</b></button><br><br>
  </div>
  </div>
  </div>
</form><br><br>

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
