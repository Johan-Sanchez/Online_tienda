<?php 
require '../vendor/autoload.php';

$credentials = new Aws\Credentials\Credentials('AKIAXAVALMVZHM2GJHR5', 'ynxm+Op4kMPVmAKkvDWAeZ4QDdEVy9erkQBs0y66');

$s3 = new Aws\S3\S3Client([
    'version'     => 'latest',
    'region'      => 'us-east-1',
    'credentials' => $credentials
]);	

$bucket = 'tienda-online-bt';
?>
