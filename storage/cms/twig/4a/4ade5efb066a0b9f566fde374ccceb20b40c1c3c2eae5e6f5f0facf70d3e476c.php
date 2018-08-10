<?php

/* /home/runcloud/webapps/area17/themes/demo/pages/home.htm */
class __TwigTemplate_876db2a30aace178d913917a7e2132afbd4b961f21b3b81ea30cf20d5a498589 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("postsComponent"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/runcloud/webapps/area17/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'postsComponent' %}", "/home/runcloud/webapps/area17/themes/demo/pages/home.htm", "");
    }
}
