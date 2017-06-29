<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
        <title>Magic1 Beauty Salon | Appointment</title>
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link type="text/css" href="css/jquery.bxslider.css" rel="stylesheet" media="screen" />
        <link type="text/css" href="css/jquery.fancybox.css" rel="stylesheet" media="screen" />
        <link type="text/css" href="css/animate.css" rel="stylesheet" media="screen" />
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/default.date.css">
        <link rel="stylesheet" href="css/default.time.css">
        <link type="text/css" href="css/style.css" rel="stylesheet" media="screen" />
        <link type="text/css" href="css/responsive.css" rel="stylesheet" media="screen" />
        <meta name="google-site-verification" content="4AhVdtg37o3y_SuciH-aOQ9S01o0W7B8kd6ngXOi188" />

        <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-96031965-1', 'auto');
ga('send', 'pageview');

        </script>

    </head>

    <body>
        <!-- header start -->
        <header class="clear">
            <div class="container clear">
                <div class="logo">
                    <figure><a href="index.html"><img src="images/logo.png" alt="" /></a></figure>
                </div>
                <div class="headerRight clear">
                    <div class="top clear">
                        <div class="social">
                            <ul>
                                <li><a href="https://web.facebook.com/Magic1Salon/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/magic1_salon/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <!--<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>-->
                            </ul>
                        </div>
                        <div class="formSearch clear">
                            <form name="search" id="search">
                                <input type="text" name="text" placeholder="SEARCH" />
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="mobile searc_menu">
                            <span class="search_ico"><i class="fa fa-search"></i></span>
                            <span class="menu_ico"><i class="fa fa-navicon"></i></span>
                        </div>
                    </div>
                    <div class="bottom clear">
                        <span class="appointmentBtn">
                            <a href="appointment.php">Make an appointment <i class="fa fa-arrow-circle-right"></i></a>
                        </span>
                        <span class="callusbtn">
                            call us now <em><a href="tel:3054081281">(305) 408 1281</a></em>
                        </span>
                    </div>
                </div>
            </div>
            <div class="menuLang clear">
                <div class="container">
                    <div class="menu">
                        <ul>
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="services.html">SERVICES</a></li>
                            <li><a href="blog.html">BLOG</a></li>
                            <li><a href="gallery.html">GALLERY</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </div>
                    <div class="language">
                        <ul>
                            <li class="active"><a href="#">en</a></li>
                            <li><a href="#">es</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- Inner banner section start -->
        <section class="innerBanner" style="background-image:url(images/appointmentbanner.jpg);">
            <div class="pageTitleHolder">
                <h1 class="pageTitle">MAKE AN APPOINTMENT</h1>
                <span class="sub_title">PLEASE FILL UP THE FORM BELOW</p>
            </div>
        </section>
        <!-- Inner banner section end -->

        <!-- inner body section -->
        <div class="inner_body appointment">


            <?php 

            $errors = '';

            if ( isset($_POST['submit']) ) {
                // Validate values.
                if (isset($_POST['f_name']) && $_POST['f_name'] != "") {
                    $_POST['f_name'] = filter_var($_POST['f_name'], FILTER_SANITIZE_STRING);
                    if ($_POST['f_name'] == "") {
                        $errors .= 'Please enter a valid name.<br/><br/>';
                    }
                }

                if (isset($_POST['l_name']) && $_POST['l_name'] != "") {
                    $_POST['l_name'] = filter_var($_POST['l_name'], FILTER_SANITIZE_STRING);
                    if ($_POST['l_name'] == "") {
                        $errors .= 'Please enter a valid name.<br/><br/>';
                    }
                } else {
                    $errors .= 'Please enter a last name.<br/>';
                }

                //    if ($_POST['date_submit'] != "") {
                //        $_POST['date_submit'] = filter_var($_POST['date_submit'], FILTER_SANITIZE_DATE);
                //        if ($_POST['date_submit'] == "") {
                //            $errors .= 'Please enter a valid date.<br/><br/>';
                //        }
                //    }

                if (isset($_POST['s_dt']) && $_POST['s_dt'] != "") {
                    $_POST['s_dt'] = filter_var($_POST['s_dt'], FILTER_SANITIZE_STRING);
                    if ($_POST['s_dt'] == "") {
                        $errors .= 'Please enter a date.<br/><br/>';
                    }
                }

                if (isset($_POST['l_dt']) && $_POST['l_dt'] != "") {
                    $_POST['l_dt'] = filter_var($_POST['l_dt'], FILTER_SANITIZE_STRING);
                    if ($_POST['l_dt'] == "") {
                        $errors .= 'Please enter a date.<br/><br/>';
                    }
                }

                if (isset($_POST['phone']) && $_POST['phone'] != "") {
                    $_POST['phone'] = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
                    if ($_POST['phone'] == "") {
                        $errors .= 'Please enter a phone number.<br/><br/>';
                    }
                } else {
                    $errors .= 'Please enter a phone number.<br/>';
                }

                if (isset($_POST['email']) && $_POST['email'] != "") {
                    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errors .= "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
                    }
                } else {
                    $errors .= 'Please enter your email address.<br/>';
                }

                if ( ( isset( $_POST['main_service']) && $_POST['main_service'] != "Select One" ) 
                    || ( isset($_POST['main_service']) && !empty($_POST['main_service'] ) ) ) {
                    $_POST['main_service'] = filter_var($_POST['main_service'], FILTER_SANITIZE_STRING);
                    if ($_POST['main_service'] == "") {
                        $errors .= 'Please select a service.<br/><br/>';
                    }
                } else {
                    $errors .= 'Please select a service.<br/>';
                }

                if (isset($_POST['comnts']) && $_POST['comnts'] != "") {
                    $_POST['comnts'] = filter_var($_POST['comnts'], FILTER_SANITIZE_STRING);
                    if ($_POST['comnts'] == "") {
                        $errors .= 'Please enter a valid name.<br/><br/>';
                    }
                }


            }

            if ( isset($_POST['submit']) && !$errors ): 

            require 'php-mailer/class.phpmailer.php';
            require 'php-mailer/class.smtp.php';

            // Google: smtp.gmail.com : Port 587
            // Yahoo: smtp.mail.yahoo.com : Port 465
            // Outlook: smtp-mail.outlook.com : Port 587
            $hosts = array(
                'Google' => array(
                    'Server' => 'smtp.gmail.com',
                    'Port' => 587
                ),
                'Outlook' => array(
                    'Server' => 'smtp-mail.outlook.com',
                    'Port' => 587
                ),
                'Yahoo' => array(
                    'Server' => 'smtp.mail.yahoo.com',
                    'Port' => 465
                ),                 
            );

            // Email Configuration.
            $username = 'username@gmail.com';
            $password = 'password';

            $mail_service = 'Google';
            $host = $hosts[$service]['Server'];
            $port = $hosts[$service]['Port'];

            $mail = new PHPMailer;

            //$mail->SMTPDebug = 2;                               // 3 - Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = $host;  // Specify main and backup SMTP servers. Google smtp.gmail.com | mail.magic1salon.com
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = $username;                 // SMTP username info@magic1salon.com
            $mail->Password = $password;                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $port;                                    // TCP port to connect to 587 - Google | 465 Hostgator
            $mail->setFrom($username, 'Magic1 Beauty Salon'); // The email being sent from
            $mail->addAddress($username);               // The email appointment is being sent to.
            $mail->isHTML(true);                                  // Set email format to HTML

            $subject = 'New Appointment Created';
            $message  = 'From: ' . $_POST['f_name'] . ' ' . $_POST['l_name'] . "\n<br>";
            $message .= 'Email: ' . $_POST['email'] . "\n<br>";
            $message .= 'Phone: ' . $_POST['phone'] . "\n<br>";
            $message .= 'Service: ' . $_POST['main_service'] . "\n<br>";
            $message .= $_POST['option_' . strtolower($_POST['main_service']) ] . "\n<br>";
            $message .= 'Date: ' . $_POST['date'] . "\n<br>";
            $message .= empty($_POST['s_dt']) ? 'Second Date: ' . $_POST['s_dt'] . "\n<br>" : '';
            $message .= empty($_POST['l_dt']) ? 'Third Date: ' . $_POST['l_dt'] . "\n<br>" : '';
            $message .= 'Time: ' . $_POST['time'] . "\n<br>";
            $message .= "Comments:\n" . $_POST['comnts'] . "\n\n";

            $mail->Subject = 'New Appointment Created';
            $mail->Body    = $message;

            if(!$mail->send()) {
                echo '<div class="appoint_frm">';
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                echo '</div>';
            } else {
                echo "<div class='appoint_frm'><p>Thank you. Your appointment has been submitted.</p></div>";
            }

            else:

            echo '<div class="appoint_frm" style="color: red">' . $errors . '<br/></div>';

            ?>

            <div class="appoint_frm">
                <form name="appoi_frm" id="appoi_frm" method="post">
                    <div class="clear">
                        <div class="frm_box_appointment">
                            <div class="input_box">
                                <label>name</label>
                                <input type="text" name="f_name" placeholder="First Name" value="<?php echo isset($_POST['f_name']) ? $_POST['f_name'] : ''; ?>" />
                                <input type="text" name="l_name" placeholder="Last Name" value="<?php echo  isset($_POST['l_name']) ? $_POST['l_name'] : ''; ?>"/>
                            </div>
                            <div class="input_box">
                                <label>date</label>
                                <input class="datepicker" id="input_01" data-value="2017-01-01" type="text" name="date" placeholder="First Choice(Required)" value="14 January, 2017" />
                                <input type="text" name="s_dt" placeholder="Second Choice" value="<?php echo isset($_POST['s_dt']) ? $_POST['s_dt'] : ''; ?>"/>
                                <input type="text" name="l_dt" placeholder="Third Choice" value="<?php echo  isset($_POST['l_dt']) ? $_POST['l_dt'] : ''; ?>"/>
                            </div>
                        </div>
                        <div class="frm_box_appointment">
                            <div class="input_box large_gap">
                                <label>phone</label>
                                <input type="text" name="phone" placeholder="(111) 111-111" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"/>

                            </div>
                            <div class="input_box">
                                <label>time</label>
                                <input type="time" id="time_field" class="datepicker2" name="time" placeholder="Select a date first" value="<?php echo  isset($_POST['time']) ? $_POST['time'] : ''; ?>"/>
                                <p>Please note, that the date and time you have selected may not be available. We will contact you to confirm your request.</p>
                            </div>
                        </div>
                        <div class="frm_box_appointment">
                            <div class="input_box large_gap">
                                <label>email</label>
                                <input type="email" name="email" placeholder="xxx@xxx.de" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"/>

                            </div>
                            <div class="input_box large_gap">
                                <label>service</label>
                                <select id="main_service" name="main_service">
                                    <option>Select One<option>
                                    <option data-toggle="hair">Hair</option>
                                    <option data-toggle="face">Face</option>
                                    <option data-toggle="nails">Nails</option>
                                    <option data-toggle="body">Body</option>
                                    <option data-toggle="henna">Henna</option>
                                </select>
                                <select class="hiddenDrop" id="hair" name="option_hair" price-val="$25">
                                    <option price="$25">haircut &amp; style</option>
                                    <option price="$15">SHAMPOO & STYLE</option>
                                    <option price="$20">BLOWDRY WITH IRON WORK</option>
                                    <option price="$25">UPDO/BRAIDAL</option>
                                    <option price="$15">HAIR INTENSE MASK</option>
                                    <option price="$10">CONDITIONER</option>
                                    <option price="$30">COLOR RETOUCH</option>
                                    <option price="$40">HIGHLIGHTS</option>
                                    <option price="$20">TEXTURING</option>

                                </select>

                                <select class="hiddenDrop" id="face" name="option_face" price-val="$25">
                                    <option price="$25">MAKE-UP FACE</option>
                                    <option price="$15">MAKE-UP FACE</option>
                                    <option price="$20">MAKE-UP LIPS</option>
                                    <option price="$15">EYELASHES DESIGN</option>
                                    <option price="$10">EYEBROW DESIGN</option>
                                    <option price="$30">HAIR REMOVAL UPPER LIP</option>
                                    <option price="$40">HAIR REMOVAL CHIN/CHEEKS</option>


                                </select>
                                <select class="hiddenDrop" id="nails" name="option_nails" price-val="$25">
                                    <option price="$25">MANICURE BASIC</option>
                                    <option price="$15">MANICURE WITH COLOR</option>
                                    <option price="$20">MANICURE WITH SHELLAC</option>
                                    <option price="$20">PEDICURE BASIC</option>
                                    <option price="$25">PEDICURE WITH COLOR</option>
                                    <option price="$30">PEDICURE WITH SHELLAC</option>
                                    <option price="$5">FOOT MASSAGE</option>
                                    <option price="$5">PEELING</option>

                                </select>
                                <select class="hiddenDrop" id="body" name="option_body" price-val="$10">
                                    <option price="$10">WAXING UNDERARM</option>
                                    <option price="$10">WAXING HALF ARM</option>
                                    <option price="$15">WAXING FULL ARM</option>
                                    <option price="$10">WAXING HALF LEG</option>
                                    <option price="$15">WAXING FULL LEG</option>
                                    <option price="$20">WAXING BIKINI</option>
                                    <option price="$20">WAXING BACK</option>
                                    <option price="$15">WAXING CHEST</option>
                                    <option price="$25">WELLNESS MASSAGE</option>
                                    <option price="$25">HOT STONE MASSAGE</option>
                                </select>
                                <select class="hiddenDrop" id="henna" name="option_henna" price-val="$10">
                                    <option price="$10">ELEGANT HENNA DESIGN</option>
                                    <option price="$10">PATTERN HENNA DESIGN</option>
                                    <option price="$10">HENNA DESIGN HANDS</option>
                                    <option price="$15">HENNA DESIGN BODY</option>
                                    <option price="$20">HENNA DESIGN BACK</option>
                                    <option price="$20">HENNA DESIGN FEET</option>
                                </select>

                                <div class="priceTag" style="margin-top:10px;">
                                    <label>Price</label>
                                    <span>$0</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="input_box">
                        <label>COMMENTS AND QUESTIONS</label>
                        <textarea name="comnts" ></textarea>
                        <span class="note">Maximum of 250 characters</span>
                    </div>
                    <div class="function">
                        <button type="submit" name="submit" value="submitted">submit appointment</button>
                    </div>
                </form>
            </div>


            <?php endif; ?>




        </div>
        <!-- inner body section -->

        <!-- footer -->
        <footer>
            <div class="container">
                <figure class="footer_logo"><a href="#"><img src="images/ftr_logo.png" alt="" /></a></figure>
                <p>Magic1 Beauty Salon | 5701 SW 137th Avenue | FL: 33183 | PHONE <a href="tel:3054081281">+305.408.1281</a> | <a href="mailto:info@magic1salon.com">info@magic1salon.com</a></p>

                <p>Mo-Fr: 10:00am-7:00pm | Sa: 9:00am-7:00pm | Su: 10:00am-5:00pm</p>
                <div class="social">
                    <ul>
                        <li><a href="https://web.facebook.com/Magic1Salon/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/magic1_salon/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <!--<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>-->
                    </ul>
                </div>
            </div>
        </footer>
        <!-- footer -->
        <div id="container"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/html5shiv.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script> 
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
        <script type="text/javascript" src="js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script src="js/picker.js"></script>
        <script src="js/picker.date.js"></script>
        <script src="js/picker.time.js"></script>
        <script src="js/legacy.js"></script>
        <script type="text/javascript">
$(document).ready(function() {
    $(".mainslider").bxSlider({
        pager:false	
    });
    $(".teamCarousel").bxSlider({
        pager:false,
        slideWidth:142,
        slideMargin:0,
        minSlides:2,
        maxSlides:3,
        moveSlides:1
    });
    $(".testimonialSlider").bxSlider({
        controls:false
    });
    $(".slideSrvice").bxSlider({
        controls:false,
        auto:true,
        mode:'fade'	
    });
    $(".fancybox").fancybox();
    $(".menu_ico").click(function(){
        $(".menu").slideDown(200);
    });
    $(".menu").click(function(){
        $(this).slideUp(200);
    });
    $(".search_ico").click(function(){
        $(".formSearch").slideDown(200);
    });
    $(".formSearch").click(function(){
        var getWinwidth = $(window).width();
        if(getWinwidth < 767)
        {
            $(this).slideUp(200);
        }

    });
    $(window).resize(function(){
        var getWidth = $(this).width();
        if(getWidth > 767)
        {
            $(".formSearch").removeAttr("style");
            $(".menu").removeAttr("style");
        }
    });
    $("#main_service").change(function(){
        var getWhich = $(this).find("option:selected").attr("data-toggle");

        $(".hiddenDrop").hide(0);
        $("#" + getWhich).show(0);
        var getPrice = $("#" + getWhich).attr("price-val");

        if($(this).find("option:selected").val() != "Select One" )
        {
            $(".priceTag").find("span").html(getPrice);
        }
        else
        {
            $(".priceTag").find("span").html("$0");
        }
    });
    $(".hiddenDrop").bind('change', function(){
        var getPrice = $(this).find("option:selected").attr("price");
        $(".priceTag").find("span").html(getPrice);
    });
});
        </script>
        <script type="text/javascript">
wow = new WOW(
    {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    }
);
wow.init();
document.getElementById('moar').onclick = function() {
    var section = document.createElement('section');
    section.className = 'section--purple wow fadeInDown';
    this.parentNode.insertBefore(section, this);
};
        </script>
        <script type="text/javascript">

var today = new Date();

// Sets the current date time in datepicker.
$('.datepicker').data("value", today.getFullYear()+'-'+("0" + (today.getMonth() + 1)).slice(-2)+'-'+("0" + today.getDate()).slice(-2));

var $input = $( '.datepicker' ).pickadate({
    formatSubmit: 'yyyy/mm/dd',
    // min: [2015, 7, 14],
    container: '#container',
    // editable: true,
    closeOnSelect: false,
    closeOnClear: false,
    min: today, // Disable older dates makeing them unselectable.
    //            onSelect: function(selectedDate) {
    //                var option = this.id == "from" ? "minDate" : "maxDate",
    //                    instance = $(this).data("datepicker"),
    //                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
    //                dates.not(this).datepicker("option", option, date);
    //            }
})

var picker = $input.pickadate('picker')
// picker.set('select', '14 October, 2014')
// picker.open()

// $('button').on('click', function() {
//     picker.set('disable', true);
// });

        </script>
        <script type="text/javascript">

var $input = $( '.datepicker2' ).pickatime({
})
var picker = $input.pickatime('picker')
//picker.open()

        </script>
    </body>
</html>
