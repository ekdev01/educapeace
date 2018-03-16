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
        $__internal_f6f8ca71d01a82ccf2033de82b9d6ae6db00ddb3a87c858b4d3e173c38cf5ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f8ca71d01a82ccf2033de82b9d6ae6db00ddb3a87c858b4d3e173c38cf5ff6->enter($__internal_f6f8ca71d01a82ccf2033de82b9d6ae6db00ddb3a87c858b4d3e173c38cf5ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cc91a6703a7805cd7aaa841218b8cd2abb0bea81065741a5bf17b9c67a2f24f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc91a6703a7805cd7aaa841218b8cd2abb0bea81065741a5bf17b9c67a2f24f7->enter($__internal_cc91a6703a7805cd7aaa841218b8cd2abb0bea81065741a5bf17b9c67a2f24f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6f8ca71d01a82ccf2033de82b9d6ae6db00ddb3a87c858b4d3e173c38cf5ff6->leave($__internal_f6f8ca71d01a82ccf2033de82b9d6ae6db00ddb3a87c858b4d3e173c38cf5ff6_prof);

        
        $__internal_cc91a6703a7805cd7aaa841218b8cd2abb0bea81065741a5bf17b9c67a2f24f7->leave($__internal_cc91a6703a7805cd7aaa841218b8cd2abb0bea81065741a5bf17b9c67a2f24f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d3599a764cb0ad17e368849cfe8966e92a66940667096dffefe426e9acd5fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3599a764cb0ad17e368849cfe8966e92a66940667096dffefe426e9acd5fe2->enter($__internal_3d3599a764cb0ad17e368849cfe8966e92a66940667096dffefe426e9acd5fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73bfae2ee69c196ef926a714aa2e56c977712b5ddac1c0014d1f7d96fec5c088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bfae2ee69c196ef926a714aa2e56c977712b5ddac1c0014d1f7d96fec5c088->enter($__internal_73bfae2ee69c196ef926a714aa2e56c977712b5ddac1c0014d1f7d96fec5c088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_73bfae2ee69c196ef926a714aa2e56c977712b5ddac1c0014d1f7d96fec5c088->leave($__internal_73bfae2ee69c196ef926a714aa2e56c977712b5ddac1c0014d1f7d96fec5c088_prof);

        
        $__internal_3d3599a764cb0ad17e368849cfe8966e92a66940667096dffefe426e9acd5fe2->leave($__internal_3d3599a764cb0ad17e368849cfe8966e92a66940667096dffefe426e9acd5fe2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72083baae4e23f00462e3b3854c81c3c42ec3fe19f4e639a885418f056cbe751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72083baae4e23f00462e3b3854c81c3c42ec3fe19f4e639a885418f056cbe751->enter($__internal_72083baae4e23f00462e3b3854c81c3c42ec3fe19f4e639a885418f056cbe751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0acaa02bd651037c537c1a7635adc02b6fc8072d63fc56d576726cf78674c896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acaa02bd651037c537c1a7635adc02b6fc8072d63fc56d576726cf78674c896->enter($__internal_0acaa02bd651037c537c1a7635adc02b6fc8072d63fc56d576726cf78674c896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0acaa02bd651037c537c1a7635adc02b6fc8072d63fc56d576726cf78674c896->leave($__internal_0acaa02bd651037c537c1a7635adc02b6fc8072d63fc56d576726cf78674c896_prof);

        
        $__internal_72083baae4e23f00462e3b3854c81c3c42ec3fe19f4e639a885418f056cbe751->leave($__internal_72083baae4e23f00462e3b3854c81c3c42ec3fe19f4e639a885418f056cbe751_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c1e583b2828af9c06badc32c252b9a997e89ec68a5d0250a64b3b53891b73c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1e583b2828af9c06badc32c252b9a997e89ec68a5d0250a64b3b53891b73c0->enter($__internal_0c1e583b2828af9c06badc32c252b9a997e89ec68a5d0250a64b3b53891b73c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_378789d5c3bc83e4b4614265ea8b0bf0b9e69eb6b8353467260d017baca1b1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378789d5c3bc83e4b4614265ea8b0bf0b9e69eb6b8353467260d017baca1b1f5->enter($__internal_378789d5c3bc83e4b4614265ea8b0bf0b9e69eb6b8353467260d017baca1b1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_378789d5c3bc83e4b4614265ea8b0bf0b9e69eb6b8353467260d017baca1b1f5->leave($__internal_378789d5c3bc83e4b4614265ea8b0bf0b9e69eb6b8353467260d017baca1b1f5_prof);

        
        $__internal_0c1e583b2828af9c06badc32c252b9a997e89ec68a5d0250a64b3b53891b73c0->leave($__internal_0c1e583b2828af9c06badc32c252b9a997e89ec68a5d0250a64b3b53891b73c0_prof);

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
