<?php

/* AssoBundle::layout_large.html.twig */
class __TwigTemplate_06981d2f8028a0c5f2d53ade56f2b24d8dd250b7a613235ac33d210fb29bf665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base_large.html.twig", "AssoBundle::layout_large.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_large.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5de58552ba22fc27afe9fe7b92894b239dee72f678ed97a6ec4af512b25a1f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de58552ba22fc27afe9fe7b92894b239dee72f678ed97a6ec4af512b25a1f83->enter($__internal_5de58552ba22fc27afe9fe7b92894b239dee72f678ed97a6ec4af512b25a1f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle::layout_large.html.twig"));

        $__internal_afa0e1cf7def2f8a2ad5f2fb1a7735fa457594d0e83551c44f2f3c1e8fe3eda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa0e1cf7def2f8a2ad5f2fb1a7735fa457594d0e83551c44f2f3c1e8fe3eda9->enter($__internal_afa0e1cf7def2f8a2ad5f2fb1a7735fa457594d0e83551c44f2f3c1e8fe3eda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle::layout_large.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de58552ba22fc27afe9fe7b92894b239dee72f678ed97a6ec4af512b25a1f83->leave($__internal_5de58552ba22fc27afe9fe7b92894b239dee72f678ed97a6ec4af512b25a1f83_prof);

        
        $__internal_afa0e1cf7def2f8a2ad5f2fb1a7735fa457594d0e83551c44f2f3c1e8fe3eda9->leave($__internal_afa0e1cf7def2f8a2ad5f2fb1a7735fa457594d0e83551c44f2f3c1e8fe3eda9_prof);

    }

    public function getTemplateName()
    {
        return "AssoBundle::layout_large.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/EK/AssoBundle/Resources/views/layout_large.html.twig #}
{% extends '::base_large.html.twig' %}", "AssoBundle::layout_large.html.twig", "/Users/ekdevcenter/Sites/educapeace/src/EK/AssoBundle/Resources/views/layout_large.html.twig");
    }
}
