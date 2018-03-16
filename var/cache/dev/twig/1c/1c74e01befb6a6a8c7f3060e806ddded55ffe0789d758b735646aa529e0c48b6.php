<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_93e5928dff63d918948dcf6e995fbb5b36f8e0599a4fe7138c72d5494110bad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_159b3a1bb439e47f0d45814c6b4bc15c0bc02ebae9a1a0a2db986b9b0f2b8d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159b3a1bb439e47f0d45814c6b4bc15c0bc02ebae9a1a0a2db986b9b0f2b8d12->enter($__internal_159b3a1bb439e47f0d45814c6b4bc15c0bc02ebae9a1a0a2db986b9b0f2b8d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4608195ee0c5a29eb90f4cf66d270eaa021136976adbcf52ae9b7880dc429446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4608195ee0c5a29eb90f4cf66d270eaa021136976adbcf52ae9b7880dc429446->enter($__internal_4608195ee0c5a29eb90f4cf66d270eaa021136976adbcf52ae9b7880dc429446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_159b3a1bb439e47f0d45814c6b4bc15c0bc02ebae9a1a0a2db986b9b0f2b8d12->leave($__internal_159b3a1bb439e47f0d45814c6b4bc15c0bc02ebae9a1a0a2db986b9b0f2b8d12_prof);

        
        $__internal_4608195ee0c5a29eb90f4cf66d270eaa021136976adbcf52ae9b7880dc429446->leave($__internal_4608195ee0c5a29eb90f4cf66d270eaa021136976adbcf52ae9b7880dc429446_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c61305179f7b9d8ef55efd8e152b99e3c8e9dc1eee34431f8cde6945abce89e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61305179f7b9d8ef55efd8e152b99e3c8e9dc1eee34431f8cde6945abce89e7->enter($__internal_c61305179f7b9d8ef55efd8e152b99e3c8e9dc1eee34431f8cde6945abce89e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5b23eabe2a1245dbbe1412787fe285288539cf78a8f65759150998a7a95ef2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b23eabe2a1245dbbe1412787fe285288539cf78a8f65759150998a7a95ef2b4->enter($__internal_5b23eabe2a1245dbbe1412787fe285288539cf78a8f65759150998a7a95ef2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5b23eabe2a1245dbbe1412787fe285288539cf78a8f65759150998a7a95ef2b4->leave($__internal_5b23eabe2a1245dbbe1412787fe285288539cf78a8f65759150998a7a95ef2b4_prof);

        
        $__internal_c61305179f7b9d8ef55efd8e152b99e3c8e9dc1eee34431f8cde6945abce89e7->leave($__internal_c61305179f7b9d8ef55efd8e152b99e3c8e9dc1eee34431f8cde6945abce89e7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/ekdevcenter/Sites/educapeace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
