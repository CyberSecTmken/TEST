

<!DOCTYPE html>

<html dir="rtl">
<head>
    <title>منصة مسار</title>
    <link href="/Portal/Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/Portal/Content/bootstrap-confirm-delete.css" rel="stylesheet" type="text/css" />
    <link href="/Portal/Content/equal-column.css" rel="stylesheet" type="text/css" />
    <link href="/Portal/Content/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/Portal/Content/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="/Portal/Content/responsive.css" rel="stylesheet" type="text/css" />
    <link href="/Portal/Content/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/Portal/Content/MCSComponents.css" rel="stylesheet" />
    <link href="/Portal/Content/NewLandingStyle.css" rel="stylesheet" />
    
    <link href="/Portal/Content/widgets.css" rel="stylesheet" />
    <link href="/Portal/slick-1.8.1/slick/slick.css" rel="stylesheet" />
    <link href="/Portal/slick-1.8.1/slick/slick-theme.css" rel="stylesheet" />
    <script src="/Portal/Scripts/popper.js"></script>
    <script src="/Portal/Scripts/jquery.min.js"></script>
    <script src="/Portal/Scripts/PasswordRulesjs.js"></script>
    <script src="/Portal/Scripts/EnterKey.js"></script>
    <script src="/Portal/Scripts/NumberValidation.js"></script>
    <script src="/Portal/Scripts/bootstrap.min.js"></script>
    <script src="/Portal/Scripts/bootstrap-datepicker.min.js"></script>
    <script src="/Portal/Scripts/bootstrap-confirm-delete.js"></script>
    <script src="/Portal/Scripts/bootstrap-select.js"></script>
    <script src="/Portal/Scripts/Landing.js"></script>
    <script src="/Portal/Scripts/calendars.js"></script>
    <script src="/Portal/Scripts/ummalqura.js"></script>
    <script src="/Portal/Scripts/ummalqura.format.js"></script>
    <script src="/Portal/Scripts/ummalqura.datetimepicker.js"></script>
    <script src="/Portal/Scripts/SetUmmAlQuraDatejs.js"></script>
    <script src="/Portal/slick-1.8.1/slick/slick.min.js"></script>

    

    <meta name="login" content="Login" />
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            #login .SSO-login {
                margin: auto;
                margin-bottom: 20px;
                margin-top: 20px;
            }
        </style>
</head>
<body>

    <header>
        
<head>
    <meta http-equiv="Content-Security-Policy" content="connect-src 'self' eum.mcs.gov.sa; script-src 'unsafe-inline' cdn.appdynamics.com; img-src cdn.appdynamics.com; child-src cdn.appdynamics.com">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <a class="navbar-home-brand navbar-brand ml-auto hidden-sm-up float-xs-right" style="padding-right:7%" href="/Portal/Account/Login"><img src="/Portal/Content/Images/Newlogo.png" class="header-logo"/></a>

    <div class="navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav hr-information" style="padding-right:10%; text-align:center;">
            <li class="nav-item"> <button Id="Mainpage" class="active-button Mainpage" name="Mainpage" onclick="RedirectToHome()" style="background-color:; color: ; border: 1px solid ;cursor: pointer;">الصفحة الرئيسية</button></li>
            <li class="nav-item"> <button Id="register" class="disactive-button register" name="register" onclick="RedirectToServiceCatalog()" style="background-color:; color: ; border: 1px solid ;cursor: pointer;">الخدمات الالكترونية</button></li>


            <li class="nav-item"> <button Id="Callus" class="disactive-button Callus" name="Callus" onclick="RedirectToContactUs()" style="background-color:; color: ; border: 1px solid ;cursor: pointer;">اتصل بنا</button></li>
        </ul>
    </div>
    <style>
        #registerLoginForm .active-button {
            width: auto !important;
            cursor: pointer;
        }
    </style>
    <div id="registerLoginForm" class="registerLoginBtn form-inline my-2 my-lg-0">
            <a class="NewUserButton" href="https://masar.gov.sa/isam/sps/mcssp/saml20/logininitial?RequestBinding=HTTPPost&amp;PartnerId=https://www.iam.sa/samlsso&amp;NameIdFormat=Email&amp;Target=https://masar.gov.sa/Portal/ControlPanel"><button Id="NewUser" class="active-button NewUser" name="NewUser" style="display:none;width:300.4px; !important;">تسجيل الدخول عبر النفاذ الوطني الموحد</button></a>

        <!--  <a class="NewUserButton" syt href="/Portal/Account/Registration"><button Id="NewUser" class="disactive-button NewUser" name="NewUser" style="display:none !important">مستخدم جديد</button></a>-->
    </div>

</nav>

<script>
    $("li").on("click", function () {
        $(this).parents("ul").children().each(function () {
            $(this).find("button").removeClass("active-button").addClass("disactive-button");
        });
        $(this).find("button").removeClass("disactive-button").addClass("active-button");
    });
    function RedirectToContactUs() {
       // window.location.href = 'https://www.mcs.gov.sa/ar/help/ContactUs/Pages/default.aspx#MSOZoneCell_WebPartWPQ3';
        window.location.href = '/Portal/Account/ContactUs';
    };

    function RedirectToHome() {
        window.location.href = '/Portal/';
    };
    function RedirectToServiceCatalog() {
        window.location.href = 'https://mlsd.gov.sa/ar/queries';
    };
</script>
    </header>

    <div id="LoginBar" class="login toggled_content " style="display:none">
        <div id="login" class=" d-flex">
            <section class="SSO-login">
    <div>
        <div class="d-flex flex-column" align="center">
            <h1 class="eservices-portal mt-3"><b>بوابة النفاذ الوطني الموحد </b></h1>
            <p class="sso-text pt-5">سيتم تحويلك الى صفحة الدخول عبر بوابه النفاذ الوطني الموحد</p>
            
            
            <a href="https://masar.gov.sa/isam/sps/mcssp/saml20/logininitial?RequestBinding=HTTPPost&amp;PartnerId=https://www.iam.sa/samlsso&amp;NameIdFormat=Email&amp;Target=https://masar.gov.sa/Portal/ControlPanel" id="Login" class="active-button Login" style="border: 1px solid ;cursor: pointer;display: block; margin: auto;">تسجيل دخول</a>
        </div>
    </div>
</section>

        </div>
    </div>

    
<img src="/Portal/Content/images/landin-header-image-2.svg" style="width:100%;" />
<div class="container masar-block">
    <div class="masar-text bottom-right">
        <h1 class="masar-header ">مسار  </h1>
        <h2 class="masar-h2 ">
            المنصة الرقمية<br />
            لإدارة و تطوير الموارد البشرية
        </h2>
        <p class="masar-p ">
            حلول رقمية مبتكرة و آمنة لإدارة رأس المال البشري و تحقيق التميز في الأداء الحكومي.
        </p>
        
    </div>
</div>




    <div>
        
<div class="container">

    

    <div class="container" style="padding-top:2%">
        <div class="row">
            <figure class="rounded mx-auto d-flex align-items-end" style="margin-bottom:0;">
                <span class="horizantal-line" style="width:70px"></span>
                <h1 class="masar-title" style="font-size: 50px;">عن مسار</h1>
            </figure>
        </div>
    </div>

    <div class="row" style="padding-top:3%">

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="container" style="padding-left: 0px;">
                <video style="width:100%; height:100%; border-radius: 10px;" controls>
                    <source src="/Portal/Content/videos/Masar_Final with new intro.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    متصفحك لا يدعم هذا الفيديو.
                </video>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="pargraph" style="text-align: right; border-right:none; ">
                منصة مسار الوطنية تقدم خدماتها
                الالكترونية للجهات الحكومية والموظفين
                والأفراد في إدارة وتطوير الموارد البشرية بما
                يتوافق مع اللائحة التنفيذية للموارد البشرية
                الحكومية
            </p>

            
        </div>

    </div>

</div>

    </div>

    <div>
        
<div class="container" style="padding-top:2%">

    <div class="container" style="padding-top:4%">
        <div class="row">
            <figure class="rounded mx-auto d-flex align-items-end" style="margin-bottom:0;">
                <span class="horizantal-line" style="width:100px"></span>
                <h1 class="masar-title" style="font-size: 50px;">أرقام مسار</h1>
            </figure>
        </div>
    </div>

    <div class="row" style="padding-top:3%">

        

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-md-2 pb-md-2" align="center">
            <div class="cardNo-style" id="card"><div><img alt="document" src="/Portal/Content/images/icon_1.png" style="display: inline-block; width: 25%; padding-top: 7%; width:70px; height:80px"></img></div><div><label id="lblHomeNum1" style="font-weight: 100; font-size: 65px; padding-top: 5%; color:#17bec0">481</label></div><div><label class="cardNo-label" style="background-color: #fff; padding-bottom: 5%;">عدد الجهات المستفيدة</label></div></div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-md-2 pb-md-2" align="center">
            <div class="cardNo-style" id="card"><div><img alt="document" src="/Portal/Content/images/icon_2.png" style="display: inline-block; width: 25%; padding-top: 7%; width:65px; height:80px"></img></div><div><label id="lblHomeNum2" style="font-weight: 100; font-size: 65px; padding-top: 5%; color:#17bec0">4434923</label></div><div><label class="cardNo-label" style="background-color: #fff; padding-bottom: 5%;">عدد الزيارات</label></div></div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-md-2 pb-md-2" align="center">
            <div class="cardNo-style" id="card"><div><img alt="document" src="/Portal/Content/images/icon_3.png" style="display: inline-block; width: 25%; padding-top: 7%; width:40px; height:80px"></img></div><div><label id="lblHomeNum3" style="font-weight: 100; font-size: 65px; padding-top: 5%; color:#17bec0">987595</label></div><div><label class="cardNo-label" style="background-color: #fff; padding-bottom: 5%;">عدد المستفيدين</label></div></div>
        </div>

        

    </div>

</div>


<script>

    $(document).ready(function () {

    var Url = "/Portal/Account/Login/GetHomeNumbers";

            $.ajax({
                type: "Get",
                url: Url,
                success: function (response) {
                    
                    if (response != "" || response != null) {
                        $('#lblHomeNum1')[0].innerText = JSON.parse(response)["BIStatsInqRs"].Body.BIStatRec[0].StatVal;
                        $('#lblHomeNum2')[0].innerText = JSON.parse(response)["BIStatsInqRs"].Body.BIStatRec[2].StatVal;
                        $('#lblHomeNum3')[0].innerText = JSON.parse(response)["BIStatsInqRs"].Body.BIStatRec[1].StatVal;
                    }
                },
                error: function (response) {
                    console.log("No data found");
                }
            });

    });


</script>
    </div>

    <div>
        <div class="masar-services" style="padding-top:3%">

    <div class="container" style="padding-top:2%">
        <div class="row">
            <figure class="rounded mx-auto d-flex align-items-end" style="margin-bottom:0;">
                <span class="horizantal-line" style="width:140px"></span>
                <h1 class="masar-title" style="font-size: 50px;">خدمات مسار</h1>
                
            </figure>
        </div>
    </div>


    <div class="container" style="padding-top:3%">

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-12" align="center">
                <div align="justify" class="card-style SerciveCard" id="card" name="card"><a class="newslist_container" href="https://mlsd.gov.sa/ar/queries/%D8%AE%D8%AF%D9%85%D8%A9-%D8%A5%D8%B4%D8%BA%D8%A7%D9%84-%D8%A7%D9%84%D9%88%D8%B8%D8%A7%D8%A6%D9%81-%D8%A8%D8%A7%D9%84%D8%AA%D8%B1%D9%82%D9%8A%D8%A7%D8%AA" target="_blank"><div><div class="innerDive"><img alt="promosion" class="card-icon" src="/Portal/Content/images/promosion_icon - Copy.JPG"></img></div><label class="card-label" style="background-color:#62B54E">الترقيات</label><div align="justify" class="forground-style foreground"><label class="forground-label" style="background-color:#62B54E">الترقيات</label><p class="forground-text" style="padding-top: 15%; background-color:#a7ea96">هى خدمة تعمل على تمكين الجهات الحكومية من ترقية موظفيها إما عن طريق الطرح والمفاضلة أو بالترقية الإستثنائية.</p></div></div></a></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12" align="center">
                <div align="justify" class="card-style SerciveCard" id="card" name="card"><a class="newslist_container" href="https://mlsd.gov.sa/ar/queries/%D8%AE%D8%AF%D9%85%D8%A9-%D8%A7%D9%84%D8%AA%D8%B8%D9%84%D9%85%D8%A7%D8%AA" target="_blank"><div><div class="innerDive"><img alt="grievance" class="card-icon" src="/Portal/Content/images/grievance_icon.jpg"></img></div><label class="card-label" style="background-color:#2071A8">التظلمات</label><div align="justify" class="forground-style foreground"><label class="forground-label" style="background-color:#2071A8">التظلمات</label><p class="forground-text" style="padding-top: 15%; background-color:#2779b9">هى خدمة إلكترونية تعمل على تمكين المستخدمين من رفع التظلمات ومتابعتها والرد عليها من قبل الجهات المعنية.</p></div></div></a></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12" align="center">
                <div align="justify" class="card-style SerciveCard" id="card" name="card"><a class="newslist_container" href="https://mlsd.gov.sa/ar/queries/%D8%A8%D9%8A%D8%A7%D9%86%D8%A7%D8%AA%D9%8A-%D8%A7%D9%84%D9%88%D8%B8%D9%8A%D9%81%D9%8A%D8%A9" target="_blank"><div><div class="innerDive"><img alt="bayanati" class="card-icon" src="/Portal/Content/images/bayanati_icon.png"></img></div><label class="card-label" style="background-color:#17ADAE">بياناتي</label><div align="justify" class="forground-style foreground"><label class="forground-label" style="background-color:#17ADAE">بياناتي</label><p class="forground-text" style="padding-top: 15%; background-color:#6adddd">توفير سجل موحد لموظف القطاع العام مع إتاحة التصحيح والتعديل وطباعة بيان الخدمة بشكل الكتروني</p></div></div></a></div>
            </div>                       
            <div class="col-lg-3 col-md-4 col-sm-12 col-12" align="center">
                <div align="justify" class="card-style SerciveCard" id="card" name="card"><a class="newslist_container" href="https://mlsd.gov.sa/ar/queries/%D8%AE%D8%AF%D9%85%D8%A9-%D8%A8%D9%8A%D8%A7%D9%86" target="_blank"><div><div class="innerDive"><img alt="document" class="card-icon" src="/Portal/Content/images/document_icon.JPG"></img></div><label class="card-label" style="background-color:#8C8990">بيان</label><div align="justify" class="forground-style foreground"><label class="forground-label" style="background-color:#8C8990">بيان</label><p class="forground-text" style="padding-top: 15%; background-color:c4c4c4">أنهاء خدمات الموظف الحكومي بالتكامل مع المؤسسة العامة للتقاعد والمساهمة في تسوية مستحقاته وطباعة بيان الخدمة  إلكترونياً.</p></div></div></a></div>
            </div>
        </div>

        <a href="https://mlsd.gov.sa/ar/queries" target="_blank">
            <div class="row justify-content-center mt-3">
                <button Id="DisplayServices" class="disactive-button DisplayServices" name="DisplayServices" onclick="RedirectToServiceCatalog()" style="height:41px">عرض جميع الخدمات</button>
            </div>
        </a>
    </div>



</div>
<script>
    function RedirectToServiceCatalog() {
        window.location.href = 'https://www.mcs.gov.sa/ar/EServices/Pages/default.aspx#!';
    };
</script>

    </div>
    
    <div>
        <style>
    .slick-prev:before, .slick-next:before {
        color: cornflowerblue !important;
    }

    .slick-slider .tweetslider .slick-track, .slick-slider .slick-list {
        direction: ltr;
    }

    .tweetslider {
        margin: auto;
        padding: 20px;
        width: 100%;
    }

    .slick-dots li:nth-last-child(5){
        display: none
    }
</style>


<div class="container">
    <div class="container" style="padding-top:5%">
        <div class="row">
            <figure class="rounded mx-auto d-flex align-items-end" style="margin-bottom:0;">
                <span class="horizantal-line" style="width:100px"></span>
                <h1 class="masar-title" style="font-size: 50px;">تويتر</h1>
            </figure>
        </div>
    </div>

    <div class="tweetslider">
        <div align="center">

            <blockquote class="twitter-tweet" data-cards="hidden" data-conversation="none" data-lang="ar">
                <p lang="ar" dir="rtl">
                    لماذا يعتبر تطبيق &quot;موعد&quot; أهم تطبيق يجب تحميله على هاتفك في الوقت الحالي؟
                    <a href="https://twitter.com/hashtag/%D9%83%D9%84%D9%86%D8%A7_%D9%85%D8%B3%D8%A4%D9%88%D9%84?src=hash&amp;ref_src=twsrc%5Etfw">#كلنا_مسؤول</a>
                    <br><br>لتحميل التطبيق عبر الرابط:
                    <a href="https://t.co/dBCi1WCF85">https://t.co/dBCi1WCF85</a>
                    <a href="https://t.co/OdaNiPrAyF">pic.twitter.com/OdaNiPrAyF</a>
                </p>&mdash; منصة مسار (@masar)
                <a href="https://twitter.com/masar/status/1242845214093557760?ref_src=twsrc%5Etfw">٢٥ مارس ٢٠٢٠</a>
            </blockquote>

        </div>
        <div align="center">
            <blockquote class="twitter-tweet" data-cards="hidden" data-conversation="none" data-lang="ar">
                <p lang="ar" dir="rtl">
                    وزارة
                    <a href="https://twitter.com/hashtag/%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D8%A9_%D8%A7%D9%84%D9%85%D8%AF%D9%86%D9%8A%D8%A9?src=hash&amp;ref_src=twsrc%5Etfw">#الخدمة_المدنية</a> تُطلق <a href="https://twitter.com/hashtag/%D9%85%D9%86%D8%B5%D8%A9_%D9%85%D8%B3%D8%A7%D8%B1?src=hash&amp;ref_src=twsrc%5Etfw">#منصة_مسار</a> لتعزيز التحول الرقمي في المنظومة الحكومية، وتهدف إلى حوكمة الإجراءات وتوحيدها في منصة رقمية موحدة.<br><br>
                    <a href="https://t.co/5i6kLcmsyD">https://t.co/5i6kLcmsyD</a>
                    <a href="https://t.co/zaovhRQWyO">pic.twitter.com/zaovhRQWyO</a>
                </p>&mdash; منصة مسار (@masar)
                <a href="https://twitter.com/masar/status/1223864786527625216?ref_src=twsrc%5Etfw">٢ فبراير ٢٠٢٠</a>
            </blockquote>
        </div>
        <div align="center">
            <blockquote class="twitter-tweet" data-cards="hidden" data-conversation="none" data-lang="ar">
                <p lang="ar" dir="rtl">
                    وكيل وزارة
                    <a href="https://twitter.com/hashtag/%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D8%A9_%D8%A7%D9%84%D9%85%D8%AF%D9%86%D9%8A%D8%A9?src=hash&amp;ref_src=twsrc%5Etfw">#الخدمة_المدنية</a>
                    للتحوّل الرقمي م.فيصل باخشوين ضيفًا على قناة
                    <a href="https://twitter.com/alekhbariyatv?ref_src=twsrc%5Etfw">@alekhbariyatv</a> للحديث عن
                    <a href="https://twitter.com/hashtag/%D9%85%D9%86%D8%B5%D8%A9_%D9%85%D8%B3%D8%A7%D8%B1?src=hash&amp;ref_src=twsrc%5Etfw">#منصة_مسار</a>
                    <a href="https://t.co/GWi65kxPOx">https://t.co/GWi65kxPOx</a>
                </p>&mdash; منصة مسار (@masar)
                <a href="https://twitter.com/masar/status/1224620170318053377?ref_src=twsrc%5Etfw">February 4, 2020</a>
            </blockquote>
        </div>
        <div align="center">
            <blockquote class="twitter-tweet" data-cards="hidden" data-conversation="none" data-lang="ar">
                <p lang="ar" dir="rtl">
                    الترقيات زمان ⏳🗄🗃<br>الترقيات اليوم 💻 📱⌚<br><br>اختصرنا المشوااار بـ&quot;مسار&quot;.. تعرف على خدمة الترقيات عبر
                    <a href="https://twitter.com/hashtag/%D9%85%D9%86%D8%B5%D8%A9_%D9%85%D8%B3%D8%A7%D8%B1?src=hash&amp;ref_src=twsrc%5Etfw">#منصة_مسار</a> 👇🏻
                    <a href="https://t.co/Xd5XVNZmgJ">pic.twitter.com/Xd5XVNZmgJ</a>
                </p>&mdash; منصة مسار (@masar) <a href="https://twitter.com/masar/status/1229103191297548288?ref_src=twsrc%5Etfw">١٦ فبراير ٢٠٢٠</a>
            </blockquote>

        </div>
       

        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

</div>

<script>
    $('.tweetslider').slick({
        infinite: false,
        speed: 300,
        initialSlide: 4,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    //infinite: true,
                    arrows: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>
    </div>

    <div>
        
<div class="container">

    <div class="container" style="padding-top:5%">
        <div class="row">
            <figure class="rounded mx-auto d-flex align-items-end" style="margin-bottom:0;">
                <span class="horizantal-line" style="width:120px"></span>
                <h1 class="masar-title" style="font-size: 50px;">الاخبار</h1>
            </figure>
        </div>
    </div>

    <div class="row" style="padding-top:3%">

        <div class="col-lg-4 col-md-4 col-sm-12 col-12" align="center">
            <div class="cardNo-style" id="card" style="flex: 0 0 32 %; padding: 15px; width:auto;"><a class="newslist_container" href="https://mlsd.gov.sa/ar/node/525720" target="_blank"><div><img alt="Picture" src="/Portal/Content/images/Newlogo.png" style="display: inline-block; "></img></div><div><label class="cardNo-label" style="background-color: #fff; font-weight: 100; font-size: medium; padding-top: 15%; border-bottom: solid; color:#14b5b6">03-02-2020</label></div><div><label class="cardNo-label" style="background-color: #fff; padding-bottom: 5%; color:#14b5b6"> تعتبر ذراعاً تقنياً للوزارة يمكن أن يستفيد منه جميع موظفي القطاع العام... وزارة الموارد البشرية تطلق منصة مسار .. والحمدان: المنصة تختصر الوقت والجهد، وتمنح مزيداً من الشفافية</label></div></a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12" align="center">
            <div class="cardNo-style" id="card" style="flex: 0 0 32 %; padding: 15px; width:auto;"><a class="newslist_container" href="https://mlsd.gov.sa/ar/node/525852" target="_blank"><div><img alt="Picture" src="/Portal/Content/images/Newlogo.png" style="display: inline-block; "></img></div><div><label class="cardNo-label" style="background-color: #fff; font-weight: 100; font-size: medium; padding-top: 15%; border-bottom: solid; color:#14b5b6">21-11-2019</label></div><div><label class="cardNo-label" style="background-color: #fff; padding-bottom: 5%; color:#14b5b6">بحضور تجاوز ٥٣٠ وتفاعل مميز من الجهات الحكومية الخدمة المدنية تعقد رابع لقاءات التعريف بالمنصة الوطنية لإدارة الموارد البشرية في جدة</label></div></a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12" align="center">
            <div class="cardNo-style" id="card" style="flex: 0 0 32 %; padding: 15px; width:auto;"><a class="newslist_container" href="https://mlsd.gov.sa/ar/node/525888" target="_blank"><div><img alt="Picture" src="/Portal/Content/images/Newlogo.png" style="display: inline-block; "></img></div><div><label class="cardNo-label" style="background-color: #fff; font-weight: 100; font-size: medium; padding-top: 15%; border-bottom: solid; color:#14b5b6">04-11-2019</label></div><div><label class="cardNo-label" style="background-color: #fff; padding-bottom: 5%; color:#14b5b6">البدء بخدمة اشغال الوظائف بالترقية تمهيدا لإطلاق باقي خدماتها... انطلاق ورش عمل تدريب الجهات الحكومية على المنصة الوطنية للموارد البشرية الحكومية</label></div></a></div>
        </div>

    </div>

</div>

    </div>

    

    <footer class="footer">
        <div class="container-fluid footerHeadContainer">
    <div class="row footerInnerContainer" style="padding-top: 27px;" >

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 Footer-Components" align="center" style="padding-top: 40px !important;">
            <img class="logo-to-padding" src="/Portal/Content/images/masar_footer.png" alt="Masar Logo" width="120" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 footer-block d-flex justify-content-center Footer-Components" align="right" >
            <div class="landing-footer mr-5">
                <div class=" footer-text">
                    <!-- <a href="/Portal/Account/ContactUs"> اتصل بنا</a>-->
                    <a href='/Portal/Account/ContactUs' target="_blank"> اتصل بنا</a>
                    
                    <a href="https://mlsd.gov.sa/ar/page/%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9-%D8%A7%D9%84%D8%AE%D8%B5%D9%88%D8%B5%D9%8A%D8%A9"> سياسة الخصوصية</a>
                    <!--   <a href="https://www.mcs.gov.sa/Browse/Pages/TermsOfUse.aspx">  شروط الاستخدام </a>-->
                </div>
                <!--<p class="footer-text">
                    جميع الحقوق محفوظة لوزارة الخدمة المدنية 2019
                </p>-->

                <p class="footer-text">
                    جميع الحقوق محفوظة لوزارة الموارد البشرية والتنمية الاجتماعية 2020
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-4 footer-padding d-flex justify-content-end align-items-center Footer-Components" align="center">
            <a href="https://mlsd.gov.sa/"><img src="/Portal/Content/images/Sh_White.png"  width="145" style="padding-bottom:15px; padding-left:10px;" /></a>
            <img src="/Portal/Content/images/Sh1.png" class="border-right p-3" style="padding-right: 10px;" width="160"/>
        </div>

        
    </div>
</div>
    </footer>

    <script>
        $(document).ready(function () {
            var regButton = $(".NewUser");
            var logButton = $("#toggler");

            if (regButton.is(":hidden")) {
                regButton.show();
            }
            if (logButton.is(":hidden")) {
                logButton.show();
            }
        });

        $('.toggler').click(function () {
            $(".toggled_content").slideToggle("slow");

            var regButton = $(".NewUserButton");
            if (regButton.is(":visible")) {
                regButton.hide();
            } else {
                regButton.show();
            }
        });
    </script>

    <script>
        $('#refresh-button').on('click', function (e) {
            var src = "Login/GetCaptchaImage?" + new Date().getTime();
            $("#login-captcha-img").attr("src", src);
        });
    </script>

</body>
</html>
