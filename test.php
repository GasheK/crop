<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
use stojg\crop;

require_once 'src/stojg/crop/Crop.php';
require_once 'src/stojg/crop/CropBalanced.php';
require_once 'src/stojg/crop/CropCenter.php';
require_once 'src/stojg/crop/CropEntropy.php';
require_once 'src/stojg/crop/CropEntropyOrig.php';

$cropperEntropy = new stojg\crop\CropEntropy(__DIR__."/full.jpg");
$cropperEntropyOrig = new stojg\crop\CropEntropyOrig(__DIR__."/full.jpg");
$cropperCenter = new stojg\crop\CropCenter(__DIR__."/full.jpg");
$croppedEntropyImage = $cropperEntropy->resizeAndCrop(230, 270);
$croppedEntropyImage->writeimage(__DIR__."/crop-entropy.jpg");
$croppedEntropyOrigImage = $cropperEntropyOrig->resizeAndCrop(230, 270);
$croppedEntropyOrigImage->writeimage(__DIR__."/crop-entropy-orig.jpg");
$croppedCenterImage = $cropperCenter->resizeAndCrop(230, 270);
$croppedCenterImage->writeimage(__DIR__."/crop-center.jpg");


?>
<html>
<head></head>
<body style="background-color: #F3F3F3;">
<div>
    <h2>Center Crop</h2>

    <div><img src="crop-center.jpg" alt="Center Crop"/></div>
</div>
<div>
    <h2>My Entropy Crop</h2>

    <div><img src="crop-entropy.jpg" alt="Entropy Crop"/></div>
</div>
<div>
    <h2>Original Entropy Crop</h2>

    <div><img src="crop-entropy-orig.jpg" alt="Entropy Crop"/></div>
</div>
<div>
    <h2>Prep Image Work</h2>

    <div>
        <img src="crop-base.jpg" alt="Base Image"/>
        <img src="crop-edge.jpg" alt="Edge Detected"/>
        <img src="crop-modulate.jpg" alt="Modulated"/>
        <img src="crop-threshold.jpg" alt="Thresholded - if that is a word"/>
        <img src="crop-blur.jpg" alt="Blurred"/>
    </div>
</div>

</body>
</html>