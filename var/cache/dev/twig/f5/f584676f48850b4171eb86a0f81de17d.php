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

/* todolist/showLists.html.twig */
class __TwigTemplate_3595714e9716a3ec4f245258f007d52f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todolist/showLists.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "todolist/showLists.html.twig", 1);
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
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(
            twig_get_attribute(
                $this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
                    throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); 
                })()), "flashes", [0 => "list_notice"], "method", false, false, false, 5
            )
        );
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "\t\t\t<div class=\"alert alert-success d-flex justify-content-center\">
\t\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t<h1>TODO lists</h1>
\t\t<hr>
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr class=\"fw-bold\">
\t\t\t\t\t<td>ID</td>
\t\t\t\t\t<td>List name</td>
\t\t\t\t\t<td>About list</td>
\t\t\t\t\t<td>Tasks</td>
\t\t\t\t\t<td>Progress</td>
\t\t\t\t\t<td>Action</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(
            (isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () {
                throw new RuntimeError('Variable "lists" does not exist.', 24, $this->source); 
            })())
        );
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 25
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.all_tasks", ["listname" => twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "tasks", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["list"], "tasks", [], "any", false, false, false, 35) != 0)) {
                // line 36
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["list"], "progress", [], "any", false, false, false, 36) / twig_get_attribute($this->env, $this->source, $context["list"], "tasks", [], "any", false, false, false, 36)) * 100), "0", ".", " "), "html", null, true);
                echo "%
\t\t\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t\t\t0%
\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\">Edit</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.create_new_list");
        echo "\">
\t\t\t<button class=\"btn btn-success btn-sm\">Create new list</button>
\t\t</a>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "todolist/showLists.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 53,  152 => 51,  136 => 40,  132 => 38,  126 => 36,  124 => 35,  118 => 32,  113 => 30,  106 => 28,  101 => 26,  98 => 25,  94 => 24,  78 => 10,  69 => 7,  66 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(
            "{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t{% for message in app.flashes('list_notice') %}
\t\t\t<div class=\"alert alert-success d-flex justify-content-center\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}
\t\t<h1>TODO lists</h1>
\t\t<hr>
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr class=\"fw-bold\">
\t\t\t\t\t<td>ID</td>
\t\t\t\t\t<td>List name</td>
\t\t\t\t\t<td>About list</td>
\t\t\t\t\t<td>Tasks</td>
\t\t\t\t\t<td>Progress</td>
\t\t\t\t\t<td>Action</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for list in lists %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ list.id }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('app.all_tasks', { listname: list.name }) }}\">{{ list.name }}</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ list.description }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ list.tasks }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if list.tasks != 0 %}
\t\t\t\t\t\t\t\t{{ ((list.progress / list.tasks)*100)|number_format('0', '.', ' ') }}%
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t0%
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\">Edit</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t<a href=\"{{ path('app.create_new_list') }}\">
\t\t\t<button class=\"btn btn-success btn-sm\">Create new list</button>
\t\t</a>
\t</div>
{% endblock %}
", "todolist/showLists.html.twig", "C:\\xampp\\htdocs\\todoapp\\templates\\todolist\\showLists.html.twig"
        );
    }
}
