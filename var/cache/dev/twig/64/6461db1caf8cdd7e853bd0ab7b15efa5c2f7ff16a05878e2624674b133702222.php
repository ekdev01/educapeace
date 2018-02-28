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
        $__internal_ead762d095d1978e7fc87d736cf59eae755f2456d30cfb4db76720cbd187e705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead762d095d1978e7fc87d736cf59eae755f2456d30cfb4db76720cbd187e705->enter($__internal_ead762d095d1978e7fc87d736cf59eae755f2456d30cfb4db76720cbd187e705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_eb2cdc8bf7fad958c66a1aa405258183dafc4d99b78a6e23c8742140aae6ad15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2cdc8bf7fad958c66a1aa405258183dafc4d99b78a6e23c8742140aae6ad15->enter($__internal_eb2cdc8bf7fad958c66a1aa405258183dafc4d99b78a6e23c8742140aae6ad15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead762d095d1978e7fc87d736cf59eae755f2456d30cfb4db76720cbd187e705->leave($__internal_ead762d095d1978e7fc87d736cf59eae755f2456d30cfb4db76720cbd187e705_prof);

        
        $__internal_eb2cdc8bf7fad958c66a1aa405258183dafc4d99b78a6e23c8742140aae6ad15->leave($__internal_eb2cdc8bf7fad958c66a1aa405258183dafc4d99b78a6e23c8742140aae6ad15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04320a99385296ee34baf8a19bd58897083996f92e55c995f45247e28870f300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04320a99385296ee34baf8a19bd58897083996f92e55c995f45247e28870f300->enter($__internal_04320a99385296ee34baf8a19bd58897083996f92e55c995f45247e28870f300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e68d35625f9ee2880152f4614f58e9a40f46c8de99d6234e42f298da2a96721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e68d35625f9ee2880152f4614f58e9a40f46c8de99d6234e42f298da2a96721->enter($__internal_2e68d35625f9ee2880152f4614f58e9a40f46c8de99d6234e42f298da2a96721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e68d35625f9ee2880152f4614f58e9a40f46c8de99d6234e42f298da2a96721->leave($__internal_2e68d35625f9ee2880152f4614f58e9a40f46c8de99d6234e42f298da2a96721_prof);

        
        $__internal_04320a99385296ee34baf8a19bd58897083996f92e55c995f45247e28870f300->leave($__internal_04320a99385296ee34baf8a19bd58897083996f92e55c995f45247e28870f300_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59536d2c79767c7e96c09920ba5707466a0f284a7b7ad8d97ddf0fc2d8d4c909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59536d2c79767c7e96c09920ba5707466a0f284a7b7ad8d97ddf0fc2d8d4c909->enter($__internal_59536d2c79767c7e96c09920ba5707466a0f284a7b7ad8d97ddf0fc2d8d4c909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ad826c2a6395c55133b2024abced881d463de5780f90e3e5620d95f8a45b94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad826c2a6395c55133b2024abced881d463de5780f90e3e5620d95f8a45b94e->enter($__internal_9ad826c2a6395c55133b2024abced881d463de5780f90e3e5620d95f8a45b94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ad826c2a6395c55133b2024abced881d463de5780f90e3e5620d95f8a45b94e->leave($__internal_9ad826c2a6395c55133b2024abced881d463de5780f90e3e5620d95f8a45b94e_prof);

        
        $__internal_59536d2c79767c7e96c09920ba5707466a0f284a7b7ad8d97ddf0fc2d8d4c909->leave($__internal_59536d2c79767c7e96c09920ba5707466a0f284a7b7ad8d97ddf0fc2d8d4c909_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb1893a566e2e264a90ee60e496eb8b2dac2cd1931be611477aca506c24c7f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1893a566e2e264a90ee60e496eb8b2dac2cd1931be611477aca506c24c7f16->enter($__internal_cb1893a566e2e264a90ee60e496eb8b2dac2cd1931be611477aca506c24c7f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04674efc24e1e49fab871dba274f34df5d62518de54301b228b8d10951e827ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04674efc24e1e49fab871dba274f34df5d62518de54301b228b8d10951e827ce->enter($__internal_04674efc24e1e49fab871dba274f34df5d62518de54301b228b8d10951e827ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_04674efc24e1e49fab871dba274f34df5d62518de54301b228b8d10951e827ce->leave($__internal_04674efc24e1e49fab871dba274f34df5d62518de54301b228b8d10951e827ce_prof);

        
        $__internal_cb1893a566e2e264a90ee60e496eb8b2dac2cd1931be611477aca506c24c7f16->leave($__internal_cb1893a566e2e264a90ee60e496eb8b2dac2cd1931be611477aca506c24c7f16_prof);

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
