<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_2fcf1883ec3adcae85b6740c42828aad344700548801b60afce424494d12dd03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fcf1883ec3adcae85b6740c42828aad344700548801b60afce424494d12dd03->enter($__internal_2fcf1883ec3adcae85b6740c42828aad344700548801b60afce424494d12dd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2bcbf310c5f620c43a663d33eedc03a6aa0f4f1b479d7b0addb6b3c51bb0c230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcbf310c5f620c43a663d33eedc03a6aa0f4f1b479d7b0addb6b3c51bb0c230->enter($__internal_2bcbf310c5f620c43a663d33eedc03a6aa0f4f1b479d7b0addb6b3c51bb0c230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div class=\"container theme-showcase\" role=\"main\">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    </div>
    ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_2fcf1883ec3adcae85b6740c42828aad344700548801b60afce424494d12dd03->leave($__internal_2fcf1883ec3adcae85b6740c42828aad344700548801b60afce424494d12dd03_prof);

        
        $__internal_2bcbf310c5f620c43a663d33eedc03a6aa0f4f1b479d7b0addb6b3c51bb0c230->leave($__internal_2bcbf310c5f620c43a663d33eedc03a6aa0f4f1b479d7b0addb6b3c51bb0c230_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e6fd818cca68308e284c4a3c5e00b22669d6ae1f7c202c1f2ff9bee5b73fbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6fd818cca68308e284c4a3c5e00b22669d6ae1f7c202c1f2ff9bee5b73fbfc->enter($__internal_8e6fd818cca68308e284c4a3c5e00b22669d6ae1f7c202c1f2ff9bee5b73fbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5551fca00522b70d2475d54f34adc038028c59c6c55bc8e23b2ccbd74f673be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5551fca00522b70d2475d54f34adc038028c59c6c55bc8e23b2ccbd74f673be9->enter($__internal_5551fca00522b70d2475d54f34adc038028c59c6c55bc8e23b2ccbd74f673be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5551fca00522b70d2475d54f34adc038028c59c6c55bc8e23b2ccbd74f673be9->leave($__internal_5551fca00522b70d2475d54f34adc038028c59c6c55bc8e23b2ccbd74f673be9_prof);

        
        $__internal_8e6fd818cca68308e284c4a3c5e00b22669d6ae1f7c202c1f2ff9bee5b73fbfc->leave($__internal_8e6fd818cca68308e284c4a3c5e00b22669d6ae1f7c202c1f2ff9bee5b73fbfc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03d636451570c788bf64b3a38fcc55b805ecf4e0d8714085dd1c1097919a16ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d636451570c788bf64b3a38fcc55b805ecf4e0d8714085dd1c1097919a16ad->enter($__internal_03d636451570c788bf64b3a38fcc55b805ecf4e0d8714085dd1c1097919a16ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_45650e4272d16af8921c33cdb67b319208c4059f7304e7a78316ddcfc4496f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45650e4272d16af8921c33cdb67b319208c4059f7304e7a78316ddcfc4496f68->enter($__internal_45650e4272d16af8921c33cdb67b319208c4059f7304e7a78316ddcfc4496f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_45650e4272d16af8921c33cdb67b319208c4059f7304e7a78316ddcfc4496f68->leave($__internal_45650e4272d16af8921c33cdb67b319208c4059f7304e7a78316ddcfc4496f68_prof);

        
        $__internal_03d636451570c788bf64b3a38fcc55b805ecf4e0d8714085dd1c1097919a16ad->leave($__internal_03d636451570c788bf64b3a38fcc55b805ecf4e0d8714085dd1c1097919a16ad_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0b9e9883b5a41a3009c2071c0a5cf890fb390db3515a58dd7f38093ebdec102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b9e9883b5a41a3009c2071c0a5cf890fb390db3515a58dd7f38093ebdec102->enter($__internal_a0b9e9883b5a41a3009c2071c0a5cf890fb390db3515a58dd7f38093ebdec102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62515682525f898d1061de9e355f408a4f3156ea8aaa62df547ce53db836b816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62515682525f898d1061de9e355f408a4f3156ea8aaa62df547ce53db836b816->enter($__internal_62515682525f898d1061de9e355f408a4f3156ea8aaa62df547ce53db836b816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62515682525f898d1061de9e355f408a4f3156ea8aaa62df547ce53db836b816->leave($__internal_62515682525f898d1061de9e355f408a4f3156ea8aaa62df547ce53db836b816_prof);

        
        $__internal_a0b9e9883b5a41a3009c2071c0a5cf890fb390db3515a58dd7f38093ebdec102->leave($__internal_a0b9e9883b5a41a3009c2071c0a5cf890fb390db3515a58dd7f38093ebdec102_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13190867e37f9d82d804eb194946a828d4aeba1e8d080efc38f5adb6c257b9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13190867e37f9d82d804eb194946a828d4aeba1e8d080efc38f5adb6c257b9a3->enter($__internal_13190867e37f9d82d804eb194946a828d4aeba1e8d080efc38f5adb6c257b9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e85c30d4c8abe02e342aefa76db7311f5180e46da348c3404c1bf0dd648cf08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e85c30d4c8abe02e342aefa76db7311f5180e46da348c3404c1bf0dd648cf08->enter($__internal_6e85c30d4c8abe02e342aefa76db7311f5180e46da348c3404c1bf0dd648cf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e85c30d4c8abe02e342aefa76db7311f5180e46da348c3404c1bf0dd648cf08->leave($__internal_6e85c30d4c8abe02e342aefa76db7311f5180e46da348c3404c1bf0dd648cf08_prof);

        
        $__internal_13190867e37f9d82d804eb194946a828d4aeba1e8d080efc38f5adb6c257b9a3->leave($__internal_13190867e37f9d82d804eb194946a828d4aeba1e8d080efc38f5adb6c257b9a3_prof);

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
        return array (  128 => 15,  111 => 13,  94 => 6,  76 => 5,  64 => 16,  62 => 15,  59 => 14,  57 => 13,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\">
        <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    <div class=\"container theme-showcase\" role=\"main\">
        {% block body %}{% endblock %}
    </div>
    {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/coco/Bureau/dev/Github/exosymfony/app/Resources/views/base.html.twig");
    }
}
