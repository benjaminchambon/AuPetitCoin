<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_056189ed346ebb6e462f5f59bb676cf3e0fce8cfbee3f7dd8c82df71825f01de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_445b71f90983fbec6be4cd8cf66131915f5a209c9aa69865005ab7c9ccb14b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445b71f90983fbec6be4cd8cf66131915f5a209c9aa69865005ab7c9ccb14b85->enter($__internal_445b71f90983fbec6be4cd8cf66131915f5a209c9aa69865005ab7c9ccb14b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_46dd0e4289217a7bfa438bfb62d2eb7b286d6bda89e12d1530fd041f8274306e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dd0e4289217a7bfa438bfb62d2eb7b286d6bda89e12d1530fd041f8274306e->enter($__internal_46dd0e4289217a7bfa438bfb62d2eb7b286d6bda89e12d1530fd041f8274306e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445b71f90983fbec6be4cd8cf66131915f5a209c9aa69865005ab7c9ccb14b85->leave($__internal_445b71f90983fbec6be4cd8cf66131915f5a209c9aa69865005ab7c9ccb14b85_prof);

        
        $__internal_46dd0e4289217a7bfa438bfb62d2eb7b286d6bda89e12d1530fd041f8274306e->leave($__internal_46dd0e4289217a7bfa438bfb62d2eb7b286d6bda89e12d1530fd041f8274306e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0be4ffdc807665065c3879cd1211029dd19f60ce06c118662465501882d7b80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be4ffdc807665065c3879cd1211029dd19f60ce06c118662465501882d7b80f->enter($__internal_0be4ffdc807665065c3879cd1211029dd19f60ce06c118662465501882d7b80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1cadb068090a5f79378b549b55285709195d29a821f5136ea69d781e8d5e6985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cadb068090a5f79378b549b55285709195d29a821f5136ea69d781e8d5e6985->enter($__internal_1cadb068090a5f79378b549b55285709195d29a821f5136ea69d781e8d5e6985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1cadb068090a5f79378b549b55285709195d29a821f5136ea69d781e8d5e6985->leave($__internal_1cadb068090a5f79378b549b55285709195d29a821f5136ea69d781e8d5e6985_prof);

        
        $__internal_0be4ffdc807665065c3879cd1211029dd19f60ce06c118662465501882d7b80f->leave($__internal_0be4ffdc807665065c3879cd1211029dd19f60ce06c118662465501882d7b80f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c35b1d6376795e332c86002b696ecc261a1daeda4be5f25cce0354d362154777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35b1d6376795e332c86002b696ecc261a1daeda4be5f25cce0354d362154777->enter($__internal_c35b1d6376795e332c86002b696ecc261a1daeda4be5f25cce0354d362154777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e6605d738e09ace5219fe130854f515c5f9b9f3d75a9fbca755bf530b00e9a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6605d738e09ace5219fe130854f515c5f9b9f3d75a9fbca755bf530b00e9a74->enter($__internal_e6605d738e09ace5219fe130854f515c5f9b9f3d75a9fbca755bf530b00e9a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e6605d738e09ace5219fe130854f515c5f9b9f3d75a9fbca755bf530b00e9a74->leave($__internal_e6605d738e09ace5219fe130854f515c5f9b9f3d75a9fbca755bf530b00e9a74_prof);

        
        $__internal_c35b1d6376795e332c86002b696ecc261a1daeda4be5f25cce0354d362154777->leave($__internal_c35b1d6376795e332c86002b696ecc261a1daeda4be5f25cce0354d362154777_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87b2a540b70d98d08348c37e0f70dbdd36f5dff4bad55355611becd14f15efd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b2a540b70d98d08348c37e0f70dbdd36f5dff4bad55355611becd14f15efd0->enter($__internal_87b2a540b70d98d08348c37e0f70dbdd36f5dff4bad55355611becd14f15efd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48b66675923bd499eecbd4a5d6e12e67b754861112674d087295768111abb225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b66675923bd499eecbd4a5d6e12e67b754861112674d087295768111abb225->enter($__internal_48b66675923bd499eecbd4a5d6e12e67b754861112674d087295768111abb225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_48b66675923bd499eecbd4a5d6e12e67b754861112674d087295768111abb225->leave($__internal_48b66675923bd499eecbd4a5d6e12e67b754861112674d087295768111abb225_prof);

        
        $__internal_87b2a540b70d98d08348c37e0f70dbdd36f5dff4bad55355611becd14f15efd0->leave($__internal_87b2a540b70d98d08348c37e0f70dbdd36f5dff4bad55355611becd14f15efd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ProjetPropre\\AuPetitCoin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
