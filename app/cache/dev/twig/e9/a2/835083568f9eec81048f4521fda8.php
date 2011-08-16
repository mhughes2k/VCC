<?php

/* phnxVccBundle:Default:index_loggedin.html.twig */
class __TwigTemplate_e9a2835083568f9eec81048f4521fda8 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("phnxVccBundle::vccbase_loggedin.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Welcome ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "displayname", array(), "any", false), "html");
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "Welcome to Virtual Cycling Club
";
    }

    public function getTemplateName()
    {
        return "phnxVccBundle:Default:index_loggedin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
