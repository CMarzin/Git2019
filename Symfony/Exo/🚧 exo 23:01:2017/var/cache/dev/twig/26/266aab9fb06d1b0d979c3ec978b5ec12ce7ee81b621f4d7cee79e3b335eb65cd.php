<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_e0fed36b718775700246342bf3dbfa62ad66932b0478ffe42c039bb14725b538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2387683089d5fa73d4b87d91201d8a134d189ec234331004dc123878d3cf9cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2387683089d5fa73d4b87d91201d8a134d189ec234331004dc123878d3cf9cde->enter($__internal_2387683089d5fa73d4b87d91201d8a134d189ec234331004dc123878d3cf9cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_857c5790a71d74e881f3d75f96d8701fe848783cfea49da29b1ddf9d1867cf24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857c5790a71d74e881f3d75f96d8701fe848783cfea49da29b1ddf9d1867cf24->enter($__internal_857c5790a71d74e881f3d75f96d8701fe848783cfea49da29b1ddf9d1867cf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_2387683089d5fa73d4b87d91201d8a134d189ec234331004dc123878d3cf9cde->leave($__internal_2387683089d5fa73d4b87d91201d8a134d189ec234331004dc123878d3cf9cde_prof);

        
        $__internal_857c5790a71d74e881f3d75f96d8701fe848783cfea49da29b1ddf9d1867cf24->leave($__internal_857c5790a71d74e881f3d75f96d8701fe848783cfea49da29b1ddf9d1867cf24_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_92c8a95b7ec2d265b440ff26b6da843ba6b9ab9091261a0a54b2d4e4579ffc46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c8a95b7ec2d265b440ff26b6da843ba6b9ab9091261a0a54b2d4e4579ffc46->enter($__internal_92c8a95b7ec2d265b440ff26b6da843ba6b9ab9091261a0a54b2d4e4579ffc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f3ad508012b98578abfdd581cb7903dc81e7242aa1aa178f1a1ec7b48b58c92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ad508012b98578abfdd581cb7903dc81e7242aa1aa178f1a1ec7b48b58c92a->enter($__internal_f3ad508012b98578abfdd581cb7903dc81e7242aa1aa178f1a1ec7b48b58c92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f3ad508012b98578abfdd581cb7903dc81e7242aa1aa178f1a1ec7b48b58c92a->leave($__internal_f3ad508012b98578abfdd581cb7903dc81e7242aa1aa178f1a1ec7b48b58c92a_prof);

        
        $__internal_92c8a95b7ec2d265b440ff26b6da843ba6b9ab9091261a0a54b2d4e4579ffc46->leave($__internal_92c8a95b7ec2d265b440ff26b6da843ba6b9ab9091261a0a54b2d4e4579ffc46_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1819a3367357ded205bb91e0aa36b121ffff6f65344e925752fa056bb9fec42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1819a3367357ded205bb91e0aa36b121ffff6f65344e925752fa056bb9fec42f->enter($__internal_1819a3367357ded205bb91e0aa36b121ffff6f65344e925752fa056bb9fec42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_fdb7e9bdb8e9058837434dcc4b3d147eb432596919f3e474ddd133e6c5b0d5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb7e9bdb8e9058837434dcc4b3d147eb432596919f3e474ddd133e6c5b0d5fd->enter($__internal_fdb7e9bdb8e9058837434dcc4b3d147eb432596919f3e474ddd133e6c5b0d5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_fdb7e9bdb8e9058837434dcc4b3d147eb432596919f3e474ddd133e6c5b0d5fd->leave($__internal_fdb7e9bdb8e9058837434dcc4b3d147eb432596919f3e474ddd133e6c5b0d5fd_prof);

        
        $__internal_1819a3367357ded205bb91e0aa36b121ffff6f65344e925752fa056bb9fec42f->leave($__internal_1819a3367357ded205bb91e0aa36b121ffff6f65344e925752fa056bb9fec42f_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_29e1741885c8df589b68224f73b6ebdb8aff82f50010e47e9e3ac2aa9b9210ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e1741885c8df589b68224f73b6ebdb8aff82f50010e47e9e3ac2aa9b9210ba->enter($__internal_29e1741885c8df589b68224f73b6ebdb8aff82f50010e47e9e3ac2aa9b9210ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_98f1dda1ada57a21c26c8857f8514444df7cce203689106f60520cf9b71804c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f1dda1ada57a21c26c8857f8514444df7cce203689106f60520cf9b71804c6->enter($__internal_98f1dda1ada57a21c26c8857f8514444df7cce203689106f60520cf9b71804c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_98f1dda1ada57a21c26c8857f8514444df7cce203689106f60520cf9b71804c6->leave($__internal_98f1dda1ada57a21c26c8857f8514444df7cce203689106f60520cf9b71804c6_prof);

        
        $__internal_29e1741885c8df589b68224f73b6ebdb8aff82f50010e47e9e3ac2aa9b9210ba->leave($__internal_29e1741885c8df589b68224f73b6ebdb8aff82f50010e47e9e3ac2aa9b9210ba_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_541c7a7bfbf113cee020f2c7955b9b3b43a519f6edeb6b96abde266aa7442fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541c7a7bfbf113cee020f2c7955b9b3b43a519f6edeb6b96abde266aa7442fbb->enter($__internal_541c7a7bfbf113cee020f2c7955b9b3b43a519f6edeb6b96abde266aa7442fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_87234a617c5b69ee0176c44da4803898e5eeda64bf770bb6f763fb0371bc8826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87234a617c5b69ee0176c44da4803898e5eeda64bf770bb6f763fb0371bc8826->enter($__internal_87234a617c5b69ee0176c44da4803898e5eeda64bf770bb6f763fb0371bc8826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_44f98786ed7afcae3d4231b6ddf9b1f91ae89960ef1e355de6953a993ac30002 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_5cb7ee2550300cf64d7e518d7b5c167ed84fb2438406963e3014e2ff8b88861b = "{{") && ('' === $__internal_5cb7ee2550300cf64d7e518d7b5c167ed84fb2438406963e3014e2ff8b88861b || 0 === strpos($__internal_44f98786ed7afcae3d4231b6ddf9b1f91ae89960ef1e355de6953a993ac30002, $__internal_5cb7ee2550300cf64d7e518d7b5c167ed84fb2438406963e3014e2ff8b88861b)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_87234a617c5b69ee0176c44da4803898e5eeda64bf770bb6f763fb0371bc8826->leave($__internal_87234a617c5b69ee0176c44da4803898e5eeda64bf770bb6f763fb0371bc8826_prof);

        
        $__internal_541c7a7bfbf113cee020f2c7955b9b3b43a519f6edeb6b96abde266aa7442fbb->leave($__internal_541c7a7bfbf113cee020f2c7955b9b3b43a519f6edeb6b96abde266aa7442fbb_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5a830612de22b2c2bd0b2ce16a5e1d5fa18bcc9d37845838d1fd8b56af108d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a830612de22b2c2bd0b2ce16a5e1d5fa18bcc9d37845838d1fd8b56af108d1c->enter($__internal_5a830612de22b2c2bd0b2ce16a5e1d5fa18bcc9d37845838d1fd8b56af108d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ed23feb5b540796e4f5f2c8a4133ce6c21e1105fa0d4f7f4408b722373a1b68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed23feb5b540796e4f5f2c8a4133ce6c21e1105fa0d4f7f4408b722373a1b68e->enter($__internal_ed23feb5b540796e4f5f2c8a4133ce6c21e1105fa0d4f7f4408b722373a1b68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_ed23feb5b540796e4f5f2c8a4133ce6c21e1105fa0d4f7f4408b722373a1b68e->leave($__internal_ed23feb5b540796e4f5f2c8a4133ce6c21e1105fa0d4f7f4408b722373a1b68e_prof);

        
        $__internal_5a830612de22b2c2bd0b2ce16a5e1d5fa18bcc9d37845838d1fd8b56af108d1c->leave($__internal_5a830612de22b2c2bd0b2ce16a5e1d5fa18bcc9d37845838d1fd8b56af108d1c_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6235c267843f1874389ad4031364d8d40827bbd569767e527347a8350a11486c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6235c267843f1874389ad4031364d8d40827bbd569767e527347a8350a11486c->enter($__internal_6235c267843f1874389ad4031364d8d40827bbd569767e527347a8350a11486c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_f69a268cd4513d0e4fc4eb9f276847f3010117beb217675706c983bb11ba5fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69a268cd4513d0e4fc4eb9f276847f3010117beb217675706c983bb11ba5fac->enter($__internal_f69a268cd4513d0e4fc4eb9f276847f3010117beb217675706c983bb11ba5fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_f69a268cd4513d0e4fc4eb9f276847f3010117beb217675706c983bb11ba5fac->leave($__internal_f69a268cd4513d0e4fc4eb9f276847f3010117beb217675706c983bb11ba5fac_prof);

        
        $__internal_6235c267843f1874389ad4031364d8d40827bbd569767e527347a8350a11486c->leave($__internal_6235c267843f1874389ad4031364d8d40827bbd569767e527347a8350a11486c_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_05355f4a4b1fba86756bd849baf9174c6efc4ee458e861766850ee8f00c61000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05355f4a4b1fba86756bd849baf9174c6efc4ee458e861766850ee8f00c61000->enter($__internal_05355f4a4b1fba86756bd849baf9174c6efc4ee458e861766850ee8f00c61000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_68eb436fbff85d735a1357eaf3029786f01e8d5e237219a22b04542e2a2822f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68eb436fbff85d735a1357eaf3029786f01e8d5e237219a22b04542e2a2822f3->enter($__internal_68eb436fbff85d735a1357eaf3029786f01e8d5e237219a22b04542e2a2822f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_68eb436fbff85d735a1357eaf3029786f01e8d5e237219a22b04542e2a2822f3->leave($__internal_68eb436fbff85d735a1357eaf3029786f01e8d5e237219a22b04542e2a2822f3_prof);

        
        $__internal_05355f4a4b1fba86756bd849baf9174c6efc4ee458e861766850ee8f00c61000->leave($__internal_05355f4a4b1fba86756bd849baf9174c6efc4ee458e861766850ee8f00c61000_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_330c1b460e0c2b589351fc170ace1b515c0a9617b8b802250cab511b16a29758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330c1b460e0c2b589351fc170ace1b515c0a9617b8b802250cab511b16a29758->enter($__internal_330c1b460e0c2b589351fc170ace1b515c0a9617b8b802250cab511b16a29758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_21ed59b5d157764bc9bcab6931ce299fd8058244f4dccc84bc4c0f10b4e3ba3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ed59b5d157764bc9bcab6931ce299fd8058244f4dccc84bc4c0f10b4e3ba3f->enter($__internal_21ed59b5d157764bc9bcab6931ce299fd8058244f4dccc84bc4c0f10b4e3ba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_21ed59b5d157764bc9bcab6931ce299fd8058244f4dccc84bc4c0f10b4e3ba3f->leave($__internal_21ed59b5d157764bc9bcab6931ce299fd8058244f4dccc84bc4c0f10b4e3ba3f_prof);

        
        $__internal_330c1b460e0c2b589351fc170ace1b515c0a9617b8b802250cab511b16a29758->leave($__internal_330c1b460e0c2b589351fc170ace1b515c0a9617b8b802250cab511b16a29758_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_75ada9f48648b1b1fd49a9b4e8ffbf8adb3c3d36109702e29a9ba85877192ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ada9f48648b1b1fd49a9b4e8ffbf8adb3c3d36109702e29a9ba85877192ea0->enter($__internal_75ada9f48648b1b1fd49a9b4e8ffbf8adb3c3d36109702e29a9ba85877192ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_95064dee2e3393547e50118966293261b1a08a495155851b9dd883530cee180a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95064dee2e3393547e50118966293261b1a08a495155851b9dd883530cee180a->enter($__internal_95064dee2e3393547e50118966293261b1a08a495155851b9dd883530cee180a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_95064dee2e3393547e50118966293261b1a08a495155851b9dd883530cee180a->leave($__internal_95064dee2e3393547e50118966293261b1a08a495155851b9dd883530cee180a_prof);

        
        $__internal_75ada9f48648b1b1fd49a9b4e8ffbf8adb3c3d36109702e29a9ba85877192ea0->leave($__internal_75ada9f48648b1b1fd49a9b4e8ffbf8adb3c3d36109702e29a9ba85877192ea0_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f1c91d692d749c6c63344ec1ef827d21e6d1a42d9df281d16d6fbdf4a57be573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c91d692d749c6c63344ec1ef827d21e6d1a42d9df281d16d6fbdf4a57be573->enter($__internal_f1c91d692d749c6c63344ec1ef827d21e6d1a42d9df281d16d6fbdf4a57be573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_48a22a8639df446804d4bf3770381819b86d97b13b167d435e803563d4bfaa84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a22a8639df446804d4bf3770381819b86d97b13b167d435e803563d4bfaa84->enter($__internal_48a22a8639df446804d4bf3770381819b86d97b13b167d435e803563d4bfaa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_48a22a8639df446804d4bf3770381819b86d97b13b167d435e803563d4bfaa84->leave($__internal_48a22a8639df446804d4bf3770381819b86d97b13b167d435e803563d4bfaa84_prof);

        
        $__internal_f1c91d692d749c6c63344ec1ef827d21e6d1a42d9df281d16d6fbdf4a57be573->leave($__internal_f1c91d692d749c6c63344ec1ef827d21e6d1a42d9df281d16d6fbdf4a57be573_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_296b338f8b724084e84fcbf9fdb19b65d04d52a906a8f92d75453068bb68aabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296b338f8b724084e84fcbf9fdb19b65d04d52a906a8f92d75453068bb68aabf->enter($__internal_296b338f8b724084e84fcbf9fdb19b65d04d52a906a8f92d75453068bb68aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b34ea98add16e01df62d6dd3ebb3c8e99f81189d1debb1509f394daf45d26a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34ea98add16e01df62d6dd3ebb3c8e99f81189d1debb1509f394daf45d26a55->enter($__internal_b34ea98add16e01df62d6dd3ebb3c8e99f81189d1debb1509f394daf45d26a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_b34ea98add16e01df62d6dd3ebb3c8e99f81189d1debb1509f394daf45d26a55->leave($__internal_b34ea98add16e01df62d6dd3ebb3c8e99f81189d1debb1509f394daf45d26a55_prof);

        
        $__internal_296b338f8b724084e84fcbf9fdb19b65d04d52a906a8f92d75453068bb68aabf->leave($__internal_296b338f8b724084e84fcbf9fdb19b65d04d52a906a8f92d75453068bb68aabf_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_78251305377387b62b13f414415360620a5ee18b46aa3af6a192c79de1287ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78251305377387b62b13f414415360620a5ee18b46aa3af6a192c79de1287ce4->enter($__internal_78251305377387b62b13f414415360620a5ee18b46aa3af6a192c79de1287ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_32d9e420ecd40a7abe62441841edf9fd9b86a6f64fd8045bdc0dc80c3bf72171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d9e420ecd40a7abe62441841edf9fd9b86a6f64fd8045bdc0dc80c3bf72171->enter($__internal_32d9e420ecd40a7abe62441841edf9fd9b86a6f64fd8045bdc0dc80c3bf72171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_32d9e420ecd40a7abe62441841edf9fd9b86a6f64fd8045bdc0dc80c3bf72171->leave($__internal_32d9e420ecd40a7abe62441841edf9fd9b86a6f64fd8045bdc0dc80c3bf72171_prof);

        
        $__internal_78251305377387b62b13f414415360620a5ee18b46aa3af6a192c79de1287ce4->leave($__internal_78251305377387b62b13f414415360620a5ee18b46aa3af6a192c79de1287ce4_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a7ceaa17416a16a01b18d3d4cb9ce5d0a22b97886aaa8e2d1c36bdfea7b7c698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ceaa17416a16a01b18d3d4cb9ce5d0a22b97886aaa8e2d1c36bdfea7b7c698->enter($__internal_a7ceaa17416a16a01b18d3d4cb9ce5d0a22b97886aaa8e2d1c36bdfea7b7c698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_486594b98e3315fb28021e8666c46f1a7fb3b3205cdccf3e6bc8b3595d7eac81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486594b98e3315fb28021e8666c46f1a7fb3b3205cdccf3e6bc8b3595d7eac81->enter($__internal_486594b98e3315fb28021e8666c46f1a7fb3b3205cdccf3e6bc8b3595d7eac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_486594b98e3315fb28021e8666c46f1a7fb3b3205cdccf3e6bc8b3595d7eac81->leave($__internal_486594b98e3315fb28021e8666c46f1a7fb3b3205cdccf3e6bc8b3595d7eac81_prof);

        
        $__internal_a7ceaa17416a16a01b18d3d4cb9ce5d0a22b97886aaa8e2d1c36bdfea7b7c698->leave($__internal_a7ceaa17416a16a01b18d3d4cb9ce5d0a22b97886aaa8e2d1c36bdfea7b7c698_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a67b6401b60ba463288cb34ff638c9de20943a3cde092fd2f5416adaf85e3724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67b6401b60ba463288cb34ff638c9de20943a3cde092fd2f5416adaf85e3724->enter($__internal_a67b6401b60ba463288cb34ff638c9de20943a3cde092fd2f5416adaf85e3724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8b1e5b5532be8f4e7e44a8d2735c5720e9a7f7b0c812234a4c7f3967829ae282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1e5b5532be8f4e7e44a8d2735c5720e9a7f7b0c812234a4c7f3967829ae282->enter($__internal_8b1e5b5532be8f4e7e44a8d2735c5720e9a7f7b0c812234a4c7f3967829ae282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8b1e5b5532be8f4e7e44a8d2735c5720e9a7f7b0c812234a4c7f3967829ae282->leave($__internal_8b1e5b5532be8f4e7e44a8d2735c5720e9a7f7b0c812234a4c7f3967829ae282_prof);

        
        $__internal_a67b6401b60ba463288cb34ff638c9de20943a3cde092fd2f5416adaf85e3724->leave($__internal_a67b6401b60ba463288cb34ff638c9de20943a3cde092fd2f5416adaf85e3724_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5b3a4170c7699ea75fa8cf84402028924ed323f3033b997c4d97b1f221485323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3a4170c7699ea75fa8cf84402028924ed323f3033b997c4d97b1f221485323->enter($__internal_5b3a4170c7699ea75fa8cf84402028924ed323f3033b997c4d97b1f221485323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_377e2440c9274d1735c4c6c238f4f1d360c476ff90aef9a8c9adfa8228845be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377e2440c9274d1735c4c6c238f4f1d360c476ff90aef9a8c9adfa8228845be2->enter($__internal_377e2440c9274d1735c4c6c238f4f1d360c476ff90aef9a8c9adfa8228845be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_377e2440c9274d1735c4c6c238f4f1d360c476ff90aef9a8c9adfa8228845be2->leave($__internal_377e2440c9274d1735c4c6c238f4f1d360c476ff90aef9a8c9adfa8228845be2_prof);

        
        $__internal_5b3a4170c7699ea75fa8cf84402028924ed323f3033b997c4d97b1f221485323->leave($__internal_5b3a4170c7699ea75fa8cf84402028924ed323f3033b997c4d97b1f221485323_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_56fb911b19fd5f95a8e4b57f473f48ba1ff3293d9efe3c8d41c74e93b544f38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56fb911b19fd5f95a8e4b57f473f48ba1ff3293d9efe3c8d41c74e93b544f38b->enter($__internal_56fb911b19fd5f95a8e4b57f473f48ba1ff3293d9efe3c8d41c74e93b544f38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_580a5d9515d3fbb6e01eaafd3eec31434eefd30de402445db35771a66507b7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580a5d9515d3fbb6e01eaafd3eec31434eefd30de402445db35771a66507b7c0->enter($__internal_580a5d9515d3fbb6e01eaafd3eec31434eefd30de402445db35771a66507b7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_580a5d9515d3fbb6e01eaafd3eec31434eefd30de402445db35771a66507b7c0->leave($__internal_580a5d9515d3fbb6e01eaafd3eec31434eefd30de402445db35771a66507b7c0_prof);

        
        $__internal_56fb911b19fd5f95a8e4b57f473f48ba1ff3293d9efe3c8d41c74e93b544f38b->leave($__internal_56fb911b19fd5f95a8e4b57f473f48ba1ff3293d9efe3c8d41c74e93b544f38b_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8b48e4dfeb608e7bffd0aa5b17735cf121ccd03acc4233552c503fbf6e8dca54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b48e4dfeb608e7bffd0aa5b17735cf121ccd03acc4233552c503fbf6e8dca54->enter($__internal_8b48e4dfeb608e7bffd0aa5b17735cf121ccd03acc4233552c503fbf6e8dca54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_14f30eca4b29cacb2dc6d6723b0e5969dd909d07d108a721af3f9f3ea271fbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f30eca4b29cacb2dc6d6723b0e5969dd909d07d108a721af3f9f3ea271fbe2->enter($__internal_14f30eca4b29cacb2dc6d6723b0e5969dd909d07d108a721af3f9f3ea271fbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_14f30eca4b29cacb2dc6d6723b0e5969dd909d07d108a721af3f9f3ea271fbe2->leave($__internal_14f30eca4b29cacb2dc6d6723b0e5969dd909d07d108a721af3f9f3ea271fbe2_prof);

        
        $__internal_8b48e4dfeb608e7bffd0aa5b17735cf121ccd03acc4233552c503fbf6e8dca54->leave($__internal_8b48e4dfeb608e7bffd0aa5b17735cf121ccd03acc4233552c503fbf6e8dca54_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7a43af0d5f5afd497db18307ec9ba7c2047ed5c4e8afcb7df27b5cf6ab36ab34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a43af0d5f5afd497db18307ec9ba7c2047ed5c4e8afcb7df27b5cf6ab36ab34->enter($__internal_7a43af0d5f5afd497db18307ec9ba7c2047ed5c4e8afcb7df27b5cf6ab36ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2358f6dfa5e1b6540d0f864f887e80a8c04ea103e096481631fd817e6262a8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2358f6dfa5e1b6540d0f864f887e80a8c04ea103e096481631fd817e6262a8b9->enter($__internal_2358f6dfa5e1b6540d0f864f887e80a8c04ea103e096481631fd817e6262a8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 190
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 197
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_2358f6dfa5e1b6540d0f864f887e80a8c04ea103e096481631fd817e6262a8b9->leave($__internal_2358f6dfa5e1b6540d0f864f887e80a8c04ea103e096481631fd817e6262a8b9_prof);

        
        $__internal_7a43af0d5f5afd497db18307ec9ba7c2047ed5c4e8afcb7df27b5cf6ab36ab34->leave($__internal_7a43af0d5f5afd497db18307ec9ba7c2047ed5c4e8afcb7df27b5cf6ab36ab34_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e92dcbf85b186aa4a00af9d9be69972933b771ef6395ceadb80c328129778964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92dcbf85b186aa4a00af9d9be69972933b771ef6395ceadb80c328129778964->enter($__internal_e92dcbf85b186aa4a00af9d9be69972933b771ef6395ceadb80c328129778964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0de5da519af51e54ffdd3f33bd9e127aca84120a9dc3b6791414356fc0ba1065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de5da519af51e54ffdd3f33bd9e127aca84120a9dc3b6791414356fc0ba1065->enter($__internal_0de5da519af51e54ffdd3f33bd9e127aca84120a9dc3b6791414356fc0ba1065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_0de5da519af51e54ffdd3f33bd9e127aca84120a9dc3b6791414356fc0ba1065->leave($__internal_0de5da519af51e54ffdd3f33bd9e127aca84120a9dc3b6791414356fc0ba1065_prof);

        
        $__internal_e92dcbf85b186aa4a00af9d9be69972933b771ef6395ceadb80c328129778964->leave($__internal_e92dcbf85b186aa4a00af9d9be69972933b771ef6395ceadb80c328129778964_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_969f440696a513a107cc351fbeaea78fdfa5a2002b1f33f7d3f939c8bc8ddcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969f440696a513a107cc351fbeaea78fdfa5a2002b1f33f7d3f939c8bc8ddcff->enter($__internal_969f440696a513a107cc351fbeaea78fdfa5a2002b1f33f7d3f939c8bc8ddcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f51618b48878e0ee2ecb9706715ce4be884d024bcebe2b7cc7d47f177fde9189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51618b48878e0ee2ecb9706715ce4be884d024bcebe2b7cc7d47f177fde9189->enter($__internal_f51618b48878e0ee2ecb9706715ce4be884d024bcebe2b7cc7d47f177fde9189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_f51618b48878e0ee2ecb9706715ce4be884d024bcebe2b7cc7d47f177fde9189->leave($__internal_f51618b48878e0ee2ecb9706715ce4be884d024bcebe2b7cc7d47f177fde9189_prof);

        
        $__internal_969f440696a513a107cc351fbeaea78fdfa5a2002b1f33f7d3f939c8bc8ddcff->leave($__internal_969f440696a513a107cc351fbeaea78fdfa5a2002b1f33f7d3f939c8bc8ddcff_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_83d526d41f181c6e0cfc1e07b9fb31862a693d2e355f02ab46b011d613318f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d526d41f181c6e0cfc1e07b9fb31862a693d2e355f02ab46b011d613318f1d->enter($__internal_83d526d41f181c6e0cfc1e07b9fb31862a693d2e355f02ab46b011d613318f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ba9eadf3c4e1349abac3d3d3e30f2c30a17865f52bac8fd4f83983683b5f8e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9eadf3c4e1349abac3d3d3e30f2c30a17865f52bac8fd4f83983683b5f8e4a->enter($__internal_ba9eadf3c4e1349abac3d3d3e30f2c30a17865f52bac8fd4f83983683b5f8e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba9eadf3c4e1349abac3d3d3e30f2c30a17865f52bac8fd4f83983683b5f8e4a->leave($__internal_ba9eadf3c4e1349abac3d3d3e30f2c30a17865f52bac8fd4f83983683b5f8e4a_prof);

        
        $__internal_83d526d41f181c6e0cfc1e07b9fb31862a693d2e355f02ab46b011d613318f1d->leave($__internal_83d526d41f181c6e0cfc1e07b9fb31862a693d2e355f02ab46b011d613318f1d_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_63a07a322f7ac498830965ed027e6cc88f3da10284850aa4b0e21468b9917a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a07a322f7ac498830965ed027e6cc88f3da10284850aa4b0e21468b9917a73->enter($__internal_63a07a322f7ac498830965ed027e6cc88f3da10284850aa4b0e21468b9917a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_791bfb6731e21bb1115f32ac3e138a408ed9dc73dc1df2c4c0cf927af9ab31a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791bfb6731e21bb1115f32ac3e138a408ed9dc73dc1df2c4c0cf927af9ab31a6->enter($__internal_791bfb6731e21bb1115f32ac3e138a408ed9dc73dc1df2c4c0cf927af9ab31a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_791bfb6731e21bb1115f32ac3e138a408ed9dc73dc1df2c4c0cf927af9ab31a6->leave($__internal_791bfb6731e21bb1115f32ac3e138a408ed9dc73dc1df2c4c0cf927af9ab31a6_prof);

        
        $__internal_63a07a322f7ac498830965ed027e6cc88f3da10284850aa4b0e21468b9917a73->leave($__internal_63a07a322f7ac498830965ed027e6cc88f3da10284850aa4b0e21468b9917a73_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a31fd5c6fdd59ea2cd67a17668f9d01df6c6afaf60c3e34cfd611ae5d49c529e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31fd5c6fdd59ea2cd67a17668f9d01df6c6afaf60c3e34cfd611ae5d49c529e->enter($__internal_a31fd5c6fdd59ea2cd67a17668f9d01df6c6afaf60c3e34cfd611ae5d49c529e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b1aac920503817c97905464f9f1e66f74301846b2157780bdb4e7e6b413a4209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1aac920503817c97905464f9f1e66f74301846b2157780bdb4e7e6b413a4209->enter($__internal_b1aac920503817c97905464f9f1e66f74301846b2157780bdb4e7e6b413a4209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b1aac920503817c97905464f9f1e66f74301846b2157780bdb4e7e6b413a4209->leave($__internal_b1aac920503817c97905464f9f1e66f74301846b2157780bdb4e7e6b413a4209_prof);

        
        $__internal_a31fd5c6fdd59ea2cd67a17668f9d01df6c6afaf60c3e34cfd611ae5d49c529e->leave($__internal_a31fd5c6fdd59ea2cd67a17668f9d01df6c6afaf60c3e34cfd611ae5d49c529e_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_bcaa6aeda8264a40c45b90f3bd05d79c89f81f36f386bec9715245e9b51ddb45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcaa6aeda8264a40c45b90f3bd05d79c89f81f36f386bec9715245e9b51ddb45->enter($__internal_bcaa6aeda8264a40c45b90f3bd05d79c89f81f36f386bec9715245e9b51ddb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5227e3a38e9e2308c6afcedf93a4862fe151a6578bf4d855df5bae86728f2754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5227e3a38e9e2308c6afcedf93a4862fe151a6578bf4d855df5bae86728f2754->enter($__internal_5227e3a38e9e2308c6afcedf93a4862fe151a6578bf4d855df5bae86728f2754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5227e3a38e9e2308c6afcedf93a4862fe151a6578bf4d855df5bae86728f2754->leave($__internal_5227e3a38e9e2308c6afcedf93a4862fe151a6578bf4d855df5bae86728f2754_prof);

        
        $__internal_bcaa6aeda8264a40c45b90f3bd05d79c89f81f36f386bec9715245e9b51ddb45->leave($__internal_bcaa6aeda8264a40c45b90f3bd05d79c89f81f36f386bec9715245e9b51ddb45_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_67bfd00d7349874bd1d383d775b4a6a4b8a933b5a1850d01e89b1ebda47d20f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bfd00d7349874bd1d383d775b4a6a4b8a933b5a1850d01e89b1ebda47d20f2->enter($__internal_67bfd00d7349874bd1d383d775b4a6a4b8a933b5a1850d01e89b1ebda47d20f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_056b43901bf8fdfd37599f9c5b16ae09c754b196045ef876bb9dd253db16b5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056b43901bf8fdfd37599f9c5b16ae09c754b196045ef876bb9dd253db16b5ad->enter($__internal_056b43901bf8fdfd37599f9c5b16ae09c754b196045ef876bb9dd253db16b5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_056b43901bf8fdfd37599f9c5b16ae09c754b196045ef876bb9dd253db16b5ad->leave($__internal_056b43901bf8fdfd37599f9c5b16ae09c754b196045ef876bb9dd253db16b5ad_prof);

        
        $__internal_67bfd00d7349874bd1d383d775b4a6a4b8a933b5a1850d01e89b1ebda47d20f2->leave($__internal_67bfd00d7349874bd1d383d775b4a6a4b8a933b5a1850d01e89b1ebda47d20f2_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9fa197a8c4c691edcd99e7af737b933258d500b718f6307614aba85752f69c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa197a8c4c691edcd99e7af737b933258d500b718f6307614aba85752f69c2e->enter($__internal_9fa197a8c4c691edcd99e7af737b933258d500b718f6307614aba85752f69c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5dc8444da695c3e919ea6ffe128291eda2e45430a1c471595317f6b59d913cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc8444da695c3e919ea6ffe128291eda2e45430a1c471595317f6b59d913cd3->enter($__internal_5dc8444da695c3e919ea6ffe128291eda2e45430a1c471595317f6b59d913cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_5dc8444da695c3e919ea6ffe128291eda2e45430a1c471595317f6b59d913cd3->leave($__internal_5dc8444da695c3e919ea6ffe128291eda2e45430a1c471595317f6b59d913cd3_prof);

        
        $__internal_9fa197a8c4c691edcd99e7af737b933258d500b718f6307614aba85752f69c2e->leave($__internal_9fa197a8c4c691edcd99e7af737b933258d500b718f6307614aba85752f69c2e_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_74dfde75ce8a57a7b6a3574f61547b481f09f03b31d3edce3794841e02fe25ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74dfde75ce8a57a7b6a3574f61547b481f09f03b31d3edce3794841e02fe25ee->enter($__internal_74dfde75ce8a57a7b6a3574f61547b481f09f03b31d3edce3794841e02fe25ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_fae243df45c371a728bbad6587381a049a7098523f7fef2e2070d0dc782e8bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae243df45c371a728bbad6587381a049a7098523f7fef2e2070d0dc782e8bb9->enter($__internal_fae243df45c371a728bbad6587381a049a7098523f7fef2e2070d0dc782e8bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_fae243df45c371a728bbad6587381a049a7098523f7fef2e2070d0dc782e8bb9->leave($__internal_fae243df45c371a728bbad6587381a049a7098523f7fef2e2070d0dc782e8bb9_prof);

        
        $__internal_74dfde75ce8a57a7b6a3574f61547b481f09f03b31d3edce3794841e02fe25ee->leave($__internal_74dfde75ce8a57a7b6a3574f61547b481f09f03b31d3edce3794841e02fe25ee_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/__Cours H3/symfony-cours-1/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
