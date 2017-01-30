<?php

/* Student/index.html.twig */
class __TwigTemplate_c55671ae665521d5e90e335216f1651f69886ec836f69a170b9c02783ee9b216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Student/index.html.twig", 1);
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
        $__internal_a922878be83842320cefff1454301e2cd04f61dd06f1601a5f723de0c3027573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a922878be83842320cefff1454301e2cd04f61dd06f1601a5f723de0c3027573->enter($__internal_a922878be83842320cefff1454301e2cd04f61dd06f1601a5f723de0c3027573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Student/index.html.twig"));

        $__internal_63df0dfd667f8e6bfd7f671087c2a13b87101f09841b9916ef0be26d83da5417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63df0dfd667f8e6bfd7f671087c2a13b87101f09841b9916ef0be26d83da5417->enter($__internal_63df0dfd667f8e6bfd7f671087c2a13b87101f09841b9916ef0be26d83da5417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Student/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a922878be83842320cefff1454301e2cd04f61dd06f1601a5f723de0c3027573->leave($__internal_a922878be83842320cefff1454301e2cd04f61dd06f1601a5f723de0c3027573_prof);

        
        $__internal_63df0dfd667f8e6bfd7f671087c2a13b87101f09841b9916ef0be26d83da5417->leave($__internal_63df0dfd667f8e6bfd7f671087c2a13b87101f09841b9916ef0be26d83da5417_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a55b771a8b6ccec617e36a70eefe56ec90b56675970d91f57cc44ff5d0c3591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a55b771a8b6ccec617e36a70eefe56ec90b56675970d91f57cc44ff5d0c3591->enter($__internal_2a55b771a8b6ccec617e36a70eefe56ec90b56675970d91f57cc44ff5d0c3591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac76c6dc1800f5d372fff256325c1d9dc4e9eba8d7c65fe695c1e3ebb491a44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac76c6dc1800f5d372fff256325c1d9dc4e9eba8d7c65fe695c1e3ebb491a44c->enter($__internal_ac76c6dc1800f5d372fff256325c1d9dc4e9eba8d7c65fe695c1e3ebb491a44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <td>HELLO COUCOU</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
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
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_new");
        echo "\">Create a new student</a>
        </li>
    </ul>
";
        
        $__internal_ac76c6dc1800f5d372fff256325c1d9dc4e9eba8d7c65fe695c1e3ebb491a44c->leave($__internal_ac76c6dc1800f5d372fff256325c1d9dc4e9eba8d7c65fe695c1e3ebb491a44c_prof);

        
        $__internal_2a55b771a8b6ccec617e36a70eefe56ec90b56675970d91f57cc44ff5d0c3591->leave($__internal_2a55b771a8b6ccec617e36a70eefe56ec90b56675970d91f57cc44ff5d0c3591_prof);

    }

    public function getTemplateName()
    {
        return "Student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 44,  119 => 39,  107 => 33,  101 => 30,  92 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>HELLO COUCOU</td>

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
", "Student/index.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/Student/index.html.twig");
    }
}
