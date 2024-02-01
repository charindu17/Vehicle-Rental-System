<?php

session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $conn = new mysqli("localhost", "root", "", "project1", "3306");

 $sql = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')";
//  $result = mysqli_query($conn, $sql);

 if($conn->query($sql))
    {
        echo "<script>alert('Form Submitted')
        window.location.href='../Aravinda/home.php';</script>";
        // header("Location:home.php");
    }
    else
    {
        echo "<script>alert('Error in Insertion')</script>";
    }

    $conn->close();

//   // Send an email with the form data
//   $to = "car2go_admin.com"; 
//   $subject = "Contact Form Submission";
//   $message = "Name: $name\nEmail: $email\nMessage: $message";
//   $headers = "From: $email";
  // echo 'Your message has been sent.';

// } else{
//   echo
//   <form action="contact.php" method="POST">
//         <label for="name">Name:</label>
//         <input type="text" id="name" name="name" required />

//         <label for="email">Email:</label>
//         <input type="email" id="email" name="email" required />

//         <label for="message">Message:</label>
//         <textarea id="message" name="message" required></textarea>

//         <input type="submit" value="Submit" />
//       </form>
//       ;
}
?>