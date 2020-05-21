<?php

// Try/catch statement to connect to database
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=danielse_aith_db', 'danielse_aith_user', 'AITHforthewin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

// Process form if name is set and honeypot has not been filled
if (isset($_POST['name']) && $_POST['honeypot'] == '' )
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $saturdayRole = $_POST['saturdayrole'];
    $saturdayEvent = $_POST['saturdayevent'];
    $sundayRole = $_POST['sundayrole'];
    $sundayEvent = $_POST['sundayevent'];
    $name = $_POST['name'];
    $age = $_POST['age'] ;
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $emergencyContactName = $_POST['emergencycontact'];
    $emergencyContactPhone = $_POST['phone'];
    $accommodations = $_POST['accommodations'];

// Try/catch to attempt to insert data in the database
      try{
      $sql = 'INSERT INTO registration SET
          Name = :Name,
          Age = :Age,
          Gender = :Gender,
          Email = :Email,
          EmergencyName = :EmergencyName,
          EmergencyNum = :EmergencyNum,
          Accommodations = :Accommodations,
          SatRole = :SatRole,
          SatEvent = :SatEvent,
          SunRole = :SunRole,
          SunEvent = :SunEvent';  
          $s = $pdo->prepare($sql);
          $s->bindValue(':Name', $name);
          $s->bindValue(':Age', $age);
          $s->bindValue(':Gender', $gender);
          $s->bindValue(':Email', $email);
          $s->bindValue(':EmergencyName', $emergencyContactName);
          $s->bindValue(':EmergencyNum', $emergencyContactPhone);
          $s->bindValue(':Accommodations', $accommodations);
          $s->bindValue(':SatRole', $saturdayRole);
          $s->bindValue(':SatEvent', $saturdayEvent);
          $s->bindValue(':SunRole', $sundayRole);
          $s->bindValue(':SunEvent', $sundayEvent);
          $s->execute();
        }
    catch (PDOException $e)
    {
      $error = 'Error adding to database: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
     //load the thank you page after if INSERT is succesful
    include 'success.html.php';
  } else {
    include 'registration.html.php';
  }