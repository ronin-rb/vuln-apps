<html>
  <head>
    <title>Vuln Apps / Remote File Inclusion (RFI) / PHP / inclusion with appended suffix</title>
  </head>

  <body>
    <h1>Remote File Inclusion With Appended Suffix</h1>

    <p>Includes a relative path or URI with the <kbd>.html</kbd> extesnion appended to the file name:</p>

    <?php include($_GET['template'] . ".html"); ?>
  </body>
</html>
