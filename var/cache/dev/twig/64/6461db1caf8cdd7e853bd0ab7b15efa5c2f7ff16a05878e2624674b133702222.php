<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_345f573fa00597f191a1f1329365b86f5a11f4a19b2cbb0c78c9fdca5c69f46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1ab2ddbeb0e8fd904aea76a07161fedbeec9b77d8617a0e59217d050d7cadba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab2ddbeb0e8fd904aea76a07161fedbeec9b77d8617a0e59217d050d7cadba6->enter($__internal_1ab2ddbeb0e8fd904aea76a07161fedbeec9b77d8617a0e59217d050d7cadba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3ef3efddea66f05be4afce0783b9ed16fd177b2401e4112501fa78be37c001b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef3efddea66f05be4afce0783b9ed16fd177b2401e4112501fa78be37c001b5->enter($__internal_3ef3efddea66f05be4afce0783b9ed16fd177b2401e4112501fa78be37c001b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab2ddbeb0e8fd904aea76a07161fedbeec9b77d8617a0e59217d050d7cadba6->leave($__internal_1ab2ddbeb0e8fd904aea76a07161fedbeec9b77d8617a0e59217d050d7cadba6_prof);

        
        $__internal_3ef3efddea66f05be4afce0783b9ed16fd177b2401e4112501fa78be37c001b5->leave($__internal_3ef3efddea66f05be4afce0783b9ed16fd177b2401e4112501fa78be37c001b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a378e93cc6fc9abf12275edcfe621e19d29a3fd3851934089206244a0290470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a378e93cc6fc9abf12275edcfe621e19d29a3fd3851934089206244a0290470->enter($__internal_6a378e93cc6fc9abf12275edcfe621e19d29a3fd3851934089206244a0290470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_33739589d347cbb5282a1245b88e3d93d208a8184ad320d84053d9bce8901052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33739589d347cbb5282a1245b88e3d93d208a8184ad320d84053d9bce8901052->enter($__internal_33739589d347cbb5282a1245b88e3d93d208a8184ad320d84053d9bce8901052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33739589d347cbb5282a1245b88e3d93d208a8184ad320d84053d9bce8901052->leave($__internal_33739589d347cbb5282a1245b88e3d93d208a8184ad320d84053d9bce8901052_prof);

        
        $__internal_6a378e93cc6fc9abf12275edcfe621e19d29a3fd3851934089206244a0290470->leave($__internal_6a378e93cc6fc9abf12275edcfe621e19d29a3fd3851934089206244a0290470_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8f67fbbbadcdd4024e72b6fddbcca6684e0f630fe495de8b7a93a7c5dec9e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f67fbbbadcdd4024e72b6fddbcca6684e0f630fe495de8b7a93a7c5dec9e8e->enter($__internal_f8f67fbbbadcdd4024e72b6fddbcca6684e0f630fe495de8b7a93a7c5dec9e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4eebad9e1ce104c2a3438e493a245b722b6f4a5939ffe1259212da6ad4d3adda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eebad9e1ce104c2a3438e493a245b722b6f4a5939ffe1259212da6ad4d3adda->enter($__internal_4eebad9e1ce104c2a3438e493a245b722b6f4a5939ffe1259212da6ad4d3adda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4eebad9e1ce104c2a3438e493a245b722b6f4a5939ffe1259212da6ad4d3adda->leave($__internal_4eebad9e1ce104c2a3438e493a245b722b6f4a5939ffe1259212da6ad4d3adda_prof);

        
        $__internal_f8f67fbbbadcdd4024e72b6fddbcca6684e0f630fe495de8b7a93a7c5dec9e8e->leave($__internal_f8f67fbbbadcdd4024e72b6fddbcca6684e0f630fe495de8b7a93a7c5dec9e8e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9e87195f70846f65d94af8d9fd4e2f0d30c0a43209af9cb2c30a1a7c0efbef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e87195f70846f65d94af8d9fd4e2f0d30c0a43209af9cb2c30a1a7c0efbef4->enter($__internal_d9e87195f70846f65d94af8d9fd4e2f0d30c0a43209af9cb2c30a1a7c0efbef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff908e890d164e66d519231633a9b7f0c6e2a15d863afc1c1090feada5fe1707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff908e890d164e66d519231633a9b7f0c6e2a15d863afc1c1090feada5fe1707->enter($__internal_ff908e890d164e66d519231633a9b7f0c6e2a15d863afc1c1090feada5fe1707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ff908e890d164e66d519231633a9b7f0c6e2a15d863afc1c1090feada5fe1707->leave($__internal_ff908e890d164e66d519231633a9b7f0c6e2a15d863afc1c1090feada5fe1707_prof);

        
        $__internal_d9e87195f70846f65d94af8d9fd4e2f0d30c0a43209af9cb2c30a1a7c0efbef4->leave($__internal_d9e87195f70846f65d94af8d9fd4e2f0d30c0a43209af9cb2c30a1a7c0efbef4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/ekdevcenter/Sites/educapeace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
