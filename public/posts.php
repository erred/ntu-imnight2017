<!doctype html>
<html>
    <head>
        <title>IM Night 2017</title>
        <style>
            a {
                text-decoration: none;
            }
            body {
                margin: auto;
                max-width: 150vh;
            }
            img {
                height: auto;
                margin: auto;
            }
            .header {
                width: 100%;
            }
            .nav {
                width: 22.5%;
            }
            .main {
                width: 100%;
            }
            .hdiv {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div>
            <a href="/night/">
                <img class="header" src="header.png">
            </a>
        </div>
        <img class=" hdiv" src="hdivider.png">
        <nav>
            <a href="/night/">
                <img class="nav" src="nav1.png">
            </a>
            <a href="about.html">
                <img class="nav" src="nav2.png">
            </a>
            <a href="posts.php">
                <img class="nav" src="nav3.png">
            </a>
            <a href="https://www.facebook.com/2015Shadows/">
                <img class="nav" src="nav4.png">
            </a>
        </nav>
        <img class=" hdiv" src="hdivider.png">
        <main>
<?php
            $dirname = "./posts/";
            $images = glob($dirname."*.png");

            foreach($images as $image) {
                echo '<img class="main" src="'.$image.'" />';

            }
?>
        </main>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47570930-7', 'auto');
  ga('send', 'pageview');

</script>
    </body>
</html>
