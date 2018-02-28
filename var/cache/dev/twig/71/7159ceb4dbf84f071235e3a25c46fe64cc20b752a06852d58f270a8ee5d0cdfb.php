<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_15b928ff7213396d9f640fa06b12c14a335ec6a67e3d6f1fc234707520f8f0ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08b0497a3c950a628b70b0c224201ec71c7767dabf6753258996010c589a6135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b0497a3c950a628b70b0c224201ec71c7767dabf6753258996010c589a6135->enter($__internal_08b0497a3c950a628b70b0c224201ec71c7767dabf6753258996010c589a6135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_df2ad77282267e974bfd10b2054072a1d053f4af8b159f645cf3d442c3dc862a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2ad77282267e974bfd10b2054072a1d053f4af8b159f645cf3d442c3dc862a->enter($__internal_df2ad77282267e974bfd10b2054072a1d053f4af8b159f645cf3d442c3dc862a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08b0497a3c950a628b70b0c224201ec71c7767dabf6753258996010c589a6135->leave($__internal_08b0497a3c950a628b70b0c224201ec71c7767dabf6753258996010c589a6135_prof);

        
        $__internal_df2ad77282267e974bfd10b2054072a1d053f4af8b159f645cf3d442c3dc862a->leave($__internal_df2ad77282267e974bfd10b2054072a1d053f4af8b159f645cf3d442c3dc862a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0ca0172089422d544fa1c81466f0b7802f3cda9f47cfe942b09e2cd2c111cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ca0172089422d544fa1c81466f0b7802f3cda9f47cfe942b09e2cd2c111cfc->enter($__internal_c0ca0172089422d544fa1c81466f0b7802f3cda9f47cfe942b09e2cd2c111cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0520ce0aa089ff3c9677fba56432ce9c31fede707fffeebc3710a25df75eb766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0520ce0aa089ff3c9677fba56432ce9c31fede707fffeebc3710a25df75eb766->enter($__internal_0520ce0aa089ff3c9677fba56432ce9c31fede707fffeebc3710a25df75eb766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0520ce0aa089ff3c9677fba56432ce9c31fede707fffeebc3710a25df75eb766->leave($__internal_0520ce0aa089ff3c9677fba56432ce9c31fede707fffeebc3710a25df75eb766_prof);

        
        $__internal_c0ca0172089422d544fa1c81466f0b7802f3cda9f47cfe942b09e2cd2c111cfc->leave($__internal_c0ca0172089422d544fa1c81466f0b7802f3cda9f47cfe942b09e2cd2c111cfc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69dc36140520458dda11ae7fa75e2493ae39c44758d359ca0ce67e4af1356311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69dc36140520458dda11ae7fa75e2493ae39c44758d359ca0ce67e4af1356311->enter($__internal_69dc36140520458dda11ae7fa75e2493ae39c44758d359ca0ce67e4af1356311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_445c4fec1e09d0576358ef6d89c7697e65d08917585f84ffa0b50d4eee8bb7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445c4fec1e09d0576358ef6d89c7697e65d08917585f84ffa0b50d4eee8bb7a8->enter($__internal_445c4fec1e09d0576358ef6d89c7697e65d08917585f84ffa0b50d4eee8bb7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_445c4fec1e09d0576358ef6d89c7697e65d08917585f84ffa0b50d4eee8bb7a8->leave($__internal_445c4fec1e09d0576358ef6d89c7697e65d08917585f84ffa0b50d4eee8bb7a8_prof);

        
        $__internal_69dc36140520458dda11ae7fa75e2493ae39c44758d359ca0ce67e4af1356311->leave($__internal_69dc36140520458dda11ae7fa75e2493ae39c44758d359ca0ce67e4af1356311_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69b7c6309780646ed09d5a5bc52806bd63dfda6abba508b0f953eed01973ed2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b7c6309780646ed09d5a5bc52806bd63dfda6abba508b0f953eed01973ed2c->enter($__internal_69b7c6309780646ed09d5a5bc52806bd63dfda6abba508b0f953eed01973ed2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_afa65a3b0c811397e6d1daf0351e4cf4365da2e25c30bb26925444c4300b0a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa65a3b0c811397e6d1daf0351e4cf4365da2e25c30bb26925444c4300b0a11->enter($__internal_afa65a3b0c811397e6d1daf0351e4cf4365da2e25c30bb26925444c4300b0a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_afa65a3b0c811397e6d1daf0351e4cf4365da2e25c30bb26925444c4300b0a11->leave($__internal_afa65a3b0c811397e6d1daf0351e4cf4365da2e25c30bb26925444c4300b0a11_prof);

        
        $__internal_69b7c6309780646ed09d5a5bc52806bd63dfda6abba508b0f953eed01973ed2c->leave($__internal_69b7c6309780646ed09d5a5bc52806bd63dfda6abba508b0f953eed01973ed2c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/ekdevcenter/Sites/educapeace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
