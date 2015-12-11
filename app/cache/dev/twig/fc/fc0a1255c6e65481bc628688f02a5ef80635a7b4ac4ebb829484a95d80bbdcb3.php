<?php

/* ::header_interna.html.twig */
class __TwigTemplate_d8d9a83104b3ae7a3d851c8fcfd214419f10e49c6a7908a87e40d2e0eb593778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb8b1b373560c6fb8f8da365045e2f021ede430fa4cff02667b0e2e3619be9f8 = $this->env->getExtension("native_profiler");
        $__internal_cb8b1b373560c6fb8f8da365045e2f021ede430fa4cff02667b0e2e3619be9f8->enter($__internal_cb8b1b373560c6fb8f8da365045e2f021ede430fa4cff02667b0e2e3619be9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header_interna.html.twig"));

        // line 1
        echo "<div id=\"header\">
                <ul class=\"navigation\">
                    <li>
                        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("food");
        echo "\">OUR FOOD</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("beer");
        echo "\">OUR BEER</a>
                    </li>
                </ul>
                <a id=\"logo\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><img src=\"/images/logo2.jpg\" width=\"276\" height=\"203\" alt=\"Steak House\" title=\"Steak House\"></a>
                <ul id=\"navigation\">
                    <li>
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("reservation");
        echo "\">RESERVATION</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">CONTACT US</a>
                    </li>
                </ul>
            </div>";
        
        $__internal_cb8b1b373560c6fb8f8da365045e2f021ede430fa4cff02667b0e2e3619be9f8->leave($__internal_cb8b1b373560c6fb8f8da365045e2f021ede430fa4cff02667b0e2e3619be9f8_prof);

    }

    public function getTemplateName()
    {
        return "::header_interna.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  45 => 13,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div id="header">*/
/*                 <ul class="navigation">*/
/*                     <li>*/
/*                         <a href="{{path("food")}}">OUR FOOD</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path("beer")}}">OUR BEER</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <a id="logo" href="{{path("homepage")}}"><img src="/images/logo2.jpg" width="276" height="203" alt="Steak House" title="Steak House"></a>*/
/*                 <ul id="navigation">*/
/*                     <li>*/
/*                         <a href="{{path("reservation")}}">RESERVATION</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path("contact")}}">CONTACT US</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
