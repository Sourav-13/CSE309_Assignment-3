<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsive Contact Us Form</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .btn-grad {
      background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
      margin: 10px;
      padding: 15px 45px;
      text-align: center;
      text-transform: uppercase;
      transition: 0.5s;
      background-size: 200% auto;
      color: white;
      /* box-shadow: 0 0 20px #eee; */
      border-radius: 10px;
      display: block;
    }

    .btn-grad:hover {
      background-position: right center;
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="title">Contact Us</div>
    <div class="content">
      <form method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phoneNumber" required>
          </div>
          <div class="input-box">
            <span class="details">Message</span>
            <input type="text" placeholder="Enter your message" name="message" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit">
        </div>
      </form>
    </div>
  </div><br>
  <a href="view_details.php" class="btn-grad">View ALl Messages</a>

  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];
    $message = $_POST['message'];
    $formQuery = "INSERT INTO contact_t (Name, Email, 
    PhoneNumber, Message) VALUES 
    ('$name', '$email', '$phone', '$message')";
    $formTable = mysqli_query($conn, $formQuery);
  }
  ?>
</body>

</html>