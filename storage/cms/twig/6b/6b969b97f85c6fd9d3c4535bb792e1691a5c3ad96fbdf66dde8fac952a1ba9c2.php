<?php

/* /home/runcloud/webapps/area17/themes/demo/partials/site/sidebar.htm */
class __TwigTemplate_272da45f4b445b588e63f66f5386eba1dd4ccb6edbd48393c58d43a0f9d84702 extends Twig_Template
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
        echo "<aside>
    ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "    <div class=\"ad-block\">
      <div>
        ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("bannerComponent"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "      </div>
    </div>
    <div class=\"module list\">
      <h3>";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Trending"));
        echo "</h3>
      ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("trendingPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "/home/runcloud/webapps/area17/themes/demo/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  47 => 10,  43 => 9,  38 => 6,  34 => 5,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside>
    {% component 'localePicker' %}
    <div class=\"ad-block\">
      <div>
        {% component 'bannerComponent' %}
      </div>
    </div>
    <div class=\"module list\">
      <h3>{{ 'Trending'|_ }}</h3>
      {% component 'trendingPosts' %}
    </div>
</aside>", "/home/runcloud/webapps/area17/themes/demo/partials/site/sidebar.htm", "");
    }
}
