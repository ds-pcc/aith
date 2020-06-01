<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Serrano">

    <title>Error</title>
    <!-- reset.css and helper.css are a set of common standard stylesheets that assist with reponsive design. Each stylesheet has additional notes that can be reviewed. -->
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
    <!-- This is our stylesheet -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <main>
        <section class="thanks">
            <p>
                <?php echo $error; ?>
            </p>
            <br>
            <br>
            <p>
                Sorry it looks like there was an error processing your request.
                <br> Please try again.
            </p>

            <p class="return">
                <a href="../home/">RETURN TO MAIN PAGE</a>
            </p>
        </section>
    </main>
    <?php include '../includes/footer.inc.html.php' ?>
</body>

</html>