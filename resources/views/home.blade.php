@extends('statik.layout')
@section('title')
    Product Pages 
@endsection
@section('main.section')
    <div class="container-fluid" id="index-body">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="row" id="hero-content">
                            <h1>
                                <a href="/" class="typewrite" data-period="2000" data-type='[ "RimonIT Solution.", "Website and Software", "Build And sell", "Digital Technology Product." ]'>
                                  <span class="wrap"></span>
                                </a>
                              </h1>
                        </div>
                        <div class="row">
                            <a href="#" class="btn btn-danger hero-learnmore">Learn more</a>
                            <a href="/contact" class="btn btn-success hero-learnmore">Contct us </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <a href="https://www.youtube.com/@RimonITSolution" target="_blank">
                            <img src="/images/play_button_animation.gif" alt="" class="hero-play">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Service Section--}}
    <div class="container-fluid" id="service">
        <div class="container">
            <div class="row">
                <div class="col-12 section-title">
                    <h1 class="text-center" id="section-title">
                        <a href="/service" style="font-size: 50px; color:black;" class="typewrite" data-period="2000" data-type='[ "Our Services"]'>
                          <span class="wrap"></span>
                        </a>
                      </h1>
                    <hr>
                </div>
                <div class="col-12">
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top card-icon" src="/images/education_cap_graduate_award_icon_149711.png" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">Education Website</h4>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quos aut, nostrum ipsum id molestiae voluptate, enim sapiente tempora, ipsa eum non ab nam voluptas?
                                                </p>
                                                <a href="#" class="btn btn-success">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top card-icon" src="/images/frontend-development.png" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">Frontend Development</h4>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quos aut, nostrum ipsum id molestiae voluptate, enim sapiente tempora, ipsa eum non ab nam voluptas?
                                                </p>
                                                <a href="#" class="btn btn-success">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top card-icon" src="/images/backend-development.png" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">Backend Development</h4>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quos aut, nostrum ipsum id molestiae voluptate, enim sapiente tempora, ipsa eum non ab nam voluptas?
                                                </p>
                                                <a href="#" class="btn btn-success">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mySlides fade">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top card-icon" src="/images/market_2131.png" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">E Commercs Website</h4>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quos aut, nostrum ipsum id molestiae voluptate, enim sapiente tempora, ipsa eum non ab nam voluptas?
                                                </p>
                                                <a href="#" class="btn btn-success">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top card-icon" src="/images/frontend-development.png" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">Frontend Development</h4>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quos aut, nostrum ipsum id molestiae voluptate, enim sapiente tempora, ipsa eum non ab nam voluptas?
                                                </p>
                                                <a href="#" class="btn btn-success">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top card-icon" src="/images/backend-development.png" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">Backend Development</h4>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quos aut, nostrum ipsum id molestiae voluptate, enim sapiente tempora, ipsa eum non ab nam voluptas?
                                                </p>
                                                <a href="#" class="btn btn-success">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mySlides fade">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top card-icon" src="/images/education_cap_graduate_award_icon_149711.png" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">Education Website</h4>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quos aut, nostrum ipsum id molestiae voluptate, enim sapiente tempora, ipsa eum non ab nam voluptas?
                                                </p>
                                                <a href="#" class="btn btn-success">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top card-icon" src="/images/frontend-development.png" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">Frontend Development</h4>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quos aut, nostrum ipsum id molestiae voluptate, enim sapiente tempora, ipsa eum non ab nam voluptas?
                                                </p>
                                                <a href="#" class="btn btn-success">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top card-icon" src="/images/backend-development.png" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">Backend Development</h4>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quos aut, nostrum ipsum id molestiae voluptate, enim sapiente tempora, ipsa eum non ab nam voluptas?
                                                </p>
                                                <a href="#" class="btn btn-success">Learn more </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                        <br>
                        
                        <div style="text-align:center">
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    {{--Product Section--}}
    <div class="container-fluid" id="product">
        <div class="container">
            <div class="row">
                <div class="col-12 section-title">
                    <h1 class="text-center" id="section-title">
                        <a href="/product" style="font-size: 50px; color:black;" class="typewrite" data-period="2000" data-type='[ "Our Product"]'>
                          <span class="wrap"></span>
                        </a>
                      </h1>
                    <hr>
                </div>
                
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="/images/school-website.png" alt="Avatar" style="width:300px;height:300px;">
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="flip-title">School Website Templade</h1> 
                                    <p class="flip-p">HTML5, CSS3, Bootstrap4, <br> js, jQuaey, Laravel10.</p> 
                                    <a href="/" class="btn btn-danger ml-1">Live Demo</a>
                                    <a href="/" class="btn btn-success ml-1">Download Now</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="/images/school-website-admin-panel.png" alt="Avatar" style="width:300px;height:300px;">
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="flip-title">CMS Panel</h1> 
                                    <p class="flip-p">HTML5, CSS3, Bootstrap4, <br> js, jQuaey, Laravel10.</p> 
                                    <a href="/" class="btn btn-danger ml-1">Live Demo</a>
                                    <a href="/" class="btn btn-success ml-1">Download Now</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="/images/school-website.png" alt="Avatar" style="width:300px;height:300px;">
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="flip-title">E-Commerce Website Templade</h1> 
                                    <p class="flip-p">HTML5, CSS3, Bootstrap4, <br> js, jQuaey, Laravel10.</p> 
                                    <a href="/" class="btn btn-danger ml-1">Live Demo</a>
                                    <a href="/" class="btn btn-success ml-1">Download Now</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-md-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="/images/school-website.png" alt="Avatar" style="width:300px;height:300px;">
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="flip-title">School Website Templade</h1> 
                                    <p class="flip-p">HTML5, CSS3, Bootstrap4, <br> js, jQuaey, Laravel10.</p> 
                                    <a href="/" class="btn btn-danger ml-1">Live Demo</a>
                                    <a href="/" class="btn btn-success ml-1">Download Now</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="/images/school-website-admin-panel.png" alt="Avatar" style="width:300px;height:300px;">
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="flip-title">CMS Panel</h1> 
                                    <p class="flip-p">HTML5, CSS3, Bootstrap4, <br> js, jQuaey, Laravel10.</p> 
                                    <a href="/" class="btn btn-danger ml-1">Live Demo</a>
                                    <a href="/" class="btn btn-success ml-1">Download Now</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                  <div class="flip-card-front">
                                    <img src="/images/school-website.png" alt="Avatar" style="width:300px;height:300px;">
                                  </div>
                                  <div class="flip-card-back">
                                    <h1 class="flip-title">E-Commerce Website Templade</h1> 
                                    <p class="flip-p">HTML5, CSS3, Bootstrap4, <br> js, jQuaey, Laravel10.</p> 
                                    <a href="/" class="btn btn-danger ml-1">Live Demo</a>
                                    <a href="/" class="btn btn-success ml-1">Download Now</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{--Developer Serction--}}

    <div class="container-fluid" id="developer">
        <div class="container">
            <div class="row">
                <div class="col-12 section-title">
                    <h1 class="text-center" id="section-title">
                        <a href="/developer" style="font-size: 50px; color:black;" class="typewrite" data-period="2000" data-type='[ "Our Developer Team"]'>
                          <span class="wrap"></span>
                        </a>
                      </h1>
                    <hr>
                </div>
                <div class="col-md-12" id="md-rimon">
                    <div class="dev-selid">
                        <p class="deb-link">
                            <a href="/" style="font-size: 25px; color:black; font-family: sans-serif;" class="typewrite" data-period="2000" data-type='[ "I am Developer.", "Founder of RimonIT Solution"]'>
                                <span class="wrap"></span>
                              </a>
                        </p>
                    </div>
                    <div class="dev-info">
                        <h3 class="dev-title">M H Rimon Khan</h3>
                        <p class="dev-text">BSC - Computer Science and Engineering, <br> <span>DUI.Dhaka Dhanmondhi .</span></p>
                        <p class="dev-text">Full Stack Web Developer.</p>
                        <p class="dev-text">Uses Technology - <span>HTML, CSS, JS, ReactJS, PHP, Laravel, SQL, mySQL.</span></p>
                    </div>
                </div>
                <div class="col-md-12" id="ah-anam">
                    <div class="dev-selid">
                        <p class="deb-link">
                            <a href="/" style="font-size: 25px; color:black; font-family: sans-serif;" class="typewrite" data-period="2000" data-type='[ "I am Frontend Developer.", "Web Designer of RimonIT Solution"]'>
                                <span class="wrap"></span>
                              </a>
                        </p>
                    </div>
                    <div class="dev-info">
                        <h3 class="dev-title">A H ANAM KHAN</h3>
                        <p class="dev-text">Deb Design - W3Schools, <br> <span>Online Technology Learning Platform .</span></p>
                        <p class="dev-text">Frontend Web Developer.</p>
                        <p class="dev-text">Uses Technology - <span>HTML, CSS, JS, Laravel, Blade Templade.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--Contact Page --}}
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 section-title">
                    <h1 class="text-center" id="section-title">
                        <a href="/contact" style="font-size: 50px; color:black;" class="typewrite" data-period="2000" data-type='[ "Contact us"]'>
                          <span class="wrap"></span>
                        </a>
                      </h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container" id="contact">
            <div class="content">
              <div class="left-side">
                <div class="address details">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="topic">Address</div>
                  <div class="text-one">Dhaka, Kollany</div>
                  <div class="text-two">Kollany, Mirpur 1</div>
                </div>
                <div class="phone details">
                  <i class="fas fa-phone-alt"></i>
                  <div class="topic">Phone</div>
                  <div class="text-one">+0098 9893 5647</div>
                  <div class="text-two">+0096 3434 5678</div>
                </div>
                <div class="email details">
                  <i class="fas fa-envelope"></i>
                  <div class="topic">Email</div>
                  <div class="text-one">rimonitsolution@gmail.com</div>
                  <div class="text-two">contact@rimonitsolution.com</div>
                </div>
              </div>
              <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>If you have any work from us to contact now, you can send me message from here. It's my pleasure to help you.</p>
              <form action="#">
                <div class="input-box">
                  <input type="text" placeholder="Enter your name">
                </div>
                <div class="input-box">
                  <input type="text" placeholder="Enter your email">
                </div>
                <div class="input-box message-box">
                  <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="button">
                  <input type="button" value="Send Now" >
                </div>
              </form>
            </div>
            </div>
          </div>
    </div>
@endsection