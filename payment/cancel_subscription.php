<?php session_start();
require_once 'shared.php';

$subscription_id = $_SESSION['subscription_id'];

$stripe = \Stripe\Stripe::setApiKey('sk_test_51I7URUJk62dLO66czfBWi0mU3gwUxePgpKFfuhrNsApjeMg2ujVbmkmvV4k70Cu6C4ev4Ljs9iwZD4GUXv2A8kCY00B2p1vpHh');

$subscription = \Stripe\Subscription::retrieve($subscription_id);
$subscription->cancel();

echo json_encode(['subscriptionStatus' => $subscription['status']]);

