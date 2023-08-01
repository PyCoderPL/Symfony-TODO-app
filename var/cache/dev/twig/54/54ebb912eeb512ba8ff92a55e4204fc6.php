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

/* mailer/register.html.twig */
class __TwigTemplate_64df53e0afc9fefae0e301623a0cd06a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/register.html.twig"));

        // line 1
        echo "<h1>Welcome
\t";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "!</h1>

<p>
\tYou signed up as
\t";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "
\tthe following email:
</p>
<p>
\t<code>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 10, $this->source); })()), "to", [], "any", false, false, false, 10), 0, [], "array", false, false, false, 10), "address", [], "any", false, false, false, 10), "html", null, true);
        echo "</code>
</p>

<p>
\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Click here to activate your account</a>
\t(this link is valid until
\t";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["expiration_date"]) || array_key_exists("expiration_date", $context) ? $context["expiration_date"] : (function () { throw new RuntimeError('Variable "expiration_date" does not exist.', 16, $this->source); })()), "F jS"), "html", null, true);
        echo ")
</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mailer/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  64 => 14,  57 => 10,  50 => 6,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Welcome
\t{{ username }}!</h1>

<p>
\tYou signed up as
\t{{ username }}
\tthe following email:
</p>
<p>
\t<code>{{ email.to[0].address }}</code>
</p>

<p>
\t<a href=\"{{ path('app_login') }}\">Click here to activate your account</a>
\t(this link is valid until
\t{{ expiration_date|date('F jS') }})
</p>
", "mailer/register.html.twig", "C:\\xampp\\htdocs\\todoapp\\templates\\mailer\\register.html.twig");
    }
}
