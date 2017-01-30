<?php

/* chevalier/new.html.twig */
class __TwigTemplate_1bb576bc220b0061481e4250b7a9dd4f3a6914b5824661e4bdd6d3342ceee5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chevalier/new.html.twig", 1);
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
        $__internal_187adbdb3c3a9340dd096805934e7c0553b497c9c49a3b5a2a5a341b2f15da21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187adbdb3c3a9340dd096805934e7c0553b497c9c49a3b5a2a5a341b2f15da21->enter($__internal_187adbdb3c3a9340dd096805934e7c0553b497c9c49a3b5a2a5a341b2f15da21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/new.html.twig"));

        $__internal_3deff1b839f0d39dcce3d634cd38d1f0a9f7f254709e73858d10f1ae6bb97611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3deff1b839f0d39dcce3d634cd38d1f0a9f7f254709e73858d10f1ae6bb97611->enter($__internal_3deff1b839f0d39dcce3d634cd38d1f0a9f7f254709e73858d10f1ae6bb97611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_187adbdb3c3a9340dd096805934e7c0553b497c9c49a3b5a2a5a341b2f15da21->leave($__internal_187adbdb3c3a9340dd096805934e7c0553b497c9c49a3b5a2a5a341b2f15da21_prof);

        
        $__internal_3deff1b839f0d39dcce3d634cd38d1f0a9f7f254709e73858d10f1ae6bb97611->leave($__internal_3deff1b839f0d39dcce3d634cd38d1f0a9f7f254709e73858d10f1ae6bb97611_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7481887d6ecbddc656d5e544dd589df05467921bc8c3e8b24733bddfb96db39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7481887d6ecbddc656d5e544dd589df05467921bc8c3e8b24733bddfb96db39->enter($__internal_e7481887d6ecbddc656d5e544dd589df05467921bc8c3e8b24733bddfb96db39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b7665628c46c724fc25d7cf0e78a5d8609e24f63139f8d077363048050a8946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7665628c46c724fc25d7cf0e78a5d8609e24f63139f8d077363048050a8946->enter($__internal_1b7665628c46c724fc25d7cf0e78a5d8609e24f63139f8d077363048050a8946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Chevalier creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1b7665628c46c724fc25d7cf0e78a5d8609e24f63139f8d077363048050a8946->leave($__internal_1b7665628c46c724fc25d7cf0e78a5d8609e24f63139f8d077363048050a8946_prof);

        
        $__internal_e7481887d6ecbddc656d5e544dd589df05467921bc8c3e8b24733bddfb96db39->leave($__internal_e7481887d6ecbddc656d5e544dd589df05467921bc8c3e8b24733bddfb96db39_prof);

    }

    public function getTemplateName()
    {
        return "chevalier/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chevalier creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('chevalier_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "chevalier/new.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/chevalier/new.html.twig");
    }
}
