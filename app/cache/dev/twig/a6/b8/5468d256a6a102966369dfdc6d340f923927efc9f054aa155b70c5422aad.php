<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a6b85468d256a6a102966369dfdc6d340f923927efc9f054aa155b70c5422aad extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9af638420814d84d38f9230ecde0522bfd15fba96013aece7496b03e9aaee8c9 = $this->env->getExtension("native_profiler");
        $__internal_9af638420814d84d38f9230ecde0522bfd15fba96013aece7496b03e9aaee8c9->enter($__internal_9af638420814d84d38f9230ecde0522bfd15fba96013aece7496b03e9aaee8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9af638420814d84d38f9230ecde0522bfd15fba96013aece7496b03e9aaee8c9->leave($__internal_9af638420814d84d38f9230ecde0522bfd15fba96013aece7496b03e9aaee8c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e232d29d34549a538555da69c32df3b55e1e72c24615ce25395c00a309d225f6 = $this->env->getExtension("native_profiler");
        $__internal_e232d29d34549a538555da69c32df3b55e1e72c24615ce25395c00a309d225f6->enter($__internal_e232d29d34549a538555da69c32df3b55e1e72c24615ce25395c00a309d225f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <span>
            <img width=\"13\" height=\"28\" alt=\"AJAX requests\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gUJDAkZ7bv96AAAAP1JREFUSMftlr0NgzAQhZ8RovIQeIdUkdJFWcINFAyQJl0UpU2TAShwwxZ0kVKxAwxBRXOpQEBsfkMRiets2e/T+ex3ZkSENcPCyvH/ALs5KMsXPfZnJJz3bnKDCEoKVo2z2KM7bq252RnoxP0wRx768OKMFgFM4lXoINavxE0Qu0+0KI54vi84OE7rbE3iLQgiUlIwe2oNYm9HYc4H11WQyQCpUiYNt06X8faSN8AGAOyvl9mwas4TXE8JABAAFG6AVEk2KQOpUhYF7iizmypem52QikUwG1ivkw40p7oGQiptJmNtelSRu5Cl4tp+UB1Xt8fOEQcAtn28huIDUf6Q+fofUk0AAAAASUVORK5CYII=\">
            <span class=\"sf-toolbar-ajax-requests\">0</span>
        </span>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b>AJAX requests</b>
            <span class=\"sf-toolbar-ajax-info\"></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        
        $__internal_e232d29d34549a538555da69c32df3b55e1e72c24615ce25395c00a309d225f6->leave($__internal_e232d29d34549a538555da69c32df3b55e1e72c24615ce25395c00a309d225f6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  55 => 10,  48 => 4,  42 => 3,  11 => 1,);
    }
}
