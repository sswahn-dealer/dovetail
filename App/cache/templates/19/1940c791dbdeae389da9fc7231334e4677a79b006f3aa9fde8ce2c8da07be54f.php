<?php

/* contact.html */
class __TwigTemplate_c274a76c5c43b8fd01feef9aa4f75e84a544bf51026336f5e7ac9a907e569b1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "contact.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
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
        echo "        Dovetail . Contact
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    <!-- <article class=\"component center-element white-bg panel panel-default\">
        <header class=\"panel-heading\">
            <h1 class=\"lead\">Contact DDC Insights</h1>
        </header>
        <form class=\"panel-body\" id=\"contact-form\" action=\"/contact/send\" method=\"get\"
        enctype=\"multipart/form-data\" onsubmit=\"return contact.sendMessage()\">
            <div class=\"form-group has-feedback\">
                <button type=\"submit\" class=\"icon-btn pulled-btn btn btn-info pull-right\" id=\"send-btn\">Send</button>
                <i class=\"white-txt glyphicon glyphicon-send form-control-feedback\"></i>
            </div>
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"Subject\" required>
            </div>
            <div class=\"form-group\">
                <textarea class=\"form-control\" id=\"body\" name=\"body\" rows=\"6\" placeholder=\"Message\" required></textarea>
            </div>
            <fieldset class=\"form-group\">
                <button class=\"\">Options:</button>
                <div class=\"\">       
                    <div class=\"pull-left col col-md-6 col-lg-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"carbon-copy\" name=\"carbon_copy\" placeholder=\"Cc:\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"blind-carbon-copy\" name=\"blind_carbon_copy\" placeholder=\"Bcc:\">
                        </div>
                    </div>
                    <div class=\"form-group pull-right col col-md-6 col-lg-6\">
                        <label for=\"file\">Add Attachment:</label>
                        <input type=\"file\" class=\"form-control-file\" id=\"file\" name=\"file\">
                    </div>
                </div>
            </fieldset>
        </form>
        <footer class=\"panel-footer\"></footer>
    </article> -->
";
    }

    // line 48
    public function block_scripts($context, array $blocks = array())
    {
        // line 49
        echo "    <script src=\"/js/components/base/Article.js\"></script>
    <script src=\"/js/components/base/Header.js\"></script>
    <script src=\"/js/components/base/Body.js\"></script>
    <script src=\"/js/components/base/Footer.js\"></script>
    <script src=\"/js/components/Contact.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 49,  81 => 48,  41 => 10,  38 => 9,  33 => 5,  30 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact.html", "/var/www/html/dovetail/App/Views/Templates/contact.html");
    }
}
