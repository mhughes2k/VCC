<?php

/* ::vccbase.html.twig */
class __TwigTemplate_6215c2bc9f5c83c8c31222245961f081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content_title' => array($this, 'block_content_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
    </head>
    <body>
    <div style='width:200px;float:left;border:1px silver solid;padding:10px;margin-right:5px;'>
    <div>Menu</div>
    <ul>
    \t<li>Club</li>
    \t<ul>
    \t\t<li>Details</li>
    \t\t<li>Officers</li>
    \t\t<li>Members</li>
    \t\t<li>Routes</li>
    \t\t<li>Runs/Events</li>
    \t\t<ul>
    \t\t\t<li>Runs</li>
\t    \t\t<li>Events</li>
\t    \t</ul>
    \t</ul>
    \t<li>User</li>
    \t<ul>
    \t\t<li>My Details</li>
    \t\t<li>My Routes</li>
    \t\t<li>Plan a Run</li>
    \t</ul>
    </ul>
    </div>
    <div>
    ";
        // line 34
        $this->displayBlock('content_title', $context, $blocks);
        // line 36
        echo "    </div>
    <div id=\"main_content\" style='margin-left:240px;border:1px silver solid;padding:10px;margin-right:5px;'>
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "    </div>
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "VCC";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 34
    public function block_content_title($context, array $blocks = array())
    {
        // line 35
        echo "    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::vccbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
