<html>
  <head>
    <title>Vuln Apps / Remote File Inclusion (RFI) / PHP / basic RFI</title>
  </head>

  <body>
    <h1>Basic Remote File Inclusion (RFI)</h1>

    <p>Includes a relative path or URI:</p>

    <?php include($_GET['template']); ?>
  </body>
</html>
