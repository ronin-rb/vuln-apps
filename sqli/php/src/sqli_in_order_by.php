<?php
if (!isset($_GET['col']) || !isset($_GET['dir']))
{
  http_response_code(400);
  echo "Please provide a 'col' and 'dir' query params.";
  exit;
}

$db = new SQLite3('database.db');

$query  = "SELECT * FROM todo_items ORDER BY " . $_GET['col'] . ' ' . $_GET['dir'];
$result = $db->query($query);
?>
<html>
  <head>
    <title>Vuln Apps / SQL injection (LFI) / PHP / SQLi in ORDER BY</title>
  </head>
  <body>
    <h1>ToDo List Items</h1>
    <table>
      <tr>
        <th>title</th>
        <th>category</th>
        <th>created_at</th>
      </tr>
<?php
  while ($row = $result->fetchArray(SQLITE3_ASSOC))
  {
    echo "  <tr>";
    echo "    <td>" . htmlspecialchars($row['title']) . "</td>";
    echo "    <td>" . htmlspecialchars($row['category']) . "</td>";
    echo "    <td>" . htmlspecialchars($row['created_at']) . "</td>";
    echo "  </tr>";
  }
?>
    </table>
  </body>
</html>
