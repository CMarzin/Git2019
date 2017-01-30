<?php

/* studenttype/edit.html.twig */
class __TwigTemplate_7223fb2fdde8d8cba61f463e91cf8d5ef26614cf511bba9581aa7cacb5b15237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studenttype/edit.html.twig", 1);
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
        $__internal_97fc2e8a97a475e092dc25b64c2f0d069de762af1c130a0ffddbd8a316fe21e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fc2e8a97a475e092dc25b64c2f0d069de762af1c130a0ffddbd8a316fe21e4->enter($__internal_97fc2e8a97a475e092dc25b64c2f0d069de762af1c130a0ffddbd8a316fe21e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/edit.html.twig"));

        $__internal_44da3167af1947824ced5c8904c2eed8a743a7d530db6ad06a16ba5d42f48205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44da3167af1947824ced5c8904c2eed8a743a7d530db6ad06a16ba5d42f48205->enter($__internal_44da3167af1947824ced5c8904c2eed8a743a7d530db6ad06a16ba5d42f48205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studenttype/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97fc2e8a97a475e092dc25b64c2f0d069de762af1c130a0ffddbd8a316fe21e4->leave($__internal_97fc2e8a97a475e092dc25b64c2f0d069de762af1c130a0ffddbd8a316fe21e4_prof);

        
        $__internal_44da3167af1947824ced5c8904c2eed8a743a7d530db6ad06a16ba5d42f48205->leave($__internal_44da3167af1947824ced5c8904c2eed8a743a7d530db6ad06a16ba5d42f48205_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81f4a10b2af48570adf9e32bc7e797a3ce43e514c9ebe3c0d1b94c516468daed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f4a10b2af48570adf9e32bc7e797a3ce43e514c9ebe3c0d1b94c516468daed->enter($__internal_81f4a10b2af48570adf9e32bc7e797a3ce43e514c9ebe3c0d1b94c516468daed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffba4833fee0618febc7dea760d0550ff0d07535c681b5f2896e74a3e6cc83c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffba4833fee0618febc7dea760d0550ff0d07535c681b5f2896e74a3e6cc83c7->enter($__internal_ffba4833fee0618febc7dea760d0550ff0d07535c681b5f2896e74a3e6cc83c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studenttype edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studenttype_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ffba4833fee0618febc7dea760d0550ff0d07535c681b5f2896e74a3e6cc83c7->leave($__internal_ffba4833fee0618febc7dea760d0550ff0d07535c681b5f2896e74a3e6cc83c7_prof);

        
        $__internal_81f4a10b2af48570adf9e32bc7e797a3ce43e514c9ebe3c0d1b94c516468daed->leave($__internal_81f4a10b2af48570adf9e32bc7e797a3ce43e514c9ebe3c0d1b94c516468daed_prof);

    }

    public function getTemplateName()
    {
        return "studenttype/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studenttype edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('studenttype_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "studenttype/edit.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/app/Resources/views/studenttype/edit.html.twig");
    }
}
