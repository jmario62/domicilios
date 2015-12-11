<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d334aa208379f1e81c4a0cfa804e3ea7492ad771b78304c7c52e136a8b5dd4fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f5c6b71cfc10a6590c3b165672b28b58756e759a0a090921d47bc36fa1a6901e = $this->env->getExtension("native_profiler");
        $__internal_f5c6b71cfc10a6590c3b165672b28b58756e759a0a090921d47bc36fa1a6901e->enter($__internal_f5c6b71cfc10a6590c3b165672b28b58756e759a0a090921d47bc36fa1a6901e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c6b71cfc10a6590c3b165672b28b58756e759a0a090921d47bc36fa1a6901e->leave($__internal_f5c6b71cfc10a6590c3b165672b28b58756e759a0a090921d47bc36fa1a6901e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f46f6fee78df38d289e4b8f6f70e39235a57cca51026e41dc6388586e9b566bc = $this->env->getExtension("native_profiler");
        $__internal_f46f6fee78df38d289e4b8f6f70e39235a57cca51026e41dc6388586e9b566bc->enter($__internal_f46f6fee78df38d289e4b8f6f70e39235a57cca51026e41dc6388586e9b566bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f46f6fee78df38d289e4b8f6f70e39235a57cca51026e41dc6388586e9b566bc->leave($__internal_f46f6fee78df38d289e4b8f6f70e39235a57cca51026e41dc6388586e9b566bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67efbaa1c02f5e71c91ebbb6985b6494f007628bc170dee8ab357c4158ee7eb0 = $this->env->getExtension("native_profiler");
        $__internal_67efbaa1c02f5e71c91ebbb6985b6494f007628bc170dee8ab357c4158ee7eb0->enter($__internal_67efbaa1c02f5e71c91ebbb6985b6494f007628bc170dee8ab357c4158ee7eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67efbaa1c02f5e71c91ebbb6985b6494f007628bc170dee8ab357c4158ee7eb0->leave($__internal_67efbaa1c02f5e71c91ebbb6985b6494f007628bc170dee8ab357c4158ee7eb0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_315cf1de016c2527fa60164923531f16095db3b51690e856e707b26daa005454 = $this->env->getExtension("native_profiler");
        $__internal_315cf1de016c2527fa60164923531f16095db3b51690e856e707b26daa005454->enter($__internal_315cf1de016c2527fa60164923531f16095db3b51690e856e707b26daa005454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_315cf1de016c2527fa60164923531f16095db3b51690e856e707b26daa005454->leave($__internal_315cf1de016c2527fa60164923531f16095db3b51690e856e707b26daa005454_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
