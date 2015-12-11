<?php

/* default/beer.html.twig */
class __TwigTemplate_31a3b43e968238dc4daae6be4e59178110e5ce19f4ef5aceb5de1f1b70e58440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/beer.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6660c9e96367078413bd32f51873f2ec9d5d078c4cf82aedf8e564f245c5b942 = $this->env->getExtension("native_profiler");
        $__internal_6660c9e96367078413bd32f51873f2ec9d5d078c4cf82aedf8e564f245c5b942->enter($__internal_6660c9e96367078413bd32f51873f2ec9d5d078c4cf82aedf8e564f245c5b942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/beer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6660c9e96367078413bd32f51873f2ec9d5d078c4cf82aedf8e564f245c5b942->leave($__internal_6660c9e96367078413bd32f51873f2ec9d5d078c4cf82aedf8e564f245c5b942_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_39eb189858bef45529eae9a618c5d7da89f602536b8d22a2ff64d8fdddf02456 = $this->env->getExtension("native_profiler");
        $__internal_39eb189858bef45529eae9a618c5d7da89f602536b8d22a2ff64d8fdddf02456->enter($__internal_39eb189858bef45529eae9a618c5d7da89f602536b8d22a2ff64d8fdddf02456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "  
     ";
        // line 5
        $this->loadTemplate("::header_interna.html.twig", "default/beer.html.twig", 5)->display($context);
        // line 6
        echo "
  ";
        
        $__internal_39eb189858bef45529eae9a618c5d7da89f602536b8d22a2ff64d8fdddf02456->leave($__internal_39eb189858bef45529eae9a618c5d7da89f602536b8d22a2ff64d8fdddf02456_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_14506ec7eb2d26f6786a1c2b900151da81e8fdb6a65e4cf500c0730cade4abf2 = $this->env->getExtension("native_profiler");
        $__internal_14506ec7eb2d26f6786a1c2b900151da81e8fdb6a65e4cf500c0730cade4abf2->enter($__internal_14506ec7eb2d26f6786a1c2b900151da81e8fdb6a65e4cf500c0730cade4abf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t\t\t<div id=\"body\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t<h3>BEER</h3>
\t\t\t\t\t\t<ul class=\"section\">
\t\t\t\t\t\t\t<li class=\"odd\">
\t\t\t\t\t\t\t\t<h2>a place holder</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h2>a place holder</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

";
        
        $__internal_14506ec7eb2d26f6786a1c2b900151da81e8fdb6a65e4cf500c0730cade4abf2->leave($__internal_14506ec7eb2d26f6786a1c2b900151da81e8fdb6a65e4cf500c0730cade4abf2_prof);

    }

    public function getTemplateName()
    {
        return "default/beer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 9,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*   */
/*   {% block header %}*/
/*   */
/*      {% include "::header_interna.html.twig" %}*/
/* */
/*   {% endblock %}*/
/*   */
/* {% block body %}*/
/* */
/* 			<div id="body">*/
/* 				<div class="content">*/
/* 					<div class="body">*/
/* 						<h3>BEER</h3>*/
/* 						<ul class="section">*/
/* 							<li class="odd">*/
/* 								<h2>a place holder</h2>*/
/* 								<ul>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li class="last">*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</li>*/
/* 							<li>*/
/* 								<h2>a place holder</h2>*/
/* 								<ul>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 									<li class="last">*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* {% endblock %}*/
