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

/* security/login.html.twig */
class __TwigTemplate_5e5eeb4e77a8d83443927f1932c10afa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "    <main class=\"bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl\">
        <section>
            <h3 class=\"font-bold text-2xl\">Bienvenue sur /ˈmjuːzaka/</h3>
            <p class=\"text-gray-600 pt-2\">Connectez-vous</p>
        </section>

        <section class=\"mt-10\">
            <form class=\"flex flex-col\" method=\"POST\">
                ";
        // line 14
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageKey", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 17
        echo "
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"email\">Email</label>
                    <input type=\"email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" id=\"inputEmail\" name=\"email\" autocomplete=\"email\" required autofocus class=\"bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-teal-700/70 transition duration-500 px-3 pb-3\">
                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"password\">Password</label>
                    <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"current-password\" required class=\"bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-teal-700/70 transition duration-500 px-3 pb-3\">
                </div>
                <div class=\"flex justify-end\">
                    <a href=\"#\" class=\"text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6\">Forgot your password?</a>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >
                <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200\" type=\"submit\">Me connecter</button>
            </form>
        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  111 => 20,  106 => 17,  100 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    <main class=\"bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl\">
        <section>
            <h3 class=\"font-bold text-2xl\">Bienvenue sur /ˈmjuːzaka/</h3>
            <p class=\"text-gray-600 pt-2\">Connectez-vous</p>
        </section>

        <section class=\"mt-10\">
            <form class=\"flex flex-col\" method=\"POST\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"email\">Email</label>
                    <input type=\"email\" value=\"{{ last_username }}\" id=\"inputEmail\" name=\"email\" autocomplete=\"email\" required autofocus class=\"bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-teal-700/70 transition duration-500 px-3 pb-3\">
                </div>
                <div class=\"mb-6 pt-3 rounded bg-gray-200\">
                    <label class=\"block text-gray-700 text-sm font-bold mb-2 ml-3\" for=\"password\">Password</label>
                    <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"current-password\" required class=\"bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-teal-700/70 transition duration-500 px-3 pb-3\">
                </div>
                <div class=\"flex justify-end\">
                    <a href=\"#\" class=\"text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6\">Forgot your password?</a>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"{{ csrf_token('authenticate') }}\"
                >
                <button class=\"bg-teal-700/70 hover:bg-teal-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200\" type=\"submit\">Me connecter</button>
            </form>
        </section>
    </main>
{% endblock %}
", "security/login.html.twig", "/Users/leon/Documents/Cours/5ème année/PHP/prof/enigma 2/templates/security/login.html.twig");
    }
}
