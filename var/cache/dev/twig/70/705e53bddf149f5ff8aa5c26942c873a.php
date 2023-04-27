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

/* album/index.html.twig */
class __TwigTemplate_bc80846cce1d9f24207b60cd4cba916a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/index.html.twig"));

        // line 1
        echo "<div class=\"mt-10\">
    <!-- album list header -->
    <div class=\"flex text-gray-600\">
        <div class=\"p-2 w-8 flex-shrink-0\"></div>
        <div class=\"p-2 w-8 flex-shrink-0\"></div>
        <div class=\"p-2 w-full\">Titre</div>
        <div class=\"p-2 w-full\">Artiste</div>
        <div class=\"p-2 w-12 flex-shrink-0 text-right\">Action</div>
    </div>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 12
            echo "        <div class=\"flex border-b border-gray-800 hover:bg-green-700/25\">
            <div class=\"p-3 w-8 flex-shrink-0\">▶️</div>
            <div class=\"p-3 w-8 flex-shrink-0\">❤️</div>
            <div class=\"p-3 w-full\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</div>
            <div class=\"p-3 w-full\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "artist", [], "any", false, false, false, 16), "html", null, true);
            echo "</div>
            <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_album_show", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">view</a></div>
            ";
            // line 18
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ARTIST")) {
                // line 19
                echo "                <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_album_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\">edit</a></div>
            ";
            }
            // line 21
            echo "        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <div class=\"flex border-b border-gray-800 hover:bg-gray-800\">
            <p>Aucun album</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>


";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ARTIST")) {
            // line 31
            echo "    <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 p-2 m-2\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_album_new");
            echo "\">Create new album</a></button>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "album/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 31,  105 => 30,  100 => 27,  91 => 23,  85 => 21,  79 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  60 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mt-10\">
    <!-- album list header -->
    <div class=\"flex text-gray-600\">
        <div class=\"p-2 w-8 flex-shrink-0\"></div>
        <div class=\"p-2 w-8 flex-shrink-0\"></div>
        <div class=\"p-2 w-full\">Titre</div>
        <div class=\"p-2 w-full\">Artiste</div>
        <div class=\"p-2 w-12 flex-shrink-0 text-right\">Action</div>
    </div>

    {% for album in albums %}
        <div class=\"flex border-b border-gray-800 hover:bg-green-700/25\">
            <div class=\"p-3 w-8 flex-shrink-0\">▶️</div>
            <div class=\"p-3 w-8 flex-shrink-0\">❤️</div>
            <div class=\"p-3 w-full\">{{ album.name }}</div>
            <div class=\"p-3 w-full\">{{ album.artist }}</div>
            <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"{{ path('app_album_show', {'id': album.id}) }}\">view</a></div>
            {% if is_granted('ROLE_ARTIST') %}
                <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"{{ path('app_album_edit', {'id': album.id}) }}\">edit</a></div>
            {% endif %}
        </div>
    {% else %}
        <div class=\"flex border-b border-gray-800 hover:bg-gray-800\">
            <p>Aucun album</p>
        </div>
    {% endfor %}
</div>


{% if is_granted('ROLE_ARTIST') %}
    <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 p-2 m-2\"><a href=\"{{ path('app_album_new') }}\">Create new album</a></button>
{% endif %}
", "album/index.html.twig", "/Users/leon/Documents/Cours/5ème année/PHP/prof/enigma 2/templates/album/index.html.twig");
    }
}
