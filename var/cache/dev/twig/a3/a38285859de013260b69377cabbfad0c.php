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

/* song/index.html.twig */
class __TwigTemplate_c55c9b5f733057db3c3d2a63df51d007 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "song/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "song/index.html.twig"));

        // line 1
        echo "<div class=\"mt-10\">
    <!-- song list header -->
    <div class=\"flex text-gray-600\">
        <div class=\"p-2 w-8 flex-shrink-0\"></div>
        <div class=\"p-2 w-8 flex-shrink-0\"></div>
        <div class=\"p-2 w-full\">Titre</div>
        <div class=\"p-2 w-full\">Artiste</div>
        <div class=\"p-2 w-full\">Album</div>
        <div class=\"p-2 w-12 flex-shrink-0 text-right\">Durée</div>
        <div class=\"p-2 w-12 flex-shrink-0 text-right\">Action</div>
    </div>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["songs"]) || array_key_exists("songs", $context) ? $context["songs"] : (function () { throw new RuntimeError('Variable "songs" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["song"]) {
            // line 14
            echo "        <div class=\"flex border-b border-gray-800 hover:bg-green-700/25\">
            <div class=\"p-3 w-8 flex-shrink-0\">▶️</div>
            <div class=\"p-3 w-8 flex-shrink-0\">❤️</div>
            <div class=\"p-3 w-full\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["song"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</div>
            <div class=\"p-3 w-full\">Artiste</div>
            <div class=\"p-3 w-full\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["song"], "albums", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
            <div class=\"p-3 w-12 flex-shrink-0 text-right\">";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["song"], "duration", [], "any", false, false, false, 20) / 60), 2, "'"), "html", null, true);
            echo "</div>
            ";
            // line 21
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ARTIST")) {
                // line 22
                echo "                <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_song_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["song"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">edit</a></div>
            ";
            }
            // line 24
            echo "            <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_song_show", ["id" => twig_get_attribute($this->env, $this->source, $context["song"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">view</a></div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "        <div class=\"flex border-b border-gray-800 hover:bg-gray-800\">
            <p>Aucun titre</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['song'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>


";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ARTIST")) {
            // line 35
            echo "    <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 p-2 m-2\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_song_new");
            echo "\">Create new song</a></button>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "song/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  111 => 34,  106 => 31,  97 => 27,  88 => 24,  82 => 22,  80 => 21,  76 => 20,  72 => 19,  67 => 17,  62 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mt-10\">
    <!-- song list header -->
    <div class=\"flex text-gray-600\">
        <div class=\"p-2 w-8 flex-shrink-0\"></div>
        <div class=\"p-2 w-8 flex-shrink-0\"></div>
        <div class=\"p-2 w-full\">Titre</div>
        <div class=\"p-2 w-full\">Artiste</div>
        <div class=\"p-2 w-full\">Album</div>
        <div class=\"p-2 w-12 flex-shrink-0 text-right\">Durée</div>
        <div class=\"p-2 w-12 flex-shrink-0 text-right\">Action</div>
    </div>

    {% for song in songs %}
        <div class=\"flex border-b border-gray-800 hover:bg-green-700/25\">
            <div class=\"p-3 w-8 flex-shrink-0\">▶️</div>
            <div class=\"p-3 w-8 flex-shrink-0\">❤️</div>
            <div class=\"p-3 w-full\">{{ song.name }}</div>
            <div class=\"p-3 w-full\">Artiste</div>
            <div class=\"p-3 w-full\">{{ song.albums }}</div>
            <div class=\"p-3 w-12 flex-shrink-0 text-right\">{{ (song.duration/60)|number_format(2, \"'\") }}</div>
            {% if is_granted('ROLE_ARTIST') %}
                <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"{{ path('app_song_edit', {'id': song.id}) }}\">edit</a></div>
            {% endif %}
            <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"{{ path('app_song_show', {'id': song.id}) }}\">view</a></div>
        </div>
    {% else %}
        <div class=\"flex border-b border-gray-800 hover:bg-gray-800\">
            <p>Aucun titre</p>
        </div>
    {% endfor %}
</div>


{% if is_granted('ROLE_ARTIST') %}
    <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 p-2 m-2\"><a href=\"{{ path('app_song_new') }}\">Create new song</a></button>
{% endif %}
", "song/index.html.twig", "/Users/leon/Documents/Cours/5ème année/PHP/prof/enigma 2/templates/song/index.html.twig");
    }
}
