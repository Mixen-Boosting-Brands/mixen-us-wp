        <section id="contact-us" class="bg-dark pt-60 pb-30">
            <div class="container">
                <div class="row mb-4 text-center">
                    <div class="col-md-10 offset-md-1">
                        <h1
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            Let's bring your vision to life!
                        </h1>
                        <p
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. 
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <!-- Form feedback -->
                        <div id="form-messages"></div>
                        <form
                            action="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/mailer.php"
                            method="POST"
                            class="row g-3 needs-validation"
                            id="ajax-contact"
                            novalidate
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            <div class="col-md-6 form-floating mb-2">
                                <input
                                    type="text"
                                    class="form-control shadow-none"
                                    id="name"
                                    name="name"
                                    placeholder="Name*"
                                    pattern=".{5,50}"
                                    required
                                />
                                <label for="name" class="form-label"
                                    >Name*</label
                                >
                                <div class="valid-feedback">It looks ok!</div>
                                <div class="invalid-feedback">
                                    Please enter a valid name.
                                </div>
                            </div>
                            <div class="col-md-6 form-floating mb-2">
                                <input
                                    type="email"
                                    class="form-control shadow-none"
                                    id="email"
                                    name="email"
                                    placeholder="Email*"
                                    required
                                />
                                <label for="email" class="form-label"
                                    >Email*</label
                                >
                                <div class="valid-feedback">It looks ok!</div>
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                            <div class="col-md-12 form-floating mb-3">
                                <textarea
                                    class="form-control shadow-none no-resize"
                                    id="message"
                                    name="message"
                                    placeholder="Message*"
                                    required
                                ></textarea>
                                <label for="message">Message*</label>
                                <div class="valid-feedback">It looks ok!</div>
                                <div class="invalid-feedback">
                                    Please enter a message.
                                </div>
                            </div>
                            <div class="col-12">
                                <button
                                    type="submit"
                                    class="btn btn-secondary btn-lg d-block"
                                >
                                    Let's talk!
                                </button>
                                <div id="hold-on-a-sec">
                                    <i
                                        id="contact-spinner"
                                        class="fas fa-spinner fa-spin"
                                    ></i>
                                    Please wait...
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-dark pt-30 pb-60">
            <hr />
            <div class="container mt-5 mb-0 mb-md-5">
                <div class="row">
                    <div class="col-6 col-md-4 order-md-2 my-auto text-center">
                        <a href="#">
                            <img
                                class="logo img-fluid"
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo-white@2x.png"
                                alt="Mixen: Boosting Brands"
                                data-aos="fade-in"
                                data-aos-duration="2500"
                                data-aos-delay="100"
                            />
                        </a>
                    </div>
                    <div class="col-6 col-md-4 order-md-3 my-auto text-end">
                        <h6
                            class="mb-0 text-uppercase"
                            data-aos="fade-left"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            Smart is Sexy
                        </h6>
                    </div>
                    <div
                        class="col-md-4 order-md-1 mb-4 my-md-auto text-center text-md-start"
                    >
                        <ul
                            class="social list-inline my-4 mt-md-0 mb-0"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            <li class="list-inline-item">
                                <a
                                    href="https://www.instagram.com/mixenmx/"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.facebook.com/MixenMx/"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.tiktok.com/mixenmx/"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.youtube.com/mixenmx/"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />
            <div class="container mt-5">
                <div class="row">
                    <div class="col-4">
                        <h1
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            Boosting<br />
                            Brands
                        </h1>
                    </div>
                    <div class="col-8">
                        <div
                            class="row"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h5>Company</h5>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> About Us </a>
                                        </li>
                                        <li>
                                            <a href="#"> Our Team </a>
                                        </li>
                                        <li>
                                            <a href="#"> Careers </a>
                                        </li>
                                        <li>
                                            <a href="#contact-us">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h5>Resources</h5>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> Blog </a>
                                        </li>
                                        <li>
                                            <a href="#"> Case Studies </a>
                                        </li>
                                        <li>
                                            <a href="#"> Design Insights </a>
                                        </li>
                                        <li>
                                            <a href="#"> Tutorials </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-6 col-md-3">
                                <h5>Support</h5>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> FAQs </a>
                                        </li>
                                        <li>
                                            <a href="#"> Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="#"> Terms & Conditions </a>
                                        </li>
                                        <li>
                                            <a href="#contact-us">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-6 col-md-3">
                                <h5>Social Media</h5>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#" target="_blank">
                                                <i
                                                    class="fa-brands fa-instagram"
                                                ></i>
                                                Instagram
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i
                                                    class="fa-brands fa-facebook-f"
                                                ></i>
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i
                                                    class="fa-brands fa-tiktok"
                                                ></i>
                                                TikTok
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i
                                                    class="fa-brands fa-youtube"
                                                ></i>
                                                YouTube
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col text-center">
                        <ul
                            class="list-unstyled"
                            data-aos="fade-in"
                            data-aos-duration="2500"
                            data-aos-delay="100"
                        >
                            <li class="mb-4">
                                <?php bloginfo("name"); ?> - <?php bloginfo(
     "description"
 ); ?>
                            </li>
                            <li>
                                <span class="fw-bold">
                                    Let's build something extraordinary
                                    together.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>

        <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/js/app.bundle.js"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-62TM6X70DJ"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-62TM6X70DJ');
        </script>
    </body>
</html>
