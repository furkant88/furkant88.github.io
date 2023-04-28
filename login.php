<?php
include("baglanti.php");

$username_err=$parola_err="";

if(isset($_POST["giris"]))
{
    //Kullanıcı adı hata dogrulama
    if(empty($_POST["kullanici_adi"]))
    {
        $username_err="Kullanıcı adı boş geçilemez";
    }
        else
        {
            $username=$_POST["kullanici_adi"];
        }
//Parola hata dogrulama
if(empty($_POST["parola"]))
{
$parola_err="Parola boş geçilemez";
}
else
{
    $parola=$_POST["parola"];
}


if(isset($username) && isset($parola)){

    $secim= "SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'";
    $calistir = mysqli_query($baglanti,$secim);
    $kayitsayisi = mysqli_num_rows($calistir);

    if($kayitsayisi>0)
    {
        $ilgilikayit= mysqli_fetch_assoc($calistir);
        $hashlisifre= $ilgilikayit["parola"];

        if(password_verify($parola,$hashlisifre))
        {
            session_start();
            $_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
            $_SESSION["email"]=$ilgilikayit["email"];
            header("location:profile.php");

        }
        else
        {
            '<div class="alert alert-success" role="alert">
        Parola Yanlış!
      </div>';
        }
    }
    else 
    {
        echo '<div class="alert alert-danger" role="alert">
        Kullanıcı adı veya parola Yanlış!
      </div>';
    }


    mysqli_close($baglanti);
 
}

if(isset($_POST["beni_hatirla"]))
{
    $hatirla = $_POST['beni_hatirla'];
    if($hatirla=="1"){
        if(setcookie("kullanici_adi","$username",time()+3600)){
        setcookie("parola","$parola",time()+3600);
            
        }
     }elseif($hatirla==""){
        if(setcookie("kullanici_adi","$username")){
        echo "oturum açıldı!";
        }
     }else{
     echo "oturum açılmadı";
     }
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contents="width=device-width, initial-scale=1.0">
    <title>Üye Giriş</title>
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
<div class="container text-center" style="margin-top: 70px;"><h1><b>Giriş Yap</b></h1></div>
    <div class="container">
<form action="login.php" method="POST">
    <div class="container p-5">
    <div class="card bg-secondary p-3">
        <div class="form-group">
    <label for="exampleInputEmail1">Kullanıcı Adı</label>
    <input type="text" class="form-control <?php if(!empty($username_err)){echo"is-invalid";}?> " id="exampleInputEmail1" name="kullanici_adi" placeholder="example123"> 
    <div class="invalid-feedback">
      <?php echo $username_err; ?>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Parola</label>
    <input type="password" class="form-control <?php if(!empty($parola_err)){echo"is-invalid";}?>" id="exampleInputPassword1" name="parola" placeholder="password123">
    <div class="invalid-feedback">
      <?php echo $parola_err;?>
    </div>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1"  name="beni_hatirla" value="1">
    <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
  </div>
  
  <button type="submit" name="giris" class="btn btn-primary"><b>Giriş Yap</b></button><br>
  <a type="submit" href="kayit.php" class="btn btn-primary">Kayıt Ol</a>
  </div>
  </div>
  </div>
</form><br><br><br>
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
