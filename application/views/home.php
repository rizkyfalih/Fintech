<html>
<head>
	<title>Google authentication library for codeigniter</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
          
</head>
<body>
	
	<div align="center">
		<h2>Fintech</h2>
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 offset-m3 l6 offset-l3">

				<?php 
				if($this->session->userdata('sess_logged_in')==0){?>
					<a href="<?=$google_login_url?>"class="waves-effect waves-light btn red"><i class="fa fa-google left"></i>Google login</a>
				<?php }else{?>
					<a href="<?=base_url()?>auth/logout" class="waves-effect waves-light btn red"><i class="fa fa-google left"></i>Google logout</a>
				<?php }
				?>
	
			</div>
		</div>
		<div class="row">	

			<?php if(isset($_SESSION['name'])){?>
				<div class="col s12 m6 l4 offset-l3 " >
					<div class="card ">
			            <div class="card-image waves-effect waves-block waves-light">
			              <img class="activator" src="<?=$_SESSION['profile_pic']?>">
			            </div>
			            <div class="card-content">
			             <span class="card-title activator grey-text text-darken-4"> <i class="material-icons"><?=$_SESSION['name']?></i></span>
			            </div>
						 <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?=$_SESSION['name']?><i class="material-icons right">close</i></span>
      <p>Email Id: <?=$_SESSION['email']?></p>
    </div>
			        </div>
				</div>
			<?php }?>
		</div>
	</div>

</body>
</html>


            <form class="form-horizontal" action="<?php echo base_url()?>kasir/create_penjualan" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label ">Ticket<span class="required">*</span></label>
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
                                    <label class="control-label " >Harga<span class="required">*</span></label>
                                    <input type="text" name="harga_jual" id="harga_jual" class="form-control" readonly>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label">Stock Tersedia<span class="required">*</span></label>
                                    <input type="text"  name="jml_ticket" class="form-control" readonly>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label " >Quantity<span class="required">*</span></label>
                                    <input type="number" name="qty" id="qty" onkeyup="sum();" class="form-control" min="0" max="50" required >
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label ">Sub Total<span class="required">*</span></label>
                                    <input type="text" id="harga" name="harga"  class="form-control" readonly>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label ">Email<span class="required">*</span></label>
                                    <input type="email" placeholder="Your email" name="email_user" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Name<span class="required">*</span></label>
                                    <input type="text" name="nama_user" placeholder="Your name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Pembayaran<span class="required">*</span></label>
                                    <input type="email" placeholder="Your name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Sub Total<span class="required">*</span></label>
                                    <input type="email" placeholder="Your name" class="form-control">
                                </div>

                                <div class="form-group">
                                        <button type="submit" class="btn btn-success">Submit</button>  
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </form>