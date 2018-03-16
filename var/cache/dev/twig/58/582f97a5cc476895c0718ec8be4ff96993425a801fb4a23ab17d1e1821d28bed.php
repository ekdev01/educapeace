<?php

/* AssoBundle::layout.html.twig */
class __TwigTemplate_3c13293cf259d466ccf5d5ae56fa2f6aadf57739de6789857a56bb79e1b85d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AssoBundle::layout.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c82763e1ec1ce4b7a18036a513f7d8faa077010f9f38a99c91f9ae3aa9af19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c82763e1ec1ce4b7a18036a513f7d8faa077010f9f38a99c91f9ae3aa9af19e->enter($__internal_1c82763e1ec1ce4b7a18036a513f7d8faa077010f9f38a99c91f9ae3aa9af19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle::layout.html.twig"));

        $__internal_3d0513fdb22c364586814429548aee2dced2982cc72d9c513fecc323c384738a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0513fdb22c364586814429548aee2dced2982cc72d9c513fecc323c384738a->enter($__internal_3d0513fdb22c364586814429548aee2dced2982cc72d9c513fecc323c384738a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c82763e1ec1ce4b7a18036a513f7d8faa077010f9f38a99c91f9ae3aa9af19e->leave($__internal_1c82763e1ec1ce4b7a18036a513f7d8faa077010f9f38a99c91f9ae3aa9af19e_prof);

        
        $__internal_3d0513fdb22c364586814429548aee2dced2982cc72d9c513fecc323c384738a->leave($__internal_3d0513fdb22c364586814429548aee2dced2982cc72d9c513fecc323c384738a_prof);

    }

    public function getTemplateName()
    {
        return "AssoBundle::layout.html.twig";
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
        return new Twig_Source("{# src/EK/AssoBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}", "AssoBundle::layout.html.twig", "/Users/ekdevcenter/Sites/educapeace/src/EK/AssoBundle/Resources/views/layout.html.twig");
    }
}
