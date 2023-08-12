<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="login.css">
</head>
<body style="background-image: url('back.jpg');">
  <form id="loginForm" onsubmit="submitForm(event)">
    <label for="username">Username:</label>
    <input type="text" id="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" required>

    <button type="submit">Login</button>
  </form>

  <script src="script.js"></script>
</body>
</html>