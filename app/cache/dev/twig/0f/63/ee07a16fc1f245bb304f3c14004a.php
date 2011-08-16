<?php

/* phnxVccBundle:User:register.html.twig */
class __TwigTemplate_0f63ee07a16fc1f245bb304f3c14004a extends Twig_Template
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
        echo "<h2>Register</h2>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("phnxVccBundle_create_user"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "

<input type='submit' />
</form>
";
    }

    public function getTemplateName()
    {
        return "phnxVccBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
