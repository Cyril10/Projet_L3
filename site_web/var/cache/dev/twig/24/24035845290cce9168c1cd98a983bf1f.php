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

/* permi/add.html.twig */
class __TwigTemplate_b5e990a929f335c48b24e598ec1e2559 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permi/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permi/add.html.twig"));

        // line 1
        echo "


<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/style.css"), "html", null, true);
        echo "\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        </head>
  


";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "  <section class=\"HomeConnexion\">
  <div id=\"logocréationNFT\">    
   <a href=\" ";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\"> <img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logoNFTidentity.png"), "html", null, true);
        echo " > </a>



    ";
        // line 20
        $this->loadTemplate("permi/_form.html.twig", "permi/add.html.twig", 20)->display($context);
        // line 21
        echo "</section>
    <script src=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "permi/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  95 => 21,  93 => 20,  84 => 16,  80 => 14,  61 => 13,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"{{ asset('CSS/style.css')}}\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        </head>
  


{% block body %}
  <section class=\"HomeConnexion\">
  <div id=\"logocréationNFT\">    
   <a href=\" {{ path('main')}}\"> <img src={{ asset( \"media/logoNFTidentity.png\")}} > </a>



    {% include \"permi/_form.html.twig\" %}
</section>
    <script src=\" {{ asset('js/script.js')}}\"> </script>
{% endblock %}
", "permi/add.html.twig", "/home/u785257224/domains/lesitedecyril.fr/public_html/templates/permi/add.html.twig");
    }
}
