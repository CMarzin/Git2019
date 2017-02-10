<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
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
        $__internal_63bd942897d19149677074663018ec6f0cbb2461b74a170a1955214d25d85049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bd942897d19149677074663018ec6f0cbb2461b74a170a1955214d25d85049->enter($__internal_63bd942897d19149677074663018ec6f0cbb2461b74a170a1955214d25d85049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_af3f0375f70e1bd52e95184a38e19a15db51672ff518259897edbe65528b31b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3f0375f70e1bd52e95184a38e19a15db51672ff518259897edbe65528b31b1->enter($__internal_af3f0375f70e1bd52e95184a38e19a15db51672ff518259897edbe65528b31b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63bd942897d19149677074663018ec6f0cbb2461b74a170a1955214d25d85049->leave($__internal_63bd942897d19149677074663018ec6f0cbb2461b74a170a1955214d25d85049_prof);

        
        $__internal_af3f0375f70e1bd52e95184a38e19a15db51672ff518259897edbe65528b31b1->leave($__internal_af3f0375f70e1bd52e95184a38e19a15db51672ff518259897edbe65528b31b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b1bca6a636c0f8a9e0e892c6fe4c0135721c81f17bde261820263ef4d48c115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1bca6a636c0f8a9e0e892c6fe4c0135721c81f17bde261820263ef4d48c115->enter($__internal_1b1bca6a636c0f8a9e0e892c6fe4c0135721c81f17bde261820263ef4d48c115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1809055c9bfeb2ed452cd9aaf92b6334c22c5f6a3382f9a6774eb7c5b1ba7d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1809055c9bfeb2ed452cd9aaf92b6334c22c5f6a3382f9a6774eb7c5b1ba7d86->enter($__internal_1809055c9bfeb2ed452cd9aaf92b6334c22c5f6a3382f9a6774eb7c5b1ba7d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1809055c9bfeb2ed452cd9aaf92b6334c22c5f6a3382f9a6774eb7c5b1ba7d86->leave($__internal_1809055c9bfeb2ed452cd9aaf92b6334c22c5f6a3382f9a6774eb7c5b1ba7d86_prof);

        
        $__internal_1b1bca6a636c0f8a9e0e892c6fe4c0135721c81f17bde261820263ef4d48c115->leave($__internal_1b1bca6a636c0f8a9e0e892c6fe4c0135721c81f17bde261820263ef4d48c115_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81bc196acdfaf564cbd8a57a64bf65982a258bef44a431c66efd64f211fb3120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bc196acdfaf564cbd8a57a64bf65982a258bef44a431c66efd64f211fb3120->enter($__internal_81bc196acdfaf564cbd8a57a64bf65982a258bef44a431c66efd64f211fb3120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_404e67a83f2e226b0ea5c04b0fa8f3c7196a09007577bf968a8310e89d89c00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404e67a83f2e226b0ea5c04b0fa8f3c7196a09007577bf968a8310e89d89c00f->enter($__internal_404e67a83f2e226b0ea5c04b0fa8f3c7196a09007577bf968a8310e89d89c00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_404e67a83f2e226b0ea5c04b0fa8f3c7196a09007577bf968a8310e89d89c00f->leave($__internal_404e67a83f2e226b0ea5c04b0fa8f3c7196a09007577bf968a8310e89d89c00f_prof);

        
        $__internal_81bc196acdfaf564cbd8a57a64bf65982a258bef44a431c66efd64f211fb3120->leave($__internal_81bc196acdfaf564cbd8a57a64bf65982a258bef44a431c66efd64f211fb3120_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f00f04a875ae1686462121cc1c3a41f9f847078199f64f1f129e9f0aeba420a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f00f04a875ae1686462121cc1c3a41f9f847078199f64f1f129e9f0aeba420a->enter($__internal_7f00f04a875ae1686462121cc1c3a41f9f847078199f64f1f129e9f0aeba420a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_84e4d91fabe9a33271d789bf52f5aeb45e98f3dbc640bfcc13324f668a43c401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e4d91fabe9a33271d789bf52f5aeb45e98f3dbc640bfcc13324f668a43c401->enter($__internal_84e4d91fabe9a33271d789bf52f5aeb45e98f3dbc640bfcc13324f668a43c401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_84e4d91fabe9a33271d789bf52f5aeb45e98f3dbc640bfcc13324f668a43c401->leave($__internal_84e4d91fabe9a33271d789bf52f5aeb45e98f3dbc640bfcc13324f668a43c401_prof);

        
        $__internal_7f00f04a875ae1686462121cc1c3a41f9f847078199f64f1f129e9f0aeba420a->leave($__internal_7f00f04a875ae1686462121cc1c3a41f9f847078199f64f1f129e9f0aeba420a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/coco/Bureau/dev/Github/exosymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
