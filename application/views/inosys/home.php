<!-- Header Content -->
<?php
  $this->load->view('inosys/header');
  $log = $this->session->userdata('sess_logged_in');
?>
<!-- /Header Content -->

<body>
    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="<?php echo base_url('')?>">INOSYS</a>
                        </h1>
                    </div>

                    <div class="col-2 col-lg-8">
                        <nav class="site-navigation">
                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->

                            <ul>
                                <li><a href="<?php echo base_url()?>">HOME</a></li>
                                <li><a href="<?php echo base_url('home/ticket')?>">BUY TICKETS</a></li>
                                <li><a href="<?php echo base_url()?>#lineups">ARTISTS</a></li>
                                <?php if($log==0){ ?>
                                    <li><a href="<?php echo base_url('home/signin')?>">SIGN IN</a></li>
                                <?php } else {?>
                                    <li><a href="<?php echo base_url('home/my_ticket')?>">MY TICKETS</a></li>
                                    <li><a href="<?php echo base_url('home/logout')?>">LOG OUT</a></li>
                                <?php } ?>
                                
                            </ul><!-- flex -->

                        </nav><!-- .site-navigation -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- container-fluid -->
        </div><!-- header-bar -->
    </header><!-- .site-header -->

    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-10">
                    <div class="entry-header">
                        <h2>Hello world!</h2>

                        <div class="entry-meta-date">
                            11.12.2018
                        </div><!-- .entry-meta-date -->
                    </div><!-- .entry-header -->

                    <div class="countdown flex flex-wrap justify-content-between" data-date="2018/12/11">
                        <div class="countdown-holder">
                            <div class="dday"></div>
                            <label>Days</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dhour"></div>
                            <label>Hours</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dmin"></div>
                            <label>Minutes</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dsec"></div>
                            <label>Seconds</label>
                        </div><!-- .countdown-holder -->
                    </div><!-- .countdown -->
                </div><!-- .col-12 -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12 ">
                    <div class="entry-footer">
                        <a href="<?php echo base_url('home/ticket')?>" class="btn">Buy Tickets</a>
                        <a href="#lineups" class="btn current">See Lineup</a>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .hero-content -->

    <div class="content-section" id='lineups'>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lineup-artists-headline">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>The Lineup Artists-Headliners</h2>
                        </div><!-- entry-title -->

                        <div class="lineup-artists">
                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/black-chick.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Jamila Williams
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Jamila is profesional singer from uk</p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href=""><img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <div class="lineup-artists-description">
                                    <figure class="featured-image d-md-none">
                                        <a href="#"> <img src="<?php echo base_url(); ?>assets/images/mathew-kane.jpg" alt=""> </a>
                                    </figure><!-- featured-image -->

                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Sandra Superstar
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Sandar is profesional singer from spain</p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href="#"><img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->

                                <figure class="featured-image d-none d-md-block">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/mathew-kane.jpg" alt=""> </a>
                                </figure><!-- featured-image -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/eric-ward.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            DJ Crazyhead
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Dj crazy is the best dj from norway</p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href="#"> <img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->
                        </div><!-- lineup-artists -->
                    </div><!-- lineup-artists-headline -->
                </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="the-complete-lineup">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>The Complete Lineup</h2>
                        </div><!-- entry-title -->

                        <div class="row the-complete-lineup-artists">
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/image-1.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Miska Smith</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/image-2.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Hayley Down</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/image-3.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>The Band Song</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/image-4.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Pink Machine</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/image-5.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Brasil Band</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/image-6.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Mickey</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/image-7.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>DJ Girl</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="<?php echo base_url(); ?>assets/images/image-8.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="<?php echo base_url(); ?>assets/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Stan Smith</h2>
                            </div><!-- artist-single -->
                        </div><!-- the-complete-lineup-artists -->

                    </div><!-- the-complete-lineup -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="homepage-next-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Our Next Events</h2>
                        </div><!-- entry-title -->
                    </div><!-- col-12 -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="next-event-slider-wrap">
                <div class="swiper-container next-event-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="<?php echo base_url(); ?>assets/images/next-event-1.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="<?php echo base_url(); ?>assets/images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="<?php echo base_url(); ?>assets/images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="<?php echo base_url(); ?>assets/images/next-event-1.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="<?php echo base_url(); ?>assets/images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="<?php echo base_url(); ?>assets/images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->
                    </div><!-- .swiper-wrapper -->
                </div><!-- .swiper-container -->

                <div class="swiper-button-next">
                    <img src="<?php echo base_url(); ?>assets/images/button.png" alt="">
                </div><!-- .slider-button -->
            </div><!-- .next-event-slider-wrap -->
        </div><!-- homepage-next-events -->

        <div class="home-page-last-news">
            <div class="container">
                <div class="header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Our Last Mini News</h2>
                    </div><!-- entry-title -->
                </div><!-- header -->

                <div class="home-page-last-news-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="<?php echo base_url(); ?>assets/images/news-image-1.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="#">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2>Inosys</h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name">By James Williams</span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Inosys is a information system festival</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->

                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="<?php echo base_url(); ?>assets/images/news-image-1.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2>New event calendar for this year</h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name">By James Williams</span>
                        
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Inovation is a information system edufair for the next event</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- .content-wrapper -->
                        </div><!-- col-6 -->
                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->
            </div><!-- container -->
        </div><!-- home-page-last-news -->
    </div>

<!-- Footer content -->
<?php
    $this->load->view('inosys/footer');
?>
<!-- /Footer content -->
