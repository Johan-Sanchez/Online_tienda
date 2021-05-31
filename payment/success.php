<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Stripe Checkout Sample</title>
    <meta name="description" content="A demo of Stripe Payment Intents" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/global.css" />

    <script src="./success.js" defer></script>
  </head>

  <body>
    <div class="sr-root">
      <div class="sr-main">
        <header class="sr-header">
          <div class="sr-header__logo"></div>
        </header>
        <div class="sr-payment-summary completed-view">
            <h1>Your payment succeeded</h1>
            <h4>
              View CheckoutSession response:</a>
            </h4>
          </div>
          <div class="sr-section completed-view">
            <div class="sr-callout">
            </div>
            <button onclick="window.location.href = '/';">Restart demo</button>
            <form id="manage-billing-form">
              <button>Manage Billing</button>
            </form>
            
          </div>
        </div>
        <div class="sr-content">
       
      </div>

        <form action="../controllers/user_subscription_controller.php" id="formulario" method="post">
          <input type="text" id="stripeSub" name="subs">
          <input type="text" id="payment-status" name="payment_status">
          <input type="submit" value="Enviar" id="btn-sub">
        </form>

    </div>
  </body>
</html>