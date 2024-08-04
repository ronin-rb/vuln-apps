<?php
if (!isset($_GET['id']))
{
  http_response_code(400);
  echo "Please provide an 'id' query param.";
  exit;
}

$db = new SQLite3('database.db');

$query  = "SELECT * FROM todo_items WHERE id = " . $_GET['id'] . " LIMIT 1";
$result = $db->query($query);
?>
<html>
  <head>
    <title>Vuln Apps / SQL injection (SQLi) / PHP / SQLi with LIMIT 1</title>
  </head>
  <body>
    <h1>ToDo List Items</h1>
    <table>
      <tr>
        <th>name</th>
        <th>category</th>
        <th>created_at</th>
      </tr>
<?php
  while ($row = $result->fetchArray(SQLITE3_ASSOC))
  {
    echo "  <tr>";
    echo "    <td>" . htmlspecialchars($row['name']) . "</td>";
    echo "    <td>" . htmlspecialchars($row['category']) . "</td>";
    echo "    <td>" . htmlspecialchars($row['created_at']) . "</td>";
    echo "  </tr>";
  }
?>
    </table>
  </body>
</html>
