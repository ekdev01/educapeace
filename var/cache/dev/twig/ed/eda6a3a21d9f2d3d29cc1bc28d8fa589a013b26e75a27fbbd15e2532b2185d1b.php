<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7edfc9dd30a7711658c0675a5b56bef71b3fb6910f211432c3df0c945ac9ac31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94070e96a22dcae066a69b1235ab4c20fba98a5a983edacfb87fe6809f0e0afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94070e96a22dcae066a69b1235ab4c20fba98a5a983edacfb87fe6809f0e0afd->enter($__internal_94070e96a22dcae066a69b1235ab4c20fba98a5a983edacfb87fe6809f0e0afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3728acd4d7092abaf6eb1f6067ca7585eaf033a54a21d04f5c70bc63d01a53fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3728acd4d7092abaf6eb1f6067ca7585eaf033a54a21d04f5c70bc63d01a53fd->enter($__internal_3728acd4d7092abaf6eb1f6067ca7585eaf033a54a21d04f5c70bc63d01a53fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94070e96a22dcae066a69b1235ab4c20fba98a5a983edacfb87fe6809f0e0afd->leave($__internal_94070e96a22dcae066a69b1235ab4c20fba98a5a983edacfb87fe6809f0e0afd_prof);

        
        $__internal_3728acd4d7092abaf6eb1f6067ca7585eaf033a54a21d04f5c70bc63d01a53fd->leave($__internal_3728acd4d7092abaf6eb1f6067ca7585eaf033a54a21d04f5c70bc63d01a53fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_090dab4f76c8b962feec0c42be1c53442bf517322b60f3ab32a61f709e148673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090dab4f76c8b962feec0c42be1c53442bf517322b60f3ab32a61f709e148673->enter($__internal_090dab4f76c8b962feec0c42be1c53442bf517322b60f3ab32a61f709e148673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b6815db77d9f04c924abe2d6551a800086079e1cf8c8212a1bc4b2e822e9b365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6815db77d9f04c924abe2d6551a800086079e1cf8c8212a1bc4b2e822e9b365->enter($__internal_b6815db77d9f04c924abe2d6551a800086079e1cf8c8212a1bc4b2e822e9b365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b6815db77d9f04c924abe2d6551a800086079e1cf8c8212a1bc4b2e822e9b365->leave($__internal_b6815db77d9f04c924abe2d6551a800086079e1cf8c8212a1bc4b2e822e9b365_prof);

        
        $__internal_090dab4f76c8b962feec0c42be1c53442bf517322b60f3ab32a61f709e148673->leave($__internal_090dab4f76c8b962feec0c42be1c53442bf517322b60f3ab32a61f709e148673_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_eee48f0242e577724c713556bed7fa771723c1e5ab5333ee4a09237fb1cbe752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee48f0242e577724c713556bed7fa771723c1e5ab5333ee4a09237fb1cbe752->enter($__internal_eee48f0242e577724c713556bed7fa771723c1e5ab5333ee4a09237fb1cbe752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25be8377bcd1c8d8753881a4702e963e0cba9c92ab09e60ecace0a471defd7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25be8377bcd1c8d8753881a4702e963e0cba9c92ab09e60ecace0a471defd7b7->enter($__internal_25be8377bcd1c8d8753881a4702e963e0cba9c92ab09e60ecace0a471defd7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_25be8377bcd1c8d8753881a4702e963e0cba9c92ab09e60ecace0a471defd7b7->leave($__internal_25be8377bcd1c8d8753881a4702e963e0cba9c92ab09e60ecace0a471defd7b7_prof);

        
        $__internal_eee48f0242e577724c713556bed7fa771723c1e5ab5333ee4a09237fb1cbe752->leave($__internal_eee48f0242e577724c713556bed7fa771723c1e5ab5333ee4a09237fb1cbe752_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_101efb110f51c8ddd42daea955f8b623a3fc05f89c985a00502edcd3c52ffb4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101efb110f51c8ddd42daea955f8b623a3fc05f89c985a00502edcd3c52ffb4b->enter($__internal_101efb110f51c8ddd42daea955f8b623a3fc05f89c985a00502edcd3c52ffb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20364324555e2c7736dcaeff08b18946629ad9aeb6e2c432ae3aeadc2ac350ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20364324555e2c7736dcaeff08b18946629ad9aeb6e2c432ae3aeadc2ac350ea->enter($__internal_20364324555e2c7736dcaeff08b18946629ad9aeb6e2c432ae3aeadc2ac350ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_20364324555e2c7736dcaeff08b18946629ad9aeb6e2c432ae3aeadc2ac350ea->leave($__internal_20364324555e2c7736dcaeff08b18946629ad9aeb6e2c432ae3aeadc2ac350ea_prof);

        
        $__internal_101efb110f51c8ddd42daea955f8b623a3fc05f89c985a00502edcd3c52ffb4b->leave($__internal_101efb110f51c8ddd42daea955f8b623a3fc05f89c985a00502edcd3c52ffb4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/ekdevcenter/Sites/educapeace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
