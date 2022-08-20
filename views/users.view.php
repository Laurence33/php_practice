<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<h1>Users</h1>
<ol>

    <?php foreach ($users as $user) : ?>
        <li><?= $user->name ?></li>
    <?php endforeach; ?>
</ol>
<hr>
<h2>Create a user:</h2>
<form action="users" method="post">
    <label for="name"></label>
    <input type="text" name="name" id="name" placeholder="Enter name">

    <button type="submit">Submit</button>
</form>
<?php require 'partials/foot.php'; ?>