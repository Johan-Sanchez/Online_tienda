const urlParams = new URLSearchParams(window.location.search)
const sessionId = urlParams.get("session_id")

  if (sessionId) {
    // Retrieve a copy of the Checkout session to inspect the data
    fetch("/Online_tienda/payment/get-checkout-session.php?sessionId=" + sessionId)
        .then(function(result){
          return result.json()
        })
        .then(function(session){
          document.getElementById("stripeSub").value = session.subscription;
          document.getElementById("payment-status").value = session.payment_status;
        })
        .catch(function(err){
          console.log('Error when fetching Checkout session', err);
        });

  }
