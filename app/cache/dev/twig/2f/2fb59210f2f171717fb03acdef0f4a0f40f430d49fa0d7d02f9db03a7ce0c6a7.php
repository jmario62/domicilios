<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0e386e6575ed68573abaa75c720b6f696234463ce5b0802df7264a16368fea1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5ce7f5660835f58fca04f8d324894b2b99186dc2acb7d41dfe8a94dde18fa40 = $this->env->getExtension("native_profiler");
        $__internal_b5ce7f5660835f58fca04f8d324894b2b99186dc2acb7d41dfe8a94dde18fa40->enter($__internal_b5ce7f5660835f58fca04f8d324894b2b99186dc2acb7d41dfe8a94dde18fa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ce7f5660835f58fca04f8d324894b2b99186dc2acb7d41dfe8a94dde18fa40->leave($__internal_b5ce7f5660835f58fca04f8d324894b2b99186dc2acb7d41dfe8a94dde18fa40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb99fa6af3f0b1ba7ed2e2285bf7e9f7a3e88be56cd05aa7a3e73d4a41f8b8cb = $this->env->getExtension("native_profiler");
        $__internal_bb99fa6af3f0b1ba7ed2e2285bf7e9f7a3e88be56cd05aa7a3e73d4a41f8b8cb->enter($__internal_bb99fa6af3f0b1ba7ed2e2285bf7e9f7a3e88be56cd05aa7a3e73d4a41f8b8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bb99fa6af3f0b1ba7ed2e2285bf7e9f7a3e88be56cd05aa7a3e73d4a41f8b8cb->leave($__internal_bb99fa6af3f0b1ba7ed2e2285bf7e9f7a3e88be56cd05aa7a3e73d4a41f8b8cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbf6d54cf4f6ca22b4d61dd9355a7e5c479150f3d0edeab18bcd99243f7483b8 = $this->env->getExtension("native_profiler");
        $__internal_cbf6d54cf4f6ca22b4d61dd9355a7e5c479150f3d0edeab18bcd99243f7483b8->enter($__internal_cbf6d54cf4f6ca22b4d61dd9355a7e5c479150f3d0edeab18bcd99243f7483b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cbf6d54cf4f6ca22b4d61dd9355a7e5c479150f3d0edeab18bcd99243f7483b8->leave($__internal_cbf6d54cf4f6ca22b4d61dd9355a7e5c479150f3d0edeab18bcd99243f7483b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5be73964275b393b6b4451907417198072d0d5e37909037d2a790b5932b8ca5a = $this->env->getExtension("native_profiler");
        $__internal_5be73964275b393b6b4451907417198072d0d5e37909037d2a790b5932b8ca5a->enter($__internal_5be73964275b393b6b4451907417198072d0d5e37909037d2a790b5932b8ca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5be73964275b393b6b4451907417198072d0d5e37909037d2a790b5932b8ca5a->leave($__internal_5be73964275b393b6b4451907417198072d0d5e37909037d2a790b5932b8ca5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
