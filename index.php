<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="COVID-19, كورونا" >
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="css/basics.css" media="screen">
    <link rel="stylesheet" href="css/article.css" media="screen">
    <link rel="stylesheet" href="css/photos.css" media="screen">
    <link rel="stylesheet" href="css/vide.css" media="screen">
    <link rel="stylesheet" href="css/table.css" media="screen">
    <link rel="stylesheet" href="css/creators.css" media="screen">
    <link rel="icon" href="imgs/covid.png">
    <title>COVID-19 | فيروس كورونا</title>
</head>
    <body>
        <div class="main">
            
            <!--[ غلاف لتغطية المحتوى يظهر قبل استكمال التصفح ]-->
            <div id="screen-cover"></div>

            
            <!--[ رسالة ترحيب وتعريف بالمشروع ]-->
            <section class="welcome" id="wel">
                <div class="wel-cover"></div>
                <div class="wel-msg">
                    <h1 class="hello">مرحباً</h1>
                    <p>
                        تم تنفيذ هذا العمل بواسطة طلاب قسم تكنولوجيا التعليم الرقمي بالترم الرابع تعليم مدمج
                    </p>
                    <h2>تحت إشراف</h2>
                    <h3>أ.د / نهى شبرية</h3>
                </div>
                <span class="proceedBtn">إستكمال التصفح <span class="effect" id="wel-close">إغلاق</span></span>
            </section>

            <!--[ استدعاء أقسام الموقع ]-->
            <?php 
                include 'sections/main.php';
                include 'sections/article.php';
                include 'sections/photo.php';
                include 'sections/video.php';
                include 'sections/table.php';
                include 'sections/creators.php';
            ?>

        </div>

        <!-- زر الصعود الى اعلى الصفحة -->
        <div class="totop" id="totop">
            <img src="imgs/icons/totop-arrow.svg" alt="">
        </div>

    <script src="js/myCode.js"></script>
    <script>





    </script>
    <!--[تظهر هذه النافذة عندما يتم فتح الموقع من خلال الموبايل]-->
    <div id="notSupported">
        <h1 id="notSupportedMsg">الموقع غير مدعوم على هذا الجهاز</h1>
    </div>
    </body>
</html>