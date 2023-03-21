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

/* registration/register.html.twig */
class __TwigTemplate_d68dd7f9489c2cf74acb237de0a07658 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/style.css"), "html", null, true);
        echo "\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        </head>

<body>
<section class=\"HomeConnexion\">
  <div id=\"logocréationNFT\">    
   <a href=\" ";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\"> <img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logoNFTidentity.png"), "html", null, true);
        echo " > </a>
   </div>
<div id=\"FormConnexion\">

    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

        <h2 id=\"fh\">Inscription</h2>

        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "fc", "placeholder" => "Adresse Mail"]]);
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "fc", "placeholder" => "Mot de passe"]]);
        // line 23
        echo "

        <button type=\"submit\" class=\"btn\">S'inscrire</button>


    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
    
    </div>
    </section>

    </body>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  81 => 23,  79 => 21,  75 => 20,  68 => 16,  59 => 12,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"{{ asset('CSS/style.css')}}\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        </head>

<body>
<section class=\"HomeConnexion\">
  <div id=\"logocréationNFT\">    
   <a href=\" {{ path('main')}}\"> <img src={{ asset( \"media/logoNFTidentity.png\")}} > </a>
   </div>
<div id=\"FormConnexion\">

    {{ form_start(registrationForm)}}

        <h2 id=\"fh\">Inscription</h2>

        {{ form_row(registrationForm.email, {'attr': {'class' : 'fc', 'placeholder' : 'Adresse Mail'}})}}
        {{ form_row(registrationForm.plainPassword, {
            'attr': {'class' : 'fc', 'placeholder' :'Mot de passe'}
        }) }}

        <button type=\"submit\" class=\"btn\">S'inscrire</button>


    {{ form_end(registrationForm) }}
    
    </div>
    </section>

    </body>
", "registration/register.html.twig", "/home/u785257224/domains/lesitedecyril.fr/public_html/templates/registration/register.html.twig");
    }
}
