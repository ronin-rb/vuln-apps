<%@ taglib prefix = "c" uri = "http://java.sun.com/jsp/jstl/core" %>
<!doctype html>
<html>
  <head>
    <title>Vuln Apps / Remote File Inclusion (RFI) / JSP</title>
  </head>

  <body>
    <c:include page="<%= (String)request.getParmeter(“param”) %>”>
  </body>
</html>
