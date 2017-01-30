<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a80e33120e12cf206d939158a9143359b5d4985b55ab400d2822813c2dcb523e extends Twig_Template
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
        $__internal_d935491e2f44a01bd888acdc9ba4eb72fc3fc73e57f636d8974622f8d8b57725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d935491e2f44a01bd888acdc9ba4eb72fc3fc73e57f636d8974622f8d8b57725->enter($__internal_d935491e2f44a01bd888acdc9ba4eb72fc3fc73e57f636d8974622f8d8b57725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9e2a82f70d24ff849f1d47f7cfaed0ec1e4dac111a273d80d65f0285cd082a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2a82f70d24ff849f1d47f7cfaed0ec1e4dac111a273d80d65f0285cd082a4e->enter($__internal_9e2a82f70d24ff849f1d47f7cfaed0ec1e4dac111a273d80d65f0285cd082a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d935491e2f44a01bd888acdc9ba4eb72fc3fc73e57f636d8974622f8d8b57725->leave($__internal_d935491e2f44a01bd888acdc9ba4eb72fc3fc73e57f636d8974622f8d8b57725_prof);

        
        $__internal_9e2a82f70d24ff849f1d47f7cfaed0ec1e4dac111a273d80d65f0285cd082a4e->leave($__internal_9e2a82f70d24ff849f1d47f7cfaed0ec1e4dac111a273d80d65f0285cd082a4e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ae03e03bcd39b0a50f3c41fc4ad8591eb499c38a7951aa38f7775786113acd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae03e03bcd39b0a50f3c41fc4ad8591eb499c38a7951aa38f7775786113acd1->enter($__internal_8ae03e03bcd39b0a50f3c41fc4ad8591eb499c38a7951aa38f7775786113acd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_82f22cc5ce286443a51477f0e0ab3b13a519f291c663b38320a24ccf0b85934d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f22cc5ce286443a51477f0e0ab3b13a519f291c663b38320a24ccf0b85934d->enter($__internal_82f22cc5ce286443a51477f0e0ab3b13a519f291c663b38320a24ccf0b85934d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_82f22cc5ce286443a51477f0e0ab3b13a519f291c663b38320a24ccf0b85934d->leave($__internal_82f22cc5ce286443a51477f0e0ab3b13a519f291c663b38320a24ccf0b85934d_prof);

        
        $__internal_8ae03e03bcd39b0a50f3c41fc4ad8591eb499c38a7951aa38f7775786113acd1->leave($__internal_8ae03e03bcd39b0a50f3c41fc4ad8591eb499c38a7951aa38f7775786113acd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36bfe547a0c4f96858eb67ad6e31d0e85c36c1b2852818b95d7f080b3fe508b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36bfe547a0c4f96858eb67ad6e31d0e85c36c1b2852818b95d7f080b3fe508b3->enter($__internal_36bfe547a0c4f96858eb67ad6e31d0e85c36c1b2852818b95d7f080b3fe508b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37bccb864b7a6913a00a7c8d4608b2280cdb17321b9d4d976ec7d7d9e1b15491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bccb864b7a6913a00a7c8d4608b2280cdb17321b9d4d976ec7d7d9e1b15491->enter($__internal_37bccb864b7a6913a00a7c8d4608b2280cdb17321b9d4d976ec7d7d9e1b15491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37bccb864b7a6913a00a7c8d4608b2280cdb17321b9d4d976ec7d7d9e1b15491->leave($__internal_37bccb864b7a6913a00a7c8d4608b2280cdb17321b9d4d976ec7d7d9e1b15491_prof);

        
        $__internal_36bfe547a0c4f96858eb67ad6e31d0e85c36c1b2852818b95d7f080b3fe508b3->leave($__internal_36bfe547a0c4f96858eb67ad6e31d0e85c36c1b2852818b95d7f080b3fe508b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_685475b49a2ce3740875588dc991833db79727218ce1f9c1a3104723915bd9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685475b49a2ce3740875588dc991833db79727218ce1f9c1a3104723915bd9ac->enter($__internal_685475b49a2ce3740875588dc991833db79727218ce1f9c1a3104723915bd9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa0b77e9492dbc9bbcb37289d4c1eedcf903fad024aaaea02e3b6ce805701abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0b77e9492dbc9bbcb37289d4c1eedcf903fad024aaaea02e3b6ce805701abf->enter($__internal_aa0b77e9492dbc9bbcb37289d4c1eedcf903fad024aaaea02e3b6ce805701abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa0b77e9492dbc9bbcb37289d4c1eedcf903fad024aaaea02e3b6ce805701abf->leave($__internal_aa0b77e9492dbc9bbcb37289d4c1eedcf903fad024aaaea02e3b6ce805701abf_prof);

        
        $__internal_685475b49a2ce3740875588dc991833db79727218ce1f9c1a3104723915bd9ac->leave($__internal_685475b49a2ce3740875588dc991833db79727218ce1f9c1a3104723915bd9ac_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
