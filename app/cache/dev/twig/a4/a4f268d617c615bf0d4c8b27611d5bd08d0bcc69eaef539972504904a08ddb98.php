<?php

/* default/contact.html.twig */
class __TwigTemplate_8a3b51205568d062104e84db5ba1d4544fade30a53e2d5b8461aaa8ce39d393e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
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
        $__internal_e0cb637bf1a97dac5d197350555382bd99241f8e1917323246ed5d15248b55f0 = $this->env->getExtension("native_profiler");
        $__internal_e0cb637bf1a97dac5d197350555382bd99241f8e1917323246ed5d15248b55f0->enter($__internal_e0cb637bf1a97dac5d197350555382bd99241f8e1917323246ed5d15248b55f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0cb637bf1a97dac5d197350555382bd99241f8e1917323246ed5d15248b55f0->leave($__internal_e0cb637bf1a97dac5d197350555382bd99241f8e1917323246ed5d15248b55f0_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_1e718a78f679ba24c50e9d6cb98f286d7cee1cc3fca680f87f6c72335a196321 = $this->env->getExtension("native_profiler");
        $__internal_1e718a78f679ba24c50e9d6cb98f286d7cee1cc3fca680f87f6c72335a196321->enter($__internal_1e718a78f679ba24c50e9d6cb98f286d7cee1cc3fca680f87f6c72335a196321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "  
     ";
        // line 5
        $this->loadTemplate("::header_interna.html.twig", "default/contact.html.twig", 5)->display($context);
        // line 6
        echo "
  ";
        
        $__internal_1e718a78f679ba24c50e9d6cb98f286d7cee1cc3fca680f87f6c72335a196321->leave($__internal_1e718a78f679ba24c50e9d6cb98f286d7cee1cc3fca680f87f6c72335a196321_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_779e500b993b4dabc813a3948e9221f747ed464300b23c951985fc427d63bfaa = $this->env->getExtension("native_profiler");
        $__internal_779e500b993b4dabc813a3948e9221f747ed464300b23c951985fc427d63bfaa->enter($__internal_779e500b993b4dabc813a3948e9221f747ed464300b23c951985fc427d63bfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t\t\t<div id=\"body\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t<h2>CONTACT US</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h4>You can replace all this text with your own text</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tThis website template has been designed by <a href=\"http://www.freewebsitetemplates.com/\">Free Website Templates</a> for you, for free. You can replace all this text with your own text
\t\t\t\t\t\t\t\tYou can remove any links to our website from this website template, you're free to use this website template without linking back to us.
\t\t\t\t\t\t\t\tIf you're having a problems editing this temlate, then don't hesitate to ask for help on the <a href=\"http://www.freewebsitetemplates.com/forums\">Forums</a>.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div id=\"contact\">
\t\t\t\t\t\t\t<label><span>Store Location</span>:32 Morbi Suscipit Semquis Aliquet Consequat, 1234</label>
\t\t\t\t\t\t\t<label><span>Store hours</span>:Monday to Sunday : 10:30am - 9:30pm</label>
\t\t\t\t\t\t\t<label><span>Reservation Number</span>:(864) 232-3706</label>
\t\t\t\t\t\t\t<label><span>Office Phone Number</span>:(864) 232-3553</label>
\t\t\t\t\t\t\t<label><span>Fax Number</span>:(864) 232-4160</label>
\t\t\t\t\t\t\t<label><span>Email</span>:emailus@companyname.com</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
";
        
        $__internal_779e500b993b4dabc813a3948e9221f747ed464300b23c951985fc427d63bfaa->leave($__internal_779e500b993b4dabc813a3948e9221f747ed464300b23c951985fc427d63bfaa_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
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
/* */
/* 			<div id="body">*/
/* 				<div class="content">*/
/* 					<div class="body">*/
/* 						<h2>CONTACT US</h2>*/
/* 						<ul>*/
/* 							<li>*/
/* 								<h4>You can replace all this text with your own text</h4>*/
/* 								<p>*/
/* 									This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text*/
/* 								You can remove any links to our website from this website template, you're free to use this website template without linking back to us.*/
/* 								If you're having a problems editing this temlate, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums">Forums</a>.*/
/* 								</p>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<div id="contact">*/
/* 							<label><span>Store Location</span>:32 Morbi Suscipit Semquis Aliquet Consequat, 1234</label>*/
/* 							<label><span>Store hours</span>:Monday to Sunday : 10:30am - 9:30pm</label>*/
/* 							<label><span>Reservation Number</span>:(864) 232-3706</label>*/
/* 							<label><span>Office Phone Number</span>:(864) 232-3553</label>*/
/* 							<label><span>Fax Number</span>:(864) 232-4160</label>*/
/* 							<label><span>Email</span>:emailus@companyname.com</label>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* {% endblock %}				*/
