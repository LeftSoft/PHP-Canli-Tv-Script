<?php 
include 'header.php';

$reklamsor=$db->prepare("SELECT * FROM reklam order by reklam_id");
$reklamsor->execute();
$deger=0;
while($reklamcek=$reklamsor->fetch(PDO::FETCH_ASSOC))
                {
                    $deger++;

                   if ($deger==1) {
                      $reklamüst = $reklamcek['reklam_kodu'];
                   }
                   else
                   {
                    $reklamalt = $reklamcek['reklam_kodu'];
                   }
                }
 ?>
				<!--// Header //-->

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
<div id=”soldasabit” style=”position: absolute; left: 0px; top: 0px; z-index: 1;”>REKLAM KODU</div>
                        <div class="kode_ticket_wraper">

                            <div class="container">

                                <div class="heading5 ticket_hdg">
                                    
                                    <div style="text-align: center;margin: 0 auto; padding: 15px">
                                        <?php echo $reklamüst ?>                                    </div>
                                    <h4><span>CANLI</span> Fikstür</h4>
                                </div>

                                <ul class="kode_ticket_list">

                                	<?php 

		$kanalsor=$db->prepare("SELECT * FROM kanallar");
		$kanalsor->execute();

		while($kanalcek=$kanalsor->fetch(PDO::FETCH_ASSOC)) {

		 ?>
                        				<li>
								<div class="kode_ticket_text">
									<h6><?php echo $kanalcek['kanal_ad']; ?></h6>
									<div class="ticket_title">
										<h2><?php echo $kanalcek['kanal_ev']; ?></h2>
										<span>VS</span>
										<h2><?php echo $kanalcek['kanal_dep']; ?></h2>
									</div>
									<p><?php echo $kanalcek['kanal_saat']; ?></p>
								</div>

								<div class="ticket_btn">
									<a href="kanal/<?=seo($kanalcek["kanal_ad"]).'/'.$kanalcek["kanal_id"]?>">Canlı Yayın</a>
								</div>

							</li>
							<?php } ?>
            						</ul>

					</div>

                            <div style="text-align: center;margin: 0 auto; padding: 15px">
                                <?php echo $reklamalt ?>                            </div>
				</div>

                    </div>
                </div>
            </div>
        </section>
</main>
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
<script src="js/jquery.js"></script>
<!--BOOTSTRAP JavaScript-->
<script src="js/bootstrap.min.js"></script>
<!--BX SLIDER JavaScript-->
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.dlmenu.js"></script>
<!--SLICK SLIDER JavaScript-->
<script src="slick/slick.min.js"></script>
<!--PRETTY PHOTO JavaScript-->
<script src="js/jquery.prettyphoto.js"></script>
<!--MASONRY JavaScript-->
<script src="js/waypoints-min.js"></script>
<!--CUSTOM JavaScript-->
<script src="js/functions.js"></script>
</body>


</html>