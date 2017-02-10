<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a4f2efaaacb06f5da1d139481bb9781c09f2660729fd8ddeccc22f74e91964a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4f2efaaacb06f5da1d139481bb9781c09f2660729fd8ddeccc22f74e91964a->enter($__internal_9a4f2efaaacb06f5da1d139481bb9781c09f2660729fd8ddeccc22f74e91964a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_207e62f5e0cdb9a30597624525e104256efc241d04af7bad705db37ed76fbfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207e62f5e0cdb9a30597624525e104256efc241d04af7bad705db37ed76fbfa2->enter($__internal_207e62f5e0cdb9a30597624525e104256efc241d04af7bad705db37ed76fbfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a4f2efaaacb06f5da1d139481bb9781c09f2660729fd8ddeccc22f74e91964a->leave($__internal_9a4f2efaaacb06f5da1d139481bb9781c09f2660729fd8ddeccc22f74e91964a_prof);

        
        $__internal_207e62f5e0cdb9a30597624525e104256efc241d04af7bad705db37ed76fbfa2->leave($__internal_207e62f5e0cdb9a30597624525e104256efc241d04af7bad705db37ed76fbfa2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a213506dba5ec0a1a5d7ce5028a7b5265c5ca28ce41ad1797a3c9ac3c9aa7abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a213506dba5ec0a1a5d7ce5028a7b5265c5ca28ce41ad1797a3c9ac3c9aa7abb->enter($__internal_a213506dba5ec0a1a5d7ce5028a7b5265c5ca28ce41ad1797a3c9ac3c9aa7abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ed62ab3481030179ae785a09913edda82ba7725841c7e8d2b01854e9982f28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed62ab3481030179ae785a09913edda82ba7725841c7e8d2b01854e9982f28f->enter($__internal_8ed62ab3481030179ae785a09913edda82ba7725841c7e8d2b01854e9982f28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8ed62ab3481030179ae785a09913edda82ba7725841c7e8d2b01854e9982f28f->leave($__internal_8ed62ab3481030179ae785a09913edda82ba7725841c7e8d2b01854e9982f28f_prof);

        
        $__internal_a213506dba5ec0a1a5d7ce5028a7b5265c5ca28ce41ad1797a3c9ac3c9aa7abb->leave($__internal_a213506dba5ec0a1a5d7ce5028a7b5265c5ca28ce41ad1797a3c9ac3c9aa7abb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8936a5278223b9cd543084175eba5b0a06c3570ada24f279a67bab7da70269a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8936a5278223b9cd543084175eba5b0a06c3570ada24f279a67bab7da70269a8->enter($__internal_8936a5278223b9cd543084175eba5b0a06c3570ada24f279a67bab7da70269a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a8b07f3fd54480a269859c355ccc4f3dfb1d0b4f9cf0803c51207aa23fd2f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8b07f3fd54480a269859c355ccc4f3dfb1d0b4f9cf0803c51207aa23fd2f78->enter($__internal_8a8b07f3fd54480a269859c355ccc4f3dfb1d0b4f9cf0803c51207aa23fd2f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a8b07f3fd54480a269859c355ccc4f3dfb1d0b4f9cf0803c51207aa23fd2f78->leave($__internal_8a8b07f3fd54480a269859c355ccc4f3dfb1d0b4f9cf0803c51207aa23fd2f78_prof);

        
        $__internal_8936a5278223b9cd543084175eba5b0a06c3570ada24f279a67bab7da70269a8->leave($__internal_8936a5278223b9cd543084175eba5b0a06c3570ada24f279a67bab7da70269a8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_96367cde54cf3f4aede75d800ad7abb8d882226374f430c9f76236e7d425a6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96367cde54cf3f4aede75d800ad7abb8d882226374f430c9f76236e7d425a6d7->enter($__internal_96367cde54cf3f4aede75d800ad7abb8d882226374f430c9f76236e7d425a6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37ce1bc2ca27a577f0ebd37c174f80bd95fc730fe7a341c9e8ece82944db7637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ce1bc2ca27a577f0ebd37c174f80bd95fc730fe7a341c9e8ece82944db7637->enter($__internal_37ce1bc2ca27a577f0ebd37c174f80bd95fc730fe7a341c9e8ece82944db7637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_37ce1bc2ca27a577f0ebd37c174f80bd95fc730fe7a341c9e8ece82944db7637->leave($__internal_37ce1bc2ca27a577f0ebd37c174f80bd95fc730fe7a341c9e8ece82944db7637_prof);

        
        $__internal_96367cde54cf3f4aede75d800ad7abb8d882226374f430c9f76236e7d425a6d7->leave($__internal_96367cde54cf3f4aede75d800ad7abb8d882226374f430c9f76236e7d425a6d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/coco/Bureau/dev/Github/exosymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
