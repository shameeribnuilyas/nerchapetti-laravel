var button = document.querySelector("#google-pay-button");
var paymentsClient = new google.payments.api.PaymentsClient({
  environment: "TEST", // Or 'PRODUCTION'
});

braintree.client.create(
  {
    authorization: "sandbox_tj235dtb_55fq56mnmqf6wz2x",
  },
  function (clientErr, clientInstance) {
    if (clientErr) {
      console.log(clientErr);
    } else {
      braintree.googlePayment.create(
        {
          client: clientInstance,
        },
        function (googlePaymentErr, googlePayInstance) {
          if (googlePaymentErr) {
            console.log(googlePaymentErr);
          } else if (googlePayInstance) {
            console.log(googlePayInstance);
          }
          paymentsClient
            .isReadyToPay({
              allowedPaymentMethods: googlePayInstance.createPaymentDataRequest()
                .allowedPaymentMethods,
            })
            .then(function (response) {
              console.log(response);
              if (response.result) {
                button.addEventListener("click", function (event) {
                  event.preventDefault();

                  var paymentDataRequest = googlePayInstance.createPaymentDataRequest(
                    {
                      //merchantId: 'your-merchant-id-from-google', // required in production
                      transactionInfo: {
                        currencyCode: "USD",
                        totalPriceStatus: "FINAL",
                        totalPrice: "100.00", // Your amount, don't collect this from the client EVER
                      },
                    }
                  );

                  paymentsClient
                    .loadPaymentData(paymentDataRequest)
                    .then(function (paymentData) {
                      return googlePayInstance.parseResponse(paymentData);
                    })
                    .then(function (result) {
                      console.log(result);
                      // SEND THE NONCE TO YOUR SERVER
                    })
                    .catch(function (err) {
                      console.log(err);
                    });
                });
              }
            })
            .catch(function (err) {
              console.log(err);
            });
        }
      );
    }
    // Set up other Braintree components
  }
);