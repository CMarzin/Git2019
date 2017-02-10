<?php

/* product/show.html.twig */
class __TwigTemplate_663842713825f6a0f3b7705b672c9e10d33a456c0feda323081d672c67ed0808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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
        $__internal_75490de49dc9c1cf4948d6694879a8902e4b2e00bb67ae9d69cee2b25584a9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75490de49dc9c1cf4948d6694879a8902e4b2e00bb67ae9d69cee2b25584a9fd->enter($__internal_75490de49dc9c1cf4948d6694879a8902e4b2e00bb67ae9d69cee2b25584a9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_e819513a3e65e91ec9b0300be1942a47c6471e8dd11a6d4d535c806bf521c23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e819513a3e65e91ec9b0300be1942a47c6471e8dd11a6d4d535c806bf521c23e->enter($__internal_e819513a3e65e91ec9b0300be1942a47c6471e8dd11a6d4d535c806bf521c23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75490de49dc9c1cf4948d6694879a8902e4b2e00bb67ae9d69cee2b25584a9fd->leave($__internal_75490de49dc9c1cf4948d6694879a8902e4b2e00bb67ae9d69cee2b25584a9fd_prof);

        
        $__internal_e819513a3e65e91ec9b0300be1942a47c6471e8dd11a6d4d535c806bf521c23e->leave($__internal_e819513a3e65e91ec9b0300be1942a47c6471e8dd11a6d4d535c806bf521c23e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2458ebac7216b038647b9af6bbf398418ee28a6de2f611cca7bf4eda45ab72a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2458ebac7216b038647b9af6bbf398418ee28a6de2f611cca7bf4eda45ab72a1->enter($__internal_2458ebac7216b038647b9af6bbf398418ee28a6de2f611cca7bf4eda45ab72a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_696ffef28575cec8b0e2ca07aae8f2145b1d0a279cc7c0844e066720722bb85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696ffef28575cec8b0e2ca07aae8f2145b1d0a279cc7c0844e066720722bb85c->enter($__internal_696ffef28575cec8b0e2ca07aae8f2145b1d0a279cc7c0844e066720722bb85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h1>Product</h1>
        </div>
        <div class=\"panel-body\">

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Price VAT included</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, ($context["vat"] ?? $this->getContext($context, "vat")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Uuid</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "uuid", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>ProductType</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "productType", array()), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\"><button type=\"button\" class=\"btn btn-lg btn-primary\">Back to the list</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-lg btn-warning\">Edit</button></a>
                </li>
                <li class=\"list-group-item\">
                    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" value=\"Delete\" class=\"btn btn-lg btn-danger\" />
                    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_696ffef28575cec8b0e2ca07aae8f2145b1d0a279cc7c0844e066720722bb85c->leave($__internal_696ffef28575cec8b0e2ca07aae8f2145b1d0a279cc7c0844e066720722bb85c_prof);

        
        $__internal_2458ebac7216b038647b9af6bbf398418ee28a6de2f611cca7bf4eda45ab72a1->leave($__internal_2458ebac7216b038647b9af6bbf398418ee28a6de2f611cca7bf4eda45ab72a1_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  118 => 47,  112 => 44,  106 => 41,  96 => 34,  89 => 30,  82 => 26,  75 => 22,  68 => 18,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
            <h1>Product</h1>
        </div>
        <div class=\"panel-body\">

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ product.id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ product.name }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ product.price }}</td>
                    </tr>
                    <tr>
                        <th>Price VAT included</th>
                        <td>{{ vat }}</td>
                    </tr>
                    <tr>
                        <th>Uuid</th>
                        <td>{{ product.uuid }}</td>
                    </tr>
                    <tr>
                        <th>ProductType</th>
                        <td>{{ product.productType.name }}</td>
                    </tr>
                </tbody>
            </table>

            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path('_index') }}\"><button type=\"button\" class=\"btn btn-lg btn-primary\">Back to the list</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"{{ path('_edit', { 'id': product.id }) }}\"><button type=\"button\" class=\"btn btn-lg btn-warning\">Edit</button></a>
                </li>
                <li class=\"list-group-item\">
                    {{ form_start(delete_form) }}
                        <input type=\"submit\" value=\"Delete\" class=\"btn btn-lg btn-danger\" />
                    {{ form_end(delete_form) }}
                </li>
            </ul>
        </div>
    </div>
{% endblock %}
", "product/show.html.twig", "/home/coco/Bureau/dev/Github/exosymfony/app/Resources/views/product/show.html.twig");
    }
}
