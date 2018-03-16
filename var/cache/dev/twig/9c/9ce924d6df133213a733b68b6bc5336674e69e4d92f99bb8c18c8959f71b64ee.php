<?php

/* ::contact_form.html.twig */
class __TwigTemplate_7a139113f463af522ea976b12e39046cfc5f49d5a90a63c177b8b1023a973f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e86367b804e3ed7cfdbfbec2178cca0013a6d23d2bd117b2e9cb9b3bb2a94c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86367b804e3ed7cfdbfbec2178cca0013a6d23d2bd117b2e9cb9b3bb2a94c65->enter($__internal_e86367b804e3ed7cfdbfbec2178cca0013a6d23d2bd117b2e9cb9b3bb2a94c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact_form.html.twig"));

        $__internal_9d99e9f3f53c15815bec0e50f544214662b97eca845c586531438f844c618514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d99e9f3f53c15815bec0e50f544214662b97eca845c586531438f844c618514->enter($__internal_9d99e9f3f53c15815bec0e50f544214662b97eca845c586531438f844c618514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact_form.html.twig"));

        // line 1
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("others.text.11"), "html", null, true);
        echo "</h4>
<p>
    ";
        // line 3
        if ((array_key_exists("tag", $context) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 3, $this->getSourceContext()); })()) == 1))) {
            // line 4
            echo "        <b>
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "flashes", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "                <div class=\"alert alert-success\">
                    ";
                // line 7
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </b>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ((array_key_exists("tag", $context) && ((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 13, $this->getSourceContext()); })()) == 0))) {
            // line 14
            echo "        <b>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "flashes", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "                <div class=\"alert alert-danger\">
                    ";
                // line 17
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </b>
    ";
        }
        // line 22
        echo "</p>
";
        // line 23
        if (array_key_exists("form", $context)) {
            // line 24
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'form_start');
            echo "
        <fieldset class=\"form-group\" style=\"margin-bottom: 4px;\">
            ";
            // line 26
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "email", array()), 'errors');
            echo "
        </fieldset>

        <fieldset class=\"form-group\" style=\"margin-bottom: 4px;\">
            ";
            // line 31
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "subject", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            ";
            // line 32
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "subject", array()), 'errors');
            echo "
        </fieldset>
        <fieldset class=\"form-group my-3\" style=\"margin-bottom: 4px;\">
            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "body", array()), 'widget', array("attr" => array("cols" => "5", "rows" => "4", "class" => "form-control")));
            echo "
            ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "body", array()), 'errors');
            echo "
        </fieldset>
        <fieldset>
            ";
            // line 40
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'rest');
            echo "
            <div class=\"g-recaptcha\" data-sitekey=\"6LcaQT0UAAAAAGTQwl21SicdsjbLGxdjKFIbCrKH\"></div>
        </fieldset>
        <br/>
        <fieldset class=\"text-right\">
            <button type=\"submit\" class=\"btn btn-outline-secondary\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("others.text.12"), "html", null, true);
            echo "</button>
        </fieldset>
    ";
            // line 47
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), 'form_end');
            echo "
";
        } else {
        }
        
        $__internal_e86367b804e3ed7cfdbfbec2178cca0013a6d23d2bd117b2e9cb9b3bb2a94c65->leave($__internal_e86367b804e3ed7cfdbfbec2178cca0013a6d23d2bd117b2e9cb9b3bb2a94c65_prof);

        
        $__internal_9d99e9f3f53c15815bec0e50f544214662b97eca845c586531438f844c618514->leave($__internal_9d99e9f3f53c15815bec0e50f544214662b97eca845c586531438f844c618514_prof);

    }

    public function getTemplateName()
    {
        return "::contact_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 47,  135 => 45,  126 => 40,  120 => 36,  116 => 35,  110 => 32,  106 => 31,  99 => 27,  95 => 26,  89 => 24,  87 => 23,  84 => 22,  80 => 20,  71 => 17,  68 => 16,  64 => 15,  61 => 14,  59 => 13,  56 => 12,  52 => 10,  43 => 7,  40 => 6,  36 => 5,  33 => 4,  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4>{{ 'others.text.11'|trans }}</h4>
<p>
    {% if tag is defined and tag == 1 %}
        <b>
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
        </b>
    {% endif %}

    {% if tag is defined and tag == 0 %}
        <b>
            {% for message in app.flashes('warning') %}
                <div class=\"alert alert-danger\">
                    {{ message }}
                </div>
            {% endfor %}
        </b>
    {% endif %}
</p>
{% if form is defined %}
    {{ form_start(form) }}
        <fieldset class=\"form-group\" style=\"margin-bottom: 4px;\">
            {{ form_widget(form.email, { 'attr': {'class':'form-control'} }) }}
            {{ form_errors(form.email) }}
        </fieldset>

        <fieldset class=\"form-group\" style=\"margin-bottom: 4px;\">
            {{ form_widget(form.subject, { 'attr': {'class':'form-control'} }) }}
            {{ form_errors(form.subject) }}
        </fieldset>
        <fieldset class=\"form-group my-3\" style=\"margin-bottom: 4px;\">
            {{ form_widget(form.body, { 'attr': {'cols':'5', 'rows':'4', 'class':'form-control'} }) }}
            {{ form_errors(form.body) }}
        </fieldset>
        <fieldset>
            {# Render CSRF token #}
            {{ form_rest(form) }}
            <div class=\"g-recaptcha\" data-sitekey=\"6LcaQT0UAAAAAGTQwl21SicdsjbLGxdjKFIbCrKH\"></div>
        </fieldset>
        <br/>
        <fieldset class=\"text-right\">
            <button type=\"submit\" class=\"btn btn-outline-secondary\">{{ 'others.text.12'|trans }}</button>
        </fieldset>
    {{ form_end(form) }}
{% else %}
{% endif %}", "::contact_form.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/contact_form.html.twig");
    }
}
