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

        <section class="thanks">
            <a href="../template/" class="return">RETURN TO MAIN PAGE</a>
            <br><br><br>
            <p>
                Thank you for contacting us!
                <br> Your registration has been recorded with the following information.
            </p>
            <br>
            <br>
            <br>
            <p>
                Participant registered:
                <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
                <br>
                <br> Age:
                <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>
                <br>
                <br> Gender:
                <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') ?>
                <br>
                <br> Participant email:
                <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>
                <br>
                <br> Emergency Contact Name:
                <?php echo htmlspecialchars($emergencyContactName, ENT_QUOTES, 'UTF-8') ?>
                <br>
                <br> Emergency Contact Number:
                <?php echo htmlspecialchars($emergencyContactPhone, ENT_QUOTES, 'UTF-8') ?>
                <br>
                <br> Accomodations:
                <?php echo htmlspecialchars($accommodations, ENT_QUOTES, 'UTF-8') ?>
                <br>
                <br> Saturday Role:
                <?php echo htmlspecialchars($saturdayRole, ENT_QUOTES, 'UTF-8') ?>
                <br><br> Saturday Event:
                <?php echo htmlspecialchars($saturdayEvent, ENT_QUOTES, 'UTF-8') ?>
                <br><br> Sunday Role:
                <?php echo htmlspecialchars($sundayRole, ENT_QUOTES, 'UTF-8') ?>
                <br><br> Sunday Event:
                <?php echo htmlspecialchars($sundayEvent, ENT_QUOTES, 'UTF-8') ?>
            </p>
            <br><br><br>
            <a href="../template/" class="return">RETURN TO MAIN PAGE</a>
        </section>

    </main>

    <?php include '../includes/footer.inc.html.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/hamburgerNav.js"></script>
</body>

</html>