<?php
require '../vendor/autoload.php';

$config = parse_ini_file('../config.ini');
$credentials = new Aws\Credentials\Credentials($config['public_key'],$config['private_key'] );

$s3 = new Aws\S3\S3Client(
    [
        'version'     => 'latest',
        'region'      => 'us-east-1',
        'credentials' => $credentials,
    ]
);

$bucket = 'tienda-online-bt';
