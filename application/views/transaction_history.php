<h2>Histori Transaksi</h2>
<table class="table">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Jenis Transaksi</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transactions as $transaction) : ?>
            <tr>
                <td><?php echo $transaction['date']; ?></td>
                <td><?php echo $transaction['type'] === 'deposit' ? 'Deposit' : 'Withdraw'; ?></td>
                <td><?php echo $transaction['amount']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>