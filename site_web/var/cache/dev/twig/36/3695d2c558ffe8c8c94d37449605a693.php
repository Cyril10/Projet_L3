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

/* permi/_form.html.twig */
class __TwigTemplate_a4c98045d1e949f7f81dcbf27334ba99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permi/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permi/_form.html.twig"));

        // line 1
        echo "

<div id=\"FormConnexion\">
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Permiform"]) || array_key_exists("Permiform", $context) ? $context["Permiform"] : (function () { throw new RuntimeError('Variable "Permiform" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
<h2 id=\"fh\">Information Permi</h2>

    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Permiform"]) || array_key_exists("Permiform", $context) ? $context["Permiform"] : (function () { throw new RuntimeError('Variable "Permiform" does not exist.', 7, $this->source); })()), "NumeroPermi", [], "any", false, false, false, 7), 'row', ["attr" => ["class" => "fc", "placeholder" => "Numéro permi"]]);
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Permiform"]) || array_key_exists("Permiform", $context) ? $context["Permiform"] : (function () { throw new RuntimeError('Variable "Permiform" does not exist.', 8, $this->source); })()), "TypeVehicule", [], "any", false, false, false, 8), 'row', ["attr" => ["class" => "fc", "placeholder" => "Type de véhicule"]]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Permiform"]) || array_key_exists("Permiform", $context) ? $context["Permiform"] : (function () { throw new RuntimeError('Variable "Permiform" does not exist.', 9, $this->source); })()), "NEPH", [], "any", false, false, false, 9), 'row', ["attr" => ["class" => "fc", "placeholder" => "Numero NEPH"]]);
        echo "


";
        // line 12
        echo "<button type=\"submit\" onclick=\" validation()\" class=\"btn\"  > Valider </button>";
        // line 14
        echo "




";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Permiform"]) || array_key_exists("Permiform", $context) ? $context["Permiform"] : (function () { throw new RuntimeError('Variable "Permiform" does not exist.', 19, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "permi/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  70 => 14,  68 => 12,  62 => 9,  58 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div id=\"FormConnexion\">
{{ form_start(Permiform) }}
<h2 id=\"fh\">Information Permi</h2>

    {{ form_row(Permiform.NumeroPermi,{'attr': {'class' : 'fc', 'placeholder' : 'Numéro permi'}}) }}
    {{ form_row(Permiform.TypeVehicule,{'attr': {'class' : 'fc', 'placeholder' : 'Type de véhicule'}}) }}
    {{ form_row(Permiform.NEPH,{'attr': {'class' : 'fc', 'placeholder' : 'Numero NEPH'}}) }}


{{
     '<button type=\"submit\" onclick=\" validation()\" class=\"btn\"  > Valider </button>'
}}




{{ form_end(Permiform) }}


", "permi/_form.html.twig", "/home/u785257224/domains/lesitedecyril.fr/public_html/templates/permi/_form.html.twig");
    }
}
