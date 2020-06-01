<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Serrano">

    <title>AITH TEMPLATE</title>
    <!-- reset.css and helper.css are a set of common standard stylesheets that assist with reponsive design. Each stylesheet has additional notes that can be reviewed. -->
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
    <!-- This is our stylesheet -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
      <?php include '../includes/header.inc.html.php' ?>
    <main>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="reservations">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="tour">*Tour:</label>
        <select size="1" name="tour" id="tour">
          <option>Choose Your Tour</option>
          <option value="downtown">Downtown - $50</option>
          <option value="growth">Growth - $80</option>
          <option value="landmarks">Landmarks - $70</option>
        </select>
        <label for="myfname">*First Name:</label>
          <input type="text" name="myfname" id="myfname" required>
        <label for="mylname">*Last Name:</label>
          <input type="text" name="mylname" id="mylname" required>
        <label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required>
        <label for="myphone">Phone:</label>
          <input type="tel" name="myphone" id="myphone">
        <label for="mydate">*Tour Date:</label>
          <input type="date" name="mydate" id="mydate" required>
        <label for="mygroup">*Total Participants</label>
          <input type="number" name="mygroup" id="mygroup" min="1" max="8" required>
        <label for="mycomments">*Do you have any food or drink sensitivities?</label>
          <textarea name="mycomments" id="mycomments" rows="2" cols="20" required></textarea>
          <input id="mysubmit" type="submit" value="Submit">
      </form>
      </div>
    </main>
    <?php include '../includes/footer.inc.html.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/hamburgerNav.js"></script>>
</body>
</html>