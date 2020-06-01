<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Serrano">

    <title>Registration</title>
    <!-- reset.css and helper.css are a set of common standard stylesheets that assist with reponsive design. Each stylesheet has additional notes that can be reviewed. -->
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
    <!-- This is our stylesheet -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include '../includes/header.inc.html.php' ?>

    <main>
        <section id="registration">
            <form method="post" action=" ">
                <fieldset>
                    <legend>Participant</legend>
                    <input type="text" name="honeypot" id="honeypot" value="">
                    <label for="name">*Full Name:</label>
                    <input type="text" name="name" id="name" required>
                    <label for="age">*Age</label>
                    <input type="number" name="age" id="age" min="18" required>
                    <label for="gender">*Gender Indentity:</label>
                    <select size="1" name="gender" id="gender" required>
                        <option>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Non-binary/Other</option>
                    </select>
                    <label for="email">*Email:</label>
                    <input type="email" name="email" id="email" required>
                    <label for="accommodations">Special accommodations?<br> Let us know:</label>
                    <textarea name="accommodations" id="accommodations" rows="2" cols="20"></textarea>
                </fieldset>
                <fieldset>
                    <legend>Emergency Contact</legend>
                    <label for="emergencycontact">*Contact Name:</label>
                    <input type="text" name="emergencycontact" id="emergencycontact" required>
                    <label for="phone">*Contact Phone:</label>
                    <input type="tel" name="phone" id="phone" pattern="^[0-9-+\s()]*$" required>
                </fieldset>
                <fieldset>
                    <legend>Event Participation</legend>
                    <label for="saturdayrole">*Saturday Participation Role:</label>
                    <select size="1" name="saturdayrole" id="saturdayrole" required>
                        <option>Select Your Role</option>
                        <option value="none">None</option>
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                    </select>
                    <label for="saturdayevent">*Saturday Events:</label>
                    <select size="1" name="saturdayevent" id="saturdayevent" required>
                        <option value="" disabled selected hidden>Select Your Event</option>
                        <option value="none">None</option>
                        <option value="Long Course Triathlon">Long Course Triathlon</option>
                        <option value="Olympic Triathlon">Olympic Triathlon</option>
                        <option value="10K">10K</option>
                    </select>
                    <label for="sundayrole">*Sunday Participation Role:</label>
                    <select size="1" name="sundayrole" id="sundayrole" required>
                        <option>Select Your Role</option>
                        <option value="none">None</option>
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                    </select>
                    <label for="sundayevent">Sunday Events:</label>
                    <select size="1" name="sundayevent" id="sundayevent" required>
                        <option>Select Your Event</option>
                        <option value="none">None</option>
                        <option value="Sprint Triathlon">Sprint Triathlon</option>
                        <option value="Try-a-tri">Try-a-tri</option>
                        <option value="Splash n Dash">Splash n Dash</option>
                    </select>
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