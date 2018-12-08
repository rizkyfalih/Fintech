<!-- Header Content -->
<?php
  $this->load->view('inosys/header');
  $log = $this->session->userdata('sess_logged_in');
?>
<!-- /Header Content -->

<body class="tickets-page">
    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="<?php echo base_url()?>">SUNFEST</a>
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
                                <li><a href="#">INOSYS 2018</a></li>
                                <li><a href="#lineups">ARTISTS</a></li>
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

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">
                        <h2 class="entry-title">Buy tickets</h2>

                        <ul class="breadcrumbs flex align-items-center">
                            <li><a href="#">Home</a></li>
                            <li>Buy tickets</li>
                        </ul><!-- .breadcrumbs -->
                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="main-content">
        <div class="container">
            <div class="entry-header">
                <div class="entry-title">
                    <p>JUST THE BEST</p>
                    <h2>Early bird tickets</h2>
                </div><!-- entry-title -->
            </div><!-- entry-header -->

            <div class="row">
                <div class="col-12">
                    <div class="tabs">
                        <ul class="tabs-nav flex">
                            <li class="tab-nav flex justify-content-center align-items-center active" data-target="#tab_details">Details</li>
                            <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Venue</li>
                            <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organizers</li>
                            <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_about">About the event</li>
                        </ul><!-- tabs-nav -->

                        <div class="tabs-container">
                            <div id="tab_details" class="tab-content">
                                <div class="flex flex-wrap justify-content-between">
                                    <div class="single-event-details">
                                        <div class="single-event-details-row">
                                            <label>Start:</label>
                                            <p>December 25 @ 08:00 am</p>
                                        </div>

                                        <div class="single-event-details-row">
                                            <label>End:</label>
                                            <p>December 25 @ 11:30 am</p>
                                        </div>

                                        <div class="single-event-details-row">
                                            <label>Price:</label>
                                            <!-- <p class="sold-out">$89 <span>Sold Out</span></p> -->
                                            <p>IDR 75000 </p>
                                        </div>

                                        <div class="single-event-details-row">
                                            <label>Categories:</label>
                                            <p>Festivals</p>
                                        </div>

                                        <div class="single-event-details-row">
                                            <label>Tags:</label>
                                            <p><a href="#">festivals</a>, <a href="#">music</a>, <a href="#">concert</a></p>
                                        </div>
                                    </div>

                                    <div class="single-event-map">
                                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=telkom University&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                            </div><!-- .tab-content -->

                            <div id="tab_venue" class="tab-content">
                                <p>Telkom University is world class</p>
                            </div><!-- .tab-content -->

                            <div id="tab_organizers" class="tab-content">
                                <p>Information System organizers is the best</p>
                            </div><!-- .tab-content -->

                            <div id="tab_about" class="tab-content">
                                <p>Inosys is information system festival</p>
                            </div><!-- .tab-content -->
                        </div><!-- .tabs-container -->
                    </div><!-- .tabs -->
                </div><!-- .col-12 -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12">
                    <div class="event-tickets">
                        <div class="ticket-row flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center">
                            <div class="ticket-type flex flex-column flex-lg-row align-items-lg-center">
                                <h3 class="entry-title">Silver Ticket</h3>

                                <span class="mt-2 mt-lg-0">Basic Entry</span>

                                <div class="ticket-price mt-3 mt-lg-0">
                                <p>IDR.100000 </p>
                                </div><!-- ticket-price -->
                            </div><!-- ticket-type -->

                            <a href="<?php echo base_url('home/signin')?>"><input type="submit" name="" value="Buy" class="btn mt-2 mb-2 mt-lg-0 mb-lg-0"></a><!-- btn -->
                        </div><!-- ticket-row -->

                        <div class="ticket-row flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center">
                            <div class="ticket-type flex flex-column flex-lg-row align-items-lg-center">
                                <h3 class="entry-title"> Gold Ticket</h3>
                                <span class="mt-2 mt-lg-0"> Vip Entry</span>
                                <div class="ticket-price mt-3 mt-lg-0">
                                <p>IDR.150000 </p>
                                </div><!-- ticket-price -->
                            </div><!-- ticket-type -->

                            <a href="<?php echo base_url('home/signin')?>"><input type="submit" name="" value="Buy" class="btn mt-2 mb-2 mt-lg-0 mb-lg-0"></a><!-- btn -->
                        </div><!-- ticket-row -->

                        <div class="ticket-row flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center">
                            <div class="ticket-type flex flex-column flex-lg-row align-items-lg-center">
                                <h3 class="entry-title"> Early Bird Ticket</h3>
                                <span class="mt-2 mt-lg-0"> Basic Entry</span>
                                <div class="ticket-price mt-3 mt-lg-0">
                                <p>IDR.75000 </p>
                                </div><!-- ticket-price -->
                            </div><!-- ticket-type -->


                            <a href="<?php echo base_url('home/signin')?>"><input type="submit" name="" value="Buy" class="btn mt-2 mb-2 mt-lg-0 mb-lg-0"></a><!-- btn -->
                        </div><!-- ticket-row -->

                    </div><!-- event-tickets -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- main-content -->

<!-- Footer content -->
<?php
    $this->load->view('inosys/footer');
?>
<!-- /Footer content -->
