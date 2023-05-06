<html>
  <head>
    <title>Vuln Apps / Command Injection / PHP / Blind Command Injection</title>
  </head>

  <body>
    <h1>Blind Command Injection</h1>

    <p>Executes an <kbd>echo</kbd> with the <kbd>message=</kbd> query parameter, but with no output:</p>

    <?php shell_exec("echo " . $_GET['message']); ?>
  </body>
</html>
