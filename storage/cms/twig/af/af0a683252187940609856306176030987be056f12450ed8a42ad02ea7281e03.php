<?php

/* /home/runcloud/webapps/area17/themes/demo/layouts/default.htm */
class __TwigTemplate_34d8c03b4d4289fdbb689ca8974257d3782cf234aaa1507ecdc7795abad434ac extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <title>Area17 :: ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array())));
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/stylesheets/normalize.css", 1 => "assets/stylesheets/main.css"));
        echo "\" />
    ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 11
        echo "  </head>
  <body>
    <div id=\"wrapper\">
      <main>
        ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 16
        echo "      </main>
      ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "    </div>
    <!-- Scripts -->
    <script src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/jquery.js"));
        echo "\"></script>
    ";
        // line 21
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 22
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 23
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/runcloud/webapps/area17/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  79 => 22,  72 => 21,  68 => 20,  64 => 18,  60 => 17,  57 => 16,  55 => 15,  49 => 11,  46 => 10,  42 => 9,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <title>Area17 :: {{ this.page.title|_ }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{{ ['assets/stylesheets/normalize.css', 'assets/stylesheets/main.css']|theme }}\" />
    {% styles %}
  </head>
  <body>
    <div id=\"wrapper\">
      <main>
        {% page %}
      </main>
      {% partial 'site/sidebar' %}
    </div>
    <!-- Scripts -->
    <script src=\"{{ ['assets/vendor/jquery.js']|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
  </body>
</html>", "/home/runcloud/webapps/area17/themes/demo/layouts/default.htm", "");
    }
}
