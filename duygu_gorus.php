

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <!--bedava ikonlar için cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--Google'dan aldığım font (Monserrat)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;900&display=swap">
    
    <title>Psikolojik Analiz</title>
</head>
<body>
<style>
body {
background-image: url("./foto/personality_bg2.jpg");
background-attachment: fixed;
  background-size: 71% 150%;
}
</style>
<?php

$baglanti = new mysqli('localhost', 'root', '', 'sirali_id_db');
// Veritabanı bağlantımızı yapıyoruz.
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
    //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
}
$sorguIlk = $baglanti->query("SELECT id from makale2 order by id asc limit 1");
$sonucIlk = $sorguIlk->fetch_assoc();
$ilkId = $sonucIlk["id"];

$sorguSon = $baglanti->query("SELECT id from makale2 order by id desc limit 1");
//son id değeri için tabloyu id ye göre ters listeleyip ilk kaydı alıyoruz
$sonucSon = $sorguSon->fetch_assoc();
$sonId = $sonucSon["id"];


if ($_GET) {
    //Linklerden gelen get değerlerini alıp sorgumuzda kullanıyoruz.
    $id = $_GET["id"];
    $yon = $_GET["yon"];


    //yön önemli ona göre sorgumuz değişeceği için bir if yapısında kullanıyoruz.
    if ($yon == "ileri") {
        $sorgu = $baglanti->query("SELECT * FROM makale2 where id > $id limit 1"); // Makale tablosundaki veri çekiyoruz.
    }
    if ($yon == "geri") {
        $sorgu = $baglanti->query("SELECT * FROM makale2 where id < $id ORDER  by id desc limit 1"); // Makale tablosundaki veri çekiyoruz.
    }


} else {
    //eğer sayfa ilk defa açılmışsa ilk değeri alıyoruz.
    $sorgu = $baglanti->query("SELECT * FROM makale2 limit 1");

}

//sonuçları çekiyoruz.
$sonuc = $sorgu->fetch_assoc();
?>
<div class="container" style="margin-top: 68px;" >
<div class="card text-white bg-dark mb-3 ">
<div class="container" >
<div class="card-body"> 
    
    <h1 class="card-title text-center">Psikolojik Analiz</h1>
    <p class="card-text">
        
    </p>
    </div>

<div class="container">
<div class="card-body">

 
<div class="card text-white bg-dark mb-3 ">
<div class="card text-white bg-info mb-3" style="max-height: 32rem;" >


<form action="" method="post" >
    <div class= "container">
    
    <div class="alert alert-info" role="alert" style="margin-top: 50px">
<p>
<!--Başlık alanını yazdırdık-->
<h3>        
<?php echo $sonuc["icerik"]; ?></h3><br><br>
<!--İçerik alanını yazdırdık-->

</div>
</div>
<script type="text/javascript">
function yolla(){
window.location.href="duygu_gorus.php?yon=ileri&id=<?php echo $sonuc["id"]; ?>"
}
// Butona basınca localstorage da değişken tutma.
const NUMBER = 'NUMBER'
let number = localStorage.getItem(NUMBER)*1 
const updateNumber = (newNumber) => {
  localStorage.setItem(NUMBER, newNumber)
  return newNumber
}
function arttir5(){
number = updateNumber(number + 5)
console.log(number)
}
function arttir4(){
number = updateNumber(number + 4)
console.log(number)
}
function arttir3(){
number = updateNumber(number + 3)
console.log(number)
}

localStorage.removeItem(NUMBER)

function hesapla(){
    if(number>5)
    {
        document.getElementById("puan").innerHTML= window.location.href = "index.php";
    }
   
    else if(number<=5)
    {
        alert("Lütfen Yeterince Soru Yanıtlayınız! " );
        
    }
    
    else{
        alert(".");
    }
}

</script>

<div class="container text-center" role="group" id="puan"> 
<div class="container ">
<div class="progress">
    <!--Bar dolumu kodu!-->
    <?php $cubuk=0;if($sonuc["id"]==1){$cubuk=$cubuk+10;} elseif($sonuc["id"]==2){$cubuk=$cubuk+20;} elseif($sonuc["id"]==3){$cubuk=$cubuk+30;}elseif($sonuc["id"]==4){$cubuk=$cubuk+40;}elseif($sonuc["id"]==5){$cubuk=$cubuk+50;}elseif($sonuc["id"]==6){$cubuk=$cubuk+60;}elseif($sonuc["id"]==7){$cubuk=$cubuk+70;}elseif($sonuc["id"]==8){$cubuk=$cubuk+80;}elseif($sonuc["id"]==9){$cubuk=$cubuk+90;}elseif($sonuc["id"]==10){$cubuk=$cubuk+100;}?>
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $cubuk?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div><br>
<?php $yolla="";$hesapla_yaz=""; if($sonuc["id"]<10) $yolla="yolla();"; elseif($sonuc["id"]==$sonId) $hesapla_yaz="hesapla();";?>
  <button type="button" class="btn btn-success btn-lg " onclick="arttir5();<?php echo $yolla ?><?php echo $hesapla_yaz?>" >Katılıyorum</button>
  <button type="button" class="btn btn-warning btn-lg  " onclick="arttir4(); <?php echo $yolla ?><?php echo $hesapla_yaz?>">Bilmiyorum</button>
  <button type="button" class="btn btn-danger btn-lg  " onclick="arttir3(); <?php echo $yolla ?><?php echo $hesapla_yaz?>" >Katılmıyorum</button>
  </div>
</p>
<div class="container" style="margin-top: 20px; margin-bottom: 100%;">
<br><br>
<a href="profile.php"class="btn btn-dark">Ana Sayfaya Dön</a>

<div class="container">

</div>
</div>
</div>
</div>
</div>
</div>
<div class="container" style="min-height: 2rem;">
</nav>
</div>
<div class="container">
<div class="card text-white bg-dark mb-3 " style="max-height: 100rem;" >
</div>
</div>

</form>
</body>
</html>
