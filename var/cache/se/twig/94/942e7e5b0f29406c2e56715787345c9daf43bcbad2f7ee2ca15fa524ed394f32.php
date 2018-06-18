<?php

/* app/sidebar.html.twig */
class __TwigTemplate_8c721588616a7494559ece74f58660e78992dc106e6a8b073e8fa5444e8fb3a9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/sidebar.html.twig"));

        // line 1
        echo "<div class=\"col-md-3 left_col\">
    <div class=\"left_col scroll-view\">
        <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\" class=\"site_title\"><i class=\"fa fa-rocket\"></i> <span>LazyPimCrm</span></a>
        </div>

        <div class=\"clearfix\"></div>

        <!-- menu profile quick info -->
        <div class=\"profile\">
            <div class=\"profile_info\">
                <span>Welcome ";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array()), "username", array())) : ("")), "html", null, true);
        echo " </span>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <div class=\"clearfix\"></div>

        <!-- sidebar menu -->
        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
            <div class=\"menu_section\">
                <h3>Menu</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\"><i class=\"fa fa-home\"></i> Dashboard</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nelmio_api_doc_index");
        echo "\"><i class=\"fa fa-flask\"></i> REST API</a></li>
                </ul>
            </div>
            ";
        // line 29
        echo "            ";
        // line 30
        echo "            ";
        // line 31
        echo "            ";
        // line 32
        echo "            ";
        // line 33
        echo "            ";
        // line 34
        echo "            ";
        // line 35
        echo "            ";
        // line 36
        echo "            ";
        // line 37
        echo "            <div class=\"menu_section\">
                <h3>CRM</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm_invoice_invoice_list");
        echo "\"><i class=\"fa fa-product-hunt\"></i> Invoice</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-product-hunt\"></i> Templates</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-product-hunt\"></i> NumberRange</a></li>
                    <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_individual_list");
        echo "\"><i class=\"fa fa-product-hunt\"></i> Directory</a></li>
                </ul>
            </div>
            <div class=\"menu_section\">
                <h3>USERS</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_list");
        echo "\"><i class=\"fa fa-product-hunt\"></i> User</a></li>
                </ul>
            </div>

            <div class=\"menu_section\">
                <h3>PIM</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_center_list");
        echo "\"><i class=\"fa fa-users\"></i>Center Manager</a></li>
                </ul>
            </div>


            <!-- <div class=\"menu_section\">
                <h3>Super Administrator</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_index");
        echo "\"><i class=\"fa fa-users\"></i> Comapny Manager</a></li>
                    <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_private_list");
        echo "\"><i class=\"fa fa-users\"></i> Private Space Manager</a></li>
                    <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_list");
        echo "\"><i class=\"fa fa-users\"></i> Common Space Manager</a></li>
                </ul>
            </div> -->

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class=\"sidebar-footer hidden-small\">
            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "app/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 84,  135 => 66,  131 => 65,  127 => 64,  116 => 56,  106 => 49,  97 => 43,  91 => 40,  86 => 37,  84 => 36,  82 => 35,  80 => 34,  78 => 33,  76 => 32,  74 => 31,  72 => 30,  70 => 29,  64 => 25,  60 => 24,  45 => 12,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3 left_col\">
    <div class=\"left_col scroll-view\">
        <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"{{ path('app_dashboard') }}\" class=\"site_title\"><i class=\"fa fa-rocket\"></i> <span>LazyPimCrm</span></a>
        </div>

        <div class=\"clearfix\"></div>

        <!-- menu profile quick info -->
        <div class=\"profile\">
            <div class=\"profile_info\">
                <span>Welcome {{ app.user ? app.user.username }} </span>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <div class=\"clearfix\"></div>

        <!-- sidebar menu -->
        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
            <div class=\"menu_section\">
                <h3>Menu</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"{{ path('app_dashboard') }}\"><i class=\"fa fa-home\"></i> Dashboard</a></li>
                    <li><a href=\"{{ path('nelmio_api_doc_index') }}\"><i class=\"fa fa-flask\"></i> REST API</a></li>
                </ul>
            </div>
            {#<div class=\"menu_section\">#}
            {#<h3>PIM</h3>#}
            {#<ul class=\"nav side-menu\">#}
            {#<li><a href=\"{{ path('pim_attribute_set_backend_list') }}\"><i class=\"fa fa-product-hunt\"></i> AttributeSets</a></li>#}
            {#<li><a href=\"{{ path('pim_category_backend_list') }}\"><i class=\"fa fa-product-hunt\"></i> Categories</a></li>#}
            {#<li><a href=\"{{ path('pim_tag_backend_list') }}\"><i class=\"fa fa-product-hunt\"></i> Tags</a></li>#}
            {#<li><a href=\"{{ path('pim_product_backend_list') }}\"><i class=\"fa fa-product-hunt\"></i> Products</a></li>#}
            {#</ul>#}
            {#</div>#}
            <div class=\"menu_section\">
                <h3>CRM</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"{{ path('crm_invoice_invoice_list') }}\"><i class=\"fa fa-product-hunt\"></i> Invoice</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-product-hunt\"></i> Templates</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-product-hunt\"></i> NumberRange</a></li>
                    <li><a href=\"{{path('app_individual_list')}}\"><i class=\"fa fa-product-hunt\"></i> Directory</a></li>
                </ul>
            </div>
            <div class=\"menu_section\">
                <h3>USERS</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"{{ path('app_user_list') }}\"><i class=\"fa fa-product-hunt\"></i> User</a></li>
                </ul>
            </div>

            <div class=\"menu_section\">
                <h3>PIM</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"{{ path('app_center_list') }}\"><i class=\"fa fa-users\"></i>Center Manager</a></li>
                </ul>
            </div>


            <!-- <div class=\"menu_section\">
                <h3>Super Administrator</h3>
                <ul class=\"nav side-menu\">
                    <li><a href=\"{{ path('company_index') }}\"><i class=\"fa fa-users\"></i> Comapny Manager</a></li>
                    <li><a href=\"{{ path('app_private_list') }}\"><i class=\"fa fa-users\"></i> Private Space Manager</a></li>
                    <li><a href=\"{{ path('app_common_list') }}\"><i class=\"fa fa-users\"></i> Common Space Manager</a></li>
                </ul>
            </div> -->

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class=\"sidebar-footer hidden-small\">
            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"{{ path('fos_user_security_logout') }}\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>", "app/sidebar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/xintegro/app/Resources/views/app/sidebar.html.twig");
    }
}
