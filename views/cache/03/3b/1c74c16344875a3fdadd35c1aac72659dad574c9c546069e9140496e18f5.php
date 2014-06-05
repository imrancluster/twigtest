<?php

/* list.html.twig */
class __TwigTemplate_033b1c74c16344875a3fdadd35c1aac72659dad574c9c546069e9140496e18f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Show Details";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
    ";
        // line 6
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "    <h2>WNeeds Limited.</h2>
    <small>Found next technology :P</small>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "    <h3>Member List</h3><br clear=\"all\" /><br clear=\"all\" />
    ";
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        // line 22
        echo "    ";
        // line 23
        echo "
    ";
        // line 25
        echo "
    ";
        // line 26
        if ((isset($context["members"]) ? $context["members"] : null)) {
            // line 27
            echo "
        <table class=\"table table-bordered table-hover\" width=\"647\">
            <thead>
            <tr>
                <th>#</th>
                <th>Facebook Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Locale</th>

            </tr>
            </thead>
            <tbody>
            ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 41
                echo "            <tr>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id"), "html", null, true);
                echo "</td>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "facebook_id"), "html", null, true);
                echo "</td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "name"), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "username"), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locale"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </tbody>
        </table>

    ";
        } else {
            // line 53
            echo "
        <p>No member found!!!!</p>

    ";
        }
        // line 57
        echo "

";
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "    <hr/>
    <hr/>
    ";
        // line 64
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 64,  150 => 62,  147 => 61,  141 => 57,  135 => 53,  129 => 49,  120 => 46,  116 => 45,  112 => 44,  108 => 43,  104 => 42,  101 => 41,  97 => 40,  82 => 27,  80 => 26,  77 => 25,  74 => 23,  72 => 22,  70 => 21,  68 => 20,  65 => 18,  62 => 17,  56 => 13,  53 => 12,  44 => 6,  41 => 5,  38 => 4,  32 => 3,);
    }
}
