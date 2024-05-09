<!DOCTYPE html>
<html lang="en">
<!-- codewithmanish -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Bulls Gym</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>css.css" />
</head>

<body>
    <!-- Menu -->
    <div class="menu">
        <div class="container flex">

            <div class="mobile-btn">
                <ion-icon name="grid"></ion-icon>
            </div>
            <div class="logo">
                <img src="<?= base_url('assets/') ?>img/logo.png" alt="" />
            </div>

            <ul class="nav">
                <li class="nav-item"><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#why-us">Features</a></li>
                <li class="nav-item"><a href="#explore">Explore</a></li>
                <li class="nav-item"><a href="#discount">Register</a></li>
            </ul>

            <a href="#" class="btn">Register</a>
        </div>
    </div>
    <!-- End Menu -->

    <!-- Header -->
    <header class="header" id="home">
        <div class="container flex">
            <div class="text">
                <h1 class="mb">
                    Complete
                    <span>
                        Daily
                    </span> <br />
                    <span>Workout</span> At Home.!
                </h1>

                <p class="mb">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima
                    sunt sed tempora neque molestiae corrupti nobis harum ullam eos nam!
                </p>

                <a href="#" class="btn mt">Start Now</a>
            </div>

            <div class="visual">
                <img src="<?= base_url('assets/') ?>img/1.png" alt="" />
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Why Us -->
    <div class="section" id="why-us">
        <div class="container flex">
            <div class="text">
                <h2 class="primary mb">Why Choose Us?</h2>
                <h3 class="secondary mb">Consulatation with Expert.</h3>
                <p class="tertiary">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quos
                    maxime tempore?
                </p>

                <h3 class="secondary mb">Consulatation with Expert.</h3>
                <p class="tertiary">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quos
                    maxime tempore?
                </p>
            </div>
            <div class="visual">
                <img src="<?= base_url('assets/') ?>img/3.png" alt="" />
            </div>
        </div>
    </div>
    <!-- End Why Us -->

    <!-- Explore -->
    <div class="section" id="explore">
        <div class="container flex">
            <div class="visual">
                <img src="<?= base_url('assets/') ?>img/2.png" alt="" />
            </div>
            <div class="text">
                <h2 class="primary mb">
                    Explore Our Fitness <br />
                    Studio
                </h2>
                <p class="tertiary mb">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                    esse vitae ratione quos maiores eveniet temporibus illum! Eligendi
                    amet officia unde sint totam ut optio. Molestiae, illo quia?
                </p>

                <a href="#" class="btn mt">Get Started Now</a>
            </div>
        </div>
    </div>
    <!-- End Explore -->

    <!-- Trainer -->
    <div class="section" id="trainer">
        <h2 class="primary mb">Our Professional Trainers</h2>
        <div class="container flex">
            <div class="trainer">
                <img src="<?= base_url('assets/') ?>img/6.png" alt="" />
                <h3 class="secondary mb">Alan Smith</h3>
                <p class="tertiary mb">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla.
                </p>

                <a href="#" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>

            <div class="trainer">
                <img src="<?= base_url('assets/') ?>img/4.png" alt="" />
                <h3 class="secondary mb">Alan Smith</h3>
                <p class="tertiary mb">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla.
                </p>

                <a href="#" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>

            <div class="trainer">
                <img src="<?= base_url('assets/') ?>img/1.png" alt="" />
                <h3 class="secondary mb">Alan Smith</h3>
                <p class="tertiary mb">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla.
                </p>

                <a href="#" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
    <!-- End Trainer -->

    <!-- Testimonial -->
    <div class="section" id="testimonial">
        <div class="container flex">
            <div class="text">
                <h2 class="primary">
                    That's What Our Super <br />
                    Client Says
                </h2>

                <br />
                <br />
                <br />

                <div class="client">
                    <img src="<?= base_url('assets/') ?>img/4.png" alt="" />
                    <h2 class="secondary">Exelent Training</h2>
                    <p class="tertiary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                        quas voluptatem ad, repudiandae voluptates odio deleniti
                        reiciendis in veniam quidem expedita maxime error fugit. Pariatur
                        quasi sunt aut id. Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Neque, officiis.
                    </p>
                </div>
            </div>
            <div class="visual">
                <img src="<?= base_url('assets/') ?>img/1.png" alt="" />
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- Discount -->
    <div class="section" id="discount">
        <div class="container flex">
            <div class="visual">
                <img src="<?= base_url('assets/') ?>img/5.png" alt="" />
            </div>
            <div class="text">
                <h2 class="primary mb">
                    Fitness Classes This Summer, Pay Now And Get 45% Discount
                </h2>

                <p class="tertiary mb">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab maxime
                    minus praesentium est et veniam voluptate alias excepturi minima
                    placeat amet nostrum, eligendi, quod cum ducimus nesciunt ipsa eum,
                    explicabo eaque obcaecati.
                </p>

                <a href="#" class="btn bt">Book Now</a>
            </div>
        </div>
    </div>
    <!-- End Discount -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container flex">
            <p class="tertiary">
                &copy; 2023 Programmer cw. All Rights Reserved.
            </p>
        </div>
    </footer>

    <!-- End Footer -->
    <script src="js.js"></script>
</body>

</html>