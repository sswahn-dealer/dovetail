<?php

/* dashboard.html */
class __TwigTemplate_8b853c64ad8ac765c03cb2b4a4bee6de69f6a76665363e6a53a68ae9dda232b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "dashboard.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'toplinks' => array($this, 'block_toplinks'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "        Dovetail . Dashboard
";
    }

    // line 9
    public function block_toplinks($context, array $blocks = array())
    {
        // line 10
        echo "    <button href=\"#\" class=\"btn btn-default btn-sm nav-item nav-link\"
        data-toggle=\"modal\" data-target=\"#components-modal\">
        <i class=\"glyphicon glyphicon-cog\"></i>
        Components
    </button>
";
    }

    // line 18
    public function block_subheader($context, array $blocks = array())
    {
        // line 19
        echo "    <div id=\"subheader\"></div>
    
";
    }

    // line 23
    public function block_scripts($context, array $blocks = array())
    {
        // line 24
        echo "    <script src=\"/js/components/base/Article.js\"></script>
    <script src=\"/js/components/base/Header.js\"></script>
    <script src=\"/js/components/base/Body.js\"></script>
    <script src=\"/js/components/base/Footer.js\"></script>
    <script src=\"/js/components/Dashboard.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  60 => 23,  54 => 19,  51 => 18,  42 => 10,  39 => 9,  34 => 5,  31 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dashboard.html", "/var/www/html/dovetail/App/Views/Templates/dashboard.html");
    }
}
