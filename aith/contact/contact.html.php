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
        <section id="contact">
            <form method="post" action=" ">
                <fieldset>
                    <legend>Contact Us</legend>
                    <input type="text" name="honeypot" id="honeypot" value="">
                    <label for="name">*Name:</label>
                    <input type="text" name="name" id="name" required>
                    <label for="role">*Participation Role:</label>
                    <select size="1" name="role" id="role">
                        <option>Select a Role</option>
                        <option value="Interested Party">Interested Party</option>
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                    </select>
                    <label for="email">*Email:</label>
                    <input type="email" name="email" id="email" required>
                    <label for="question">Question(s):</label>
                    <textarea name="question" id="question" rows="2" cols="10" required></textarea>
                </fieldset>
                <input id="mysubmit" type="submit" value="Submit">
            </form>
        </section>
    </main>

    <?php include '../includes/footer.inc.html.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/hamburgerNav.js"></script>
</body>

</html>