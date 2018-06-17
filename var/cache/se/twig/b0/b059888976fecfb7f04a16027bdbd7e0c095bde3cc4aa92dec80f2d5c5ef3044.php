<?php

/* app/flashmessages.html.twig */
class __TwigTemplate_6660cd8c80e78cc7df771ffb050d10ae57dc859cc79f3bec610e20c3b9274bf2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/flashmessages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app/flashmessages.html.twig"));

        // line 1
        $context["messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 2
        if ((twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 2, $this->source); })())) > 0)) {
            // line 3
            echo "    <div class=\"setcontainer alert alert-danger\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 6
                echo "            <p>";
                echo $context["flashMessage"];
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
";
        }
        // line 10
        $context["messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method");
        // line 11
        if ((twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            echo "    <div class=\"setcontainer  alert alert-info\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 15
                echo "            <p>";
                echo $context["flashMessage"];
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>
";
        }
        // line 19
        $context["messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method");
        // line 20
        if ((twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->source); })())) > 0)) {
            // line 21
            echo "    <div class=\"setcontainer  alert alert-success\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 24
                echo "            <p>";
                echo $context["flashMessage"];
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "app/flashmessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  91 => 24,  87 => 23,  83 => 21,  81 => 20,  79 => 19,  75 => 17,  66 => 15,  62 => 14,  58 => 12,  56 => 11,  54 => 10,  50 => 8,  41 => 6,  37 => 5,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set messages = app.session.flashbag.get('error') %}
{% if messages|length > 0 %}
    <div class=\"setcontainer alert alert-danger\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
        {% for flashMessage in messages %}
            <p>{{ flashMessage|raw }}</p>
        {% endfor %}
    </div>
{% endif %}
{% set messages = app.session.flashbag.get('info') %}
{% if messages|length > 0 %}
    <div class=\"setcontainer  alert alert-info\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
        {% for flashMessage in messages %}
            <p>{{ flashMessage|raw }}</p>
        {% endfor %}
    </div>
{% endif %}
{% set messages = app.session.flashbag.get('success') %}
{% if messages|length > 0 %}
    <div class=\"setcontainer  alert alert-success\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
        {% for flashMessage in messages %}
            <p>{{ flashMessage|raw }}</p>
        {% endfor %}
    </div>
{% endif %}", "app/flashmessages.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/xintegro/app/Resources/views/app/flashmessages.html.twig");
    }
}
