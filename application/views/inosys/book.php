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
                            <a href="<?php echo base_url()?>">INOSYS</a>
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

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">
                        <h2 class="entry-title">My tickets</h2>

                        <ul class="breadcrumbs flex align-items-center">
                            <li><a href="#">Home</a></li>
                            <li>My tickets</li>
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
                    <h2>Your ordered tickets</h2>
                </div><!-- entry-title -->
            </div><!-- entry-header -->

            <div class="row">
                <div class="col-12">
                    <div class="event-tickets">
                    <?php foreach ($my_ticket as $ticket): ?>
                        <div class="ticket-row flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center">
                        
                            <div class="ticket-type flex flex-column flex-lg-row align-items-lg-center">
                                <h3 class="entry-title"><?php echo $ticket->nama_ticket; ?></h3>
                                
                                <span class="mt-2 mt-lg-0"><?php echo $ticket->stat; ?></span>

                                <div class="ticket-price mt-3 mt-lg-0">
                                <p>IDR.<?php echo $ticket->harga; ?> </p>
                                </div><!-- ticket-price -->
                            </div>
                            <!-- ticket-type -->

                            <div class="flex align-items-center">
                                <div class="number-of-tickets flex justify-content-between align-items-center">
                                    
                                </div><!-- number-of-tickets -->

                                <div class="clear-ticket-count"><?php echo $ticket->qty; ?></div>
                            </div><!-- flex -->
                            <?php if ($ticket->stat == 'verified') :?>
                                <a href="<?php echo base_url();?>home/print_ticket/"><span class="fa fa-print"> Print Ticket</span></a>
                            <?php endif;?>
                        </div><!-- ticket-row -->
                        <?php endforeach;?>

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
