<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>عماد الدائمى</title>
    <link rel="icon" type="image/x-icon" href="{{ app('logo') }}" style="transform: scale(1.2);">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style>
        .privacy {
            padding-top: 100px;
            width: 100%;
        }

        .privacy-content {
            width: 80%;
            margin: 50px auto;
        }

        .privacy-content h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .privacy-content h4 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .privacy-content h5 {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 0px;
            width: 90%;
        }

        .information {
            padding-top: 0px;
        }

        .privacy-content h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 40px 0 10px 0;
        }

        .privacy-content p {
            font-size: 17px;
            font-weight: 400;
            margin-bottom: 5px;
            width: 90%;
        }

        .information p span,
        .information h6 {
            font-size: 18px;
            font-weight: 600 !important;
        }

        .information h6 {
            margin-bottom: 10px;
        }

        .privacy-content button {
            padding-left: 20px;
            cursor: pointer;
            color: blue;
            font-size: 18px;
            font-weight: 400;
            border: none;
        }

        @media(max-width:767px) {
            .privacy-content {
                width: 80%;
                margin: 0px auto;
                margin-bottom: 40px;
            }

            .privacy-content h2 {
                font-size: 20px;
            }

            .privacy-content h5 {
                font-size: 17px;
                width: 100%;
            }

            .privacy-content h4 {
                font-size: 18px;
            }

            .privacy-content h3 {
                font-size: 17px;
                width: 90%;
            }

            .privacy-content p {
                font-size: 14px;
                width: 100%;
            }

            .information p span,
            .information h6 {
                font-size: 17px;
                font-weight: 600 !important;
            }

            .privacy-content button {
                background: transparent;
                font-size: 14px;
                font-weight: 400;
            }

            .privacy-content-en h2 {
                font-size: 18px;
            }

            .privacy-content-en h4 {
                font-size: 16px;
            }

            .privacy-content-en h3 {
                font-size: 15px;
                width: 90%;
            }

            .privacy-content-en .information p span,
            .privacy-content-en .information h6 {
                font-size: 15px;
                font-weight: 600 !important;
                padding-right:5px;
            }

            .privacy-content-en .privacy-content p {
                font-weight: 300;
            }
            .privacy-content-en button { 
                padding-left:0px;
            }
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav id="navbar" class="nav-ar">
        <div class="menu-icon">
            <span class="fas fa-bars"></span>
        </div>
        <div class="logo">
            <a href="{{url('/')}}"><img alt="" loading="lazy" src="{{ app('logo') }}" /></a>
        </div>
        <div class="nav-items">
            <li class="active"><a href="{{url('/')}}">الرئيسية</a></li>
            <li><a class="n-item-2" href="#short">نبذه عن المرشح</a></li>
            <li><a class="n-item-3" href="#news">المقال</a></li>
            <li><a class="n-item-4" href="#contact">التواصل</a></li>

        </div>
        <div class="search-icon">
            <span class="fas fa-search"></span>
        </div>
        <div class="cancel-icon">
            <span class="fas fa-times"></span>
        </div>

    </nav>

    <!-- main-content -->
    <div class="privacy">
        <div class="privacy-content">
            <h2>سياسة الخصوصية لتطبيق daimi</h2>
            <h4>تم التحديث في: [5/8/2024]</h4>
            <h5>نحن في تدفق لتكنولوجيا المعلومات نهتم بخصوصية مستخدمينا ونلتزم بحماية البيانات الشخصية التي نجمعها. توضح
                هذه
                السياسة كيفية جمع واستخدام ومشاركة وحماية المعلومات التي نحصل عليها من مستخدمي تطبيق المتاح على جوجل
                بلاي
            </h5>
            <div class="information">
                <h3>1 - المعلومات التي نجمعها
                    المعلومات التي تقدمها لنا مباشرة :
                </h3>
                <p><span>معلومات الحساب :</span> عندما تقوم بإنشاء حساب في تطبيقنا، نجمع معلومات مثل اسمك، بريدك
                    الإلكتروني،
                    وكلمة المرور</p>
                <p><span>معلومات الملف الشخصي :</span> يمكن أن تشمل هذه المعلومات صورتك، وبيانات أخرى تختار إضافتها إلى
                    ملفك
                    الشخصي</p>
                <h4>المعلومات التي نجمعها تلقائيًا :</h4>
                <p><span>معلومات الجهاز :</span> مثل نوع الجهاز، نظام التشغيل، ومعرفات الجهاز الفريدة</p>
                <p><span>معلومات الاستخدام : </span> مثل الصفحات التي تزورها داخل التطبيق، ومدة استخدام التطبيق</p>
                <h4>المعلومات التي نجمعها من جهات خارجية :</h4>
                <p><span>خدمات الطرف الثالث :</span>إذا اخترت ربط حسابك في تطبيقنا بخدمات طرف ثالث (مثل فيسبوك أو جوجل)،
                    قد
                    نتلقى معلومات من تلك الخدمات</p>
                <h3>2 - كيف نستخدم المعلومات
                    نستخدم المعلومات التي نجمعها للأغراض التالية :
                </h3>
                <h6>تشغيل وصيانة التطبيق</h6>
                <h6>تحسين تجربة المستخدم</h6>
                <h6>إرسال الإشعارات والتحديثات</h6>
                <p><span>إرسال رسالة للمستخدم : </span>التطبيق يرسل رساله الي الرقم الذي يريد التطوع معنا ويقول له "تحية
                    طيبة وبعد يسرنا أن نبلغكم بترشيحكم للانضمام إلى فريق الحملة الانتخابية للسيد عماد الدايمى ، المرشح
                    للانتخابات الرئاسية التونسية نأمل أن تنضموا إلينا وتكونوا جزءاً من هذا الفريق المميز بانتظار ردكم
                    الكريم
                    تفضلوا بقبول فائق الاحترام</p>
                <h6>تقديم دعم العملاء</h6>
                <h6>تحليل الاستخدام وفهم كيفية استخدام التطبيق</h6>
                <h3>3 - مشاركة المعلومات
                    لن نشارك معلوماتك الشخصية مع أطراف ثالثة إلا في الحالات التالية :
                </h3>
                <p><span>بموافقتك :</span>عندما تمنحنا الإذن للقيام بذلك</p>
                <p><span>لأغراض قانونية :</span>إذا كان ذلك مطلوبًا بموجب القانون أو لحماية حقوقنا القانونية</p>
                <p><span>مع مقدمي الخدمات :</span>الذين يساعدوننا في تشغيل التطبيق وتقديم الخدمات</p>
                <p><span>حماية المعلومات :</span>نحن نستخدم مجموعة متنوعة من الإجراءات الأمنية لحماية معلوماتك الشخصية
                    من
                    الوصول غير المصرح به أو التعديل أو الكشف أو التدمير. ومع ذلك، لا يمكننا ضمان أمان تام للمعلومات
                    المنقولة
                    عبر الإنترنت أو المخزنة في أنظمتنا</p>
                <h3>4 - حقوقك</h3>
                <p>
                    يمكنك الوصول إلى معلوماتك الشخصية وتحديثها أو تصحيحها أو حذفها عن طريق الإعدادات في التطبيق أو من
                    خلال
                    [الاتصال بنا على [البريد الإلكتروني للدعم
                </p>
                <h3>5 - التغييرات على هذه السياسة</h3>
                <p>قد نقوم بتحديث هذه السياسة من وقت لآخر. سنخطرك بأي تغييرات عن طريق نشر السياسة الجديدة على هذه
                    الصفحة.
                    يُنصح بمراجعة هذه السياسة بانتظام لتكون على دراية بكيفية حماية معلوماتك</p>
                <h3>6 - الاتصال بنا</h3>
                <p>إذا كانت لديك أي أسئلة أو استفسارات حول هذه السياسة، يرجى الاتصال بنا على:</p>
                <p><button onclick="sendEmailDefault()">contact@daimi2024.com</button></p>


            </div>
        </div>
        <div class="privacy-content privacy-content-en" dir="ltr">
            <h2>Privacy Policy for the Daimi App</h2>
            <h4>Last Updated: [08/05/2024]</h4>
            <p>At Tafuq Information Technology, we value the privacy of our users and are committed to protecting the
                personal data we collect. This policy explains how we collect, use, share, and protect the information
                we obtain from users of the app available on Google Play.
            </p>
            <div class="information">
                <h3>1. Information We Collect
                    Information You Provide to Us Directly:
                </h3>
                <p><span>Account Information:</span>When you create an account in our app, we collect information such
                    as your name, email address, and password.
                </p>
                <p><span>Profile Information:</span>This may include your photo and other data you choose to add to your
                    profile.</p>
                <h4>Information We Collect Automatically:</h4>
                <p><span>Device Information:</span> Such as device type, operating system, and unique device
                    identifiers.</p>
                <p><span>Usage Information:</span>Such as the pages you visit within the app and the duration of app
                    usage.</p>
                <h4>Information We Collect from Third Parties:</h4>
                <p><span>Third-Party Services:</span> If you choose to link your account in our app to third-party
                    services (like Facebook or Google), we may receive information from those services.</p>
                <h3>2. How We Use the Information
                    We use the information we collect for the following purposes:
                </h3>
                <h6>Operating and maintaining the app.</h6>
                <h6>Improving user experience.</h6>
                <h6>Sending notifications and updates.</h6>
                <p><span>Sending messages to users:</span>The app sends a message to the number of those who wish to
                    volunteer with us, stating: "Greetings, we are pleased to inform you that you have been nominated to
                    join the campaign team of Mr. Emad Al-Daimi, the candidate for the Tunisian presidential elections.
                    We hope you will join us and be a part of this distinguished team. We look forward to your response.
                    Please accept our highest respect."
                </p>
                <h6>Providing customer support.</h6>
                <h6>Analyzing usage and understanding how the app is used.</h6>
                <h3>3 - Sharing Information
                    We will not share your personal information with third parties except in the following cases:
                </h3>
                <p><span>With Your Consent:</span> When you give us permission to do so.</p>
                <p><span>For Legal Reasons:</span>If required by law or to protect our legal rights.</p>
                <p><span>With Service Providers:</span>Who help us operate the app and provide services.</p>
                <p><span>Protecting Information :</span>We use a variety of security measures to protect your personal
                    information from unauthorized access, alteration, disclosure, or destruction. However, we cannot
                    guarantee complete security of information transmitted over the internet or stored in our systems.
                </p>
                <h3>4 - Your Rights</h3>
                <p>You can access, update, correct, or delete your personal information through the settings in the app
                    or by contacting us at contact@daimi2024.com.
                </p>
                <h3>5 - Changes to This Policy</h3>
                <p>We may update this policy from time to time. We will notify you of any changes by posting the new
                    policy on this page. You are advised to review this policy regularly to stay informed about how we
                    are protecting your information.
                </p>
                <h3>6 - Contact Us</h3>
                <p>If you have any questions or inquiries about this policy, please contact us at:</p>
                <p><span>Email</span><button onclick="sendEmailDefault()">contact@daimi2024.com</button></p>


            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-top">
            <a href="{{url('/')}}"><img loading="lazy" src="{{ app('logo') }}" /></a>
            <div class="links">
                <a href="">اتصل بنا</a>
                <a href="">خريطة الموقع</a>
                <a href="{{url('/privacy')}}">شروط و أحكام</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>حقوق الملكية © 2024</p>
            <div class="bottom-imgs">
                <a target="_blank"  href="https://www.youtube.com/channel/UCGuZ399peMn0MWzm5f6IsIw"><img loading="lazy" src="{{asset('website/assets/imgs/youtube.png')}}" /></a>
                <a target="_blank"  href="https://www.tiktok.com/@imeddaimi"><img loading="lazy" src="{{asset('website/assets/imgs/tiktok.png')}}" /></a>
                <a target="_blank" href="https://www.instagram.com/imeddaimi?igsh=ZXUyOGtjdXV6dG1n"><img loading="lazy" src="{{asset('website/assets/imgs/instgram.png')}}" /></a>
                <a target="_blank" href="https://x.com/imaddaimi?lang=en"><img loading="lazy" src="{{asset('website/assets/imgs/twitter.png')}}" /></a>
                <a target="_blank" href="https://www.facebook.com/ImedDaimiOfficielle?mibextid=LQQJ4d"><img loading="lazy" src="{{asset('website/assets/imgs/facebook.png')}}" /></a>
                
            </div>
        </div>
    </div>

    <script src="{{asset('website/js/index.js')}}"></script>
    <script>
        function sendEmailDefault() {
            var email = "contact@daimi2024.com";
            var subject = "";
            var msgBody = "";
            window.open(`mailto:${email}?subject=${subject}&body=${msgBody}`);
        }
    </script>
</body>

</html>