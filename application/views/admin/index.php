<!-- Header Content -->
<?php
  $this->load->view('admin/header');
?>
<!-- /Header Content -->

  <!-- Navigation Content -->
  <?php
    $this->load->view('admin/navigation');
  ?>
  <!-- /Navigation Content -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Penjualan </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>ID User</th>
                          <th>Nama Ticket</th>
                          <th>Harga</th>
                          <th>Quantity</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($tickets as $ticket): ?>
                        <tr>
                          <td><?php echo $ticket->id_user;?></td>
                          <td><?php echo $ticket->nama_ticket;?></td>
                          <td><?php echo $ticket->harga;?></td>
                          <td><?php echo $ticket->qty;?></td>
                          <td><?php echo $ticket->stat;?></td>
                          <td><a href="<?php echo base_url();?>" class="btn btn-warning btn-xs"><span class="fa fa-close"></span> Batal</a></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>                    
                    </table>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    <!-- Footer content -->
    <?php
      $this->load->view('admin/footer');
    ?>
    <!-- /Footer content -->

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/build/js/penjualan.js"></script>
  
    <script type="text/javascript">
      $(document).ready(function(){
        $('#id_produk').on('input',function(){
          var id_produk = $(this).val();
          $.ajax({
            type : "POST",
            url : "<?php echo base_url('kasir/get_produk')?>",
            dataType : "JSON",
            data : {id_produk:id_produk},
            chace : false,
            success : function(data){
              $.each(data, function(id_produk, nama_produk, harga_jual, jml_produk){
                $('[name="harga_jual"]').val(data.harga_jual);
                $('[name="jml_produk"]').val(data.jml_produk);
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
    }

    function kembalian(){
      var total_harga = document.getElementById('pj_total').value;
      var bayar = document.getElementById('pj_bayar').value;
      var kembali = parseInt(bayar) - parseInt(total_harga);
      if (!isNaN(kembali)) {
        document.getElementById('pj_kembalian').value = kembali;
      }
    }

    function addRow(){
      "use strict";

      var total_harga = document.getElementById("pj_total").value;
      var table = document.getElementById("table");
      var row = document.createElement("tr");
      console.log(row);
      var td1 = document.createElement("td");
      var td2 = document.createElement("td");
      var td3 = document.createElement("td");
      var td4 = document.createElement("td");

      td1.innerHTML = document.getElementById("id_produk").value;
      td2.innerHTML = document.getElementById("harga_jual").value;
      td3.innerHTML = document.getElementById("qty").value;
      td4.innerHTML = document.getElementById("harga").value;

      row.appendChild(td1);
      row.appendChild(td2);
      row.appendChild(td3);
      row.appendChild(td4);

      table.children[0].appendChild(row);
      console.log(total_harga)
      if(total_harga == ""){
        total_harga = 0;
        total_harga = parseInt(total_harga) + parseInt(td4.innerHTML);
        console.log(harga);
        document.getElementById("pj_total").value = total_harga;
      } else {
        total_harga = parseInt(total_harga) + parseInt(td4.innerHTML);
        console.log(total_harga);
        document.getElementById("pj_total").value = total_harga;
      }



    }
    var arrData=[]
    $("#test").on('click', function(){
      $("#table tr").each(function(){
        var currentRow=$(this);
        
        var col1_value=currentRow.find("td:eq(0)").text();
        var col2_value=currentRow.find("td:eq(1)").text();
        var col3_value=currentRow.find("td:eq(2)").text();
        var col4_value=currentRow.find("td:eq(3)").text();

        var obj = {};
        obj.col1 = col1_value;
        obj.col2 = col2_value;
        obj.col3 = col3_value;
        obj.col4 = col4_value;

        arrData.push(obj);

      });
      alert(arrData);
      console.log(arrData);
      console.log(arrData[1].col4);

    });
    </script>
    

  </body>
</html>
