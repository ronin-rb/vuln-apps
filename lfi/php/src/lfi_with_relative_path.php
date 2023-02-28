<html>
  <head>
    <title>Vuln Apps / Local File Inclusion (LFI) / PHP / relative path inclusion</title>
  </head>

  <body>
    <h1>Relative Path Inclusion</h1>

    <p>Includes a relative path via the <kbd>template=</kbd> query parameter:</p>

    <?php include("./" . $_GET['template']); ?>
  </body>
</html>
