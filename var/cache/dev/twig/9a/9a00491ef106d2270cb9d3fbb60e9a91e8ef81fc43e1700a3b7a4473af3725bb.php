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
        $__internal_8106208857e939e2be48e0263ae8e60cc873b152928ee01aa48322086ff05ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8106208857e939e2be48e0263ae8e60cc873b152928ee01aa48322086ff05ec8->enter($__internal_8106208857e939e2be48e0263ae8e60cc873b152928ee01aa48322086ff05ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::js_ident.html.twig"));

        $__internal_a63598a67e629decfc04870034b2562fc7b44f6c7fffc8b7e375507918651399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63598a67e629decfc04870034b2562fc7b44f6c7fffc8b7e375507918651399->enter($__internal_a63598a67e629decfc04870034b2562fc7b44f6c7fffc8b7e375507918651399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::js_ident.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_8106208857e939e2be48e0263ae8e60cc873b152928ee01aa48322086ff05ec8->leave($__internal_8106208857e939e2be48e0263ae8e60cc873b152928ee01aa48322086ff05ec8_prof);

        
        $__internal_a63598a67e629decfc04870034b2562fc7b44f6c7fffc8b7e375507918651399->leave($__internal_a63598a67e629decfc04870034b2562fc7b44f6c7fffc8b7e375507918651399_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7654b084fb5495c8867d5ad8e86f59013275e70bda8fe2b44d90cbd435ec3e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7654b084fb5495c8867d5ad8e86f59013275e70bda8fe2b44d90cbd435ec3e7b->enter($__internal_7654b084fb5495c8867d5ad8e86f59013275e70bda8fe2b44d90cbd435ec3e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3b39b4c0abf9f5a3f8b7ecdd55bc1deb6cd90d53a81296b84beb59c6633760e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b39b4c0abf9f5a3f8b7ecdd55bc1deb6cd90d53a81296b84beb59c6633760e8->enter($__internal_3b39b4c0abf9f5a3f8b7ecdd55bc1deb6cd90d53a81296b84beb59c6633760e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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

            // Form 1

            \$('#_choice-btn-60-1').click(function() {
                var deductAMount = parseFloat((60 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_1').val(deductAMount);
                \$('#amount_choice_1').val('150');
                \$('#amount_choice_deduct_1').val(deductAMount);
            });

            \$('#_choice-btn-100-1').click(function() {
                var deductAMount = parseFloat((100 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_1').val(deductAMount);
                \$('#amount_choice_1').val('100');
                \$('#amount_choice_deduct_1').val(deductAMount);
            });

            \$('#_choice-btn-150-1').click(function() {
                var deductAMount = parseFloat((150 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_1').val(deductAMount);
                \$('#amount_choice_1').val('60');
                \$('#amount_choice_deduct_1').val(deductAMount);
            });

            // Form 2

            \$('#_choice-btn-60-2').click(function() {
                var deductAMount = parseFloat((60 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_2').val(deductAMount);
                \$('#amount_choice_2').val('60');
                \$('#amount_choice_deduct_2').val(deductAMount);
            });

            \$('#_choice-btn-100-2').click(function() {
                var deductAMount = parseFloat((100 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_2').val(deductAMount);
                \$('#amount_choice_2').val('100');
                \$('#amount_choice_deduct_2').val(deductAMount);

            });

            \$('#_choice-btn-150-2').click(function() {
                var deductAMount = parseFloat((150 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_2').val(deductAMount);
                \$('#amount_choice_2').val('150');
                \$('#amount_choice_deduct_2').val(deductAMount);
            });

            \$('#amount_free_1').keypress(function(e) {
                e.preventDefault();
                var amount_free = 0.0;
                console.log('amount_free = '+amount_free);
            });

            \$('#amount_free_2').keypress(function(e) {
               /* e.preventDefault();
                var amount_free = 0.0;
                amount_free = fireKeyboardEvent(\"keypress\", 13);
                console.log('amount_free = '+amount_free);*/
            });

        });
    </script>
";
        
        $__internal_3b39b4c0abf9f5a3f8b7ecdd55bc1deb6cd90d53a81296b84beb59c6633760e8->leave($__internal_3b39b4c0abf9f5a3f8b7ecdd55bc1deb6cd90d53a81296b84beb59c6633760e8_prof);

        
        $__internal_7654b084fb5495c8867d5ad8e86f59013275e70bda8fe2b44d90cbd435ec3e7b->leave($__internal_7654b084fb5495c8867d5ad8e86f59013275e70bda8fe2b44d90cbd435ec3e7b_prof);

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

            // Form 1

            \$('#_choice-btn-60-1').click(function() {
                var deductAMount = parseFloat((60 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_1').val(deductAMount);
                \$('#amount_choice_1').val('150');
                \$('#amount_choice_deduct_1').val(deductAMount);
            });

            \$('#_choice-btn-100-1').click(function() {
                var deductAMount = parseFloat((100 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_1').val(deductAMount);
                \$('#amount_choice_1').val('100');
                \$('#amount_choice_deduct_1').val(deductAMount);
            });

            \$('#_choice-btn-150-1').click(function() {
                var deductAMount = parseFloat((150 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_1').val(deductAMount);
                \$('#amount_choice_1').val('60');
                \$('#amount_choice_deduct_1').val(deductAMount);
            });

            // Form 2

            \$('#_choice-btn-60-2').click(function() {
                var deductAMount = parseFloat((60 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_2').val(deductAMount);
                \$('#amount_choice_2').val('60');
                \$('#amount_choice_deduct_2').val(deductAMount);
            });

            \$('#_choice-btn-100-2').click(function() {
                var deductAMount = parseFloat((100 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_2').val(deductAMount);
                \$('#amount_choice_2').val('100');
                \$('#amount_choice_deduct_2').val(deductAMount);

            });

            \$('#_choice-btn-150-2').click(function() {
                var deductAMount = parseFloat((150 * 0.34));

                deductAMount = deductAMount.toFixed(2);
                \$('#amount_deduct_2').val(deductAMount);
                \$('#amount_choice_2').val('150');
                \$('#amount_choice_deduct_2').val(deductAMount);
            });

            \$('#amount_free_1').keypress(function(e) {
                e.preventDefault();
                var amount_free = 0.0;
                console.log('amount_free = '+amount_free);
            });

            \$('#amount_free_2').keypress(function(e) {
               /* e.preventDefault();
                var amount_free = 0.0;
                amount_free = fireKeyboardEvent(\"keypress\", 13);
                console.log('amount_free = '+amount_free);*/
            });

        });
    </script>
{% endblock javascript %}", "::js_ident.html.twig", "/Users/ekdevcenter/Sites/educapeace/app/Resources/views/js_ident.html.twig");
    }
}
