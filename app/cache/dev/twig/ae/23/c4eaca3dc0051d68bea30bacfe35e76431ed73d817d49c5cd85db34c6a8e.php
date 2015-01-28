<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ae23c4eaca3dc0051d68bea30bacfe35e76431ed73d817d49c5cd85db34c6a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_572adec253427a31635e79a44ef3beb5c5562d53d3acbd7737895593c85cd691 = $this->env->getExtension("native_profiler");
        $__internal_572adec253427a31635e79a44ef3beb5c5562d53d3acbd7737895593c85cd691->enter($__internal_572adec253427a31635e79a44ef3beb5c5562d53d3acbd7737895593c85cd691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_572adec253427a31635e79a44ef3beb5c5562d53d3acbd7737895593c85cd691->leave($__internal_572adec253427a31635e79a44ef3beb5c5562d53d3acbd7737895593c85cd691_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e397264b37a351b497c354d3a18c3c8afe802a9db28cf5977162aa2297fd11e = $this->env->getExtension("native_profiler");
        $__internal_1e397264b37a351b497c354d3a18c3c8afe802a9db28cf5977162aa2297fd11e->enter($__internal_1e397264b37a351b497c354d3a18c3c8afe802a9db28cf5977162aa2297fd11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css", null, true), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e397264b37a351b497c354d3a18c3c8afe802a9db28cf5977162aa2297fd11e->leave($__internal_1e397264b37a351b497c354d3a18c3c8afe802a9db28cf5977162aa2297fd11e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b70185c2bacf85ceb78e130d6f54947d6a7a3eb5abd798e18037a28d01c6a9e = $this->env->getExtension("native_profiler");
        $__internal_4b70185c2bacf85ceb78e130d6f54947d6a7a3eb5abd798e18037a28d01c6a9e->enter($__internal_4b70185c2bacf85ceb78e130d6f54947d6a7a3eb5abd798e18037a28d01c6a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b70185c2bacf85ceb78e130d6f54947d6a7a3eb5abd798e18037a28d01c6a9e->leave($__internal_4b70185c2bacf85ceb78e130d6f54947d6a7a3eb5abd798e18037a28d01c6a9e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b10d33af01f93fde4f6634b11e71a4600dadbd3d91ad190c55f657816b33523b = $this->env->getExtension("native_profiler");
        $__internal_b10d33af01f93fde4f6634b11e71a4600dadbd3d91ad190c55f657816b33523b->enter($__internal_b10d33af01f93fde4f6634b11e71a4600dadbd3d91ad190c55f657816b33523b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
        
        $__internal_b10d33af01f93fde4f6634b11e71a4600dadbd3d91ad190c55f657816b33523b->leave($__internal_b10d33af01f93fde4f6634b11e71a4600dadbd3d91ad190c55f657816b33523b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 12,  80 => 11,  66 => 8,  60 => 7,  50 => 4,  44 => 3,  11 => 1,);
    }
}
