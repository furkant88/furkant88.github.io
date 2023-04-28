<?php

define("DBFILE", "db.sqlite3");
try {
    $pdo = new PDO('sqlite:' . DBFILE, 'unused', 'unused');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo print_r($e->getMessage(), true);
}