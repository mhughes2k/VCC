<?php

/* phnxVccBundle::nomulticlub.html.twig */
class __TwigTemplate_a72ee4307b3925c05eb7f634793066ea extends Twig_Template
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
        echo "Multiple Clubs are not enabled.
";
    }

    public function getTemplateName()
    {
        return "phnxVccBundle::nomulticlub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
