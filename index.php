<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page for Sethsevana Channelling</title>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">


  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">

  <!--js-->
  <script type="text/javascript" src="js/validlogin.js"></script>

  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Open 24 Hours </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">Call us now +94372232365</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="img/sethsevanalogo.jpg" alt="" width="100" height="100" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#intro">Home</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#doctor">Doctors</a></li>
            <li><a href="#facilities">Facilities</a></li>
            <li><a href="#pharmacy">Pharmacy</a></li>
            <li class="btn btn-success btn-sm" data-toggle="modal" data-target="#loginmodal">Login</li>

  
        <!-- /.navbar-collapse -->
      </div>

      <!-- /.container -->
    </nav>
     <div class="modal fade" id="loginmodal" data-target="loginmodal">
    <div class="modal-dialog">
      <div class="modal-header">
        <img src="img/dummy/user.png" class="user" width="60px" height="60px">
        <h3>Login</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form class="login_form" method="post" name="form">
      <div class="modal-body">


      <form id="form" class="form" action="/action_page.php">
          <p>Username</p>
          <input type="text" name="username" placeholder="Username" id="username" required>
          
          <p>Password</p>
          <input type="password" name="password" placeholder="Password"id="password" pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z].{8,})" title="Must contain atleasr one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          
      <div class="modal-footer">
        <div class="loginbtn">
        <button type="submit" class="btn btn-success">Login</button>
      </div>
        <div class="forgetpsw">
          <span class="psw"><a href="#">Forget Password?</a></span>
        </form>
        </div>
    </div>

    
        
        
      </div>
    </div>
   </div>
          
    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">Sethsevana Group</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Provide best quality healthcare for you</h4>
              </div>
              


            </div>
            <form>
            <div class="col-lg-6">
             
                    <div class="input-field">
                        <i class="fa fa-user-md icon"></i>
                        <input type="text" class="searchname" name="" placeholder="Doctor's Name"><br/><br/><br/>
                        
                    </div>
                    <div class="input-field">
                        <i class="fa fa-plus-square-o icon"></i>
                        <input type="text" class="searchtype" name="" placeholder="Doctor's Type"><br/><br/><br/>

                    </div>
                    
                    <div class="center">
                    <div class="searchbtn">
                        <input type="submit" name="searchbtn" value="Search">
                    </div>
                  </div>
              </div>
              </form>
             
    </section>

    <!-- /Section: intro -->


    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-check fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Make an appoinment</h4>
                <p>
                  Find a doctor.Make the appointment.Save your time by checking ongoing number.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Choose your package</h4>
                <p>
                  Be healthy.Let's have a screening with different offers.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Help by specialist</h4>
                <p>
                  All the specialists at one place.Get your health recommendation from superior.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Get diagnostic report</h4>
                <p>
                  All the diagnostic records are provided with your diagnosis history
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>In an emergency? Need help now?</h3>
                      <p>Channel your doctor here..</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                      <a href="#" class="btn btn-skin btn-lg">Book an appoinment</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

      <div class="container">

        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <img src="img/dummy/img-1.jpg" class="img-responsive" alt="" />
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-stethoscope fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Medical checkup</h5>
                  <p>Regular health screening</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-wheelchair fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Nursing Services</h5>
                  <p>Highly trained attendant medical and nursing professionals</p>
                </div>
              </div>
            </div>
            


          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-h-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Obstetrics & Gynaecology</h5>
                  <p> Provide a wide spectrum of treatments and services related to women, especially with regard to female reproduction</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-filter fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Neurology</h5>
                  <p> Many of the neuro devastating problems can be successfully treated now providing they can be rapidly diagnosed and treated.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-user-md fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Sleep Center</h5>
                  <p>Insufficient sleep affects some specific chronic disorders in all major body organs including heart and blood vessels, brain, kidneys, eyes and lungs.</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- /Section: services -->


    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Doctors</h2>
                <p>We Are The Team Here For You</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div id="filters-container" class="cbp-l-filters-alignLeft">
              <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".cardiologist" class="cbp-filter-item">Cardiologist (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".paediatrician" class="cbp-filter-item">Paediatrician (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".neurologist" class="cbp-filter-item">Neurologist (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".eyesurgeon" class="cbp-filter-item">Eye Surgeon(
                <div class="cbp-filter-counter"></div>)</div>
            </div>

            <div id="grid-container" class="cbp-l-grid-team">
              <ul>
                <!--Doc1-->
                <li class="cbp-item cardiologist">
                  <a href="doc1.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/1.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doc1.html" class="cbp-singlePage cbp-l-grid-team-name">Dr.Priyantha Kannangara</a>
                  <div class="cbp-l-grid-team-position">Cardiologist</div>
                </li>
                <!--Doc2-->
                <li class="cbp-item cardiologist">
                  <a href="doc2.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doc2.html" class="cbp-singlePage cbp-l-grid-team-name">Dr.Ajantha Tikiri Rajapakshe</a>
                  <div class="cbp-l-grid-team-position">Cardiologist</div>
                </li>
                <!--Doc3-->
                <li class="cbp-item neurologist">
                  <a href="doctors/doc3.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/3.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/doc3.html" class="cbp-singlePage cbp-l-grid-team-name">Dr.Dilum Palliyaguruge</a>
                  <div class="cbp-l-grid-team-position">Neurologist</div>
                </li>
                <!--Doc4-->
                <li class="cbp-item neurologist">
                  <a href="doctors/doc4.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/4.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/doc4.html" class="cbp-singlePage cbp-l-grid-team-name">Dr.P.Janaka Peiris</a>
                  <div class="cbp-l-grid-team-position">Neurologist</div>
                </li>
                <!--Doc5-->
                <li class="cbp-item paediatrician">
                  <a href="doctors/doc5.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/5.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/doc5.html" class="cbp-singlePage cbp-l-grid-team-name">Dr.Dayananda Bandara</a>
                  <div class="cbp-l-grid-team-position">Paediatrician</div>
                </li>
                 <!--Doc6-->
                <li class="cbp-item paediatrician">
                  <a href="doctors/doc6.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/6.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/doc6.html" class="cbp-singlePage cbp-l-grid-team-name">Dr.Upul Navarathne</a>
                  <div class="cbp-l-grid-team-position">Paediatrician</div>
                </li>
                 <!--Doc7-->
                <li class="cbp-item paediatrician">
                  <a href="doctors/doc7.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/7.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/doc7.html" class="cbp-singlePage cbp-l-grid-team-name">Dr(Mrs)Rohini Premarathne</a>
                  <div class="cbp-l-grid-team-position">Paediatrician</div>
                </li>
                 <!--Doc8-->
                <li class="cbp-item paediatrician">
                  <a href="doctors/doc8.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/8.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/doc8.html" class="cbp-singlePage cbp-l-grid-team-name">Dr.Lanka Tennakoon</a>
                  <div class="cbp-l-grid-team-position">Paediatrician</div>
                </li>
                 <!--Doc9-->
                <li class="cbp-item eyesurgeon">
                  <a href="doctors/doc9.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/9.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/doc9.html" class="cbp-singlePage cbp-l-grid-team-name">Dr.Sanjeewa Kaluarachchi</a>
                  <div class="cbp-l-grid-team-position">Eye Surgeon</div>
                </li>
                 <!--Doc10-->
                <li class="cbp-item eyesurgeon">
                  <a href="doctors/doc10.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/10.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/doc10.html" class="cbp-singlePage cbp-l-grid-team-name">Dr.Sarath Tennakoon</a>
                  <div class="cbp-l-grid-team-position">Eye Surgeon</div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: team -->



    <!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Our facilities</h2>
                <p>Our facility is equipped with a range of rooms designed to suit your every need, and manned by highly trained staff to ensure a pleasant and remedial stay</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                <div class="item"><a href="img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                <div class="item"><a href="img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: works -->


    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

      <div class="carousel-reviews broun-block">
        <div class="container">
          <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Emergency Contraception</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>The customer service should be appreciated and in an emergency they had a great preparation to accept us</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/1.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Neetha Rathnayake</a>
                      <span>Ibbagamuwa, Kurunegala</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Orthopedic Surgery</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                        <span
                          data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>My son's leg was broken at that situation.They had good theatre facilities to get him to the sugery quickly.But it took some time. </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/2.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Nishantha Ranaweera</a>
                      <span>Bogamuwa, Kurunegala</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Medical consultation</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                      </div>
                      <p>As I am a regular patient who consults the cardiologist once in every three months; their consultation fees comparatively fair</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/3.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Sagarika Priyadarshani</a>
                      <span>Mawathagama, Kurunegala</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Hair loss problem</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>That dermatologist at that time was very humble</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Kamal Perera</a>
                      <span>Wariyapola, Kurunegala</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Radiology</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                        <span
                          data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>They were hardly caring about the patient's good health</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/5.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Nilmi Siriwardhane</a>
                      <span>Melsiripura, Kurunegala</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Cervical Lesions</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                      </div>
                      <p>The most trustworthy service in Kurunegala</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/6.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Manya Herath</a>
                      <span>Maho, Kurunegala</span>
                    </div>
                  </div>
                </div>


              </div>

              <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: testimonial -->


    <!-- Section: pricing -->
    <section id="pricing" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Health packages</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row">

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.1s">
              <div class="pricing-content general">
                <h2>Basic Fit 1 Package</h2>
                <h3>8,500 LKR<span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box featured-price">
            <div class="wow bounceInUp" data-wow-delay="0.3s">
              <div class="pricing-content featured">
                <h2>Golden Glow Package</h2>
                <h3>20,000 LKR <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
                  <li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div class="pricing-content general last">
                <h2>Basic Fit 2 Package</h2>
                <h3>15,000LKR <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- /Section: pricing -->

    <section id="partner" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Our partner</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="partner">
              <a href="#"><img src="img/dummy/waymabalab.png" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="partner">
              <a href="#"><img src="img/dummy/newpharmacy.png" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About Sethsevana</h5>
                <p>
                  The best channelling experience in Kurunegala
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Information</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Laboratory</a></li>
                  <li><a href="#">Medical treatment</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Sethsevana center</h5>
                <p>
                  On Your Way To your Specialist
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Sunday, 24 Hours
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> 0372232365
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>No.226, Colombo Road, Kurunegala, Sri Lanka.</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                

              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>



  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
