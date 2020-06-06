<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Serrano">

    <title>FAQs</title>
    <?php include '../includes/style-sheets.inc.html.php' ?>
</head>

<body>
    <?php include '../includes/header.inc.html.php' ?>

    <main>
        <section>
            <h3>Frequently Asked Questions (FAQs)</h3>
            <dl id="eventlist">
                <dt>What are the rules?</dt>
                <dd>We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</dd>
                <dt>Can I use a personal music device while cycling?</dt>
                <dd>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</dd>
                <dt>Can I use a personal music device while running?</dt>
                <dd> During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</dd>
                <dd>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</dd>
                <dd>If you are using a personal music device with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</dd>
                <dd>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</dd>
                <dt>Do I need to wear a wetsuit?</dt>
                <dd>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</dd>
                <dt>Do I have to use a road or racing bike?</dt>
                <dd>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</dd>
            </dl>
            <h3>Still have a question?</h3>
            <div id="buttoncontainer"><a id="contactbutton" href="../contact/">Contact Us</a></div>
        </section>

    </main>

    <?php include '../includes/footer.inc.html.php' ?>
    <script>
        ! function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'weatherwidget-io-js');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/hamburgerNav.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="../scripts/datalist.js"></script>
</body>

</html>