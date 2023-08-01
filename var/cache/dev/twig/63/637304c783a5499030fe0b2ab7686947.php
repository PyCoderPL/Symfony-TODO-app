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

/* main/showOneTask.html.twig */
class __TwigTemplate_4a88699b95175d44e5bcaaeadb40ee01 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/showOneTask.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/showOneTask.html.twig", 1);
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
\t\t<h2>Task details</h2>
\t\t<hr>
\t\t<table class=\"table table-striped\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">ID</td>
\t\t\t\t\t<td>";
        // line 11
        echo twig_escape_filter(
            $this->env, twig_get_attribute(
                $this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () {
                    throw new RuntimeError('Variable "task" does not exist.', 11, $this->source); 
                })()), "id", [], "any", false, false, false, 11
            ), "html", null, true
        );
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">List</td>
\t\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter(
            $this->env, (isset($context["listname"]) || array_key_exists("listname", $context) ? $context["listname"] : (function () {
                throw new RuntimeError('Variable "listname" does not exist.', 15, $this->source); 
            })()), "html", null, true
        );
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Task</td>
\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter(
            $this->env, twig_get_attribute(
                $this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () {
                    throw new RuntimeError('Variable "task" does not exist.', 19, $this->source); 
                })()), "task", [], "any", false, false, false, 19
            ), "html", null, true
        );
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Category</td>
\t\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter(
            $this->env, twig_get_attribute(
                $this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () {
                    throw new RuntimeError('Variable "task" does not exist.', 23, $this->source); 
                })()), "category", [], "any", false, false, false, 23
            ), "html", null, true
        );
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Deadline</td>
\t\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter(
            $this->env, twig_date_format_filter(
                $this->env, twig_get_attribute(
                    $this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () {
                        throw new RuntimeError('Variable "task" does not exist.', 27, $this->source); 
                    })()), "deadline", [], "any", false, false, false, 27
                ), "Y-m-d"
            ), "html", null, true
        );
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Description</td>
\t\t\t\t\t<td>";
        // line 31
        echo twig_escape_filter(
            $this->env, twig_get_attribute(
                $this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () {
                    throw new RuntimeError('Variable "task" does not exist.', 31, $this->source); 
                })()), "description", [], "any", false, false, false, 31
            ), "html", null, true
        );
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Finished</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 36
        if ((twig_get_attribute(
            $this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () {
                throw new RuntimeError('Variable "task" does not exist.', 36, $this->source); 
            })()), "finished", [], "any", false, false, false, 36
        ) == 1)
        ) {
            // line 37
            echo "\t\t\t\t\t\t\tyes
\t\t\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t\t\tno
\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<a href=\"";
        // line 45
        echo twig_escape_filter(
            $this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(
                "app.all_tasks", ["listname" => (isset($context["listname"]) || array_key_exists("listname", $context) ? $context["listname"] : (function () {
                    throw new RuntimeError('Variable "listname" does not exist.', 45, $this->source); 
                })())]
            ), "html", null, true
        );
        echo "\">
\t\t\t<button class=\"btn btn-primary btn-sm\">Back</button>
\t\t</a>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/showOneTask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  121 => 41,  117 => 39,  113 => 37,  111 => 36,  103 => 31,  96 => 27,  89 => 23,  82 => 19,  75 => 15,  68 => 11,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(
            "{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<h2>Task details</h2>
\t\t<hr>
\t\t<table class=\"table table-striped\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">ID</td>
\t\t\t\t\t<td>{{ task.id }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">List</td>
\t\t\t\t\t<td>{{ listname }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Task</td>
\t\t\t\t\t<td>{{ task.task }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Category</td>
\t\t\t\t\t<td>{{ task.category }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Deadline</td>
\t\t\t\t\t<td>{{task.deadline|date('Y-m-d')}}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Description</td>
\t\t\t\t\t<td>{{ task.description }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"fw-bold\">Finished</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if task.finished == 1 %}
\t\t\t\t\t\t\tyes
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tno
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<a href=\"{{ path('app.all_tasks', {listname: listname}) }}\">
\t\t\t<button class=\"btn btn-primary btn-sm\">Back</button>
\t\t</a>
\t</div>
{% endblock %}
", "main/showOneTask.html.twig", "C:\\xampp\\htdocs\\todoapp\\templates\\main\\showOneTask.html.twig"
        );
    }
}
