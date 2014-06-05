<?php

/* details.html.twig */
class __TwigTemplate_5d3fce8c8b4123f72ecaa016f2c706841ef3c34d1fe7bddc68a05bd08b1f47e3 extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "    <h2>WNeeds Limited.</h2>
    <small>Found next technology :P</small>
    <hr/>
    <hr/>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
    <h3>Hello Mr./Mrs. ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
        echo "</h3>
    <br clear=\"all\" /><br clear=\"all\" />

    <form id=\"graphForm\" action=\"app.php\" method=\"post\">

        <div id=\"checkout_user_info\">
            <div style=\"float:left; width:110px; padding-top:10px;\" align=\"left\">Facebook Id:</div>
            <div style=\"float:left; width:290px;\" align=\"left\"><input type=\"text\" name=\"facebook_id\" id=\"facebook_id\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id"), "html", null, true);
        echo "\" readonly class=\"desireapps_total_fields\" /></div><br clear=\"all\" /><br clear=\"all\" />

            <div style=\"float:left; width:110px; padding-top:10px;\" align=\"left\">Name</div>
            <div style=\"float:left; width:300px;\" align=\"left\"><input type=\"text\" name=\"name\" id=\"name\" class=\"desireapps_total_fields\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
        echo "\" readonly /></div><br clear=\"all\" /><br clear=\"all\" />

            <div style=\"float:left; width:110px; padding-top:10px;\" align=\"left\">First Name</div>
            <div style=\"float:left; width:300px;\" align=\"left\"><input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"desireapps_total_fields\" readonly value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "first_name"), "html", null, true);
        echo "\" /></div><br clear=\"all\" /><br clear=\"all\" />

            <div style=\"float:left; width:110px; padding-top:10px;\" align=\"left\">Last Name</div>
            <div style=\"float:left; width:300px;\" align=\"left\"><input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"desireapps_total_fields\" readonly value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_name"), "html", null, true);
        echo "\" /></div><br clear=\"all\" /><br clear=\"all\" />

            <div style=\"float:left; width:110px; padding-top:10px;\" align=\"left\">Username</div>
            <div style=\"float:left; width:300px;\" align=\"left\"><input type=\"text\" name=\"username\" id=\"username\" class=\"desireapps_total_fields\" readonly value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "username"), "html", null, true);
        echo "\" /></div><br clear=\"all\" /><br clear=\"all\" />

            <div style=\"float:left; width:110px; padding-top:10px;\" align=\"left\">Locale</div>
            <div style=\"float:left; width:300px;\" align=\"left\"><input type=\"text\" name=\"locale\" id=\"locale\" class=\"desireapps_total_fields\" readonly value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "locale"), "html", null, true);
        echo "\" /></div><br clear=\"all\" /><br clear=\"all\" />

            <input type=\"hidden\" name=\"meta\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["meta"]) ? $context["meta"] : null), "html", null, true);
        echo "\"/>
            <input type=\"hidden\" name=\"pagename\" value=\"details\"/>

            <div style=\"float:left; width:110px; padding-top:10px;\" align=\"left\">&nbsp;</div>
            <div style=\"float:left; width:300px;\" align=\"left\">
                <input type=\"submit\" name=\"submit\" id=\"desireapps_add_to_cart_button\" style=\"float:left;width:100px; padding:10px;\" value=\"Submit\" />
            </div>
            <br clear=\"all\" /><br clear=\"all\" />

        </div>
    </form>

    <br clear=\"all\" /><br clear=\"all\" />


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
        return "details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 64,  136 => 62,  133 => 61,  113 => 44,  108 => 42,  102 => 39,  96 => 36,  90 => 33,  84 => 30,  78 => 27,  68 => 20,  65 => 19,  62 => 18,  54 => 12,  51 => 11,  41 => 5,  38 => 4,  32 => 3,);
    }
}
