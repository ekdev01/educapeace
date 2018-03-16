<?php

/* ::modal.html.twig */
class __TwigTemplate_2e97891f7ebc33a97c0071dcc07d11bdf68bf994040be4a5affd1d592243cc25 extends Twig_Template
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
        $__internal_cba837ebe65933ea6eb539c38c45c0e5794e98a0e8fbff50c5a5aef1e2c7416c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba837ebe65933ea6eb539c38c45c0e5794e98a0e8fbff50c5a5aef1e2c7416c->enter($__internal_cba837ebe65933ea6eb539c38c45c0e5794e98a0e8fbff50c5a5aef1e2c7416c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modal.html.twig"));

        $__internal_3503a08504413155dd9ec0f31e7bbbcab2b68e8a5726283eb4c241c8c40f547a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3503a08504413155dd9ec0f31e7bbbcab2b68e8a5726283eb4c241c8c40f547a->enter($__internal_3503a08504413155dd9ec0f31e7bbbcab2b68e8a5726283eb4c241c8c40f547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modal.html.twig"));

        // line 1
        echo "<!-- Modal authentification -->
<div class=\"modal fade\" id=\"_authentificationModal\" aria-hidden=\"true\" aria-labelledby=\"exampleModalLabel\" role=\"dialog\" tabindex=\"-1\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content text-white bg-secondary\">
            <div class=\"modal-header  text-center\">
                <h4 class=\"modal-title text-center\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.login.label1"), "html", null, true);
        echo "</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> <span aria-hidden=\"true\">×</span></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-right\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.login.label2"), "html", null, true);
        echo ",&nbsp;<a class=\"text-white\" id=\"registration\" data-toggle=\"modal\" data-target=\"#_registerModal\" href=\"#\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.click.here"), "html", null, true);
        echo "</a>
                </div>
                <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <div id=\"error_login\" style=\"color: red;\"></div><br/>
                    <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\" value=\"\">
                    <div class=\"form-group\"><label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.ident"), "html", null, true);
        echo "</label>
                        <input class=\"form-control\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.ident"), "html", null, true);
        echo "\" autocomplete=\"username\" id=\"username\" name=\"_username\" required=\"required\" value=\"\">
                    </div>
                    <div class=\"form-group\"><label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</label>
                        <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "\" autocomplete=\"current-password\" id=\"password\" name=\"_password\" required=\"required\">
                    </div>
                    <br/>
                    <button class=\"btn btn-primary\" id=\"_submit_login\" name=\"_submit\" value=\"Connexion\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.button.connexion"), "html", null, true);
        echo "</button>
                </form>
            </div>
            <div class=\"modal-footer\">
                <div class=\"form-check\"><label class=\"form-check-label\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"_remember_me\" value=\"on\" checked=\"\" id=\"remember_me\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.remmeber.me"), "html", null, true);
        echo "
                    </label>
                </div>
                - <a href=\"\" class=\"text-white\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.pwd.forget"), "html", null, true);
        echo "?</a>
            </div>
        </div>
    </div>
</div>
<!-- /Modal authentification -->

<!-- Modal inscription -->
<div class=\"modal fade bd-example-modal-lg\" id=\"_registerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content text-white bg-secondary\">
            <div class=\"modal-header  text-center\">
                <h4 class=\"modal-title text-center\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.invite.register"), "html", null, true);
        echo "</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> <span aria-hidden=\"true\">×</span></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-right\">
                    <a class=\"text-white\" id=\"authentification_ins\" role=\"button\" data-toggle=\"modal\" data-target=\"#_authentificationModal\" href=\"#\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.button.connexion"), "html", null, true);
        echo "</a>
                </div>
                <form action=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"post\">
                    <div id=\"fos_user_registration_form\">
                        <div id=\"error_register\" style=\"color: red;\">
                            ";
        // line 54
        if (array_key_exists("form", $context)) {
            // line 55
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), 'errors');
            echo "
                            ";
        }
        // line 57
        echo "                        </div><br/>
                        <table width=\"100%\" cellspacing=\"2\" cellpadding=\"1\">
                            <tr>
                                <td colspan=\"3\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_email\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email"), "html", null, true);
        echo "</label>
                                        <input type=\"email\" class=\"form-control\" placeholder=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.register.ph.email"), "html", null, true);
        echo "\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=\"3\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_username\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.ident"), "html", null, true);
        echo "</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.register.ph.ident"), "html", null, true);
        echo "\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"180\">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_plainPassword_first\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</label>
                                        <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.register.ph.pwd"), "html", null, true);
        echo "\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" autocomplete=\"new-password\">
                                    </div>
                                </td>
                                <td width=\"10%\">&nbsp;</td>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_plainPassword_second\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.repeat.pwd"), "html", null, true);
        echo "</label>
                                        <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.register.ph.pwdb"), "html", null, true);
        echo "\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" autocomplete=\"new-password\">
                                    </div>
                                </td>
                            </tr>
                            <tr><td colspan=\"3\"><hr size=\"1\" style=\"color: white\" /></td></tr>
                            ";
        // line 153
        echo "                        </table>
                        <input type=\"hidden\" id=\"fos_user_registration_form__token\" name=\"fos_user_registration_form[_token]\" value=\"\">
                    </div>
                    <br/>
                    <button class=\"btn btn-primary\" id=\"_submit_register\" name=\"_submit\" value=\"Inscription\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.button.register"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal inscription -->

<!-- Modal password forgetten -->
<div class=\"modal fade\" id=\"reseting_pswd-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\" style=\"text-align: left\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.pwdforget.label1"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                <div class=\"modal-body\">
                    <div>";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.pwdforget.label2"), "html", null, true);
        echo ".</div>
                    <br>
                    <label for=\"basic-url\">";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.ident"), "html", null, true);
        echo ":</label>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.ident"), "html", null, true);
        echo "\" id=\"f2username\" size=\"15\" aria-describedby=\"basic-addon3\">
                    </div>
                    <br>
                    <label for=\"basic-url\">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email"), "html", null, true);
        echo ":</label>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email"), "html", null, true);
        echo "\" id=\"f2email\" size=\"15\" aria-describedby=\"basic-addon3\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.button.close"), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-primary\">";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.button.connexion"), "html", null, true);
        echo "</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Modal password forgetten -->

<!-- Modal shop explanation -->
<div class=\"modal fade bd-example-modal-lg\" id=\"_shopexplanationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content text-white bg-secondary-shop\">
            <div class=\"modal-header  text-center\">
                <h4 class=\"modal-title text-center\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.shop.title"), "html", null, true);
        echo "</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> <span aria-hidden=\"true\">×</span></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"modal-footer text-right\">
                    <button type=\"button\" class=\"btn btn-secondary text-white\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Modal shop explanation -->


<!-- Loading... -->
<div id=\"loadingDiv\" class=\"modal loadingDiv\" role=\"dialog\" tabindex=\"-1\" style=\"top: 10% !important;background-color: transparent;\">
    ";
        // line 221
        echo "    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\" style=\"text-align: center\">
                <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/loading.svg"), "html", null, true);
        echo "\" width=\"20%\" />
            </div>
        </div>
    </div>
</div>
<!-- /Loading... -->";
        
        $__internal_cba837ebe65933ea6eb539c38c45c0e5794e98a0e8fbff50c5a5aef1e2c7416c->leave($__internal_cba837ebe65933ea6eb539c38c45c0e5794e98a0e8fbff50c5a5aef1e2c7416c_prof);

        
        $__internal_3503a08504413155dd9ec0f31e7bbbcab2b68e8a5726283eb4c241c8c40f547a->leave($__internal_3503a08504413155dd9ec0f31e7bbbcab2b68e8a5726283eb4c241c8c40f547a_prof);

    }

    public function getTemplateName()
    {
        return "::modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 224,  291 => 221,  272 => 204,  256 => 191,  252 => 190,  245 => 186,  240 => 184,  234 => 181,  229 => 179,  224 => 177,  219 => 175,  211 => 170,  195 => 157,  189 => 153,  181 => 86,  177 => 85,  168 => 79,  164 => 78,  154 => 71,  150 => 70,  140 => 63,  136 => 62,  129 => 57,  123 => 55,  121 => 54,  115 => 51,  110 => 49,  102 => 44,  87 => 32,  81 => 29,  72 => 23,  66 => 20,  62 => 19,  57 => 17,  53 => 16,  47 => 13,  40 => 11,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Modal authentification -->
<div class=\"modal fade\" id=\"_authentificationModal\" aria-hidden=\"true\" aria-labelledby=\"exampleModalLabel\" role=\"dialog\" tabindex=\"-1\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content text-white bg-secondary\">
            <div class=\"modal-header  text-center\">
                <h4 class=\"modal-title text-center\">{{ 'form.login.label1'|trans }}</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> <span aria-hidden=\"true\">×</span></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-right\">
                    {{ 'form.login.label2'|trans }},&nbsp;<a class=\"text-white\" id=\"registration\" data-toggle=\"modal\" data-target=\"#_registerModal\" href=\"#\">{{ 'label.click.here'|trans }}</a>
                </div>
                <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
                    <div id=\"error_login\" style=\"color: red;\"></div><br/>
                    <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\" value=\"\">
                    <div class=\"form-group\"><label for=\"username\">{{ 'label.ident'|trans }}</label>
                        <input class=\"form-control\" placeholder=\"{{ 'label.ident'|trans }}\" autocomplete=\"username\" id=\"username\" name=\"_username\" required=\"required\" value=\"\">
                    </div>
                    <div class=\"form-group\"><label for=\"password\">{{ 'label.password'|trans }}</label>
                        <input type=\"password\" class=\"form-control\" placeholder=\"{{ 'label.password'|trans }}\" autocomplete=\"current-password\" id=\"password\" name=\"_password\" required=\"required\">
                    </div>
                    <br/>
                    <button class=\"btn btn-primary\" id=\"_submit_login\" name=\"_submit\" value=\"Connexion\">{{ 'label.button.connexion'|trans }}</button>
                </form>
            </div>
            <div class=\"modal-footer\">
                <div class=\"form-check\"><label class=\"form-check-label\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"_remember_me\" value=\"on\" checked=\"\" id=\"remember_me\">
                        {{ 'label.remmeber.me'|trans }}
                    </label>
                </div>
                - <a href=\"\" class=\"text-white\">{{ 'label.pwd.forget'|trans }}?</a>
            </div>
        </div>
    </div>
</div>
<!-- /Modal authentification -->

<!-- Modal inscription -->
<div class=\"modal fade bd-example-modal-lg\" id=\"_registerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content text-white bg-secondary\">
            <div class=\"modal-header  text-center\">
                <h4 class=\"modal-title text-center\">{{ 'label.invite.register'|trans }}</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> <span aria-hidden=\"true\">×</span></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-right\">
                    <a class=\"text-white\" id=\"authentification_ins\" role=\"button\" data-toggle=\"modal\" data-target=\"#_authentificationModal\" href=\"#\">{{ 'label.button.connexion'|trans }}</a>
                </div>
                <form action=\"{{ path('fos_user_registration_register') }}\" method=\"post\">
                    <div id=\"fos_user_registration_form\">
                        <div id=\"error_register\" style=\"color: red;\">
                            {% if form is defined  %}
                                {{ form_errors(form) }}
                            {% endif %}
                        </div><br/>
                        <table width=\"100%\" cellspacing=\"2\" cellpadding=\"1\">
                            <tr>
                                <td colspan=\"3\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_email\">{{ 'label.email'|trans }}</label>
                                        <input type=\"email\" class=\"form-control\" placeholder=\"{{ 'form.register.ph.email'|trans }}\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=\"3\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_username\">{{ 'label.ident'|trans }}</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'form.register.ph.ident'|trans }}\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"180\">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_plainPassword_first\">{{ 'label.password'|trans }}</label>
                                        <input type=\"password\" class=\"form-control\" placeholder=\"{{ 'form.register.ph.pwd'|trans }}\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" autocomplete=\"new-password\">
                                    </div>
                                </td>
                                <td width=\"10%\">&nbsp;</td>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_plainPassword_second\">{{ 'label.repeat.pwd'|trans }}</label>
                                        <input type=\"password\" class=\"form-control\" placeholder=\"{{ 'form.register.ph.pwdb'|trans }}\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" autocomplete=\"new-password\">
                                    </div>
                                </td>
                            </tr>
                            <tr><td colspan=\"3\"><hr size=\"1\" style=\"color: white\" /></td></tr>
                            {#
                            <tr>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_firstname\">{{ 'label.firstname'|trans }}</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'form.register.ph.firstname'|trans }}\" id=\"fos_user_registration_form_firstname\" name=\"fos_user_registration_form[firstname]\" required=\"required\">
                                    </div>
                                </td>
                                <td width=\"10%\">&nbsp;</td>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_lastname\">{{ 'label.lastname'|trans }}</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'form.register.ph.lastname'|trans }}\" id=\"fos_user_registration_form_lastname\" name=\"fos_user_registration_form[lastname]\" required=\"required\">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=\"3\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_address\">{{ 'label.address'|trans }}</label>
                                        <textarea class=\"form-control\" placeholder=\"{{ 'form.register.ph.address'|trans }}\" id=\"fos_user_registration_form_address\" name=\"fos_user_registration_form[address]\" required=\"required\"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_zipcode\">{{ 'label.zipcode'|trans }}</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'form.register.ph.zipcode'|trans }}\" id=\"fos_user_registration_form_zipcode\" name=\"fos_user_registration_form[zipcode]\">
                                    </div>
                                </td>
                                <td width=\"10%\">&nbsp;</td>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_city\">{{ 'label.city'|trans }}</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'form.register.ph.city'|trans }}\" id=\"fos_user_registration_form_city\" name=\"fos_user_registration_form[city]\" required=\"required\">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_country\">{{ 'label.country'|trans }}</label>
                                        <select class=\"form-control\" id=\"fos_user_registration_form_country\" name=\"fos_user_registration_form[country]\" required=\"required\">
                                            <option selected>{{ 'form.register.ph.country'|trans }}</option>
                                            {% if lang is defined and lang == 'en' %}
                                                {% include '::countries_en.html.twig' %}
                                            {% else %}
                                                {% include '::countries_fr.html.twig' %}
                                            {% endif %}
                                        </select>
                                    </div>
                                </td>
                                <td width=\"10%\">&nbsp;</td>
                                <td width=\"45%\">
                                    <div class=\"form-group\">
                                        <label for=\"fos_user_registration_form_phone\">{{ 'label.phone'|trans }}</label>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'form.register.ph.phone'|trans }}\" id=\"fos_user_registration_form_phone\" name=\"fos_user_registration_form[phone]\">
                                    </div>
                                </td>
                            </tr>
                         #}
                        </table>
                        <input type=\"hidden\" id=\"fos_user_registration_form__token\" name=\"fos_user_registration_form[_token]\" value=\"\">
                    </div>
                    <br/>
                    <button class=\"btn btn-primary\" id=\"_submit_register\" name=\"_submit\" value=\"Inscription\">{{ 'label.button.register'|trans }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal inscription -->

<!-- Modal password forgetten -->
<div class=\"modal fade\" id=\"reseting_pswd-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\" style=\"text-align: left\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">{{ 'form.pwdforget.label1'|trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
                <div class=\"modal-body\">
                    <div>{{ 'form.pwdforget.label2'|trans }}.</div>
                    <br>
                    <label for=\"basic-url\">{{ 'label.ident'|trans }}:</label>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'label.ident'|trans }}\" id=\"f2username\" size=\"15\" aria-describedby=\"basic-addon3\">
                    </div>
                    <br>
                    <label for=\"basic-url\">{{ 'label.email'|trans }}:</label>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"{{ 'label.email'|trans }}\" id=\"f2email\" size=\"15\" aria-describedby=\"basic-addon3\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{ 'label.button.close'|trans }}</button>
                    <button type=\"button\" class=\"btn btn-primary\">{{ 'label.button.connexion'|trans }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Modal password forgetten -->

<!-- Modal shop explanation -->
<div class=\"modal fade bd-example-modal-lg\" id=\"_shopexplanationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content text-white bg-secondary-shop\">
            <div class=\"modal-header  text-center\">
                <h4 class=\"modal-title text-center\">{{ 'label.shop.title'|trans }}</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"> <span aria-hidden=\"true\">×</span></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"modal-footer text-right\">
                    <button type=\"button\" class=\"btn btn-secondary text-white\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Modal shop explanation -->


<!-- Loading... -->
<div id=\"loadingDiv\" class=\"modal loadingDiv\" role=\"dialog\" tabindex=\"-1\" style=\"top: 10% !important;background-color: transparent;\">
    {# rgba(140, 132, 132, 0.84); #}
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\" style=\"text-align: center\">
                <img src=\"{{ asset('bundles/front/assets/img/loading.svg') }}\" width=\"20%\" />
            </div>
        </div>
    </div>
</div>
<!-- /Loading... -->", "::modal.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/modal.html.twig");
    }
}
