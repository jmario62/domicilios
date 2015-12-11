<?php

/* base.html.twig */
class __TwigTemplate_72459c391cf6fed7003e8aef863d21566223a4fd6a307c348438be7d3f21e605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f69b386269ce50bf935ad86f39186a61269e176e2c62fe9d78b22fc432fc0a4 = $this->env->getExtension("native_profiler");
        $__internal_9f69b386269ce50bf935ad86f39186a61269e176e2c62fe9d78b22fc432fc0a4->enter($__internal_9f69b386269ce50bf935ad86f39186a61269e176e2c62fe9d78b22fc432fc0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <title>Steak House Steak House Website Template</title>
    <meta charset=\"utf-8\">
    <link href=\"/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
    <!--[if IE 6]>
        <link href=\"/css/ie6.css\" rel=\"stylesheet\" type=\"text/css\">
    <![endif]-->
    <!--[if IE 7]>
        <link href=\"/css/ie7.css\" rel=\"stylesheet\" type=\"text/css\">
    <![endif]-->
</head>
<body>
    <div id=\"background\">
        <div id=\"page\">
            ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "
            ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "            
           ";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        // line 28
        echo "        </div>
    </div>
</body>
</html>";
        
        $__internal_9f69b386269ce50bf935ad86f39186a61269e176e2c62fe9d78b22fc432fc0a4->leave($__internal_9f69b386269ce50bf935ad86f39186a61269e176e2c62fe9d78b22fc432fc0a4_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_45e4dae5c3d40f41661287275cd9802c55ba5e2230cb96f11bfad8b2fbe73ae5 = $this->env->getExtension("native_profiler");
        $__internal_45e4dae5c3d40f41661287275cd9802c55ba5e2230cb96f11bfad8b2fbe73ae5->enter($__internal_45e4dae5c3d40f41661287275cd9802c55ba5e2230cb96f11bfad8b2fbe73ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "                ";
        $this->loadTemplate("::header.html.twig", "base.html.twig", 19)->display($context);
        // line 20
        echo "            ";
        
        $__internal_45e4dae5c3d40f41661287275cd9802c55ba5e2230cb96f11bfad8b2fbe73ae5->leave($__internal_45e4dae5c3d40f41661287275cd9802c55ba5e2230cb96f11bfad8b2fbe73ae5_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c466f250222a57e2c961129e5b16241a85076647f9c73c5b52bc26c449c8dc4 = $this->env->getExtension("native_profiler");
        $__internal_2c466f250222a57e2c961129e5b16241a85076647f9c73c5b52bc26c449c8dc4->enter($__internal_2c466f250222a57e2c961129e5b16241a85076647f9c73c5b52bc26c449c8dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "            ";
        
        $__internal_2c466f250222a57e2c961129e5b16241a85076647f9c73c5b52bc26c449c8dc4->leave($__internal_2c466f250222a57e2c961129e5b16241a85076647f9c73c5b52bc26c449c8dc4_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7275384c96ba281dc0182f8fa7dc7b820401b0416106ae8cf91e6a0853acf331 = $this->env->getExtension("native_profiler");
        $__internal_7275384c96ba281dc0182f8fa7dc7b820401b0416106ae8cf91e6a0853acf331->enter($__internal_7275384c96ba281dc0182f8fa7dc7b820401b0416106ae8cf91e6a0853acf331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 26
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "base.html.twig", 26)->display($context);
        // line 27
        echo "            ";
        
        $__internal_7275384c96ba281dc0182f8fa7dc7b820401b0416106ae8cf91e6a0853acf331->leave($__internal_7275384c96ba281dc0182f8fa7dc7b820401b0416106ae8cf91e6a0853acf331_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  101 => 26,  95 => 25,  88 => 23,  82 => 22,  75 => 20,  72 => 19,  66 => 18,  56 => 28,  54 => 25,  51 => 24,  49 => 22,  46 => 21,  44 => 18,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!-- Website template by freewebsitetemplates.com -->*/
/* <html>*/
/* <head>*/
/*     <title>Steak House Steak House Website Template</title>*/
/*     <meta charset="utf-8">*/
/*     <link href="/css/style.css" rel="stylesheet" type="text/css">*/
/*     <!--[if IE 6]>*/
/*         <link href="/css/ie6.css" rel="stylesheet" type="text/css">*/
/*     <![endif]-->*/
/*     <!--[if IE 7]>*/
/*         <link href="/css/ie7.css" rel="stylesheet" type="text/css">*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/*     <div id="background">*/
/*         <div id="page">*/
/*             {% block header %}*/
/*                 {% include "::header.html.twig" %}*/
/*             {% endblock %}*/
/* */
/*             {% block body %}*/
/*             {% endblock %}*/
/*             */
/*            {% block footer %}*/
/*                 {% include "::footer.html.twig" %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* </body>*/
/* </html>*/
