<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8a43d19648cc793d242fad32ba646c4054d523910cfdb9a43908edb7d5c2264d extends Twig_Template
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
        $__internal_78bbd03233ad39aebadeef322e736b0c793a9b42ce2d7134f9706fb06857762c = $this->env->getExtension("native_profiler");
        $__internal_78bbd03233ad39aebadeef322e736b0c793a9b42ce2d7134f9706fb06857762c->enter($__internal_78bbd03233ad39aebadeef322e736b0c793a9b42ce2d7134f9706fb06857762c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bbd03233ad39aebadeef322e736b0c793a9b42ce2d7134f9706fb06857762c->leave($__internal_78bbd03233ad39aebadeef322e736b0c793a9b42ce2d7134f9706fb06857762c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_305fa68bee430b2b9fad2dca53405fb92bf469f3a6420a1f2eac9f16940d7b73 = $this->env->getExtension("native_profiler");
        $__internal_305fa68bee430b2b9fad2dca53405fb92bf469f3a6420a1f2eac9f16940d7b73->enter($__internal_305fa68bee430b2b9fad2dca53405fb92bf469f3a6420a1f2eac9f16940d7b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_305fa68bee430b2b9fad2dca53405fb92bf469f3a6420a1f2eac9f16940d7b73->leave($__internal_305fa68bee430b2b9fad2dca53405fb92bf469f3a6420a1f2eac9f16940d7b73_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fcaf39c2a8a88ee3910b068f9eac1993aacb56997c53e7a0f6c3a073308949e = $this->env->getExtension("native_profiler");
        $__internal_9fcaf39c2a8a88ee3910b068f9eac1993aacb56997c53e7a0f6c3a073308949e->enter($__internal_9fcaf39c2a8a88ee3910b068f9eac1993aacb56997c53e7a0f6c3a073308949e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9fcaf39c2a8a88ee3910b068f9eac1993aacb56997c53e7a0f6c3a073308949e->leave($__internal_9fcaf39c2a8a88ee3910b068f9eac1993aacb56997c53e7a0f6c3a073308949e_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2067cbc7eaccfe2b094479407c278402cd153dc8134a45dbdca434cc67b996ee = $this->env->getExtension("native_profiler");
        $__internal_2067cbc7eaccfe2b094479407c278402cd153dc8134a45dbdca434cc67b996ee->enter($__internal_2067cbc7eaccfe2b094479407c278402cd153dc8134a45dbdca434cc67b996ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2067cbc7eaccfe2b094479407c278402cd153dc8134a45dbdca434cc67b996ee->leave($__internal_2067cbc7eaccfe2b094479407c278402cd153dc8134a45dbdca434cc67b996ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  72 => 13,  61 => 7,  55 => 6,  44 => 3,  11 => 1,);
    }
}
