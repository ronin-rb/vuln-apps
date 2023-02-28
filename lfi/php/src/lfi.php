<html>
  <head>
    <title>Vuln Apps / Local File Inclusion (LFI) / PHP / simple local file inclusion</title>
  </head>

  <body>
    <h1>Simple Local File Inclusion (LFI)</h1>

    <p>Includes a local file via the <kbd>template=</kbd> query parameter:</p>

    <?php include($_GET['template']); ?>
  </body>
</html>
