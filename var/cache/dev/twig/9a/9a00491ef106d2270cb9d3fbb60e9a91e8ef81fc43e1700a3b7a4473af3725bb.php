<?php

/* ::js_ident.html.twig */
class __TwigTemplate_3b50522a13460d4e66b150c19aefbd36f011a7f1e3ce0284cebfe32d9bac179d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5375230148341e6694f8cefd9a764a79219ce231e3ab142aab449b94b858e6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5375230148341e6694f8cefd9a764a79219ce231e3ab142aab449b94b858e6ce->enter($__internal_5375230148341e6694f8cefd9a764a79219ce231e3ab142aab449b94b858e6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::js_ident.html.twig"));

        $__internal_534ff335175b334cac94549e8d5069793ef52e49a5102761145e3578dcae6359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534ff335175b334cac94549e8d5069793ef52e49a5102761145e3578dcae6359->enter($__internal_534ff335175b334cac94549e8d5069793ef52e49a5102761145e3578dcae6359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::js_ident.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_5375230148341e6694f8cefd9a764a79219ce231e3ab142aab449b94b858e6ce->leave($__internal_5375230148341e6694f8cefd9a764a79219ce231e3ab142aab449b94b858e6ce_prof);

        
        $__internal_534ff335175b334cac94549e8d5069793ef52e49a5102761145e3578dcae6359->leave($__internal_534ff335175b334cac94549e8d5069793ef52e49a5102761145e3578dcae6359_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_207b170a559f33bebc9e3b3ea3d181c7f2e16aa570ca96529509c150fa2eed9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207b170a559f33bebc9e3b3ea3d181c7f2e16aa570ca96529509c150fa2eed9a->enter($__internal_207b170a559f33bebc9e3b3ea3d181c7f2e16aa570ca96529509c150fa2eed9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_24f92ec3ee30bd51599256de62761c973a5a94395fcaaa69ef3a99f5e22461bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f92ec3ee30bd51599256de62761c973a5a94395fcaaa69ef3a99f5e22461bd->enter($__internal_24f92ec3ee30bd51599256de62761c973a5a94395fcaaa69ef3a99f5e22461bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 2
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>

    <script>

        var \$loading = \$('#loadingDiv');
        \$(document)
            .ajaxStart(function () {
                \$loading.modal({backdrop: 'static', keyboard: false});
                \$loading.modal('show');
            })
            .ajaxStop(function () {
                \$loading.modal('hide');
            });

        \$(document).ready(function() {

            // Authentification processing via fosuserbundle
            \$('#authentification').click(function () {

                console.log('Authentification click!');
                \$('#_registerModal').modal('hide');

                \$.ajax({
                    type        : \"GET\",
                    url         : '";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "',
                    success: function(data) {
                        console.log('fos_user_security_login lancée!');
                        //console.log(data);

                        // Get token
                        var deb = (Number(data.indexOf('_csrf_token')) + 20);

                        // The length of the token is equal to 43
                        var fin = (\"JjNh6xVkegGG1-LBRf4KcObXVMmgoljpY9ZioWlS3b8\".length + 1);

                        //console.log('deb = '+deb+' - fin = '+ fin);

                        var token = data.substr(deb, 43);
                        //console.log('token = '+token);

                        \$('#_csrf_token').val(token);
                    }
                });
            });

            //\$(document).ready(function(){
                \$('#_submit_login').click(function(e){
                    e.preventDefault();
                    \$.ajax({
                        type        : \$('form').attr( 'method' ),
                        url         : '";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "',
                        data        : \$('form').serialize(),
                        dataType    : \"json\",
                        success     : function(data, status, object) {
                            console.log('fos_user_security_check submit');
                            console.log(data);
                            console.log('status = '+status);

                            if(status=='success') {
                                console.log('Redirection après connexion');
                                \$('#_authentificationModal').modal('hide');
                                document.location.href=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->getSourceContext()); })()), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
        echo "/\";
                            }
                            else if(data.error) {
                                console.log('Error!!');
                                \$('#error_login').html(data.message);
                            }
                            else {
                                \$('#_authentificationModal').modal('hide');
                            }

                        },
                        error: function(data, status, object){
                            setTimeout(function(){
                                console.log(data.message);
                            }, 1000);
                        }
                    });
                });
            //});

            // Registration processing via fosuserbundle
            \$('#registration').click(function () {

                console.log('Registration click!');
                \$('#_authentificationModal').modal('hide');

                \$.ajax({
                    type        : \"GET\",
                    url         : '";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "',
                    success: function(data) {
                        console.log('fos_user_registration_register lancée!');
                        console.log(data);

                        // Get token
                        var deb = (Number(data.indexOf('[_token]')) + 17);

                        // The length of the token is equal to 43
                        var fin = (\"rm5l1WpS6FguIgfb9EZuRXXzwvj2HEnCWKqCipSIy20\".length + 1);

                        console.log('deb = '+deb+' - fin = '+ fin);

                        var token = data.substr(deb, 43);
                        console.log('token = '+token);

                        \$('#fos_user_registration_form__token').val(token);
                    }
                });
            });

            //\$(document).ready(function(){
                \$('#_submit_register').click(function(e){

                    console.log('_submit_register click');

                    e.preventDefault();
                    \$.ajax({
                        type: \$('form').attr( 'method' ),
                        url: '";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "',
                        data: \$('form').serialize(),
                        dataType: \"json\",
                        success: function(data){
                            console.log('fos_user_registration_register ok');
                            console.log(data);

                            \$('#_registerModal').modal('hide');
                        },
                        error: function(data){
                            console.log('fos_user_registration_register error');
                            var deb = data.responseText.indexOf('<ul>');
                            var fin = data.responseText.indexOf('</ul>');

                            deb = (Number(deb) + 8);
                            fin = (Number(fin) - 5);
                            var msgerror = data.responseText.substring(deb,fin);
                            \$('#error_register').html(msgerror);

                            console.log('data.responseText =' + data.responseText);
                            console.log('msgerror = '+msgerror);
                        }
                    });
                });
            //});

            \$('#authentification_ins').click(function() {
                console.log('click sur authentification_ins');
                \$('#_registerModal').modal('hide');
            });

            \$('#_reseting_button').click(function() {
                console.log('click sur reseting_button');
                \$('#_authentificationModal').modal('hide');
            });

            \$('#_choice-btn-60-1').click(function() {
                alert('choice-btn-60-1');
                \$('#amount_free_1').val('60');
                var deductAMount =
            });

            \$('#_choice-btn-100-1').click(function() {
                alert('choice-btn-100-1');

            });

            \$('#_choice-btn-150-1').click(function() {
                alert('choice-btn-150-1');

            });

            \$('#_choice-btn-60-2').click(function() {
                alert('choice-btn-60-2');

            });

            \$('#_choice-btn-100-2').click(function() {
                alert('choice-btn-100-2');

            });

            \$('#_choice-btn-150-2').click(function() {
                alert('choice-btn-150-2');
            });
        });
    </script>
";
        
        $__internal_24f92ec3ee30bd51599256de62761c973a5a94395fcaaa69ef3a99f5e22461bd->leave($__internal_24f92ec3ee30bd51599256de62761c973a5a94395fcaaa69ef3a99f5e22461bd_prof);

        
        $__internal_207b170a559f33bebc9e3b3ea3d181c7f2e16aa570ca96529509c150fa2eed9a->leave($__internal_207b170a559f33bebc9e3b3ea3d181c7f2e16aa570ca96529509c150fa2eed9a_prof);

    }

    public function getTemplateName()
    {
        return "::js_ident.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 122,  146 => 93,  115 => 65,  101 => 54,  72 => 28,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascript %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>

    <script>

        var \$loading = \$('#loadingDiv');
        \$(document)
            .ajaxStart(function () {
                \$loading.modal({backdrop: 'static', keyboard: false});
                \$loading.modal('show');
            })
            .ajaxStop(function () {
                \$loading.modal('hide');
            });

        \$(document).ready(function() {

            // Authentification processing via fosuserbundle
            \$('#authentification').click(function () {

                console.log('Authentification click!');
                \$('#_registerModal').modal('hide');

                \$.ajax({
                    type        : \"GET\",
                    url         : '{{ path(\"fos_user_security_login\") }}',
                    success: function(data) {
                        console.log('fos_user_security_login lancée!');
                        //console.log(data);

                        // Get token
                        var deb = (Number(data.indexOf('_csrf_token')) + 20);

                        // The length of the token is equal to 43
                        var fin = (\"JjNh6xVkegGG1-LBRf4KcObXVMmgoljpY9ZioWlS3b8\".length + 1);

                        //console.log('deb = '+deb+' - fin = '+ fin);

                        var token = data.substr(deb, 43);
                        //console.log('token = '+token);

                        \$('#_csrf_token').val(token);
                    }
                });
            });

            //\$(document).ready(function(){
                \$('#_submit_login').click(function(e){
                    e.preventDefault();
                    \$.ajax({
                        type        : \$('form').attr( 'method' ),
                        url         : '{{ path(\"fos_user_security_check\") }}',
                        data        : \$('form').serialize(),
                        dataType    : \"json\",
                        success     : function(data, status, object) {
                            console.log('fos_user_security_check submit');
                            console.log(data);
                            console.log('status = '+status);

                            if(status=='success') {
                                console.log('Redirection après connexion');
                                \$('#_authentificationModal').modal('hide');
                                document.location.href=\"{{ app.request.getBaseURL() }}/\";
                            }
                            else if(data.error) {
                                console.log('Error!!');
                                \$('#error_login').html(data.message);
                            }
                            else {
                                \$('#_authentificationModal').modal('hide');
                            }

                        },
                        error: function(data, status, object){
                            setTimeout(function(){
                                console.log(data.message);
                            }, 1000);
                        }
                    });
                });
            //});

            // Registration processing via fosuserbundle
            \$('#registration').click(function () {

                console.log('Registration click!');
                \$('#_authentificationModal').modal('hide');

                \$.ajax({
                    type        : \"GET\",
                    url         : '{{ path(\"fos_user_registration_register\") }}',
                    success: function(data) {
                        console.log('fos_user_registration_register lancée!');
                        console.log(data);

                        // Get token
                        var deb = (Number(data.indexOf('[_token]')) + 17);

                        // The length of the token is equal to 43
                        var fin = (\"rm5l1WpS6FguIgfb9EZuRXXzwvj2HEnCWKqCipSIy20\".length + 1);

                        console.log('deb = '+deb+' - fin = '+ fin);

                        var token = data.substr(deb, 43);
                        console.log('token = '+token);

                        \$('#fos_user_registration_form__token').val(token);
                    }
                });
            });

            //\$(document).ready(function(){
                \$('#_submit_register').click(function(e){

                    console.log('_submit_register click');

                    e.preventDefault();
                    \$.ajax({
                        type: \$('form').attr( 'method' ),
                        url: '{{ path(\"fos_user_registration_register\") }}',
                        data: \$('form').serialize(),
                        dataType: \"json\",
                        success: function(data){
                            console.log('fos_user_registration_register ok');
                            console.log(data);

                            \$('#_registerModal').modal('hide');
                        },
                        error: function(data){
                            console.log('fos_user_registration_register error');
                            var deb = data.responseText.indexOf('<ul>');
                            var fin = data.responseText.indexOf('</ul>');

                            deb = (Number(deb) + 8);
                            fin = (Number(fin) - 5);
                            var msgerror = data.responseText.substring(deb,fin);
                            \$('#error_register').html(msgerror);

                            console.log('data.responseText =' + data.responseText);
                            console.log('msgerror = '+msgerror);
                        }
                    });
                });
            //});

            \$('#authentification_ins').click(function() {
                console.log('click sur authentification_ins');
                \$('#_registerModal').modal('hide');
            });

            \$('#_reseting_button').click(function() {
                console.log('click sur reseting_button');
                \$('#_authentificationModal').modal('hide');
            });

            \$('#_choice-btn-60-1').click(function() {
                alert('choice-btn-60-1');
                \$('#amount_free_1').val('60');
                var deductAMount =
            });

            \$('#_choice-btn-100-1').click(function() {
                alert('choice-btn-100-1');

            });

            \$('#_choice-btn-150-1').click(function() {
                alert('choice-btn-150-1');

            });

            \$('#_choice-btn-60-2').click(function() {
                alert('choice-btn-60-2');

            });

            \$('#_choice-btn-100-2').click(function() {
                alert('choice-btn-100-2');

            });

            \$('#_choice-btn-150-2').click(function() {
                alert('choice-btn-150-2');
            });
        });
    </script>
{% endblock javascript %}", "::js_ident.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/js_ident.html.twig");
    }
}
