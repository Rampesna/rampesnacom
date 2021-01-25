<!-- ======= About Section ======= -->
<section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

        <div class="section-title">
            <h2>About</h2>
            <p>Learn more about me</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset('assets/website/img/me.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>Software Engineer &amp; Web Developer</h3>
                <p class="font-italic">
                    I work in the field of web technologies. I have worked with PHP and Laravel Framework on various
                    projects, in particular.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 11 July 1994</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.rampesna.com</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +90 (538) 376-1370</li>
                            <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : Malatya, TURKEY</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li>
                                <i class="icofont-rounded-right"></i>
                                <strong>Age:</strong> {{ \Illuminate\Support\Carbon::now()->diffInYears('1994-07-11') }}
                            </li>
                            <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
                            <li><i class="icofont-rounded-right"></i> <strong>E-mail:</strong> rampesna@gmail.com</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Working At:</strong> Ayssoft IT</li>
                        </ul>
                    </div>
                </div>
                <p>
                    I have a good command of OOP and AOP programming methodologies and SOLID principles. I have a lot of experience and
                    expertise in MVC, RESTful and Laravel architectures, PHP, Ajax, HTML, CSS, Javascript and JQuery. I
                    also have a basic level of NodeJs and VueJs knowledge.
                </p>
            </div>
        </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="icofont-simple-smile"></i>
                    <span data-toggle="counter-up">79</span>
                    <p>Happy Clients</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="icofont-document-folder"></i>
                    <span data-toggle="counter-up">27</span>
                    <p>Projects</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="icofont-ebook"></i>
                    <span data-toggle="counter-up">19</span>
                    <p>Certificates</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="icofont-users-alt-5"></i>
                    <span data-toggle="counter-up">5</span>
                    <p>Job Experience</p>
                </div>
            </div>

        </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

        <div class="section-title">
            <h2>Skills</h2>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">HTML <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">CSS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">JavaScript <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">PHP <i class="val">95%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Laravel <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">VueJs <i class="val">65%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

        </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

        <div class="section-title">
            <h2>Interests</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                    <i class="ri-flutter-fill" style="color: #5578ff;"></i>
                    <h3>Flutter</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="ri-vuejs-fill" style="color: #4ceb95;"></i>
                    <h3>VueJs</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="ri-node-tree" style="color: #2d995b;"></i>
                    <h3>NodeJs</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <i class="ri-database-2-fill" style="color: #e361ff;"></i>
                    <h3>MongoDB</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-database-2-line" style="color: #e80368;"></i>
                    <h3>Redis</h3>
                </div>
            </div>
        </div>

    </div><!-- End Interests -->

</section><!-- End About Section -->
