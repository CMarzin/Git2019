<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_48cbc71226534767949206aae167b6f50fc7348a16694d9a3f661b7e17d4d4e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d6fc88d0194084ec8f536cd819daa8bc2b39a97c9761c8df7292d2d5aed9344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6fc88d0194084ec8f536cd819daa8bc2b39a97c9761c8df7292d2d5aed9344->enter($__internal_2d6fc88d0194084ec8f536cd819daa8bc2b39a97c9761c8df7292d2d5aed9344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_abcdabcc47448d487b99ef734de15b33009897f407c8402932578637029f359d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcdabcc47448d487b99ef734de15b33009897f407c8402932578637029f359d->enter($__internal_abcdabcc47448d487b99ef734de15b33009897f407c8402932578637029f359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            html {
                background: #eee;
            }
            body {
                font: 11px Verdana, Arial, sans-serif;
                color: #333;
            }
            .sf-reset, .sf-reset .block, .sf-reset #message {
                margin: auto;
            }
            img {
                border: 0;
            }
            .clear {
                clear: both;
                height: 0;
                font-size: 0;
                line-height: 0;
            }
            .clear-fix:after {
                content: \"\\0020\";
                display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }
            .clear-fix {
                display: inline-block;
            }
            * html .clear-fix {
                height: 1%;
            }
            .clear-fix {
                display: block;
            }
            .header {
                padding: 30px 30px 20px 30px;
            }
            .header-logo {
                float: left;
            }
            .search {
                float: right;
                padding-top: 20px;
            }
            .search label {
                line-height: 28px;
                vertical-align: middle;
            }
            .search input {
                width: 195px;
                font-size: 12px;
                border: 1px solid #dadada;
                background: #fff url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
                padding: 5px 6px;
                color: #565656;
            }
            .search input[type=\"search\"] {
                -webkit-appearance: textfield;
            }
            #content {
                width: 970px;
                margin: 0 auto;
            }
            #content pre {
                white-space: normal;
                font-family: Arial, Helvetica, sans-serif;
            }

            /*
            Copyright (c) 2010, Yahoo! Inc. All rights reserved.
            Code licensed under the BSD License:
            http://developer.yahoo.com/yui/license.html
            version: 3.1.2
            build: 56
            */
            .sf-reset div,.sf-reset dl,.sf-reset dt,.sf-reset dd,.sf-reset ul,.sf-reset ol,.sf-reset li,.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6,.sf-reset pre,.sf-reset code,.sf-reset form,.sf-reset fieldset,.sf-reset legend,.sf-reset input,.sf-reset textarea,.sf-reset p,.sf-reset blockquote,.sf-reset th,.sf-reset td{margin:0;padding:0;}.sf-reset table{border-collapse:collapse;border-spacing:0;}.sf-reset fieldset,.sf-reset img{border:0;}.sf-reset address,.sf-reset caption,.sf-reset cite,.sf-reset code,.sf-reset dfn,.sf-reset em,.sf-reset strong,.sf-reset th,.sf-reset var{font-style:normal;font-weight:normal;}.sf-reset li{list-style:none;}.sf-reset caption,.sf-reset th{text-align:left;}.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6{font-size:100%;font-weight:normal;}.sf-reset q:before,.sf-reset q:after{content:'';}.sf-reset abbr,.sf-reset acronym{border:0;font-variant:normal;}.sf-reset sup{vertical-align:text-top;}.sf-reset sub{vertical-align:text-bottom;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-family:inherit;font-size:inherit;font-weight:inherit;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-size:100%;}.sf-reset legend{color:#000;}
            .sf-reset abbr {
                border-bottom: 1px dotted #000;
                cursor: help;
            }
            .sf-reset p {
                font-size: 14px;
                line-height: 20px;
                padding-bottom: 20px;
            }
            .sf-reset strong {
                color: #313131;
                font-weight: bold;
            }
            .sf-reset a {
                color: #6c6159;
            }
            .sf-reset a img {
                border: none;
            }
            .sf-reset a:hover {
                text-decoration: underline;
            }
            .sf-reset em {
                font-style: italic;
            }
            .sf-reset h2,
            .sf-reset h3 {
                font-weight: bold;
            }
            .sf-reset h1 {
                font-family: Georgia, \"Times New Roman\", Times, serif;
                font-size: 20px;
                color: #313131;
                word-wrap: break-word;
            }
            .sf-reset li {
                padding-bottom: 10px;
            }
            .sf-reset .block {
                -moz-border-radius: 16px;
                -webkit-border-radius: 16px;
                border-radius: 16px;
                margin-bottom: 20px;
                background-color: #FFFFFF;
                border: 1px solid #dfdfdf;
                padding: 40px 50px;
                word-break: break-all;
            }
            .sf-reset h2 {
                font-size: 16px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .sf-reset li a {
                background: none;
                color: #868686;
                text-decoration: none;
            }
            .sf-reset li a:hover {
                background: none;
                color: #313131;
                text-decoration: underline;
            }
            .sf-reset ol {
                padding: 10px 0;
            }
            .sf-reset ol li {
                list-style: decimal;
                margin-left: 20px;
                padding: 2px;
                padding-bottom: 20px;
            }
            .sf-reset ol ol li {
                list-style-position: inside;
                margin-left: 0;
                white-space: nowrap;
                font-size: 12px;
                padding-bottom: 0;
            }
            .sf-reset li .selected {
                background-color: #ffd;
            }
            .sf-button {
                display: -moz-inline-box;
                display: inline-block;
                text-align: center;
                vertical-align: middle;
                border: 0;
                background: transparent none;
                text-transform: uppercase;
                cursor: pointer;
                font: bold 11px Arial, Helvetica, sans-serif;
            }
            .sf-button span {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
            }
            .sf-button .border-l {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
                padding: 0 0 0 7px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQtJREFUeNpiPHnyJAMakARiByDWYEGT8ADiYGVlZStubm5xlv///4MEQYoKZGRkQkRERLRYWVl5wYJQyXBZWdkwCQkJUxAHKgaWlAHSLqKiosb//v1DsYMFKGCvoqJiDmQzwXTAJYECulxcXNLoumCSoszMzDzoumDGghQwYZUECWIzkrAkSIIGOmlkLI10AiX//P379x8jIyMTNmPf/v79+ysLCwsvuiQoNi5//fr1Kch4dAyS3P/gwYMTQBP+wxwHw0xA4gkQ73v9+vUZdJ2w1Lf82bNn4iCHCQoKasHsZw4ODgbRIL8c+/Lly5M3b978Y2dn5wC6npkFLXnsAOKLjx49AmUHLYAAAwBoQubG016R5wAAAABJRU5ErkJggg==) no-repeat top left;
            }
            .sf-button .border-r {
                padding: 0 7px 0 0;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR1JREFUeNpiPHnyZCMDA8MNID5gZmb2nAEJMH7//v3N169fX969e/cYkL8WqGAHXPLv37//QYzfv39/fvPmzbUnT56sAXInmJub/2H5/x8sx8DCwsIrISFhDmQyPX78+CmQXs70798/BmQsKipqBNTgdvz4cWkmkE5kDATMioqKZkCFdiwg1eiAi4tLGqhQF24nMmBmZuYEigth1QkEbEBxTlySYPvJkwSJ00AnjYylgU6gxB8g/oFVEphkvgLF32KNMmCCewYUv4qhEyj47+HDhyeBzIMYOoEp8CxQw56wsLAncJ1//vz5/P79+2svX74EJc2V4BT58+fPd8CE/QKYHMGJOiIiAp6oWW7evDkNSF8DZYfIyEiU7AAQYACJ2vxVdJW4eQAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button .btn-bg {
                padding: 0 14px;
                color: #636363;
                line-height: 28px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAYAAACgXdXMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAClJREFUeNpiPnny5EKGf//+/Wf6//8/A4QAcrGzKCZwGc9sa2urBBBgAIbDUoYVp9lmAAAAAElFTkSuQmCC) repeat-x top left;
            }
            .sf-button:hover .border-l,
            .sf-button-selected .border-l {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR9JREFUeNpi/P//PwMyOHfunDqQSgNiexZkibNnzxYBqZa3HOs5v7PcYQBLnjlzhg1IbfzIdsTjA/t+ht9Mr8GKwZL//v3r+sB+0OMN+zqIEf8gFMvJkyd1gXTOa9YNDP//otrPAtSV/Jp9HfPff78Z0AEL0LUeXxivMfxD0wXTqfjj/2ugkf+wSrL9/YtpJEyS4S8WI5Ek/+GR/POPFjr//cenE6/kP9q4Fo/kr39/mdj+M/zFkGQCSj5i+ccPjLJ/GBgkuYOHQR1sNDpmAkb2LBmWwL///zKCIxwZM0VHR18G6p4uxeLLAA4tJMwEshiou1iMxXaHLGswA+t/YbhORuQUv2DBAnCifvxzI+enP3dQJUFg/vz5sOzgBBBgAPxX9j0YnH4JAAAAAElFTkSuQmCC) no-repeat top left;
            }
            .sf-button:hover .border-r,
            .sf-button-selected .border-r {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAT5JREFUeNpiPHv27BkGBoaDQDzLyMjoJgMSYHrM3WX8hn1d0f///88DFRYhSzIuv2X5H8Rg/SfKIPDTkYH/l80OINffxMTkF9O/f/8ZQPgnwyuGl+wrGd6x7vf49+9fO9jYf3+Bkkj4NesmBqAV+SdPntQC6vzHgIz//gOawbqOGchOxtAJwp8Zr4F0e7D8/fuPAR38/P8eZIo0yz8skv8YvoIk+YE6/zNgAyD7sRqLkPzzjxY6/+HS+R+fTkZ8djLh08lCUCcuSWawJGbwMTGwg7zyBatX2Bj5QZKPsBrLzaICktzN8g/NWEYGZgYZjoC/wMiei5FMpFh8QPSU6Ojoy3Cd7EwiDBJsDgxiLNY7gLrKQGIsHAxSDHxAO2TZ/b8D+TVxcXF9MCtYtLiKLgDpfUDVsxITE1GyA0CAAQA2E/N8VuHyAAAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button:hover .btn-bg,
            .sf-button-selected .btn-bg {
                color: #FFFFFF;
                text-shadow:0 1px 1px #6b9311;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAIAAAAvP0KbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAEFJREFUeNpiPnv2LNMdvlymf///M/37B8R/QfQ/MP33L4j+B6Qh7L9//sHpf2h8MA1V+w/KRjYLaDaLCU8vQIABAFO3TxZriO4yAAAAAElFTkSuQmCC) repeat-x top left;
            }
        </style>
        ";
        // line 216
        $this->displayBlock('head', $context, $blocks);
        // line 217
        echo "    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    ";
        // line 222
        echo twig_include($this->env, $context, "@Twig/symfony.svg");
        echo "
                </div>

                <div class=\"search\">
                    <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                        <div class=\"form-row\">
                            <label for=\"search-id\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC\" alt=\"Search on Symfony website\" />
                            </label>

                            <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                            <button type=\"submit\" class=\"sf-button\">
                                <span class=\"border-l\">
                                    <span class=\"border-r\">
                                        <span class=\"btn-bg\">OK</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                ";
        // line 247
        $this->displayBlock('body', $context, $blocks);
        // line 248
        echo "            </div>
        </div>
    </body>
</html>
";
        
        $__internal_2d6fc88d0194084ec8f536cd819daa8bc2b39a97c9761c8df7292d2d5aed9344->leave($__internal_2d6fc88d0194084ec8f536cd819daa8bc2b39a97c9761c8df7292d2d5aed9344_prof);

        
        $__internal_abcdabcc47448d487b99ef734de15b33009897f407c8402932578637029f359d->leave($__internal_abcdabcc47448d487b99ef734de15b33009897f407c8402932578637029f359d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_091c47e3ae0734e517ad1a09e40adf294e196f7cf6b665bdb5ca2877e5ec0fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091c47e3ae0734e517ad1a09e40adf294e196f7cf6b665bdb5ca2877e5ec0fa7->enter($__internal_091c47e3ae0734e517ad1a09e40adf294e196f7cf6b665bdb5ca2877e5ec0fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76978b2edd45c13e97033f2a6cd15793516af18d27f39521d5e7247230fdd4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76978b2edd45c13e97033f2a6cd15793516af18d27f39521d5e7247230fdd4cf->enter($__internal_76978b2edd45c13e97033f2a6cd15793516af18d27f39521d5e7247230fdd4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_76978b2edd45c13e97033f2a6cd15793516af18d27f39521d5e7247230fdd4cf->leave($__internal_76978b2edd45c13e97033f2a6cd15793516af18d27f39521d5e7247230fdd4cf_prof);

        
        $__internal_091c47e3ae0734e517ad1a09e40adf294e196f7cf6b665bdb5ca2877e5ec0fa7->leave($__internal_091c47e3ae0734e517ad1a09e40adf294e196f7cf6b665bdb5ca2877e5ec0fa7_prof);

    }

    // line 216
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c59531e031a9944e7c8af37c168b76e96f5b93eabe10d5131bcd0a3076b45c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c59531e031a9944e7c8af37c168b76e96f5b93eabe10d5131bcd0a3076b45c3->enter($__internal_3c59531e031a9944e7c8af37c168b76e96f5b93eabe10d5131bcd0a3076b45c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a84345bc91cdea28d902f946fc8345e4658b05cfeee2c9882b2ec00240369b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84345bc91cdea28d902f946fc8345e4658b05cfeee2c9882b2ec00240369b18->enter($__internal_a84345bc91cdea28d902f946fc8345e4658b05cfeee2c9882b2ec00240369b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a84345bc91cdea28d902f946fc8345e4658b05cfeee2c9882b2ec00240369b18->leave($__internal_a84345bc91cdea28d902f946fc8345e4658b05cfeee2c9882b2ec00240369b18_prof);

        
        $__internal_3c59531e031a9944e7c8af37c168b76e96f5b93eabe10d5131bcd0a3076b45c3->leave($__internal_3c59531e031a9944e7c8af37c168b76e96f5b93eabe10d5131bcd0a3076b45c3_prof);

    }

    // line 247
    public function block_body($context, array $blocks = array())
    {
        $__internal_7621b24338b511de1d0e131142ece326804ddce7ef21a69d2820a577f512b87f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7621b24338b511de1d0e131142ece326804ddce7ef21a69d2820a577f512b87f->enter($__internal_7621b24338b511de1d0e131142ece326804ddce7ef21a69d2820a577f512b87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7031e0ba92bd428108a003608036c8345f33464ce007d817a153bccb20af7ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7031e0ba92bd428108a003608036c8345f33464ce007d817a153bccb20af7ec9->enter($__internal_7031e0ba92bd428108a003608036c8345f33464ce007d817a153bccb20af7ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7031e0ba92bd428108a003608036c8345f33464ce007d817a153bccb20af7ec9->leave($__internal_7031e0ba92bd428108a003608036c8345f33464ce007d817a153bccb20af7ec9_prof);

        
        $__internal_7621b24338b511de1d0e131142ece326804ddce7ef21a69d2820a577f512b87f->leave($__internal_7621b24338b511de1d0e131142ece326804ddce7ef21a69d2820a577f512b87f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 247,  321 => 216,  304 => 6,  290 => 248,  288 => 247,  260 => 222,  253 => 217,  251 => 216,  38 => 6,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>{% block title %}{% endblock %}</title>
        <style>
            html {
                background: #eee;
            }
            body {
                font: 11px Verdana, Arial, sans-serif;
                color: #333;
            }
            .sf-reset, .sf-reset .block, .sf-reset #message {
                margin: auto;
            }
            img {
                border: 0;
            }
            .clear {
                clear: both;
                height: 0;
                font-size: 0;
                line-height: 0;
            }
            .clear-fix:after {
                content: \"\\0020\";
                display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }
            .clear-fix {
                display: inline-block;
            }
            * html .clear-fix {
                height: 1%;
            }
            .clear-fix {
                display: block;
            }
            .header {
                padding: 30px 30px 20px 30px;
            }
            .header-logo {
                float: left;
            }
            .search {
                float: right;
                padding-top: 20px;
            }
            .search label {
                line-height: 28px;
                vertical-align: middle;
            }
            .search input {
                width: 195px;
                font-size: 12px;
                border: 1px solid #dadada;
                background: #fff url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
                padding: 5px 6px;
                color: #565656;
            }
            .search input[type=\"search\"] {
                -webkit-appearance: textfield;
            }
            #content {
                width: 970px;
                margin: 0 auto;
            }
            #content pre {
                white-space: normal;
                font-family: Arial, Helvetica, sans-serif;
            }

            /*
            Copyright (c) 2010, Yahoo! Inc. All rights reserved.
            Code licensed under the BSD License:
            http://developer.yahoo.com/yui/license.html
            version: 3.1.2
            build: 56
            */
            .sf-reset div,.sf-reset dl,.sf-reset dt,.sf-reset dd,.sf-reset ul,.sf-reset ol,.sf-reset li,.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6,.sf-reset pre,.sf-reset code,.sf-reset form,.sf-reset fieldset,.sf-reset legend,.sf-reset input,.sf-reset textarea,.sf-reset p,.sf-reset blockquote,.sf-reset th,.sf-reset td{margin:0;padding:0;}.sf-reset table{border-collapse:collapse;border-spacing:0;}.sf-reset fieldset,.sf-reset img{border:0;}.sf-reset address,.sf-reset caption,.sf-reset cite,.sf-reset code,.sf-reset dfn,.sf-reset em,.sf-reset strong,.sf-reset th,.sf-reset var{font-style:normal;font-weight:normal;}.sf-reset li{list-style:none;}.sf-reset caption,.sf-reset th{text-align:left;}.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6{font-size:100%;font-weight:normal;}.sf-reset q:before,.sf-reset q:after{content:'';}.sf-reset abbr,.sf-reset acronym{border:0;font-variant:normal;}.sf-reset sup{vertical-align:text-top;}.sf-reset sub{vertical-align:text-bottom;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-family:inherit;font-size:inherit;font-weight:inherit;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-size:100%;}.sf-reset legend{color:#000;}
            .sf-reset abbr {
                border-bottom: 1px dotted #000;
                cursor: help;
            }
            .sf-reset p {
                font-size: 14px;
                line-height: 20px;
                padding-bottom: 20px;
            }
            .sf-reset strong {
                color: #313131;
                font-weight: bold;
            }
            .sf-reset a {
                color: #6c6159;
            }
            .sf-reset a img {
                border: none;
            }
            .sf-reset a:hover {
                text-decoration: underline;
            }
            .sf-reset em {
                font-style: italic;
            }
            .sf-reset h2,
            .sf-reset h3 {
                font-weight: bold;
            }
            .sf-reset h1 {
                font-family: Georgia, \"Times New Roman\", Times, serif;
                font-size: 20px;
                color: #313131;
                word-wrap: break-word;
            }
            .sf-reset li {
                padding-bottom: 10px;
            }
            .sf-reset .block {
                -moz-border-radius: 16px;
                -webkit-border-radius: 16px;
                border-radius: 16px;
                margin-bottom: 20px;
                background-color: #FFFFFF;
                border: 1px solid #dfdfdf;
                padding: 40px 50px;
                word-break: break-all;
            }
            .sf-reset h2 {
                font-size: 16px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .sf-reset li a {
                background: none;
                color: #868686;
                text-decoration: none;
            }
            .sf-reset li a:hover {
                background: none;
                color: #313131;
                text-decoration: underline;
            }
            .sf-reset ol {
                padding: 10px 0;
            }
            .sf-reset ol li {
                list-style: decimal;
                margin-left: 20px;
                padding: 2px;
                padding-bottom: 20px;
            }
            .sf-reset ol ol li {
                list-style-position: inside;
                margin-left: 0;
                white-space: nowrap;
                font-size: 12px;
                padding-bottom: 0;
            }
            .sf-reset li .selected {
                background-color: #ffd;
            }
            .sf-button {
                display: -moz-inline-box;
                display: inline-block;
                text-align: center;
                vertical-align: middle;
                border: 0;
                background: transparent none;
                text-transform: uppercase;
                cursor: pointer;
                font: bold 11px Arial, Helvetica, sans-serif;
            }
            .sf-button span {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
            }
            .sf-button .border-l {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
                padding: 0 0 0 7px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQtJREFUeNpiPHnyJAMakARiByDWYEGT8ADiYGVlZStubm5xlv///4MEQYoKZGRkQkRERLRYWVl5wYJQyXBZWdkwCQkJUxAHKgaWlAHSLqKiosb//v1DsYMFKGCvoqJiDmQzwXTAJYECulxcXNLoumCSoszMzDzoumDGghQwYZUECWIzkrAkSIIGOmlkLI10AiX//P379x8jIyMTNmPf/v79+ysLCwsvuiQoNi5//fr1Kch4dAyS3P/gwYMTQBP+wxwHw0xA4gkQ73v9+vUZdJ2w1Lf82bNn4iCHCQoKasHsZw4ODgbRIL8c+/Lly5M3b978Y2dn5wC6npkFLXnsAOKLjx49AmUHLYAAAwBoQubG016R5wAAAABJRU5ErkJggg==) no-repeat top left;
            }
            .sf-button .border-r {
                padding: 0 7px 0 0;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR1JREFUeNpiPHnyZCMDA8MNID5gZmb2nAEJMH7//v3N169fX969e/cYkL8WqGAHXPLv37//QYzfv39/fvPmzbUnT56sAXInmJub/2H5/x8sx8DCwsIrISFhDmQyPX78+CmQXs70798/BmQsKipqBNTgdvz4cWkmkE5kDATMioqKZkCFdiwg1eiAi4tLGqhQF24nMmBmZuYEigth1QkEbEBxTlySYPvJkwSJ00AnjYylgU6gxB8g/oFVEphkvgLF32KNMmCCewYUv4qhEyj47+HDhyeBzIMYOoEp8CxQw56wsLAncJ1//vz5/P79+2svX74EJc2V4BT58+fPd8CE/QKYHMGJOiIiAp6oWW7evDkNSF8DZYfIyEiU7AAQYACJ2vxVdJW4eQAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button .btn-bg {
                padding: 0 14px;
                color: #636363;
                line-height: 28px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAYAAACgXdXMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAClJREFUeNpiPnny5EKGf//+/Wf6//8/A4QAcrGzKCZwGc9sa2urBBBgAIbDUoYVp9lmAAAAAElFTkSuQmCC) repeat-x top left;
            }
            .sf-button:hover .border-l,
            .sf-button-selected .border-l {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR9JREFUeNpi/P//PwMyOHfunDqQSgNiexZkibNnzxYBqZa3HOs5v7PcYQBLnjlzhg1IbfzIdsTjA/t+ht9Mr8GKwZL//v3r+sB+0OMN+zqIEf8gFMvJkyd1gXTOa9YNDP//otrPAtSV/Jp9HfPff78Z0AEL0LUeXxivMfxD0wXTqfjj/2ugkf+wSrL9/YtpJEyS4S8WI5Ek/+GR/POPFjr//cenE6/kP9q4Fo/kr39/mdj+M/zFkGQCSj5i+ccPjLJ/GBgkuYOHQR1sNDpmAkb2LBmWwL///zKCIxwZM0VHR18G6p4uxeLLAA4tJMwEshiou1iMxXaHLGswA+t/YbhORuQUv2DBAnCifvxzI+enP3dQJUFg/vz5sOzgBBBgAPxX9j0YnH4JAAAAAElFTkSuQmCC) no-repeat top left;
            }
            .sf-button:hover .border-r,
            .sf-button-selected .border-r {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAT5JREFUeNpiPHv27BkGBoaDQDzLyMjoJgMSYHrM3WX8hn1d0f///88DFRYhSzIuv2X5H8Rg/SfKIPDTkYH/l80OINffxMTkF9O/f/8ZQPgnwyuGl+wrGd6x7vf49+9fO9jYf3+Bkkj4NesmBqAV+SdPntQC6vzHgIz//gOawbqOGchOxtAJwp8Zr4F0e7D8/fuPAR38/P8eZIo0yz8skv8YvoIk+YE6/zNgAyD7sRqLkPzzjxY6/+HS+R+fTkZ8djLh08lCUCcuSWawJGbwMTGwg7zyBatX2Bj5QZKPsBrLzaICktzN8g/NWEYGZgYZjoC/wMiei5FMpFh8QPSU6Ojoy3Cd7EwiDBJsDgxiLNY7gLrKQGIsHAxSDHxAO2TZ/b8D+TVxcXF9MCtYtLiKLgDpfUDVsxITE1GyA0CAAQA2E/N8VuHyAAAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button:hover .btn-bg,
            .sf-button-selected .btn-bg {
                color: #FFFFFF;
                text-shadow:0 1px 1px #6b9311;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAIAAAAvP0KbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAEFJREFUeNpiPnv2LNMdvlymf///M/37B8R/QfQ/MP33L4j+B6Qh7L9//sHpf2h8MA1V+w/KRjYLaDaLCU8vQIABAFO3TxZriO4yAAAAAElFTkSuQmCC) repeat-x top left;
            }
        </style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    {{ include('@Twig/symfony.svg') }}
                </div>

                <div class=\"search\">
                    <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                        <div class=\"form-row\">
                            <label for=\"search-id\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC\" alt=\"Search on Symfony website\" />
                            </label>

                            <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                            <button type=\"submit\" class=\"sf-button\">
                                <span class=\"border-l\">
                                    <span class=\"border-r\">
                                        <span class=\"btn-bg\">OK</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                {% block body %}{% endblock %}
            </div>
        </div>
    </body>
</html>
", "@Twig/layout.html.twig", "/home/coco/Bureau/dev/Github/exosymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
