<?php

/* base.html.twig */
class __TwigTemplate_a32808bf19764de67b743d48b15bf0102e5aaa38499271abad64ad2a2d63c70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd8c1ba5904d3cf7c01ef154c219fcd062ce058ea7f4137d4c290f7cc4d1fd74 = $this->env->getExtension("native_profiler");
        $__internal_bd8c1ba5904d3cf7c01ef154c219fcd062ce058ea7f4137d4c290f7cc4d1fd74->enter($__internal_bd8c1ba5904d3cf7c01ef154c219fcd062ce058ea7f4137d4c290f7cc4d1fd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bd8c1ba5904d3cf7c01ef154c219fcd062ce058ea7f4137d4c290f7cc4d1fd74->leave($__internal_bd8c1ba5904d3cf7c01ef154c219fcd062ce058ea7f4137d4c290f7cc4d1fd74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_38405e9686dbe9a3e5fe61013af56eaa68ae2f1986e31af9fd34a5d0db2b4407 = $this->env->getExtension("native_profiler");
        $__internal_38405e9686dbe9a3e5fe61013af56eaa68ae2f1986e31af9fd34a5d0db2b4407->enter($__internal_38405e9686dbe9a3e5fe61013af56eaa68ae2f1986e31af9fd34a5d0db2b4407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_38405e9686dbe9a3e5fe61013af56eaa68ae2f1986e31af9fd34a5d0db2b4407->leave($__internal_38405e9686dbe9a3e5fe61013af56eaa68ae2f1986e31af9fd34a5d0db2b4407_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e090ee8057a02eeebea0c95c74e1f4d5f65f602f0af7706c5d8007285b0bf5a5 = $this->env->getExtension("native_profiler");
        $__internal_e090ee8057a02eeebea0c95c74e1f4d5f65f602f0af7706c5d8007285b0bf5a5->enter($__internal_e090ee8057a02eeebea0c95c74e1f4d5f65f602f0af7706c5d8007285b0bf5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e090ee8057a02eeebea0c95c74e1f4d5f65f602f0af7706c5d8007285b0bf5a5->leave($__internal_e090ee8057a02eeebea0c95c74e1f4d5f65f602f0af7706c5d8007285b0bf5a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_20a80235707a8c8ca56a86f1ffd4ce6020bda8e5206429856e9562cf3c671ca4 = $this->env->getExtension("native_profiler");
        $__internal_20a80235707a8c8ca56a86f1ffd4ce6020bda8e5206429856e9562cf3c671ca4->enter($__internal_20a80235707a8c8ca56a86f1ffd4ce6020bda8e5206429856e9562cf3c671ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20a80235707a8c8ca56a86f1ffd4ce6020bda8e5206429856e9562cf3c671ca4->leave($__internal_20a80235707a8c8ca56a86f1ffd4ce6020bda8e5206429856e9562cf3c671ca4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c45388aa930cb8903d7ae0764962e0620ac7fc6f4f27a1c2233172074e45697 = $this->env->getExtension("native_profiler");
        $__internal_5c45388aa930cb8903d7ae0764962e0620ac7fc6f4f27a1c2233172074e45697->enter($__internal_5c45388aa930cb8903d7ae0764962e0620ac7fc6f4f27a1c2233172074e45697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5c45388aa930cb8903d7ae0764962e0620ac7fc6f4f27a1c2233172074e45697->leave($__internal_5c45388aa930cb8903d7ae0764962e0620ac7fc6f4f27a1c2233172074e45697_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
