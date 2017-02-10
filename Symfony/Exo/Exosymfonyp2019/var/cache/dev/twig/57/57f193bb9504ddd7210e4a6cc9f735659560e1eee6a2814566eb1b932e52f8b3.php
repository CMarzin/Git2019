<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_e27a489e335567cdcd2e44d8f6ce1853a20b2c2fa1376480f456318bb84314ab extends Twig_Template
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
        $__internal_68b7f770d2f3297c145845dfbf2e33917de5b4cc0f558057a115fe6aadead5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b7f770d2f3297c145845dfbf2e33917de5b4cc0f558057a115fe6aadead5c6->enter($__internal_68b7f770d2f3297c145845dfbf2e33917de5b4cc0f558057a115fe6aadead5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_js.html.twig"));

        $__internal_2da990b7a5633da24edf13279113236865b4ff7795818fab41443ec66d17f38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da990b7a5633da24edf13279113236865b4ff7795818fab41443ec66d17f38a->enter($__internal_2da990b7a5633da24edf13279113236865b4ff7795818fab41443ec66d17f38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_js.html.twig"));

        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar sf-display-none\"></div>
";
        // line 2
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
<script";
        // line 3
        if (($context["csp_script_nonce"] ?? $this->getContext($context, "csp_script_nonce"))) {
            echo " nonce=";
            echo twig_escape_filter($this->env, ($context["csp_script_nonce"] ?? $this->getContext($context, "csp_script_nonce")), "html", null, true);
        }
        echo ">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == ($context["position"] ?? $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_wdt", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {

                /* Evaluate embedded scripts inside the toolbar */
                var i, scripts = [].slice.call(el.querySelectorAll('script'));

                for (i = 0; i < scripts.length; ++i) {
                    eval(scripts[i].firstChild.nodeValue);
                }

                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 32
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 33
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 34
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 36
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 37
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 38
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }

                Sfjs.renderAjaxRequests();

                /* Handle toolbar-info position */
                var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                for (i = 0; i < toolbarBlocks.length; ++i) {
                    toolbarBlocks[i].onmouseover = function () {
                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                        var pageWidth = document.body.clientWidth;
                        var elementWidth = toolbarInfo.offsetWidth;
                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                        /* Reset right and left value, useful on window resize */
                        toolbarInfo.style.right = '';
                        toolbarInfo.style.left = '';

                        if (elementWidth > pageWidth) {
                            toolbarInfo.style.left = 0;
                        }
                        else if (leftValue > 0 && rightValue > 0) {
                            toolbarInfo.style.right = (rightValue * -1) + 'px';
                        } else if (leftValue < 0) {
                            toolbarInfo.style.left = 0;
                        } else {
                            toolbarInfo.style.right = '0px';
                        }
                    };
                }
                Sfjs.addEventListener(document.getElementById('sfToolbarHideButton-";
        // line 69
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "'), 'click', function (event) {
                    event.preventDefault();

                    var p = this.parentNode;
                    p.style.display = 'none';
                    (p.previousElementSibling || p.previousSibling).style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 75
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    Sfjs.setPreference('toolbar/displayState', 'none');
                });
                Sfjs.addEventListener(document.getElementById('sfToolbarMiniToggler-";
        // line 78
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "'), 'click', function (event) {
                    event.preventDefault();

                    var elem = this.parentNode;
                    if (elem.style.display == 'none') {
                        document.getElementById('sfToolbarMainContent-";
        // line 83
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                        document.getElementById('sfToolbarClearer-";
        // line 84
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                        elem.style.display = 'block';
                    } else {
                        document.getElementById('sfToolbarMainContent-";
        // line 87
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                        document.getElementById('sfToolbarClearer-";
        // line 88
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                        elem.style.display = 'none'
                    }

                    Sfjs.setPreference('toolbar/displayState', 'block');
                })
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            { maxTries: 5 }
        );
    })();
/*]]>*/</script>
";
        
        $__internal_68b7f770d2f3297c145845dfbf2e33917de5b4cc0f558057a115fe6aadead5c6->leave($__internal_68b7f770d2f3297c145845dfbf2e33917de5b4cc0f558057a115fe6aadead5c6_prof);

        
        $__internal_2da990b7a5633da24edf13279113236865b4ff7795818fab41443ec66d17f38a->leave($__internal_2da990b7a5633da24edf13279113236865b4ff7795818fab41443ec66d17f38a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 97,  174 => 88,  170 => 87,  164 => 84,  160 => 83,  152 => 78,  146 => 75,  137 => 69,  103 => 38,  99 => 37,  95 => 36,  90 => 34,  86 => 33,  82 => 32,  62 => 15,  58 => 14,  54 => 12,  44 => 6,  42 => 5,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sfwdt{{ token }}\" class=\"sf-toolbar sf-display-none\"></div>
{{ include('@WebProfiler/Profiler/base_js.html.twig') }}
<script{% if csp_script_nonce %} nonce={{ csp_script_nonce }}{% endif %}>/*<![CDATA[*/
    (function () {
        {% if 'top' == position %}
            var sfwdt = document.getElementById('sfwdt{{ token }}');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        {% endif %}

        Sfjs.load(
            'sfwdt{{ token }}',
            '{{ path(\"_wdt\", { \"token\": token }) }}',
            function(xhr, el) {

                /* Evaluate embedded scripts inside the toolbar */
                var i, scripts = [].slice.call(el.querySelectorAll('script'));

                for (i = 0; i < scripts.length; ++i) {
                    eval(scripts[i].firstChild.nodeValue);
                }

                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';
                    document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';
                    document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'none';
                }

                Sfjs.renderAjaxRequests();

                /* Handle toolbar-info position */
                var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                for (i = 0; i < toolbarBlocks.length; ++i) {
                    toolbarBlocks[i].onmouseover = function () {
                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                        var pageWidth = document.body.clientWidth;
                        var elementWidth = toolbarInfo.offsetWidth;
                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                        /* Reset right and left value, useful on window resize */
                        toolbarInfo.style.right = '';
                        toolbarInfo.style.left = '';

                        if (elementWidth > pageWidth) {
                            toolbarInfo.style.left = 0;
                        }
                        else if (leftValue > 0 && rightValue > 0) {
                            toolbarInfo.style.right = (rightValue * -1) + 'px';
                        } else if (leftValue < 0) {
                            toolbarInfo.style.left = 0;
                        } else {
                            toolbarInfo.style.right = '0px';
                        }
                    };
                }
                Sfjs.addEventListener(document.getElementById('sfToolbarHideButton-{{ token }}'), 'click', function (event) {
                    event.preventDefault();

                    var p = this.parentNode;
                    p.style.display = 'none';
                    (p.previousElementSibling || p.previousSibling).style.display = 'none';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';
                    Sfjs.setPreference('toolbar/displayState', 'none');
                });
                Sfjs.addEventListener(document.getElementById('sfToolbarMiniToggler-{{ token }}'), 'click', function (event) {
                    event.preventDefault();

                    var elem = this.parentNode;
                    if (elem.style.display == 'none') {
                        document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';
                        document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';
                        elem.style.display = 'block';
                    } else {
                        document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';
                        document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';
                        elem.style.display = 'none'
                    }

                    Sfjs.setPreference('toolbar/displayState', 'block');
                })
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '{{ path(\"_profiler\", { \"token\": token }) }}');
                }
            },
            { maxTries: 5 }
        );
    })();
/*]]>*/</script>
", "@WebProfiler/Profiler/toolbar_js.html.twig", "/home/coco/Bureau/dev/Github/exosymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_js.html.twig");
    }
}
