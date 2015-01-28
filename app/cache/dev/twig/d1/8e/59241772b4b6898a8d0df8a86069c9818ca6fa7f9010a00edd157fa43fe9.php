<?php

/* default/index.html.twig */
class __TwigTemplate_d18e59241772b4b6898a8d0df8a86069c9818ca6fa7f9010a00edd157fa43fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        $__internal_a189bb77cb38adefaadd47dcf1bec1e25184398fd85c05b3b7f1eb15a1e496c4 = $this->env->getExtension("native_profiler");
        $__internal_a189bb77cb38adefaadd47dcf1bec1e25184398fd85c05b3b7f1eb15a1e496c4->enter($__internal_a189bb77cb38adefaadd47dcf1bec1e25184398fd85c05b3b7f1eb15a1e496c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a189bb77cb38adefaadd47dcf1bec1e25184398fd85c05b3b7f1eb15a1e496c4->leave($__internal_a189bb77cb38adefaadd47dcf1bec1e25184398fd85c05b3b7f1eb15a1e496c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6497f3263527ca0349496d5607d8fe9c05ad6d7833807b3d0e15275b8a5480af = $this->env->getExtension("native_profiler");
        $__internal_6497f3263527ca0349496d5607d8fe9c05ad6d7833807b3d0e15275b8a5480af->enter($__internal_6497f3263527ca0349496d5607d8fe9c05ad6d7833807b3d0e15275b8a5480af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_6497f3263527ca0349496d5607d8fe9c05ad6d7833807b3d0e15275b8a5480af->leave($__internal_6497f3263527ca0349496d5607d8fe9c05ad6d7833807b3d0e15275b8a5480af_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  11 => 1,);
    }
}
