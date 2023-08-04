<h2>Menu Transfer</h2>
    <?php echo isset($error_message) ? $error_message : ''; ?>
    <form method="post" action="<?php echo site_url('transfer/do_transfer'); ?>">
        <label>ID Penerima:</label>
        <input type="text" name="receiver_id" required><br><br>
        <label>Jumlah Transfer:</label>
        <input type="number" name="amount" required><br><br>
        <input type="submit" value="Transfer">
    </form>