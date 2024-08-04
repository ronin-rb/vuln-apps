<?php
if (!isset($_GET['limit']))
{
  http_response_code(400);
  echo "Please provide an 'limit' query param.";
  exit;
}

$db = new SQLite3('database.db');

$query  = "SELECT * FROM todo_items LIMIT " . $_GET['limit'];
$result = $db->query($query);
?>
<html>
  <head>
    <title>Vuln Apps / SQL injection (SQLi) / PHP / SQLi in LIMIT</title>
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
