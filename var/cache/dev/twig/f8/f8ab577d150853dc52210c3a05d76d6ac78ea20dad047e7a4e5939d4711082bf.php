<?php

/* AssoBundle:Adhesion:index.html.twig */
class __TwigTemplate_228f758f34d83ae57569ae9789964ae4cb6a7b2c72f6402a00edd4ff07cc74e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("AssoBundle::layout_large.html.twig", "AssoBundle:Adhesion:index.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AssoBundle::layout_large.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b970dd543705df026750f9a513260941b5e5262b341b371a08203112c13962b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b970dd543705df026750f9a513260941b5e5262b341b371a08203112c13962b1->enter($__internal_b970dd543705df026750f9a513260941b5e5262b341b371a08203112c13962b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Adhesion:index.html.twig"));

        $__internal_6ffaacf1499f18b027950f08f0acd35fea171bb38cab4b527642abcc6b9cb140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffaacf1499f18b027950f08f0acd35fea171bb38cab4b527642abcc6b9cb140->enter($__internal_6ffaacf1499f18b027950f08f0acd35fea171bb38cab4b527642abcc6b9cb140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssoBundle:Adhesion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b970dd543705df026750f9a513260941b5e5262b341b371a08203112c13962b1->leave($__internal_b970dd543705df026750f9a513260941b5e5262b341b371a08203112c13962b1_prof);

        
        $__internal_6ffaacf1499f18b027950f08f0acd35fea171bb38cab4b527642abcc6b9cb140->leave($__internal_6ffaacf1499f18b027950f08f0acd35fea171bb38cab4b527642abcc6b9cb140_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4fc55c5223e8e7428a0d6e9f9521ff5be88fd58f07fa09376bfcf2da67f9ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fc55c5223e8e7428a0d6e9f9521ff5be88fd58f07fa09376bfcf2da67f9ed3->enter($__internal_a4fc55c5223e8e7428a0d6e9f9521ff5be88fd58f07fa09376bfcf2da67f9ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f852f05f1f23d72118c9f3620cf290c9e6abda08b32bc67f52f70b1a960ee5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f852f05f1f23d72118c9f3620cf290c9e6abda08b32bc67f52f70b1a960ee5d4->enter($__internal_f852f05f1f23d72118c9f3620cf290c9e6abda08b32bc67f52f70b1a960ee5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["page_titre"]) || array_key_exists("page_titre", $context) ? $context["page_titre"] : (function () { throw new Twig_Error_Runtime('Variable "page_titre" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_f852f05f1f23d72118c9f3620cf290c9e6abda08b32bc67f52f70b1a960ee5d4->leave($__internal_f852f05f1f23d72118c9f3620cf290c9e6abda08b32bc67f52f70b1a960ee5d4_prof);

        
        $__internal_a4fc55c5223e8e7428a0d6e9f9521ff5be88fd58f07fa09376bfcf2da67f9ed3->leave($__internal_a4fc55c5223e8e7428a0d6e9f9521ff5be88fd58f07fa09376bfcf2da67f9ed3_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_6fd14fe85ad89f40ba612ac29bf61f604d3aed96e33bb971c15cbb80467bf960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd14fe85ad89f40ba612ac29bf61f604d3aed96e33bb971c15cbb80467bf960->enter($__internal_6fd14fe85ad89f40ba612ac29bf61f604d3aed96e33bb971c15cbb80467bf960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ec9a0db1389523cc97e6bfb715aec3da2d94c600d101385efcea89ca12c1c59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9a0db1389523cc97e6bfb715aec3da2d94c600d101385efcea89ca12c1c59e->enter($__internal_ec9a0db1389523cc97e6bfb715aec3da2d94c600d101385efcea89ca12c1c59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"row justify-content-center text-left\">
        <div class=\"col-md-10 mx-4\">

            <!-- Je donne en ligne -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.1"), "html", null, true);
        echo "</b></small></h1>
                </div>
                <div class=\"row\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.2"), "html", null, true);
        echo "<br />
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.3"), "html", null, true);
        echo "
                    <p style=\"margin-left: 20px;\">
                        <br> • ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.4"), "html", null, true);
        echo ",
                        <br> • ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.5"), "html", null, true);
        echo ",
                        <br> • ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.6"), "html", null, true);
        echo ".
                    </p>
                </div>
            </div>
            <!-- /Je donne en ligne -->

            <!-- Je donne une fois-->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.7"), "html", null, true);
        echo "</b></small></h1>
                </div>
                <div class=\"row\">
                    <form>
                        <table width=\"100%\" cellspacing=\"3\" cellpadding=\"3\" border=\"0\" style=\"padding: 0.1em; border: none;\">
                            <thead>
                            <tr>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.title1"), "html", null, true);
        echo "</th>
                                <th width=\"2%\"></th>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.title2"), "html", null, true);
        echo "</th>
                                <th width=\"2%\"></th>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.title3"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td colspan=\"5\" height=\"5px\"></td></tr>
                            <tr>
                                <!-- Colonne 1 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #00b9f1; color: white; font-weight: bold; border: none;\">
                                    <table class=\"table-responsive\" width=\"100%\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #00b9f1;\">
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"text-center\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.intro1"), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.intro2"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr>
                                            <td colspan=\"3\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/child.png"), "html", null, true);
        echo "\" class=\"mx-auto pb-2\" width=\"260\"></td>
                                        </tr>
                                        <tr style=\"text-align: center;\">
                                            <td width=\"33%\"><button type=\"button\" id=\"_choice-btn-60-1\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">60€</button></td>
                                            <td width=\"33%\"><button type=\"button\" id=\"_choice-btn-100-1\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">100€</button></td>
                                            <td width=\"34%\"><button type=\"button\" id=\"_choice-btn-150-1\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">150€</button></td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"vertical-align: middle\">
                                            <td style=\"vertical-align: middle\" colspan=\"3\" class=\"text-right text-uppercase\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.free_amount"), "html", null, true);
        echo "</small>
                                                        (<span class=\"input-group-addon\">€</span>):
                                                    </label>
                                                    <input type=\"hidden\" class=\"form-control\" size=\"5\" id=\"amount_choice_1\" name=\"_amount_choice_1\" required>
                                                    <input type=\"text\" class=\"form-control\" size=\"5\" id=\"amount_free_1\" name=\"_amount_free_1\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"vertical-align: middle\">
                                            <td style=\"vertical-align: middle\" colspan=\"3\" class=\"text-right text-uppercase\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.deduct_amount"), "html", null, true);
        echo "</small>
                                                        (<span class=\"input-group-addon\">€</span>):
                                                    </label>
                                                    <input type=\"hidden\" class=\"form-control\" size=\"5\" id=\"amount_choice_deduct_1\" name=\"_amount_choice_deduct_1\" required>
                                                    <input type=\"text\" class=\"form-control\" size=\"8\" id=\"amount_deduct_1\" name=\"_amount_deduct_1\" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"2%\"></td>
                                <!-- Colonne 2 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #8ed8f8; color: white;\">
                                    <table class=\"table-responsive\" width=\"100%\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #8ed8f8;\">
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.civility"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <select class=\"form-control\" id=\"civility\" name=\"_civility\" required>
                                                        <option value=\"\">--</option>
                                                        <option value=\"1\">Madame</option>
                                                        <option value=\"2\">Mademoiselle</option>
                                                        <option value=\"3\">Monsieur</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.firstname"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"firtsname\" name=\"_firtsname\" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.name"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"_lastname\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.email"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"email\" class=\"form-control\" id=\"amountFree\" name=\"_amountFree\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.address"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"_address\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.address_cpl"), "html", null, true);
        echo "</small>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"address_complement\" name=\"_address_complement\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.zipcode"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"zipcode\" name=\"_zipcode\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.city"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"city\" name=\"_city\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.country"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <select class=\"form-control\" id=\"country\" name=\"_country\" required>
                                                        <option value=\"\">Choisir</option>
                                                        <option value=\"1\">France</option>
                                                        <option value=\"2\">Gabon</option>
                                                        <option value=\"3\">Gambie</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.phone"), "html", null, true);
        echo "</small>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"_phone\" required>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"2%\"></td>
                                <!-- Colonne 3 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #c7eafb;\">
                                    <table width=\"100%\" class=\"table-responsive\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #c7eafb;\">
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <button type=\"button\" id=\"choice-btn-100\" class=\"btn btn-md btn-block bg-secondary-card text-white\">
                                                        <small>";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.title1"), "html", null, true);
        echo "</small>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width=\"33%\">
                                                <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/paye/mastercard.png"), "html", null, true);
        echo "\" width=\"80\">
                                                <input type=\"radio\" class=\"form-control\" value=\"mastercard\" id=\"creditcard\" name=\"_creditcard\">
                                            </td>
                                            <td width=\"34%\">
                                                <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/paye/visa.png"), "html", null, true);
        echo "\" width=\"80\">
                                                <input type=\"radio\" class=\"form-control\" value=\"visa\" id=\"creditcard\" name=\"_creditcard\">
                                            </td>
                                            <td width=\"33%\">
                                                <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/paye/cb.png"), "html", null, true);
        echo "\" width=\"80\">
                                                <input type=\"radio\" class=\"form-control\" value=\"cb\" id=\"creditcard\" name=\"_creditcard\">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.numcard"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"numcard\" name=\"_numcard\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.date1"), "html", null, true);
        echo "</small>
                                                    </label>
                                                    <select class=\"form-control\" id=\"country\" name=\"_country\" required>
                                                        <option value=\"\">--</option>
                                                        <option value=\"01\">02</option>
                                                        <option value=\"02\">03</option>
                                                        <option value=\"03\">03</option>
                                                        <option value=\"04\">04</option>
                                                        <option value=\"05\">05</option>
                                                        <option value=\"06\">06</option>
                                                        <option value=\"07\">07</option>
                                                        <option value=\"08\">08</option>
                                                        <option value=\"09\">09</option>
                                                        <option value=\"10\">10</option>
                                                        <option value=\"11\">11</option>
                                                        <option value=\"12\">12</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td colspan=\"2\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.date2"), "html", null, true);
        echo "</small>
                                                    </label>
                                                    <select class=\"form-control\" id=\"country\" name=\"_country\" required>
                                                        <option value=\"\">--</option>
                                                        <option value=\"2017\">2017</option>
                                                        <option value=\"2018\">2018</option>
                                                        <option value=\"2019\">2019</option>
                                                        <option value=\"2020\">2020</option>
                                                        <option value=\"2021\">2021</option>
                                                        <option value=\"2022\">2022</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.codesecurity"), "html", null, true);
        echo "</small>
                                                    </label>
                                                     <input type=\"text\" class=\"form-control\" id=\"code_security\" name=\"_code_security\" required>
                                                </div>
                                            </td>
                                            <td style=\"text-align: left;\">
                                                <div class=\"form-group text-left\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">&nbsp;</small>
                                                    </label>
                                                </div>
                                                <a href=\"#\" target=\"blank\"><i class=\"far fa-question-circle\"></i></a>
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr>
                                            <td colspan=\"3\" style=\"text-align: center;\">
                                                <div class=\"form-group text-center\" style=\"align-self: center\">
                                                    <input type=\"hidden\" id=\"typedon\" name=\"_typedon\" value=\"1\">
                                                    <input type=\"submit\" class=\"form-control-spp btn btn-md btn-block-spp bg-secondary-dons text-uppercase\" id=\"submit1\" name=\"_submit1\" value=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.submit"), "html", null, true);
        echo "\">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr><td colspan=\"3\" class=\" text-center text-uppercase\">";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.title2"), "html", null, true);
        echo "</td></tr>
                                        <tr>
                                            <td colspan=\"3\" class=\" text-center\">
                                                <a href=\"#\" target=\"_blank\">
                                                    <img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/paye/paypal.png"), "html", null, true);
        echo "\" width=\"200\">
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <!-- /Je donne une fois-->

            <!-- Je donne tous les mois -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.8"), "html", null, true);
        echo "</b></small></h1>
                </div>
                <div class=\"row\">
                    <form>
                        <table width=\"100%\" cellspacing=\"3\" cellpadding=\"3\" border=\"0\" style=\"padding: 0.1em; border: none;\">
                            <thead>
                            <tr>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.title1"), "html", null, true);
        echo "</th>
                                <th width=\"2%\"></th>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.title2"), "html", null, true);
        echo "</th>
                                <th width=\"2%\"></th>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.title3"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td colspan=\"5\" height=\"5px\"></td></tr>
                            <tr>
                                <!-- Colonne 1 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #00b9f1; color: white; font-weight: bold; border: none;\">
                                    <table class=\"table-responsive\" width=\"100%\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #00b9f1;\">
                                        <tr>
                                            <td colspan=\"3\"><img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/img/child.png"), "html", null, true);
        echo "\" class=\"mx-auto pb-2\" width=\"260\"></td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"text-center\">
                                                ";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.intro1"), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.intro2"), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"text-align: center;\">
                                            <td width=\"33%\"><button type=\"button\" id=\"_choice-btn-60-2\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">60€</button></td>
                                            <td width=\"33%\"><button type=\"button\" id=\"_choice-btn-100-2\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">100€</button></td>
                                            <td width=\"34%\"><button type=\"button\" id=\"_choice-btn-150-2\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">150€</button></td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"vertical-align: middle\">
                                            <td style=\"vertical-align: middle\" colspan=\"3\" class=\"text-right text-uppercase\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small>";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.free_amount"), "html", null, true);
        echo "</small>
                                                        (<span class=\"input-group-addon\">€</span>):
                                                    </label>
                                                    <input type=\"hidden\" class=\"form-control\" size=\"5\" id=\"amount_choice_2\" name=\"_amount_choice_2\" required>
                                                    <input type=\"text\" class=\"form-control\" size=\"5\" id=\"amount_free_2\" name=\"_amount_free_2\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"vertical-align: middle\">
                                            <td style=\"vertical-align: middle\" colspan=\"3\" class=\"text-right text-uppercase\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small>";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.supportus.deduct_amount"), "html", null, true);
        echo "</small>
                                                        (<span class=\"input-group-addon\">€</span>):
                                                    </label>
                                                    <input type=\"hidden\" class=\"form-control\" size=\"5\" id=\"amount_choice_deduct_2\" name=\"_amount_choice_deduct_2\" required>
                                                    <input type=\"text\" class=\"form-control\" size=\"8\" id=\"amount_deduct_2\" name=\"_amount_deduct_2\" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"2%\"></td>
                                <!-- Colonne 2 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #8ed8f8; color: white;\">
                                    <table class=\"table-responsive\" width=\"100%\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #8ed8f8;\">
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.civility"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <select class=\"form-control\" id=\"civility\" name=\"_civility\" required>
                                                        <option value=\"\">--</option>
                                                        <option value=\"1\">Madame</option>
                                                        <option value=\"2\">Mademoiselle</option>
                                                        <option value=\"3\">Monsieur</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.firstname"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"firtsname\" name=\"_firtsname\" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.name"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"_lastname\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.email"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"email\" class=\"form-control\" id=\"amountFree\" name=\"_amountFree\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.address"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"_address\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.address_cpl"), "html", null, true);
        echo "</small>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"address_complement\" name=\"_address_complement\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.zipcode"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"zipcode\" name=\"_zipcode\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.city"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"city\" name=\"_city\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.country"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <select class=\"form-control\" id=\"country\" name=\"_country\" required>
                                                        <option value=\"\">Choisir</option>
                                                        <option value=\"1\">France</option>
                                                        <option value=\"2\">Gabon</option>
                                                        <option value=\"3\">Gambie</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.details.phone"), "html", null, true);
        echo "</small>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"_phone\" required>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"2%\"></td>
                                <!-- Colonne 3 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #c7eafb;\">
                                    <table width=\"100%\" class=\"table-responsive\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #c7eafb;\">
                                        <tr>
                                            <td style=\"text-align: center;\">
                                                <div class=\"form-group\" style=\"text-align: center; margin-left: 12px;\">
                                                    <button type=\"button\" id=\"choice-btn-100\" class=\"btn btn-md btn-block-sup bg-secondary-card text-white\">
                                                        <small>";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.title2"), "html", null, true);
        echo "</small>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.iban"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"code_iban\" name=\"_code_iban\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.bic"), "html", null, true);
        echo "</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"code_bic\" name=\"_code_bic\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr>
                                            <td style=\"text-align: center;\">
                                                <div class=\"form-group text-center\" style=\"align-self: center\">
                                                    <input type=\"hidden\" id=\"typedon\" name=\"_typedon\" value=\"2\">
                                                    <input type=\"submit\" class=\"form-control-spp btn btn-md btn-block-spp bg-secondary-dons text-uppercase\" id=\"submit2\" name=\"_submit2\" value=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.submit"), "html", null, true);
        echo "\">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr><td class=\" text-center text-uppercase\">";
        // line 568
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.rules.avis"), "html", null, true);
        echo "</td></tr>
                                        <tr>
                                            <td class=\" text-center\">
                                                <a href=\"#\" target=\"_blank\">
                                                    <img src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/assets/paye/paypal.png"), "html", null, true);
        echo "\" width=\"200\">
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <!-- /Je donne une fois-->

            <!-- Par cheque -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.9"), "html", null, true);
        echo "</b></small></h1>
                </div>
                <div class=\"row\">
                    ";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.10"), "html", null, true);
        echo "<br />
                    ";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.11"), "html", null, true);
        echo "
                    <p style=\"margin-left: 20px;\">
                        <br> • ";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.12"), "html", null, true);
        echo ",
                        <br> • ";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.13"), "html", null, true);
        echo ",
                        <br> • ";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.14"), "html", null, true);
        echo ".
                    </p>
                </div>
                <div class=\"row\">
                    <p>
                        ";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.15"), "html", null, true);
        echo "<br />
                        <b>";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.16"), "html", null, true);
        echo "<br />
                        ";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.17"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.address.value"), "html", null, true);
        echo "</b><br />
                        ";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.18"), "html", null, true);
        echo " <span class=\"text-uppercase\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.16"), "html", null, true);
        echo "</b></span><br />
                    </p>
                </div>
            </div>
            <!-- /Par cheque -->

            <!-- Devenir partenaire -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.19"), "html", null, true);
        echo "</b></small></h1>
                </div>
                <div class=\"row\">
                    ";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.20"), "html", null, true);
        echo "<br />
                    ";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.21"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_trim_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.num.officiel")), "html", null, true);
        echo ";
                    <br><br>

                    ";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.21.a"), "html", null, true);
        echo "
                    <p style=\"margin-left: 20px;\">
                        <br> • ";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.22"), "html", null, true);
        echo ",
                        <br> • ";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.23"), "html", null, true);
        echo ".
                    </p>
                </div>
                <div class=\"row\">
                    ";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.24"), "html", null, true);
        echo "
                    <p style=\"margin-left: 20px;\">
                        <br> • ";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.25"), "html", null, true);
        echo ",
                        <br> • ";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.26"), "html", null, true);
        echo ",
                        <br> • ";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.27"), "html", null, true);
        echo ",
                        <br> • ";
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.28"), "html", null, true);
        echo ".
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"text-align: justify;\">";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.29"), "html", null, true);
        echo "</p>
                    ";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.30"), "html", null, true);
        echo "<br><br>
                    <b>";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.31"), "html", null, true);
        echo "</b><br><br>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 5px; text-align: justify;\">
                        <span class=\"text-uppercase\"><u><small><b>";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.32"), "html", null, true);
        echo "</b></small></u>:</span>
                        <br/><br/>
                        ";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.33"), "html", null, true);
        echo "<br><br>
                        <span style=\"color: red\"><b>";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.34"), "html", null, true);
        echo "</b></span>: ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.35"), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 5px; text-align: justify;\">
                        <span style=\"color: red\"><b>";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.36"), "html", null, true);
        echo "</b></span>: ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.37"), "html", null, true);
        echo "<br><br>
                        <span style=\"color: red\"><b>";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.38"), "html", null, true);
        echo "</b></span>: ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.39"), "html", null, true);
        echo "<br><br>
                        <span style=\"color: red\"><b>";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.40"), "html", null, true);
        echo "</b></span>: ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.41"), "html", null, true);
        echo "<br><br>
                        <span style=\"color: red\"><b>";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.42"), "html", null, true);
        echo "</b></span>: ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.43"), "html", null, true);
        echo ".
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 5px; text-align: justify;\">
                        <span style=\"color: red\"><b>";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.44"), "html", null, true);
        echo "</b></span>:<br><br>
                        <b>";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.45"), "html", null, true);
        echo "</b> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.45.list"), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
            <!-- /Devenir partenaire -->

            <!-- Association partenaire -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>";
        // line 669
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.46"), "html", null, true);
        echo "</b></small></h1>
                </div>
                <div class=\"row\">
                    ";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.47"), "html", null, true);
        echo " <b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.47.list"), "html", null, true);
        echo "</b>
                    ";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.47.suite.1"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.47.suite.2"), "html", null, true);
        echo "
                    ";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.47.suite.3"), "html", null, true);
        echo "
                    <p style=\"margin-top: 10px; text-align: justify;\">
                        ";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.48"), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
            <!-- /Association partenaire -->

            <!-- Devenir benevole -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>";
        // line 685
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.49"), "html", null, true);
        echo "</b></small></h1>
                </div>
                <div class=\"row\">
                    <p>";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.50"), "html", null, true);
        echo "</p>
                    <br/>
                    <p style=\"margin-top: 20px;\">
                        <b>";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.51"), "html", null, true);
        echo ":</b>
                        <br/>
                        ";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.52"), "html", null, true);
        echo "
                        <br/>
                        <b>";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.53"), "html", null, true);
        echo "</b> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email.value"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email2.value"), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 20px;\">
                        <b>";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.54"), "html", null, true);
        echo ":</b>
                        <br/>
                        ";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.55"), "html", null, true);
        echo "
                        <br/>
                        <b>";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.53"), "html", null, true);
        echo "</b> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email.value"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email2.value"), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 20px;\">
                        <b>";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.56"), "html", null, true);
        echo ":</b>
                        <br/>
                        ";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.57"), "html", null, true);
        echo "
                        <br/>
                        <b>";
        // line 713
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.53"), "html", null, true);
        echo "</b> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email.value"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email2.value"), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
            <!-- /Devenir benevole -->

            <!-- Dons materiel -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>";
        // line 722
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.58"), "html", null, true);
        echo "</b></small></h1>
                </div>
                <div class=\"row\">
                    ";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.59"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.59.suite.1"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.address.value"), "html", null, true);
        echo ".
                </div>
                <br/>
                <div class=\"row\">
                    <span style=\"color: orangered;\"><b>";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.60"), "html", null, true);
        echo "</b></span><br/>
                    <p style=\"margin-left: 25px;\">";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.61"), "html", null, true);
        echo "</p>
                </div>
                <br/>
                <div class=\"row\">
                    <p>
                        <span style=\"color: orangered;\"><b>";
        // line 735
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.62"), "html", null, true);
        echo "</b></span>
                        <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        ";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.63"), "html", null, true);
        echo "
                    </p>
                </div>
                <br/>
                <div class=\"row\">
                    <span style=\"color: orangered;\"><b>";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.64"), "html", null, true);
        echo "</b></span><br/>
                    <p style=\"margin-left: 25px;\">";
        // line 743
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.65"), "html", null, true);
        echo "</p>
                </div>
                <br/>
                <!-- Materiel informatique -->
                <div class=\"row\">
                    <p>
                        <span style=\"color: orangered; font-size: 17pt;\"><b>";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.66"), "html", null, true);
        echo "</b></span><br/>
                        ";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.67"), "html", null, true);
        echo "<br />
                        <span style=\"color: orangered;\"><b>";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.68"), "html", null, true);
        echo "</b></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.68.suite"), "html", null, true);
        echo "
                    </p>
                </div>
                <!-- /Materiel informatique -->
            </div>
            <!-- /Par cheque -->


            <!-- Notre equipe -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>";
        // line 762
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.69"), "html", null, true);
        echo "</b></small></h1>
                </div>
                <div class=\"row\">
                    <p style=\"margin-left: 20px;\">
                        <br> • ";
        // line 766
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.70"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.1"), "html", null, true);
        echo ",
                        <br> • ";
        // line 767
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.71"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.2"), "html", null, true);
        echo ",
                        <br> • ";
        // line 768
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.72"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.3"), "html", null, true);
        echo ",
                        <br> • ";
        // line 769
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.73"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.4"), "html", null, true);
        echo ",
                        <br> • ";
        // line 770
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.74"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.team.5"), "html", null, true);
        echo ".
                    </p>
                </div>
                <div class=\"row\">
                    ";
        // line 774
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.75"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.numero.wouri"), "html", null, true);
        echo ".<br/><br/>
                    ";
        // line 775
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.76"), "html", null, true);
        echo "<br/><br/>
                    ";
        // line 776
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.77"), "html", null, true);
        echo "<br/><br/>
                    ";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.done.78"), "html", null, true);
        echo ".<br/>
                    <hr size=\"1\" color=\"#eee\" width=\"100%\"/>
                </div>
            </div>
            <!-- /Notre equipe -->
        </div>
    </div>
";
        
        $__internal_ec9a0db1389523cc97e6bfb715aec3da2d94c600d101385efcea89ca12c1c59e->leave($__internal_ec9a0db1389523cc97e6bfb715aec3da2d94c600d101385efcea89ca12c1c59e_prof);

        
        $__internal_6fd14fe85ad89f40ba612ac29bf61f604d3aed96e33bb971c15cbb80467bf960->leave($__internal_6fd14fe85ad89f40ba612ac29bf61f604d3aed96e33bb971c15cbb80467bf960_prof);

    }

    public function getTemplateName()
    {
        return "AssoBundle:Adhesion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1278 => 777,  1274 => 776,  1270 => 775,  1264 => 774,  1255 => 770,  1249 => 769,  1243 => 768,  1237 => 767,  1231 => 766,  1224 => 762,  1208 => 751,  1204 => 750,  1200 => 749,  1191 => 743,  1187 => 742,  1179 => 737,  1174 => 735,  1166 => 730,  1162 => 729,  1151 => 725,  1145 => 722,  1129 => 713,  1124 => 711,  1119 => 709,  1107 => 704,  1102 => 702,  1097 => 700,  1085 => 695,  1080 => 693,  1075 => 691,  1069 => 688,  1063 => 685,  1051 => 676,  1046 => 674,  1040 => 673,  1034 => 672,  1028 => 669,  1014 => 660,  1010 => 659,  1000 => 654,  994 => 653,  988 => 652,  982 => 651,  972 => 646,  968 => 645,  963 => 643,  956 => 639,  952 => 638,  948 => 637,  941 => 633,  937 => 632,  933 => 631,  929 => 630,  924 => 628,  917 => 624,  913 => 623,  908 => 621,  900 => 618,  896 => 617,  890 => 614,  876 => 605,  870 => 604,  866 => 603,  862 => 602,  854 => 597,  850 => 596,  846 => 595,  841 => 593,  837 => 592,  831 => 589,  811 => 572,  804 => 568,  796 => 563,  781 => 551,  767 => 540,  755 => 531,  736 => 515,  717 => 499,  703 => 488,  689 => 477,  676 => 467,  662 => 456,  648 => 445,  634 => 434,  622 => 425,  605 => 411,  584 => 393,  568 => 380,  549 => 366,  541 => 361,  528 => 351,  523 => 349,  518 => 347,  508 => 340,  488 => 323,  481 => 319,  473 => 314,  451 => 295,  430 => 277,  405 => 255,  391 => 244,  380 => 236,  373 => 232,  366 => 228,  356 => 221,  337 => 205,  318 => 189,  304 => 178,  290 => 167,  277 => 157,  263 => 146,  249 => 135,  235 => 124,  223 => 115,  206 => 101,  185 => 83,  169 => 70,  154 => 58,  145 => 54,  131 => 43,  126 => 41,  121 => 39,  111 => 32,  99 => 23,  95 => 22,  91 => 21,  86 => 19,  82 => 18,  76 => 15,  68 => 9,  59 => 8,  41 => 6,  11 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/EK/AssoBundle/Resources/views/Adhesion/index.html.twig #}
{# Template Bundle #}

{% extends \"AssoBundle::layout_large.html.twig\" %}

{% block title %}{{ page_titre }}{% endblock %}

{% block content %}
    <div class=\"row justify-content-center text-left\">
        <div class=\"col-md-10 mx-4\">

            <!-- Je donne en ligne -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>{{ 'label.done.1'|trans }}</b></small></h1>
                </div>
                <div class=\"row\">
                    {{ 'label.done.2'|trans }}<br />
                    {{ 'label.done.3'|trans }}
                    <p style=\"margin-left: 20px;\">
                        <br> • {{ 'label.done.4'|trans }},
                        <br> • {{ 'label.done.5'|trans }},
                        <br> • {{ 'label.done.6'|trans }}.
                    </p>
                </div>
            </div>
            <!-- /Je donne en ligne -->

            <!-- Je donne une fois-->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>{{ 'label.done.7'|trans }}</b></small></h1>
                </div>
                <div class=\"row\">
                    <form>
                        <table width=\"100%\" cellspacing=\"3\" cellpadding=\"3\" border=\"0\" style=\"padding: 0.1em; border: none;\">
                            <thead>
                            <tr>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">{{ 'form.supportus.title1'|trans }}</th>
                                <th width=\"2%\"></th>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">{{ 'form.supportus.title2'|trans }}</th>
                                <th width=\"2%\"></th>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">{{ 'form.supportus.title3'|trans }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td colspan=\"5\" height=\"5px\"></td></tr>
                            <tr>
                                <!-- Colonne 1 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #00b9f1; color: white; font-weight: bold; border: none;\">
                                    <table class=\"table-responsive\" width=\"100%\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #00b9f1;\">
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"text-center\">{{ 'form.supportus.intro1'|trans }}<br/>{{ 'form.supportus.intro2'|trans }}</td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr>
                                            <td colspan=\"3\"><img src=\"{{ asset('bundles/front/assets/img/child.png') }}\" class=\"mx-auto pb-2\" width=\"260\"></td>
                                        </tr>
                                        <tr style=\"text-align: center;\">
                                            <td width=\"33%\"><button type=\"button\" id=\"_choice-btn-60-1\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">60€</button></td>
                                            <td width=\"33%\"><button type=\"button\" id=\"_choice-btn-100-1\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">100€</button></td>
                                            <td width=\"34%\"><button type=\"button\" id=\"_choice-btn-150-1\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">150€</button></td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"vertical-align: middle\">
                                            <td style=\"vertical-align: middle\" colspan=\"3\" class=\"text-right text-uppercase\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small>{{ 'form.supportus.free_amount'|trans }}</small>
                                                        (<span class=\"input-group-addon\">€</span>):
                                                    </label>
                                                    <input type=\"hidden\" class=\"form-control\" size=\"5\" id=\"amount_choice_1\" name=\"_amount_choice_1\" required>
                                                    <input type=\"text\" class=\"form-control\" size=\"5\" id=\"amount_free_1\" name=\"_amount_free_1\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"vertical-align: middle\">
                                            <td style=\"vertical-align: middle\" colspan=\"3\" class=\"text-right text-uppercase\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small>{{ 'form.supportus.deduct_amount'|trans }}</small>
                                                        (<span class=\"input-group-addon\">€</span>):
                                                    </label>
                                                    <input type=\"hidden\" class=\"form-control\" size=\"5\" id=\"amount_choice_deduct_1\" name=\"_amount_choice_deduct_1\" required>
                                                    <input type=\"text\" class=\"form-control\" size=\"8\" id=\"amount_deduct_1\" name=\"_amount_deduct_1\" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"2%\"></td>
                                <!-- Colonne 2 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #8ed8f8; color: white;\">
                                    <table class=\"table-responsive\" width=\"100%\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #8ed8f8;\">
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.civility'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <select class=\"form-control\" id=\"civility\" name=\"_civility\" required>
                                                        <option value=\"\">--</option>
                                                        <option value=\"1\">Madame</option>
                                                        <option value=\"2\">Mademoiselle</option>
                                                        <option value=\"3\">Monsieur</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.firstname'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"firtsname\" name=\"_firtsname\" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.name'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"_lastname\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.email'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"email\" class=\"form-control\" id=\"amountFree\" name=\"_amountFree\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.address'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"_address\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.address_cpl'|trans }}</small>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"address_complement\" name=\"_address_complement\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.zipcode'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"zipcode\" name=\"_zipcode\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.city'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"city\" name=\"_city\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.country'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <select class=\"form-control\" id=\"country\" name=\"_country\" required>
                                                        <option value=\"\">Choisir</option>
                                                        <option value=\"1\">France</option>
                                                        <option value=\"2\">Gabon</option>
                                                        <option value=\"3\">Gambie</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.phone'|trans }}</small>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"_phone\" required>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"2%\"></td>
                                <!-- Colonne 3 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #c7eafb;\">
                                    <table width=\"100%\" class=\"table-responsive\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #c7eafb;\">
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <button type=\"button\" id=\"choice-btn-100\" class=\"btn btn-md btn-block bg-secondary-card text-white\">
                                                        <small>{{ 'form.rules.title1'|trans }}</small>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width=\"33%\">
                                                <img src=\"{{ asset('bundles/front/assets/paye/mastercard.png') }}\" width=\"80\">
                                                <input type=\"radio\" class=\"form-control\" value=\"mastercard\" id=\"creditcard\" name=\"_creditcard\">
                                            </td>
                                            <td width=\"34%\">
                                                <img src=\"{{ asset('bundles/front/assets/paye/visa.png') }}\" width=\"80\">
                                                <input type=\"radio\" class=\"form-control\" value=\"visa\" id=\"creditcard\" name=\"_creditcard\">
                                            </td>
                                            <td width=\"33%\">
                                                <img src=\"{{ asset('bundles/front/assets/paye/cb.png') }}\" width=\"80\">
                                                <input type=\"radio\" class=\"form-control\" value=\"cb\" id=\"creditcard\" name=\"_creditcard\">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.rules.numcard'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"numcard\" name=\"_numcard\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.rules.date1'|trans }}</small>
                                                    </label>
                                                    <select class=\"form-control\" id=\"country\" name=\"_country\" required>
                                                        <option value=\"\">--</option>
                                                        <option value=\"01\">02</option>
                                                        <option value=\"02\">03</option>
                                                        <option value=\"03\">03</option>
                                                        <option value=\"04\">04</option>
                                                        <option value=\"05\">05</option>
                                                        <option value=\"06\">06</option>
                                                        <option value=\"07\">07</option>
                                                        <option value=\"08\">08</option>
                                                        <option value=\"09\">09</option>
                                                        <option value=\"10\">10</option>
                                                        <option value=\"11\">11</option>
                                                        <option value=\"12\">12</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td colspan=\"2\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.rules.date2'|trans }}</small>
                                                    </label>
                                                    <select class=\"form-control\" id=\"country\" name=\"_country\" required>
                                                        <option value=\"\">--</option>
                                                        <option value=\"2017\">2017</option>
                                                        <option value=\"2018\">2018</option>
                                                        <option value=\"2019\">2019</option>
                                                        <option value=\"2020\">2020</option>
                                                        <option value=\"2021\">2021</option>
                                                        <option value=\"2022\">2022</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"2\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.rules.codesecurity'|trans }}</small>
                                                    </label>
                                                     <input type=\"text\" class=\"form-control\" id=\"code_security\" name=\"_code_security\" required>
                                                </div>
                                            </td>
                                            <td style=\"text-align: left;\">
                                                <div class=\"form-group text-left\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">&nbsp;</small>
                                                    </label>
                                                </div>
                                                <a href=\"#\" target=\"blank\"><i class=\"far fa-question-circle\"></i></a>
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr>
                                            <td colspan=\"3\" style=\"text-align: center;\">
                                                <div class=\"form-group text-center\" style=\"align-self: center\">
                                                    <input type=\"hidden\" id=\"typedon\" name=\"_typedon\" value=\"1\">
                                                    <input type=\"submit\" class=\"form-control-spp btn btn-md btn-block-spp bg-secondary-dons text-uppercase\" id=\"submit1\" name=\"_submit1\" value=\"{{ 'form.rules.submit'|trans }}\">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr><td colspan=\"3\" class=\" text-center text-uppercase\">{{ 'form.rules.title2'|trans }}</td></tr>
                                        <tr>
                                            <td colspan=\"3\" class=\" text-center\">
                                                <a href=\"#\" target=\"_blank\">
                                                    <img src=\"{{ asset('bundles/front/assets/paye/paypal.png') }}\" width=\"200\">
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <!-- /Je donne une fois-->

            <!-- Je donne tous les mois -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>{{ 'label.done.8'|trans }}</b></small></h1>
                </div>
                <div class=\"row\">
                    <form>
                        <table width=\"100%\" cellspacing=\"3\" cellpadding=\"3\" border=\"0\" style=\"padding: 0.1em; border: none;\">
                            <thead>
                            <tr>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">{{ 'form.supportus.title1'|trans }}</th>
                                <th width=\"2%\"></th>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">{{ 'form.supportus.title2'|trans }}</th>
                                <th width=\"2%\"></th>
                                <th width=\"32%\" class=\"text-uppercase text-center\" style=\"background-color: #d992db; color: white;\">{{ 'form.supportus.title3'|trans }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td colspan=\"5\" height=\"5px\"></td></tr>
                            <tr>
                                <!-- Colonne 1 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #00b9f1; color: white; font-weight: bold; border: none;\">
                                    <table class=\"table-responsive\" width=\"100%\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #00b9f1;\">
                                        <tr>
                                            <td colspan=\"3\"><img src=\"{{ asset('bundles/front/assets/img/child.png') }}\" class=\"mx-auto pb-2\" width=\"260\"></td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr>
                                            <td colspan=\"3\" class=\"text-center\">
                                                {{ 'form.supportus.intro1'|trans }}<br/>{{ 'form.supportus.intro2'|trans }}
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"text-align: center;\">
                                            <td width=\"33%\"><button type=\"button\" id=\"_choice-btn-60-2\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">60€</button></td>
                                            <td width=\"33%\"><button type=\"button\" id=\"_choice-btn-100-2\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">100€</button></td>
                                            <td width=\"34%\"><button type=\"button\" id=\"_choice-btn-150-2\" class=\"btn btn-md btn-block bg-secondary-dons text-white\">150€</button></td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"vertical-align: middle\">
                                            <td style=\"vertical-align: middle\" colspan=\"3\" class=\"text-right text-uppercase\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small>{{ 'form.supportus.free_amount'|trans }}</small>
                                                        (<span class=\"input-group-addon\">€</span>):
                                                    </label>
                                                    <input type=\"hidden\" class=\"form-control\" size=\"5\" id=\"amount_choice_2\" name=\"_amount_choice_2\" required>
                                                    <input type=\"text\" class=\"form-control\" size=\"5\" id=\"amount_free_2\" name=\"_amount_free_2\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td colspan=\"3\">&nbsp;</td></tr>
                                        <tr style=\"vertical-align: middle\">
                                            <td style=\"vertical-align: middle\" colspan=\"3\" class=\"text-right text-uppercase\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small>{{ 'form.supportus.deduct_amount'|trans }}</small>
                                                        (<span class=\"input-group-addon\">€</span>):
                                                    </label>
                                                    <input type=\"hidden\" class=\"form-control\" size=\"5\" id=\"amount_choice_deduct_2\" name=\"_amount_choice_deduct_2\" required>
                                                    <input type=\"text\" class=\"form-control\" size=\"8\" id=\"amount_deduct_2\" name=\"_amount_deduct_2\" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"2%\"></td>
                                <!-- Colonne 2 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #8ed8f8; color: white;\">
                                    <table class=\"table-responsive\" width=\"100%\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #8ed8f8;\">
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.civility'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <select class=\"form-control\" id=\"civility\" name=\"_civility\" required>
                                                        <option value=\"\">--</option>
                                                        <option value=\"1\">Madame</option>
                                                        <option value=\"2\">Mademoiselle</option>
                                                        <option value=\"3\">Monsieur</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.firstname'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"firtsname\" name=\"_firtsname\" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.name'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"_lastname\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.email'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"email\" class=\"form-control\" id=\"amountFree\" name=\"_amountFree\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.address'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"_address\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.address_cpl'|trans }}</small>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"address_complement\" name=\"_address_complement\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.zipcode'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"zipcode\" name=\"_zipcode\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.city'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"city\" name=\"_city\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.country'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <select class=\"form-control\" id=\"country\" name=\"_country\" required>
                                                        <option value=\"\">Choisir</option>
                                                        <option value=\"1\">France</option>
                                                        <option value=\"2\">Gabon</option>
                                                        <option value=\"3\">Gambie</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\">
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.details.phone'|trans }}</small>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"_phone\" required>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"2%\"></td>
                                <!-- Colonne 3 -->
                                <td width=\"32%\" style=\"vertical-align: top; background-color: #c7eafb;\">
                                    <table width=\"100%\" class=\"table-responsive\" cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"background-color: #c7eafb;\">
                                        <tr>
                                            <td style=\"text-align: center;\">
                                                <div class=\"form-group\" style=\"text-align: center; margin-left: 12px;\">
                                                    <button type=\"button\" id=\"choice-btn-100\" class=\"btn btn-md btn-block-sup bg-secondary-card text-white\">
                                                        <small>{{ 'form.rules.title2'|trans }}</small>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.rules.iban'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"code_iban\" name=\"_code_iban\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class=\"form-group\">
                                                    <label for=\"text\">
                                                        <small class=\"text-uppercase\">{{ 'form.rules.bic'|trans }}</small>
                                                        <span class=\"input-group-addon\" style=\"color: #622466;\">*</span>
                                                    </label>
                                                    <input type=\"text\" class=\"form-control\" id=\"code_bic\" name=\"_code_bic\" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr>
                                            <td style=\"text-align: center;\">
                                                <div class=\"form-group text-center\" style=\"align-self: center\">
                                                    <input type=\"hidden\" id=\"typedon\" name=\"_typedon\" value=\"2\">
                                                    <input type=\"submit\" class=\"form-control-spp btn btn-md btn-block-spp bg-secondary-dons text-uppercase\" id=\"submit2\" name=\"_submit2\" value=\"{{ 'form.rules.submit'|trans }}\">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr><td class=\" text-center text-uppercase\">{{ 'form.rules.avis'|trans }}</td></tr>
                                        <tr>
                                            <td class=\" text-center\">
                                                <a href=\"#\" target=\"_blank\">
                                                    <img src=\"{{ asset('bundles/front/assets/paye/paypal.png') }}\" width=\"200\">
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <!-- /Je donne une fois-->

            <!-- Par cheque -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>{{ 'label.done.9'|trans }}</b></small></h1>
                </div>
                <div class=\"row\">
                    {{ 'label.done.10'|trans }}<br />
                    {{ 'label.done.11'|trans }}
                    <p style=\"margin-left: 20px;\">
                        <br> • {{ 'label.done.12'|trans }},
                        <br> • {{ 'label.done.13'|trans }},
                        <br> • {{ 'label.done.14'|trans }}.
                    </p>
                </div>
                <div class=\"row\">
                    <p>
                        {{ 'label.done.15'|trans }}<br />
                        <b>{{ 'label.done.16'|trans }}<br />
                        {{ 'label.done.17'|trans }}: {{ 'label.address.value'|trans }}</b><br />
                        {{ 'label.done.18'|trans }} <span class=\"text-uppercase\"><b>{{ 'label.done.16'|trans }}</b></span><br />
                    </p>
                </div>
            </div>
            <!-- /Par cheque -->

            <!-- Devenir partenaire -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>{{ 'label.done.19'|trans }}</b></small></h1>
                </div>
                <div class=\"row\">
                    {{ 'label.done.20'|trans }}<br />
                    {{ 'label.done.21'|trans }}: {{ 'label.num.officiel'|trans|trim }};
                    <br><br>

                    {{ 'label.done.21.a'|trans }}
                    <p style=\"margin-left: 20px;\">
                        <br> • {{ 'label.done.22'|trans }},
                        <br> • {{ 'label.done.23'|trans }}.
                    </p>
                </div>
                <div class=\"row\">
                    {{ 'label.done.24'|trans }}
                    <p style=\"margin-left: 20px;\">
                        <br> • {{ 'label.done.25'|trans }},
                        <br> • {{ 'label.done.26'|trans }},
                        <br> • {{ 'label.done.27'|trans }},
                        <br> • {{ 'label.done.28'|trans }}.
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"text-align: justify;\">{{ 'label.done.29'|trans }}</p>
                    {{ 'label.done.30'|trans }}<br><br>
                    <b>{{ 'label.done.31'|trans }}</b><br><br>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 5px; text-align: justify;\">
                        <span class=\"text-uppercase\"><u><small><b>{{ 'label.done.32'|trans }}</b></small></u>:</span>
                        <br/><br/>
                        {{ 'label.done.33'|trans }}<br><br>
                        <span style=\"color: red\"><b>{{ 'label.done.34'|trans }}</b></span>: {{ 'label.done.35'|trans }}
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 5px; text-align: justify;\">
                        <span style=\"color: red\"><b>{{ 'label.done.36'|trans }}</b></span>: {{ 'label.done.37'|trans }}<br><br>
                        <span style=\"color: red\"><b>{{ 'label.done.38'|trans }}</b></span>: {{ 'label.done.39'|trans }}<br><br>
                        <span style=\"color: red\"><b>{{ 'label.done.40'|trans }}</b></span>: {{ 'label.done.41'|trans }}<br><br>
                        <span style=\"color: red\"><b>{{ 'label.done.42'|trans }}</b></span>: {{ 'label.done.43'|trans }}.
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 5px; text-align: justify;\">
                        <span style=\"color: red\"><b>{{ 'label.done.44'|trans }}</b></span>:<br><br>
                        <b>{{ 'label.done.45'|trans }}</b> {{ 'label.done.45.list'|trans }}
                    </p>
                </div>
            </div>
            <!-- /Devenir partenaire -->

            <!-- Association partenaire -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>{{ 'label.done.46'|trans }}</b></small></h1>
                </div>
                <div class=\"row\">
                    {{ 'label.done.47'|trans }} <b>{{ 'label.done.47.list'|trans }}</b>
                    {{ 'label.done.47.suite.1'|trans }} {{ 'label.done.47.suite.2'|trans }}
                    {{ 'label.done.47.suite.3'|trans }}
                    <p style=\"margin-top: 10px; text-align: justify;\">
                        {{ 'label.done.48'|trans }}
                    </p>
                </div>
            </div>
            <!-- /Association partenaire -->

            <!-- Devenir benevole -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>{{ 'label.done.49'|trans }}</b></small></h1>
                </div>
                <div class=\"row\">
                    <p>{{ 'label.done.50'|trans }}</p>
                    <br/>
                    <p style=\"margin-top: 20px;\">
                        <b>{{ 'label.done.51'|trans }}:</b>
                        <br/>
                        {{ 'label.done.52'|trans }}
                        <br/>
                        <b>{{ 'label.done.53'|trans }}</b> {{ 'label.email.value'|trans }} / {{ 'label.email2.value'|trans }}
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 20px;\">
                        <b>{{ 'label.done.54'|trans }}:</b>
                        <br/>
                        {{ 'label.done.55'|trans }}
                        <br/>
                        <b>{{ 'label.done.53'|trans }}</b> {{ 'label.email.value'|trans }} / {{ 'label.email2.value'|trans }}
                    </p>
                </div>
                <div class=\"row\">
                    <p style=\"margin-top: 20px;\">
                        <b>{{ 'label.done.56'|trans }}:</b>
                        <br/>
                        {{ 'label.done.57'|trans }}
                        <br/>
                        <b>{{ 'label.done.53'|trans }}</b> {{ 'label.email.value'|trans }} / {{ 'label.email2.value'|trans }}
                    </p>
                </div>
            </div>
            <!-- /Devenir benevole -->

            <!-- Dons materiel -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>{{ 'label.done.58'|trans }}</b></small></h1>
                </div>
                <div class=\"row\">
                    {{ 'label.done.59'|trans }} {{ 'label.done.59.suite.1'|trans }} {{ 'label.address.value'|trans }}.
                </div>
                <br/>
                <div class=\"row\">
                    <span style=\"color: orangered;\"><b>{{ 'label.done.60'|trans }}</b></span><br/>
                    <p style=\"margin-left: 25px;\">{{ 'label.done.61'|trans }}</p>
                </div>
                <br/>
                <div class=\"row\">
                    <p>
                        <span style=\"color: orangered;\"><b>{{ 'label.done.62'|trans }}</b></span>
                        <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ 'label.done.63'|trans }}
                    </p>
                </div>
                <br/>
                <div class=\"row\">
                    <span style=\"color: orangered;\"><b>{{ 'label.done.64'|trans }}</b></span><br/>
                    <p style=\"margin-left: 25px;\">{{ 'label.done.65'|trans }}</p>
                </div>
                <br/>
                <!-- Materiel informatique -->
                <div class=\"row\">
                    <p>
                        <span style=\"color: orangered; font-size: 17pt;\"><b>{{ 'label.done.66'|trans }}</b></span><br/>
                        {{ 'label.done.67'|trans }}<br />
                        <span style=\"color: orangered;\"><b>{{ 'label.done.68'|trans }}</b></span> {{ 'label.done.68.suite'|trans }}
                    </p>
                </div>
                <!-- /Materiel informatique -->
            </div>
            <!-- /Par cheque -->


            <!-- Notre equipe -->
            <div class=\"cont-item py-3\">
                <div class=\"row\">
                    <h1 class=\"mt-3 text-uppercase\"><small style=\"font-size: 15pt;\"><b>{{ 'label.done.69'|trans }}</b></small></h1>
                </div>
                <div class=\"row\">
                    <p style=\"margin-left: 20px;\">
                        <br> • {{ 'label.done.70'|trans }} {{ 'label.team.1'|trans }},
                        <br> • {{ 'label.done.71'|trans }} {{ 'label.team.2'|trans }},
                        <br> • {{ 'label.done.72'|trans }} {{ 'label.team.3'|trans }},
                        <br> • {{ 'label.done.73'|trans }} {{ 'label.team.4'|trans }},
                        <br> • {{ 'label.done.74'|trans }} {{ 'label.team.5'|trans }}.
                    </p>
                </div>
                <div class=\"row\">
                    {{ 'label.done.75'|trans }} {{ 'label.numero.wouri'|trans }}.<br/><br/>
                    {{ 'label.done.76'|trans }}<br/><br/>
                    {{ 'label.done.77'|trans }}<br/><br/>
                    {{ 'label.done.78'|trans }}.<br/>
                    <hr size=\"1\" color=\"#eee\" width=\"100%\"/>
                </div>
            </div>
            <!-- /Notre equipe -->
        </div>
    </div>
{% endblock %}", "AssoBundle:Adhesion:index.html.twig", "/Users/ekdevcenter/Sites/educapeace/src/EK/AssoBundle/Resources/views/Adhesion/index.html.twig");
    }
}
