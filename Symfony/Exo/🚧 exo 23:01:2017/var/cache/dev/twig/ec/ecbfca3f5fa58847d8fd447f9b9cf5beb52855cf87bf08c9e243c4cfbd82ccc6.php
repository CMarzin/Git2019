<?php

/* chevalier/edit.html.twig */
class __TwigTemplate_2cb29145226ac44b33eef335aab1926def0255c7805efd9590d0613b39c2c254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chevalier/edit.html.twig", 1);
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
        $__internal_d8737ed3ce0aca630060c3d1355062cbbccc1d1400089743df7f8c24c04b49f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8737ed3ce0aca630060c3d1355062cbbccc1d1400089743df7f8c24c04b49f5->enter($__internal_d8737ed3ce0aca630060c3d1355062cbbccc1d1400089743df7f8c24c04b49f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/edit.html.twig"));

        $__internal_e18918f6f62f6b8d076571e73a3032c93f15ab37f6a15283388e53f94707e96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18918f6f62f6b8d076571e73a3032c93f15ab37f6a15283388e53f94707e96d->enter($__internal_e18918f6f62f6b8d076571e73a3032c93f15ab37f6a15283388e53f94707e96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/edit.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8737ed3ce0aca630060c3d1355062cbbccc1d1400089743df7f8c24c04b49f5->leave($__internal_d8737ed3ce0aca630060c3d1355062cbbccc1d1400089743df7f8c24c04b49f5_prof);

        
        $__internal_e18918f6f62f6b8d076571e73a3032c93f15ab37f6a15283388e53f94707e96d->leave($__internal_e18918f6f62f6b8d076571e73a3032c93f15ab37f6a15283388e53f94707e96d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_113bf4d6eda137bd337a5533ec5a9a020d4b7d74bf7203a4c78f71920feccf81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113bf4d6eda137bd337a5533ec5a9a020d4b7d74bf7203a4c78f71920feccf81->enter($__internal_113bf4d6eda137bd337a5533ec5a9a020d4b7d74bf7203a4c78f71920feccf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1d493f602188d51523fa2ada2e354718395bbc18567a057b800c5235dafe45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d493f602188d51523fa2ada2e354718395bbc18567a057b800c5235dafe45d->enter($__internal_f1d493f602188d51523fa2ada2e354718395bbc18567a057b800c5235dafe45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Chevalier edit</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f1d493f602188d51523fa2ada2e354718395bbc18567a057b800c5235dafe45d->leave($__internal_f1d493f602188d51523fa2ada2e354718395bbc18567a057b800c5235dafe45d_prof);

        
        $__internal_113bf4d6eda137bd337a5533ec5a9a020d4b7d74bf7203a4c78f71920feccf81->leave($__internal_113bf4d6eda137bd337a5533ec5a9a020d4b7d74bf7203a4c78f71920feccf81_prof);

    }

    public function getTemplateName()
    {
        return "chevalier/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  78 => 17,  72 => 14,  65 => 10,  60 => 8,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme edit_form 'bootstrap_3_layout.html.twig' %}

{% block body %}
    <h1>Chevalier edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('chevalier_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "chevalier/edit.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/chevalier/edit.html.twig");
    }
}
