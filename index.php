<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <style> 
        body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

.container {
  width: 300px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.title {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.input-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"], input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.login-btn {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.login-btn:hover {
  background-color: #3e8e41;
}

 /* Add video background styles */
 .containerrer{
      position: relative;
    }
    .video-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 200%;
      object-fit: cover;
      z-index: -1;
    }
  </style>
</head>
<body>
<div class="containerrer">
    <video class="video-background" autoplay loop muted>
      <source src="background.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  <div class="container">
    <form action="log.php?op=in" method="post">
      <h2 class="title">SILAKAN LOGIN</h2>
      <div class="input-group">
        <label for="userid">User ID :</label>
        <input type="text" id="userid" name="userid" required>
      </div>
      <div class="input-group">
        <label for="psw">Password :</label>
        <input type="password" id="psw" name="psw" required>
      </div>
      <button type="submit" class="login-btn">Login</button>
    </form>
  </div>

  <script src="script.js"></script>
  <script>
    // Add animation to the login button on hover
document.querySelector('.login-btn').addEventListener('mouseover', function() {
  this.classList.add('animate');
});

document.querySelector('.login-btn').addEventListener('mouseout', function() {
  this.classList.remove('animate');
});
   </script>
</body>
</html>