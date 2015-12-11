<?php

/* ::footer.html.twig */
class __TwigTemplate_edffd66ce19c9b665996d2aaad6e3410e1cc09ed9f7d74d99a47bd93f9f7d5b6 extends Twig_Template
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
        $__internal_fcc61d7b536b177b160abdf74d044c6c90e7d39a8fa34c106fb8d1f9d2ac6d15 = $this->env->getExtension("native_profiler");
        $__internal_fcc61d7b536b177b160abdf74d044c6c90e7d39a8fa34c106fb8d1f9d2ac6d15->enter($__internal_fcc61d7b536b177b160abdf74d044c6c90e7d39a8fa34c106fb8d1f9d2ac6d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        // line 1
        echo " <div id=\"footer\">
                <ul>
                    <li class=\"first\">
                        <ul>
                            <li>
                                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Home</a>
                            </li>
                            <li>
                                <a href=\"about.html\">About</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("food");
        echo "\">Menu</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("beer");
        echo "\">Beer</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("blog");
        echo "\">Blog</a>
                            </li>
                            <li>
                                <a href=\"contact\">Contact Us</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>Follow us:</span> <a href=\"http://www.freewebsitetemplates.com/go/facebook\" class=\"facebook\">&nbsp;</a> <a href=\"http://www.freewebsitetemplates.com/go/twitter\" class=\"twitter\">&nbsp;</a> <a href=\"http://www.freewebsitetemplates.com/go/googleplus\" class=\"googleplus\">&nbsp;</a>
                    </li>
                    <li class=\"last\">
                        <span> &copy; copyright 2012 &copy;. All rights reserved.</span>
                    </li>
                </ul>
            </div>";
        
        $__internal_fcc61d7b536b177b160abdf74d044c6c90e7d39a8fa34c106fb8d1f9d2ac6d15->leave($__internal_fcc61d7b536b177b160abdf74d044c6c90e7d39a8fa34c106fb8d1f9d2ac6d15_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  44 => 15,  38 => 12,  29 => 6,  22 => 1,);
    }
}
/*  <div id="footer">*/
/*                 <ul>*/
/*                     <li class="first">*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{path("homepage")}}">Home</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="about.html">About</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path("food")}}">Menu</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path("beer")}}">Beer</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path("blog")}}">Blog</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="contact">Contact Us</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <span>Follow us:</span> <a href="http://www.freewebsitetemplates.com/go/facebook" class="facebook">&nbsp;</a> <a href="http://www.freewebsitetemplates.com/go/twitter" class="twitter">&nbsp;</a> <a href="http://www.freewebsitetemplates.com/go/googleplus" class="googleplus">&nbsp;</a>*/
/*                     </li>*/
/*                     <li class="last">*/
/*                         <span> &copy; copyright 2012 &copy;. All rights reserved.</span>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
