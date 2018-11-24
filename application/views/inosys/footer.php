
    <footer class="site-footer">
        <div class="footer-cover-title flex justify-content-center align-items-center">
            <h2>INOSYS</h2>
        </div><!-- .site-footer -->

        <div class="footer-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <a href="#">INOSYS</a>
                        </div><!-- entry-title -->

                        <div class="copyright-info">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div><!-- copyright-info -->

                        <div class="footer-social">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div><!-- footer-social -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer-content-wrapper -->
    </footer><!-- site-footer -->

    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/swiper.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/custom.js'></script>
    
    <script type="text/javascript">
      jQuery(document).ready(function(){
        jQuery('#id_ticket').on('input',function(){
          var id_ticket = jQuery(this).val();
          console.log(id_ticket);
          jQuery.ajax({
            type : "POST",
            url : "<?php echo base_url('home/get_ticket')?>",
            dataType : "JSON",
            data : {id_ticket:id_ticket},
            chace : false,
            success : function(data){
                jQuery.each(data, function(id_ticket, nama_ticket, harga_jual, jml_ticket){
                    jQuery('[name="harga_jual"]').val(data.harga_jual);
                    jQuery('[name="jml_ticket"]').val(data.jml_ticket);
              });
            }
          });
          return false;
        });    
      });
    </script>

    <script>
    function sum() {
      var harga_jual = document.getElementById('harga_jual').value;
      var qty = document.getElementById('qty').value;
      var result = parseInt(harga_jual) * parseInt(qty);
      if (!isNaN(result)) {
        document.getElementById('harga').value = result;
      }
      console.log(result)
    }
    </script>
    

</body>
</html>