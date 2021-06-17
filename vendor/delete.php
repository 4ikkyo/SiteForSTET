<?php
if (!empty($_POST['delete'])) {
    foreach ($_POST['delete'] AS $f) {
    if (file_exists("../$f")) {
      unlink("../$f");
      echo 'Files1 '.$f.' has been deleted';
    } else {
      echo 'Could not delete '.$f.', files does not exist';
    }
  }
}
header ('Location: ../profile.php');
?>