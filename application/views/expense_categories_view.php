<h2>Expense Categories</h2>
<ul>
    <?php foreach ($categories as $category) : ?>
        <li><?php echo $category['category_name']; ?>
            <a href="<?php echo site_url('expense/edit_category/' . $category['id']); ?>">Edit</a>
            <a href="<?php echo site_url('expense/delete_category/' . $category['id']); ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>

<h3>Add New Category</h3>
<form method="post" action="<?php echo site_url('expense/add_category'); ?>">
    <input type="text" name="category_name" placeholder="Category Name" required>
    <button type="submit">Add Category</button>
</form>