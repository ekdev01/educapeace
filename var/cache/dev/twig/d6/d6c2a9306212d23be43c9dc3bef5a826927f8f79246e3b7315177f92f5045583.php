<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a9752ffc723e9a95d07a5c788c26d4c589d83463e40b2bc92ce63b6bd0f6716c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d8f08958cf0246bdcdaf6e37dec0f6f019e060f0f369c04bacacf05cf859a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8f08958cf0246bdcdaf6e37dec0f6f019e060f0f369c04bacacf05cf859a58->enter($__internal_4d8f08958cf0246bdcdaf6e37dec0f6f019e060f0f369c04bacacf05cf859a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_17e4cb3156b27c15abece846934aa3eb400090eaf82616e8ace7e9d88c0ecae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e4cb3156b27c15abece846934aa3eb400090eaf82616e8ace7e9d88c0ecae6->enter($__internal_17e4cb3156b27c15abece846934aa3eb400090eaf82616e8ace7e9d88c0ecae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4d8f08958cf0246bdcdaf6e37dec0f6f019e060f0f369c04bacacf05cf859a58->leave($__internal_4d8f08958cf0246bdcdaf6e37dec0f6f019e060f0f369c04bacacf05cf859a58_prof);

        
        $__internal_17e4cb3156b27c15abece846934aa3eb400090eaf82616e8ace7e9d88c0ecae6->leave($__internal_17e4cb3156b27c15abece846934aa3eb400090eaf82616e8ace7e9d88c0ecae6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5ba2945e3a4da24a256347205ad82b64dff4c4794aa19179c4226f54d56c444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ba2945e3a4da24a256347205ad82b64dff4c4794aa19179c4226f54d56c444->enter($__internal_a5ba2945e3a4da24a256347205ad82b64dff4c4794aa19179c4226f54d56c444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc47d694768c3a4bf61de5f9b966836340e3f2bc04bed213b2bcf26a421d4f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc47d694768c3a4bf61de5f9b966836340e3f2bc04bed213b2bcf26a421d4f26->enter($__internal_cc47d694768c3a4bf61de5f9b966836340e3f2bc04bed213b2bcf26a421d4f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cc47d694768c3a4bf61de5f9b966836340e3f2bc04bed213b2bcf26a421d4f26->leave($__internal_cc47d694768c3a4bf61de5f9b966836340e3f2bc04bed213b2bcf26a421d4f26_prof);

        
        $__internal_a5ba2945e3a4da24a256347205ad82b64dff4c4794aa19179c4226f54d56c444->leave($__internal_a5ba2945e3a4da24a256347205ad82b64dff4c4794aa19179c4226f54d56c444_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5e8cab6df94e205cf07b2e879115f83d377284597f7f2a68ae9aadeaffaebf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e8cab6df94e205cf07b2e879115f83d377284597f7f2a68ae9aadeaffaebf0->enter($__internal_d5e8cab6df94e205cf07b2e879115f83d377284597f7f2a68ae9aadeaffaebf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dccd6f632d3804ab4fbb5060d812209cceaeaef355ac59ce4dc6a9235a2e2f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccd6f632d3804ab4fbb5060d812209cceaeaef355ac59ce4dc6a9235a2e2f05->enter($__internal_dccd6f632d3804ab4fbb5060d812209cceaeaef355ac59ce4dc6a9235a2e2f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dccd6f632d3804ab4fbb5060d812209cceaeaef355ac59ce4dc6a9235a2e2f05->leave($__internal_dccd6f632d3804ab4fbb5060d812209cceaeaef355ac59ce4dc6a9235a2e2f05_prof);

        
        $__internal_d5e8cab6df94e205cf07b2e879115f83d377284597f7f2a68ae9aadeaffaebf0->leave($__internal_d5e8cab6df94e205cf07b2e879115f83d377284597f7f2a68ae9aadeaffaebf0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6a7f844893723eae1547e0f0b21815ef9d86e0d58beec56cb38040c86c33786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a7f844893723eae1547e0f0b21815ef9d86e0d58beec56cb38040c86c33786->enter($__internal_b6a7f844893723eae1547e0f0b21815ef9d86e0d58beec56cb38040c86c33786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18fd8f3a1b66224bad7ded0ec5240e5d73e2757fc3d81fc19c69dff9cbcdb60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fd8f3a1b66224bad7ded0ec5240e5d73e2757fc3d81fc19c69dff9cbcdb60e->enter($__internal_18fd8f3a1b66224bad7ded0ec5240e5d73e2757fc3d81fc19c69dff9cbcdb60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_18fd8f3a1b66224bad7ded0ec5240e5d73e2757fc3d81fc19c69dff9cbcdb60e->leave($__internal_18fd8f3a1b66224bad7ded0ec5240e5d73e2757fc3d81fc19c69dff9cbcdb60e_prof);

        
        $__internal_b6a7f844893723eae1547e0f0b21815ef9d86e0d58beec56cb38040c86c33786->leave($__internal_b6a7f844893723eae1547e0f0b21815ef9d86e0d58beec56cb38040c86c33786_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/ekdevcenter/Sites/educapeace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
