@extends('layouts.main')
@section('content')
    <!-- Styleswitcher
                ================================================== -->
<!--    <div class="colors-switcher">
        <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>        
        <ul class="colors-list">
            <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
            <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
            <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
            <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>

            <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
            <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>

        </ul>

    </div>  -->
    <!-- Styleswitcher End
    ================================================== -->

    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="{{asset('dist/images/02.jpg')}}" alt="slider">

                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated1">
                               <!--   <span>Welcome to <strong>WYSD</strong></span> -->
                            </h1>
                                             <!--    <p class="animated1">Shri. Manohar Lal Khattar<br> 
                                             Chief Minister of Haryana</p> -->
                            <!-- <a href="#feature" class="page-scroll btn btn-primary animated3">Read More</a> -->
                            <br><br><br><br><br><br><br><br><br><br><br><br>
<!--                            <a class="animated3 slider btn btn-primary btn-min-block" href="{{ url('/cregister')}}">I Pledge</a>
                            <a class="animated3 slider btn btn-default btn-min-block" href="#">View Video</a>-->

                        </div>
                    </div>
                </div>
                
                <!--/ Carousel item end -->

                <div class="item ">
                    <img class="img-responsive" src="{{asset('dist/images/header-bg-1.jpg')}}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated1">
                                <span><strong></strong></span>
                            </h1>
                            <!-- <p class="animated2">At vero eos et accusamus et iusto odio dignissimos<br> ducimus qui blanditiis praesentium voluptatum</p>  -->
                            <br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <!--<a class="animated3 slider btn btn-primary btn-min-block" href="{{ url('/cregister')}}">I Pledge</a>-->
                        </div> 
                    </div>
                </div> 
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="{{asset('dist/images/galaxy.jpg')}}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                             <!--   <span>The way of <strong>Success</strong></span> -->
                            </h1>
                            <!--  <p class="animated1">EMPOWER YOUTH OF HARYANA</p> -->
                            <br><br><br><br><br><br><br><br><br><br><br><br>
<!--                            <a class="animated3 slider btn btn-primary btn-min-block" href="{{ url('/cregister')}}">I Pledge</a>
                            <a class="animated3 slider btn btn-default btn-min-block" href="#">View Video</a>-->

                        </div>
                    </div>                
                </div>
                <!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="{{asset('dist/images/04.jpg')}}" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            {{-- <h1 class="animated2">
                              <span>The way of <strong>Success</strong></span>
                            </h1>
                            <p class="animated1">EMPOWER YOUTH OF HARYANA</p>  --}}
                            <br><br><br><br><br><br><br><br><br><br><br>
<!--                            <a class="animated3 slider btn btn-primary btn-min-block" href="{{ url('/cregister')}}">I Pledge</a>
                            <a class="animated3 slider btn btn-default btn-min-block" href="#">View Video</a>                              -->
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Pricing Table Section -->
    <div id="pricing" class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="col-md-12 text-center">
                                <font size=8 color=red font-family=Oswald><strong>H</strong></font><font size=8 ><strong>UNAR &nbsp;</strong></font> 
                                <font size=8 color=red font-family=Oswald><strong>H</strong></font><font size=8 ><strong>AI &nbsp;</strong></font>
                                <font size=8 color=red font-family=Oswald><strong>T</strong></font><font size=8 ><strong>OH  &nbsp;</strong></font>
                                <font size=8 color=red font-family=Oswald><strong>K</strong></font><font size=8 ><strong>ADAR  &nbsp; </strong></font>
                                <font size=8 color=red font-family=Oswald><strong>H</strong></font><font size=8 ><strong>AI</strong></font><br><br>
                                <font size=15 color=red font-family=Oswald><strong>हु</strong></font><font size=10 ><strong>नर &nbsp;</strong></font>
                                <font size=15 color=red font-family=Oswald><strong>है&nbsp;</strong></font>
                                <font size=15 font-family=Oswald><strong>तो&nbsp;</strong></font>
                                <font size=15 color=red font-family=Oswald><strong>क</strong></font><font size=10 ><strong>दर &nbsp;</strong></font>
                                <font size=15 color=green font-family=Oswald><strong>है</strong></font>                          


                                <p class="white-text" style="font-weight: 600;color:red!important">Take Pledge on the World Youth Skills Day</p>
                            </div>
                        </div>
                </div>
                <div class="col-md-12" style="margin-top:5px;">
                    <p class="white-text" style="font-weight: 600;line-height: 35px;text-align: justify;">विश्व युवा कौशल दिवस की पूर्व संध्या पर आज 15<sup>th</sup> जुलाई, 2019 को मैं अपने स्वयं के कौशल के विकास के लिए प्रतिबद्ध रहने का संकल्प लेता  हूं ।
मैं यह प्रतिज्ञा लेता हूँ की अपने एवं राष्ट्र के कौशल विकास की दिशा में सदैव अग्रसर रहूँगा। मैं स्वयं के हितों की पहचान करूंगा एवं भारत सरकार और हरियाणा सरकार द्वारा कार्यान्वित विभिन्न कौशल विकास योजनाओं में सक्रिय रूप से भाग लेकर विशिष्ट कौशल प्राप्त करूंगा। साथ  ही मैं कौशलविकास की आवश्यकता पर प्रदेश के नागरिकों कोजागरूक करने के लिए सदैव तत्पर रहूँगा।
मैं हरियाणा सरकार द्वारा मुझे प्रदान की जाने वाली निःशुल्क करियर काउंसलिंग परीक्षा का भी लाभ उठाऊंगा ।
    मैं इस देश व्यापी पहल से लाभान्वित होने पर विनम्रतापूर्वक आभार व्यक्त करता हूँ तथा आव्हान करता हूँ की राष्ट्र निर्माण में  सदैव अपना योगदान दूंगा ।</p>
                            <!--</p>-->
                        </div>
                        <div class="col-md-12 text-center">
                            <p class="white-text" style="font-size:19px;font-weight: 600;"> Vande Mataram! <span> <img src="{{asset('dist/images/vande_mataram.png')}}" width="150px" height="150px"></span></p>
                        </div>

                <div class="row">
                    <a href="{{ url('/cregister')}}" class="btn-system btn-small">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="plan-signup">
                            <p style='font-size: 28px;font-weight: bold;color: white;text-align:center;font-family: serif;'> "I - Pledge"<br>
                            <span style="font-size: 12px;text-align: center;color: white;">(link to registration form)</span></p>
                        </div>
                    </div>
                    </a>
                    <!--<div class="pricing">-->
                    <!--    <div class="col-md-4 col-md-offset-2"></div>-->
                    <!--    <div class="col-md-12">-->
                    <!--        <div class="pricing-table">-->
                    <!--            <div class="plan-name">-->
                    <!--                <h3>HINDI</h3>-->
                    <!--            </div>-->

                    <!--            <div class="plan-signup">-->
                    <!--                <p style='font-size: 28px;font-weight: bold;color: white;'>  <a href="/wysd/hregister.php" class="btn-system btn-small">Register</a> </p>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->

                    <!--    <div class="col-md-12">-->
                    <!--        <div class="pricing-table">-->
                    <!--            <div class="plan-name">-->
                    <!--                <h3>ENGLISH</h3>-->
                    <!--            </div>-->

                    <!--            <div class="plan-signup">-->
                    <!--                <p style='font-size: 28px;font-weight: bold;color: white;'> <a href="/wysd/register.php" class="btn-system btn-small">Register</a></p>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>          -->
                </div>  <br><br>
                <div class="row">
                    <div class="col-md-11 col-xs-12" style="text-align: center">
                        <span class="copyright" style="color:text;font-size: 26px;font-family: initial;">Pledge Count :</a></span>
                        <span style="text-align:center;background: black;color: white;font-size: 24px;letter-spacing: 5px;padding-left: 8px;padding-right: 5px;border-radius: 12px;"><?php $total = \App\Candidate::get()->count(); ?> 0000{{$total}}</span>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-11 col-xs-12" style="text-align: center">
                        <a href="{{asset('/dist/images/Hand_Book_World_Youth_Skill_Day.pdf')}}" style="font-size: 21px;font-weight: 700;">Download User Manual</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->
    
<!-- Start Testimonial Section -->

<div id="testimonial" class="testimonial-section">
    {{-- <strong class="white-text" >LEADERSHIP MESSAGES</strong> --}}
    <p class="white-text" style="font-size: 50px;line-height: 48px;">Leadership Messages</p><br><br>
    <div class="container">
        <!-- Start Testimonials Carousel -->
        <div id="testimonial-carousel" class="testimonials-carousel">

            <!-- Testimonial 1 -->
            <div class="testimonials item">
                <div class="testimonial-content">
                    <img src="{{asset('dist/images/testimonial/face_1.png')}}" alt="" >
                    <div class="testimonial-author">
                        <div class="author">Shri. Manohar Lal Khattar</div>
                        <div class="designation">Hon'ble Chief Minister of Haryana</div>
                    </div>
                    <p style="padding: 10px;">The youth hold the key to economy’s development hence there is no better investment than helping youth to develop their skills and abilities. Haryana Skill development Mission is taking steps in increasing the numbers of youth with the skills that are required for employment and entrepreneurship. World youth skills day is an opportunity to highlight the importance of skill development. On this day "Let us take a pledge to make Haryana a Skill Capital of India."<br>
                        <font size=5 color=orange><strong>B</strong></font><font size=3 color=white><strong style="color:#000;">est</strong></font> <font size=5 color='light blue'><strong>W</strong></font><font size=3 color=white><strong style="color:#000;">ishes for </strong></font> <font size=5 color=red><strong>W</strong></font><font size=3 color=white><strong style="color:#000;">orld</strong></font><font size=5 color=green><strong> Y</strong></font><font size=3 color=white><strong style="color:#000;">outh</strong></font><font size=5 color=blue><strong> S</strong></font><font size=3 color=white><strong style="color:#000;">kills</strong></font><font size=5 color=orange><strong> D</strong></font><font size=3 color=white><strong style="color:#000;">ay</strong></font><font size=5 color=red><strong> !!!</strong></font>
                    </p>  
                </div>

            </div>
            <!-- Testimonial 2 -->
            <div class="testimonials item">
                <div class="testimonial-content">
                    <img src="{{asset('dist/images/testimonial/face_2.png')}}" alt="" >
                    <div class="testimonial-author">
                        <div class="author">Shri. Vipul Goel</div>
                        <div class="designation">Hon'ble Minister for Skill Development and Industrial Training, Haryana</div>
                    </div>
                    <p style="padding: 10px;">World youth skills highlights the importance of Skill development as skilling helps the youth to upgrade their own abilities to contribute in their own as well as national development by making them employable or entrepreneurs.It gives me immense pleasure in sharing that “Haryana for, 1st time celebrating the World youth Skills Day across all districts in massive manner. Let’s join our hands together and promote the Haryanvi youth toward Skill Development” <br>
                        <font size=5 color=orange><strong>M</strong></font><font size=3 color=white><strong style="color:#000;">any</strong></font> <font size=5 color='green'><strong>C</strong></font><font size=3 color=white><strong style="color:#000;">ongratulations</strong></font><font size=5 color=red><strong> !!!</strong></font>
                    </p>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="testimonials item">
                <div class="testimonial-content">
                    <img src="{{asset('dist/images/testimonial/devinder.jpg')}}" alt="" >
                    <div class="testimonial-author">
                            <div class="author">Shri Devender Singh, IAS</div>
                            <div class="designation">Worthy Additional Chief Secretary to Govt. of Haryana<br> Industries, Civil Aviation and Skill Development & Industrial Training</div>
                    </div>
                    <p style="padding: 10px;">“Empowering the youth through Skills development strengthens their capacity to help address the many challenges facing society, including unemployment, poverty & injustice. There is no better investment than helping a young person to develop their Skills. Let’s commit to celebrate this event for our youth and their Skilling”.<br>
                        <font size=5 color=red><strong>L</strong></font><font size=3 color=white><strong style="color:#000;">et</strong></font>&nbsp;us <font size=5 color='green'><strong>C</strong></font><font size=3 color=white><strong style="color:#000;">elebrate </strong></font><font size=5 color=yellow><strong>T</strong></font><font size=3 color=white><strong style="color:#000;">ogether</strong></font><font size=5 color=red><strong> !!!</strong></font>

                    </p> 
                </div>
            </div>
            <!-- Testimonial 4 -->
            <div class="testimonials item">
                <div class="testimonial-content">
                    <img src="{{asset('dist/images/Raj_nehru.jpg')}}" alt="" >
                <!--   <img src="images/testimonial/face_3.png" alt="" > 
                    <iframe src="http://pledge-youthskillsday.com/RajNehru.mp4?autoplay="false"" width="300" height="200" frameborder="2" allowfullscreen="true" muted="true" controls="0" autoplay="false"></iframe> -->
<!--                    <video width="300" height="200" controls style="margin-bottom:20px;">
                        <source src="{{asset('dist/images/RajNehru.mp4')}}" type="video/mp4">
                    </video>-->

                    <div class="testimonial-author">
                        <div class="author">Shri. Raj Nehru</div>
                        <div class="designation">Worthy Vice Chancellor, Shri. Vishwakarma Skill University &<br> Mission Director, Haryana Skill Development Mission</div>
                    </div>
                    <p style="padding: 10px;">"We cannot always build the future for our youth but we can build our youth for the future" Youths are the backbone of India, the Bharat.They are the main pillars of our growing society, hence they need to be nurtured and developed.This is also important for the social and economic progress of our country. Skilling them is a key driver for bringing this transformation. This will also help us to make India a Skill Capital of the world. World Youth Skills Day is celebrated around the world to spread the awareness and importance of skills needed for strengthening the employability of the youths. To drive the awareness we have launched a digital pledge signing campaign and appeal to all the citizens <br> to take few seconds and be part of this revolution.<br>Please sign the Pledge<br>
                        <font size=5 color=red><strong>H</strong></font><font size=3 ><strong style="color:#000;">unar &nbsp;</strong></font> 
                        <font size=5 color=red font-family=Oswald><strong>H</strong></font><font size=3 ><strong style="color:#000;">ai &nbsp;</strong></font>
                        <font size=5 color=red font-family=Oswald><strong>T</strong></font><font size=3 ><strong style="color:#000;">oh  &nbsp;</strong></font>
                        <font size=5 color=red font-family=Oswald><strong>K</strong></font><font size=3 ><strong style="color:#000;">adar  &nbsp; </strong></font>
                        <font size=5 color=red font-family=Oswald><strong>H</strong></font><font size=3 ><strong style="color:#000;">ai</strong></font>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Testimonials Carousel -->
    </div>
    <!-- End Testimonial Section -->



    <!-- Clients Aside -->
    <section id="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <p class="white-text" style="font-size: 50px;">Our Honourable Partners</p>
                        {{-- <strong>Our Honorable Partners</strong> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clients">

                    <div class="col-md-12">
                        <a href="http://www.hsdm.org.in/" target="_blank">  <img src="{{asset('dist/images/logos/themeforest.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://itiharyana.gov.in/" target="_blank">        <img src="{{asset('dist/images/logos/creative-market.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://www.hvsu.ac.in/" target="_blank">    <img src="{{asset('dist/images/logos/designmodo.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://itiharyana.gov.in/" target="_blank">       <img src="{{asset('dist/images/logos/creative-market.png')}}" class="img-responsive" alt="..."></a>
                    </div>                    

                    <div class="col-md-12">
                        <a href="http://www.hsdm.org.in/" target="_blank">  <img src="{{asset('dist/images/logos/sk.png')}}" class="img-responsive" alt="..."></a>
                    </div>
                    <div class="col-md-12">
                        <a href="http://www.hvsu.ac.in/" target="_blank">  <img src="{{asset('dist/images/logos/designmodo.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://www.hsdm.org.in/" target="_blank">  <img src="{{asset('dist/images/logos/themeforest.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://itiharyana.gov.in/" target="_blank">     <img src="{{asset('dist/images/logos/creative-market.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>

                    <div class="col-md-12">
                        <a href="http://www.hvsu.ac.in/" target="_blank">  <img src="{{asset('dist/images/logos/designmodo.jpg')}}" class="img-responsive" alt="..."></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                          <h3>Contact With Us</h3> 
                        <p class="white-text" style="font-size: 50px;">Contact Information</p>
                    </div>
                </div>
            </div>
            <div class="row" style="display:none">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contact info</h4>
                        <ul>
                            <li><strong>E-mail :</strong>youth@pledge-youthskillsday.com</li>
                            <li><strong>Phone :</strong> 0172-2701321 / 2703190</li>
                            <li><strong>Mobile :</strong> +8801-45565378</li>
                            <li><strong>Web :</strong> http://pledge-youthskillsday.com/</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <div class="footer-contact-info">
                        <h4>Working Hours</h4>
                        <ul>
                            <li><strong>Mon-Friday :</strong> 9 am to 5 pm</li>
                            <li><strong>Sat & Sunday :</strong> Closed</li>
                        </ul>
                    </div>
                </div>

                {{-- <div class="col-md-4 col-md-offset-2">
                    <div class="footer-contact-info">
                        <span style='font-size:20px:color:white'>No of visitors: <b>34564</b></span>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>-->
@stop