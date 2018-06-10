<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
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
            <div class="col-md-6">
              <div class="info-box">
                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-envelope-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Refund Today's</span>
                  <span class="info-box-number">
                    3 data

                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-envelope-o"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Rescedule Today's</span>
                <span class="info-box-number">
                  10 data

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </div>
        </div>



        <div class="card">
             <div class="card-header border-transparent">
               <h3 class="card-title">Data Booking</h3>

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
                 <table class="table m-0">
                   <thead>
                   <tr>
                     <th>Kode Booking</th>
                     <th>Tanggal Booking</th>
                     <th>Tipe Booking</th>
                     <th>Status</th>
                     <th style="text-align:right">Detail</th>
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
                  <div class="modal-content" style="width:150%;">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                          <h6 class="modal-title" id="myModalLabel"></h6>
                      </div>
                      <form class="form-horizontal">
                      <div class="modal-body">
                      <div id="tombol_kd"></div>
                      <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No Tiket</th>
                          <th>Nama Penumpang</th>
                          <th>Tanggal Lahir</th>
                          <th>Tipe Pessenger</th>
                        </tr>
                      </thead>
                      <tbody id="show_penumpang"></tbody>
                      </table>



                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>

          <!-- modal pessenger -->











<!-- data refund -->
  <div class="row">
         <div class="col-md-6">
           <div class="card">
             <div class="card-header no-border">
               <div class="d-flex justify-content-between">
                 <h3 class="card-title">Data Refund</h3>
                 <a href="javascript:void(0);">View Report</a>
               </div>
             </div>
                 <div class="card-body">
                   <table class="table table-striped table-valign-middle">
                     <thead>
                     <tr>
                       <th>Kode Booking</th>
                       <th>Tanggal Refund</th>
                       <th>Total Refund</th>
                       <th>Email</th>
                       <th>Telephone</th>
                     </tr>
                     </thead>
                     <tbody>

                     </tbody>
                   </table>
                  </div>
               <!-- /.d-flex -->
             </div>
           </div>

           <div class="col-md-6">
             <div class="card">
               <div class="card-header no-border">
                 <div class="d-flex justify-content-between">
                   <h3 class="card-title">Data Rescedule</h3>
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


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="<?= base_url().'assets/js/jquery.js' ?>"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    loadbooking();

    //-------------------------//
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
                    '<td>'+data[i].kd_booking+'</td>'+
                    '<td>'+data[i].tgl_booking+'</td>'+
                    '<td>'+data[i].tipe_booking+'</td>'+
                    '<td>'+data[i].status+'</td>'+
                    '<td style="text-align:right">'+
                      '<a href="javascript:;" class="btn btn-info btn-xs item-penumpang" data="'+data[i].kd_booking+'">Lihat Penumpang</a>'+
                    '</tr>';
          }
          $('#show_data').html(html);

        }
      });
    }
    //---------------------------//

    $('#show_data').on('click','.item-penumpang', function(){
      var kd_booking = $(this).attr('data');

      $.ajax({
        type: 'ajax',
        url: '<?= base_url() ?>adm/dashboard/get_passenger_id/'+kd_booking,
        async: false,
        dataType: 'json',
        success: function(data){
          $('#Modalpenumpang').modal('show');
          var html = '';
          var tombol = '';

          $.each(data.data, function(key, value){
            html += '<tr>'+
                    '<td>'+value.no_tiket+'</td>'+
                    '<td>'+value.nama_pessenger+'</td>'+
                    '<td>'+value.tgl_lahir+'</td>'+
                    '<td>'+value.tipe_pessenger+'</td>'+
                    '</tr>';
          });

           tombol += '<button type="button" id="'+data.kd_booking+'" class="item-penerbangan" name="kd_booking">Lihat Penerbangan</button>';

          $('#show_penumpang').html(html);
          $('#tombol_kd').html(tombol);

        }
      });
    });

    $('#Modalpenumpang').on('click', '.item-penerbangan', function(){
      var kd_booking = $(this).attr('id');
      console.log(kd_booking);
    });




  });
  </script>
