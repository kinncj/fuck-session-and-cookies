<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_89388cbbdf301e413a9cbde3fd21a75c458170af6bb907bb887e3d8efa9eaee3 extends Twig_Template
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
            'head' => array($this, 'block_head'),
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
        $__internal_59dffb76738dbfadedf959a06864507389c10b499614465280697954a4d30ca2 = $this->env->getExtension("native_profiler");
        $__internal_59dffb76738dbfadedf959a06864507389c10b499614465280697954a4d30ca2->enter($__internal_59dffb76738dbfadedf959a06864507389c10b499614465280697954a4d30ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59dffb76738dbfadedf959a06864507389c10b499614465280697954a4d30ca2->leave($__internal_59dffb76738dbfadedf959a06864507389c10b499614465280697954a4d30ca2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74ae1eb189918e374637f3b0e4e226c729af33586d049e09f39924483de1d1b8 = $this->env->getExtension("native_profiler");
        $__internal_74ae1eb189918e374637f3b0e4e226c729af33586d049e09f39924483de1d1b8->enter($__internal_74ae1eb189918e374637f3b0e4e226c729af33586d049e09f39924483de1d1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_74ae1eb189918e374637f3b0e4e226c729af33586d049e09f39924483de1d1b8->leave($__internal_74ae1eb189918e374637f3b0e4e226c729af33586d049e09f39924483de1d1b8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1bba0a93c501a6022f9e5d0f4e08bb8a3afe227af464f8d70fc78e2ef7dbb8f = $this->env->getExtension("native_profiler");
        $__internal_b1bba0a93c501a6022f9e5d0f4e08bb8a3afe227af464f8d70fc78e2ef7dbb8f->enter($__internal_b1bba0a93c501a6022f9e5d0f4e08bb8a3afe227af464f8d70fc78e2ef7dbb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
        
        $__internal_b1bba0a93c501a6022f9e5d0f4e08bb8a3afe227af464f8d70fc78e2ef7dbb8f->leave($__internal_b1bba0a93c501a6022f9e5d0f4e08bb8a3afe227af464f8d70fc78e2ef7dbb8f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39b67d8127e0d948b80b3d37cf7616e845c5ee88ecc87869a8f2917e809c8880 = $this->env->getExtension("native_profiler");
        $__internal_39b67d8127e0d948b80b3d37cf7616e845c5ee88ecc87869a8f2917e809c8880->enter($__internal_39b67d8127e0d948b80b3d37cf7616e845c5ee88ecc87869a8f2917e809c8880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_39b67d8127e0d948b80b3d37cf7616e845c5ee88ecc87869a8f2917e809c8880->leave($__internal_39b67d8127e0d948b80b3d37cf7616e845c5ee88ecc87869a8f2917e809c8880_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  117 => 32,  111 => 28,  109 => 27,  105 => 25,  99 => 24,  90 => 20,  86 => 18,  84 => 17,  78 => 13,  72 => 12,  62 => 9,  56 => 6,  53 => 5,  50 => 4,  44 => 3,  11 => 1,);
    }
}
