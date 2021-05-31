var cancelSubscription = (pubKey) => {
    return fetch("/Online_tienda/payment/cancel_subscription.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            pubKey: pubKey
        })
    }).then((result) => {
        console.log(result)
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


fetch("/Online_tienda/payment/config.php")
    .then((result) => {
        return result.json();
    })
    .then(function(json) {
        var publishableKey = json.publishableKey;
        // Creamos un evento para cancelar la subscripcion de Stripe
        document
            .getElementById("cancel-plan-btn")
            .addEventListener("click", (evt) => {
                cancelSubscription(publishableKey).then((data) => {
                    // La respuesta que obtenemos es el status de la subscripcion
                    document.getElementById("subscription-status").value = 'inactivo';
                    document.getElementById('sub-status-msg').innerHTML = 'inactivo';
                    console.log(data.subscriptionStatus)
                    return data.subscriptionStatus
                }).then(handleResult);
            });
});


/*
const editField = (event) => {
    let btnEdit = document.getElementsByClassName('edit-btn')[0];

    if (btnEdit.innerHTML === 'Editar') {
        console.log(event)
        let span = document.getElementsByClassName('usr-data')[0];
        span.outerHTML.replace(span, 'input')

        btnEdit.innerHTML = 'Guardar';
    } else {
        btnEdit.innerHTML = 'Editar';
    }

}*/