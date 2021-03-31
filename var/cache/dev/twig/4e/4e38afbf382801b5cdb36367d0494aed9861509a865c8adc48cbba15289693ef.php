<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* coachlist/coachlist.html.twig */
class __TwigTemplate_c12dfbbce9428907237487f7da7a72d3f3af21affe619e62f67947f53072d9ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coachlist/coachlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coachlist/coachlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coachlist/coachlist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <title>Health Coach - Free Bootstrap 4 Template by Colorlib</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

        <link rel=\"stylesheet\" href=\"css/animate.css\">

        <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
        <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
        <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">

        <link rel=\"stylesheet\" href=\"css/bootstrap-datepicker.css\">
        <link rel=\"stylesheet\" href=\"css/jquery.timepicker.css\">

        <link rel=\"stylesheet\" href=\"css/flaticon.css\">
        <link rel=\"stylesheet\" href=\"css/style.css\">
    </head>
    <body>


    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end\">
                <div class=\"col-md-9 ftco-animate pb-5\">
                    <p class=\"breadcrumbs mb-2\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Coach <i class=\"ion-ios-arrow-forward\"></i></span></p>
                    <h1 class=\"mb-0 bread\">Coach</h1>
                </div>
            </div>
        </div>
    </section>


    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-1.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Lloyd Wilson</h3>
                            <span class=\"position mb-2\">Health Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-2.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Rachel Parker</h3>
                            <span class=\"position mb-2\">Life &amp; Business Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-3.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Ian Smith</h3>
                            <span class=\"position mb-2\">Executive Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-4.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Alicia Henderson</h3>
                            <span class=\"position mb-2\">Health Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-5.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Lloyd Wilson</h3>
                            <span class=\"position mb-2\">Executive Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-6.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Rachel Parker</h3>
                            <span class=\"position mb-2\">Health Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-7.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Ian Smith</h3>
                            <span class=\"position mb-2\">Health Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-8.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Fred Henderson</h3>
                            <span class=\"position mb-2\">Executive Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/jquery-migrate-3.0.1.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.easing.1.3.js\"></script>
    <script src=\"js/jquery.waypoints.min.js\"></script>
    <script src=\"js/jquery.stellar.min.js\"></script>
    <script src=\"js/jquery.animateNumber.min.js\"></script>
    <script src=\"js/bootstrap-datepicker.js\"></script>
    <script src=\"js/jquery.timepicker.min.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/scrollax.min.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"js/google-map.js\"></script>
    <script src=\"js/main.js\"></script>



    </body>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coachlist/coachlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <title>Health Coach - Free Bootstrap 4 Template by Colorlib</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

        <link rel=\"stylesheet\" href=\"css/animate.css\">

        <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
        <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
        <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">

        <link rel=\"stylesheet\" href=\"css/bootstrap-datepicker.css\">
        <link rel=\"stylesheet\" href=\"css/jquery.timepicker.css\">

        <link rel=\"stylesheet\" href=\"css/flaticon.css\">
        <link rel=\"stylesheet\" href=\"css/style.css\">
    </head>
    <body>


    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end\">
                <div class=\"col-md-9 ftco-animate pb-5\">
                    <p class=\"breadcrumbs mb-2\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Coach <i class=\"ion-ios-arrow-forward\"></i></span></p>
                    <h1 class=\"mb-0 bread\">Coach</h1>
                </div>
            </div>
        </div>
    </section>


    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-1.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Lloyd Wilson</h3>
                            <span class=\"position mb-2\">Health Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-2.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Rachel Parker</h3>
                            <span class=\"position mb-2\">Life &amp; Business Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-3.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Ian Smith</h3>
                            <span class=\"position mb-2\">Executive Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-4.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Alicia Henderson</h3>
                            <span class=\"position mb-2\">Health Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-5.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Lloyd Wilson</h3>
                            <span class=\"position mb-2\">Executive Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-6.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Rachel Parker</h3>
                            <span class=\"position mb-2\">Health Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-7.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Ian Smith</h3>
                            <span class=\"position mb-2\">Health Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            <div class=\"img align-self-stretch\" style=\"background-image: url(images/staff-8.jpg);\"></div>
                        </div>
                        <div class=\"text pt-3 px-3 pb-4 text-center\">
                            <h3>Fred Henderson</h3>
                            <span class=\"position mb-2\">Executive Coach</span>
                            <div class=\"faded\">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class=\"ftco-social text-center\">
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-google\"></span></a></li>
                                    <li class=\"ftco-animate\"><a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/jquery-migrate-3.0.1.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.easing.1.3.js\"></script>
    <script src=\"js/jquery.waypoints.min.js\"></script>
    <script src=\"js/jquery.stellar.min.js\"></script>
    <script src=\"js/jquery.animateNumber.min.js\"></script>
    <script src=\"js/bootstrap-datepicker.js\"></script>
    <script src=\"js/jquery.timepicker.min.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/scrollax.min.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"js/google-map.js\"></script>
    <script src=\"js/main.js\"></script>



    </body>
    </html>
{% endblock %}
", "coachlist/coachlist.html.twig", "C:\\Users\\Yassine Harbaoui\\Documents\\GitHub\\moveat\\templates\\coachlist\\coachlist.html.twig");
    }
}
