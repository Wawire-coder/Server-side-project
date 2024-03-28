
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Our Company Name</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 1200px;
      margin: 50px auto;
      padding: 0 20px;
      text-align: center;
    }
    h1 {
      color: #333;
      margin-bottom: 20px;
    }
    .contact-info {
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .contact-info h2 {
      color: #ff6f61;
      margin-bottom: 20px;
    }
    .contact-info p {
      color: #666;
      font-size: 18px;
      line-height: 1.6;
    }
    .contact-form {
      margin-top: 40px;
    }
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    .contact-form button {
      background-color: #ff6f61;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .contact-form button:hover {
      background-color: #e05a4e;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Contact Us</h1>

  <div class="contact-info">
    <h2>Our Contact Information</h2>
    <p>If you have any questions or concerns, feel free to reach out to us using the contact information below:</p>
    <p>Email: afumastores@gmail.com</p>
    <p>Phone: +254702925785</p>
    <p>Address: 123 Main Street, City, Kakamega</p>
  </div>

  <div class="contact-form">
    <h2>Send Us a Message</h2>
    <form action="#" method="post">
      <input type="text" name="name" placeholder="Your Name" required><br>
      <input type="email" name="email" placeholder="Your Email" required><br>
      <textarea name="message" placeholder="Your Message" rows="5" required></textarea><br>
      <button type="submit">Send Message</button>
    </form>
  </div>
</div>

</body>
</html>