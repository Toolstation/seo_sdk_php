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
    <title>BV SDK PHP Example - getAggregateRating</title>
  </head>
  <body>
    This is a test page for Reviews: getAggregateRating()<br>
    This will return aggregate rating content<br><br>
    <div id="BVRRSummaryContainer">
      <?php echo $bv->reviews->getAggregateRating(); ?>
    </div>
  </body>
</html>
