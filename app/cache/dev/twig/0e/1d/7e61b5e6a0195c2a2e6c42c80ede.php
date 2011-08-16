<?php

/* phnxVccBundle:Security:login.html.twig */
class __TwigTemplate_0e1d7e61b5e6a0195c2a2e6c42c80ede extends Twig_Template
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
        echo "Log in
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        if ($this->getContext($context, 'error')) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'error'), "message", array(), "any", false), "html");
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("phnxVccBundle_logincheck"), "html");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_username'), "html");
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 21
        echo "
    <input type=\"submit\" name=\"login\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "phnxVccBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
