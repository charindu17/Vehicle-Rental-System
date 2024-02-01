<!DOCTYPE html>
<!-- <?php include("ContactUs.php"); ?> -->
<html>
  <head>
    <title>Contact Us</title>
    <style>
      /* CSS styles for the contact us page */
      body {
        font-family: Arial, sans-serif;
        background-color: blanchedalmond;
      }
      .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h2 {
        text-align: center;
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type="text"],
      input[type="email"],
      textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }
      textarea {
        height: 150px;
      }
      input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #08b9c9;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #1bbad2;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Contact Us</h2>
      <p>Please fill this form in a decent manner</p>
      <!-- <form action="ContactUs.php" method="POST"> -->
        <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit" />
      </form>
    </div>
    <!-- <script src="ContactUs.js"></script> -->
  </body>
</html>
