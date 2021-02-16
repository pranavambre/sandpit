<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>

<body>
    <div class="bgimg-1" id="section1">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ATLANTIC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav menu-5">
                        <li class="nav-item">
                            <a class="nav-link active anim-menu" aria-current="page" href="#">Home</a>
                            <em class="feed anim-menu"></em>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anim-menu" href="#">Features</a>
                            <em class="feed anim-menu"></em>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anim-menu" href="#">Pricing</a>
                            <em class="feed anim-menu"></em>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="caption">
            <span class="border animate__animated animate__bounceInDown animate__delay-2s">WELCOME TO ATLANTIC</span>
            <div class="scroll_class animate__animated animate__bounceInDown animate__delay-2s">SCROLL DOWN</div>
            <a href="#app">
            <svg class="arrows">
                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                <path class="a2" d="M0 20 L30 52 L60 20"></path>
                <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        </a>
        </div>
    </div>
    <div class="container text-center" id="app">
        <h4 class="m-5 animate__animated animate__bounce animate__delay-2s">OUR TEAM</h4>

        <h5 class="m-3 text-justify">
            Gamification is a concept that game mechanics and techniques in a non-game context.
            While creating gamification environment for our clients, our goal is always clear: To produce brilliant
            gamification
            solutions that look great and most of all help your business or cause to grow. However, we think that is
            only half of
            the equation our clients happiness is the most important thing to us. If you’re not satisfied, we have not
            succeeded.
        </h5>

        <div class="input-group p-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Search</span>
            </div>
            <input type="text" class="form-control" id="filter" v-model="filter" placeholder="Type country name...." />
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-xs-12" v-for="(row, index) in filteredRows" :key="index">

                <div class="wrapper">
                    <section class="module-team">
                        <div class="team">
                            <div class="team-cards">

                                <!-- Slider main container -->
                                <div class="swiper-container">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <span class="bg"></span>
                                                <span class="more"></span>
                                                <figure class="photo"><img v-bind:src='row.image' />
                                                </figure>
                                                <article class="text">
                                                    <p class="name">@{{ row . name }}</p>
                                                    <p class="role">UI Designer</p>
                                                    <p class="role">@{{ row . country }}</p>
                                                    <p class="desc">Far far away, behind the world mountains, far
                                                        from the countries Vokalia and Consonantia, theres live the
                                                        blind texts.</p>
                                                </article>

                                                <div class="social">
                                                    <span class="pointer"></span>
                                                    <div class="icons">
                                                        <a class="icon" href="" target="_blank" data-index="0"><i
                                                                class="fa fa-link" aria-hidden="true"></i></a>
                                                        <a class="icon" href="" target="_blank" data-index="1"><i
                                                                class="fa fa-envelope" aria-hidden="true"></i></a>
                                                        <a class="icon" href="" target="_blank" data-index="2"><i
                                                                class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                                        <a class="icon" href="" target="_blank" data-index="3"><i
                                                                class="fa fa-phone" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>0481711114</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@atlantic.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-4 pb-4">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">

                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                    incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021, All Right Reserved <a href="#">ATLANTIC</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                list: @json($model),
                filter: '',
            },
            methods: {},
            computed: {
                filteredRows() {
                    return this.list.filter(row => {
                        const country = row.country.toString().toLowerCase();
                        const searchTerm = this.filter.toLowerCase();

                        return country.includes(searchTerm)

                    });
                }
            }
        });

    </script>

</body>

</html>
