<?php
?>
<!DOCTYPE html>
<HTML lang="EN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contents="width=device-width, initial-scale=1.0">
    <title>Ratemeup Educational School Project</title>

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


</head>
<body>
<nav>
    <div class="container nav__container">
        <a href="index.php"><h4>Ratemeup</h4></a>
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

<!--=================Navbar'ın sonu=================-->
<header>
    <div class="container header__container">
        <div class="header__left">
            <h1>Kendini tanıma fırsatı yakala</h1>
            <p>
            Kendimizi tanımak, hayatımızı daha iyi anlamak, hedeflerimize odaklanmak ve gerçek potansiyelimizi ortaya çıkarmak için önemlidir. Kendimizi keşfetmenin yolu ise bazen bir rehber veya yardımcıya ihtiyaç duymaktan geçebilir. İnternetin sunduğu imkanlar sayesinde kendimizi tanıyabileceğimiz birçok kaynak bulunmaktadır. Bu kaynaklardan biri de bizim oluşturduğumuz kendini keşfetme sayfasıdır.            </p>
            

        </div>

        <div class="header__right">
            <div class="header__right-image">
                <img src="./foto/header.svg">
            </div>
        </div>
</header>

<!--=================Header'ın sonu=================-->

<section class="categories">
    <div class="container categories__container">
        <div class="categories__left">
            <h1>Kategoriler</h1>
            <p>
            Bu sayfa üzerinden yapacağınız testler ve öz-değerlendirmeler sonucunda kendinizi daha iyi anlayabilirsiniz. Kendinize dair farkındalığınız artar, ne istediğinizi ve nelerden hoşlandığınızı daha net bir şekilde görebilirsiniz. Böylelikle hayatınızda daha sağlıklı kararlar alabilir, hedeflerinize daha kolay odaklanabilirsiniz            </p>
            <a href="#" class="btn"> Daha Fazlası </a>
        </div>

        <div class="categories__right">
            <article class="category">
                <span class="category__icon"><i class="uil uil-trees"></i></span>
                <h5>Politik Görüşü Testi</h5>
                <p>Politik görüş, bir bireyin belirli bir politik felsefeyi veya siyasi partiye olan desteğini ifade eder.</p>
            </article>

            <article class="category">
                <span class="category__icon"><i class="uil uil-trees"></i></span>
                <h5>Felsefe Görüşü Testi</h5>
                <p>
                    Felsefi görüşlerimiz, dünyayı, insanları, hayatın anlamını anlamaya çalıştığımız alandır.
                </p>
            </article>

            <article class="category">
                <span class="category__icon"><i class="uil uil-trees"></i></span>
                <h5>Psikolojik Görüş Testi</h5>
                <p>insanların kişilik özelliklerini, zihinsel sağlıklarını ve davranışlarını değerlendirmek için kullanılan bir yöntemdir.</p>
            </article>
        </div>
    </div>
</section>

<!--========================KATEGORİLERİN SONU===========================-->

<section class="courses">
    <h2>Kişilik Tipleri</h2>
    <div class="container courses_pic_container" style="max-width: 70rem;">
            <article class="course">
            <div class="gecisim">
            <a href="Görüs_Sayfalari/politik_gorus.php"><img src="./foto/man1.png"> </a>
            </div>
        </article>
        <article class="course">
            <div class="gecisim">
            <a href="Görüs_Sayfalari/politik_gorus.php" ><img src="./foto/man1.png"> </a>
            </div>
        </article>
        <article class="course">
            <div class="gecisim">
            <a href="Görüs_Sayfalari/politik_gorus.php" ><img src="./foto/man1.png"> </a>
            </div>
        </article>
        <article class="course">
            <div class="gecisim">
            <a href="Görüs_Sayfalari/politik_gorus.php" ><img src="./foto/man1.png"> </a>
            </div>
        </article>
        <article class="course">
            <div class="gecisim">
            <a href="Görüs_Sayfalari/politik_gorus.php" ><img src="./foto/man1.png"> </a>
            </div>
        </article>
        <article class="course">
            <div class="gecisim">
            <a href="Görüs_Sayfalari/politik_gorus.php" ><img src="./foto/man1.png"> </a>
            </div>
        </article>
        <article class="course">
            <div class="gecisim">
            <a href="Görüs_Sayfalari/politik_gorus.php" ><img src="./foto/man1.png"> </a>
            </div>
        </article>
        <article class="course">
            <div class="gecisim">
            <a href="Görüs_Sayfalari/politik_gorus.php" ><img src="./foto/man1.png"> </a>
            </div>
        </article>
        <article class="course">
            <div class="gecisim">
            <a href="Görüs_Sayfalari/politik_gorus.php" ><img src="./foto/man1.png"> </a>
            </div>
        </article>
        
        
</section>


<section class="courses">
    <h2>Testlerimiz</h2>
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
                <a href="login.php" class="btn btn-primary"><b> Giriş Yap</b> </a>
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
                <a href="login.php" class="btn btn-primary"> <b> Giriş Yap</b></a>
            </div>
        </article>

        <article class="course">
            <div class="course__image">
                <img src="./foto/course2.jpg">
            </div>
            <div class="course__info">
                <h4>Psikolojik Görüş Testi</h4>
                <p>Bu testimiz kişinin zihinsel sağlığı, kişilik özellikleri, duygusal durumu, bireylerin düşünce yapısını, 
                    kişilik özelliklerini ve duygusal tepkilerini ölçmek için tasarlanmıştır. Cıkan sonuçlara göre hareket etmeniz önerilmez.
                </p>
                <a href="login.php" class="btn btn-primary"> <b> Giriş Yap</b> </a>
            </div>
        </article>

    </div>
</section>
<!--========================cs sonu===========================-->


<section class="faqs">
    <h2>Sıklıkla Sorulan Sorular</h2>
    <div class="container faqs__container">

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>Kendini tanıma sitesi nedir?</h4>
                <p>
                Kendini tanıma sitesi, bireylerin kendilerini daha iyi tanımalarına yardımcı olmak için çeşitli araçlar, 
                kaynaklar ve testler sunan bir web sitesidir. Bu araçlar bireylerin güçlü ve zayıf yönlerini, ilgi alanlarını, 
                kişilik özelliklerini ve hedeflerini anlamalarına yardımcı olabilir.
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>Kendimi tanımanın önemi nedir?</h4>
                <p>
                    LKendimizi tanımak, hayatımızı daha iyi anlamak, hedeflerimize odaklanmak ve gerçek potansiyelimizi ortaya çıkarmak için önemlidir. 
                    Kendinizi tanıdığınızda, ne istediğinizi ve nelerden hoşlandığınızı daha net bir şekilde görebilirsiniz. 
                    Böylelikle hayatınızda daha sağlıklı kararlar alabilir, hedeflerinize daha kolay odaklanabilirsiniz.
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>Kendimi tanımak için hangi araçları kullanabilirim?</h4>
                <p>
                Sitemizde kendinizi tanımak için birçok araç kullanabilirsiniz, örneğin psikolojik analiz testimize göz atabilirsiniz.
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>Kendini keşfetme sayfası üzerindeki testlerin sonuçlarına nasıl güvenebilirim?</h4>
                <p>
                Kendini keşfetme sayfası üzerindeki testlerin sonuçlarına tamamen güvenmek yerine, bu sonuçları bir başka kaynakla da karşılaştırmak faydalı olabilir. 
                Bu, sonuçların daha doğru ve güvenilir olmasına yardımcı olabilir.
                </p>
            </div>
        </article>
        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>Kendini keşfetme sayfanızın kullanımı ücretsiz mi?</h4>
                <p>
                    Evet, sayfamız tamamen ücretsizdir.
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
                <h4>Kendini keşfetme sayfasını nasıl kullanabilirim?</h4>
                <p>
                Kendini keşfetme sayfası genellikle kullanımı kolay ve anlaşılırdır. 
                Kayıt olmak, profil oluşturmak ve ardından araçlara ve testlere erişmek için basit talimatları takip etmeniz gerekebilir.
                </p>
            </div>
        </article>
        

    </div>
</section>


<!--========================sorularin sonu===========================-->
<a name="testler"></a>
<section class="container comments__container mySwiper">
    <h2>Uzman yorumları</h2>
    <div class="swiper-wrapper">
        <article class="comments swiper-slide">
            <div class="avatar">
                <img src="./foto/avatar1.jpg">
            </div>
            <div class="comment__info">
                <h5>Dr. David Keirsey</h5>
                <small>Amerikalı Psikolog</small>
            </div>
            <div class="comment__body">
                <p>
                MBTI, dünyada en yaygın kullanılan kişilik değerlendirme araçlarından biridir ve insanların kendi güçlü yanlarını ve tercihlerini fark etmelerinin yanı sıra başkalarıyla nasıl daha etkili çalışabileceklerini anlamalarına yardımcı olma gibi paha biçilmez bir değere sahiptir.
.
                </p>
            </div>
        </article>
        <article class="comments swiper-slide">
            <div class="avatar">
                <img src="./foto/avatar2.jpg">
            </div>
            <div class="comment__info">
                <h5>Dr. Dario Nardi</h5>
                <small>UCLA'da Eğitim Doçenti ve MBTI uzmanı</small>
            </div>
            <div class="comment__body">
                <p>
                MBTI, kişilik farklılıklarını tartışmak ve bunların etkili bir şekilde nasıl yönetilebileceğini tartışmak için ortak bir dil sağladığından koçluk, danışmanlık ve eğitim alanlarında özellikle yararlı olabilir.
                </p>
            </div>

        </article>
        <article class="comments swiper-slide">
            <div class="avatar">
                <img src="./foto/avatar3.jpg">
            </div>
            <div class="comment__info">
                <h5>Dr. Caroline Leaf</h5>
                <small>bilişsel sinirbilimci ve iletişim koçu</small>
            </div>
            <div class="comment__body">
                <p>
                MBTI, bireylerin kişilik tiplerindeki farklılıkları ve bu farklılıkların daha fazla ekip çalışması ve işbirliği için nasıl kullanılabileceğini anlamalarına ve takdir etmelerine yardımcı olmak için değerli bir araç olmuştur.
                </p>
            </div>

        </article>

        <article class="comments swiper-slide">
            <div class="avatar">
                <img src="./foto/avatar4.jpg">
            </div>
            <div class="comment__info">
                <h5>Dr. Warren Bennis</h5>
                <small>liderlik uzmanı ve yönetim danışmanı</small>
            </div>
            <div class="comment__body">
                <p>
                MBTI, kişilik türlerinin bir ekibe veya kuruluşa nasıl katkıda bulunabileceğini anlamak için bir kaynak sağladığından özellikle liderlik gelişimi alanında yardımcı olabilir.
                </p>
            </div>

        </article>

        <article class="comments swiper-slide">
            <div class="avatar">
                <img src="./foto/avatar5.jpg">
            </div>
            <div class="comment__info">
                <h5>Dr. Marti Olsen Laney</h5>
                <small>Psikoterapist ve "The Introvert Advantage" kitabının yazarı</small>
            </div>
            <div class="comment__body">
                <p>
                MBTI, kişisel ve profesyonel gelişim için güçlü bir araçtır ve bireylerin kendi güçlü yanlarını ve tercihlerini anlamalarına ve hedeflerine ulaşmak için bunları nasıl kullanabileceklerine yardımcı olur.
                </p>
            </div>

        </article>

    </div>
    <div class="swiper-pagination"></div>
</section>

<!--========================comments sonu===========================-->


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


<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        //ekran uzunlugu 6000px ise
        breakpoints: {
            600: {

                slidesPerView: 2
            }

        }

    });
</script>
</body>
</HTML>
