<?php

/* student/new.html.twig */
class __TwigTemplate_81e9f74b51b6bdaa0c79ae918d421ccc03906b46c58566ffc52f1499c568f130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/new.html.twig", 1);
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
        $__internal_915a183dbebde1d8a9518a197046ce3f6126765967899764de30c6f1e42c60a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915a183dbebde1d8a9518a197046ce3f6126765967899764de30c6f1e42c60a9->enter($__internal_915a183dbebde1d8a9518a197046ce3f6126765967899764de30c6f1e42c60a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/new.html.twig"));

        $__internal_56f60b1f658913af3e73ba3313050c73efb4fa3a3588ce5d668dd8c32b6846dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f60b1f658913af3e73ba3313050c73efb4fa3a3588ce5d668dd8c32b6846dd->enter($__internal_56f60b1f658913af3e73ba3313050c73efb4fa3a3588ce5d668dd8c32b6846dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915a183dbebde1d8a9518a197046ce3f6126765967899764de30c6f1e42c60a9->leave($__internal_915a183dbebde1d8a9518a197046ce3f6126765967899764de30c6f1e42c60a9_prof);

        
        $__internal_56f60b1f658913af3e73ba3313050c73efb4fa3a3588ce5d668dd8c32b6846dd->leave($__internal_56f60b1f658913af3e73ba3313050c73efb4fa3a3588ce5d668dd8c32b6846dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08606bd4abe83d75b5d4ad92bfffb9da2d8a1d61814d30519c42887e81db3a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08606bd4abe83d75b5d4ad92bfffb9da2d8a1d61814d30519c42887e81db3a3b->enter($__internal_08606bd4abe83d75b5d4ad92bfffb9da2d8a1d61814d30519c42887e81db3a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6ebb0f4e0dcdccefb7ea79a708adf5fff9ba79286b9b13b1c6f759d68fd6497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ebb0f4e0dcdccefb7ea79a708adf5fff9ba79286b9b13b1c6f759d68fd6497->enter($__internal_f6ebb0f4e0dcdccefb7ea79a708adf5fff9ba79286b9b13b1c6f759d68fd6497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f6ebb0f4e0dcdccefb7ea79a708adf5fff9ba79286b9b13b1c6f759d68fd6497->leave($__internal_f6ebb0f4e0dcdccefb7ea79a708adf5fff9ba79286b9b13b1c6f759d68fd6497_prof);

        
        $__internal_08606bd4abe83d75b5d4ad92bfffb9da2d8a1d61814d30519c42887e81db3a3b->leave($__internal_08606bd4abe83d75b5d4ad92bfffb9da2d8a1d61814d30519c42887e81db3a3b_prof);

    }

    public function getTemplateName()
    {
        return "student/new.html.twig";
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
    <h1>Student creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('student_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "student/new.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/student/new.html.twig");
    }
}
