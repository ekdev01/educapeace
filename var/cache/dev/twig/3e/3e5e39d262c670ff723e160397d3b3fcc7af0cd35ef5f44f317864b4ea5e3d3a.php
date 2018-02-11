<?php

/* base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e296b7b77f9212705631eb47de2e2e526c3d1bc4f8376785329ce0415fcebe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e296b7b77f9212705631eb47de2e2e526c3d1bc4f8376785329ce0415fcebe6->enter($__internal_4e296b7b77f9212705631eb47de2e2e526c3d1bc4f8376785329ce0415fcebe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ac9236eff3562ab643c46b19f9d4de297b246b171458dc1bff7d42e5b7d0294f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9236eff3562ab643c46b19f9d4de297b246b171458dc1bff7d42e5b7d0294f->enter($__internal_ac9236eff3562ab643c46b19f9d4de297b246b171458dc1bff7d42e5b7d0294f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4e296b7b77f9212705631eb47de2e2e526c3d1bc4f8376785329ce0415fcebe6->leave($__internal_4e296b7b77f9212705631eb47de2e2e526c3d1bc4f8376785329ce0415fcebe6_prof);

        
        $__internal_ac9236eff3562ab643c46b19f9d4de297b246b171458dc1bff7d42e5b7d0294f->leave($__internal_ac9236eff3562ab643c46b19f9d4de297b246b171458dc1bff7d42e5b7d0294f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1218a02851ea2e54db509a833db2dfa953b0d64acc544ce8ded5aa0152a37626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1218a02851ea2e54db509a833db2dfa953b0d64acc544ce8ded5aa0152a37626->enter($__internal_1218a02851ea2e54db509a833db2dfa953b0d64acc544ce8ded5aa0152a37626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_487a523ee441fdb3d1ff3314aac1df58a9f81862babb78f492c35d8bb30903c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487a523ee441fdb3d1ff3314aac1df58a9f81862babb78f492c35d8bb30903c6->enter($__internal_487a523ee441fdb3d1ff3314aac1df58a9f81862babb78f492c35d8bb30903c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_487a523ee441fdb3d1ff3314aac1df58a9f81862babb78f492c35d8bb30903c6->leave($__internal_487a523ee441fdb3d1ff3314aac1df58a9f81862babb78f492c35d8bb30903c6_prof);

        
        $__internal_1218a02851ea2e54db509a833db2dfa953b0d64acc544ce8ded5aa0152a37626->leave($__internal_1218a02851ea2e54db509a833db2dfa953b0d64acc544ce8ded5aa0152a37626_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b4e84b8061bafe37cb1e0bc21a41cc124267f39a7a9df5d5d5fca74807fc1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4e84b8061bafe37cb1e0bc21a41cc124267f39a7a9df5d5d5fca74807fc1db->enter($__internal_9b4e84b8061bafe37cb1e0bc21a41cc124267f39a7a9df5d5d5fca74807fc1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_48fc43c9f576e3506cb9c3ff4e753500d2c7a38993cc3c1786e172da85339ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fc43c9f576e3506cb9c3ff4e753500d2c7a38993cc3c1786e172da85339ae6->enter($__internal_48fc43c9f576e3506cb9c3ff4e753500d2c7a38993cc3c1786e172da85339ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_48fc43c9f576e3506cb9c3ff4e753500d2c7a38993cc3c1786e172da85339ae6->leave($__internal_48fc43c9f576e3506cb9c3ff4e753500d2c7a38993cc3c1786e172da85339ae6_prof);

        
        $__internal_9b4e84b8061bafe37cb1e0bc21a41cc124267f39a7a9df5d5d5fca74807fc1db->leave($__internal_9b4e84b8061bafe37cb1e0bc21a41cc124267f39a7a9df5d5d5fca74807fc1db_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffd4f78c0760bd10350b8fb685bf9e2ac45e2240780deae05f94841273d5198c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd4f78c0760bd10350b8fb685bf9e2ac45e2240780deae05f94841273d5198c->enter($__internal_ffd4f78c0760bd10350b8fb685bf9e2ac45e2240780deae05f94841273d5198c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcef73dd4f7ff2448e9d6be5a243aba764f86e538af40d7af21f8b0db802375a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcef73dd4f7ff2448e9d6be5a243aba764f86e538af40d7af21f8b0db802375a->enter($__internal_bcef73dd4f7ff2448e9d6be5a243aba764f86e538af40d7af21f8b0db802375a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bcef73dd4f7ff2448e9d6be5a243aba764f86e538af40d7af21f8b0db802375a->leave($__internal_bcef73dd4f7ff2448e9d6be5a243aba764f86e538af40d7af21f8b0db802375a_prof);

        
        $__internal_ffd4f78c0760bd10350b8fb685bf9e2ac45e2240780deae05f94841273d5198c->leave($__internal_ffd4f78c0760bd10350b8fb685bf9e2ac45e2240780deae05f94841273d5198c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffbf681431ad02a8e0d4306ce6a005bb2429a264f4859bbe0e4a5b25c32f5e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbf681431ad02a8e0d4306ce6a005bb2429a264f4859bbe0e4a5b25c32f5e8a->enter($__internal_ffbf681431ad02a8e0d4306ce6a005bb2429a264f4859bbe0e4a5b25c32f5e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_24cb8f43ad1e2c18d2a10fded03398725c1a7e4dd74621c8f9c6b8c3e8e67636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cb8f43ad1e2c18d2a10fded03398725c1a7e4dd74621c8f9c6b8c3e8e67636->enter($__internal_24cb8f43ad1e2c18d2a10fded03398725c1a7e4dd74621c8f9c6b8c3e8e67636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24cb8f43ad1e2c18d2a10fded03398725c1a7e4dd74621c8f9c6b8c3e8e67636->leave($__internal_24cb8f43ad1e2c18d2a10fded03398725c1a7e4dd74621c8f9c6b8c3e8e67636_prof);

        
        $__internal_ffbf681431ad02a8e0d4306ce6a005bb2429a264f4859bbe0e4a5b25c32f5e8a->leave($__internal_ffbf681431ad02a8e0d4306ce6a005bb2429a264f4859bbe0e4a5b25c32f5e8a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/base.html.twig");
    }
}
