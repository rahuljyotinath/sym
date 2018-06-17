<?php

/* FMElfinderBundle:Form:elfinder_widget.html.twig */
class __TwigTemplate_a8e91bea50740c0267739dac40c1eb7cf4e3981874d9ef5551dd13ca0e6813fa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'elfinder_widget' => array($this, 'block_elfinder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Form:elfinder_widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Form:elfinder_widget.html.twig"));

        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_elfinder_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

        // line 2
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->source); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if (((isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () { throw new Twig_Error_Runtime('Variable "enable" does not exist.', 3, $this->source); })()) && array_key_exists("instance", $context))) {
            // line 4
            echo "        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                \$('[data-type=\"elfinder-input-field\"][id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\"]').on(\"click\",function() {
                    var childWin = window.open(\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("elfinder", array("instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 7, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new Twig_Error_Runtime('Variable "homeFolder" does not exist.', 7, $this->source); })()))), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
                });
            });
            
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Form:elfinder_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 7,  65 => 6,  61 => 4,  59 => 3,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block elfinder_widget %}
    <input type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} data-type=\"elfinder-input-field\" />
    {% if enable and instance is defined %}
        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                \$('[data-type=\"elfinder-input-field\"][id=\"{{ id }}\"]').on(\"click\",function() {
                    var childWin = window.open(\"{{path('elfinder', {'instance': instance, 'homeFolder': homeFolder })}}?id={{ id }}\", \"popupWindow\", \"height=450, width=900\");
                });
            });
            
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    {% endif %}
{% endblock %}
", "FMElfinderBundle:Form:elfinder_widget.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/xintegro/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Form/elfinder_widget.html.twig");
    }
}
