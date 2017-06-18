<?php

/* base.html.twig */
class __TwigTemplate_875c7359e0838083884ce004e8c406e17b344063c2808b9a1f370f6a162c1efd extends Twig_Template
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
        $__internal_ccd362877b3e6452b354f987fa59f51b02914949be19c723525ca87f391b5497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd362877b3e6452b354f987fa59f51b02914949be19c723525ca87f391b5497->enter($__internal_ccd362877b3e6452b354f987fa59f51b02914949be19c723525ca87f391b5497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_30c86281af88afbfb4e3509fb9df5d03d89c7b3b649ee5ee8afb3589d30891b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c86281af88afbfb4e3509fb9df5d03d89c7b3b649ee5ee8afb3589d30891b2->enter($__internal_30c86281af88afbfb4e3509fb9df5d03d89c7b3b649ee5ee8afb3589d30891b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ccd362877b3e6452b354f987fa59f51b02914949be19c723525ca87f391b5497->leave($__internal_ccd362877b3e6452b354f987fa59f51b02914949be19c723525ca87f391b5497_prof);

        
        $__internal_30c86281af88afbfb4e3509fb9df5d03d89c7b3b649ee5ee8afb3589d30891b2->leave($__internal_30c86281af88afbfb4e3509fb9df5d03d89c7b3b649ee5ee8afb3589d30891b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4660a1deb31f5c2f6edc9a2fa1de473bf6e8ab6245f0a69c12186faa0d3e7044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4660a1deb31f5c2f6edc9a2fa1de473bf6e8ab6245f0a69c12186faa0d3e7044->enter($__internal_4660a1deb31f5c2f6edc9a2fa1de473bf6e8ab6245f0a69c12186faa0d3e7044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_545f99c1cdcc198e6b7f39ba7814098d5aa634b69d705bb124db5f25670e80f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545f99c1cdcc198e6b7f39ba7814098d5aa634b69d705bb124db5f25670e80f4->enter($__internal_545f99c1cdcc198e6b7f39ba7814098d5aa634b69d705bb124db5f25670e80f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_545f99c1cdcc198e6b7f39ba7814098d5aa634b69d705bb124db5f25670e80f4->leave($__internal_545f99c1cdcc198e6b7f39ba7814098d5aa634b69d705bb124db5f25670e80f4_prof);

        
        $__internal_4660a1deb31f5c2f6edc9a2fa1de473bf6e8ab6245f0a69c12186faa0d3e7044->leave($__internal_4660a1deb31f5c2f6edc9a2fa1de473bf6e8ab6245f0a69c12186faa0d3e7044_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_796622879220887851738e5614adb9c1cbdb46f99d445c1003eb0f9ea27f69b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796622879220887851738e5614adb9c1cbdb46f99d445c1003eb0f9ea27f69b0->enter($__internal_796622879220887851738e5614adb9c1cbdb46f99d445c1003eb0f9ea27f69b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6fd0f564f22b24d429d8b398d69bd1399b7293239543b769fcbaa041227400c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd0f564f22b24d429d8b398d69bd1399b7293239543b769fcbaa041227400c0->enter($__internal_6fd0f564f22b24d429d8b398d69bd1399b7293239543b769fcbaa041227400c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6fd0f564f22b24d429d8b398d69bd1399b7293239543b769fcbaa041227400c0->leave($__internal_6fd0f564f22b24d429d8b398d69bd1399b7293239543b769fcbaa041227400c0_prof);

        
        $__internal_796622879220887851738e5614adb9c1cbdb46f99d445c1003eb0f9ea27f69b0->leave($__internal_796622879220887851738e5614adb9c1cbdb46f99d445c1003eb0f9ea27f69b0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_586f8b3c14ece6d13c4d6a168bfcaeef48ab98148994a7963689c45b748edb50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586f8b3c14ece6d13c4d6a168bfcaeef48ab98148994a7963689c45b748edb50->enter($__internal_586f8b3c14ece6d13c4d6a168bfcaeef48ab98148994a7963689c45b748edb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_701b691e77e3444da0c1b0d2f874818847c326c2f8995d3e418b734573df56e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701b691e77e3444da0c1b0d2f874818847c326c2f8995d3e418b734573df56e0->enter($__internal_701b691e77e3444da0c1b0d2f874818847c326c2f8995d3e418b734573df56e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_701b691e77e3444da0c1b0d2f874818847c326c2f8995d3e418b734573df56e0->leave($__internal_701b691e77e3444da0c1b0d2f874818847c326c2f8995d3e418b734573df56e0_prof);

        
        $__internal_586f8b3c14ece6d13c4d6a168bfcaeef48ab98148994a7963689c45b748edb50->leave($__internal_586f8b3c14ece6d13c4d6a168bfcaeef48ab98148994a7963689c45b748edb50_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b312c79dc0de47816e67e7e051222d99c1bc3a184fcccedbc4ae814c4aae5adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b312c79dc0de47816e67e7e051222d99c1bc3a184fcccedbc4ae814c4aae5adc->enter($__internal_b312c79dc0de47816e67e7e051222d99c1bc3a184fcccedbc4ae814c4aae5adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_12769e33c99f2a9612e846c1293f5dda6ff7473f646057de7a6cf7ed3a118857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12769e33c99f2a9612e846c1293f5dda6ff7473f646057de7a6cf7ed3a118857->enter($__internal_12769e33c99f2a9612e846c1293f5dda6ff7473f646057de7a6cf7ed3a118857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_12769e33c99f2a9612e846c1293f5dda6ff7473f646057de7a6cf7ed3a118857->leave($__internal_12769e33c99f2a9612e846c1293f5dda6ff7473f646057de7a6cf7ed3a118857_prof);

        
        $__internal_b312c79dc0de47816e67e7e051222d99c1bc3a184fcccedbc4ae814c4aae5adc->leave($__internal_b312c79dc0de47816e67e7e051222d99c1bc3a184fcccedbc4ae814c4aae5adc_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\ProjetPropre\\AuPetitCoin\\app\\Resources\\views\\base.html.twig");
    }
}
