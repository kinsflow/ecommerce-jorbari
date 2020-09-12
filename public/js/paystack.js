const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack);

function payWithPaystack(e) {
    try {
        e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_test_xxxxxxxxxx', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: get_sum_of_selected_data() * 100,
            firstname: document.getElementById("first-name").value,
            lastname: document.getElementById("last-name").value,
            onClose: function () {
                alert('if payment wasn\'t successful, kindly try again.');
            },
            callback: function (response) {
                let message = 'Payment complete! Reference: ' + response.reference;
                alert(message);
            }
        });
        handler.openIframe();
    } catch (e) {
        $("#paystack-form-error").text(e)
        $("#paystack-form-error-div").show()
    }

}
