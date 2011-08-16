<?php

/* phnxVccBundle:Club:viewclub.html.twig */
class __TwigTemplate_859ae81ffea24572d3b68df75b2a2cd3 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'club'), "name", array(), "any", false), "html");
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'club'), "name", array(), "any", false), "html");
        echo "</h1>
<div>
<h2>Members</h2>
";
        // line 9
        if ($this->getContext($context, 'members')) {
            // line 10
            echo "<table>
<tr>
<th>
Lastname
</th>
<th>
Firstname
</th>
<th>
Email
</th>
<th>
Nick Name
</th>
</tr>
";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'members'));
            foreach ($context['_seq'] as $context['_key'] => $context['member']) {
                // line 26
                echo "\t<tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'member'), "lastname", array(), "any", false), "html");
                echo "</td>
\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'member'), "firstname", array(), "any", false), "html");
                echo "</td>
\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'member'), "emailaddress", array(), "any", false), "html");
                echo "</td>
\t<td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'member'), "nickname", array(), "any", false), "html");
                echo "</td>
\t</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "</table>

";
        } else {
            // line 35
            echo "No Members
";
        }
        // line 37
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "phnxVccBundle:Club:viewclub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
