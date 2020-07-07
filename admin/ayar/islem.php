<?php 
ob_start();
session_start();
include '../../baglan.php'; 
include 'fonksiyon.php';
if (isset($_POST['admingiris'])) {

  $kullanici_mail=$_POST['kullanici_mail'];
  $kullanici_password=$_POST['kullanici_password'];

  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password");
  $kullanicisor->execute(array(
    'mail' => $kullanici_mail,
    'password' => $kullanici_password
    ));

  echo $say=$kullanicisor->rowCount();

  if ($say==1) {

    $_SESSION['kullanici_mail']=$kullanici_mail;
    header("Location:../sayfalar/index.php");
    exit;



  } else {

    header("Location:../index.php?durum=no");
    exit;
  }
  

}
if (isset($_POST['kanalduzenle'])) {
islemkontrol();
  $kanal_id=$_POST['kanal_id'];
  $kaydet=$db->prepare("UPDATE kanallar SET
    kanal_video=:kanal_video,
    kanal_ad=:kanal_ad,
    kanal_ev=:kanal_ev,
    kanal_dep=:kanal_dep,
    kanal_saat=:kanal_saat,
    kanal_aciklama=:kanal_aciklama,
    kanal_etiket=:kanal_etiket
    WHERE kanal_id={$_POST['kanal_id']}");
  $update=$kaydet->execute(array(
    'kanal_video' => $_POST['kanal_video'],
    'kanal_ad' => $_POST['kanal_ad'],
    'kanal_ev' => $_POST['kanal_ev'],
    'kanal_dep' => $_POST['kanal_dep'],
    'kanal_saat' => $_POST['kanal_saat'],
    'kanal_aciklama' => $_POST['kanal_aciklama'],
    'kanal_etiket' => $_POST['kanal_etiket']
    ));

  if ($update) {

    Header("Location:../sayfalar/kanal-duzenle.php?durum=ok&kanal_id=$kanal_id");

  } else {

    Header("Location:../sayfalar/kanal-duzenle.php?durum=no&kanal_id=$kanal_id");
  }

}

if (isset($_POST['kanalekle'])) {
  islemkontrol();
  $kaydet=$db->prepare("INSERT INTO kanallar SET
   kanal_video=:kanal_video,
    kanal_ad=:kanal_ad,
    kanal_ev=:kanal_ev,
    kanal_dep=:kanal_dep,
    kanal_saat=:kanal_saat,
    kanal_aciklama=:kanal_aciklama,
    kanal_etiket=:kanal_etiket
    ");
  $insert=$kaydet->execute(array(
   'kanal_video' => $_POST['kanal_video'],
    'kanal_ad' => $_POST['kanal_ad'],
    'kanal_ev' => $_POST['kanal_ev'],
    'kanal_dep' => $_POST['kanal_dep'],
    'kanal_saat' => $_POST['kanal_saat'],
    'kanal_aciklama' => $_POST['kanal_aciklama'],
    'kanal_etiket' => $_POST['kanal_etiket']
    ));

  if ($insert) {

    Header("Location:../sayfalar/kanal-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/kanal-listele.php?durum=no");
  }

}

if ($_GET['kanalsil']=="ok") {
islemkontrol();
  $sil=$db->prepare("DELETE from kanallar where kanal_id=:kanal_id");
  $kontrol=$sil->execute(array(
    'kanal_id' => $_GET['kanal_id']
    ));

  if ($kontrol) {

    Header("Location:../sayfalar/kanal-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/kanal-listele.php?durum=no");
  }

}
if (isset($_POST['kullaniciduzenle'])) {
islemkontrol();
  $kullanici_id=$_POST['kullanici_id'];
  

  $kaydet=$db->prepare("UPDATE kullanici SET
    kullanici_mail=:kullanici_mail,
    kullanici_password=:kullanici_password,
    kullanici_ad=:kullanici_ad
    WHERE kullanici_id={$_POST['kullanici_id']}");
  $update=$kaydet->execute(array(
    'kullanici_mail' => $_POST['kullanici_mail'],
    'kullanici_password' => $_POST['kullanici_password'],
    'kullanici_ad' => $_POST['kullanici_ad']
    ));

  if ($update) {

    Header("Location:../sayfalar/admin-duzenle.php?durum=ok&kullanici_id=$kullanici_id");

  } else {

    Header("Location:../sayfalar/admin-duzenle.php?durum=no&kullanici_id=$kullanici_id");
  }

}


if (isset($_POST['kullaniciekle'])) {
  islemkontrol();
  $kaydet=$db->prepare("INSERT INTO kullanici SET
   kullanici_mail=:kullanici_mail,
    kullanici_password=:kullanici_password,
    kullanici_ad=:kullanici_ad
    ");
  $insert=$kaydet->execute(array(
   'kullanici_mail' => $_POST['kullanici_mail'],
    'kullanici_password' => $_POST['kullanici_password'],
    'kullanici_ad' => $_POST['kullanici_ad']
    ));

  if ($insert) {

    Header("Location:../sayfalar/admin-listele.php?durum=ok");

  } else {

    Header("Location:../sayfalar/admin-listele.php?durum=no");
  }
}

if (isset($_POST['genelayarkaydet'])) {
 islemkontrol();
  //Tablo güncelleme işlemi kodları...
  $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_title=:ayar_title,
    ayar_description=:ayar_description,
    ayar_keywords=:ayar_keywords,
    ayar_author=:ayar_author
    WHERE ayar_id=0");

  $update=$ayarkaydet->execute(array(
    'ayar_title' => $_POST['ayar_title'],
    'ayar_description' => $_POST['ayar_description'],
    'ayar_keywords' => $_POST['ayar_keywords'],
    'ayar_author' => $_POST['ayar_author']
    ));


  if ($update) {

    header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    header("Location:../sayfalar/genel-ayar.php?durum=no");
  }
}




if (isset($_POST['logoduzenle'])) {
islemkontrol();

  $uploads_dir = '../../images';

  @$tmp_name = $_FILES['ayar_logo']["tmp_name"];
  @$name = $_FILES['ayar_logo']["name"];

  $benzersizsayi4=rand(20000,32000);
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

  
  $duzenle=$db->prepare("UPDATE ayar SET
    ayar_logo=:logo
    WHERE ayar_id=0");
  $update=$duzenle->execute(array(
    'logo' => $refimgyol
    ));



  if ($update) {

    $resimsilunlink=$_POST['eski_yol'];
    unlink("../../$resimsilunlink");

    Header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    Header("Location:../sayfalar/genel-ayar.php?durum=no");
  }
}


if (isset($_POST['foviconguncelle'])) {
islemkontrol();
  $uploads_dir = '../../images';

  @$tmp_name = $_FILES['ayar_fovicon']["tmp_name"];
  @$name = $_FILES['ayar_fovicon']["name"];

  $benzersizsayi4=rand(20000,32000);
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

  
  $duzenle=$db->prepare("UPDATE ayar SET
    ayar_fovicon=:fov
    WHERE ayar_id=0");
  $update=$duzenle->execute(array(
    'fov' => $refimgyol
    ));



  if ($update) {

    $resimsilunlink=$_POST['eski_yol'];
    unlink("../../$resimsilunlink");

    Header("Location:../sayfalar/genel-ayar.php?durum=ok");

  } else {

    Header("Location:../sayfalar/genel-ayar.php?durum=no");
  }

}
if (isset($_POST['reklamduzenle'])) {
islemkontrol();
  $reklam_id=$_POST['reklam_id'];
  

  $kaydet=$db->prepare("UPDATE reklam SET
    reklam_adi=:reklam_adi,
    reklam_kodu=:reklam_kodu
    WHERE reklam_id={$_POST['reklam_id']}");
  $update=$kaydet->execute(array(
    'reklam_adi' => $_POST['reklam_adi'],
    'reklam_kodu' => $_POST['reklam_kodu']
    ));

  if ($update) {

    Header("Location:../sayfalar/reklam-duzenle.php?durum=ok&reklam_id=$reklam_id");

  } else {

    Header("Location:../sayfalar/reklam-duzenle.php?durum=no&reklam_id=$reklam_id");
  }
}

 ?>
