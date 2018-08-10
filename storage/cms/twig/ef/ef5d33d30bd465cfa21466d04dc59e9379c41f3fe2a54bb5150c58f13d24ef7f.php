<?php

/* /home/runcloud/webapps/area17/plugins/area17/banners/components/banner/default.htm */
class __TwigTemplate_7182666a93e8dd4217fd8e79547ba0380b0c40233676e44844c834a344497690 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "link", array()), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "title", array()), "html", null, true);
        echo "\">
  <img src=\"";
        // line 2
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "image", array()));
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "title", array()), "html", null, true);
        echo "\" />
</a>
";
    }

    public function getTemplateName()
    {
        return "/home/runcloud/webapps/area17/plugins/area17/banners/components/banner/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ banner.link }}\" target=\"_blank\" title=\"{{ banner.title }}\">
  <img src=\"{{ banner.image|media }}\" alt=\"{{ banner.title }}\" />
</a>
", "/home/runcloud/webapps/area17/plugins/area17/banners/components/banner/default.htm", "");
    }
}
