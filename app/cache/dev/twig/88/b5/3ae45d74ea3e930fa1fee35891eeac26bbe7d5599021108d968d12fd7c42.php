<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_88b53ae45d74ea3e930fa1fee35891eeac26bbe7d5599021108d968d12fd7c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b59197007f4d840540fed42a4fbe145f9e6a29618060a60b47ffed64b3061543 = $this->env->getExtension("native_profiler");
        $__internal_b59197007f4d840540fed42a4fbe145f9e6a29618060a60b47ffed64b3061543->enter($__internal_b59197007f4d840540fed42a4fbe145f9e6a29618060a60b47ffed64b3061543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b59197007f4d840540fed42a4fbe145f9e6a29618060a60b47ffed64b3061543->leave($__internal_b59197007f4d840540fed42a4fbe145f9e6a29618060a60b47ffed64b3061543_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a1db53ea0760a7c5722c2ebef6430e8453e20c3bb0ad3db4d375c582ea0aa0b = $this->env->getExtension("native_profiler");
        $__internal_1a1db53ea0760a7c5722c2ebef6430e8453e20c3bb0ad3db4d375c582ea0aa0b->enter($__internal_1a1db53ea0760a7c5722c2ebef6430e8453e20c3bb0ad3db4d375c582ea0aa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["dumps_count"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array());
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["dumps_count"]) ? $context["dumps_count"] : $this->getContext($context, "dumps_count"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img alt=\"dump()\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAYAAACOGPReAAACcUlEQVRIx+1UPUwUYRB97+Pc8ychMSaE4E+BrYWVgCd7e5dYQSxoiIFEjYWVdNiJiVjaSGFhowUkhsLEH2Jhcvsd54nYaQ0USoAYG7WBvWOfhd+R87zFC40N00z2zTdv30xmBti3/2ZBECy3+pZJgXw+f0rSiKQBkt2SOkluSFoh+SqKoplyufylJdIgCNIAJgGMkUzXcEkAEJM0DtqUNAVgwlq7Vc9hGtR1ACiSHCeZlvQGwFClUjkKYAVAexzHFyXNAkiTvEXSury/lTqFRZI9kr4DuGKtfV6L53K5tTAMu+reZwDMkuwC8F5SUFNcr3TSEf4g6dcTuvIP139ba8vGmD5JawB6Adz9o/xMJnMSwJhLvhGG4acm/T/UCBQKhc9xHA8DAMkxx/Ob1PO8UdfDD8Vi8WnCQAw1A+fn599KegbgoOd5Izukkgbc354kjZi1di4pJumx84M7pCRPO/DdXhaD5ILz3QDAXC4XATiQ8H48DMP7jWA2mx00xrxMUB3Rjcs6gE5JZ621H/ewwsdIfgOwHoZhV22klpz883spX1Kf80v1czrnwKtJidlsdnCXnl6r5zEAUK1WpwFskjwXBMFws8SkHvq+f4HkEIDN7e3tmR3SUqm06o4DADzyff9MK2X39/efMMbU5vpBqVRabVzTCUmLJNvb2tpKu5XrFPamUqkFksfd7t9pevry+XxHHMcvSPa4Hr+W9LBarVrP836mUqkjlUqlF8B1kpcBUNKiMeZSoVD4+q97eg/Azdo9lRSTNDXvsC0AUwBuN97TXS9/HMejAAbcpnQC2JC0THIuiqLppMvfsrnN27d/2y+hkCBqr75LOwAAAABJRU5ErkJggg==\" />
            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["dumps_count"]) ? $context["dumps_count"] : $this->getContext($context, "dumps_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>dump()</b>
            </div>
            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 17
                echo "                <div class=\"sf-toolbar-info-piece\">
                    in
                    ";
                // line 19
                if ($this->getAttribute($context["dump"], "file", array())) {
                    // line 20
                    echo "                        ";
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 21
                    echo "                        ";
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 22
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 24
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 26
                    echo "                    ";
                } else {
                    // line 27
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 29
                echo "                    line ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo ":
                    ";
                // line 30
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            <img src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" onload=\"var h = this.parentNode.innerHTML, rx=/<script>(.*?)<\\/script>/g, s; while (s = rx.exec(h)) {eval(s[1]);};\" />
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
        ";
            // line 36
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => true)));
            // line 37
            echo "    ";
        }
        
        $__internal_1a1db53ea0760a7c5722c2ebef6430e8453e20c3bb0ad3db4d375c582ea0aa0b->leave($__internal_1a1db53ea0760a7c5722c2ebef6430e8453e20c3bb0ad3db4d375c582ea0aa0b_prof);

    }

    // line 40
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e2e2f3c6a2c75acad421e88a7ee114dbf388f2da4138074b40b1c47f34c1380 = $this->env->getExtension("native_profiler");
        $__internal_5e2e2f3c6a2c75acad421e88a7ee114dbf388f2da4138074b40b1c47f34c1380->enter($__internal_5e2e2f3c6a2c75acad421e88a7ee114dbf388f2da4138074b40b1c47f34c1380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 41
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 43
        echo "";
        // line 44
        echo "<img alt=\"dump()\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAADdUlEQVRIx71WPWwcVRD+ZneN3NzKiAgiJIrwZ9EQ2xchI+/uvb0g8SOouGtAKQAnSkHSJCZF6jSBUCQFkoNEEILGoaDCQVzeu1sLgeAI4cdyBE2qEMtE6LZA2bvbScGcWRt77+wYpntv5833vu/NzgywDVNK3VZK3d7OWRoQYC+ACgCfiEYB7JZPvzPzNQARgIvGmKt3Bej7/rjjOG8D2D8ggVqn05mJoujKlgCLxaJTKBTOENGRdT5LAH4D8KKsPwUwAWBPxoeZ+Vwcx8eazWZnfWxr/YbneSOu684T0VEB+4uZT3e73ce01k8w8+Ger9a6orV+mJn3AbjAzCkAIqKjruvOe543kstQmF0iorJc9TKA140x13s+5XL5fma+KYBrzgdBsM+yrI+J6PGexK1W67ks0zUMRcayLC/EcfxsFgwAkiRJNnufRqPxnW3bTzPzV7K1v1AonNlQ0jAMJ+TNAGCemac3egPHcdq5WVOr3bJt+yUAv+JvfY/4vj++EcPTIvGf7Xb7gDGmu1HA5eXlpG+q1mq3mPkAAAZAkun/AAZBMJZJ/VMLCwsrmwVbXFxsp2l6ME3Tg3mgxphvAHzSkzYMwycBwAEA27YrkiQJgA/6MajX6+8P+F/OAnhVYlcB/GjJwhe9I2PMH9gh01o3APTU8rNvOCrAV7DzdlXIjAIAhWGYABjKO5Gm6fP1en0+zycMw8MA3svzYebEwv9sJLe7AWA3M79jjJnZSYAwDL+UP+CG1vpBK1OUQUTj/wGpvSLn0mrSMHPUy1al1H07yC4AsEvINFYBu93unGzeQ0Sv9QtUKpWmS6XS9ACYhzIJM7cKGEXRT8z8hXw76XnerrwolmWdtyzrfB92TwF4RZaXjDG/rKmlaZqekNo34jjOh9VqddsZPDk5eS8zfwSAmDll5hP/Kt6NRuMHAGdF2hdWVlZmi8Wis1Uwz/NGhoeHP8v0xLPZWWcNi1ardVyaLgC84bru51NTUw8NCiYz0NdE5PcaRxzHM5uOGM1ms9PpdF7OgD4zNDS0pJQ6pZR6JG+qU0rN2rb9ba+EMfPldrtdWd9T84aod4nozYwPA1hi5p+JqCp7FwGMAXh00CGK+mTahDTmgcdEAG9prb+/q0E4CIIx27Yr0sZGiegBoXITwDUiiph5bpBBeLsVJJEus2W7A2Z3gfLvF5gPAAAAAElFTkSuQmCC\" />";
        // line 45
        echo "";
        // line 46
        echo "</span>
        <strong>dump()</strong>
        <span class=\"count\">
            <span>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_5e2e2f3c6a2c75acad421e88a7ee114dbf388f2da4138074b40b1c47f34c1380->leave($__internal_5e2e2f3c6a2c75acad421e88a7ee114dbf388f2da4138074b40b1c47f34c1380_prof);

    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        $__internal_954c5c322137aa1572de987e2bc0941d863d4ef7c2a834c9480a310077d7c295 = $this->env->getExtension("native_profiler");
        $__internal_954c5c322137aa1572de987e2bc0941d863d4ef7c2a834c9480a310077d7c295->enter($__internal_954c5c322137aa1572de987e2bc0941d863d4ef7c2a834c9480a310077d7c295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 55
        echo "    <h2>dump()</h2>

    <style>
        li.sf-dump {
            list-style-type: disc;
        }
        .sf-dump ol>li {
            padding: 0;
        }
        .sf-dump a {
            cursor: pointer;
        }
        .sf-dump-compact {
            display: none;
        }
    </style>

    ";
        // line 72
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array())) {
            // line 73
            echo "        <ul class=\"alt\">
            ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 75
                echo "            <li class=\"sf-dump sf-reset\">
                in
                ";
                // line 77
                if ($this->getAttribute($context["dump"], "line", array())) {
                    // line 78
                    echo "                    ";
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 79
                    echo "                    ";
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 80
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                    ";
                    } else {
                        // line 82
                        echo "                        <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                    ";
                    }
                    // line 84
                    echo "                ";
                } else {
                    // line 85
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                ";
                }
                // line 87
                echo "                line ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo ":
                <a onclick=\"Sfdump.toggle(this)\">▶</a>
                <span class=\"sf-dump-compact\">
                ";
                // line 90
                if ($this->getAttribute($context["dump"], "fileExcerpt", array())) {
                    echo $this->getAttribute($context["dump"], "fileExcerpt", array());
                } else {
                    echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                }
                // line 91
                echo "                </span>

                ";
                // line 93
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "        </ul>
    ";
        } else {
            // line 98
            echo "        <p>
            <em>No dumped variable</em>
        </p>
    ";
        }
        
        $__internal_954c5c322137aa1572de987e2bc0941d863d4ef7c2a834c9480a310077d7c295->leave($__internal_954c5c322137aa1572de987e2bc0941d863d4ef7c2a834c9480a310077d7c295_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 98,  283 => 96,  274 => 93,  270 => 91,  264 => 90,  257 => 87,  251 => 85,  248 => 84,  240 => 82,  230 => 80,  227 => 79,  224 => 78,  222 => 77,  218 => 75,  214 => 74,  211 => 73,  209 => 72,  190 => 55,  184 => 54,  173 => 49,  168 => 46,  166 => 45,  164 => 44,  162 => 43,  159 => 41,  153 => 40,  145 => 37,  143 => 36,  140 => 35,  136 => 33,  127 => 30,  122 => 29,  116 => 27,  113 => 26,  105 => 24,  95 => 22,  92 => 21,  89 => 20,  87 => 19,  83 => 17,  79 => 16,  74 => 13,  72 => 12,  69 => 11,  64 => 9,  61 => 8,  58 => 7,  56 => 6,  53 => 5,  50 => 4,  44 => 3,  11 => 1,);
    }
}
