<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1764ee77cde2bb6a5f9a16056662fdb58b3d3b1c7f46c76aad280a8520af3a27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7e1e1d105f9b78dd3d323fd4107864f111bb15beb14bb1f795fb05dcfccbefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e1e1d105f9b78dd3d323fd4107864f111bb15beb14bb1f795fb05dcfccbefd->enter($__internal_b7e1e1d105f9b78dd3d323fd4107864f111bb15beb14bb1f795fb05dcfccbefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e3b0dfc7bd8284db91c77a79845f2c7b26c2487a7d2789961cde37ed82b9a57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b0dfc7bd8284db91c77a79845f2c7b26c2487a7d2789961cde37ed82b9a57c->enter($__internal_e3b0dfc7bd8284db91c77a79845f2c7b26c2487a7d2789961cde37ed82b9a57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7e1e1d105f9b78dd3d323fd4107864f111bb15beb14bb1f795fb05dcfccbefd->leave($__internal_b7e1e1d105f9b78dd3d323fd4107864f111bb15beb14bb1f795fb05dcfccbefd_prof);

        
        $__internal_e3b0dfc7bd8284db91c77a79845f2c7b26c2487a7d2789961cde37ed82b9a57c->leave($__internal_e3b0dfc7bd8284db91c77a79845f2c7b26c2487a7d2789961cde37ed82b9a57c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_107392febff6b4dc879d432d512eab11774dd887c229ba8e78e2f63b4c18af2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107392febff6b4dc879d432d512eab11774dd887c229ba8e78e2f63b4c18af2a->enter($__internal_107392febff6b4dc879d432d512eab11774dd887c229ba8e78e2f63b4c18af2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c263d7643beaa25a83483053ee54e19ca42dd3234b67dd571ec222e616903c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c263d7643beaa25a83483053ee54e19ca42dd3234b67dd571ec222e616903c08->enter($__internal_c263d7643beaa25a83483053ee54e19ca42dd3234b67dd571ec222e616903c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c263d7643beaa25a83483053ee54e19ca42dd3234b67dd571ec222e616903c08->leave($__internal_c263d7643beaa25a83483053ee54e19ca42dd3234b67dd571ec222e616903c08_prof);

        
        $__internal_107392febff6b4dc879d432d512eab11774dd887c229ba8e78e2f63b4c18af2a->leave($__internal_107392febff6b4dc879d432d512eab11774dd887c229ba8e78e2f63b4c18af2a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/ekdevcenter/Sites/educapeace/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
