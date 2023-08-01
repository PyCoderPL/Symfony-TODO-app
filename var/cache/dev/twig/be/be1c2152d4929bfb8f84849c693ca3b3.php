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

/* main/showTasks.html.twig */
class __TwigTemplate_bde43f7b92964e207a5d2c465f8c3a8d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/showTasks.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/showTasks.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "task_notice"], "method", false, false, false, 5));
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
        echo "\t\t<h1>Tasks</h1>
\t\t<hr>
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr class=\"fw-bold\">
\t\t\t\t\t<td>ID</td>
\t\t\t\t\t<td>Task</td>
\t\t\t\t\t<td>List</td>
\t\t\t\t\t<td>Category</td>
\t\t\t\t\t<td>Deadline</td>
\t\t\t\t\t<td>Finished</td>
\t\t\t\t\t<td>Action</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 26
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["task"], "finished", [], "any", false, false, false, 26) == 0)) {
                // line 27
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.one_task", ["listname" => twig_get_attribute($this->env, $this->source, $context["task"], "list", [], "any", false, false, false, 30), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "task", [], "any", false, false, false, 30), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "list", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "category", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "deadline", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t<input onchange=\"window.location.href='";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.finished", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 37), "finished" => 1]), "html", null, true);
                echo "'\" class=\"form-check-input\" type=\"checkbox\" id=\"finished\">
\t\t\t\t\t\t\t\t\t<label for=\"finished\">No</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.edit_task", ["listname" => twig_get_attribute($this->env, $this->source, $context["task"], "list", [], "any", false, false, false, 42), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.remove_task", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.add_new_task", ["listname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 54, $this->source); })()), 0, [], "array", false, false, false, 54), "listname", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\">
\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Add task</button>
\t\t</a>
\t\t<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.lists");
        echo "\">
\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">Back</button>
\t\t</a>

\t\t<br><br><br>

\t\t<h3 class=\"text text-success\">Completed</h3>
\t\t<hr>
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr class=\"fw-bold\">
\t\t\t\t\t<td>ID</td>
\t\t\t\t\t<td>Task</td>
\t\t\t\t\t<td>List</td>
\t\t\t\t\t<td>Category</td>
\t\t\t\t\t<td>Deadline</td>
\t\t\t\t\t<td>Finished</td>
\t\t\t\t\t<td>Date</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 79
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["task"], "finished", [], "any", false, false, false, 79) == 1)) {
                // line 80
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.one_task", ["listname" => twig_get_attribute($this->env, $this->source, $context["task"], "list", [], "any", false, false, false, 83), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "task", [], "any", false, false, false, 83), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "list", [], "any", false, false, false, 85), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "category", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "deadline", [], "any", false, false, false, 87), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t<label for=\"finished\">Yes</label>
\t\t\t\t\t\t\t\t\t<input onchange=\"window.location.href='";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.finished", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 91), "finished" => 0]), "html", null, true);
                echo "'\" class=\"form-check-input\" type=\"checkbox\" id=\"finished\" checked>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 94
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "end", [], "any", false, false, false, 94), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/showTasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 98,  243 => 97,  237 => 94,  231 => 91,  224 => 87,  220 => 86,  216 => 85,  209 => 83,  204 => 81,  201 => 80,  198 => 79,  194 => 78,  170 => 57,  164 => 54,  160 => 52,  154 => 51,  145 => 45,  139 => 42,  131 => 37,  125 => 34,  121 => 33,  117 => 32,  110 => 30,  105 => 28,  102 => 27,  99 => 26,  95 => 25,  78 => 10,  69 => 7,  66 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t{% for message in app.flashes('task_notice') %}
\t\t\t<div class=\"alert alert-success d-flex justify-content-center\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}
\t\t<h1>Tasks</h1>
\t\t<hr>
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr class=\"fw-bold\">
\t\t\t\t\t<td>ID</td>
\t\t\t\t\t<td>Task</td>
\t\t\t\t\t<td>List</td>
\t\t\t\t\t<td>Category</td>
\t\t\t\t\t<td>Deadline</td>
\t\t\t\t\t<td>Finished</td>
\t\t\t\t\t<td>Action</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for task in tasks %}
\t\t\t\t\t{% if task.finished == 0 %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{task.id}}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app.one_task', {listname: task.list, id: task.id}) }}\">{{ task.task }}</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ task.list }}</td>
\t\t\t\t\t\t\t<td>{{ task.category }}</td>
\t\t\t\t\t\t\t<td>{{ task.deadline|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t<input onchange=\"window.location.href='{{ path('app.finished', {id: task.id, finished: 1}) }}'\" class=\"form-check-input\" type=\"checkbox\" id=\"finished\">
\t\t\t\t\t\t\t\t\t<label for=\"finished\">No</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app.edit_task', {listname: task.list, id: task.id}) }}\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app.remove_task', {id: task.id}) }}\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t<a href=\"{{ path('app.add_new_task', {listname: list[0].listname}) }}\">
\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\">Add task</button>
\t\t</a>
\t\t<a href=\"{{ path('app.lists') }}\">
\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">Back</button>
\t\t</a>

\t\t<br><br><br>

\t\t<h3 class=\"text text-success\">Completed</h3>
\t\t<hr>
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr class=\"fw-bold\">
\t\t\t\t\t<td>ID</td>
\t\t\t\t\t<td>Task</td>
\t\t\t\t\t<td>List</td>
\t\t\t\t\t<td>Category</td>
\t\t\t\t\t<td>Deadline</td>
\t\t\t\t\t<td>Finished</td>
\t\t\t\t\t<td>Date</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for task in tasks %}
\t\t\t\t\t{% if task.finished == 1 %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{task.id}}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app.one_task', {listname: task.list, id: task.id}) }}\">{{task.task}}</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{task.list}}</td>
\t\t\t\t\t\t\t<td>{{task.category}}</td>
\t\t\t\t\t\t\t<td>{{task.deadline|date('Y-m-d')}}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t<label for=\"finished\">Yes</label>
\t\t\t\t\t\t\t\t\t<input onchange=\"window.location.href='{{ path('app.finished', {id: task.id, finished: 0} ) }}'\" class=\"form-check-input\" type=\"checkbox\" id=\"finished\" checked>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{task.end|date('Y-m-d')}}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}
", "main/showTasks.html.twig", "C:\\xampp\\htdocs\\todoapp\\templates\\main\\showTasks.html.twig");
    }
}
