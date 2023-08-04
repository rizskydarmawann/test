
<!-- /Page Header -->
<h2>Menu Deposit</h2>
<?php echo isset($error_message) ? $error_message : ''; ?>
    <form method="post" action="<?php echo site_url('deposits/do_deposit'); ?>">
        <label>Jumlah Deposit:</label>
        <input type="number" name="amount" required><br><br>
        <input type="submit" value="Deposit">
    </form>