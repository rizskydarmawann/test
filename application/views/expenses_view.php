<h2>Expenses</h2>
    <?php foreach ($expenses as $expense): ?>
        <p>
            Amount: <?php echo $expense['amount']; ?><br>
            Date: <?php echo $expense['date']; ?><br>
            Description: <?php echo $expense['description']; ?><br>
            Category: <?php echo $expense['category_name']; ?>
        </p>
    <?php endforeach; ?>