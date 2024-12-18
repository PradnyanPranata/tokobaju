document.addEventListener('DOMContentLoaded', function () {
    const paymentMethodSelect = document.getElementById('payment_method');
    const transferProofContainer = document.getElementById('transfer-proof-container');
    
    // Tampilkan atau sembunyikan input bukti transfer berdasarkan metode pembayaran
    paymentMethodSelect.addEventListener('change', function () {
        if (paymentMethodSelect.value === 'transfer') {
            transferProofContainer.style.display = 'block';
        } else {
            transferProofContainer.style.display = 'none';
        }
    });
});
