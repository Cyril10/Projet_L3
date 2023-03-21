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

/* contact/_form.html.twig */
class __TwigTemplate_ffca0f710a2339bb943810507ce4b00e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        // line 1
        echo "

<div id=\"FormConnexion\">


";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ContactForm"]) || array_key_exists("ContactForm", $context) ? $context["ContactForm"] : (function () { throw new RuntimeError('Variable "ContactForm" does not exist.', 6, $this->source); })()), 'form_start');
        echo "

<h2 id=\"fh\">Contact</h2>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactForm"]) || array_key_exists("ContactForm", $context) ? $context["ContactForm"] : (function () { throw new RuntimeError('Variable "ContactForm" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'row', ["attr" => ["class" => "fc", "placeholder" => "Adresse Mail"]]);
        echo "
   <br>
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactForm"]) || array_key_exists("ContactForm", $context) ? $context["ContactForm"] : (function () { throw new RuntimeError('Variable "ContactForm" does not exist.', 11, $this->source); })()), "objet", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "fc", "placeholder" => "Objet Demande"]]);
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactForm"]) || array_key_exists("ContactForm", $context) ? $context["ContactForm"] : (function () { throw new RuntimeError('Variable "ContactForm" does not exist.', 12, $this->source); })()), "Form", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "fc", "placeholder" => "1000 charactères maximum"]]);
        echo "


";
        // line 15
        echo "<button type=\"submit\" onclick=\" contact() \" class=\"btn\" > Valider </button>";
        // line 18
        echo "
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ContactForm"]) || array_key_exists("ContactForm", $context) ? $context["ContactForm"] : (function () { throw new RuntimeError('Variable "ContactForm" does not exist.', 19, $this->source); })()), 'form_end');
        echo "

  </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  73 => 18,  71 => 15,  65 => 12,  61 => 11,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div id=\"FormConnexion\">


{{ form_start(ContactForm) }}

<h2 id=\"fh\">Contact</h2>
    {{ form_row(ContactForm.email,{'attr': {'class' : 'fc', 'placeholder' : 'Adresse Mail'}}) }}
   <br>
    {{ form_row(ContactForm.objet, {'attr': {'class' : 'fc', 'placeholder' : 'Objet Demande'}}) }}
    {{ form_row(ContactForm.Form, {'attr': {'class' : 'fc', placeholder : \"1000 charactères maximum\"}}) }}


{{
    '<button type=\"submit\" onclick=\" contact() \" class=\"btn\" > Valider </button>'

    }}
{{ form_end(ContactForm) }}

  </div>", "contact/_form.html.twig", "/home/u785257224/domains/lesitedecyril.fr/public_html/templates/contact/_form.html.twig");
    }
}
