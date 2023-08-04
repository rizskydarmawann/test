<h2>Daftar Pengeluaran Bulan</h2>
    <form method="get" action="<?php echo site_url('expense'); ?>">
        <label for="month">Pilih Bulan:</label>
        <select name="month" id="month">
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <option value="<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>" <?php echo $selected_month == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : ''; ?>><?php echo date('F', mktime(0, 0, 0, $i, 1)); ?></option>
            <?php endfor; ?>
        </select>
        <label for="year">Pilih Tahun:</label>
        <select name="year" id="year">
            <?php for ($i = date('Y'); $i >= date('Y') - 10; $i--): ?>
                <option value="<?php echo $i; ?>" <?php echo $selected_year == $i ? 'selected' : ''; ?>><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        <button type="submit">Tampilkan</button>
    </form>

    <h3>Daftar Pengeluaran Bulan <?php echo date('F Y', mktime(0, 0, 0, $selected_month, 1, $selected_year)); ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jumlah Pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expenses as $expenses): ?>
                <tr>
                    <td><?php echo $expenses['date']; ?></td>
                    <td><?php echo $expenses['amount']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
