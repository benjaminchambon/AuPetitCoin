<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4f7ad63b0731424fc0ba17613456e681debf6761d21ebe40ad682683c94bb51a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_859ad0fb0bb49a956d238056e8e2a0d4b776f91c74739e5cc579653993aa99be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859ad0fb0bb49a956d238056e8e2a0d4b776f91c74739e5cc579653993aa99be->enter($__internal_859ad0fb0bb49a956d238056e8e2a0d4b776f91c74739e5cc579653993aa99be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e3c2af8ba55d59a46d7508c3a3e2ed4ef5a1b92196e54adc35388abd9fb1f49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c2af8ba55d59a46d7508c3a3e2ed4ef5a1b92196e54adc35388abd9fb1f49c->enter($__internal_e3c2af8ba55d59a46d7508c3a3e2ed4ef5a1b92196e54adc35388abd9fb1f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_859ad0fb0bb49a956d238056e8e2a0d4b776f91c74739e5cc579653993aa99be->leave($__internal_859ad0fb0bb49a956d238056e8e2a0d4b776f91c74739e5cc579653993aa99be_prof);

        
        $__internal_e3c2af8ba55d59a46d7508c3a3e2ed4ef5a1b92196e54adc35388abd9fb1f49c->leave($__internal_e3c2af8ba55d59a46d7508c3a3e2ed4ef5a1b92196e54adc35388abd9fb1f49c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0ffa927e6424e7e326d578ed3732c06e0bd79d6701be66841241490f13c7f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ffa927e6424e7e326d578ed3732c06e0bd79d6701be66841241490f13c7f3f->enter($__internal_a0ffa927e6424e7e326d578ed3732c06e0bd79d6701be66841241490f13c7f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6fe92402b9fc22c3c557f2bc85fd2c1a79e02e53de0df05a4c45539f0a8557ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe92402b9fc22c3c557f2bc85fd2c1a79e02e53de0df05a4c45539f0a8557ed->enter($__internal_6fe92402b9fc22c3c557f2bc85fd2c1a79e02e53de0df05a4c45539f0a8557ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6fe92402b9fc22c3c557f2bc85fd2c1a79e02e53de0df05a4c45539f0a8557ed->leave($__internal_6fe92402b9fc22c3c557f2bc85fd2c1a79e02e53de0df05a4c45539f0a8557ed_prof);

        
        $__internal_a0ffa927e6424e7e326d578ed3732c06e0bd79d6701be66841241490f13c7f3f->leave($__internal_a0ffa927e6424e7e326d578ed3732c06e0bd79d6701be66841241490f13c7f3f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ecaa010e8cad790b3d6f97f2409b9575aa1dd6f743c80ac8a71e6eb8a692c9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecaa010e8cad790b3d6f97f2409b9575aa1dd6f743c80ac8a71e6eb8a692c9de->enter($__internal_ecaa010e8cad790b3d6f97f2409b9575aa1dd6f743c80ac8a71e6eb8a692c9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0cd2e75de866ed687acc4990b8d103dbd89f691d146fda7222b24a03ac4a87d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd2e75de866ed687acc4990b8d103dbd89f691d146fda7222b24a03ac4a87d0->enter($__internal_0cd2e75de866ed687acc4990b8d103dbd89f691d146fda7222b24a03ac4a87d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cd2e75de866ed687acc4990b8d103dbd89f691d146fda7222b24a03ac4a87d0->leave($__internal_0cd2e75de866ed687acc4990b8d103dbd89f691d146fda7222b24a03ac4a87d0_prof);

        
        $__internal_ecaa010e8cad790b3d6f97f2409b9575aa1dd6f743c80ac8a71e6eb8a692c9de->leave($__internal_ecaa010e8cad790b3d6f97f2409b9575aa1dd6f743c80ac8a71e6eb8a692c9de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c12f341c1a4683f073a15e994407352f73a6d1dfc87fbce1b4ee4b740bce7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c12f341c1a4683f073a15e994407352f73a6d1dfc87fbce1b4ee4b740bce7a3->enter($__internal_2c12f341c1a4683f073a15e994407352f73a6d1dfc87fbce1b4ee4b740bce7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_092ab9c40a67da7b21943a6174269c2cfd4150b11fc853022382f1e437dc908b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092ab9c40a67da7b21943a6174269c2cfd4150b11fc853022382f1e437dc908b->enter($__internal_092ab9c40a67da7b21943a6174269c2cfd4150b11fc853022382f1e437dc908b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_092ab9c40a67da7b21943a6174269c2cfd4150b11fc853022382f1e437dc908b->leave($__internal_092ab9c40a67da7b21943a6174269c2cfd4150b11fc853022382f1e437dc908b_prof);

        
        $__internal_2c12f341c1a4683f073a15e994407352f73a6d1dfc87fbce1b4ee4b740bce7a3->leave($__internal_2c12f341c1a4683f073a15e994407352f73a6d1dfc87fbce1b4ee4b740bce7a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ProjetPropre\\AuPetitCoin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
