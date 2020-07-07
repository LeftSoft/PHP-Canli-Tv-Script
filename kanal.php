<?php 
include 'header.php';

$kanalsor=$db->prepare("SELECT * FROM kanallar where kanal_id=:id");
$kanalsor->execute(array(
  'id' => $_GET['kanal_id']
  ));
$kanal = $_GET['kanal_id'];
$kanalcek=$kanalsor->fetch(PDO::FETCH_ASSOC);
$say=$kanalsor->rowCount();
if($say==0)
{
header("Location:../../index.php");
  exit;
}
$reklamsor=$db->prepare("SELECT * FROM reklam order by reklam_id");
$reklamsor->execute();
$deger=0;
while($reklamcek=$reklamsor->fetch(PDO::FETCH_ASSOC))
                {
                    $deger++;

                   if ($deger==3) {
                      $reklamüst = $reklamcek['reklam_kodu'];
                   }
                  if ($deger==4)
                   {
                    $reklamalt = $reklamcek['reklam_kodu'];
                   }
                }
 ?>

				<!--// KODE BENNER1 START //-->
				<div class="kode_benner1 bamnner2">
					<div class="kode_benner1_text">
					</div>
				</div>

				<!--// KODE BENNER1 END //--><main class="club-profile-page">

        <section class="upcoming-events">
            <div class="container">
                <div class="row">
                    <div class="results-item col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div style="text-align: center;margin: 0 auto; padding: 15px">
<?php echo $reklamüst; ?></div>
                        <div id="moko" style="height:65vh"><?php echo $kanalcek['kanal_video']; ?></div><br>
                        <h5>Etiketler</h5>
			<?php echo $kanalcek['kanal_etiket']; ?>
			<br/>
			<div style="text-align: left"><p><?php echo $kanalcek["kanal_ad"]; ?></p>
</div>
                        <div style="text-align: center;margin: 0 auto; padding: 15px">
                            <?php echo $reklamalt; ?>                       </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Upcoming Events -->
    </main>
    <script>
        var playerElement = document.getElementById("moko");
        var player = new Clappr.Player({
            source: "http://forsat.men:8888/louhan5/qK326kZ/3594",
            mimeType: 'application/x-mpegURL',
            width: '100%',
            height: '100%',
            autoPlay: true,
            mediacontrol: {seekbar: "#00FF00", buttons: "#FFFFFF"},
            mute: false,
            disableVideoTagContextMenu: true,
            playbackNotSupportedMessage: 'Your browser is not supported.'
        });
        player.attachTo(playerElement);
        player.play();
    </script>
<!--// Contact Footer //-->
<footer class="football-footer">
    <div class="container">
        <!--// COPY RIGHT //-->
        <div class="spb-copyright">
            <p>All Rights Reserved</p>
            <a id="kode-topbtn" href="#"><i class="fa fa-angle-double-up"></i></a>
        </div>
        <!--// COPY RIGHT //-->
    </div>
</footer>
<!--// Contact Footer //-->
</div>
<!--JavaScript-->
<script src="../js/jquery.js"></script>
<!--BOOTSTRAP JavaScript-->
<script src="../js/bootstrap.min.js"></script>
<!--BX SLIDER JavaScript-->
<script src="../js/jquery.bxslider.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<script src="../js/jquery.dlmenu.js"></script>
<!--SLICK SLIDER JavaScript-->
<script src="../slick/slick.min.js"></script>
<!--PRETTY PHOTO JavaScript-->
<script src="../js/jquery.prettyphoto.js"></script>
<!--MASONRY JavaScript-->
<script src="../js/waypoints-min.js"></script>
<!--CUSTOM JavaScript-->
<script src="../js/functions.js"></script>
</body>

<!-- Mirrored from mokoweb.xyz/mokostream/live/dpr-vs-mpr by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 17:29:17 GMT -->
</html>