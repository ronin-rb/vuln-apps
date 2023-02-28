<html>
  <head>
    <title>Vuln Apps / Local File Inclusion (LFI) / PHP / inclusion with file extension appended</title>
  </head>

  <body>
    <h1>Inclusion With File Extension Appended</h1>

    <p>Includes a file via the <kbd>template=</kbd> query parameter from the <kbd>templates/</kbd> directory with the <kbd>.html</kbd> extesnion appended to the file name:</p>

    <?php include($_GET['template'] . ".html"); ?>
  </body>
</html>
