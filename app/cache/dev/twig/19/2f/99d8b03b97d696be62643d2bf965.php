<?php

/* phnxVccBundle::vccbase_loggedin.html.twig */
class __TwigTemplate_192f99d8b03b97d696be62643d2bf965 extends Twig_Template
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
    Hello ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "displayname", array(), "any", false), "html");
        echo ".
    <ul>
    \t<li>
    \t";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_CLUB_ADMIN")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("phnxVccBundle_viewclubs"), "html");
            echo "\">Club</a>
    \t";
        } else {
            // line 17
            echo "    \tClub
    \t";
        }
        // line 19
        echo "    \t</li>
    \t
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
    \t<li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("phnxVccBundle_logout"), "html");
        echo "\">Logout</a></li>
    </ul>
    
    </div>
    <div>
    ";
        // line 43
        $this->displayBlock('content_title', $context, $blocks);
        // line 45
        echo "    </div>
    <div id=\"main_content\" style='margin-left:240px;border:1px silver solid;padding:10px;margin-right:5px;'>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "    </div>
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
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

    // line 43
    public function block_content_title($context, array $blocks = array())
    {
        // line 44
        echo "    ";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "phnxVccBundle::vccbase_loggedin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
