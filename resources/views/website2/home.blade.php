<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>عماد الدائمى</title>
    <link rel="icon" type="image/x-icon" href="{{asset('website/assets/imgs/logo.png')}}" style="transform: scale(1.2);">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style>
        .popup {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(
                0,
                0,
                0,
                0.4
            );
            display: none;
        }
        .popup-content {
            background-color: white;
            margin: 10% auto;
            padding: 1%;
            border: 1px solid #888888;
            width: 30%;
            font-weight: bolder;
        }
        .popup-content button {
            display: block;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
        .error-message {
            color: red;
            font-size: 12px;
            display: none; /* Hide error messages by default */
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
            <img alt="" loading="lazy" src="{{asset('website/assets/imgs/logo.png')}}" />
        </div>
        <div class="nav-items">
            <li class="active"><a href="#">الرئيسية</a></li>
            <li><a href="#short">نبذه عن المرشح</a></li>
            <li><a href="#news">المقال</a></li>
            <li><a href="#contact">التواصل</a></li>

        </div>
        <div class="search-icon">
            <span class="fas fa-search"></span>
        </div>
        <div class="cancel-icon">
            <span class="fas fa-times"></span>
        </div>
        <!--
        <div class="custom-select-wrapper custom-select-wrapper-ar">
            <div class="custom-select">
                <div class="custom-select-trigger">

                    <div class="arrow"></div>
                    <span class="flexxx">Ar <img loading="lazy" src="{{asset('website/assets/imgs/Mask.png')}}" /></span>
                </div>
                <div class="custom-options">
                     <span class="custom-option" data-value="en">En <img loading="lazy" src="./assets/imgs/Mask.png" /></span> 
                    <span class="custom-option" data-value="ar">Ar <img loading="lazy"
                            src="{{asset('website/assets/imgs/Mask.png')}}" /></span>
                </div>
            </div>
        </div>
         -->
    </nav>

    <!-- main-content -->
    <div class="content content-ar">
        <div class="sec-1">
            <img loading="lazy" src="{{asset('website/assets/imgs/img1.png')}}" />
            <div class="sec1-content">

                <h5>مرحباً بكم في الموقع الرسمي
                    للمهـــندس عمــاد الدائمـــي المرشــــح الرئاســــي</h5>
                <a class="btn-1" href="#short"><button>نبــذه عن المرشح</button></a>
                <a class="btn-2" href="#contact"><button>التواصـــل</button></a>
            </div>

        </div>

        <div class="sec-2 short" id="short">
            <h5>نبــذه عـن المرشـــح</h5>
            <img loading="lazy" src="{{asset('website/assets/imgs/img2.png')}}" />
            <p>المهندس عماد الدايمي، من مواليد سنة 1970 بمدينة مدنين في الجنوب التونسي.<br />
                رئيس مؤسس لجمعية "مرصد رقابة</p>
            <p>عضو مجلس نواب الشعب للدورة النيابية 2014-2019 عن دائرة مدنين.</p>
        </div>

        <div class="sec-3">
            <h5>العمــــل</h5>
            <div class="flexx">
                <div class="flexx-right plus">
                    <ul>
                        <li>تولى مسؤولية الوزير مدير الديوان الرئاسي من ديسمبر 2011 الى افريل 2013.</li>
                        <li>شغل خطة الأمين العام لحزب المؤتمر من أجل الجمهورية (2013-2016)</li>
                        <li>ثم نائب رئيس حزب الحراك (2016-2017)</li>
                        <li>والأمين العام للحزب (2017-2018).</li>
                        <li>شارك في تأسيس منظمة المجلس العربي للثورات الديمقراطية وشغل لسنوات خطة الأمين العام للمجلس 
                        </li>
                    </ul>
                </div>
                <div class="flexx-left">
                    <img loading="lazy" alt="" class="img-1" src="{{asset('website/assets/imgs/img3.png')}}" />
                    <img loading="lazy" alt="" class="img-2" src="{{asset('website/assets/imgs/img4.png')}}" />
                </div>

            </div>
            <div class="flexx flexx-2">
                <div class="flexx-right">
                    <ul>
                        <li>شغل خطة مقرر لجنة الحقوق والحريات والعلاقات الخارجية بمجلس نواب الشعب بالإضافة لعضو لجنة
                            الأمن والدفاع من 2015 الى  2019.</li>
                        <li>عضو المنتدى الدولي للنواب من أجل التقييم والمنظمة الدولية للنواب ضد الفساد.</li>
                        <li>متحصل على الصنف الثاني من وسام الجمهورية وعلى جائزة منظمة "أنا يقظ" لأفضل مبلغ عن الفساد
                            لسنة  2017.</li>
                    </ul>
                </div>
                <div class="flexx-left">
                    <img loading="lazy" alt="" class="img-3" src="{{asset('website/assets/imgs/img5.png')}}" />
                </div>

            </div>
        </div>
        <div class="sec-4" id="news">
            <h5>المقــــال</h5>
            <div class="flexx-3">
                <img loading="lazy" src="{{asset('website/assets/imgs/img6.png')}}" />
                <ul>
                    <li>تولى مسؤولية الوزير مدير الديوان الرئاسي من ديسمبر 2011 الى افريل 2013.</li>
                    <li>شغل خطة الأمين العام لحزب المؤتمر من أجل الجمهورية (2013-2016)</li>
                    <li>ثم نائب رئيس حزب الحراك (2016-2017)</li>
                    <li>والأمين العام للحزب (2017-2018).</li>
                    <li>شارك في تأسيس منظمة المجلس العربي للثورات الديمقراطية وشغل لسنوات خطة الأمين العام للمجلس </li>
                </ul>
            </div>
            <div class="cards">
                <div class="card card-1">
                    <p>شارك في الأنشطة النضالية والاحتجاجية في الفترتين التلمذية والطلابية</p>
                    <p>مناضل نشيط في صفوف الاتحاد العام التونسي للطلبة (1988 ـ 1991)</p>
                    <p>مناضل نشيط في صفوف الاتحاد العام التونسي للطلبة (1988 ـ 1991)</p>
                </div>
                <div class="card card-3">
                    <p>غادر البلاد خلسة عبر ليبيا لتجنب الاعتقال يوم 16 نوفمبر 1991 وظل في المهجر حتى يوم 18 جانفي 2011.
                    </p>
                    <p>تحصل على اللجوء السياسي في فرنسا سنة  1996 وواصل نضاله السياسي  ضد سياسات النظام الديكتاتوري في
                        تونس من خلال كتاباته وومبادراته  الجمعياتية ومداخلاته الإعلامية المكثفة</p>
                </div>
                <div class="card">
                    <p>ساهم قبل الثورة في تأسيس عدد من الجمعيات: "منتدى الاقتصاد البديل"المنتدى الدولي للتنمية
                        والديموقراطية"؛ "مجموعة الكرامة"؛ "المنظمة الدولية للمهجرين التونسيين" وشغل خطة منسقها؛
                        "تونس المستقبل" وشغل فيها خطة الرئيس.
                    </p>
                    <p>أشرف على تنظيم تظاهرات ومؤتمرات دولية وقدم محاضرات عديدة في مجال الحريات والشفافية ومقاومة الفساد
                        في دول مختلفة من العالم.
                    </p>
                </div>
            </div>
        </div>
        <div class="sec-5">
            <div class="sec5-top">
                <img src="{{asset('website/assets/imgs/img7.png')}}" />
                <p>عرف باطلاعه الكبير على هيكلية الوزارات والمؤسسات والمنشآت العمومية وتقاريرها المالية وتقارير الرقابة.
                    كما عرف بالعمل على ملفات الفساد الكبرى عبر آليات الرقابة البرلمانية وآليات النفاذ إلى المعلومة في
                    اطار عمله النيابي والمواطني في مكافحة الفساد في البلاد. كما تولى ايداع ملفات عديدة لدى القطب القضائي
                    الاقتصادي والمالي المتخصص في ملفات الفساد، وأدى عمله الى إيقافات في صفوف مسؤولين إداريين تورطوا في
                    ملفات متفاوتة الخطور</p>
            </div>
            <p>عند انتهاء عهدته النيابية سنة 2019 خيّر عماد الدائمي عدم الترشح للانتخابات التشريعية والتفرغ لمكافحة
                الفساد من خلال إنشائه لمرصد رقابة صحبة مجموعة من الإطارات العليا في الدولة وخبراء في المحاسبة والقانون
                والإدارة والمعلوماتية وتمكن المرصد في وقت وجيز من تحقيق إنجازات كبرى في مجال مكافحة الفساد والمحافظة على
                المال العمومي.</p>
        </div>
        <div class="sec-6 contact" id="contact">
            <div class="sec6-content">
                <div class="form">
                    <form id="contact-form-container">
                        <h5>اتصلــــوا بنـــــا</h5>
                        <p>نحن هنا للإجابة على جميع استفساراتكم</p>
                        <div class="form-inputs form-inputs-1">
                            <div style="margin-bottom: 20px;width: 50%;">
                                <input id="first-name" placeholder="الاسم الاول" type="text" style="margin-bottom: 0px;" />
                                <span id="first-name-error" class="error-message"></span>
                            </div>
                            <div style="margin-bottom: 20px;width: 50%;">
                                <input id="last-name" placeholder="الاسم الاخير" type="text" style="margin-bottom: 0px;" />
                                <span id="last-name-error" class="error-message"></span>
                            </div>
                            
                            
                        </div>
                        <div class="form-inputs" style="display: block;margin-bottom: 20px;">
                            <input id="email" placeholder="البريد الإلكتروني" type="text" style="margin-bottom: 0px;" />
                            <span id="email-error" class="error-message"></span>
                        </div>
                        <div class="form-inputs" style="display: block;margin-bottom: 20px;">
                            <input id="phone" placeholder="رقـم الهاتف" type="number" style="margin-bottom: 0px;"/>
                            <span id="phone-error" class="error-message"></span>
                        </div>
                        <textarea id="message" placeholder="الرسالـــة" class="text-area"></textarea>
                        <span id="message-error" class="error-message"></span>
                        <a><button>إرســــــــــال</button></a>

                    </form>
                    
                </div>
                <div id="map" class="map">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10719061.68683256!2d5.741965652196076!3d33.88691781452308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb01bf81e691%3A0xe1d4e8993b274a0!2sTunisia!5e0!3m2!1sen!2stn!4v1680058413310!5m2!1sen!2stn"
                    width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <br />
                    <small>
                        <a
                            href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d907.599901678322!2d54.3752128!3d24.5062513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e66f6caee33ab%3A0x369d0fdb4e3a8571!2sZEE+Group+for+Management+of+Companies!5e0!3m2!1sen!2sae!4v1530600046123"></a>
                    </small>
                </div>
            </div>
        </div>

    </div>
    <div id="myPopup" class="popup">
        <div class="popup-content" style="text-align: center;">
            <h1 style="color: green">
                شكرا لمشاركتكم
            </h1>
            <p>سوف نقوم بالرد عليكم فى أقرب وقت</p>
            
        </div>
    </div>
    <div class="footer">
        <div class="footer-top">
            <img loading="lazy" src="{{asset('website/assets/imgs/logo.png')}}" />
            <div class="links">
                <a href="">اتصل بنا</a>
                <a href="">خريطة الموقع</a>
                <a href="">شروط و أحكام</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>حقوق الملكية © 2024</p>
            <div class="bottom-imgs">
                <img loading="lazy" src="{{asset('website/assets/imgs/youtube.png')}}" />
                <img loading="lazy" src="{{asset('website/assets/imgs/tiktok.png')}}" />
                <img loading="lazy" src="{{asset('website/assets/imgs/instgram.png')}}" />
                <img loading="lazy" src="{{asset('website/assets/imgs/twitter.png')}}" />
                <img loading="lazy" src="{{asset('website/assets/imgs/facebook.png')}}" />
            </div>
        </div>
    </div>

    <script src="{{asset('website/js/index.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="{{asset('website/js/stylish-portfolio.min.js')}}"></script>

    <script>
        // script.js

        document.addEventListener('DOMContentLoaded', function () {
            const customSelect = document.querySelector('.custom-select');
            const customSelectTrigger = customSelect.querySelector('.custom-select-trigger');
            const customOptions = customSelect.querySelector('.custom-options');
            const customOptionElements = customOptions.querySelectorAll('.custom-option');

            customSelectTrigger.addEventListener('click', function () {
                customSelect.classList.toggle('open');
            });

            customOptionElements.forEach(option => {
                option.addEventListener('click', function () {
                    const value = this.getAttribute('data-value');
                    customSelectTrigger.querySelector('span').textContent = this.textContent;
                    customSelect.classList.remove('open');

                    // Redirect based on selected value
                    if (value === 'en') {
                       // window.location.href = '../index.html'; // Replace with actual URL
                    }
                });
            });

            // Close the dropdown if clicked outside
            document.addEventListener('click', function (event) {
                if (!customSelect.contains(event.target)) {
                    customSelect.classList.remove('open');
                }
            });
        });

    </script>
     <script>
        $(document).ready(function() {
           $('#contact-form-container').on('submit', function(event) {
              event.preventDefault(); // Prevent default form submission
     
              var isValid = validateForm();
                if (!isValid) {
                    return; // If validation fails, do not proceed
                }
              // Get form data
              var csrfToken = $('meta[name="csrf-token"]').attr('content');
              var formData = {
                 _token: csrfToken,
                 first_name: $('#first-name').val(),
                 last_name: $('#last-name').val(),
                 email: $('#email').val(),
                 phone: $('#phone').val(),
                 message: $('#message').val()
              };
     
              // Submit form data via AJAX
              $.ajax({
                 url: '/contact-us', // Replace with your actual controller route
                 type: 'POST',
                 data: formData,
                 success: function(response) {
                    // Handle the success response here
                    // console.log(response);
                    //showPopup('Success! Form submitted successfully.');
                    let myPopup = $('#myPopup');
                    myPopup.addClass("show");
                    $('#contact-form-container')[0].reset();
                    setTimeout(function() {
                           
                                myPopup.removeClass("show"); // Remove the popup after 3 seconds
                            
                        }, 3500); 
                 },
                 error: function(xhr, status, error) {
                    // Handle the error response here
                    console.error(error);
                 }
              });
           });

           closePopup.addEventListener(
                "click",
                function () {
                    myPopup.classList.remove(
                        "show"
                    );
                }
            );
            window.addEventListener(
                "click",
                function (event) {
                    if (event.target == myPopup) {
                        myPopup.classList.remove(
                            "show"
                        );
                    }
                }
            );
            // Append the popup to the body

            // Set the duration for the popup to disappear (in milliseconds)
            function validateForm() {
            var isValid = true;

            // Clear previous error messages
            $('.error-message').text('');

            // Check if first name is empty
            if ($('#first-name').val().trim() === '') {
                isValid = false;
                $('#first-name-error').text('الاسم الأول مطلوب.');
                $('#first-name').css('border-color', 'red');
            } else {
                $('#first-name').css('border-color', '');
            }

            // Check if last name is empty
            if ($('#last-name').val().trim() === '') {
                isValid = false;
                $('#last-name-error').text('الاسم الأخير مطلوب.');
                $('#last-name').css('border-color', 'red');
            } else {
                $('#last-name').css('border-color', '');
            }

            // Check if email is valid
            var email = $('#email').val().trim();
            if (email === '' || !isValidEmail(email)) {
                isValid = false;
                $('#email-error').text('يرجى إدخال بريد إلكتروني صالح.');
                $('#email').css('border-color', 'red');
            } else {
                $('#email').css('border-color', '');
            }

            // Check if phone is empty
            if ($('#phone').val().trim() === '') {
                isValid = false;
                $('#phone-error').text('رقم الهاتف مطلوب.');
                $('#phone').css('border-color', 'red');
            } else {
                $('#phone').css('border-color', '');
            }

            // Check if message is empty
            if ($('#message').val().trim() === '') {
                isValid = false;
                $('#message-error').text('الرسالة مطلوبة.');
                $('#message').css('border-color', 'red');
            } else {
                $('#message').css('border-color', '');
            }

            return isValid;
        }
        function isValidEmail(email) {
            // Simple email validation regex
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }
            
        });
        
    </script>
</body>

</html>