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

/* album/show.html.twig */
class __TwigTemplate_05e3debe18578a767d0fe938047b4f17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "album/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Album : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 8, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["song"]) {
            // line 9
            echo "        <div class=\"flex border-b border-gray-800 hover:bg-green-700/25\">
            <div class=\"p-3 w-8 flex-shrink-0\">▶️</div>
            <div class=\"p-3 w-8 flex-shrink-0\">❤️</div>
            <div class=\"p-3 w-full\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["song"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</div>
            <div class=\"p-3 w-full\">Artiste</div>
            <div class=\"p-3 w-full\">Album</div>
            <div class=\"p-3 w-12 flex-shrink-0 text-right\">";
            // line 15
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["song"], "duration", [], "any", false, false, false, 15) / 60), 2, "'"), "html", null, true);
            echo "</div>
            ";
            // line 16
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ARTIST")) {
                // line 17
                echo "                <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_song_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["song"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">edit</a></div>
            ";
            }
            // line 19
            echo "            <div class=\"p-3 w-12 flex-shrink-0 text-right\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_song_show", ["id" => twig_get_attribute($this->env, $this->source, $context["song"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">view</a></div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <div class=\"flex border-b border-gray-800 hover:bg-gray-800\">
            <p>Aucun titre</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['song'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 p-2 m-2\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">Accueil</a></button>

    ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ARTIST")) {
            // line 30
            echo "        <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 p-2 m-2\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_album_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Modifier</a></button>
    ";
            // line 31
            echo twig_include($this->env, $context, "album/_delete_form.html.twig");
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "album/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 31,  150 => 30,  148 => 29,  143 => 27,  140 => 26,  131 => 22,  122 => 19,  116 => 17,  114 => 16,  110 => 15,  104 => 12,  99 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ album.name }}{% endblock %}

{% block body %}
    <h1>Album : {{ album.name }}</h1>

    {% for song in album %}
        <div class=\"flex border-b border-gray-800 hover:bg-green-700/25\">
            <div class=\"p-3 w-8 flex-shrink-0\">▶️</div>
            <div class=\"p-3 w-8 flex-shrink-0\">❤️</div>
            <div class=\"p-3 w-full\">{{ song.name }}</div>
            <div class=\"p-3 w-full\">Artiste</div>
            <div class=\"p-3 w-full\">Album</div>
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

    <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 p-2 m-2\"><a href=\"{{ path('app_homepage') }}\">Accueil</a></button>

    {% if is_granted('ROLE_ARTIST') %}
        <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 p-2 m-2\"><a href=\"{{ path('app_album_edit', {'id': album.id}) }}\">Modifier</a></button>
    {{ include('album/_delete_form.html.twig') }}
    {% endif %}
{% endblock %}
", "album/show.html.twig", "/Users/leon/Documents/Cours/5ème année/PHP/prof/enigma 2/templates/album/show.html.twig");
    }
}
