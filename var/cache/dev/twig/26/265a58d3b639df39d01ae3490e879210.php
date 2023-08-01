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

/* todolist/showTasks.html.twig */
class __TwigTemplate_344d2cf7fcef8f59588993a486798591 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todolist/showTasks.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "todolist/showTasks.html.twig", 1);
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
                })()), "flashes", [0 => "task_notice"], "method", false, false, false, 5
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
        echo "\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.lists");
        echo "\">
\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">Back to lists</button>
\t\t</a>
\t</br>
</br>
<h1>Tasks</h1>
<hr>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr class=\"fw-bold\">
\t\t\t<td>ID</td>
\t\t\t<td>Task</td>
\t\t\t<td>List</td>
\t\t\t<td>Category</td>
\t\t\t<td>Deadline</td>
\t\t\t<td>Finished</td>
\t\t\t<td>Action</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(
            (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () {
                throw new RuntimeError('Variable "tasks" does not exist.', 30, $this->source); 
            })())
        );
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 31
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["task"], "finished", [], "any", false, false, false, 31) == 0)) {
                // line 32
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 35
                echo twig_escape_filter(
                    $this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(
                        "app.one_task", ["listname" => twig_get_attribute(
                            $this->env, $this->source, twig_get_attribute(
                                $this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () {
                                    throw new RuntimeError('Variable "list" does not exist.', 35, $this->source); 
                                })()), 0, [], "array", false, false, false, 35
                            ), "name", [], "any", false, false, false, 35
                        ), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 35)]
                    ), "html", null, true
                );
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "task", [], "any", false, false, false, 35), "html", null, true);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter(
                    $this->env, twig_get_attribute(
                        $this->env, $this->source, twig_get_attribute(
                            $this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () {
                                throw new RuntimeError('Variable "list" does not exist.', 37, $this->source); 
                            })()), 0, [], "array", false, false, false, 37
                        ), "name", [], "any", false, false, false, 37
                    ), "html", null, true
                );
                echo "</td>
\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "category", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "deadline", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\">Edit</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.remove_task", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 55
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t</tbody>
</table>

<a href=\"";
        // line 59
        echo twig_escape_filter(
            $this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(
                "app.add_new_task", ["listname" => twig_get_attribute(
                    $this->env, $this->source, twig_get_attribute(
                        $this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () {
                            throw new RuntimeError('Variable "list" does not exist.', 59, $this->source); 
                        })()), 0, [], "array", false, false, false, 59
                    ), "name", [], "any", false, false, false, 59
                ), "list_id" => twig_get_attribute(
                    $this->env, $this->source, twig_get_attribute(
                        $this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () {
                            throw new RuntimeError('Variable "list" does not exist.', 59, $this->source); 
                        })()), 0, [], "array", false, false, false, 59
                    ), "id", [], "any", false, false, false, 59
                )]
            ), "html", null, true
        );
        echo "\">
\t<button type=\"button\" class=\"btn btn-success btn-sm\">Add task</button>
</a>
<br><br><br>

<h3 class=\"text text-success\">Completed</h3>
<hr>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr class=\"fw-bold\">
\t\t\t<td>ID</td>
\t\t\t<td>Task</td>
\t\t\t<td>List</td>
\t\t\t<td>Category</td>
\t\t\t<td>Deadline</td>
\t\t\t<td>Finished</td>
\t\t\t<td>Date</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(
            (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () {
                throw new RuntimeError('Variable "tasks" does not exist.', 79, $this->source); 
            })())
        );
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 80
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["task"], "finished", [], "any", false, false, false, 80) == 1)) {
                // line 81
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 82), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 84
                echo twig_escape_filter(
                    $this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(
                        "app.one_task", ["listname" => twig_get_attribute(
                            $this->env, $this->source, twig_get_attribute(
                                $this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () {
                                    throw new RuntimeError('Variable "list" does not exist.', 84, $this->source); 
                                })()), 0, [], "array", false, false, false, 84
                            ), "name", [], "any", false, false, false, 84
                        ), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 84)]
                    ), "html", null, true
                );
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "task", [], "any", false, false, false, 84), "html", null, true);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 86
                echo twig_escape_filter(
                    $this->env, twig_get_attribute(
                        $this->env, $this->source, twig_get_attribute(
                            $this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () {
                                throw new RuntimeError('Variable "list" does not exist.', 86, $this->source); 
                            })()), 0, [], "array", false, false, false, 86
                        ), "name", [], "any", false, false, false, 86
                    ), "html", null, true
                );
                echo "</td>
\t\t\t\t\t<td>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "category", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 88
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "deadline", [], "any", false, false, false, 88), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"\" checked>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 94
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "end", [], "any", false, false, false, 94), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 97
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t</tbody>
</table></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "todolist/showTasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 98,  233 => 97,  227 => 94,  218 => 88,  214 => 87,  210 => 86,  203 => 84,  198 => 82,  195 => 81,  192 => 80,  188 => 79,  165 => 59,  160 => 56,  154 => 55,  145 => 49,  132 => 39,  128 => 38,  124 => 37,  117 => 35,  112 => 33,  109 => 32,  106 => 31,  102 => 30,  78 => 10,  69 => 7,  66 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(
            "{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t{% for message in app.flashes('task_notice') %}
\t\t\t<div class=\"alert alert-success d-flex justify-content-center\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}
\t\t<a href=\"{{ path('app.lists') }}\">
\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">Back to lists</button>
\t\t</a>
\t</br>
</br>
<h1>Tasks</h1>
<hr>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr class=\"fw-bold\">
\t\t\t<td>ID</td>
\t\t\t<td>Task</td>
\t\t\t<td>List</td>
\t\t\t<td>Category</td>
\t\t\t<td>Deadline</td>
\t\t\t<td>Finished</td>
\t\t\t<td>Action</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for task in tasks %}
\t\t\t{% if task.finished == 0 %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{task.id}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app.one_task', {listname: list[0].name, id: task.id}) }}\">{{ task.task }}</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ list[0].name }}</td>
\t\t\t\t\t<td>{{ task.category }}</td>
\t\t\t\t\t<td>{{ task.deadline|date('Y-m-d') }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\">Edit</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('app.remove_task', {id: task.id}) }}\">
\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\">Delete</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</tbody>
</table>

<a href=\"{{ path('app.add_new_task', {listname: list[0].name, list_id: list[0].id}) }}\">
\t<button type=\"button\" class=\"btn btn-success btn-sm\">Add task</button>
</a>
<br><br><br>

<h3 class=\"text text-success\">Completed</h3>
<hr>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr class=\"fw-bold\">
\t\t\t<td>ID</td>
\t\t\t<td>Task</td>
\t\t\t<td>List</td>
\t\t\t<td>Category</td>
\t\t\t<td>Deadline</td>
\t\t\t<td>Finished</td>
\t\t\t<td>Date</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for task in tasks %}
\t\t\t{% if task.finished == 1 %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{task.id}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app.one_task', {listname: list[0].name, id: task.id}) }}\">{{task.task}}</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{list[0].name}}</td>
\t\t\t\t\t<td>{{task.category}}</td>
\t\t\t\t\t<td>{{task.deadline|date('Y-m-d')}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"\" checked>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{task.end|date('Y-m-d')}}</td>
\t\t\t\t</tr>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</tbody>
</table></div>{% endblock %}
", "todolist/showTasks.html.twig", "C:\\xampp\\htdocs\\todoapp\\templates\\todolist\\showTasks.html.twig"
        );
    }
}
