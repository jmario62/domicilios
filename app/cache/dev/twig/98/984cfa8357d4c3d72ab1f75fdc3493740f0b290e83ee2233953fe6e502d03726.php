<?php

/* default/food.html.twig */
class __TwigTemplate_4477eb4061653388dce1ffa47872ab4f2a4025ebcbdb62bcc61df8cd8f218f2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/food.html.twig", 1);
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
        $__internal_8650910f3eee9f56609f7f3eedbd55e6be795fbb98330e572d277d8a65a63345 = $this->env->getExtension("native_profiler");
        $__internal_8650910f3eee9f56609f7f3eedbd55e6be795fbb98330e572d277d8a65a63345->enter($__internal_8650910f3eee9f56609f7f3eedbd55e6be795fbb98330e572d277d8a65a63345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/food.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8650910f3eee9f56609f7f3eedbd55e6be795fbb98330e572d277d8a65a63345->leave($__internal_8650910f3eee9f56609f7f3eedbd55e6be795fbb98330e572d277d8a65a63345_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f7bb06112f5979e68cfeb4cdb73d2efd788e7211d34f53722b340a3bff0bda2c = $this->env->getExtension("native_profiler");
        $__internal_f7bb06112f5979e68cfeb4cdb73d2efd788e7211d34f53722b340a3bff0bda2c->enter($__internal_f7bb06112f5979e68cfeb4cdb73d2efd788e7211d34f53722b340a3bff0bda2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "  
     ";
        // line 5
        $this->loadTemplate("::header_interna.html.twig", "default/food.html.twig", 5)->display($context);
        // line 6
        echo "
  ";
        
        $__internal_f7bb06112f5979e68cfeb4cdb73d2efd788e7211d34f53722b340a3bff0bda2c->leave($__internal_f7bb06112f5979e68cfeb4cdb73d2efd788e7211d34f53722b340a3bff0bda2c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6668000319a8126280d3b9ade27ad48802a33831c113fda202389431465ff63 = $this->env->getExtension("native_profiler");
        $__internal_d6668000319a8126280d3b9ade27ad48802a33831c113fda202389431465ff63->enter($__internal_d6668000319a8126280d3b9ade27ad48802a33831c113fda202389431465ff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div id=\"body\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t<h3>MENU</h3>
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
\t\t\t\t\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"food.html\">This is just a place holder</a></h2>
\t\t\t\t\t\t\t\t\t\t<span>\$00.00</span>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tYou can replace all this text with your own text.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
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
\t\t\t</div>
";
        
        $__internal_d6668000319a8126280d3b9ade27ad48802a33831c113fda202389431465ff63->leave($__internal_d6668000319a8126280d3b9ade27ad48802a33831c113fda202389431465ff63_prof);

    }

    public function getTemplateName()
    {
        return "default/food.html.twig";
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
/* */
/*   {% block header %}*/
/*   */
/*      {% include "::header_interna.html.twig" %}*/
/* */
/*   {% endblock %}*/
/* */
/* {% block body %}*/
/* <div id="body">*/
/* 				<div class="content">*/
/* 					<div class="body">*/
/* 						<h3>MENU</h3>*/
/* 						<ul class="section">*/
/* 							<li class="odd">*/
/* 								<h2>a place holder</h2>*/
/* 								<ul>*/
/* 									<li>*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text. */
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
/* 									<li class="last">*/
/* 										<h2><a href="food.html">This is just a place holder</a></h2>*/
/* 										<span>$00.00</span>*/
/* 										<p>*/
/* 											You can replace all this text with your own text.*/
/* 										</p>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</li>*/
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
/* 			</div>*/
/* {% endblock %}*/
