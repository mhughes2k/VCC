<?php

/* phnxVccBundle:Club:index.html.twig */
class __TwigTemplate_5b4a0a8ac3d55e976ea56b77578c4e98 extends Twig_Template
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
        echo "Clubs
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<ul>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'clubs'));
        foreach ($context['_seq'] as $context['_key'] => $context['club']) {
            // line 9
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("phnxVccBundle_viewclub", array("clubid" => $this->getAttribute($this->getContext($context, 'club'), "id", array(), "any", false))), "html");
            echo "\">
\t";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'club'), "name", array(), "any", false), "html");
            echo "</a></a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "phnxVccBundle:Club:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
