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
class __TwigTemplate_71c39f2f9131b7a6983d5da1eb10bf8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Création de compte";
        
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 7
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <main class=\"bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl\">
        <section>
            <h3 class=\"font-bold text-2xl\">Bienvenue sur /ˈmjuːzaka/</h3>
            <p class=\"text-gray-600 pt-2\">Création de compte</p>
        </section>

        <section class=\"mt-10\">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"email\">Email</label>
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'row');
        echo "
";
        // line 22
        echo "                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"displayName\">Identifiant</label>
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "displayName", [], "any", false, false, false, 25), 'widget');
        echo "
";
        // line 27
        echo "                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"artist\">Je suis un artiste</label>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "artist", [], "any", false, false, false, 30), 'widget');
        echo "
                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "plainPassword", [], "any", false, false, false, 33), 'row', ["label" => "Password"]);
        // line 35
        echo "
";
        // line 38
        echo "                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"password\">Accepter les CGU</label>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "agreeTerms", [], "any", false, false, false, 41), 'widget');
        echo "
";
        // line 43
        echo "                </div>
                <div class=\"flex justify-end\">
                    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6\">Me connecter</a>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >
                <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold p-2 rounded shadow-lg hover:shadow-xl transition duration-200\" type=\"submit\">Créer mon compte</button>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  172 => 51,  166 => 48,  160 => 45,  156 => 43,  152 => 41,  147 => 38,  144 => 35,  142 => 33,  136 => 30,  131 => 27,  127 => 25,  122 => 22,  118 => 20,  112 => 17,  102 => 9,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Création de compte{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    <main class=\"bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl\">
        <section>
            <h3 class=\"font-bold text-2xl\">Bienvenue sur /ˈmjuːzaka/</h3>
            <p class=\"text-gray-600 pt-2\">Création de compte</p>
        </section>

        <section class=\"mt-10\">
            {{ form_start(registrationForm) }}
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"email\">Email</label>
                    {{ form_row(registrationForm.email) }}
{#                    <input type=\"email\" value=\"{{ last_username }}\" id=\"inputEmail\" name=\"email\" autocomplete=\"email\" required autofocus class=\"bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-teal-700/70 transition duration-500 px-3 pb-3\">#}
                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"displayName\">Identifiant</label>
                    {{ form_widget(registrationForm.displayName) }}
{#                    <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"current-password\" required class=\"bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-teal-700/70 transition duration-500 px-3 pb-3\">#}
                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"artist\">Je suis un artiste</label>
                    {{ form_widget(registrationForm.artist) }}
                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    {{ form_row(registrationForm.plainPassword, {
                        label: 'Password'
                    }) }}
{#                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"password\">Password</label>#}
{#                    <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"current-password\" required class=\"bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-teal-700/70 transition duration-500 px-3 pb-3\">#}
                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"password\">Accepter les CGU</label>
                    {{ form_widget(registrationForm.agreeTerms) }}
{#                    <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"current-password\" required class=\"bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-teal-700/70 transition duration-500 px-3 pb-3\">#}
                </div>
                <div class=\"flex justify-end\">
                    <a href=\"{{ path('app_login') }}\" class=\"text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6\">Me connecter</a>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"{{ csrf_token('authenticate') }}\"
                >
                <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold p-2 rounded shadow-lg hover:shadow-xl transition duration-200\" type=\"submit\">Créer mon compte</button>
            {{ form_end(registrationForm) }}
        </section>
    </main>
{% endblock %}
", "registration/register.html.twig", "/Users/leon/Documents/Cours/5ème année/PHP/prof/enigma 2/templates/registration/register.html.twig");
    }
}
