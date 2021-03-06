<!-- Header Content -->
<?php
  $this->load->view('inosys/header');
  $name = $this->session->userdata('name');
  $email = $this->session->userdata('email');
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

            <div class="event-tickets">
            <form class="form-horizontal" action="<?php echo base_url('home/buy_ticket')?>" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label " style="color:black;">Ticket<span class="required">*</span></label>
                                    <select class="form-control" name="id_ticket" id="id_ticket">
                                    <?php 
                                        echo '<option value="">
                                        Choose Your ticket</option>';
                                        foreach ($produks as $ticket) {
                                        echo '<option value="'.$ticket->id_ticket.'">'
                                        .$ticket->nama_ticket.'</option>';}           
                                    ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" style="color:black;" >Price<span class="required">*</span></label>
                                    <input type="text" name="harga_jual" id="harga_jual" class="form-control" readonly>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label" style="color:black;">Stock Available<span class="required">*</span></label>
                                    <input type="text"  name="jml_ticket" class="form-control" readonly>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label" style="color:black;">Quantity<span class="required">*</span></label>
                                    <input type="number" name="qty" id="qty" onkeyup="sum();" class="form-control" min="0" max="50" required >
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label" style="color:black;">Total Price<span class="required">*</span></label>
                                    <input type="text" id="harga" name="harga"  class="form-control" readonly>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" style="color:black;">Email<span class="required">*</span></label>
                                    <input type="email" placeholder="Your email" name="email_user" class="form-control" required value="<?php echo $email ?>">
                                </div>

                                <div class="form-group">
                                    <label class="control-label" style="color:black;">Name<span class="required">*</span></label>
                                    <input type="text" name="nama_user" placeholder="Your name" class="form-control" value="<?php echo $name ?>">
                                </div>

                                <div class="form-group">
                                        <button type="submit" class="btn btn-success">Submit</button>  
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </form>
            </div>
        </div><!-- container -->
    </div><!-- main-content -->



<!-- Footer content -->
<?php
    $this->load->view('inosys/footer');
?>
<!-- /Footer content -->
