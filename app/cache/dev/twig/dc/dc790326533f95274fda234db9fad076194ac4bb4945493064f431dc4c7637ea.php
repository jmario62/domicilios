<?php

/* ::header.html.twig */
class __TwigTemplate_3fa7bcdbb9ea19bf9af6466e885ef08200690ead808817cf9d58dfe30b9ba844 extends Twig_Template
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
        $__internal_eaa54c2e556e23f4fe1a92e5c2a21d8cd18694d7ba07629e7cc1bc8e3117f018 = $this->env->getExtension("native_profiler");
        $__internal_eaa54c2e556e23f4fe1a92e5c2a21d8cd18694d7ba07629e7cc1bc8e3117f018->enter($__internal_eaa54c2e556e23f4fe1a92e5c2a21d8cd18694d7ba07629e7cc1bc8e3117f018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

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
        echo "\"><img src=\"/images/logo.jpg\" width=\"276\" height=\"203\" alt=\"Steak House\" title=\"Steak House\"></a>
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
        
        $__internal_eaa54c2e556e23f4fe1a92e5c2a21d8cd18694d7ba07629e7cc1bc8e3117f018->leave($__internal_eaa54c2e556e23f4fe1a92e5c2a21d8cd18694d7ba07629e7cc1bc8e3117f018_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
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
/*                 <a id="logo" href="{{path("homepage")}}"><img src="/images/logo.jpg" width="276" height="203" alt="Steak House" title="Steak House"></a>*/
/*                 <ul id="navigation">*/
/*                     <li>*/
/*                         <a href="{{path("reservation")}}">RESERVATION</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path("contact")}}">CONTACT US</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
