<?php

/* base.html.twig */
class __TwigTemplate_7f077033ede74e1294f2514215d787965cc479b81310c8344482b9175c5dfb66 extends Twig_Template
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
        $__internal_29ce466a91ddaae1ff9fdb5e8442639360b3627fd79447b2b18069b0401142b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ce466a91ddaae1ff9fdb5e8442639360b3627fd79447b2b18069b0401142b1->enter($__internal_29ce466a91ddaae1ff9fdb5e8442639360b3627fd79447b2b18069b0401142b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_29ce466a91ddaae1ff9fdb5e8442639360b3627fd79447b2b18069b0401142b1->leave($__internal_29ce466a91ddaae1ff9fdb5e8442639360b3627fd79447b2b18069b0401142b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e802670578a713864ac388790a4ace7718b231f2da56a88eb224b0eee3a93cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e802670578a713864ac388790a4ace7718b231f2da56a88eb224b0eee3a93cc9->enter($__internal_e802670578a713864ac388790a4ace7718b231f2da56a88eb224b0eee3a93cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e802670578a713864ac388790a4ace7718b231f2da56a88eb224b0eee3a93cc9->leave($__internal_e802670578a713864ac388790a4ace7718b231f2da56a88eb224b0eee3a93cc9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2ce8f1a81beb3558d95b32aaf250e5b75fc6c87629cf4d948872fd1a74e24a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ce8f1a81beb3558d95b32aaf250e5b75fc6c87629cf4d948872fd1a74e24a3->enter($__internal_f2ce8f1a81beb3558d95b32aaf250e5b75fc6c87629cf4d948872fd1a74e24a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2ce8f1a81beb3558d95b32aaf250e5b75fc6c87629cf4d948872fd1a74e24a3->leave($__internal_f2ce8f1a81beb3558d95b32aaf250e5b75fc6c87629cf4d948872fd1a74e24a3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2aec05c926023196416e2eb5aa36c9b7ea7932070cc5ab41bdbbe0f25d0dcd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aec05c926023196416e2eb5aa36c9b7ea7932070cc5ab41bdbbe0f25d0dcd52->enter($__internal_2aec05c926023196416e2eb5aa36c9b7ea7932070cc5ab41bdbbe0f25d0dcd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2aec05c926023196416e2eb5aa36c9b7ea7932070cc5ab41bdbbe0f25d0dcd52->leave($__internal_2aec05c926023196416e2eb5aa36c9b7ea7932070cc5ab41bdbbe0f25d0dcd52_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eff93e940d69d5c49fa8d626632a424cb48b6868f3bf8e04a65421a90626f778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff93e940d69d5c49fa8d626632a424cb48b6868f3bf8e04a65421a90626f778->enter($__internal_eff93e940d69d5c49fa8d626632a424cb48b6868f3bf8e04a65421a90626f778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eff93e940d69d5c49fa8d626632a424cb48b6868f3bf8e04a65421a90626f778->leave($__internal_eff93e940d69d5c49fa8d626632a424cb48b6868f3bf8e04a65421a90626f778_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
", "base.html.twig", "/var/www/sitePHP/app/Resources/views/base.html.twig");
    }
}
