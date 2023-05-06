<html>
  <head>
    <title>Vuln Apps / Command Injection / PHP / Command Injection Within Double Quotes</title>
  </head>

  <body>
    <h1>Command Injection Within Double Quotes</h1>

    <p>Executes an <kbd>echo</kbd> with the <kbd>message=</kbd> query parameter, but within double quotes:</p>

    <pre><<?php passthru("echo \"" . $_GET['message'] . "\""); ?></pre>
  </body>
</html>
