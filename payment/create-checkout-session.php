<?php
require_once 'shared.php';

$domain_url = $config['domain'];

// Crea una nueva Checkout Session para la orden
// Other optional params include:
// [billing_address_collection] - para mostrar los detalles de la direccion en la pagina
// [customer] - si es que tienes un Customer ID de Stripe existente
// [payment_intent_data] - capturaremos el pago mas adelante
// [customer_email] - deja rellenar el campo de email en el formulario
// ?session_id={CHECKOUT_SESSION_ID} significa que la redireccion tendra el Sesion Id como parametro
$checkout_session = \Stripe\Checkout\Session::create(
    [
        'success_url'          => $domain_url.'/success.html?session_id={CHECKOUT_SESSION_ID}&stripe_data={',
        'cancel_url'           => $domain_url.'/canceled.html',
        'payment_method_types' => ['card'],
        'mode'                 => 'subscription',
        'line_items'           => [
            [
                'price'    => $body->priceId,
                'quantity' => 1,
            ],
        ],
    ]
);


echo json_encode(['sessionId' => $checkout_session['id']]);