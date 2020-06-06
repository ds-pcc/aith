<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Serrano">

    <title>AITH</title>
    <?php include '../includes/style-sheets.inc.html.php' ?>
</head>

<body>
    <?php include '../includes/header.inc.html.php' ?>

    <main>
        <section>
            <h2>Annual Multisport Weekend</h2>
            <div class="slideshow">
                <figure class="my_slides">
                    <img src="../pictures/ace1-4319x2879.jpg" alt="Group of contestants running into water">
                </figure>
                <figure class="my_slides">
                    <img src="../pictures/ace16-4319x2879.jpg" alt="A participant running with onlookers on the sidelines">
                </figure>
                <figure class="my_slides">
                    <img src="../pictures/ace3-4319x2879.jpg" alt="Two cycling participants with their hands raised at the lead of the group">
                </figure>
                <script src="../scripts/slideshow.js"></script>
            </div>
            <h2>June 20th & 21st</h2>
            <h3>About AITH</h3>
            <article id="about">
                <p>
                    Ace in the Hole(AITH) Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.
                </p>
            </article>
        </section>

        <section>
            <h3>EVENTS</h3>
            <dl id="eventlist">
                <dt>Long Course</dt>
                <dd>Swim: 1.2 mi</dd>
                <dd>Bike: 58 mi</dd>
                <dd>Run: 13.1 mi</dd>
                <dd class="seemore"><a href="../events/#longcoursetri">See More Details</a></dd>
                <dt>Olympic Triathlon</dt>
                <dd>Swim: 1,500 meters</dd>
                <dd>Bike: 28 mi</dd>
                <dd>Run: 10 K</dd>
                <dd class="seemore"><a href="../events/#olympictri">See More Details</a></dd>
                <dt>Sprint Triathlon</dt>
                <dd>Swim: 1/2 mi</dd>
                <dd>Bike: 28 mi</dd>
                <dd>Run: 5 K</dd>
                <dd class="seemore"><a href="../events/#sprinttri">See More Details</a></dd>
                <dt>Try-A-Tri</dt>
                <dd>Swim: 1/4 mi</dd>
                <dd>Bike: 10 mi</dd>
                <dd>Run: 2 mi</dd>
                <dd class="seemore"><a href="../events/#tryatri">See More Details</a></dd>
                <dt>Half-Marathon</dt>
                <dd>Run: 13.1mi</dd>
                <dd class="seemore"><a href="../events/#halfmarathon">See More Details</a></dd>
                <dt>10K</dt>
                <dd>Run: 10 K</dd>
                <dd class="seemore"><a href="../events/#10k">See More Details</a></dd>
                <dt>Splash n' Dash</dt>
                <dd>Swim: 100 yards</dd>
                <dd>Run: 50 yards</dd>
                <dd class="seemore"><a href="../events/#splashndash">See More Details</a></dd>
            </dl>
        </section>
        <section>
            <h3>Rain or Shine</h3>
            <article>
                <p>
                    Watch the weather closely. The show goes on no matter what the weather is doing.
                </p>
            </article>
            <div class="weather" id="mobile-weather">
                <iframe src="https://cdnres.willyweather.com/widget/loadView.html?id=125296" width="290" height="228" frameborder="0" scrolling="no">
                </iframe>
                <a style="display: block;text-indent: -9999em;position: relative;z-index: 1;height: 20px;margin: -20px 0 0 0" href="https://www.willyweather.com/or/multnomah-county/portland.html" rel="nofollow">portland weekly forecast
                </a>
            </div>
            <div class="weather" id="tablet-weather">
                <iframe src="https://cdnres.willyweather.com/widget/loadView.html?id=125296" width="420" height="228" frameborder="0" scrolling="no">
                </iframe>
                <a style="display: block;text-indent: -9999em;position: relative;z-index: 1;height: 20px;margin: -20px 0 0 0" href="https://www.willyweather.com/or/multnomah-county/portland.html" rel="nofollow">portland weekly forecast
                </a>
            </div>
        </section>
        <section>
            <h3>See our FB community!</h3>
            <div class="feed">
                <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline, events" data-width="" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a>
                    </blockquote>
                </div>
            </div>
            <h3>Follow us on Twitter!</h3>
            <div class="feed">
                <a class="twitter-timeline" data-width="400" data-height="300" data-dnt="true" data-theme="dark" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
            </div>

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