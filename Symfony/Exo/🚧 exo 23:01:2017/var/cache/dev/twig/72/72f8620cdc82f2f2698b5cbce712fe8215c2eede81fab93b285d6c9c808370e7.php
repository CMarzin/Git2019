<?php

/* base.html.twig */
class __TwigTemplate_a98a9f4f95160bcc7ca757bb64bf438aca92b2097cb6a04ab98b46ffb079ad92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76acf3f855788af466c7d8c7f54c2879e0a62c2987ae60a5bc2edd6576de52fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76acf3f855788af466c7d8c7f54c2879e0a62c2987ae60a5bc2edd6576de52fa->enter($__internal_76acf3f855788af466c7d8c7f54c2879e0a62c2987ae60a5bc2edd6576de52fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e503ffde19aa7a8ea43d04f36ac1970079e9038b6d64bfc744d9d9c63eed3ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e503ffde19aa7a8ea43d04f36ac1970079e9038b6d64bfc744d9d9c63eed3ba1->enter($__internal_e503ffde19aa7a8ea43d04f36ac1970079e9038b6d64bfc744d9d9c63eed3ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_76acf3f855788af466c7d8c7f54c2879e0a62c2987ae60a5bc2edd6576de52fa->leave($__internal_76acf3f855788af466c7d8c7f54c2879e0a62c2987ae60a5bc2edd6576de52fa_prof);

        
        $__internal_e503ffde19aa7a8ea43d04f36ac1970079e9038b6d64bfc744d9d9c63eed3ba1->leave($__internal_e503ffde19aa7a8ea43d04f36ac1970079e9038b6d64bfc744d9d9c63eed3ba1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1d18bebff8d548132d9c3e7b25f465437f0eae9d3314b0bb05244d2982e8296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d18bebff8d548132d9c3e7b25f465437f0eae9d3314b0bb05244d2982e8296->enter($__internal_c1d18bebff8d548132d9c3e7b25f465437f0eae9d3314b0bb05244d2982e8296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2a02dcdb70ab45fa8bd44a7826ba8fa5d700edceeb38b97eace108f01819fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a02dcdb70ab45fa8bd44a7826ba8fa5d700edceeb38b97eace108f01819fe8->enter($__internal_a2a02dcdb70ab45fa8bd44a7826ba8fa5d700edceeb38b97eace108f01819fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a2a02dcdb70ab45fa8bd44a7826ba8fa5d700edceeb38b97eace108f01819fe8->leave($__internal_a2a02dcdb70ab45fa8bd44a7826ba8fa5d700edceeb38b97eace108f01819fe8_prof);

        
        $__internal_c1d18bebff8d548132d9c3e7b25f465437f0eae9d3314b0bb05244d2982e8296->leave($__internal_c1d18bebff8d548132d9c3e7b25f465437f0eae9d3314b0bb05244d2982e8296_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_404d9e07e128b90b9393213e94bc7390dfe3488eabb2550cd22f736b50592bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404d9e07e128b90b9393213e94bc7390dfe3488eabb2550cd22f736b50592bce->enter($__internal_404d9e07e128b90b9393213e94bc7390dfe3488eabb2550cd22f736b50592bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_27d81ef0d7950009036a6413a29332e97751e5dabc55932fdf1eed3730f4771a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d81ef0d7950009036a6413a29332e97751e5dabc55932fdf1eed3730f4771a->enter($__internal_27d81ef0d7950009036a6413a29332e97751e5dabc55932fdf1eed3730f4771a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27d81ef0d7950009036a6413a29332e97751e5dabc55932fdf1eed3730f4771a->leave($__internal_27d81ef0d7950009036a6413a29332e97751e5dabc55932fdf1eed3730f4771a_prof);

        
        $__internal_404d9e07e128b90b9393213e94bc7390dfe3488eabb2550cd22f736b50592bce->leave($__internal_404d9e07e128b90b9393213e94bc7390dfe3488eabb2550cd22f736b50592bce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34bc86aa11ad9f035652dbc60228fa700f3558c983f0976007f6ac7e6c9ddc24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bc86aa11ad9f035652dbc60228fa700f3558c983f0976007f6ac7e6c9ddc24->enter($__internal_34bc86aa11ad9f035652dbc60228fa700f3558c983f0976007f6ac7e6c9ddc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b7ce71509ad09e672dde76966d63af191d8220ef4e96371341bb5793a665b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7ce71509ad09e672dde76966d63af191d8220ef4e96371341bb5793a665b03->enter($__internal_0b7ce71509ad09e672dde76966d63af191d8220ef4e96371341bb5793a665b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b7ce71509ad09e672dde76966d63af191d8220ef4e96371341bb5793a665b03->leave($__internal_0b7ce71509ad09e672dde76966d63af191d8220ef4e96371341bb5793a665b03_prof);

        
        $__internal_34bc86aa11ad9f035652dbc60228fa700f3558c983f0976007f6ac7e6c9ddc24->leave($__internal_34bc86aa11ad9f035652dbc60228fa700f3558c983f0976007f6ac7e6c9ddc24_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7574282da227cc86ce86d3480c30486ddd9bca273a33cd5fbe8a601d51163649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7574282da227cc86ce86d3480c30486ddd9bca273a33cd5fbe8a601d51163649->enter($__internal_7574282da227cc86ce86d3480c30486ddd9bca273a33cd5fbe8a601d51163649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_63abaffd02c3b89543acf9ff53077c8a3021f73f0775630757e6f29be2b4f160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63abaffd02c3b89543acf9ff53077c8a3021f73f0775630757e6f29be2b4f160->enter($__internal_63abaffd02c3b89543acf9ff53077c8a3021f73f0775630757e6f29be2b4f160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_63abaffd02c3b89543acf9ff53077c8a3021f73f0775630757e6f29be2b4f160->leave($__internal_63abaffd02c3b89543acf9ff53077c8a3021f73f0775630757e6f29be2b4f160_prof);

        
        $__internal_7574282da227cc86ce86d3480c30486ddd9bca273a33cd5fbe8a601d51163649->leave($__internal_7574282da227cc86ce86d3480c30486ddd9bca273a33cd5fbe8a601d51163649_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 12,  104 => 11,  87 => 6,  69 => 5,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link href=\"{{ asset('bootstrap.css') }}\" rel=\"stylesheet\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/base.html.twig");
    }
}
