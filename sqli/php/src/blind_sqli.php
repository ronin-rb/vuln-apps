<?php
if (!isset($_GET['id']))
{
  http_response_code(400);
  echo "Please provide an 'id' query param.";
  exit;
}

$db = new SQLite3('database.db');
$db->createFunction('sleep', 'sleep');

$query  = "SELECT * FROM todo_items WHERE id = " . $_GET['id'];

$t1 = microtime(true);
$db->exec($query);
$t2 = microtime(true);
?>

<html>
  <head>
    <title>Vuln Apps / SQL injection (SQLi) / PHP / Basic SQLi</title>
  </head>
  <body>
    <h1>Blind SQL injection</h1>

    <p>Statement Execution Time = <?php echo($t2 - $t1); ?></p>
  </body>
</html>
