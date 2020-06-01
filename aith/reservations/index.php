<?php

// Try/catch statement to connect to database
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=aith_db', 'aith_user', 'AITHforthewin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
//if (isset($_POST['myfname']) && $_POST['honeypot'] == '' )
//  {
//    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
//    $tour = $_POST['tour'];
//    $fname = $_POST['myfname'];
//    $lname = $_POST['mylname'];
//    $email = $_POST['myemail'];
//    $phone = $_POST['myphone'];
//    $date = $_POST['mydate'];
//    $group = $_POST['mygroup'];
//    $comments = $_POST['mycomments'];
//
//    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
//      try{
//      $sql = 'INSERT INTO reservations SET
//          tour = :tour,
//          fname = :fname,
//          lname = :lname,
//          email = :email,
//          phone = :phone,
//          date = :date,
//          participants = :participants,
//          allergies = :allergies';
//      $s = $pdo->prepare($sql);
//      $s->bindValue(':tour', $tour);
//      $s->bindValue(':fname', $fname);
//      $s->bindValue(':lname', $lname);
//      $s->bindValue(':email', $email);
//      $s->bindValue(':phone', $phone);
//      $s->bindValue(':date', $date);
//      $s->bindValue(':participants', $group);
//      $s->bindValue(':allergies', $comments);
//      $s->execute();
//    }
//    catch (PDOException $e)
//    {
//      $error = 'Error adding submitted joke: ' . $e->getMessage();
//      include '../includes/error.html.php';
//      exit();
//    }
//    // load the thank you page after the INSERT runs
//    include 'success.html.php';
//    // Add an else to load the initial page if the initial (line 19) if statement is false
//
//  } else {
    include 'registration.html.php';
//}

 //Modify this to include the initial file for this folder
