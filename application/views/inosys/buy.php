<!-- Header Content -->
<?php
  $this->load->view('inosys/header');
?>
<!-- /Header Content -->

<body class="tickets-page">
    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="#">SUNFEST</a>
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
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">SUNFEST 2018</a></li>
                                <li><a href="#">ARTISTS</a></li>
                                <li><a href="#">BLOG</a></li>
                                <li><a href="#">CONTACT</a></li>
                                <li><a href="#"><i class="fas fa-search"></i></a></li>
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
            <form class="form-horizontal">
            <div class="contact-form" action="<?php echo base_url()?>kasir/create_penjualan" method="post">
                <div class="row">
                    <div class="col-12 col-md-6">
                    <div class="col-md-8">
                    <div class="form-group">
                          <select class="form-control" name="id_produk" id="id_produk">
                          <?php 
                            foreach ($produks as $produk) {
                            echo '<option value="'.$produk->id_produk.'">'
                            .$produk->nama_produk.'</option>';}           
                          ?>
                          </select>
                        </div>    
                        <div class="form-group">
                            <input type="text" placeholder="Your name" class="form-control">
                        </div>
                        </div><!-- col-4 -->

                        <div class="col-12 col-md-6">
                            <input type="email" placeholder="Your email">
                        </div><!-- col-6 -->

                        <div class="col-12">
                            <input type="text" placeholder="Subject">
                        </div>

                        <div class="col-12">
                            <textarea name="name" rows="8" cols="80" placeholder="message"></textarea>
                        </div>

                        <div class="col-12 submit flex justify-content-center">
                            <input type="submit" name="" value="send message" class="btn">
                        </div>
                    </div>
                </div>
                </div><!-- row -->
            </div><!-- contact-form -->
            </div>
        </div><!-- container -->
    </div><!-- main-content -->

<!-- Footer content -->
<?php
    $this->load->view('inosys/footer');
?>
<!-- /Footer content -->
