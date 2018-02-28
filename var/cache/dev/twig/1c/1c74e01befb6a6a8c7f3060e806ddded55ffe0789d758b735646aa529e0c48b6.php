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
        $__internal_5695bd456fc1e2d84247cb5cf607ae57bc535e4f0f5cdf7ba5b07ac81676563b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5695bd456fc1e2d84247cb5cf607ae57bc535e4f0f5cdf7ba5b07ac81676563b->enter($__internal_5695bd456fc1e2d84247cb5cf607ae57bc535e4f0f5cdf7ba5b07ac81676563b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_31bdefeb85f046d60d9275db3498315e7062ba87a4a147d7c7fc18255afbf12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bdefeb85f046d60d9275db3498315e7062ba87a4a147d7c7fc18255afbf12c->enter($__internal_31bdefeb85f046d60d9275db3498315e7062ba87a4a147d7c7fc18255afbf12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5695bd456fc1e2d84247cb5cf607ae57bc535e4f0f5cdf7ba5b07ac81676563b->leave($__internal_5695bd456fc1e2d84247cb5cf607ae57bc535e4f0f5cdf7ba5b07ac81676563b_prof);

        
        $__internal_31bdefeb85f046d60d9275db3498315e7062ba87a4a147d7c7fc18255afbf12c->leave($__internal_31bdefeb85f046d60d9275db3498315e7062ba87a4a147d7c7fc18255afbf12c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_389022edc2201dc2df09c9a2db07586358f98df8428cb72cf4b199ceb97e3097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389022edc2201dc2df09c9a2db07586358f98df8428cb72cf4b199ceb97e3097->enter($__internal_389022edc2201dc2df09c9a2db07586358f98df8428cb72cf4b199ceb97e3097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f0b4b65e15a0b8f22dff788f3bbeca898b5c5a926fb199564c6f47fe3f1ac62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b4b65e15a0b8f22dff788f3bbeca898b5c5a926fb199564c6f47fe3f1ac62a->enter($__internal_f0b4b65e15a0b8f22dff788f3bbeca898b5c5a926fb199564c6f47fe3f1ac62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f0b4b65e15a0b8f22dff788f3bbeca898b5c5a926fb199564c6f47fe3f1ac62a->leave($__internal_f0b4b65e15a0b8f22dff788f3bbeca898b5c5a926fb199564c6f47fe3f1ac62a_prof);

        
        $__internal_389022edc2201dc2df09c9a2db07586358f98df8428cb72cf4b199ceb97e3097->leave($__internal_389022edc2201dc2df09c9a2db07586358f98df8428cb72cf4b199ceb97e3097_prof);

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
