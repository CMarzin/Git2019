<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_f8df148cdaec2b5896b99b12fb47a9968ac05fadaad8ec48242045e897f435f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8df148cdaec2b5896b99b12fb47a9968ac05fadaad8ec48242045e897f435f0->enter($__internal_f8df148cdaec2b5896b99b12fb47a9968ac05fadaad8ec48242045e897f435f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_07391cbc2f800f97f56b209a93cea01e47176de27a99979a26c20dd4f5abd70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07391cbc2f800f97f56b209a93cea01e47176de27a99979a26c20dd4f5abd70e->enter($__internal_07391cbc2f800f97f56b209a93cea01e47176de27a99979a26c20dd4f5abd70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8df148cdaec2b5896b99b12fb47a9968ac05fadaad8ec48242045e897f435f0->leave($__internal_f8df148cdaec2b5896b99b12fb47a9968ac05fadaad8ec48242045e897f435f0_prof);

        
        $__internal_07391cbc2f800f97f56b209a93cea01e47176de27a99979a26c20dd4f5abd70e->leave($__internal_07391cbc2f800f97f56b209a93cea01e47176de27a99979a26c20dd4f5abd70e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b1aa53423878f06ab7d42f758279c92ae3dfbb579678d9cdbda0c0eb7c41e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1aa53423878f06ab7d42f758279c92ae3dfbb579678d9cdbda0c0eb7c41e2a->enter($__internal_8b1aa53423878f06ab7d42f758279c92ae3dfbb579678d9cdbda0c0eb7c41e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3f1a2520a57f4ddbf7a50ec78b700590638fd916a2ea1552cf9f51cd278ff739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1a2520a57f4ddbf7a50ec78b700590638fd916a2ea1552cf9f51cd278ff739->enter($__internal_3f1a2520a57f4ddbf7a50ec78b700590638fd916a2ea1552cf9f51cd278ff739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f1a2520a57f4ddbf7a50ec78b700590638fd916a2ea1552cf9f51cd278ff739->leave($__internal_3f1a2520a57f4ddbf7a50ec78b700590638fd916a2ea1552cf9f51cd278ff739_prof);

        
        $__internal_8b1aa53423878f06ab7d42f758279c92ae3dfbb579678d9cdbda0c0eb7c41e2a->leave($__internal_8b1aa53423878f06ab7d42f758279c92ae3dfbb579678d9cdbda0c0eb7c41e2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fafa285f2e36573abab7220d52b91d78107b8626e2c8314596775717259d9b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafa285f2e36573abab7220d52b91d78107b8626e2c8314596775717259d9b9f->enter($__internal_fafa285f2e36573abab7220d52b91d78107b8626e2c8314596775717259d9b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b0f6a10c7124f3a5c7ace61bb90b134f75719381c3ce3323be58c5ff9e86df32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f6a10c7124f3a5c7ace61bb90b134f75719381c3ce3323be58c5ff9e86df32->enter($__internal_b0f6a10c7124f3a5c7ace61bb90b134f75719381c3ce3323be58c5ff9e86df32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0f6a10c7124f3a5c7ace61bb90b134f75719381c3ce3323be58c5ff9e86df32->leave($__internal_b0f6a10c7124f3a5c7ace61bb90b134f75719381c3ce3323be58c5ff9e86df32_prof);

        
        $__internal_fafa285f2e36573abab7220d52b91d78107b8626e2c8314596775717259d9b9f->leave($__internal_fafa285f2e36573abab7220d52b91d78107b8626e2c8314596775717259d9b9f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ab6a87b3809dd8a37c8775dfcbd83ca83ca9431e7e6455c94630235da25d55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab6a87b3809dd8a37c8775dfcbd83ca83ca9431e7e6455c94630235da25d55f->enter($__internal_2ab6a87b3809dd8a37c8775dfcbd83ca83ca9431e7e6455c94630235da25d55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_271eec9f4095c48254bca863a6e651a388c61d3f4f59aa9d5f775e21ce28e20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271eec9f4095c48254bca863a6e651a388c61d3f4f59aa9d5f775e21ce28e20b->enter($__internal_271eec9f4095c48254bca863a6e651a388c61d3f4f59aa9d5f775e21ce28e20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_271eec9f4095c48254bca863a6e651a388c61d3f4f59aa9d5f775e21ce28e20b->leave($__internal_271eec9f4095c48254bca863a6e651a388c61d3f4f59aa9d5f775e21ce28e20b_prof);

        
        $__internal_2ab6a87b3809dd8a37c8775dfcbd83ca83ca9431e7e6455c94630235da25d55f->leave($__internal_2ab6a87b3809dd8a37c8775dfcbd83ca83ca9431e7e6455c94630235da25d55f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/coco/Bureau/dev/Github/exosymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
