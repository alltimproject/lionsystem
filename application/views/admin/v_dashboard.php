<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 animated zoomIn">
              <div class="info-box">
                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-envelope-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Refund Today's</span>
                  <span class="info-box-number">
                    3 data On Prosess

                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
            <div class="col-md-6 animated zoomIn">
              <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-envelope-o"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Rescedule Today's</span>
                <span class="info-box-number">
                  10 data On Prosess

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </div>
        </div>


        <!-- data refund -->
          <div class="row">
                 <div class="col-md-6 animated bounceInLeft">
                   <div class="card">
                     <div class="card-header no-border" style="padding-top:40px; padding-bottom:20px;">
                       <div class="d-flex justify-content-between">
                         <h3 class="card-title"><i class="fa fa-search"></i> Data Refund</h3>

<<<<<<< HEAD
                         <select class="form-control" name="kd_booking" style="width:40%" id="selectKdBooking">
                           <option value="" style="font-size:13%">-- Pilih Kode Booking -- </option>
                          <?php foreach ($getkodebooking as $key){
                            echo "<option value='$key->kd_booking'>$key->kd_booking</option>";
                          }
                          ?>
                         </select>
=======

                         <select class="form-control" name="kd_booking" style="width:40%" id="selectNorefund">
                           <option value="" style="font-size:13%">-- Pilih No Refund -- </option>
                          <?php foreach ($getnorefund as $key){
                            echo "<option value='$key->no_refund'>$key->no_refund</option>";
                          }
                          ?>
                         </select>

>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
                       </div>
                     </div>
                         <div class="card-body">
                           <div class="d-flex justify-content-between">
                             <h3 class="card-title"><i></i></h3>
                             <span class="badge badge-info right" id="title-jumlahdata"></span>
                           </div>
                           <table class="table table-striped table-hover">
                             <thead id="heading-refund">
                               <tr>
<<<<<<< HEAD
                                 <th style="font-size:70%">No Tiket</th>
                                 <th style="font-size:70%">Nama Penumpang</th>

                                 <th style="font-size:70%">Tanggal Refund</th>
                                 <th style="font-size:70%">Tipe Penumpang</th>
=======
                                 <th style="font-size:70%">Nama Penumpang</th>
                                 <th style="font-size:70%">Tanggal Refund</th>

                                 <th style="font-size:70%">No Tiket</th>
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
                               </tr>
                             </thead>
                             <tbody id="show_refund"></tbody>
                             <div id="btn-check"></div>
                            </table>
                          </div>
                       <!-- /.d-flex -->
                     </div>
                   </div>

                   <div class="col-md-6 animated bounceInRight">
                     <div class="card">
                       <div class="card-header no-border">
                         <div class="d-flex justify-content-between">
                           <h3 class="card-title"><i class="fa fa-search"></i> Data Rescedule</h3>
                           <a href="javascript:void(0);">View Report</a>
                         </div>
                       </div>
                       <div class="card-body">
                         <table class="table table-striped table-valign-middle">
                           <thead>
                           <tr>
                             <th>Product</th>
                             <th>Price</th>
                             <th>Sales</th>
                             <th>More</th>
                           </tr>
                           </thead>
                           <tbody>

                           </tbody>
                         </table>
                         </div>
                         <!-- /.d-flex -->
                       </div>
                     </div>
                   <!-- /.card -->
                  </div>



        <div class="card animated fadeInUp">
             <div class="card-header border-transparent">
               <h3 class="card-title card-success">Data Booking</h3>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-widget="collapse">
                   <i class="fa fa-minus"></i>
                 </button>
                 <button type="button" class="btn btn-tool" data-widget="remove">
                   <i class="fa fa-times"></i>
                 </button>
               </div>
             </div>
             <!-- /.card-header -->
             <div class="card-body p-0">
               <div class="table-responsive">
                 <table class="table m-0" id="myTable">
                   <thead>
                   <tr>
                     <th style="font-size:80%">Kode Booking</th>
                     <th style="font-size:80%">Tanggal Booking</th>
                     <th style="font-size:80%">Tipe Booking</th>
                     <th style="font-size:80%">PIC</th>
                     <th style="font-size:80%">No Telepon</th>
                     <th style="font-size:80%">Status</th>
                     <th style="text-align:right; font-size:80%">Detail</th>
                   </tr>
                   </thead>
                   <tbody id="show_data"></tbody>
                 </table>
               </div>
               <!-- /.table-responsive -->
             </div>
             <!-- /.card-body -->
             <div class="card-footer clearfix">
               <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All </a>
             </div>
             <!-- /.card-footer -->
           </div>
           <!-- /.card -->
         </div> <!-- container fluid -->

         <!-- modal pessenger -->
          <div class="modal fade" id="Modalpenumpang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">

                  <div class="modal-content" style="width:190%;">
                      <div class="modal-header">
                        <div class="col-md-6 animated zoomIn">
                          <div class="info-box">
                          <span class="info-box-icon bg-success elevation-1"><i class="fa fa-credit-card"></i></span>
                          <div class="info-box-content">
                            <span class="info-box-text">Kode Booking</span>
                            <span class="info-box-number">
                              <input type="text" name="kd_bookings" style="width:30%" readonly disabled>
                              <h5 class> </h5>
                            </span>
                          </div>
                        </div>
                          <div id="tombol_kd"></div>
                      </div>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                          <h6 class="modal-title" id="myModalLabel"></h6>
                      </div>

                      <form class="form-horizontal">
                      <div class="modal-body">

                      <table class="table table-hover" id="myTable">
                        <thead>
                        <tr class="bg-warning">
                          <th style="font-size:80%">No Tiket</th>
                          <th style="font-size:80%">Nama Penumpang</th>
                          <th style="font-size:80%">Tanggal Lahir</th>
                          <th style="font-size:80%">Tipe Pessenger</th>
                        </tr>
                      </thead>
                      <tbody id="show_penumpang"></tbody>
                      </table>

                      <div id="show_penerbangan" class="animated fadeInUp">
                      <table class="table">
                        <thead>
                        <tr class="bg-warning">
                          <th style="font-size:80%">No Penerbangan</th>
                          <th style="font-size:80%">Asal</th>
                          <th style="font-size:80%">Tujuan</th>
                          <th style="font-size:80%">Tanggal Keberangkatan</th>
                          <th style="font-size:80%">Berangkat</th>
                          <th style="font-size:80%">Tiba</th>
                          <th style="font-size:80%">Class</th>
                          <th style="font-size:80%">Harga</th>
                          <th style="font-size:80%">Provider</th>
                        </tr>
                       </thead>
                       <tbody id="show_detail_penerbangan"></tbody>
                      </table>

                      </div>

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>

          <!-- modal pessenger -->


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="<?= base_url().'assets/js/jquery.js' ?>"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    loadbooking();

<<<<<<< HEAD
        setInterval(function(){
            loadbooking();
        }, 10000);
=======
    setInterval(function(){
        loadbooking();
    }, 10000);
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e

    $('#heading-refund').hide();
    // loadrefund();




    $('#myTable').dataTable();

    //---------------------------------------------------------------------------------------------------------------------------------------------//
    function loadbooking(){
      $.ajax({
        type : 'ajax',
        url : '<?php echo base_url() ?>adm/dashboard/getbooking',
        async : false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html += '<tr>'+
                    '<td style="font-size:80%">'+data[i].kd_booking+'</td>'+
                    '<td style="font-size:80%">'+data[i].tgl_booking+'</td>'+
                    '<td style="font-size:80%">'+data[i].tipe_booking+'</td>'+
                    '<td style="font-size:80%">'+data[i].nama_depan+' '+data[i].nama_belakang+'</td>'+
<<<<<<< HEAD
                    '<td style="font-size:80%">'+data[i].no_tlp+'</td>'+
                    '<td style="font-size:80%">'+data[i].status+'</td>'+
                    '<td style="text-align:right">'+
                      '<a href="javascript:;" class="btn btn-info btn-xs item-penumpang" data="'+data[i].kd_booking+'">Lihat Penumpang</a>'+
                    '</tr>';
=======
                    '<td style="font-size:80%">'+data[i].no_tlp+'</td>';

                    if(data[i].status == 'Confirmed'){
                        html+='<td style="font-size:100%; " class="bg-success text-center">'+data[i].status+'</td>';
                    }else{
                        html+='<td style="font-size:100%;" class="bg-danger text-center">'+data[i].status+'</td>';
                    }

                    html+='<td style="text-align:right">'+
                          '<a href="javascript:;" class="btn btn-info btn-xs item-penumpang" data="'+data[i].kd_booking+'">Lihat Penumpang</a>'+
                          '</tr>';
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
          }
          $('#show_data').html(html);

        }
      });
    }
<<<<<<< HEAD
=======

>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
    //---------------------------------------------------------------------------------------------------------------------------------------//

    $('#show_data').on('click','.item-penumpang', function(){
      $('#tombol_kd').show();
      var kd_booking = $(this).attr('data');

      $.ajax({
        type: 'ajax',
        url: '<?= base_url() ?>adm/dashboard/get_passenger_id/'+kd_booking,
        async: false,
        dataType: 'json',
        success: function(data){
          $('#Modalpenumpang').modal('show');
          $('#show_penerbangan').hide();
          var html = '';
          var tombol = '';

          $.each(data.data, function(key, value){
            html += '<tr class="animated fadeInUp">'+
                    '<td style="font-size:80%">'+value.no_tiket+'</td>'+
                    '<td style="font-size:80%">'+value.nama_pessenger+'</td>'+
                    '<td style="font-size:80%">'+value.tgl_lahir+'</td>'+
                    '<td style="font-size:80%">'+value.tipe_pessenger+'</td>'+
                    '</tr>';
          });
           tombol += '<button type="button" id="'+data.kd_booking+'" class="btn btn-info btn-xs item-penerbangan" name="kd_booking">Lihat Penerbangan</button>';
          $('#show_penumpang').html(html);
          $('#tombol_kd').html(tombol);
          $('[name="kd_bookings"]').val(data.kd_booking).css("font-size","20px");
        }
      });
    });
    //--------------------------------------------- end show modal -------------------------------------------------------------------------------

    $('#Modalpenumpang').on('click', '.item-penerbangan', function(){
      $('#tombol_kd').hide();
      $('#show_penerbangan').show();
      var kd_booking = $(this).attr('id');
      var html = '';
      var i;

        $.ajax({
          type: 'ajax',
          url: '<?= base_url() ?>adm/dashboard/getpenerbangan_id/'+kd_booking,
          async: false,
          dataType: 'json',
          success: function(data){
            for(i=0; i<data.length; i++){
              html += '<tr>'+
                      '<td style="font-size:80%">'+data[i].no_penerbangan+'</td>'+
                      '<td style="font-size:80%">'+data[i].kota_asal+'</td>'+
                      '<td style="font-size:80%">'+data[i].kota_tujuan+'</td>'+
                      '<td style="font-size:80%">'+data[i].tgl_keberangkatan+'</td>'+
                      '<td style="font-size:80%">'+data[i].jam_keberangkatan+'</td>'+
                      '<td style="font-size:80%">'+data[i].jam_tiba+'</td>'+
                      '<td style="font-size:80%">'+data[i].class+'</td>'+
                      '<td style="font-size:80%">'+data[i].harga_tiket+'</td>'+
                      '<td style="font-size:80%">'+data[i].provider+'</td>'+
                      '</tr>';
            }
            $('#show_detail_penerbangan').html(html);
          }
        });
    });

    //---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

<<<<<<< HEAD
    $('#selectKdBooking').change(function(){
      var kd_booking = $('#selectKdBooking').val();

=======




    $('#selectNorefund').change(function(){
      var no_refund = $('#selectNorefund').val();
      console.log(no_refund);
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
      var html = '';
      var i;
      var btn_check = '';
      var jumlahdata = '';
      $.ajax({
        type: 'POST',
<<<<<<< HEAD
        url: '<?= base_url() ?>adm/dashboard/showrefund/'+kd_booking,
=======
        url: '<?= base_url() ?>adm/dashboard/showrefund/'+no_refund,
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
        dataType: 'json',
        success: function(data){
          if(data.data.length != ''){

            $.each(data.data, function(key,value){
                html += '<tr>'+
<<<<<<< HEAD
                          '<td style="font-size:70%">'+value.no_tiket+'<br>'+
                           '<p class="text-center bg-danger" style="font-size:85%;"><b>'+value.refund_status+'</b><p>'+
                           '</td>'+
                           '<td style="font-size:70%">'+value.nama_pessenger+'</td>'+
                           '<td style="font-size:70%">'+value.tgl_refund+'</td>'+
                           '<td style="font-size:70%">'+value.tipe_pessenger+'</td>'+
                         '<tr>';
            });
            btn_check += '<a href="<?= base_url() ?>adm/dashboard/checkdata/'+data.kd_booking+'" class="btn btn-info btn-xs item-refund" data="'+data.kd_booking+'">CHECK</a>';
            jumlahdata = data.jumlahdata;
=======
                          '<td style="font-size:80%"><b>'+value.nama_pessenger+'</b><br>'+
                           '<p class="text-center bg-danger" style="font-size:85%;"><b>'+value.refund_status+'</b><p>'+
                           '</td>'+
                           '<td style="font-size:70%">'+value.tgl_refund+'</td>'+
                           '<td style="font-size:70%">'+value.no_tiket+'</td>'+
                         '<tr>';
            });
            btn_check += '<a href="<?= base_url() ?>adm/dashboard/checkdata/'+data.norefund+'" class="btn btn-info btn-xs item-refund" data="'+data.kd_booking+'">CHECK</a>';
            // jumlahdata = data.jumlahdata;
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
          }else{
            $('#btn-check').hide();
            html += '<p> Tidak Ada Data </p>';
          }
          $('#heading-refund').show('slow');
          $('#show_refund').html(html).addClass('animated fadeInUp');
          $('#btn-check').html(btn_check).show();
          $('#title-jumlahdata').html(jumlahdata);
<<<<<<< HEAD

=======
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
        }
      });
    });





  });
  </script>
