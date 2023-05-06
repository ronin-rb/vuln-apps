<html>
  <head>
    <title>Vuln Apps / Command Injection / PHP / Basic Command Injection</title>
  </head>

  <body>
    <h1>Basic Command Injection</h1>

    <p>Executes an <kbd>echo</kbd> with the <kbd>message=</kbd> query parameter:</p>

    <pre><<?php passthru("echo " . $_GET['message']); ?></pre>
  </body>
</html>
