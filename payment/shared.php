<?php

require '../vendor/autoload.php';

header('Content-Type: application/json');

$config = parse_ini_file('../config.ini');

// Nos aseguramos de que el archivo de configuracion este bien.
if ($config === false) {
    http_response_code(500);
    echo json_encode([ 'error' => 'Internal server error.' ]);
    exit;
}

\Stripe\Stripe::setApiKey($config['stripe_secret_key']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $body  = json_decode($input);
}

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode([ 'error' => 'Invalid request.' ]);
    exit;
}
