<?php

/* /home/runcloud/webapps/area17/plugins/area17/news/components/posts/_post.htm */
class __TwigTemplate_e8ab2fc5daf4e1e3e80637ff69281d8bb30f9f32abfbe0a0ef25df2775d6226c extends Twig_Template
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
        echo "<div class=\"asset-box ";
        echo ((($context["isTall"] ?? null)) ? ("tall") : (""));
        echo "\">
  <div class=\"asset-image\">
    <a href=\"#\" target=\"_self\" style=\"background-image: url(";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", array()), "getPath", array(), "method"), "html", null, true);
        echo ")\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "\"></a>
  </div>
  <div class=\"asset-content\">
    <header>
      <h1><a href=\"#\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</a></h1>
    </header>
    <footer>
      <a href=\"#\" class=\"button\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", array()), "avatar", array()), "getPath", array(), "method"), "html", null, true);
        echo ")\"></a>
      <ul>
        <li>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", array()), "name", array()), "html", null, true);
        echo "</li>
        <li>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", array()), "title", array()), "html", null, true);
        echo "</li>
      </ul>
      <a href=\"#\" class=\"button share\"></a>
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/runcloud/webapps/area17/plugins/area17/news/components/posts/_post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  49 => 12,  44 => 10,  38 => 7,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"asset-box {{ isTall ? 'tall' : '' }}\">
  <div class=\"asset-image\">
    <a href=\"#\" target=\"_self\" style=\"background-image: url({{ post.image.getPath() }})\" title=\"{{ post.title }}\"></a>
  </div>
  <div class=\"asset-content\">
    <header>
      <h1><a href=\"#\">{{ post.title }}</a></h1>
    </header>
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
", "/home/runcloud/webapps/area17/plugins/area17/news/components/posts/_post.htm", "");
    }
}
