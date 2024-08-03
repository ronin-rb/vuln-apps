<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $db = new SQLite3('database.db');

  if (!isset($_POST['title']) || !isset($_POST['category']))
  {
    http_response_code(400);
    echo "Please provide 'title' and 'category' form params.";
    exit;
  }

  $query = "INSERT INTO todo_items (title, category, created_at) VALUES ('" . $_POST['title'] . "', '" . $_POST['category'] . "', DATETIME())";

  $added = $db->exec($query);
}
?>
<html>
  <head>
    <title>Vuln Apps / SQL injection (SQLi) / SQLi in INSERT</title>
  </head>
  <body>
    <h1>Add new ToDo List entry</h1>

    <form method="POST">
      <p>
        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="Item name here..."/>
      </p>

      <p>
        <label for="category">Category:</label>
        <select name="category">
         <option value="chore">Chore</option>
         <option value="cleaning">Cleaning</option>
         <option value="errand">Errand</option>
        </select>
      </p>

      <p>
        <input type="submit" value="Add" />
      </p>
    </form>
<?php
if (isset($added))
{
  if ($added)
  {
    echo "<p><strong>Entry successfully added!</strong></p>";
  }
  else
  {
    echo "<p><strong>Failed to add entry!</strong></p>";
  }
}
?>
  </body>
</html>
