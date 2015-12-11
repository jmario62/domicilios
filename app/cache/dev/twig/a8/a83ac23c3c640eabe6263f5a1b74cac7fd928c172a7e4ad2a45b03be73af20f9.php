<?php

/* default/homepage.html.twig */
class __TwigTemplate_1f43cd43d81b608410cc5e3dc64af5b8fc18b1d640d86bfcd644458c35dc9a08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2841336533fd575009c2484dcf3a74e624f7495c9cbae2f694dc048419a2ff4 = $this->env->getExtension("native_profiler");
        $__internal_c2841336533fd575009c2484dcf3a74e624f7495c9cbae2f694dc048419a2ff4->enter($__internal_c2841336533fd575009c2484dcf3a74e624f7495c9cbae2f694dc048419a2ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2841336533fd575009c2484dcf3a74e624f7495c9cbae2f694dc048419a2ff4->leave($__internal_c2841336533fd575009c2484dcf3a74e624f7495c9cbae2f694dc048419a2ff4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bfa45c80eca553a19307da17d5d0a896cbb6e6b77e28b01aff5612e5f191c80 = $this->env->getExtension("native_profiler");
        $__internal_8bfa45c80eca553a19307da17d5d0a896cbb6e6b77e28b01aff5612e5f191c80->enter($__internal_8bfa45c80eca553a19307da17d5d0a896cbb6e6b77e28b01aff5612e5f191c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "           <div id=\"body\">
                <div class=\"slider\">
                    <ul>
                        <li class=\"first\">
                            <h2>This is just a place holder</h2>
                            <img src=\"images/nine-dollars.gif\" alt=\"\">
                            <p>
                                This is just a place holder, so you can see what the site would look like.
                            </p>
                            <a href=\"reservation.html\">BOOK A TABLE</a>
                        </li>
                        <li>
                            <a href=\"index.html\"> <img src=\"images/barbeque.jpg\" width=\"640\" height=\"331\" alt=\"Steak House\" title=\"Steak House\"></a>
                        </li>
                    </ul>
                </div>
                <ul id=\"featured\">
                    <li class=\"first\">
                        <a href=\"food.html\"><img src=\"images/food-menu.jpg\" alt=\"steak house\" title=\"steak house\"></a>
                    <li>
                    <li>
                        <a href=\"beer.html\"><img src=\"images/beer.jpg\" alt=\"steak house\" title=\"steak house\"></a>
                    <li>
                </ul>
                <div class=\"section\">
                    <h3>\$7 LUNCH & DINNER BUFFET </h3>
                    <p>
                        This is a place holder, so you can see what the site would look like.
                    </p>
                </div>
                <div id=\"content\">
                    <div class=\"article\">
                        <ul>
                            <li>
                                <h2><a href=\"#\">About the company</a></h2>
                                <a href=\"#\"><img src=\"images/waiter.jpg\" width=\"162\" height=\"101\" alt=\"steak house\" title=\"steak house\"></a>
                                <p>
                                    This is just a place holder, so you can see what the site would look like. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. <a href=\"#\">(more)</a>
                                </p>
                            </li>
                            <li>
                                <h2><a href=\"#\">OUR humble beginnings</a></h2>
                                <a href=\"#\"><img src=\"images/food.jpg\" width=\"162\" height=\"122\" alt=\"steak house\" title=\"steak house\"></a>
                                <p>
                                    You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. This is just a place holder, so you can see what the site would look like. <a href=\"#\">(more)</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class=\"aside\">
                        <h3>blog</h3>
                        <ul>
                            <li>
                                <h2>This is just a place holder</h2>
                                <p>
                                    You can remove any link to our website from this website template. <a href=\"#\">(more)</a>
                                </p>
                            </li>
                            <li>
                                <h2>This is just a place holder</h2>
                                <p>
                                    This is just a place holder, so you can see what the site would look like. <a href=\"#\">(more)</a>
                                </p>
                            </li>
                            <li class=\"last\">
                                <h2>This is just a place holder</h2>
                                <p>
                                    You're free to use this website template without linking back to us. <a href=\"#\">(more)</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>     
";
        
        $__internal_8bfa45c80eca553a19307da17d5d0a896cbb6e6b77e28b01aff5612e5f191c80->leave($__internal_8bfa45c80eca553a19307da17d5d0a896cbb6e6b77e28b01aff5612e5f191c80_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*            <div id="body">*/
/*                 <div class="slider">*/
/*                     <ul>*/
/*                         <li class="first">*/
/*                             <h2>This is just a place holder</h2>*/
/*                             <img src="images/nine-dollars.gif" alt="">*/
/*                             <p>*/
/*                                 This is just a place holder, so you can see what the site would look like.*/
/*                             </p>*/
/*                             <a href="reservation.html">BOOK A TABLE</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html"> <img src="images/barbeque.jpg" width="640" height="331" alt="Steak House" title="Steak House"></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <ul id="featured">*/
/*                     <li class="first">*/
/*                         <a href="food.html"><img src="images/food-menu.jpg" alt="steak house" title="steak house"></a>*/
/*                     <li>*/
/*                     <li>*/
/*                         <a href="beer.html"><img src="images/beer.jpg" alt="steak house" title="steak house"></a>*/
/*                     <li>*/
/*                 </ul>*/
/*                 <div class="section">*/
/*                     <h3>$7 LUNCH & DINNER BUFFET </h3>*/
/*                     <p>*/
/*                         This is a place holder, so you can see what the site would look like.*/
/*                     </p>*/
/*                 </div>*/
/*                 <div id="content">*/
/*                     <div class="article">*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <h2><a href="#">About the company</a></h2>*/
/*                                 <a href="#"><img src="images/waiter.jpg" width="162" height="101" alt="steak house" title="steak house"></a>*/
/*                                 <p>*/
/*                                     This is just a place holder, so you can see what the site would look like. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. <a href="#">(more)</a>*/
/*                                 </p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <h2><a href="#">OUR humble beginnings</a></h2>*/
/*                                 <a href="#"><img src="images/food.jpg" width="162" height="122" alt="steak house" title="steak house"></a>*/
/*                                 <p>*/
/*                                     You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. This is just a place holder, so you can see what the site would look like. <a href="#">(more)</a>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="aside">*/
/*                         <h3>blog</h3>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <h2>This is just a place holder</h2>*/
/*                                 <p>*/
/*                                     You can remove any link to our website from this website template. <a href="#">(more)</a>*/
/*                                 </p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <h2>This is just a place holder</h2>*/
/*                                 <p>*/
/*                                     This is just a place holder, so you can see what the site would look like. <a href="#">(more)</a>*/
/*                                 </p>*/
/*                             </li>*/
/*                             <li class="last">*/
/*                                 <h2>This is just a place holder</h2>*/
/*                                 <p>*/
/*                                     You're free to use this website template without linking back to us. <a href="#">(more)</a>*/
/*                                 </p>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>     */
/* {% endblock %}*/
