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

/* main/index.html.twig */
class __TwigTemplate_2c48c86e847cbd5b8ace5ceadab02f0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<section class=\"home\"> 
 <div id=\"Haut\">
    <div id=\"logo\">
      <img src=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logoNFTidentity.png"), "html", null, true);
        echo " >
    </div>

    <div id=\"Menu\">
      <span id=\"Explication\">
        <a href=\"Explication.html\">Explication</a>
      </span>
      <span id=\"CCM\">
        <a href=\"CCM.html\">Comment ça marche</a>
      </span>
      <span id=\"FAQ\">
        <a href=\"FAQ.html\">FAQ</a>     
    </div>
  </div>


";
        // line 25
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "
  <div id=\"m\">

  
    <input type=\"button\" onclick=\"window.location.href = '";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "'\" class=\"contact\" value=\"Creer Compte\">
    </div>
";
        }
        // line 33
        echo "
  <div id=\"Contact\">
    <span id =\"cont\">

    
    <input type=\"button\" onclick=\"window.location.href = ' ";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formcontact");
        echo " '\" class=\"contact\" value=\"Contactez-nous\">    


  </div></span>
</div>


<div id=\"PA\">
  <h2>
    Découvrez <br> une solution d'avenir <br>
    pour <span class=\"ChangeText \"></span>
  </h2>
</div>
     

<div id=\"Exemple\">
  <img src=";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/NFT.jpg"), "html", null, true);
        echo " class=\"portrait\">
</div>


";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            echo " 

<div id=\"CreerunNFT\">
  <input type=\"button\" onclick=\"window.location.href = '  ";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
            echo " '\" class=\"NFTcreation\" value=\"Creer votre NFT\">    </span>
</div>



";
        } else {
            // line 67
            echo "
<div id=\"CreerunNFT\">

";
            // line 70
            echo "<input type=\"button\" onclick=\" afficherAlerte() \" class=\"NFTcreation\" value=\"Demande de NFT\"> ";
            // line 72
            echo "
</span>
</div>


";
        }
        // line 78
        echo "   ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78)) {
            // line 79
            echo "
 <div id=\"Connex\">
    <span id =\"connexion\">
       <input type=\"button\" onclick= \"window.location.href= '";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "'\" class=\"Connexion\" value=\"Connexion\">
  </div>

      ";
        }
        // line 86
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86)) {
            // line 87
            echo "
    <div id=\"Connex\">
      <span id =\"connexion\">
        <input type=\"button\" onclick= \"window.location.href= '";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "'\" class=\"Connexion\" value=\"Déconnexion\">
    </div>

      ";
        }
        // line 94
        echo "

 

</section>

<script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>

<script src=\" ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>
 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 102,  201 => 94,  194 => 90,  189 => 87,  186 => 86,  179 => 82,  174 => 79,  171 => 78,  163 => 72,  161 => 70,  156 => 67,  147 => 61,  141 => 58,  134 => 54,  115 => 38,  108 => 33,  102 => 30,  96 => 26,  94 => 25,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


<section class=\"home\"> 
 <div id=\"Haut\">
    <div id=\"logo\">
      <img src={{ asset( \"media/logoNFTidentity.png\")}} >
    </div>

    <div id=\"Menu\">
      <span id=\"Explication\">
        <a href=\"Explication.html\">Explication</a>
      </span>
      <span id=\"CCM\">
        <a href=\"CCM.html\">Comment ça marche</a>
      </span>
      <span id=\"FAQ\">
        <a href=\"FAQ.html\">FAQ</a>     
    </div>
  </div>


{% if not app.user %}

  <div id=\"m\">

  
    <input type=\"button\" onclick=\"window.location.href = '{{ path('app_register')}}'\" class=\"contact\" value=\"Creer Compte\">
    </div>
{% endif %}

  <div id=\"Contact\">
    <span id =\"cont\">

    
    <input type=\"button\" onclick=\"window.location.href = ' {{ path('formcontact') }} '\" class=\"contact\" value=\"Contactez-nous\">    


  </div></span>
</div>


<div id=\"PA\">
  <h2>
    Découvrez <br> une solution d'avenir <br>
    pour <span class=\"ChangeText \"></span>
  </h2>
</div>
     

<div id=\"Exemple\">
  <img src={{ asset( \"media/NFT.jpg\" )}} class=\"portrait\">
</div>


{% if app.user %} 

<div id=\"CreerunNFT\">
  <input type=\"button\" onclick=\"window.location.href = '  {{ path('add') }} '\" class=\"NFTcreation\" value=\"Creer votre NFT\">    </span>
</div>



{% else %}

<div id=\"CreerunNFT\">

{{
  '<input type=\"button\" onclick=\" afficherAlerte() \" class=\"NFTcreation\" value=\"Demande de NFT\"> '   
}}
</span>
</div>


{% endif %}
   {% if not app.user %}

 <div id=\"Connex\">
    <span id =\"connexion\">
       <input type=\"button\" onclick= \"window.location.href= '{{ path('app_login')}}'\" class=\"Connexion\" value=\"Connexion\">
  </div>

      {% endif %}
      {% if app.user %}

    <div id=\"Connex\">
      <span id =\"connexion\">
        <input type=\"button\" onclick= \"window.location.href= '{{ path('app_logout')}}'\" class=\"Connexion\" value=\"Déconnexion\">
    </div>

      {% endif %}


 

</section>

<script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>

<script src=\" {{ asset('js/script.js')}}\"> </script>
 

{% endblock %}
", "main/index.html.twig", "/home/u785257224/domains/lesitedecyril.fr/public_html/templates/main/index.html.twig");
    }
}
