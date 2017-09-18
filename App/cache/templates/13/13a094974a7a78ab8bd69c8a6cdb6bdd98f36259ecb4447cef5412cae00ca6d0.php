<?php

/* homepage.html */
class __TwigTemplate_fe4d7ac064b4a7a0876ea91ff882e03441b6168e97c3c664f44ad8dd83c31c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "homepage.html", 1);
        $this->blocks = array(
            'subheader' => array($this, 'block_subheader'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <h1 class=\"lead\">Homepage Template</h1>
    </div>
";
    }

    // line 10
    public function block_scripts($context, array $blocks = array())
    {
        // line 11
        echo "    <!-- <script src=\"\"></script> -->
";
    }

    public function getTemplateName()
    {
        return "homepage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepage.html", "/var/www/html/dovetail/App/Views/Templates/homepage.html");
    }
}
