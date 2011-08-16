<?php

/* phnxVccBundle::vccbase.html.twig */
class __TwigTemplate_af8b9bc94d4e40e5b0f4d5a8a08a9825 extends Twig_Template
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
\t<ul>
\t<li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("phnxVccBundle_register"), "html");
        echo "\">Register</a></li>
\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("phnxVccBundle_login"), "html");
        echo "\">Login</a></li>
\t</ul>
    </div>
    <div>
    ";
        // line 18
        $this->displayBlock('content_title', $context, $blocks);
        // line 20
        echo "    </div>
    <div id=\"main_content\" style='margin-left:240px;border:1px silver solid;padding:10px;margin-right:5px;'>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </div>
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
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

    // line 18
    public function block_content_title($context, array $blocks = array())
    {
        // line 19
        echo "    ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "phnxVccBundle::vccbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
