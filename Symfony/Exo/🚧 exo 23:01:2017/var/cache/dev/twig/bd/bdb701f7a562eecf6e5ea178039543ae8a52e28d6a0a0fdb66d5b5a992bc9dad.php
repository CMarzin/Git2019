<?php

/* student/index.html.twig */
class __TwigTemplate_a8cd51dbcbd0adac7e33032ba33ac56206847c539991a3a691b35006c41704d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
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
        $__internal_726f668f17efd8d0054c984db92852be974f2a615e21081dbef8652a0fd05e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726f668f17efd8d0054c984db92852be974f2a615e21081dbef8652a0fd05e92->enter($__internal_726f668f17efd8d0054c984db92852be974f2a615e21081dbef8652a0fd05e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_2d42536f0ef0a04b7a035e6b87fed3637f6351638deaa7fa9dbb6829958814d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d42536f0ef0a04b7a035e6b87fed3637f6351638deaa7fa9dbb6829958814d0->enter($__internal_2d42536f0ef0a04b7a035e6b87fed3637f6351638deaa7fa9dbb6829958814d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_726f668f17efd8d0054c984db92852be974f2a615e21081dbef8652a0fd05e92->leave($__internal_726f668f17efd8d0054c984db92852be974f2a615e21081dbef8652a0fd05e92_prof);

        
        $__internal_2d42536f0ef0a04b7a035e6b87fed3637f6351638deaa7fa9dbb6829958814d0->leave($__internal_2d42536f0ef0a04b7a035e6b87fed3637f6351638deaa7fa9dbb6829958814d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cd8f50c0464c960911e2dfe74b7a6443f4383ef748379c40c5722f326d54800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd8f50c0464c960911e2dfe74b7a6443f4383ef748379c40c5722f326d54800->enter($__internal_5cd8f50c0464c960911e2dfe74b7a6443f4383ef748379c40c5722f326d54800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec36f221e8634683e80469590031e8579ec800f9e88d994c691710126875dc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec36f221e8634683e80469590031e8579ec800f9e88d994c691710126875dc75->enter($__internal_ec36f221e8634683e80469590031e8579ec800f9e88d994c691710126875dc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Students list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Dateofbirth</th>
                <th>Promotion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["student"], "dateOfBirth", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "dateOfBirth", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "promotion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_edit", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_new");
        echo "\">Create a new student</a>
        </li>
    </ul>
";
        
        $__internal_ec36f221e8634683e80469590031e8579ec800f9e88d994c691710126875dc75->leave($__internal_ec36f221e8634683e80469590031e8579ec800f9e88d994c691710126875dc75_prof);

        
        $__internal_5cd8f50c0464c960911e2dfe74b7a6443f4383ef748379c40c5722f326d54800->leave($__internal_5cd8f50c0464c960911e2dfe74b7a6443f4383ef748379c40c5722f326d54800_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  117 => 37,  105 => 31,  99 => 28,  92 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Students list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Dateofbirth</th>
                <th>Promotion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for student in students %}
            <tr>
                <td><a href=\"{{ path('student_show', { 'id': student.id }) }}\">{{ student.id }}</a></td>
                <td>{{ student.firstname }}</td>
                <td>{{ student.lastname }}</td>
                <td>{% if student.dateOfBirth %}{{ student.dateOfBirth|date('Y-m-d') }}{% endif %}</td>
                <td>{{ student.promotion }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('student_show', { 'id': student.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('student_edit', { 'id': student.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('student_new') }}\">Create a new student</a>
        </li>
    </ul>
{% endblock %}
", "student/index.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/student/index.html.twig");
    }
}
