<?php
use Bazaarvoice\Bazaarvoice;
//Please provide cloud_key, bv_root_folder and subject_id
require('../vendor/autoload.php');
$bv = new \Bazaarvoice\Bazaarvoice(array(
  'bv_root_folder' => '',
  'subject_id' => '',
  'cloud_key' => '',
  'page_url' => ''
));
?><!DOCTYPE html>
<html>
  <head>
    <title>BV SDK PHP Example - getReviews</title>
  </head>
  <body>
    This is a test page for Reviews: getReviews()<br>
    This will return review content<br><br>

    <div id="BVRRContainer">
      <?php echo $bv->reviews->getReviews(); ?>
    </div>
  </body>
</html>
