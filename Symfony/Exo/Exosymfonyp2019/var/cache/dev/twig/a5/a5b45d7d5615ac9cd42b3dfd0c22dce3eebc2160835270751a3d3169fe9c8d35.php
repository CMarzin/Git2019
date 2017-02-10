<?php

/* product/index.html.twig */
class __TwigTemplate_5df0439d4f27eb94c300260abcb2246c68ae5caf451ad5e52cfd38d353efe44f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        $__internal_a66d9319225c893f38511bfcbdd8be0271272f21d63b8bf0905c4374e6eebfe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66d9319225c893f38511bfcbdd8be0271272f21d63b8bf0905c4374e6eebfe8->enter($__internal_a66d9319225c893f38511bfcbdd8be0271272f21d63b8bf0905c4374e6eebfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_d06d8ee6479888bb17016448900b3ad27ae5bb7d9f755ca7f411f8352988ddc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06d8ee6479888bb17016448900b3ad27ae5bb7d9f755ca7f411f8352988ddc7->enter($__internal_d06d8ee6479888bb17016448900b3ad27ae5bb7d9f755ca7f411f8352988ddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66d9319225c893f38511bfcbdd8be0271272f21d63b8bf0905c4374e6eebfe8->leave($__internal_a66d9319225c893f38511bfcbdd8be0271272f21d63b8bf0905c4374e6eebfe8_prof);

        
        $__internal_d06d8ee6479888bb17016448900b3ad27ae5bb7d9f755ca7f411f8352988ddc7->leave($__internal_d06d8ee6479888bb17016448900b3ad27ae5bb7d9f755ca7f411f8352988ddc7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78223baab7e660fd88543ace65cae507812fe33fbd4b6c4ab09ebd3ab615125d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78223baab7e660fd88543ace65cae507812fe33fbd4b6c4ab09ebd3ab615125d->enter($__internal_78223baab7e660fd88543ace65cae507812fe33fbd4b6c4ab09ebd3ab615125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6244cd5d5bf6bfb7a123248f07b4df7e27e128db4313d199f4b07dfbf019846b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6244cd5d5bf6bfb7a123248f07b4df7e27e128db4313d199f4b07dfbf019846b->enter($__internal_6244cd5d5bf6bfb7a123248f07b4df7e27e128db4313d199f4b07dfbf019846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h1>Products list</h1>
    </div>
    <div class=\"panel-body\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Price VAT incl.</th>
                <th>Uuid</th>
                <th>ProductType</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["vat"] ?? $this->getContext($context, "vat")), $this->getAttribute($context["product"], "id", array()), array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "uuid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "productType", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-lg btn-primary\">Show</button></a>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-lg btn-warning\">Edit</button></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_new");
        echo "\"><button type=\"button\" class=\"btn btn-lg btn-success\">Create a new product</button></a>
        </li>
    </ul>
        </div>
    </div>
";
        
        $__internal_6244cd5d5bf6bfb7a123248f07b4df7e27e128db4313d199f4b07dfbf019846b->leave($__internal_6244cd5d5bf6bfb7a123248f07b4df7e27e128db4313d199f4b07dfbf019846b_prof);

        
        $__internal_78223baab7e660fd88543ace65cae507812fe33fbd4b6c4ab09ebd3ab615125d->leave($__internal_78223baab7e660fd88543ace65cae507812fe33fbd4b6c4ab09ebd3ab615125d_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  117 => 36,  107 => 32,  103 => 31,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h1>Products list</h1>
    </div>
    <div class=\"panel-body\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Price VAT incl.</th>
                <th>Uuid</th>
                <th>ProductType</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td><a href=\"{{ path('_show', { 'id': product.id }) }}\">{{ product.id }}</a></td>
                <td>{{ product.name }}</td>
                <td>{{ product.price }}</td>
                <td>{{ vat[product.id] }}</td>
                <td>{{ product.uuid }}</td>
                <td>{{ product.productType.name }}</td>
                <td>
                    <a href=\"{{ path('_show', { 'id': product.id }) }}\"><button type=\"button\" class=\"btn btn-lg btn-primary\">Show</button></a>
                    <a href=\"{{ path('_edit', { 'id': product.id }) }}\"><button type=\"button\" class=\"btn btn-lg btn-warning\">Edit</button></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"{{ path('_new') }}\"><button type=\"button\" class=\"btn btn-lg btn-success\">Create a new product</button></a>
        </li>
    </ul>
        </div>
    </div>
{% endblock %}
", "product/index.html.twig", "/home/coco/Bureau/dev/Github/exosymfony/app/Resources/views/product/index.html.twig");
    }
}
