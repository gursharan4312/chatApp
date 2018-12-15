<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Assignment 9</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h2 id="username"></h2>
  <button type="button" name="button" id="logoutBtn" onclick="logout()">Logout</button>
    <form id="chatRoom">
        <label for="username">Enter username:</label>
        <input type="text" name="username" id="user" required><br><br>
        <textarea name="message" rows="8" cols="80"></textarea><br>
        <input type="submit" name="submit" value="send"></input>
    </form>
    <div class="messages">
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
