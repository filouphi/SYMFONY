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

/* accueil/index.html.twig */
class __TwigTemplate_149086f2a8633532561e300e30e73b58c313ecc95499c1d6161daae84217875a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Page d'accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand \" href=\"#\" >Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
                <a class=\"nav-link\" href=\"#\">Features</a>
                <a class=\"nav-link\" href=\"#\">Pricing</a>
                <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </div>
            </div>
        </div>
        </nav>

    ";
        // line 25
        echo "
         
      
    <h1>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["msg_accueil"]) || array_key_exists("msg_accueil", $context) ? $context["msg_accueil"] : (function () { throw new RuntimeError('Variable "msg_accueil" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</h1>
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\"></li>
    <li data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\"></li>
    <li data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Citroën_2_CV.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"2cv\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Renault-5-Turbo-1-24-Jaune.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Simca-1000.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </a>
</div>

    <p>Bonjour nous vous proposons tout un panel de services afin de maintenir votre vehicule en parfait etat  </p>
<div class=\"container\">
        <h1>Nos services</h1>


<div class=\"card-group\">

    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 64
            echo "        <div class=\"col-4 mb-3\">

            <div class=\"card\">
                <img src=\"../../image/";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 69
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 69)), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">A partir de ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "prix", [], "any", false, false, false, 70), "html", null, true);
            echo " €</p>
                    <a href=\"#\" class=\"btn btn-primary\">Prendre Rendez-Vous</a>
                </div>
            </div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
    </div>



  

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 77,  181 => 70,  177 => 69,  170 => 67,  165 => 64,  161 => 63,  138 => 43,  132 => 40,  126 => 37,  114 => 28,  109 => 25,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page d'accueil{% endblock %}

{% block body %}
    {# DEBUT NAVBAR #}
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand \" href=\"#\" >Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
                <a class=\"nav-link\" href=\"#\">Features</a>
                <a class=\"nav-link\" href=\"#\">Pricing</a>
                <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
            </div>
            </div>
        </div>
        </nav>

    {# FIN NAVBAR #}

         
      
    <h1>{{ msg_accueil }}</h1>
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\"></li>
    <li data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\"></li>
    <li data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"{{ asset('/images/Citroën_2_CV.jpg') }}\" class=\"d-block w-100\" alt=\"2cv\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"{{ asset('/images/Renault-5-Turbo-1-24-Jaune.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"{{ asset(('/images/Simca-1000.jpg')) }}\" class=\"d-block w-100\" alt=\"...\">
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </a>
</div>

    <p>Bonjour nous vous proposons tout un panel de services afin de maintenir votre vehicule en parfait etat  </p>
<div class=\"container\">
        <h1>Nos services</h1>


<div class=\"card-group\">

    {% for service in services %}
        <div class=\"col-4 mb-3\">

            <div class=\"card\">
                <img src=\"../../image/{{service.image}}\" class=\"card-img-top\" alt=\"{{ service.image }}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{(service.nom)| capitalize }}</h5>
                    <p class=\"card-text\">A partir de {{ service.prix }} €</p>
                    <a href=\"#\" class=\"btn btn-primary\">Prendre Rendez-Vous</a>
                </div>
            </div>

        </div>
    {% endfor %}

    </div>



  

{% endblock %}




             
       







  


  

", "accueil/index.html.twig", "D:\\GITHUB\\projet_Garage\\projet_Garage\\templates\\accueil\\index.html.twig");
    }
}
