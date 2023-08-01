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

/* create/editTask.html.twig */
class __TwigTemplate_50dd1df563dbb55769a55ff7f25b25d6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create/editTask.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "create/editTask.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<h1>Edit task</h1>
\t\t<a href=\"";
        // line 6
        echo twig_escape_filter(
            $this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(
                "app.all_tasks", ["listname" => (isset($context["listname"]) || array_key_exists("listname", $context) ? $context["listname"] : (function () {
                    throw new RuntimeError('Variable "listname" does not exist.', 6, $this->source); 
                })())]
            ), "html", null, true
        );
        echo "\">
\t\t\t<button class=\"btn btn-primary btn-sm mb-3\">Back to tasks</button>
\t\t</a>
\t\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(
            (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () {
                throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); 
            })()), 'form'
        );
        echo "
\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "create/editTask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(
            "{% extends \"base.html.twig\" %}

{% block body %}
\t<div class=\"container\">
\t\t<h1>Edit task</h1>
\t\t<a href=\"{{ path('app.all_tasks', {listname: listname}) }}\">
\t\t\t<button class=\"btn btn-primary btn-sm mb-3\">Back to tasks</button>
\t\t</a>
\t\t{{ form(form) }}
\t\t</div>
\t{% endblock %}
", "create/editTask.html.twig", "C:\\xampp\\htdocs\\todoapp\\templates\\create\\editTask.html.twig"
        );
    }
}