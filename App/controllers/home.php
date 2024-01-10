<?php

$config = require basePath('config/db.php');
$db = new Database($config);

$listings = $dbquery('SELECT * FROM listings LIMIT 6')->fetchAll();
loadView('home', [
    'listings' => $listings,
]);
