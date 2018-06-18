<?php

/* AppBundle:User:list.html.twig */
class __TwigTemplate_397864620b6138c5c11787daec1b09eff7d047fd10ba52fcf01838dae268217f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("app/base.html.twig", "AppBundle:User:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'top_content_header' => array($this, 'block_top_content_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Backend - User Manager
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "    ";
        $this->displayBlock('top_content_header', $context, $blocks);
        // line 8
        echo "    <div class=\"setcontainer\">
        <h2>User Manager</h2>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <form class=\"well\" method=\"get\" action=\"\">
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'rest');
        echo "
                    <p>
                        <button class=\"btn btn-primary\" type=\"submit\" name=\"filter_action\" value=\"filter\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("btn.filter", array(), "messages");
        // line 16
        echo "</button>
                        <button id=\"reset\" class=\"btn btn-danger\" type=\"submit\" name=\"filter_action\"
                                value=\"reset\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("btn.reset", array(), "messages");
        echo "</button>
                    </p>
                </form>
            </div>
        </div>
        <div style=\"font-size: 20px;margin-bottom: 20px;\" class=\"pull-right\">
            <span class=\"label label-success label-as-badge\">count: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 24, $this->source); })()), "getTotalItemCount", array()), "html", null, true);
        echo "</span>
            ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            echo "\" class=\"btn btn-primary pull-right\" style=\"color: #000;\"> Create New User</a>
            ";
        }
        // line 28
        echo "        </div>

        <table id=\"datatable\" class=\"table table-striped table-bordered\">
            <thead>
            <tr>
                <th ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 33, $this->source); })()), "isSorted", array(0 => "a.id"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 33, $this->source); })()), "Id", "a.id");
        echo "</th>
                <th ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 34, $this->source); })()), "isSorted", array(0 => "a.email"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 34, $this->source); })()), "Email", "a.email");
        echo "</th>
                <th ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 35, $this->source); })()), "isSorted", array(0 => "a.username"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 35, $this->source); })()), "Username", "a.username");
        echo "</th>
                <th ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 36, $this->source); })()), "isSorted", array(0 => "a.firstName"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 36, $this->source); })()), "Firstname", "a.firstName");
        echo "</th>
                <th ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 37, $this->source); })()), "isSorted", array(0 => "a.lastName"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 37, $this->source); })()), "Lastname", "a.lastName");
        echo "</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "                <tr>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-danger dropdown-toggle btn-sm\" type=\"button\" id=\"dropdownMenu1\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                options
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li>
                                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </tbody>
        </table>
        <div class=\"navigation\">
            ";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 71, $this->source); })()));
        echo "
        </div>
    </div>
    <style>
        th.sorted > a.desc:before {
            content: \"\\2191\";
            padding-right: 3px;
            margin-top: -5px;
            font-size: 18px;
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        th.sorted > a.asc:before {
            content: \"\\2193\";
            padding-right: 3px;
            margin-top: -5px;
            font-size: 18px;
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_top_content_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content_header"));

        // line 7
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 7,  263 => 6,  228 => 71,  223 => 68,  210 => 61,  204 => 58,  191 => 48,  187 => 47,  183 => 46,  179 => 45,  175 => 44,  172 => 43,  168 => 42,  156 => 37,  148 => 36,  140 => 35,  132 => 34,  124 => 33,  117 => 28,  111 => 26,  109 => 25,  105 => 24,  96 => 18,  92 => 16,  90 => 15,  85 => 13,  78 => 8,  75 => 6,  66 => 5,  55 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"app/base.html.twig\" %}
{% block title %}
    Backend - User Manager
{% endblock %}
{% block page_content %}
    {% block top_content_header %}
    {% endblock %}
    <div class=\"setcontainer\">
        <h2>User Manager</h2>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <form class=\"well\" method=\"get\" action=\"\">
                    {{ form_rest(form) }}
                    <p>
                        <button class=\"btn btn-primary\" type=\"submit\" name=\"filter_action\" value=\"filter\">{% trans %}
                            btn.filter{% endtrans %}</button>
                        <button id=\"reset\" class=\"btn btn-danger\" type=\"submit\" name=\"filter_action\"
                                value=\"reset\">{% trans %}btn.reset{% endtrans %}</button>
                    </p>
                </form>
            </div>
        </div>
        <div style=\"font-size: 20px;margin-bottom: 20px;\" class=\"pull-right\">
            <span class=\"label label-success label-as-badge\">count: {{ pagination.getTotalItemCount }}</span>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary pull-right\" style=\"color: #000;\"> Create New User</a>
            {% endif %}
        </div>

        <table id=\"datatable\" class=\"table table-striped table-bordered\">
            <thead>
            <tr>
                <th {% if pagination.isSorted('a.id') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>
                <th {% if pagination.isSorted('a.email') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Email', 'a.email') }}</th>
                <th {% if pagination.isSorted('a.username') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Username', 'a.username') }}</th>
                <th {% if pagination.isSorted('a.firstName') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Firstname', 'a.firstName') }}</th>
                <th {% if pagination.isSorted('a.lastName') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Lastname', 'a.lastName') }}</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for user in pagination %}
                <tr>
                    <td>{{ user.id }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.username }}</td>
                    <td>{{ user.firstName }}</td>
                    <td>{{ user.lastName }}</td>
                    <td>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-danger dropdown-toggle btn-sm\" type=\"button\" id=\"dropdownMenu1\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                options
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                <li>
                                    <a href=\"{{ path('app_user_edit', { 'id': user.id }) }}\">edit</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('app_user_show', { 'id': user.id }) }}\">show</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
    <style>
        th.sorted > a.desc:before {
            content: \"\\2191\";
            padding-right: 3px;
            margin-top: -5px;
            font-size: 18px;
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        th.sorted > a.asc:before {
            content: \"\\2193\";
            padding-right: 3px;
            margin-top: -5px;
            font-size: 18px;
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
{% endblock %}", "AppBundle:User:list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/xintegro/src/AppBundle/Resources/views/User/list.html.twig");
    }
}
