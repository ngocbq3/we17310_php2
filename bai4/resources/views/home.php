<h1>HOME PAGE</h1>

<?php foreach ($products as $product) : ?>
    <h3><?= $product->name ?></h3>
    <p><?= $product->detail ?></p>
<?php endforeach ?>