<?php
$db = new SQLite3('database.db');

$db->exec('CREATE TABLE IF NOT EXISTS todo_items (id INTEGER PRIMARY KEY, title VARCHAR(256) NOT NULL, category VARCHAR(10) NOT NULL, created_at DATETIME(6) NOT NULL)');

$db->exec("INSERT INTO todo_items (title, category, created_at) VALUES ('Wash dishes', 'cleaning', DATETIME())");
$db->exec("INSERT INTO todo_items (title, category, created_at) VALUES ('Clean bathroom', 'cleaning', DATETIME())");
$db->exec("INSERT INTO todo_items (title, category, created_at) VALUES ('Do laundry', 'chore', DATETIME())");
$db->exec("INSERT INTO todo_items (title, category, created_at) VALUES ('Groceries', 'errand', DATETIME())");
?>
