<h2>Menu Withdraw</h2>
    <?php echo isset($error_message) ? $error_message : ''; ?>
    <form method="post" action="<?php echo site_url('withdraw/do_withdraw'); ?>">
        <label>Jumlah Withdraw:</label>
        <input type="number" name="amount" required><br><br>
        <input type="submit" value="Withdraw">
    </form>