<?php

/* chevalier/show.html.twig */
class __TwigTemplate_e41a0c13e33ce4885c87d6e25e943f47d4fa4bca5b10c7c4065cf55bb18d9f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "chevalier/show.html.twig", 1);
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
        $__internal_58a22954c14568b23098f54fa630d67640985459b38c078a35ff6afb17189930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a22954c14568b23098f54fa630d67640985459b38c078a35ff6afb17189930->enter($__internal_58a22954c14568b23098f54fa630d67640985459b38c078a35ff6afb17189930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/show.html.twig"));

        $__internal_76dee50533c32b4c32275d50a070c526329959a4330e123c1f635431fab1b2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76dee50533c32b4c32275d50a070c526329959a4330e123c1f635431fab1b2cb->enter($__internal_76dee50533c32b4c32275d50a070c526329959a4330e123c1f635431fab1b2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chevalier/show.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["delete_form"] ?? $this->getContext($context, "delete_form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58a22954c14568b23098f54fa630d67640985459b38c078a35ff6afb17189930->leave($__internal_58a22954c14568b23098f54fa630d67640985459b38c078a35ff6afb17189930_prof);

        
        $__internal_76dee50533c32b4c32275d50a070c526329959a4330e123c1f635431fab1b2cb->leave($__internal_76dee50533c32b4c32275d50a070c526329959a4330e123c1f635431fab1b2cb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d45d582c7c2f49e12aa5826018f113a883ac7ca5ed8fa5511ba9f0398add19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d45d582c7c2f49e12aa5826018f113a883ac7ca5ed8fa5511ba9f0398add19->enter($__internal_e0d45d582c7c2f49e12aa5826018f113a883ac7ca5ed8fa5511ba9f0398add19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fea37c7e03bb467f173261558ea8a864ec5cbb339bc42e4d146622a9d81c51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fea37c7e03bb467f173261558ea8a864ec5cbb339bc42e4d146622a9d81c51e->enter($__internal_6fea37c7e03bb467f173261558ea8a864ec5cbb339bc42e4d146622a9d81c51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Chevalier</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "grade", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chevalier_edit", array("id" => $this->getAttribute(($context["chevalier"] ?? $this->getContext($context, "chevalier")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6fea37c7e03bb467f173261558ea8a864ec5cbb339bc42e4d146622a9d81c51e->leave($__internal_6fea37c7e03bb467f173261558ea8a864ec5cbb339bc42e4d146622a9d81c51e_prof);

        
        $__internal_e0d45d582c7c2f49e12aa5826018f113a883ac7ca5ed8fa5511ba9f0398add19->leave($__internal_e0d45d582c7c2f49e12aa5826018f113a883ac7ca5ed8fa5511ba9f0398add19_prof);

    }

    public function getTemplateName()
    {
        return "chevalier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  103 => 36,  97 => 33,  91 => 30,  81 => 23,  74 => 19,  67 => 15,  60 => 11,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
{% form_theme delete_form 'bootstrap_3_horizontal_layout.html.twig' %}

{% block body %}
    <h1>Chevalier</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ chevalier.id }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ chevalier.prenom }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ chevalier.nom }}</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>{{ chevalier.grade }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('chevalier_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('chevalier_edit', { 'id': chevalier.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "chevalier/show.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/chevalier/show.html.twig");
    }
}
