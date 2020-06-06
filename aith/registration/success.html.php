<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Serrano">

    <title>Register Success</title>
    <?php include '../includes/style-sheets.inc.html.php' ?>
</head>

<body>
    <?php include '../includes/header.inc.html.php' ?>

    <main>

        <section class="thanks">
            <a href="../template/" class="return">RETURN TO MAIN PAGE</a>
            <br>
            <br>
            <br>
            <p class="return">
                <a href="../template/">RETURN TO MAIN PAGE</a>
            </p>
            <p>
                Thank you for registering!
            <p>
                Remember to bring a change of clothing so you can enjoy the post-event festivities.
            </p>
            <p>
                Your registration has been recorded with the following information.
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
                <br>
                <br> Saturday Event:
                <?php echo htmlspecialchars($saturdayEvent, ENT_QUOTES, 'UTF-8') ?>
                <br>
                <br> Sunday Role:
                <?php echo htmlspecialchars($sundayRole, ENT_QUOTES, 'UTF-8') ?>
                <br>
                <br> Sunday Event:
                <?php echo htmlspecialchars($sundayEvent, ENT_QUOTES, 'UTF-8') ?>
            </p>
            <br>
            <br>
            <br>
            <p class="return">
                <a href="../template/">RETURN TO MAIN PAGE</a>
            </p>
        </section>

    </main>

    <?php include '../includes/footer.inc.html.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/hamburgerNav.js"></script>
</body>

</html>