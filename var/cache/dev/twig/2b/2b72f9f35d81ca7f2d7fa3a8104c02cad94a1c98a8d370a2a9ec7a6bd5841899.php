<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
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
        $__internal_d32d756bddff4a43f9c63b474ec0c36f95e6d4e52348a122d79b44c3e372a6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32d756bddff4a43f9c63b474ec0c36f95e6d4e52348a122d79b44c3e372a6f6->enter($__internal_d32d756bddff4a43f9c63b474ec0c36f95e6d4e52348a122d79b44c3e372a6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_42203f85c86d59b60af4dd354933f8b22d0658c8a7e9ad27795e9d6c6df9a66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42203f85c86d59b60af4dd354933f8b22d0658c8a7e9ad27795e9d6c6df9a66e->enter($__internal_42203f85c86d59b60af4dd354933f8b22d0658c8a7e9ad27795e9d6c6df9a66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32d756bddff4a43f9c63b474ec0c36f95e6d4e52348a122d79b44c3e372a6f6->leave($__internal_d32d756bddff4a43f9c63b474ec0c36f95e6d4e52348a122d79b44c3e372a6f6_prof);

        
        $__internal_42203f85c86d59b60af4dd354933f8b22d0658c8a7e9ad27795e9d6c6df9a66e->leave($__internal_42203f85c86d59b60af4dd354933f8b22d0658c8a7e9ad27795e9d6c6df9a66e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33c87fd8e992506594bae2409bae75b3d6eb0c1005589c914e48c61403e9b20f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c87fd8e992506594bae2409bae75b3d6eb0c1005589c914e48c61403e9b20f->enter($__internal_33c87fd8e992506594bae2409bae75b3d6eb0c1005589c914e48c61403e9b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7f9ad2dea8bf0fdc1b638a8a7dd3c647c7dab43d8f39fa7ded1c0288cebed373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9ad2dea8bf0fdc1b638a8a7dd3c647c7dab43d8f39fa7ded1c0288cebed373->enter($__internal_7f9ad2dea8bf0fdc1b638a8a7dd3c647c7dab43d8f39fa7ded1c0288cebed373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7f9ad2dea8bf0fdc1b638a8a7dd3c647c7dab43d8f39fa7ded1c0288cebed373->leave($__internal_7f9ad2dea8bf0fdc1b638a8a7dd3c647c7dab43d8f39fa7ded1c0288cebed373_prof);

        
        $__internal_33c87fd8e992506594bae2409bae75b3d6eb0c1005589c914e48c61403e9b20f->leave($__internal_33c87fd8e992506594bae2409bae75b3d6eb0c1005589c914e48c61403e9b20f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7858dd6203ebad06478c859c41fe7631ab5e7172a5197b60653bd22beffbb24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7858dd6203ebad06478c859c41fe7631ab5e7172a5197b60653bd22beffbb24c->enter($__internal_7858dd6203ebad06478c859c41fe7631ab5e7172a5197b60653bd22beffbb24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56f6616a2ac03387645cb1487ca15e10ba14de22464c9c5f661eb50026a12add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f6616a2ac03387645cb1487ca15e10ba14de22464c9c5f661eb50026a12add->enter($__internal_56f6616a2ac03387645cb1487ca15e10ba14de22464c9c5f661eb50026a12add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_56f6616a2ac03387645cb1487ca15e10ba14de22464c9c5f661eb50026a12add->leave($__internal_56f6616a2ac03387645cb1487ca15e10ba14de22464c9c5f661eb50026a12add_prof);

        
        $__internal_7858dd6203ebad06478c859c41fe7631ab5e7172a5197b60653bd22beffbb24c->leave($__internal_7858dd6203ebad06478c859c41fe7631ab5e7172a5197b60653bd22beffbb24c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a6d00dea3177bddf44f77d3a08bb12ec1edb1f5c11d963e139649289bef4fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6d00dea3177bddf44f77d3a08bb12ec1edb1f5c11d963e139649289bef4fc4->enter($__internal_4a6d00dea3177bddf44f77d3a08bb12ec1edb1f5c11d963e139649289bef4fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_460c40190936553510b2cefbce37708f6c1adcb911c2f770d2bb346e3b9cb84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460c40190936553510b2cefbce37708f6c1adcb911c2f770d2bb346e3b9cb84d->enter($__internal_460c40190936553510b2cefbce37708f6c1adcb911c2f770d2bb346e3b9cb84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_460c40190936553510b2cefbce37708f6c1adcb911c2f770d2bb346e3b9cb84d->leave($__internal_460c40190936553510b2cefbce37708f6c1adcb911c2f770d2bb346e3b9cb84d_prof);

        
        $__internal_4a6d00dea3177bddf44f77d3a08bb12ec1edb1f5c11d963e139649289bef4fc4->leave($__internal_4a6d00dea3177bddf44f77d3a08bb12ec1edb1f5c11d963e139649289bef4fc4_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
