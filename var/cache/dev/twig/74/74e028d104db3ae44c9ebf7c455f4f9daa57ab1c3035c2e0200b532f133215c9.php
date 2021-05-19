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

/* program/program.html.twig */
class __TwigTemplate_1e4dfd3bf756b37bfcc8c889e29c2cc9c9dfcddc89d93349b2eba8a15d1f621e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "program/program.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "program/program.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "program/program.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <title>Programmes</title>
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
                    <p class=\"breadcrumbs mb-2\"><span class=\"mr-2\"><a href=\"home\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span></p>
                    <h1 class=\"mb-0 bread\">Programmes</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section\">
        <div class=\"container\">
            <!-- row 1 !-->
            <div class=\"row\" style=\"width: 790px;\">
                <div class=\"col-1 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/cardio.jpg');\">
                            </a>
                        </div>
                    </div>
                <div class=\"col-2 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/fireheart.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-3 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/hit.jpg');\">
                        </a>
                    </div>
                </div>
            </div>
            <!-- row 2 !-->
            <div class=\"row\" style=\"width: 790px;\">
                <div class=\"col-1 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/intro.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-2 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/reboot.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-3 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/squareone.jpg');\">
                        </a>
                    </div>
                </div>
            </div>
            <!-- row 3 !-->
            <div class=\"row\" style=\"width: 790px;\">
                <div class=\"col-1 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/the gauntlet.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-2 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/yoga.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-3 ftco-animate\">
                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/corestrength.jpg');\">
                        </a>
                    </div>
                </div>
            </div>


                    <div class=\"row mt-5\">
                        <div class=\"col text-center\">
                            <div class=\"block-27\">
                                <ul>
                                    <li><a href=\"#\"><</a></li>
                                    <li class=\"active\"><span>1</span></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>
                                    <li><a href=\"#\">5</a></li>
                                    <li><a href=\"#\">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>




                <div class=\"col-1 sidebar pl-lg-5 ftco-animate\">
                    <div class=\"sidebar-box\">
                        <form action=\"#\" class=\"search-form\">
                            <div class=\"form-group\">
                                <span class=\"fa fa-search\"></span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Type a keyword and hit enter\">
                            </div>
                        </form>
                    </div>
                    <div class=\"sidebar-box ftco-animate\">
                        <div class=\"categories\">
                            <h3>Services</h3>
                            <li><a href=\"programme\">Listes des programmes<span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">Challenges<span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">guides<span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"calendrier\">Calendrier<span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"calendar\">modifier calendrier<span class=\"ion-ios-arrow-forward\"></span></a></li>

                        </div>
                    </div>

                    <div class=\"sidebar-box ftco-animate\">
                        <h3>Tag Cloud</h3>
                        <div class=\"tagcloud\">
                            <a href=\"#\" class=\"tag-cloud-link\">food</a>
                            <a href=\"#\" class=\"tag-cloud-link\">life</a>
                            <a href=\"#\" class=\"tag-cloud-link\">coach</a>
                            <a href=\"#\" class=\"tag-cloud-link\">healthy</a>
                            <a href=\"#\" class=\"tag-cloud-link\">lifestyle</a>
                            <a href=\"#\" class=\"tag-cloud-link\">green</a>
                            <a href=\"#\" class=\"tag-cloud-link\">exercise</a>
                            <a href=\"#\" class=\"tag-cloud-link\">dietitian</a>
                        </div>
                    </div>

                    <div class=\"sidebar-box ftco-animate\">
                        <div class=\"col-md-12\" >


                                <iframe class=\"ratio ratio-16x9\"

                                        src=\"https://www.youtube.com/embed/vlDzYIIOYmM\"
                                        title=\"YouTube video\"
                                        allowfullscreen></iframe>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->





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
        return "program/program.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <title>Programmes</title>
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
                    <p class=\"breadcrumbs mb-2\"><span class=\"mr-2\"><a href=\"home\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span></p>
                    <h1 class=\"mb-0 bread\">Programmes</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section\">
        <div class=\"container\">
            <!-- row 1 !-->
            <div class=\"row\" style=\"width: 790px;\">
                <div class=\"col-1 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/cardio.jpg');\">
                            </a>
                        </div>
                    </div>
                <div class=\"col-2 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/fireheart.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-3 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/hit.jpg');\">
                        </a>
                    </div>
                </div>
            </div>
            <!-- row 2 !-->
            <div class=\"row\" style=\"width: 790px;\">
                <div class=\"col-1 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/intro.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-2 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/reboot.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-3 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/squareone.jpg');\">
                        </a>
                    </div>
                </div>
            </div>
            <!-- row 3 !-->
            <div class=\"row\" style=\"width: 790px;\">
                <div class=\"col-1 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/the gauntlet.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-2 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/yoga.jpg');\">
                        </a>
                    </div>
                </div>
                <div class=\"col-3 ftco-animate\">
                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/corestrength.jpg');\">
                        </a>
                    </div>
                </div>
            </div>


                    <div class=\"row mt-5\">
                        <div class=\"col text-center\">
                            <div class=\"block-27\">
                                <ul>
                                    <li><a href=\"#\"><</a></li>
                                    <li class=\"active\"><span>1</span></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>
                                    <li><a href=\"#\">5</a></li>
                                    <li><a href=\"#\">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>




                <div class=\"col-1 sidebar pl-lg-5 ftco-animate\">
                    <div class=\"sidebar-box\">
                        <form action=\"#\" class=\"search-form\">
                            <div class=\"form-group\">
                                <span class=\"fa fa-search\"></span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Type a keyword and hit enter\">
                            </div>
                        </form>
                    </div>
                    <div class=\"sidebar-box ftco-animate\">
                        <div class=\"categories\">
                            <h3>Services</h3>
                            <li><a href=\"programme\">Listes des programmes<span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">Challenges<span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">guides<span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"calendrier\">Calendrier<span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"calendar\">modifier calendrier<span class=\"ion-ios-arrow-forward\"></span></a></li>

                        </div>
                    </div>

                    <div class=\"sidebar-box ftco-animate\">
                        <h3>Tag Cloud</h3>
                        <div class=\"tagcloud\">
                            <a href=\"#\" class=\"tag-cloud-link\">food</a>
                            <a href=\"#\" class=\"tag-cloud-link\">life</a>
                            <a href=\"#\" class=\"tag-cloud-link\">coach</a>
                            <a href=\"#\" class=\"tag-cloud-link\">healthy</a>
                            <a href=\"#\" class=\"tag-cloud-link\">lifestyle</a>
                            <a href=\"#\" class=\"tag-cloud-link\">green</a>
                            <a href=\"#\" class=\"tag-cloud-link\">exercise</a>
                            <a href=\"#\" class=\"tag-cloud-link\">dietitian</a>
                        </div>
                    </div>

                    <div class=\"sidebar-box ftco-animate\">
                        <div class=\"col-md-12\" >


                                <iframe class=\"ratio ratio-16x9\"

                                        src=\"https://www.youtube.com/embed/vlDzYIIOYmM\"
                                        title=\"YouTube video\"
                                        allowfullscreen></iframe>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->





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
", "program/program.html.twig", "C:\\Users\\Yassine Harbaoui\\Documents\\GitHub\\pushing\\moveat\\templates\\program\\program.html.twig");
    }
}
