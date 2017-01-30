<?php

/* HeticBundle:Default:index.html.twig */
class __TwigTemplate_c6480d61ff7d914e20f7c5c84f1437cd995604b2dfa685f3d929fd46bff991df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fc933d6b0ff443f720fab54fae434d6594d532415a6f43fc175b8e6ef9ae720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc933d6b0ff443f720fab54fae434d6594d532415a6f43fc175b8e6ef9ae720->enter($__internal_9fc933d6b0ff443f720fab54fae434d6594d532415a6f43fc175b8e6ef9ae720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeticBundle:Default:index.html.twig"));

        $__internal_46560b56d62be14e57f8523ef62c38614341ebfe3671628751776a2eb3ff481d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46560b56d62be14e57f8523ef62c38614341ebfe3671628751776a2eb3ff481d->enter($__internal_46560b56d62be14e57f8523ef62c38614341ebfe3671628751776a2eb3ff481d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeticBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9fc933d6b0ff443f720fab54fae434d6594d532415a6f43fc175b8e6ef9ae720->leave($__internal_9fc933d6b0ff443f720fab54fae434d6594d532415a6f43fc175b8e6ef9ae720_prof);

        
        $__internal_46560b56d62be14e57f8523ef62c38614341ebfe3671628751776a2eb3ff481d->leave($__internal_46560b56d62be14e57f8523ef62c38614341ebfe3671628751776a2eb3ff481d_prof);

    }

    public function getTemplateName()
    {
        return "HeticBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "HeticBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/src/HeticBundle/Resources/views/Default/index.html.twig");
    }
}
