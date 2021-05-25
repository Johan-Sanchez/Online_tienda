// Creamos una sesion con el ID del plan seleccionado 
var createCheckoutSession = function(priceId) {
    return fetch("create-checkout-session.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        priceId: priceId
      })
    }).then(function(result) {
      return result.json();
    });
  };
  
  // Atrapamos cualquier error retornado por el Checkout
  var handleResult = function(result) {
    if (result.error) {
      var displayError = document.getElementById("error-message");
      displayError.textContent = result.error.message;
    }
  };
  
  /* Obtenemos nuestra publishable key de Stripe para inicializar Stripe.js */
  fetch("config.php")
    .then(function(result) {
      return result.json();
    })
    .then(function(json) {
      var publishableKey = json.publishableKey;
      var basicPriceId = json.basicPrice;
      var proPriceId = json.proPrice;
  
      var stripe = Stripe(publishableKey);
      // Preparamos un controlador de eventos para crear una Session Checkout  cuando se le de click al boton
      document
        .getElementById("basic-plan-btn")
        .addEventListener("click", function(evt) {
          createCheckoutSession(basicPriceId).then(function(data) {
            // Llamamos al metodo Stripe.js para redireccionar a la nueva pagina Checkout
            stripe
              .redirectToCheckout({
                sessionId: data.sessionId,
              })
              .then(handleResult);
          });
        });
  
      // Preparamos un controlador de eventos para crear una Session Checkout  cuando se le de click al boton
      document
        .getElementById("pro-plan-btn")
        .addEventListener("click", function(evt) {
          createCheckoutSession(proPriceId).then(function(data) {
            // Llamamos al metodo Stripe.js para redireccionar a la nueva pagina Checkout
            stripe
              .redirectToCheckout({
                sessionId: data.sessionId,
                  stripeData: data,
              })
              .then(handleResult);
          });
        });
    });