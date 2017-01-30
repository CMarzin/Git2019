<?php

/* studenttype/new.html.twig */
class __TwigTemplate_062ed430e4139e594b8388846c7614f60d46b8fcee0f6fdb396af5c52a9c39eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studenttype/new.html.twig", 1);
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
        $__internal_c4adacd685bab19dc9037ccc63283f186e4b3c731a7ce4ecf37511f7c4018237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4adacd685bab19dc9037ccc63283f186e4b3c731a7ce4ecf37511f7c4018237->enter($__internal_c4adacd685bab19dc9037ccc63283f186e4b3c731a7ce4ecf37511f7c4018237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/new.html.twig"));

        $__internal_b4d9a7acf22005a1cc2a1e6e34b46ced1323b0a79eed7122853d9abead161ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d9a7acf22005a1cc2a1e6e34b46ced1323b0a79eed7122853d9abead161ea7->enter($__internal_b4d9a7acf22005a1cc2a1e6e34b46ced1323b0a79eed7122853d9abead161ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4adacd685bab19dc9037ccc63283f186e4b3c731a7ce4ecf37511f7c4018237->leave($__internal_c4adacd685bab19dc9037ccc63283f186e4b3c731a7ce4ecf37511f7c4018237_prof);

        
        $__internal_b4d9a7acf22005a1cc2a1e6e34b46ced1323b0a79eed7122853d9abead161ea7->leave($__internal_b4d9a7acf22005a1cc2a1e6e34b46ced1323b0a79eed7122853d9abead161ea7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eda7f720eb96a2ca87233338abb644dab8d090cc416fe21aa2a873d7012c66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eda7f720eb96a2ca87233338abb644dab8d090cc416fe21aa2a873d7012c66d->enter($__internal_1eda7f720eb96a2ca87233338abb644dab8d090cc416fe21aa2a873d7012c66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_722e256f782daa1e16d61dd1cbd3fb8a554f9d09a01909618e6a978de13a0223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722e256f782daa1e16d61dd1cbd3fb8a554f9d09a01909618e6a978de13a0223->enter($__internal_722e256f782daa1e16d61dd1cbd3fb8a554f9d09a01909618e6a978de13a0223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttype creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_722e256f782daa1e16d61dd1cbd3fb8a554f9d09a01909618e6a978de13a0223->leave($__internal_722e256f782daa1e16d61dd1cbd3fb8a554f9d09a01909618e6a978de13a0223_prof);

        
        $__internal_1eda7f720eb96a2ca87233338abb644dab8d090cc416fe21aa2a873d7012c66d->leave($__internal_1eda7f720eb96a2ca87233338abb644dab8d090cc416fe21aa2a873d7012c66d_prof);

    }

    public function getTemplateName()
    {
        return "studenttype/new.html.twig";
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
    <h1>Studenttype creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('studenttype_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "studenttype/new.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/studenttype/new.html.twig");
    }
}
