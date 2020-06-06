<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Serrano">

    <title>Error</title>
    <?php include '../includes/style-sheets.inc.html.php' ?>
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