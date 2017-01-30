<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_66ba52351e2fef3eb59a79d7329e5e4e3899c555378d35355092ac7e16409afb extends Twig_Template
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
        $__internal_b34ede7f2281372609dae51199c6cf570b794040f300d4c56c31138ad3f243a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34ede7f2281372609dae51199c6cf570b794040f300d4c56c31138ad3f243a1->enter($__internal_b34ede7f2281372609dae51199c6cf570b794040f300d4c56c31138ad3f243a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b22a0246c901fe4a3fc5a9d7613f792c77c9fa3c5adf4acecc578c800abec086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22a0246c901fe4a3fc5a9d7613f792c77c9fa3c5adf4acecc578c800abec086->enter($__internal_b22a0246c901fe4a3fc5a9d7613f792c77c9fa3c5adf4acecc578c800abec086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b34ede7f2281372609dae51199c6cf570b794040f300d4c56c31138ad3f243a1->leave($__internal_b34ede7f2281372609dae51199c6cf570b794040f300d4c56c31138ad3f243a1_prof);

        
        $__internal_b22a0246c901fe4a3fc5a9d7613f792c77c9fa3c5adf4acecc578c800abec086->leave($__internal_b22a0246c901fe4a3fc5a9d7613f792c77c9fa3c5adf4acecc578c800abec086_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_953ba5025df708aebf94a9f2798caac6de090102cc9b9b0c7725be30e9e2eb5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953ba5025df708aebf94a9f2798caac6de090102cc9b9b0c7725be30e9e2eb5c->enter($__internal_953ba5025df708aebf94a9f2798caac6de090102cc9b9b0c7725be30e9e2eb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_640e987fab5d4f09777880c098527d5d22f3bfa71802a14810393dbd49b8514e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640e987fab5d4f09777880c098527d5d22f3bfa71802a14810393dbd49b8514e->enter($__internal_640e987fab5d4f09777880c098527d5d22f3bfa71802a14810393dbd49b8514e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_640e987fab5d4f09777880c098527d5d22f3bfa71802a14810393dbd49b8514e->leave($__internal_640e987fab5d4f09777880c098527d5d22f3bfa71802a14810393dbd49b8514e_prof);

        
        $__internal_953ba5025df708aebf94a9f2798caac6de090102cc9b9b0c7725be30e9e2eb5c->leave($__internal_953ba5025df708aebf94a9f2798caac6de090102cc9b9b0c7725be30e9e2eb5c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_61560247ea6a7d9d10e4c0e019917e2d2c74906659e2efc39f4a0a144ee10363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61560247ea6a7d9d10e4c0e019917e2d2c74906659e2efc39f4a0a144ee10363->enter($__internal_61560247ea6a7d9d10e4c0e019917e2d2c74906659e2efc39f4a0a144ee10363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02fabb4a025b3d6c0019ca760211c63c57c120f1b83705465011f91150127d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fabb4a025b3d6c0019ca760211c63c57c120f1b83705465011f91150127d3f->enter($__internal_02fabb4a025b3d6c0019ca760211c63c57c120f1b83705465011f91150127d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02fabb4a025b3d6c0019ca760211c63c57c120f1b83705465011f91150127d3f->leave($__internal_02fabb4a025b3d6c0019ca760211c63c57c120f1b83705465011f91150127d3f_prof);

        
        $__internal_61560247ea6a7d9d10e4c0e019917e2d2c74906659e2efc39f4a0a144ee10363->leave($__internal_61560247ea6a7d9d10e4c0e019917e2d2c74906659e2efc39f4a0a144ee10363_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bd32181b8e3f1f7ec0f16ab94d9d3c50605ac73c4f6c7055ddd5059e7af44fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd32181b8e3f1f7ec0f16ab94d9d3c50605ac73c4f6c7055ddd5059e7af44fa->enter($__internal_3bd32181b8e3f1f7ec0f16ab94d9d3c50605ac73c4f6c7055ddd5059e7af44fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93074ddbc4021f590d93319067ff3941a8eac350ff6f5e19636628d0ab99014c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93074ddbc4021f590d93319067ff3941a8eac350ff6f5e19636628d0ab99014c->enter($__internal_93074ddbc4021f590d93319067ff3941a8eac350ff6f5e19636628d0ab99014c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_93074ddbc4021f590d93319067ff3941a8eac350ff6f5e19636628d0ab99014c->leave($__internal_93074ddbc4021f590d93319067ff3941a8eac350ff6f5e19636628d0ab99014c_prof);

        
        $__internal_3bd32181b8e3f1f7ec0f16ab94d9d3c50605ac73c4f6c7055ddd5059e7af44fa->leave($__internal_3bd32181b8e3f1f7ec0f16ab94d9d3c50605ac73c4f6c7055ddd5059e7af44fa_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
