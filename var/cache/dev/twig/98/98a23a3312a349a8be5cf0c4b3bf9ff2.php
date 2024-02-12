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

/* inscription/accueil.html.twig */
class __TwigTemplate_81300219e573e318f73085a095befb00 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Axentix Layout - Sidenav</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.4.0/dist/axentix.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
</head>
<body class=\"layout-sidenav\">

<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">
            <i class=\"fas fa-credit-card fa-lg\"></i>
        </a>
        <a class=\"navbar-brand mx-auto\" href=\"#\">ManageBudget</a>
    </nav>
</header>

<div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 sidenav-fixed white\">
    <div class=\"sidenav-header\">
        <b>My profile</b>
    </div>
    <a href=\"#\" class=\"sidenav-link active\">User Account</a>
    <a href=\"#\" class=\"sidenav-link\">My Expenses</a>
    <a href=\"#\" class=\"sidenav-link\">My Review</a>

    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "        <div class=\"mb-3\" style=\"margin-top: 400px;\">
            You are logged in as ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "userIdentifier", [], "any", false, false, false, 32), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 35
        echo "</div>

<main>

    <main>
        <div style=\"text-align: center; margin-top: 50px;\">
            <h1>Welcome  ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "lastName", [], "any", false, false, false, 41), "html", null, true);
        echo " !</h1>
        </div>

        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start');
        echo "
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "profileType", [], "any", false, false, false, 45), 'row');
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "profileBudget", [], "any", false, false, false, 46), 'row');
        echo "

        <button type=\"submit\" class=\"btn\">Register</button>
        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "



</main>

<script src=\"https://cdn.jsdelivr.net/npm/axentix@2.4.0/dist/axentix.min.js\"></script>
<script>
    document.getElementById('openSidenav').addEventListener('click', function() {
        document.getElementById('example-sidenav').axOpen();
    });
</script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "inscription/accueil.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  115 => 49,  109 => 46,  105 => 45,  101 => 44,  95 => 41,  87 => 35,  79 => 32,  76 => 31,  74 => 30,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Axentix Layout - Sidenav</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.4.0/dist/axentix.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
</head>
<body class=\"layout-sidenav\">

<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">
            <i class=\"fas fa-credit-card fa-lg\"></i>
        </a>
        <a class=\"navbar-brand mx-auto\" href=\"#\">ManageBudget</a>
    </nav>
</header>

<div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 sidenav-fixed white\">
    <div class=\"sidenav-header\">
        <b>My profile</b>
    </div>
    <a href=\"#\" class=\"sidenav-link active\">User Account</a>
    <a href=\"#\" class=\"sidenav-link\">My Expenses</a>
    <a href=\"#\" class=\"sidenav-link\">My Review</a>

    {% if app.user %}
        <div class=\"mb-3\" style=\"margin-top: 400px;\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
</div>

<main>

    <main>
        <div style=\"text-align: center; margin-top: 50px;\">
            <h1>Welcome  {{ app.user.lastName}} !</h1>
        </div>

        {{ form_start(form) }}
        {{ form_row(form.profileType) }}
        {{ form_row(form.profileBudget) }}

        <button type=\"submit\" class=\"btn\">Register</button>
        {{ form_end(form) }}



</main>

<script src=\"https://cdn.jsdelivr.net/npm/axentix@2.4.0/dist/axentix.min.js\"></script>
<script>
    document.getElementById('openSidenav').addEventListener('click', function() {
        document.getElementById('example-sidenav').axOpen();
    });
</script>

</body>
</html>
", "inscription/accueil.html.twig", "/Applications/MAMP/htdocs/Budget/templates/inscription/accueil.html.twig");
    }
}
