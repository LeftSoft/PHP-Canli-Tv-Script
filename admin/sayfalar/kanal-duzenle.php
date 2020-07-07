<?php 
include 'header.php'; 
$kanalsor=$db->prepare("SELECT * FROM kanallar where kanal_id=:id");
$kanalsor->execute(array(
  'id' => $_GET['kanal_id']
  ));

$kanalcek=$kanalsor->fetch(PDO::FETCH_ASSOC);



?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kanal Düzenle</h1>
            <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="kanal-listele.php">Kanal Listele</a></li>
              <li class="breadcrumb-item active">Kanal Düzenle</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
             
           <form action="../ayar/islem.php" method="POST">
              
             <div class="col-sm-12">
                      <div class="form-group">
                        <label>Kanal Adı</label>
                        <input type="text" name="kanal_ad" class="form-control" placeholder="Kanal İsmi Girin. Örn: BeinSport,Tivibu vs." value="<?php echo $kanalcek['kanal_ad']; ?>">
                      </div>
                    </div>
 <div class="col-sm-12">
                      <div class="form-group">
                        <label>Ev Sahibi</label>
                        <input type="text" name="kanal_ev" class="form-control" placeholder="Deplasmandaki Takımla Karşılaşacak Takım İsmi" value="<?php echo $kanalcek['kanal_ev']; ?>">
                      </div>
                    </div>
             <div class="col-sm-12">
                      <div class="form-group">
                        <label>Deplasman</label>
                        <input type="text" name="kanal_dep" class="form-control" placeholder="Ev Sahibiyle Karşılaşacak Takım İsmi" value="<?php echo $kanalcek['kanal_dep']; ?>">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Saat</label>
                        <input type="text" name="kanal_saat" class="form-control" placeholder="Maç Saatini Giriniz.." value="<?php echo $kanalcek['kanal_saat']; ?>">
                      </div>
                    </div>
                       <div class="col-sm-12">
                      <div class="form-group">
                        <label>Kanal Açıklama</label>
                        <textarea class="form-control" name="kanal_aciklama"  placeholder="Kanal Açıklaması Girin.."><?php echo $kanalcek['kanal_aciklama']; ?></textarea>
                      </div>
                    </div>
                      <div class="col-sm-12">
                      <div class="form-group">
                        <label>Kanal Etiket</label>
                        <textarea class="form-control" name="kanal_etiket"  placeholder="Lütfen Etiketleri Virgül İle Ayırınız."><?php echo $kanalcek['kanal_etiket']; ?></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Kanal Video(Embed)</label>
                        <textarea class="form-control"  name="kanal_video" placeholder="İframe Kodu Ekleyiniz."><?php echo $kanalcek['kanal_video']; ?></textarea>
                      </div>
                    </div>
                   <input type="hidden" name="kanal_id" value="<?php echo $kanalcek['kanal_id'] ?>">
                    <div class="form-group">
              <div align="left" class="col-sm-1">
                <button type="submit" name="kanalduzenle" class="btn btn-success">Düzenle</button>
              </div>
            </div>


          </form>


          </div>
          <!-- /.card-body -->
          
        </div>
        <!-- /.card -->

        





        
      </div><!-- /.container-fluid -->
    </section>
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright 2019 <a>LeftSoft</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
