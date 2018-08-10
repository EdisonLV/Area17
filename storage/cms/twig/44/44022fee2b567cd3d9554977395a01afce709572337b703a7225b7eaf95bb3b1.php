<?php

/* /home/runcloud/webapps/area17/plugins/area17/news/components/trending/default.htm */
class __TwigTemplate_fb501302ae320fa3d3b4b7c932808e062adb96ddf5fd047e57e29a84c700c76f extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<div class=\"row\">
  <div class=\"col-6\">
    <span class=\"image-wrap\">
      <a href=\"#\" class=\"image\"><img src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "getPath", array(), "method"), "html", null, true);
            echo "\"/></a>
      <a href=\"#\" class=\"button\" style=\"background-image:url(";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "avatar", array()), "getPath", array(), "method"), "html", null, true);
            echo ")\"></a>
    </span>
  </div>
  <div class=\"col-6\">
    <h4><a href=\"#\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a></h4>
    <footer>
      <a href=\"#\" class=\"button\" style=\"background-image:url(";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "avatar", array()), "getPath", array(), "method"), "html", null, true);
            echo ")\"></a>
      <ul>
        <li>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "name", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "title", array()), "html", null, true);
            echo "</li>
      </ul>
      <a href=\"#\" class=\"button share\"></a>
    </footer>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/runcloud/webapps/area17/plugins/area17/news/components/trending/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  53 => 14,  48 => 12,  43 => 10,  36 => 6,  32 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for post in posts %}
<div class=\"row\">
  <div class=\"col-6\">
    <span class=\"image-wrap\">
      <a href=\"#\" class=\"image\"><img src=\"{{ post.image.getPath() }}\"/></a>
      <a href=\"#\" class=\"button\" style=\"background-image:url({{ post.author.avatar.getPath() }})\"></a>
    </span>
  </div>
  <div class=\"col-6\">
    <h4><a href=\"#\">{{ post.title }}</a></h4>
    <footer>
      <a href=\"#\" class=\"button\" style=\"background-image:url({{ post.author.avatar.getPath() }})\"></a>
      <ul>
        <li>{{ post.author.name }}</li>
        <li>{{ post.author.title }}</li>
      </ul>
      <a href=\"#\" class=\"button share\"></a>
    </footer>
  </div>
</div>
{% endfor %}
", "/home/runcloud/webapps/area17/plugins/area17/news/components/trending/default.htm", "");
    }
}
