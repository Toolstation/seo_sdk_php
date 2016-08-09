<?php
use Bazaarvoice\Bazaarvoice;
//Please provide cloud_key, bv_root_folder and page_url
require('../vendor/autoload.php');
$bv = new \Bazaarvoice\Bazaarvoice(array(
    'bv_root_folder' => '',
    'cloud_key' => '',
    'page_url' => '',
    'subject_id' => 'seller'
));
?><!DOCTYPE html>
<html>
<head>
    <title>BV SDK PHP Example - GetContent</title>
</head>
<body>
This is a test page for SellerRatings: getContent() <br>
GetContent() will return seller ratings content <br><br>

<div id="BVRRContainer">
    <?php echo $bv->sellerratings->getContent(); ?>
</div>
</body>
</html>
