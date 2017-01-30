<?php

/* studenttype/show.html.twig */
class __TwigTemplate_51caee2a4177b73923383e482049ba46144e8e10a9ae4cbf528faff762054ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studenttype/show.html.twig", 1);
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
        $__internal_442f83e4d411af0b75aaafc60aa29fd3a8646fb97c7d787b802a06f148e65214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442f83e4d411af0b75aaafc60aa29fd3a8646fb97c7d787b802a06f148e65214->enter($__internal_442f83e4d411af0b75aaafc60aa29fd3a8646fb97c7d787b802a06f148e65214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/show.html.twig"));

        $__internal_88fd12ffbd0fb799c64ecd7a37fc0248dbd570d3cc904f80a70378c6e6b1f4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fd12ffbd0fb799c64ecd7a37fc0248dbd570d3cc904f80a70378c6e6b1f4d0->enter($__internal_88fd12ffbd0fb799c64ecd7a37fc0248dbd570d3cc904f80a70378c6e6b1f4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442f83e4d411af0b75aaafc60aa29fd3a8646fb97c7d787b802a06f148e65214->leave($__internal_442f83e4d411af0b75aaafc60aa29fd3a8646fb97c7d787b802a06f148e65214_prof);

        
        $__internal_88fd12ffbd0fb799c64ecd7a37fc0248dbd570d3cc904f80a70378c6e6b1f4d0->leave($__internal_88fd12ffbd0fb799c64ecd7a37fc0248dbd570d3cc904f80a70378c6e6b1f4d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ec64db8c28ffa7cdb1be56120e0e9e586a2dd318b9c102517aae16c7879c285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec64db8c28ffa7cdb1be56120e0e9e586a2dd318b9c102517aae16c7879c285->enter($__internal_5ec64db8c28ffa7cdb1be56120e0e9e586a2dd318b9c102517aae16c7879c285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e27fb11692b54bc90c5df2246c3841ab52a4279e5f4ad36bb6e16d7bf51f5150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27fb11692b54bc90c5df2246c3841ab52a4279e5f4ad36bb6e16d7bf51f5150->enter($__internal_e27fb11692b54bc90c5df2246c3841ab52a4279e5f4ad36bb6e16d7bf51f5150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "createdAt", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_edit", array("id" => $this->getAttribute(($context["studentType"] ?? $this->getContext($context, "studentType")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e27fb11692b54bc90c5df2246c3841ab52a4279e5f4ad36bb6e16d7bf51f5150->leave($__internal_e27fb11692b54bc90c5df2246c3841ab52a4279e5f4ad36bb6e16d7bf51f5150_prof);

        
        $__internal_5ec64db8c28ffa7cdb1be56120e0e9e586a2dd318b9c102517aae16c7879c285->leave($__internal_5ec64db8c28ffa7cdb1be56120e0e9e586a2dd318b9c102517aae16c7879c285_prof);

    }

    public function getTemplateName()
    {
        return "studenttype/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  95 => 31,  89 => 28,  83 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studenttype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ studentType.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ studentType.name }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if studentType.createdAt %}{{ studentType.createdAt|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('studenttype_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('studenttype_edit', { 'id': studentType.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "studenttype/show.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/studenttype/show.html.twig");
    }
}
