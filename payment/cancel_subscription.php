<?php session_start();
require_once 'shared.php';
require '../models/user_model.php';

$email = $_SESSION['usuario'];
$user = new UserModel();
$resultado = $user->get_subscription($email);

$subscription_id = $resultado['subscription_id'];

\Stripe\Stripe::setApiKey('sk_test_51I7URUJk62dLO66czfBWi0mU3gwUxePgpKFfuhrNsApjeMg2ujVbmkmvV4k70Cu6C4ev4Ljs9iwZD4GUXv2A8kCY00B2p1vpHh');


$subscription = \Stripe\Subscription::retrieve($subscription_id);
$subscription->cancel();

echo json_encode($subscription['status']);

