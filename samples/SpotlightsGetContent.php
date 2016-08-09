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
    <title>BV SDK PHP Example - GetContent</title>
  </head>
  <body>
    This is a test page for Spotlights: getContent() <br>
    GetContent() will return spotlights content <br><br>

    <div id="BVRRContainer">
      <?php echo $bv->spotlights->getContent(); ?>
    </div>
  </body>
</html>
