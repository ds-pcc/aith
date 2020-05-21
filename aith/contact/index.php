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
    $name = $_POST['name'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $question = $_POST['question'];

// Try/catch to attempt to insert data in the database
      try{
      $sql = 'INSERT INTO contact SET
          Name = :Name,
          Role = :Role,
          Email = :Email,
          Question = :Question';  
          $s = $pdo->prepare($sql);
          $s->bindValue(':Name', $name);
          $s->bindValue(':Role', $role);
          $s->bindValue(':Email', $email);
          $s->bindValue(':Question', $question);
          $s->execute();
        }
    catch (PDOException $e)
    {
      $error = 'Error adding to database: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
  }
if (isset($_POST['name']) && $_POST['honeypot'] == '') {
    date_default_timezone_set('Etc/UTC');
    $myName = $_POST['name'];
    $myEmail = $_POST['email'];
    $myQuestion = $_POST['question'];

    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.danielserrano.webhostingforstudents.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'phpmailer@danielserrano.webhostingforstudents.com';
    $mail->Password = 'mailpassword';

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('danielserrano.webhostingforstudents.com', 'Daniel Serrano');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('daniel.serrano@pcc.edu', 'Daniel Serrano');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($myEmail, $myName)) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(true);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: $myEmail <br>
Name: $myName <br>
Role Selected: $role <br>
Question: $myQuestion <br>
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            echo "Mailer error" . $mail->ErrorInfo;
        } else {
            include 'success.html.php';
        }
    }
}else {
    include 'contact.html.php';
}
