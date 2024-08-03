<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
  if (!isset($_GET['id']))
  {
    http_response_code(400);
    echo "Please provide an 'id' query params.";
    exit;
  }

  $db = new SQLite3('database.db');
  $query = "SELECT id, name, category FROM todo_items WHERE id = :id LIMIT 1";
  $stmt  = $db->prepare($query);
  $stmt->bindValue(':id', $_GET['id'], SQLITE3_INTEGER);
  $result = $stmt->execute();

  $row = $result->fetchArray(SQLITE3_ASSOC);

  if ($row == null)
  {
    http_response_code(404);
    echo "Unknown todo_items entry id: " . $_GET['id'];
    exit;
  }
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (!isset($_POST['id']) || !isset($_POST['name']) || !isset($_POST['category']))
  {
    http_response_code(400);
    echo "Please provide 'id', 'name', and 'category' form params.";
    exit;
  }

  $row = array(
    "id"=>$_POST['id'],
    "name"=>$_POST['name'],
    "category"=>$_POST['category']
  );

  $db = new SQLite3('database.db');

  $query = "UPDATE todo_items SET name='" . $row['name'] . "', category='" . $row['category'] . "', created_at=DATETIME() WHERE id = " . $row['id'];

  $updated = $db->exec($query);
}
else
{
  http_response_code(400);
  echo "Unsupported request method: " . $_SERVER['REQUEST_METHOD'];
  exit;
}
?>

<html>
  <head>
    <title></title>
  </head>
  <body>
    <h1>Update a ToDo List entry</h1>

    <form method="POST">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>"/>

      <p>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" placeholder="Item name here..."/>
      </p>

      <p>
        <label for="category">Category:</label>
        <select name="category">
          <option value="chore"<?php if ($row['category'] == 'chore') { echo ' selected'; } ?>>Chore</option>
          <option value="cleaning"<?php if ($row['category'] == 'cleaning') { echo ' selected'; } ?>>Cleaning</option>
          <option value="errand"<?php if ($row['category'] == 'errand') { echo ' selected'; } ?>>Errand</option>
        </select>
      </p>

      <p>
        <input type="submit" value="Update" />
      </p>
    </form>

<?php
if (isset($updated))
{
  if ($updated)
  {
    echo "<p><strong>Entry successfully updated!</strong></p>";
  }
  else
  {
    echo "<p><strong>Failed to update entry!</strong></p>";
  }
}
?>
  </body>
</html>
