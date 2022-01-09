<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Arief BP.</title>

        <!-- Meta tag Keywords -->
        <meta charset="UTF-8" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset_public('media/favicon.png') }}">

        <!-- Style-CSS -->
        <link rel="stylesheet" href="{{ asset_public('assets/red-leaf/css/style.css') }}" type="text/css" media="all" />
    </head>

    <body>
        <div class="Coming-block">
            <div class="page"></div>
            <div class="content">
                <div class="logo">
                    <a class="brand-logo">This website is still under maintenance</a>
                    <!-- if logo is image enable this
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a>
                    -->
                </div>

                <div class="w3l-coming-soon-page">
                    <div class="coming-block">
                        <h2>Thank you for visiting my website.</h2>
                        <p>Click the button below for more detailed information.</p>
                        <div class="countdown">
                            <div class="countdown__days">
                                <div class="number"></div>
                                <span class>Days</span>
                            </div>

                            <div class="countdown__hours">
                                <div class="number"></div>
                                <span class>Hours</span>
                            </div>

                            <div class="countdown__minutes">
                                <div class="number"></div>
                                <span class>Minutes</span>
                            </div>

                            <div class="countdown__seconds">
                                <div class="number"></div>
                                <span class>Seconds</span>
                            </div>
                        </div>
                        <a href="https://github.com/archytech99" class="home">github/archytech99</a>
                    </div>
                </div>

                <div class="copy-right text-center">
                    <p>© {{ date('Y', time()) }} Arief BP. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
                </div>
            </div>

            <script src="{{ asset_public('assets/red-leaf/js/jquery-3.3.1.min.js') }}"></script>
            <script src="{{ asset_public('assets/red-leaf/js/starter.js') }}"></script>
            <script>
                var lFollowX = 0,
                    lFollowY = 0,
                    x = 0,
                    y = 0,
                    friction = 1 / 30;

                function animate() {
                    x += (lFollowX - x) * friction;
                    y += (lFollowY - y) * friction;

                    translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

                    $('.page').css({
                        '-webit-transform': translate,
                        '-moz-transform': translate,
                        'transform': translate
                    });

                    window.requestAnimationFrame(animate);
                }

                $(window).on('mousemove click', function (e) {

                    var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
                    var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
                    lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
                    lFollowY = (10 * lMouseY) / 100;

                });

                animate();
            </script>
        </div>
    </body>

</html>
