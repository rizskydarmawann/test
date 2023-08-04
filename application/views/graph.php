<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<h2>Grafik Saldo</h2>
<canvas  id="balanceChart"></canvas>

<script>
    // Ambil data dari PHP dan konversi menjadi variabel JavaScript
    var totalDeposit = <?php echo $transactions['total_deposit']; ?>;
    var totalWithdraw = <?php echo $transactions['total_withdraw']; ?>;
    var balanceChange = totalDeposit - totalWithdraw;

    // Inisialisasi data untuk grafik
    var data = {
        labels: ['Deposit', 'Withdraw', 'Balance Change'],
        datasets: [{
            label: 'Saldo',
            data: [totalDeposit, totalWithdraw, balanceChange],
            backgroundColor: ['blue', 'red', 'green']
        }]
    };

    // Konfigurasi opsi grafik
    var options = {
        responsive: true,
        maintainAspectRatio: false
    };

    // Buat grafik batang dengan Chart.js
    var balanceChart = new Chart(document.getElementById('balanceChart'), {
        type: 'bar',
        data: data,
        options: options
    });
</script>