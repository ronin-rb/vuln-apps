<html>
  <head>
    <title>Vuln Apps / Local File Inclusion (LFI) / PHP / absolute path inclusion</title>
  </head>

  <body>
    <h1>Absolute Path Inclusion</h1>

    <p>Includes an absolute path via the <kbd>template=</kbd> query parameter:</p>

    <?php include(dirname(__FILE__) . DIRECTORY_SEPARATOR . $_GET['template']); ?>
  </body>
</html>
