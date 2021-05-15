<?php  define('ROUTE', getenv("ROUTE")); 
require '../vendor/autoload.php';
require_once('../s3.php');			

$bucket = 'tienda-online-bt';

$awsAccessKey = 'AKIAXAVALMVZAOQW5SOS';
$awsSecretKey = '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';

$s3 = new S3($awsAccessKey, $awsSecretKey);
$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);
?>
