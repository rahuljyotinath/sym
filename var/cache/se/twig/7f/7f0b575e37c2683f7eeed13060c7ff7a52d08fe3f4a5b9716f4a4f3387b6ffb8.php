<?php

/* app/topnav.html.twig */
class __TwigTemplate_340bd60fb4756e63429b1782ef0dab198c237ba850a51534d4efd8e160d0f587 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/topnav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/topnav.html.twig"));

        // line 1
        echo "<!-- top navigation -->
<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav class=\"\">
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "
                        <span class=\" fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                        <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\"> Profile</a></li>
                        <li>
                            <a href=\"#\">
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href=\"#\">Help</a></li>
                        <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                    </ul>
                </li>
                
                <li role=\"presentation\" class=\"dropdown\">
                    <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fa fa-envelope\"></i>
                        <span class=\"badge bg-green\">8</span>
                    </a>
                    <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <div class=\"text-center\">
                                <a>
                                    <strong>Alerts</strong>
                                    <i class=\"fa fa-angle-right\"></i>
                                </a>
                            </div>                            
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "app/topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 70,  103 => 58,  88 => 46,  73 => 34,  58 => 22,  48 => 15,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- top navigation -->
<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav class=\"\">
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        {{ app.user.username }}
                        <span class=\" fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                        <li><a href=\"{{ path('app_profile')}}\"> Profile</a></li>
                        <li>
                            <a href=\"#\">
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href=\"#\">Help</a></li>
                        <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                    </ul>
                </li>
                
                <li role=\"presentation\" class=\"dropdown\">
                    <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fa fa-envelope\"></i>
                        <span class=\"badge bg-green\">8</span>
                    </a>
                    <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"{{ asset('assets/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"{{ asset('assets/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"{{ asset('assets/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"{{ asset('assets/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <div class=\"text-center\">
                                <a>
                                    <strong>Alerts</strong>
                                    <i class=\"fa fa-angle-right\"></i>
                                </a>
                            </div>                            
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->", "app/topnav.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/xintegro/app/Resources/views/app/topnav.html.twig");
    }
}
