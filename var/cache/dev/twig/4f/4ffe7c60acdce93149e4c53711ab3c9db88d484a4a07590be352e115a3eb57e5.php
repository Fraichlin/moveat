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

/* astuces/astuces.html.twig */
class __TwigTemplate_e66b22cb99155a952515be277e149de4804b8b2e01621650d2eff2e02acbb808 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "astuces/astuces.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "astuces/astuces.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "astuces/astuces.html.twig", 1);
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



    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end\">
                <div class=\"col-md-9 ftco-animate pb-5\">
                    <p class=\"breadcrumbs mb-2\"><span class=\"mr-2\"><a href=\"home\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span></p>
                    <h1 class=\"mb-0 bread\">Astuces</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_1.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_2.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_3.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_4.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_5.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_6.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"row mt-5\">
                        <div class=\"col text-center\">
                            <div class=\"block-27\">
                                <ul>
                                    <li><a href=\"#\">&lt;</a></li>
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

                </div> <!-- .col-md-8 -->
                <div class=\"col-lg-4 sidebar pl-lg-5 ftco-animate\">
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
                            <li><a href=\"#\">Balance Body <span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">Physical Activity <span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">Fitness Program <span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">Healthy Food <span class=\"ion-ios-arrow-forward\"></span></a></li>
                        </div>
                    </div>

                    <div class=\"sidebar-box ftco-animate\">
                        <h3>Recent Blog</h3>
                        <div class=\"block-21 mb-4 d-flex\">
                            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_1.jpg);\"></a>
                            <div class=\"text\">
                                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class=\"meta\">
                                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Jan. 30, 2020</a></div>
                                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"block-21 mb-4 d-flex\">
                            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_2.jpg);\"></a>
                            <div class=\"text\">
                                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class=\"meta\">
                                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Jan. 30, 2020</a></div>
                                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"block-21 mb-4 d-flex\">
                            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_3.jpg);\"></a>
                            <div class=\"text\">
                                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class=\"meta\">
                                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Jan. 30, 2020</a></div>
                                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                                </div>
                            </div>
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
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
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
        return "astuces/astuces.html.twig";
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



    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end\">
                <div class=\"col-md-9 ftco-animate pb-5\">
                    <p class=\"breadcrumbs mb-2\"><span class=\"mr-2\"><a href=\"home\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span></p>
                    <h1 class=\"mb-0 bread\">Astuces</h1>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 ftco-animate\">

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_1.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_2.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_3.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_4.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_5.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"blog-entry align-self-stretch\">
                        <a href=\"blog-single.html\" class=\"block-20 rounded img-2\" style=\"background-image: url('images/image_6.jpg');\">
                        </a>
                        <div class=\"text mt-3\">
                            <div class=\"meta mb-2\">
                                <div><a href=\"#\">January 30, 2020</a></div>
                                <div><a href=\"#\">Admin</a></div>
                                <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                            </div>
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
                        </div>
                    </div>

                    <div class=\"row mt-5\">
                        <div class=\"col text-center\">
                            <div class=\"block-27\">
                                <ul>
                                    <li><a href=\"#\">&lt;</a></li>
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

                </div> <!-- .col-md-8 -->
                <div class=\"col-lg-4 sidebar pl-lg-5 ftco-animate\">
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
                            <li><a href=\"#\">Balance Body <span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">Physical Activity <span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">Fitness Program <span class=\"ion-ios-arrow-forward\"></span></a></li>
                            <li><a href=\"#\">Healthy Food <span class=\"ion-ios-arrow-forward\"></span></a></li>
                        </div>
                    </div>

                    <div class=\"sidebar-box ftco-animate\">
                        <h3>Recent Blog</h3>
                        <div class=\"block-21 mb-4 d-flex\">
                            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_1.jpg);\"></a>
                            <div class=\"text\">
                                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class=\"meta\">
                                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Jan. 30, 2020</a></div>
                                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"block-21 mb-4 d-flex\">
                            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_2.jpg);\"></a>
                            <div class=\"text\">
                                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class=\"meta\">
                                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Jan. 30, 2020</a></div>
                                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"block-21 mb-4 d-flex\">
                            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_3.jpg);\"></a>
                            <div class=\"text\">
                                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class=\"meta\">
                                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Jan. 30, 2020</a></div>
                                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                                </div>
                            </div>
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
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
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
", "astuces/astuces.html.twig", "C:\\Users\\Yassine Harbaoui\\Documents\\GitHub\\moveat\\templates\\astuces\\astuces.html.twig");
    }
}
