<?php

/* product/new.html.twig */
class __TwigTemplate_e180a00d630bc86ff81c578fc56f191ebb2a6a720d9f577dc65e4c7629797b5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26e296c8d4e8ab2739f00b1fe8493ef01b4ecc08502d8207b46d808da22630cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e296c8d4e8ab2739f00b1fe8493ef01b4ecc08502d8207b46d808da22630cf->enter($__internal_26e296c8d4e8ab2739f00b1fe8493ef01b4ecc08502d8207b46d808da22630cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_2dd97c8a641dd3684859329a0c2bf8dc1ba04e7b2b27eda10c250ed565284c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd97c8a641dd3684859329a0c2bf8dc1ba04e7b2b27eda10c250ed565284c27->enter($__internal_2dd97c8a641dd3684859329a0c2bf8dc1ba04e7b2b27eda10c250ed565284c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e296c8d4e8ab2739f00b1fe8493ef01b4ecc08502d8207b46d808da22630cf->leave($__internal_26e296c8d4e8ab2739f00b1fe8493ef01b4ecc08502d8207b46d808da22630cf_prof);

        
        $__internal_2dd97c8a641dd3684859329a0c2bf8dc1ba04e7b2b27eda10c250ed565284c27->leave($__internal_2dd97c8a641dd3684859329a0c2bf8dc1ba04e7b2b27eda10c250ed565284c27_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_956f2e5c643ba9aa03ae6adb698ced020bfb6c62d80eb41763a61299b852e1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956f2e5c643ba9aa03ae6adb698ced020bfb6c62d80eb41763a61299b852e1b9->enter($__internal_956f2e5c643ba9aa03ae6adb698ced020bfb6c62d80eb41763a61299b852e1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7610ffaefb69247bdfca7b1d7b630bdd6e39b569f7be52ed007f21126091356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7610ffaefb69247bdfca7b1d7b630bdd6e39b569f7be52ed007f21126091356->enter($__internal_c7610ffaefb69247bdfca7b1d7b630bdd6e39b569f7be52ed007f21126091356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h1>Product creation</h1>
        </div>
        <div class=\"panel-body\">

            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Create\" class=\"btn btn-lg btn-success\" />
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\"><button type=\"button\" class=\"btn btn-lg btn-primary\">Back to the list</button></a>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_c7610ffaefb69247bdfca7b1d7b630bdd6e39b569f7be52ed007f21126091356->leave($__internal_c7610ffaefb69247bdfca7b1d7b630bdd6e39b569f7be52ed007f21126091356_prof);

        
        $__internal_956f2e5c643ba9aa03ae6adb698ced020bfb6c62d80eb41763a61299b852e1b9->leave($__internal_956f2e5c643ba9aa03ae6adb698ced020bfb6c62d80eb41763a61299b852e1b9_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  66 => 13,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h1>Product creation</h1>
        </div>
        <div class=\"panel-body\">

            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input type=\"submit\" value=\"Create\" class=\"btn btn-lg btn-success\" />
            {{ form_end(form) }}

            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path('_index') }}\"><button type=\"button\" class=\"btn btn-lg btn-primary\">Back to the list</button></a>
                </li>
            </ul>
        </div>
    </div>
{% endblock %}
", "product/new.html.twig", "/home/coco/Bureau/dev/Github/exosymfony/app/Resources/views/product/new.html.twig");
    }
}
