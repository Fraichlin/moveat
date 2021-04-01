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

/* home/index.html.twig */
class __TwigTemplate_c7021c5da2119e8e3a0e5b70468539e3cdc18aa48c815909dde865c54fb58718 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "
</head>
<body>

<div class=\"wrap\">
    <div class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"col d-flex align-items-center\">
                <p class=\"mb-0 phone\"><span class=\"mailus\">Phone no:</span> <a href=\"#\">+00 1234 567</a> or <span class=\"mailus\">email us:</span> <a href=\"#\">emailsample@email.com</a></p>
            </div>
            <div class=\"col d-flex justify-content-end\">
                <div class=\"social-media\">
                    <p class=\"mb-0 d-flex\">
                        <a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"><i class=\"sr-only\">Facebook</i></span></a>
                        <a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"><i class=\"sr-only\">Twitter</i></span></a>
                        <a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"><i class=\"sr-only\">Instagram</i></span></a>
                        <a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-dribbble\"><i class=\"sr-only\">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"home\">Mov<span>Eat<i class=\"fa fa-leaf\"></i></span></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"fa fa-bars\"></span> Menu
        </button>
        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\"><a href=\"home\" class=\"nav-link\">Home</a></li>
                <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">S'inscrire</a></li>
                <li class=\"nav-item\"><a href=\"program\"  class=\"nav-link\">Programmes</a>
                <ul class=\"dropdown-item-text\">
                        <li><a href=\"program\">programmes sportifs</a></li>
                        <li><a href=\"#\">programmes nutritionnels</a></li>
                        <li><a href=\"#\">programmes psychologiques</a></li>
                </ul>
                </li>
                <li class=\"nav-item\"><a href=\"astuces\" class=\"nav-link\">Astuces</a></li>
                <li class=\"nav-item\"><a href=\"rendezvous\" class=\"nav-link\">Téléconsultation</a></li>
                <li class=\"nav-item\"><a href=\"success-stories.html\" class=\"nav-link\">Stories</a></li>
                <li class=\"nav-item\"><a href=\"coachlist\" class=\"nav-link\">Coach</a></li>
                <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
                <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class=\"hero-wrap js-fullheight\">
    <div class=\"home-slider owl-carousel js-fullheight\">
        <div class=\"slider-item js-fullheight\" style=\"background-image:url(";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_1.jpg"), "html", null, true);
        echo ");\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center\">
                    <div class=\"col-md-7 ftco-animate\">
                        <div class=\"text w-100\">
                            <h2>Welcome to Health Coach</h2>
                            <h1 class=\"mb-4\">Get in shape faster, live your happy life</h1>
                            <p><a href=\"#\" class=\"btn btn-primary\">Learn more</a> <a href=\"#\" class=\"btn btn-white\">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"slider-item js-fullheight\" style=\"background-image:url(";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_2.jpg"), "html", null, true);
        echo ");\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center\">
                    <div class=\"col-md-7 ftco-animate\">
                        <div class=\"text w-100\">
                            <h2>A Fresh approach to healthy life</h2>
                            <h1 class=\"mb-4 color-white\">Unlock your potential with good nutrition</h1>
                            <p><a href=\"#\" class=\"btn btn-primary\">Learn more</a> <a href=\"#\" class=\"btn btn-white\">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"slider-item js-fullheight\" style=\"background-image:url(";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_3.jpg"), "html", null, true);
        echo ");\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center justify-content-end\">
                    <div class=\"col-md-6 ftco-animate\">
                        <div class=\"text w-100\">
                            <h2>Welcome Health Coach</h2>
                            <h1 class=\"mb-4\">You can transform health through habit change</h1>
                            <p><a href=\"#\" class=\"btn btn-primary\">Learn more</a> <a href=\"#\" class=\"btn btn-white\">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class=\"ftco-section ftco-services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block services-wrap text-center\">
                    <div class=\"img\" style=\"background-image: url(";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/services-1.jpg)"), "html", null, true);
        echo ");\"></div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">Exercise Program</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline-primary\">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block services-wrap text-center\">
                    <div class=\"img\" style=\"background-image: url(";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/services-2.jpg"), "html", null, true);
        echo ");\"></div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">Nutrition Plans</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline-primary\">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block services-wrap text-center\">
                    <div class=\"img\" style=\"background-image: url(";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/services-3.jpg"), "html", null, true);
        echo ");\"></div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">Diet Program</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline-primary\">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section ftco-no-pt ftco-no-pb bg-light\">
    <div class=\"container\">
        <div class=\"row no-gutters\">
            <div class=\"col-md-5 p-md-5 img img-2 mt-5 mt-md-0\" style=\"background-image: url(";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/coach-1.jpg)"), "html", null, true);
        echo ");\">
            </div>
            <div class=\"col-md-7 wrap-about py-4 py-md-5 ftco-animate\">
                <div class=\"heading-section mb-5\">
                    <div class=\"pl-md-5\">
                        <span class=\"subheading mb-2\">Welcome to Healthcare</span>
                        <h2 class=\"mb-2\">Hello! Health Care is a natural way of improving your health</h2>
                    </div>
                </div>
                <div class=\"pl-md-5\">
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <div class=\"founder d-flex align-items-center mt-5\">
                        <div class=\"img\" style=\"background-image: url(";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/coach-1.jpg)"), "html", null, true);
        echo ");\"></div>
                        <div class=\"text pl-3\">
                            <h3 class=\"mb-0\">Cythia Hunter</h3>
                            <span class=\"position\">Personal Dietitian</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section ftco-no-pt ftco-no-pb\">
    <div class=\"container-fluid px-md-0\">
        <div class=\"row no-gutters\">
            <div class=\"col-md-3 d-flex align-items-stretch\">
                <div class=\"consultation w-100 text-center px-4 px-md-5\">
                    <h3 class=\"mb-4\">Healthcare Services</h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <a href=\"#\" class=\"btn-custom\">See Services</a>
                </div>
            </div>
            <div class=\"col-md-6 d-flex align-items-stretch\">
                <div class=\"consultation consul w-100 px-4 px-md-5\">
                    <div class=\"text-center\">
                        <h3 class=\"mb-4\">Free Consultation</h3>
                    </div>
                    <form action=\"#\" class=\"appointment-form\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"First Name\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Last Name\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <div class=\"form-field\">
                                        <div class=\"select-wrap\">
                                            <div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
                                            <select name=\"\" id=\"\" class=\"form-control\">
                                                <option value=\"\">Services</option>
                                                <option value=\"\">Services 1</option>
                                                <option value=\"\">Services 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <div class=\"input-wrap\">
                                        <div class=\"icon\"><span class=\"ion-md-calendar\"></span></div>
                                        <input type=\"text\" class=\"form-control appointment_date\" placeholder=\"Date\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <div class=\"input-wrap\">
                                        <div class=\"icon\"><span class=\"ion-ios-clock\"></span></div>
                                        <input type=\"text\" class=\"form-control appointment_time\" placeholder=\"Time\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <input type=\"submit\" value=\"Appointment\" class=\"btn btn-white py-2 px-4\">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-md-3 d-flex align-items-stretch\">
                <div class=\"consultation w-100 text-center px-4 px-md-5\">
                    <h3 class=\"mb-4\">Find A Health Expert</h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <a href=\"#\" class=\"btn-custom\">Meet our health coach</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=\"ftco-section testimony-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <span class=\"subheading mb-3\">Testimonies</span>
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class=\"row ftco-animate\">
            <div class=\"col-md-12\">
                <div class=\"carousel-testimony owl-carousel\">
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url(";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_1.jpg"), "html", null, true);
        echo ")\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Racky Henderson</p>
                                <span class=\"position\">Father</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url(";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_2.jpg"), "html", null, true);
        echo ")\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Henry Dee</p>
                                <span class=\"position\">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url(";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_3.jpg"), "html", null, true);
        echo ")\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Mark Huff</p>
                                <span class=\"position\">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url(";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_4.jpg"), "html", null, true);
        echo ")\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Rodel Golez</p>
                                <span class=\"position\">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url(";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_1.jpg"), "html", null, true);
        echo ")\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Ken Bosh</p>
                                <span class=\"position\">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <span class=\"subheading mb-3\">Teleconsultation</span>
                <h2>Comment ca marche ?</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block text-center\">
                    <div class=\"icon d-flex justify-content-center align-items-center\">
                        <span class=\"flaticon-diet\"></span>
                    </div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">1- Authentifiez-vous</h3>
                        <p>Inscrivez-vous gratuitement en moins de 2 minutes et accédez à votre espace privé. Vos données sont sécurisées et soumises au secret professionnel, tout comme vos téléconsultations.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block text-center\">
                    <div class=\"icon d-flex justify-content-center align-items-center\">
                        <span class=\"flaticon-workout\"></span>
                    </div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">2-Réservez votre Téléconsultation</h3>
                        <p>Réservez le jour et la plage horaire qui vous conviennent à partir de notre calendrier en ligne. Seules les dates et plages horaires disponibles sont activables.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block text-center\">
                    <div class=\"icon d-flex justify-content-center align-items-center\">
                        <span class=\"flaticon-diet-1\"></span>
                    </div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">3- Confirmez votre Rendez-vous </h3>
                        <p>Validez votre rendez-vous en procédant au paiement de manière 100% sécurisée et recevez votre lien d’accès à la téléconsulation.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block text-center\">
                    <div class=\"icon d-flex justify-content-center align-items-center\">
                        <span class=\"flaticon-first\"></span>
                    </div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">4-Validation</h3>
                        <p>Dès validation, un e-mail de confirmation vous sera envoyé sur votre boite électronique.Le Jour J vous serez invité à cliquer sur le lien reçu pour rejoindre la session vidéo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section ftco-no-pb bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <span class=\"subheading mb-3\">Stories</span>
                <h2>Successfull Stories</h2>
            </div>
        </div>
        <div class=\"row ftco-animate\">
            <div class=\"col-md-12\">
                <div class=\"carousel-stories owl-carousel\">
                    <div class=\"item\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-md-11\">
                                <div class=\"stories-wrap d-md-flex\">
                                    <div class=\"img\" style=\"background-image: url(";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person-1.jpg"), "html", null, true);
        echo ");\"></div>
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
                    </div>
                    <div class=\"item\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-md-11\">
                                <div class=\"stories-wrap d-md-flex\">
                                    <div class=\"img\" style=\"background-image: url(";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person-2.jpg"), "html", null, true);
        echo ");\"></div>
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
                    </div>
                    <div class=\"item\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-md-11\">
                                <div class=\"stories-wrap d-md-flex\">
                                    <div class=\"img\" style=\"background-image: url(";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person-3.jpg"), "html", null, true);
        echo ");\"></div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-intro\" style=\"background-image: url(";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_1.jpg"), "html", null, true);
        echo ");\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9\">
                <h2>We Provide Free Health Care Consultation</h2>
                <p class=\"mb-0\">Your Health is Our Top Priority with Comprehensive, Affordable Health.</p>
                <p></p>
            </div>
            <div class=\"col-md-3 d-flex align-items-center\">
                <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-white px-4 py-3\">Free Consutation</a></p>
            </div>
        </div>
    </div>
</section>

<!-- <section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
      <div class=\"col-md-7 heading-section text-center ftco-animate\">
          <span class=\"subheading\">Other Services</span>
        <h2>How it works</h2>
      </div>
    </div>
        <div class=\"row d-flex no-gutters\">
            <div class=\"col-md-6 d-flex\">
                <div class=\"img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0\" style=\"background-image:url(images/about.jpg);\">
                </div>
            </div>
            <div class=\"col-md-6 pl-md-5 py-md-5\">
                <div class=\"services-2 w-100 d-flex\">
                    <div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-account\"></span></div>
                    <div class=\"text pl-4\">
                        <h4>Follow the program</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class=\"services-2 w-100 d-flex\">
                    <div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-skills\"></span></div>
                    <div class=\"text pl-4\">
                        <h4>Work for result</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class=\"services-2 w-100 d-flex\">
                    <div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-performance\"></span></div>
                    <div class=\"text pl-4\">
                        <h4>Eat healthy Food</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class=\"services-2 w-100 d-flex\">
                    <div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-event\"></span></div>
                    <div class=\"text pl-4\">
                        <h4>Enjoy your life</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
        </div>
    </div>
    </div>
</section> -->

<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <span class=\"subheading mb-3\">Price &amp; Plans</span>
                <h2>Choose Your Perfect Plans</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"block-7\">
                    <div class=\"text-center\">
                        <h4 class=\"heading-2\">Starter</h4>
                        <span class=\"excerpt d-block\">A Beautiful Healthcare</span>
                        <span class=\"price\"><sup>\$</sup> <span class=\"number\">49</span></span>

                        <ul class=\"pricing-text mb-5\">
                            <li><span class=\"fa fa-check mr-2\"></span>20 Workouts</li>
                            <li><span class=\"fa fa-check mr-2\"></span>Meal plans in mobile</li>
                            <li><span class=\"fa fa-check mr-2\"></span>One Coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>-50% Group coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>24/7 Customer support</li>
                        </ul>

                        <a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Started</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"block-7\">
                    <div class=\"text-center\">
                        <h4 class=\"heading-2\">Standard</h4>
                        <span class=\"excerpt d-block\">A Beautiful Healthcare</span>
                        <span class=\"price\"><sup>\$</sup> <span class=\"number\">79</span></span>

                        <ul class=\"pricing-text mb-5\">
                            <li><span class=\"fa fa-check mr-2\"></span>20 Workouts</li>
                            <li><span class=\"fa fa-check mr-2\"></span>Meal plans in mobile</li>
                            <li><span class=\"fa fa-check mr-2\"></span>One Coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>-50% Group coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>24/7 Customer support</li>
                        </ul>

                        <a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Started</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"block-7\">
                    <div class=\"text-center\">
                        <h4 class=\"heading-2\">Premium</h4>
                        <span class=\"excerpt d-block\">A Beautiful Healthcare</span>
                        <span class=\"price\"><sup>\$</sup> <span class=\"number\">109</span></span>

                        <ul class=\"pricing-text mb-5\">
                            <li><span class=\"fa fa-check mr-2\"></span>20 Workouts</li>
                            <li><span class=\"fa fa-check mr-2\"></span>Meal plans in mobile</li>
                            <li><span class=\"fa fa-check mr-2\"></span>One Coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>-50% Group coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>24/7 Customer support</li>
                        </ul>

                        <a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Started</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"block-7\">
                    <div class=\"text-center\">
                        <h4 class=\"heading-2\">Platinum</h4>
                        <span class=\"excerpt d-block\">A Beautiful Healthcare</span>
                        <span class=\"price\"><sup>\$</sup> <span class=\"number\">159</span></span>

                        <ul class=\"pricing-text mb-5\">
                            <li><span class=\"fa fa-check mr-2\"></span>20 Workouts</li>
                            <li><span class=\"fa fa-check mr-2\"></span>Meal plans in mobile</li>
                            <li><span class=\"fa fa-check mr-2\"></span>One Coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>-50% Group coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>24/7 Customer support</li>
                        </ul>

                        <a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <h2>Latest news from our blog</h2>
                <span class=\"subheading\">News &amp; Blog</span>
            </div>
        </div>
        <div class=\"row d-flex\">
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url(";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_1.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">January 30, 2020</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url(";
        // line 667
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_2.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">January 30, 2020</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url(";
        // line 681
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_3.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">January 30, 2020</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
  <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-md-12\">
              <div class=\"bg-secondary w-100 rounded p-4\">
                <div class=\"row\">
                  <div class=\"col-md-7 d-flex align-items-center\">
                    <h2 class=\"mb-3 mb-sm-0\" style=\"color:black; font-size: 18px;\">Subcribe for our weekly tips</h2>
                  </div>
                  <div class=\"col-md-5 d-flex align-items-center\">
                    <form action=\"#\" class=\"subscribe-form\">
                      <div class=\"form-group d-flex\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter email address\">
                        <input type=\"submit\" value=\"Subscribe\" class=\"submit px-3\">
                      </div>
                    </form>
                  </div>
              </div>
              </div>
            </div>
          </div>
  </div>
</section> -->



<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-lg-6\">
                <div class=\"subscribe mb-5\">
                    <form action=\"#\" class=\"subscribe-form\">
                        <div class=\"form-group d-flex\">
                            <input type=\"text\" class=\"form-control rounded-left\" placeholder=\"Enter email address\">
                            <input type=\"submit\" value=\"Subscribe\" class=\"form-control submit px-3\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-5\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-8 mb-md-0 mb-4\">
                        <h2 class=\"footer-heading\"><a href=\"#\" class=\"logo\">Health<span>care</span></a></h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a href=\"#\">read more <span class=\"ion-ios-arrow-round-forward\"></span></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8 col-lg-7\">
                <div class=\"row\">
                    <div class=\"col-md-3 mb-md-0 mb-4 border-left\">
                        <h2 class=\"footer-heading\">Services</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-1 d-block\">Balance Body</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Physical Activity</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Fitness Program</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Healthy Food</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 mb-md-0 mb-4 border-left\">
                        <h2 class=\"footer-heading\">About</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-1 d-block\">Staff</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Team</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Careers</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Blog</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 mb-md-0 mb-4 border-left\">
                        <h2 class=\"footer-heading\">Resources</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-1 d-block\">Security</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Global</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Charts</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Privacy</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 mb-md-0 mb-4 border-left\">
                        <h2 class=\"footer-heading\">Social</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-1 d-block\">Facebook</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Twitter</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Instagram</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-md-6 col-lg-8\">

                <p class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
            <div class=\"col-md-6 col-lg-4 text-md-right\">
                <p class=\"mb-0 list-unstyled\">
                    <a class=\"mr-md-3\" href=\"#\">Terms</a>
                    <a class=\"mr-md-3\" href=\"#\">Privacy</a>
                    <a class=\"mr-md-3\" href=\"#\">Compliances</a>
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


";
        // line 813
        $this->displayBlock('js', $context, $blocks);
        // line 831
        echo "


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    <title>MovEat Home</title>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 813
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 814
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 815
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 816
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 817
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 818
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 819
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 820
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 825
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 826
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1075 => 829,  1071 => 828,  1066 => 826,  1062 => 825,  1058 => 824,  1054 => 823,  1050 => 822,  1046 => 821,  1042 => 820,  1038 => 819,  1034 => 818,  1030 => 817,  1026 => 816,  1022 => 815,  1017 => 814,  1007 => 813,  995 => 26,  991 => 25,  986 => 23,  982 => 22,  977 => 20,  973 => 19,  969 => 18,  964 => 16,  959 => 14,  955 => 12,  945 => 11,  934 => 6,  924 => 5,  910 => 831,  908 => 813,  773 => 681,  756 => 667,  739 => 653,  573 => 490,  549 => 469,  527 => 450,  505 => 431,  412 => 341,  395 => 327,  378 => 313,  361 => 299,  344 => 285,  238 => 182,  222 => 169,  204 => 154,  191 => 144,  178 => 134,  153 => 112,  135 => 97,  117 => 82,  61 => 28,  59 => 11,  54 => 8,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block title %}
    <title>MovEat Home</title>
    {% endblock %}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    {% block css%}
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}\">

        <link rel=\"stylesheet\" href=\"{{asset('css/animate.css')}}\">

        <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('css/owl.theme.default.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">

        <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-datepicker.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('css/jquery.timepicker.css')}}\">

        <link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    {% endblock %}

</head>
<body>

<div class=\"wrap\">
    <div class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"col d-flex align-items-center\">
                <p class=\"mb-0 phone\"><span class=\"mailus\">Phone no:</span> <a href=\"#\">+00 1234 567</a> or <span class=\"mailus\">email us:</span> <a href=\"#\">emailsample@email.com</a></p>
            </div>
            <div class=\"col d-flex justify-content-end\">
                <div class=\"social-media\">
                    <p class=\"mb-0 d-flex\">
                        <a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"><i class=\"sr-only\">Facebook</i></span></a>
                        <a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"><i class=\"sr-only\">Twitter</i></span></a>
                        <a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"><i class=\"sr-only\">Instagram</i></span></a>
                        <a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-dribbble\"><i class=\"sr-only\">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"home\">Mov<span>Eat<i class=\"fa fa-leaf\"></i></span></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"fa fa-bars\"></span> Menu
        </button>
        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\"><a href=\"home\" class=\"nav-link\">Home</a></li>
                <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">S'inscrire</a></li>
                <li class=\"nav-item\"><a href=\"program\"  class=\"nav-link\">Programmes</a>
                <ul class=\"dropdown-item-text\">
                        <li><a href=\"program\">programmes sportifs</a></li>
                        <li><a href=\"#\">programmes nutritionnels</a></li>
                        <li><a href=\"#\">programmes psychologiques</a></li>
                </ul>
                </li>
                <li class=\"nav-item\"><a href=\"astuces\" class=\"nav-link\">Astuces</a></li>
                <li class=\"nav-item\"><a href=\"rendezvous\" class=\"nav-link\">Téléconsultation</a></li>
                <li class=\"nav-item\"><a href=\"success-stories.html\" class=\"nav-link\">Stories</a></li>
                <li class=\"nav-item\"><a href=\"coachlist\" class=\"nav-link\">Coach</a></li>
                <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
                <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class=\"hero-wrap js-fullheight\">
    <div class=\"home-slider owl-carousel js-fullheight\">
        <div class=\"slider-item js-fullheight\" style=\"background-image:url({{asset('images/bg_1.jpg')}});\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center\">
                    <div class=\"col-md-7 ftco-animate\">
                        <div class=\"text w-100\">
                            <h2>Welcome to Health Coach</h2>
                            <h1 class=\"mb-4\">Get in shape faster, live your happy life</h1>
                            <p><a href=\"#\" class=\"btn btn-primary\">Learn more</a> <a href=\"#\" class=\"btn btn-white\">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"slider-item js-fullheight\" style=\"background-image:url({{asset('images/bg_2.jpg')}});\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center\">
                    <div class=\"col-md-7 ftco-animate\">
                        <div class=\"text w-100\">
                            <h2>A Fresh approach to healthy life</h2>
                            <h1 class=\"mb-4 color-white\">Unlock your potential with good nutrition</h1>
                            <p><a href=\"#\" class=\"btn btn-primary\">Learn more</a> <a href=\"#\" class=\"btn btn-white\">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"slider-item js-fullheight\" style=\"background-image:url({{asset('images/bg_3.jpg')}});\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center justify-content-end\">
                    <div class=\"col-md-6 ftco-animate\">
                        <div class=\"text w-100\">
                            <h2>Welcome Health Coach</h2>
                            <h1 class=\"mb-4\">You can transform health through habit change</h1>
                            <p><a href=\"#\" class=\"btn btn-primary\">Learn more</a> <a href=\"#\" class=\"btn btn-white\">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class=\"ftco-section ftco-services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block services-wrap text-center\">
                    <div class=\"img\" style=\"background-image: url({{asset('images/services-1.jpg)')}});\"></div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">Exercise Program</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline-primary\">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block services-wrap text-center\">
                    <div class=\"img\" style=\"background-image: url({{asset('images/services-2.jpg')}});\"></div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">Nutrition Plans</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline-primary\">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block services-wrap text-center\">
                    <div class=\"img\" style=\"background-image: url({{asset('images/services-3.jpg')}});\"></div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">Diet Program</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href=\"#\" class=\"btn btn-primary btn-outline-primary\">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section ftco-no-pt ftco-no-pb bg-light\">
    <div class=\"container\">
        <div class=\"row no-gutters\">
            <div class=\"col-md-5 p-md-5 img img-2 mt-5 mt-md-0\" style=\"background-image: url({{asset('images/coach-1.jpg)')}});\">
            </div>
            <div class=\"col-md-7 wrap-about py-4 py-md-5 ftco-animate\">
                <div class=\"heading-section mb-5\">
                    <div class=\"pl-md-5\">
                        <span class=\"subheading mb-2\">Welcome to Healthcare</span>
                        <h2 class=\"mb-2\">Hello! Health Care is a natural way of improving your health</h2>
                    </div>
                </div>
                <div class=\"pl-md-5\">
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <div class=\"founder d-flex align-items-center mt-5\">
                        <div class=\"img\" style=\"background-image: url({{asset('images/coach-1.jpg)')}});\"></div>
                        <div class=\"text pl-3\">
                            <h3 class=\"mb-0\">Cythia Hunter</h3>
                            <span class=\"position\">Personal Dietitian</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section ftco-no-pt ftco-no-pb\">
    <div class=\"container-fluid px-md-0\">
        <div class=\"row no-gutters\">
            <div class=\"col-md-3 d-flex align-items-stretch\">
                <div class=\"consultation w-100 text-center px-4 px-md-5\">
                    <h3 class=\"mb-4\">Healthcare Services</h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <a href=\"#\" class=\"btn-custom\">See Services</a>
                </div>
            </div>
            <div class=\"col-md-6 d-flex align-items-stretch\">
                <div class=\"consultation consul w-100 px-4 px-md-5\">
                    <div class=\"text-center\">
                        <h3 class=\"mb-4\">Free Consultation</h3>
                    </div>
                    <form action=\"#\" class=\"appointment-form\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"First Name\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Last Name\">
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <div class=\"form-field\">
                                        <div class=\"select-wrap\">
                                            <div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
                                            <select name=\"\" id=\"\" class=\"form-control\">
                                                <option value=\"\">Services</option>
                                                <option value=\"\">Services 1</option>
                                                <option value=\"\">Services 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <div class=\"input-wrap\">
                                        <div class=\"icon\"><span class=\"ion-md-calendar\"></span></div>
                                        <input type=\"text\" class=\"form-control appointment_date\" placeholder=\"Date\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <div class=\"input-wrap\">
                                        <div class=\"icon\"><span class=\"ion-ios-clock\"></span></div>
                                        <input type=\"text\" class=\"form-control appointment_time\" placeholder=\"Time\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"form-group\">
                                    <input type=\"submit\" value=\"Appointment\" class=\"btn btn-white py-2 px-4\">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-md-3 d-flex align-items-stretch\">
                <div class=\"consultation w-100 text-center px-4 px-md-5\">
                    <h3 class=\"mb-4\">Find A Health Expert</h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <a href=\"#\" class=\"btn-custom\">Meet our health coach</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=\"ftco-section testimony-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <span class=\"subheading mb-3\">Testimonies</span>
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class=\"row ftco-animate\">
            <div class=\"col-md-12\">
                <div class=\"carousel-testimony owl-carousel\">
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url({{asset('images/person_1.jpg')}})\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Racky Henderson</p>
                                <span class=\"position\">Father</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url({{asset('images/person_2.jpg')}})\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Henry Dee</p>
                                <span class=\"position\">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url({{asset('images/person_3.jpg')}})\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Mark Huff</p>
                                <span class=\"position\">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url({{asset('images/person_4.jpg')}})\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Rodel Golez</p>
                                <span class=\"position\">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img\" style=\"background-image: url({{asset('images/person_1.jpg')}})\">
                            </div>
                            <div class=\"text pl-4\">
                  \t<span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"fa fa-quote-left\"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Ken Bosh</p>
                                <span class=\"position\">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <span class=\"subheading mb-3\">Teleconsultation</span>
                <h2>Comment ca marche ?</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block text-center\">
                    <div class=\"icon d-flex justify-content-center align-items-center\">
                        <span class=\"flaticon-diet\"></span>
                    </div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">1- Authentifiez-vous</h3>
                        <p>Inscrivez-vous gratuitement en moins de 2 minutes et accédez à votre espace privé. Vos données sont sécurisées et soumises au secret professionnel, tout comme vos téléconsultations.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block text-center\">
                    <div class=\"icon d-flex justify-content-center align-items-center\">
                        <span class=\"flaticon-workout\"></span>
                    </div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">2-Réservez votre Téléconsultation</h3>
                        <p>Réservez le jour et la plage horaire qui vous conviennent à partir de notre calendrier en ligne. Seules les dates et plages horaires disponibles sont activables.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block text-center\">
                    <div class=\"icon d-flex justify-content-center align-items-center\">
                        <span class=\"flaticon-diet-1\"></span>
                    </div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">3- Confirmez votre Rendez-vous </h3>
                        <p>Validez votre rendez-vous en procédant au paiement de manière 100% sécurisée et recevez votre lien d’accès à la téléconsulation.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 d-flex services align-self-stretch px-4 ftco-animate\">
                <div class=\"d-block text-center\">
                    <div class=\"icon d-flex justify-content-center align-items-center\">
                        <span class=\"flaticon-first\"></span>
                    </div>
                    <div class=\"media-body p-2 mt-3\">
                        <h3 class=\"heading\">4-Validation</h3>
                        <p>Dès validation, un e-mail de confirmation vous sera envoyé sur votre boite électronique.Le Jour J vous serez invité à cliquer sur le lien reçu pour rejoindre la session vidéo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section ftco-no-pb bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <span class=\"subheading mb-3\">Stories</span>
                <h2>Successfull Stories</h2>
            </div>
        </div>
        <div class=\"row ftco-animate\">
            <div class=\"col-md-12\">
                <div class=\"carousel-stories owl-carousel\">
                    <div class=\"item\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-md-11\">
                                <div class=\"stories-wrap d-md-flex\">
                                    <div class=\"img\" style=\"background-image: url({{asset('images/person-1.jpg')}});\"></div>
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
                    </div>
                    <div class=\"item\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-md-11\">
                                <div class=\"stories-wrap d-md-flex\">
                                    <div class=\"img\" style=\"background-image: url({{asset('images/person-2.jpg')}});\"></div>
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
                    </div>
                    <div class=\"item\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-md-11\">
                                <div class=\"stories-wrap d-md-flex\">
                                    <div class=\"img\" style=\"background-image: url({{asset('images/person-3.jpg')}});\"></div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-intro\" style=\"background-image: url({{asset('images/bg_1.jpg')}});\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9\">
                <h2>We Provide Free Health Care Consultation</h2>
                <p class=\"mb-0\">Your Health is Our Top Priority with Comprehensive, Affordable Health.</p>
                <p></p>
            </div>
            <div class=\"col-md-3 d-flex align-items-center\">
                <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-white px-4 py-3\">Free Consutation</a></p>
            </div>
        </div>
    </div>
</section>

<!-- <section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
      <div class=\"col-md-7 heading-section text-center ftco-animate\">
          <span class=\"subheading\">Other Services</span>
        <h2>How it works</h2>
      </div>
    </div>
        <div class=\"row d-flex no-gutters\">
            <div class=\"col-md-6 d-flex\">
                <div class=\"img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0\" style=\"background-image:url(images/about.jpg);\">
                </div>
            </div>
            <div class=\"col-md-6 pl-md-5 py-md-5\">
                <div class=\"services-2 w-100 d-flex\">
                    <div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-account\"></span></div>
                    <div class=\"text pl-4\">
                        <h4>Follow the program</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class=\"services-2 w-100 d-flex\">
                    <div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-skills\"></span></div>
                    <div class=\"text pl-4\">
                        <h4>Work for result</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class=\"services-2 w-100 d-flex\">
                    <div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-performance\"></span></div>
                    <div class=\"text pl-4\">
                        <h4>Eat healthy Food</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class=\"services-2 w-100 d-flex\">
                    <div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-event\"></span></div>
                    <div class=\"text pl-4\">
                        <h4>Enjoy your life</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
        </div>
    </div>
    </div>
</section> -->

<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <span class=\"subheading mb-3\">Price &amp; Plans</span>
                <h2>Choose Your Perfect Plans</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"block-7\">
                    <div class=\"text-center\">
                        <h4 class=\"heading-2\">Starter</h4>
                        <span class=\"excerpt d-block\">A Beautiful Healthcare</span>
                        <span class=\"price\"><sup>\$</sup> <span class=\"number\">49</span></span>

                        <ul class=\"pricing-text mb-5\">
                            <li><span class=\"fa fa-check mr-2\"></span>20 Workouts</li>
                            <li><span class=\"fa fa-check mr-2\"></span>Meal plans in mobile</li>
                            <li><span class=\"fa fa-check mr-2\"></span>One Coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>-50% Group coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>24/7 Customer support</li>
                        </ul>

                        <a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Started</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"block-7\">
                    <div class=\"text-center\">
                        <h4 class=\"heading-2\">Standard</h4>
                        <span class=\"excerpt d-block\">A Beautiful Healthcare</span>
                        <span class=\"price\"><sup>\$</sup> <span class=\"number\">79</span></span>

                        <ul class=\"pricing-text mb-5\">
                            <li><span class=\"fa fa-check mr-2\"></span>20 Workouts</li>
                            <li><span class=\"fa fa-check mr-2\"></span>Meal plans in mobile</li>
                            <li><span class=\"fa fa-check mr-2\"></span>One Coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>-50% Group coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>24/7 Customer support</li>
                        </ul>

                        <a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Started</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"block-7\">
                    <div class=\"text-center\">
                        <h4 class=\"heading-2\">Premium</h4>
                        <span class=\"excerpt d-block\">A Beautiful Healthcare</span>
                        <span class=\"price\"><sup>\$</sup> <span class=\"number\">109</span></span>

                        <ul class=\"pricing-text mb-5\">
                            <li><span class=\"fa fa-check mr-2\"></span>20 Workouts</li>
                            <li><span class=\"fa fa-check mr-2\"></span>Meal plans in mobile</li>
                            <li><span class=\"fa fa-check mr-2\"></span>One Coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>-50% Group coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>24/7 Customer support</li>
                        </ul>

                        <a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Started</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"block-7\">
                    <div class=\"text-center\">
                        <h4 class=\"heading-2\">Platinum</h4>
                        <span class=\"excerpt d-block\">A Beautiful Healthcare</span>
                        <span class=\"price\"><sup>\$</sup> <span class=\"number\">159</span></span>

                        <ul class=\"pricing-text mb-5\">
                            <li><span class=\"fa fa-check mr-2\"></span>20 Workouts</li>
                            <li><span class=\"fa fa-check mr-2\"></span>Meal plans in mobile</li>
                            <li><span class=\"fa fa-check mr-2\"></span>One Coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>-50% Group coaching</li>
                            <li><span class=\"fa fa-check mr-2\"></span>24/7 Customer support</li>
                        </ul>

                        <a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <h2>Latest news from our blog</h2>
                <span class=\"subheading\">News &amp; Blog</span>
            </div>
        </div>
        <div class=\"row d-flex\">
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url({{asset('images/image_1.jpg')}});\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">January 30, 2020</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url({{asset('images/image_2.jpg')}});\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">January 30, 2020</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url({{asset('images/image_3.jpg')}});\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">January 30, 2020</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
  <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-md-12\">
              <div class=\"bg-secondary w-100 rounded p-4\">
                <div class=\"row\">
                  <div class=\"col-md-7 d-flex align-items-center\">
                    <h2 class=\"mb-3 mb-sm-0\" style=\"color:black; font-size: 18px;\">Subcribe for our weekly tips</h2>
                  </div>
                  <div class=\"col-md-5 d-flex align-items-center\">
                    <form action=\"#\" class=\"subscribe-form\">
                      <div class=\"form-group d-flex\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter email address\">
                        <input type=\"submit\" value=\"Subscribe\" class=\"submit px-3\">
                      </div>
                    </form>
                  </div>
              </div>
              </div>
            </div>
          </div>
  </div>
</section> -->



<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-lg-6\">
                <div class=\"subscribe mb-5\">
                    <form action=\"#\" class=\"subscribe-form\">
                        <div class=\"form-group d-flex\">
                            <input type=\"text\" class=\"form-control rounded-left\" placeholder=\"Enter email address\">
                            <input type=\"submit\" value=\"Subscribe\" class=\"form-control submit px-3\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 col-lg-5\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-8 mb-md-0 mb-4\">
                        <h2 class=\"footer-heading\"><a href=\"#\" class=\"logo\">Health<span>care</span></a></h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a href=\"#\">read more <span class=\"ion-ios-arrow-round-forward\"></span></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8 col-lg-7\">
                <div class=\"row\">
                    <div class=\"col-md-3 mb-md-0 mb-4 border-left\">
                        <h2 class=\"footer-heading\">Services</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-1 d-block\">Balance Body</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Physical Activity</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Fitness Program</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Healthy Food</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 mb-md-0 mb-4 border-left\">
                        <h2 class=\"footer-heading\">About</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-1 d-block\">Staff</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Team</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Careers</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Blog</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 mb-md-0 mb-4 border-left\">
                        <h2 class=\"footer-heading\">Resources</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-1 d-block\">Security</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Global</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Charts</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Privacy</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 mb-md-0 mb-4 border-left\">
                        <h2 class=\"footer-heading\">Social</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-1 d-block\">Facebook</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Twitter</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Instagram</a></li>
                            <li><a href=\"#\" class=\"py-1 d-block\">Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-md-6 col-lg-8\">

                <p class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
            <div class=\"col-md-6 col-lg-4 text-md-right\">
                <p class=\"mb-0 list-unstyled\">
                    <a class=\"mr-md-3\" href=\"#\">Terms</a>
                    <a class=\"mr-md-3\" href=\"#\">Privacy</a>
                    <a class=\"mr-md-3\" href=\"#\">Compliances</a>
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


{% block js %}
    <script src=\"{{asset('js/jquery.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery-migrate-3.0.1.min.js')}}\"></script>
    <script src=\"{{asset('js/popper.min.js')}}\"></script>
    <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery.easing.1.3.js')}}\"></script>
    <script src=\"{{asset('js/jquery.waypoints.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery.stellar.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery.animateNumber.min.js')}}\"></script>
    <script src=\"{{asset('js/bootstrap-datepicker.js')}}\"></script>
    <script src=\"{{asset('js/jquery.timepicker.min.js')}}\"></script>
    <script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{asset('js/scrollax.min.js')}}\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"{{asset('js/google-map.js')}}\"></script>
    <script src=\"{{asset('js/main.js')}}\"></script>
{% endblock %}



</body>
</html>", "home/index.html.twig", "C:\\Users\\Yassine Harbaoui\\Documents\\GitHub\\pushing\\moveat\\templates\\home\\index.html.twig");
    }
}
