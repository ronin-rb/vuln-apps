<?php
?>
<html>
  <head>
    <title>Vuln Apps / SQL injection (SQLi) / PHP / SQLi in LIKE</title>
  </head>
  <body>
    <h1>ToDo List Search</h1>

    <form method="GET">
<?php
if (isset($_GET['q']))
{
  echo '<input type="text" name="q" value="' . htmlspecialchars($_GET['q']) . '" placeholder="Search" />';
}
else
{
  echo '<input type="text" name="q" placeholder="Search" />';
}
?>
    </form>

    <table>
      <tr>
        <th>name</th>
        <th>category</th>
        <th>created_at</th>
      </tr>
<?php
$db = new SQLite3('database.db');

if (isset($_GET['q']))
{
  $query = "SELECT * FROM todo_items WHERE name LIKE '%" . $_GET['q'] . "%'";
}
else
{
  $query = "SELECT * FROM todo_items";
}

$result = $db->query($query);

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
