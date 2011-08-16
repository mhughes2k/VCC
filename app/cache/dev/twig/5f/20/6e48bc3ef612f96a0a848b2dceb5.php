<?php

/* phnxVccBundle:Default:index.html.twig */
class __TwigTemplate_5f206e48bc3ef612f96a0a848b2dceb5 extends Twig_Template
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
            $this->parent = $this->env->loadTemplate("phnxVccBundle::vccbase.html.twig");
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
        echo "Welcome to VCC
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
        return "phnxVccBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
