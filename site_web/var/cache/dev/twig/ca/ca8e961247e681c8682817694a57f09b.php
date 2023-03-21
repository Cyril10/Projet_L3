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

/* nft_creation/_form.html.twig */
class __TwigTemplate_76e3b0867ddf23f55b4a90e05aecf766 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nft_creation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nft_creation/_form.html.twig"));

        // line 1
        echo "

<div id=\"FormConnexion\">


";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NFTform"]) || array_key_exists("NFTform", $context) ? $context["NFTform"] : (function () { throw new RuntimeError('Variable "NFTform" does not exist.', 6, $this->source); })()), 'form_start');
        echo "

<h2 id=\"fh\">Données identité</h2>

    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NFTform"]) || array_key_exists("NFTform", $context) ? $context["NFTform"] : (function () { throw new RuntimeError('Variable "NFTform" does not exist.', 10, $this->source); })()), "Nom", [], "any", false, false, false, 10), 'row', ["attr" => ["class" => "fc", "placeholder" => "Nom"]]);
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NFTform"]) || array_key_exists("NFTform", $context) ? $context["NFTform"] : (function () { throw new RuntimeError('Variable "NFTform" does not exist.', 11, $this->source); })()), "Prenom", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "fc", "placeholder" => "Prenom"]]);
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NFTform"]) || array_key_exists("NFTform", $context) ? $context["NFTform"] : (function () { throw new RuntimeError('Variable "NFTform" does not exist.', 12, $this->source); })()), "D_naissance", [], "any", false, false, false, 12), 'row');
        echo "
    <br>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["NFTform"]) || array_key_exists("NFTform", $context) ? $context["NFTform"] : (function () { throw new RuntimeError('Variable "NFTform" does not exist.', 14, $this->source); })()), "Lieu_naissance", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "fc", "placeholder" => "Lieu de naissance"]]);
        echo "


    <button type=\"submit\" class=\"btn\"> Valider </button>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NFTform"]) || array_key_exists("NFTform", $context) ? $context["NFTform"] : (function () { throw new RuntimeError('Variable "NFTform" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "nft_creation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  70 => 14,  65 => 12,  61 => 11,  57 => 10,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div id=\"FormConnexion\">


{{ form_start(NFTform) }}

<h2 id=\"fh\">Données identité</h2>

    {{ form_row(NFTform.Nom,{'attr': {'class' : 'fc', 'placeholder' : 'Nom'}}) }}
    {{ form_row(NFTform.Prenom,{'attr': {'class' : 'fc', 'placeholder' : 'Prenom'}}) }}
    {{ form_row(NFTform.D_naissance) }}
    <br>
    {{ form_row(NFTform.Lieu_naissance,{'attr': {'class' : 'fc', 'placeholder' : 'Lieu de naissance'}}) }}


    <button type=\"submit\" class=\"btn\"> Valider </button>
{{ form_end(NFTform) }}
", "nft_creation/_form.html.twig", "/home/u785257224/domains/lesitedecyril.fr/public_html/templates/nft_creation/_form.html.twig");
    }
}
