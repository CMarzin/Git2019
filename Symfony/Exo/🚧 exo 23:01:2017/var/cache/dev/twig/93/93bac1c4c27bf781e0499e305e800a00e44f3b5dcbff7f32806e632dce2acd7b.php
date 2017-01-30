<?php

/* student/edit.html.twig */
class __TwigTemplate_17a8cf331ce016faa76e8a93618519bd828b71f488e9d82a835b6addac0b52bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/edit.html.twig", 1);
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
        $__internal_6bf7085d87bbb8a8fe6513ed2bf27c6a93258545be0e23b1e512754d2e53f61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf7085d87bbb8a8fe6513ed2bf27c6a93258545be0e23b1e512754d2e53f61f->enter($__internal_6bf7085d87bbb8a8fe6513ed2bf27c6a93258545be0e23b1e512754d2e53f61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/edit.html.twig"));

        $__internal_e7a10af64dd2d70c980d0daed42380bdd2914139f7647bbdfd90a5c1f08be9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a10af64dd2d70c980d0daed42380bdd2914139f7647bbdfd90a5c1f08be9ce->enter($__internal_e7a10af64dd2d70c980d0daed42380bdd2914139f7647bbdfd90a5c1f08be9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf7085d87bbb8a8fe6513ed2bf27c6a93258545be0e23b1e512754d2e53f61f->leave($__internal_6bf7085d87bbb8a8fe6513ed2bf27c6a93258545be0e23b1e512754d2e53f61f_prof);

        
        $__internal_e7a10af64dd2d70c980d0daed42380bdd2914139f7647bbdfd90a5c1f08be9ce->leave($__internal_e7a10af64dd2d70c980d0daed42380bdd2914139f7647bbdfd90a5c1f08be9ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc99397dc1d5af8b1b7d0a56555055472ff176fb9929d5e042c8c5282b209042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc99397dc1d5af8b1b7d0a56555055472ff176fb9929d5e042c8c5282b209042->enter($__internal_cc99397dc1d5af8b1b7d0a56555055472ff176fb9929d5e042c8c5282b209042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7fb73c93acd2e9bd088d004199db781448fcdd2ac0d506c5834860e577ee278e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb73c93acd2e9bd088d004199db781448fcdd2ac0d506c5834860e577ee278e->enter($__internal_7fb73c93acd2e9bd088d004199db781448fcdd2ac0d506c5834860e577ee278e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7fb73c93acd2e9bd088d004199db781448fcdd2ac0d506c5834860e577ee278e->leave($__internal_7fb73c93acd2e9bd088d004199db781448fcdd2ac0d506c5834860e577ee278e_prof);

        
        $__internal_cc99397dc1d5af8b1b7d0a56555055472ff176fb9929d5e042c8c5282b209042->leave($__internal_cc99397dc1d5af8b1b7d0a56555055472ff176fb9929d5e042c8c5282b209042_prof);

    }

    public function getTemplateName()
    {
        return "student/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Student edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('student_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "student/edit.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/student/edit.html.twig");
    }
}
