<?php

/* AssoBundle:Home:index.html.twig */
class __TwigTemplate_b2c7e96e7b959981aad3bc60f58f5d9e14e053c11656a10804cbf8009e307d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("AssoBundle::layout_home.html.twig", "AssoBundle:Home:index.html.twig", 4);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AssoBundle::layout_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb14d1ec240c146f10763abb17dd31e819b221da2a2da2fb12eb14d4bbacfc5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb14d1ec240c146f10763abb17dd31e819b221da2a2da2fb12eb14d4bbacfc5c->enter($__internal_bb14d1ec240c146f10763abb17dd31e819b221da2a2da2fb12eb14d4bbacfc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Home:index.html.twig"));

        $__internal_986a7c05458a46f4d06ab9aa1bd0732f0ead8bff9cd15509759ec252701f8c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986a7c05458a46f4d06ab9aa1bd0732f0ead8bff9cd15509759ec252701f8c55->enter($__internal_986a7c05458a46f4d06ab9aa1bd0732f0ead8bff9cd15509759ec252701f8c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb14d1ec240c146f10763abb17dd31e819b221da2a2da2fb12eb14d4bbacfc5c->leave($__internal_bb14d1ec240c146f10763abb17dd31e819b221da2a2da2fb12eb14d4bbacfc5c_prof);

        
        $__internal_986a7c05458a46f4d06ab9aa1bd0732f0ead8bff9cd15509759ec252701f8c55->leave($__internal_986a7c05458a46f4d06ab9aa1bd0732f0ead8bff9cd15509759ec252701f8c55_prof);

    }

    public function getTemplateName()
    {
        return "AssoBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/EK/AssoBundle/Resources/views/Home/index.html.twig #}
{# Template Bundle #}

{% extends \"AssoBundle::layout_home.html.twig\" %}", "AssoBundle:Home:index.html.twig", "/Users/ekdevcenter/Sites/educapeace/src/EK/AssoBundle/Resources/views/Home/index.html.twig");
    }
}
