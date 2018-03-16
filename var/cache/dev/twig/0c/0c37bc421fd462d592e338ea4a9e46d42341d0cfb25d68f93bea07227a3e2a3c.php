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
        $__internal_b8c4fab9ec1d4a1469c32bf505bcf420643d210bd1ae5cf86f1ea335a14099e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c4fab9ec1d4a1469c32bf505bcf420643d210bd1ae5cf86f1ea335a14099e2->enter($__internal_b8c4fab9ec1d4a1469c32bf505bcf420643d210bd1ae5cf86f1ea335a14099e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle::layout_large.html.twig"));

        $__internal_7ef0def4e04c7f9b647ed3e750e8c282f74efa0c68eb6f0753c2a20066f91a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef0def4e04c7f9b647ed3e750e8c282f74efa0c68eb6f0753c2a20066f91a42->enter($__internal_7ef0def4e04c7f9b647ed3e750e8c282f74efa0c68eb6f0753c2a20066f91a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle::layout_large.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c4fab9ec1d4a1469c32bf505bcf420643d210bd1ae5cf86f1ea335a14099e2->leave($__internal_b8c4fab9ec1d4a1469c32bf505bcf420643d210bd1ae5cf86f1ea335a14099e2_prof);

        
        $__internal_7ef0def4e04c7f9b647ed3e750e8c282f74efa0c68eb6f0753c2a20066f91a42->leave($__internal_7ef0def4e04c7f9b647ed3e750e8c282f74efa0c68eb6f0753c2a20066f91a42_prof);

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
