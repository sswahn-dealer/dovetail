<?php

/* base.html */
class __TwigTemplate_2d17dc1872becfce1f5015d8b45136928904ec53c5733da12f91f1f9f590038a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headscripts' => array($this, 'block_headscripts'),
            'topnav' => array($this, 'block_topnav'),
            'toplinks' => array($this, 'block_toplinks'),
            'subheader' => array($this, 'block_subheader'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>
";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"theme-color\" content=\"#16283a\">
        <meta name=\"description\" content=\"Dovetail Client Services Business Intelligence Dashboard\">
        
        <link href=\"/assets/font-awesome/css/font-awesome.css\" rel=\"stylsheet\">
        <link href=\"/assets/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        <link href=\"/css/dovetail.css\" rel=\"stylesheet\">
        
        <link rel=\"shortcut icon\" href=\"\"> <!-- favicon -->
        
        <script src=\"/assets/jquery/jquery-3.2.1.min.js\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        
";
        // line 24
        $this->displayBlock('headscripts', $context, $blocks);
        // line 26
        echo "    </head>
    <body class=\"faded-bg\">
        ";
        // line 28
        $this->displayBlock('topnav', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('subheader', $context, $blocks);
        // line 52
        echo "        <main class=\"container\" id='root'>

            <!--js components -->
        ";
        // line 55
        $this->displayBlock('main', $context, $blocks);
        // line 57
        echo "        </main>
        <footer class=\"container\">
        ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "        <p id=\"copyright\">&copy; Dealer.com</p>
        </footer>
        <script src=\"/js/Core.js\"></script>
        ";
        // line 64
        $this->displayBlock('scripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "            Dovetail
";
    }

    // line 24
    public function block_headscripts($context, array $blocks = array())
    {
        echo "        
";
    }

    // line 28
    public function block_topnav($context, array $blocks = array())
    {
        // line 29
        echo "        <nav class=\"top-nav container navbar navbar-light\">
            <div class=\"navbar-nav\">
                <a href=\"/dashboard\" class=\"btn btn-default btn-sm nav-item nav-link\">
                    <i class=\"glyphicon glyphicon-home\"></i>
                    Home
                </a>
                <a href=\"/contact\" class=\"btn btn-default btn-sm nav-item nav-link\">
                    <i class=\"glyphicon glyphicon-envelope\"></i>
                    Contact
                </a>
                
                ";
        // line 40
        $this->displayBlock('toplinks', $context, $blocks);
        // line 42
        echo "            </div>
            <form class=\"form-inline has-feedback pull-right\" role=\"search\">
                <input type=\"text\" class=\"form-control input-sm\" id=\"search-box\" placeholder=\"Search\">
                <i class=\"text-muted glyphicon glyphicon-search form-control-feedback\" id=\"search-icon\"></i>
            </form>
        </nav>
        ";
    }

    // line 40
    public function block_toplinks($context, array $blocks = array())
    {
        // line 41
        echo "                ";
    }

    // line 50
    public function block_subheader($context, array $blocks = array())
    {
        // line 51
        echo "        ";
    }

    // line 55
    public function block_main($context, array $blocks = array())
    {
        // line 56
        echo "        ";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "        ";
    }

    // line 64
    public function block_scripts($context, array $blocks = array())
    {
        // line 65
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  163 => 64,  159 => 60,  156 => 59,  152 => 56,  149 => 55,  145 => 51,  142 => 50,  138 => 41,  135 => 40,  125 => 42,  123 => 40,  110 => 29,  107 => 28,  100 => 24,  95 => 7,  92 => 6,  86 => 66,  84 => 64,  79 => 61,  77 => 59,  73 => 57,  71 => 55,  66 => 52,  64 => 50,  61 => 49,  59 => 28,  55 => 26,  53 => 24,  36 => 9,  34 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "/var/www/html/dovetail/App/Views/Templates/base.html");
    }
}
