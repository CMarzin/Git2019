<?php

/* student/show.html.twig */
class __TwigTemplate_d22b94d4048d67859e403b21fca71fea14e9cc1766e8e2aee3ec84a591177d92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/show.html.twig", 1);
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
        $__internal_d1025dc082dbfb0271b7315f983af6e39f540484bac489d3c417120944db0fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1025dc082dbfb0271b7315f983af6e39f540484bac489d3c417120944db0fe6->enter($__internal_d1025dc082dbfb0271b7315f983af6e39f540484bac489d3c417120944db0fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/show.html.twig"));

        $__internal_86a4a67a21d24c7189f54c3ca56c8f60d16d5159ba05094f603dfecae7d87302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a4a67a21d24c7189f54c3ca56c8f60d16d5159ba05094f603dfecae7d87302->enter($__internal_86a4a67a21d24c7189f54c3ca56c8f60d16d5159ba05094f603dfecae7d87302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1025dc082dbfb0271b7315f983af6e39f540484bac489d3c417120944db0fe6->leave($__internal_d1025dc082dbfb0271b7315f983af6e39f540484bac489d3c417120944db0fe6_prof);

        
        $__internal_86a4a67a21d24c7189f54c3ca56c8f60d16d5159ba05094f603dfecae7d87302->leave($__internal_86a4a67a21d24c7189f54c3ca56c8f60d16d5159ba05094f603dfecae7d87302_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f4cb82a6f19325bd15c2f3d86ee7959a1662d96bad02107693b6a478170845d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4cb82a6f19325bd15c2f3d86ee7959a1662d96bad02107693b6a478170845d->enter($__internal_4f4cb82a6f19325bd15c2f3d86ee7959a1662d96bad02107693b6a478170845d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_861ee081e0da6456cf7f224856fcbe75f0d74b0c9ce8656757906702f162fdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861ee081e0da6456cf7f224856fcbe75f0d74b0c9ce8656757906702f162fdd7->enter($__internal_861ee081e0da6456cf7f224856fcbe75f0d74b0c9ce8656757906702f162fdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "firstname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "lastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateofbirth</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "dateOfBirth", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "dateOfBirth", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Promotion</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "promotion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_edit", array("id" => $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_861ee081e0da6456cf7f224856fcbe75f0d74b0c9ce8656757906702f162fdd7->leave($__internal_861ee081e0da6456cf7f224856fcbe75f0d74b0c9ce8656757906702f162fdd7_prof);

        
        $__internal_4f4cb82a6f19325bd15c2f3d86ee7959a1662d96bad02107693b6a478170845d->leave($__internal_4f4cb82a6f19325bd15c2f3d86ee7959a1662d96bad02107693b6a478170845d_prof);

    }

    public function getTemplateName()
    {
        return "student/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  109 => 39,  103 => 36,  97 => 33,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Student</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ student.id }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ student.firstname }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ student.lastname }}</td>
            </tr>
            <tr>
                <th>Dateofbirth</th>
                <td>{% if student.dateOfBirth %}{{ student.dateOfBirth|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Promotion</th>
                <td>{{ student.promotion }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('student_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('student_edit', { 'id': student.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "student/show.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/student/show.html.twig");
    }
}
