<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c22d97982730d0d4058b9bea1bb74a2f52595da1deb791b793bc1f9f9d92daa7 extends Twig_Template
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
        $__internal_5a6f122e42ea98947213758039b2afd6a38598b31e8854e4da8c62160a4d98d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6f122e42ea98947213758039b2afd6a38598b31e8854e4da8c62160a4d98d3->enter($__internal_5a6f122e42ea98947213758039b2afd6a38598b31e8854e4da8c62160a4d98d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4e4f066cfec0f6ee289083c6fa992c82c26021709838e18c0a029431192a74dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4f066cfec0f6ee289083c6fa992c82c26021709838e18c0a029431192a74dd->enter($__internal_4e4f066cfec0f6ee289083c6fa992c82c26021709838e18c0a029431192a74dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a6f122e42ea98947213758039b2afd6a38598b31e8854e4da8c62160a4d98d3->leave($__internal_5a6f122e42ea98947213758039b2afd6a38598b31e8854e4da8c62160a4d98d3_prof);

        
        $__internal_4e4f066cfec0f6ee289083c6fa992c82c26021709838e18c0a029431192a74dd->leave($__internal_4e4f066cfec0f6ee289083c6fa992c82c26021709838e18c0a029431192a74dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6382b223d7a74ee7f85633052d4eaa1a632f47f61cacc242390b374f855f695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6382b223d7a74ee7f85633052d4eaa1a632f47f61cacc242390b374f855f695->enter($__internal_a6382b223d7a74ee7f85633052d4eaa1a632f47f61cacc242390b374f855f695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8486c2f8b030adda4ff2b49f19e864e5e845555cee16e07dabc10b674de7c862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8486c2f8b030adda4ff2b49f19e864e5e845555cee16e07dabc10b674de7c862->enter($__internal_8486c2f8b030adda4ff2b49f19e864e5e845555cee16e07dabc10b674de7c862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8486c2f8b030adda4ff2b49f19e864e5e845555cee16e07dabc10b674de7c862->leave($__internal_8486c2f8b030adda4ff2b49f19e864e5e845555cee16e07dabc10b674de7c862_prof);

        
        $__internal_a6382b223d7a74ee7f85633052d4eaa1a632f47f61cacc242390b374f855f695->leave($__internal_a6382b223d7a74ee7f85633052d4eaa1a632f47f61cacc242390b374f855f695_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2636c0460b086f0e2cb9df9f33a76362d10e2ebf1edccb5c8df5b8921c3dc089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2636c0460b086f0e2cb9df9f33a76362d10e2ebf1edccb5c8df5b8921c3dc089->enter($__internal_2636c0460b086f0e2cb9df9f33a76362d10e2ebf1edccb5c8df5b8921c3dc089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2a7ad8f89acb4bef5ba3aef0961e7ea1c4d06c328fa363d5f4bf41678b4802e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7ad8f89acb4bef5ba3aef0961e7ea1c4d06c328fa363d5f4bf41678b4802e9->enter($__internal_2a7ad8f89acb4bef5ba3aef0961e7ea1c4d06c328fa363d5f4bf41678b4802e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2a7ad8f89acb4bef5ba3aef0961e7ea1c4d06c328fa363d5f4bf41678b4802e9->leave($__internal_2a7ad8f89acb4bef5ba3aef0961e7ea1c4d06c328fa363d5f4bf41678b4802e9_prof);

        
        $__internal_2636c0460b086f0e2cb9df9f33a76362d10e2ebf1edccb5c8df5b8921c3dc089->leave($__internal_2636c0460b086f0e2cb9df9f33a76362d10e2ebf1edccb5c8df5b8921c3dc089_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8341c7dbc206e873201157bf50a9d74efa5de41bd2064fb85d5d3d39171878ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8341c7dbc206e873201157bf50a9d74efa5de41bd2064fb85d5d3d39171878ac->enter($__internal_8341c7dbc206e873201157bf50a9d74efa5de41bd2064fb85d5d3d39171878ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82d5ea82306fdbf5ce64b7bd951cfbd6e996cad4821d81782fe02392c5088fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d5ea82306fdbf5ce64b7bd951cfbd6e996cad4821d81782fe02392c5088fb1->enter($__internal_82d5ea82306fdbf5ce64b7bd951cfbd6e996cad4821d81782fe02392c5088fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_82d5ea82306fdbf5ce64b7bd951cfbd6e996cad4821d81782fe02392c5088fb1->leave($__internal_82d5ea82306fdbf5ce64b7bd951cfbd6e996cad4821d81782fe02392c5088fb1_prof);

        
        $__internal_8341c7dbc206e873201157bf50a9d74efa5de41bd2064fb85d5d3d39171878ac->leave($__internal_8341c7dbc206e873201157bf50a9d74efa5de41bd2064fb85d5d3d39171878ac_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
