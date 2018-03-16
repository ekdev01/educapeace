<?php

/* AssoBundle::layout_home.html.twig */
class __TwigTemplate_b184e3871d519d66a6a556aa691b09a4e24d783a1af84691280ea3f835a1793d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base_home.html.twig", "AssoBundle::layout_home.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ae6e2b1fb47ebc704f68d85d145361d23fe5d2abd4dc227550f3e11ffe0e354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae6e2b1fb47ebc704f68d85d145361d23fe5d2abd4dc227550f3e11ffe0e354->enter($__internal_0ae6e2b1fb47ebc704f68d85d145361d23fe5d2abd4dc227550f3e11ffe0e354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle::layout_home.html.twig"));

        $__internal_ee627abb7199067aef29e7781abc120fe5a23a6453ec12c0aeb69f48c2315486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee627abb7199067aef29e7781abc120fe5a23a6453ec12c0aeb69f48c2315486->enter($__internal_ee627abb7199067aef29e7781abc120fe5a23a6453ec12c0aeb69f48c2315486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle::layout_home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ae6e2b1fb47ebc704f68d85d145361d23fe5d2abd4dc227550f3e11ffe0e354->leave($__internal_0ae6e2b1fb47ebc704f68d85d145361d23fe5d2abd4dc227550f3e11ffe0e354_prof);

        
        $__internal_ee627abb7199067aef29e7781abc120fe5a23a6453ec12c0aeb69f48c2315486->leave($__internal_ee627abb7199067aef29e7781abc120fe5a23a6453ec12c0aeb69f48c2315486_prof);

    }

    public function getTemplateName()
    {
        return "AssoBundle::layout_home.html.twig";
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
        return new Twig_Source("{# src/EK/AssoBundle/Resources/views/layout_home.html.twig #}
{% extends '::base_home.html.twig' %}", "AssoBundle::layout_home.html.twig", "/Users/ekdevcenter/Sites/educapeace/src/EK/AssoBundle/Resources/views/layout_home.html.twig");
    }
}
