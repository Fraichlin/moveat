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

/* stories/stories.html.twig */
class __TwigTemplate_e079c1bfbc0815b94c656861917fa696d1c547f9be7800f3bb9ac282f6f4d460 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stories/stories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stories/stories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stories/stories.html.twig", 1);
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
        echo "
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <title>Astuces</title>
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



<section class=\"ftco-section ftco-no-pb bg-light\">
        <div class=\"container\">
            <div class=\"row justify-content-center pb-5 mb-3\">
                <div class=\"col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated\">
                    <span class=\"subheading mb-3\">Stories</span>
                    <h2>Successfull Stories</h2>
                </div>
            </div>
            <div class=\"row ftco-animate fadeInUp ftco-animated\">
                <div class=\"col-md-12\">
                    <div class=\"carousel-stories owl-carousel owl-loaded owl-drag\">



                        <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transform: translate3d(-1440px, 0px, 0px); transition: all 0.25s ease 0s; width: 5040px;\"><div class=\"owl-item cloned\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-2.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Rony Smith</p>
                                                                <span class=\"position\">Client/Messenger</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item cloned\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-3.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">John Doe</p>
                                                                <span class=\"position\">Client</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item active\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-1.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Joy Smith</p>
                                                                <span class=\"position\">Client/Manager</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-2.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Rony Smith</p>
                                                                <span class=\"position\">Client/Messenger</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-3.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">John Doe</p>
                                                                <span class=\"position\">Client</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item cloned\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-1.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Joy Smith</p>
                                                                <span class=\"position\">Client/Manager</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item cloned\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-2.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Rony Smith</p>
                                                                <span class=\"position\">Client/Messenger</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div></div></div><div class=\"owl-nav\"><button role=\"presentation\" class=\"owl-prev\"><p><span class=\"fa fa-chevron-left\"></span></p></button><button role=\"presentation\" class=\"owl-next\"><p><span class=\"fa fa-chevron-right\"></span></p></button></div><div class=\"owl-dots disabled\"></div></div>
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
        return "stories/stories.html.twig";
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
        <title>Astuces</title>
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



<section class=\"ftco-section ftco-no-pb bg-light\">
        <div class=\"container\">
            <div class=\"row justify-content-center pb-5 mb-3\">
                <div class=\"col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated\">
                    <span class=\"subheading mb-3\">Stories</span>
                    <h2>Successfull Stories</h2>
                </div>
            </div>
            <div class=\"row ftco-animate fadeInUp ftco-animated\">
                <div class=\"col-md-12\">
                    <div class=\"carousel-stories owl-carousel owl-loaded owl-drag\">



                        <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transform: translate3d(-1440px, 0px, 0px); transition: all 0.25s ease 0s; width: 5040px;\"><div class=\"owl-item cloned\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-2.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Rony Smith</p>
                                                                <span class=\"position\">Client/Messenger</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item cloned\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-3.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">John Doe</p>
                                                                <span class=\"position\">Client</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item active\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-1.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Joy Smith</p>
                                                                <span class=\"position\">Client/Manager</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-2.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Rony Smith</p>
                                                                <span class=\"position\">Client/Messenger</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-3.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">John Doe</p>
                                                                <span class=\"position\">Client</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item cloned\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-1.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Joy Smith</p>
                                                                <span class=\"position\">Client/Manager</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div><div class=\"owl-item cloned\" style=\"width: 690px; margin-right: 30px;\"><div class=\"item\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-md-11\">
                                                <div class=\"stories-wrap d-md-flex\">
                                                    <div class=\"img\" style=\"background-image: url(/images/person-2.jpg);\"></div>
                                                    <div class=\"text p-4 py-xl-5 px-xl-5 d-flex align-items-center\">
                                                        <div class=\"desc w-100\">
                                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                                            <div class=\"pt-4\">
                                                                <p class=\"name mb-0\">Rony Smith</p>
                                                                <span class=\"position\">Client/Messenger</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div></div></div><div class=\"owl-nav\"><button role=\"presentation\" class=\"owl-prev\"><p><span class=\"fa fa-chevron-left\"></span></p></button><button role=\"presentation\" class=\"owl-next\"><p><span class=\"fa fa-chevron-right\"></span></p></button></div><div class=\"owl-dots disabled\"></div></div>
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
", "stories/stories.html.twig", "C:\\Users\\Yassine Harbaoui\\Documents\\GitHub\\moveat\\templates\\stories\\stories.html.twig");
    }
}
