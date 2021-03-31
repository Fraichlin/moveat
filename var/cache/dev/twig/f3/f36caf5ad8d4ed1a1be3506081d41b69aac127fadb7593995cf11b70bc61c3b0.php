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

/* basic/basictable.html.twig */
class __TwigTemplate_de5a94e44474b77ac6b5aa09b24aecf1509018c92564239b974d9b85f580006a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basic/basictable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basic/basictable.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "basic/basictable.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "
    <!-- Favicons -->
    <link href=\"imgback/favicon.png\" rel=\"icon\">
    <link href=\"imgback/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    ";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 21
        echo "


</head>

<body>
<section id=\"container\">

    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>
        <!--logo start-->
        <a href=\"index.html\" class=\"logo\"><b>DASH<span>IO</span></b></a>
        <!--logo end-->
        <div class=\"nav notify-row\" id=\"top_menu\">
            <!--  notification start -->
            <ul class=\"nav top-menu\">
                <!-- settings start -->
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-tasks\"></i>
                        <span class=\"badge bg-theme\">4</span>
                    </a>
                    <ul class=\"dropdown-menu extended tasks-bar\">
                        <div class=\"notify-arrow notify-arrow-green\"></div>
                        <li>
                            <p class=\"green\">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Dashio Admin Panel</div>
                                    <div class=\"percent\">40%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                        <span class=\"sr-only\">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Database Update</div>
                                    <div class=\"percent\">60%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                        <span class=\"sr-only\">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Product Development</div>
                                    <div class=\"percent\">80%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                        <span class=\"sr-only\">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Payments Sent</div>
                                    <div class=\"percent\">70%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
                                        <span class=\"sr-only\">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"external\">
                            <a href=\"#\">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id=\"header_inbox_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"badge bg-theme\">5</span>
                    </a>
                    <ul class=\"dropdown-menu extended inbox\">
                        <div class=\"notify-arrow notify-arrow-green\"></div>
                        <li>
                            <p class=\"green\">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"imgback/ui-zac.jpg\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Zac Snider</span>
                  <span class=\"time\">Just now</span>
                  </span>
                                <span class=\"message\">
                  Hi mate, how is everything?
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"imgback/ui-divya.jpg\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Divya Manian</span>
                  <span class=\"time\">40 mins.</span>
                  </span>
                                <span class=\"message\">
                  Hi, I need your help with this.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"imgback/ui-danro.jpg\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Dan Rogers</span>
                  <span class=\"time\">2 hrs.</span>
                  </span>
                                <span class=\"message\">
                  Love your new Dashboard.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"imgback/ui-sherman.jpg\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Dj Sherman</span>
                  <span class=\"time\">4 hrs.</span>
                  </span>
                                <span class=\"message\">
                  Please, answer asap.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">See all messages
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id=\"header_notification_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"badge bg-warning\">7</span>
                    </a>
                    <ul class=\"dropdown-menu extended notification\">
                        <div class=\"notify-arrow notify-arrow-yellow\"></div>
                        <li>
                            <p class=\"yellow\">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span> Server Overloaded.
                                <span class=\"small italic\">4 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-warning\"><i class=\"fa fa-bell\"></i></span> Memory #2 Not Responding.
                                <span class=\"small italic\">30 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span> Disk Space Reached 85%.
                                <span class=\"small italic\">2 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-success\"><i class=\"fa fa-plus\"></i></span> New User Registered.
                                <span class=\"small italic\">3 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li>
                    <a class=\"logout\" href=\"login.html\">Logout</a>
                </li>
            </ul>
        </div>
    </header>

    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                <p class=\"centered\">
                    <a href=\"profile.html\"><img src=\"imgback/ui-sam.jpg\" class=\"img-circle\" width=\"80\"></a>
                </p>
                <h5 class=\"centered\">Sam Soffes</h5>
                <li class=\"mt\">
                    <a href=\"index.html\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"general.html\">General</a>
                        </li>
                        <li>
                            <a href=\"buttons.html\">Buttons</a>
                        </li>
                        <li>
                            <a href=\"panels.html\">Panels</a>
                        </li>
                        <li>
                            <a href=\"font_awesome.html\">Font Awesome</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-cogs\"></i>
                        <span>Components</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"grids.html\">Grids</a>
                        </li>
                        <li>
                            <a href=\"calendar.html\">Calendar</a>
                        </li>
                        <li>
                            <a href=\"gallery.html\">Gallery</a>
                        </li>
                        <li>
                            <a href=\"todo_list.html\">Todo List</a>
                        </li>
                        <li>
                            <a href=\"dropzone.html\">Dropzone File Upload</a>
                        </li>
                        <li>
                            <a href=\"inline_editor.html\">Inline Editor</a>
                        </li>
                        <li>
                            <a href=\"file_upload.html\">Multiple File Upload</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-book\"></i>
                        <span>Extra Pages</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"blank.html\">Blank Page</a>
                        </li>
                        <li>
                            <a href=\"login.html\">Login</a>
                        </li>
                        <li>
                            <a href=\"lock_screen.html\">Lock Screen</a>
                        </li>
                        <li>
                            <a href=\"profile.html\">Profile</a>
                        </li>
                        <li>
                            <a href=\"invoice.html\">Invoice</a>
                        </li>
                        <li>
                            <a href=\"pricing_table.html\">Pricing Table</a>
                        </li>
                        <li>
                            <a href=\"faq.html\">FAQ</a>
                        </li>
                        <li>
                            <a href=\"404.html\">404 Error</a>
                        </li>
                        <li>
                            <a href=\"500.html\">500 Error</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-tasks\"></i>
                        <span>Forms</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"form_component.html\">Form Components</a>
                        </li>
                        <li>
                            <a href=\"advanced_form_components.html\">Advanced Components</a>
                        </li>
                        <li>
                            <a href=\"form_validation.html\">Form Validation</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a class=\"active\" href=\"javascript:;\">
                        <i class=\"fa fa-th\"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class=\"sub\">
                        <li class=\"active\">
                            <a href=\"basic_table.html\">Basic Table</a>
                        </li>
                        <li>
                            <a href=\"responsive_table.html\">Responsive Table</a>
                        </li>
                        <li>
                            <a href=\"advanced_table.html\">Advanced Table</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"inbox.html\">
                        <i class=\"fa fa-envelope\"></i>
                        <span>Mail </span>
                        <span class=\"label label-theme pull-right mail-info\">2</span>
                    </a>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\" fa fa-bar-chart-o\"></i>
                        <span>Charts</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"morris.html\">Morris</a>
                        </li>
                        <li>
                            <a href=\"chartjs.html\">Chartjs</a>
                        </li>
                        <li>
                            <a href=\"flot_chart.html\">Flot Charts</a>
                        </li>
                        <li>
                            <a href=\"xchart.html\">xChart</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-comments-o\"></i>
                        <span>Chat Room</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"lobby.html\">Lobby</a>
                        </li>
                        <li>
                            <a href=\"chat_room.html\"> Chat Room</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"google_maps.html\">
                        <i class=\"fa fa-map-marker\"></i>
                        <span>Google Maps </span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id=\"main-content\">
        <section class=\"wrapper\">
            <h3><i class=\"fa fa-angle-right\"></i> Basic Table Examples</h3>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"content-panel\">
                        <h4><i class=\"fa fa-angle-right\"></i> Basic Table</h4>
                        <hr>
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /col-md-12 -->
                <div class=\"col-md-12 mt\">
                    <div class=\"content-panel\">
                        <table class=\"table table-hover\">
                            <h4><i class=\"fa fa-angle-right\"></i> Hover Table</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Simon</td>
                                <td>Mosa</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- row -->
            <div class=\"row mt\">
                <div class=\"col-md-12\">
                    <div class=\"content-panel\">
                        <table class=\"table table-striped table-advance table-hover\">
                            <h4><i class=\"fa fa-angle-right\"></i> Advanced Table</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class=\"fa fa-bullhorn\"></i> Company</th>
                                <th class=\"hidden-phone\"><i class=\"fa fa-question-circle\"></i> Descrition</th>
                                <th><i class=\"fa fa-bookmark\"></i> Profit</th>
                                <th><i class=\" fa fa-edit\"></i> Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">Company Ltd</a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>12000.00\$ </td>
                                <td><span class=\"label label-info label-mini\">Due</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">
                                        Dashio co
                                    </a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>17900.00\$ </td>
                                <td><span class=\"label label-warning label-mini\">Due</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">
                                        Another Co
                                    </a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>14400.00\$ </td>
                                <td><span class=\"label label-success label-mini\">Paid</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">Dashio ext</a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>22000.50\$ </td>
                                <td><span class=\"label label-success label-mini\">Paid</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">Total Ltd</a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>12120.00\$ </td>
                                <td><span class=\"label label-warning label-mini\">Due</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- /row -->
        </section>
    </section>

</section>


</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <title>basic table</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cssback/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cssback/style-responsive.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "basic/basictable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  711 => 19,  706 => 18,  696 => 17,  677 => 11,  91 => 21,  89 => 17,  82 => 12,  80 => 11,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}
{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    {% block title %} <title>basic table</title> {% endblock %}

    <!-- Favicons -->
    <link href=\"imgback/favicon.png\" rel=\"icon\">
    <link href=\"imgback/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    {% block css %}
        <link rel=\"stylesheet\" href=\"{{asset('cssback/style.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('cssback/style-responsive.css')}}\">
{% endblock %}



</head>

<body>
<section id=\"container\">

    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>
        <!--logo start-->
        <a href=\"index.html\" class=\"logo\"><b>DASH<span>IO</span></b></a>
        <!--logo end-->
        <div class=\"nav notify-row\" id=\"top_menu\">
            <!--  notification start -->
            <ul class=\"nav top-menu\">
                <!-- settings start -->
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-tasks\"></i>
                        <span class=\"badge bg-theme\">4</span>
                    </a>
                    <ul class=\"dropdown-menu extended tasks-bar\">
                        <div class=\"notify-arrow notify-arrow-green\"></div>
                        <li>
                            <p class=\"green\">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Dashio Admin Panel</div>
                                    <div class=\"percent\">40%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                        <span class=\"sr-only\">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Database Update</div>
                                    <div class=\"percent\">60%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                        <span class=\"sr-only\">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Product Development</div>
                                    <div class=\"percent\">80%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                        <span class=\"sr-only\">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Payments Sent</div>
                                    <div class=\"percent\">70%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
                                        <span class=\"sr-only\">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"external\">
                            <a href=\"#\">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id=\"header_inbox_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"badge bg-theme\">5</span>
                    </a>
                    <ul class=\"dropdown-menu extended inbox\">
                        <div class=\"notify-arrow notify-arrow-green\"></div>
                        <li>
                            <p class=\"green\">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"imgback/ui-zac.jpg\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Zac Snider</span>
                  <span class=\"time\">Just now</span>
                  </span>
                                <span class=\"message\">
                  Hi mate, how is everything?
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"imgback/ui-divya.jpg\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Divya Manian</span>
                  <span class=\"time\">40 mins.</span>
                  </span>
                                <span class=\"message\">
                  Hi, I need your help with this.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"imgback/ui-danro.jpg\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Dan Rogers</span>
                  <span class=\"time\">2 hrs.</span>
                  </span>
                                <span class=\"message\">
                  Love your new Dashboard.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"imgback/ui-sherman.jpg\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Dj Sherman</span>
                  <span class=\"time\">4 hrs.</span>
                  </span>
                                <span class=\"message\">
                  Please, answer asap.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">See all messages
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id=\"header_notification_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"badge bg-warning\">7</span>
                    </a>
                    <ul class=\"dropdown-menu extended notification\">
                        <div class=\"notify-arrow notify-arrow-yellow\"></div>
                        <li>
                            <p class=\"yellow\">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span> Server Overloaded.
                                <span class=\"small italic\">4 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-warning\"><i class=\"fa fa-bell\"></i></span> Memory #2 Not Responding.
                                <span class=\"small italic\">30 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span> Disk Space Reached 85%.
                                <span class=\"small italic\">2 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-success\"><i class=\"fa fa-plus\"></i></span> New User Registered.
                                <span class=\"small italic\">3 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li>
                    <a class=\"logout\" href=\"login.html\">Logout</a>
                </li>
            </ul>
        </div>
    </header>

    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                <p class=\"centered\">
                    <a href=\"profile.html\"><img src=\"imgback/ui-sam.jpg\" class=\"img-circle\" width=\"80\"></a>
                </p>
                <h5 class=\"centered\">Sam Soffes</h5>
                <li class=\"mt\">
                    <a href=\"index.html\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"general.html\">General</a>
                        </li>
                        <li>
                            <a href=\"buttons.html\">Buttons</a>
                        </li>
                        <li>
                            <a href=\"panels.html\">Panels</a>
                        </li>
                        <li>
                            <a href=\"font_awesome.html\">Font Awesome</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-cogs\"></i>
                        <span>Components</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"grids.html\">Grids</a>
                        </li>
                        <li>
                            <a href=\"calendar.html\">Calendar</a>
                        </li>
                        <li>
                            <a href=\"gallery.html\">Gallery</a>
                        </li>
                        <li>
                            <a href=\"todo_list.html\">Todo List</a>
                        </li>
                        <li>
                            <a href=\"dropzone.html\">Dropzone File Upload</a>
                        </li>
                        <li>
                            <a href=\"inline_editor.html\">Inline Editor</a>
                        </li>
                        <li>
                            <a href=\"file_upload.html\">Multiple File Upload</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-book\"></i>
                        <span>Extra Pages</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"blank.html\">Blank Page</a>
                        </li>
                        <li>
                            <a href=\"login.html\">Login</a>
                        </li>
                        <li>
                            <a href=\"lock_screen.html\">Lock Screen</a>
                        </li>
                        <li>
                            <a href=\"profile.html\">Profile</a>
                        </li>
                        <li>
                            <a href=\"invoice.html\">Invoice</a>
                        </li>
                        <li>
                            <a href=\"pricing_table.html\">Pricing Table</a>
                        </li>
                        <li>
                            <a href=\"faq.html\">FAQ</a>
                        </li>
                        <li>
                            <a href=\"404.html\">404 Error</a>
                        </li>
                        <li>
                            <a href=\"500.html\">500 Error</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-tasks\"></i>
                        <span>Forms</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"form_component.html\">Form Components</a>
                        </li>
                        <li>
                            <a href=\"advanced_form_components.html\">Advanced Components</a>
                        </li>
                        <li>
                            <a href=\"form_validation.html\">Form Validation</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a class=\"active\" href=\"javascript:;\">
                        <i class=\"fa fa-th\"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class=\"sub\">
                        <li class=\"active\">
                            <a href=\"basic_table.html\">Basic Table</a>
                        </li>
                        <li>
                            <a href=\"responsive_table.html\">Responsive Table</a>
                        </li>
                        <li>
                            <a href=\"advanced_table.html\">Advanced Table</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"inbox.html\">
                        <i class=\"fa fa-envelope\"></i>
                        <span>Mail </span>
                        <span class=\"label label-theme pull-right mail-info\">2</span>
                    </a>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\" fa fa-bar-chart-o\"></i>
                        <span>Charts</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"morris.html\">Morris</a>
                        </li>
                        <li>
                            <a href=\"chartjs.html\">Chartjs</a>
                        </li>
                        <li>
                            <a href=\"flot_chart.html\">Flot Charts</a>
                        </li>
                        <li>
                            <a href=\"xchart.html\">xChart</a>
                        </li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-comments-o\"></i>
                        <span>Chat Room</span>
                    </a>
                    <ul class=\"sub\">
                        <li>
                            <a href=\"lobby.html\">Lobby</a>
                        </li>
                        <li>
                            <a href=\"chat_room.html\"> Chat Room</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"google_maps.html\">
                        <i class=\"fa fa-map-marker\"></i>
                        <span>Google Maps </span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id=\"main-content\">
        <section class=\"wrapper\">
            <h3><i class=\"fa fa-angle-right\"></i> Basic Table Examples</h3>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"content-panel\">
                        <h4><i class=\"fa fa-angle-right\"></i> Basic Table</h4>
                        <hr>
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /col-md-12 -->
                <div class=\"col-md-12 mt\">
                    <div class=\"content-panel\">
                        <table class=\"table table-hover\">
                            <h4><i class=\"fa fa-angle-right\"></i> Hover Table</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Simon</td>
                                <td>Mosa</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- row -->
            <div class=\"row mt\">
                <div class=\"col-md-12\">
                    <div class=\"content-panel\">
                        <table class=\"table table-striped table-advance table-hover\">
                            <h4><i class=\"fa fa-angle-right\"></i> Advanced Table</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class=\"fa fa-bullhorn\"></i> Company</th>
                                <th class=\"hidden-phone\"><i class=\"fa fa-question-circle\"></i> Descrition</th>
                                <th><i class=\"fa fa-bookmark\"></i> Profit</th>
                                <th><i class=\" fa fa-edit\"></i> Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">Company Ltd</a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>12000.00\$ </td>
                                <td><span class=\"label label-info label-mini\">Due</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">
                                        Dashio co
                                    </a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>17900.00\$ </td>
                                <td><span class=\"label label-warning label-mini\">Due</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">
                                        Another Co
                                    </a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>14400.00\$ </td>
                                <td><span class=\"label label-success label-mini\">Paid</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">Dashio ext</a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>22000.50\$ </td>
                                <td><span class=\"label label-success label-mini\">Paid</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=\"basic_table.html#\">Total Ltd</a>
                                </td>
                                <td class=\"hidden-phone\">Lorem Ipsum dolor</td>
                                <td>12120.00\$ </td>
                                <td><span class=\"label label-warning label-mini\">Due</span></td>
                                <td>
                                    <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                    <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                    <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- /row -->
        </section>
    </section>

</section>


</body>

</html>
{% endblock %}
", "basic/basictable.html.twig", "C:\\Users\\Yassine Harbaoui\\Documents\\GitHub\\moveat\\templates\\basic\\basictable.html.twig");
    }
}
