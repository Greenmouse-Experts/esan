const paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {

  e.preventDefault();

  let handler = PaystackPop.setup({

    key: 'pk_live_9479bc27b002e8c83e7cf9247497644a464c7558',

    email: document.getElementById("email").value,

    amount: document.getElementById("amount").value * 100,

    firstname: document.getElementById("fullname").value,

    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

    // label: "Optional string that replaces customer email"

    onClose: function(){

      alert('Window closed.');

    },

    callback: function(response){

      let message = 'Payment complete! Reference: ' + response.reference;

      alert(message);
      window.location = "../process/processpay.php?pref="+ response.reference;

    }

  });

  handler.openIframe();

}