
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Our Company Name</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }
    .register-form input {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    .register-form button {
      background-color: #ff6f61;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }
    .register-form button:hover {
      background-color: #e05a4e;
    }
    .register-form p {
      margin-top: 20px;
      text-align: center;
    }
    .register-form p a {
      color: #ff6f61;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Register</h1>

  <form class="register-form" action="#" method="post">
    <input type="text" name="fullname" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
    <button type="submit">Register</button>
  </form>

  <p>Already have an account? <a href="login.html">Login here</a>.</p>
</div>

</body>
</html>
