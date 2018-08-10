<?php

/* /home/runcloud/webapps/area17/plugins/area17/news/components/posts/default.htm */
class __TwigTemplate_2d30d1992c5905e2b2b6f308820f6c74ba927b64d1ffe6e2206aa07b59dea47c extends Twig_Template
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
        echo "<!-- First row -->
<div class=\"row\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["posts"] ?? null), 0, 3));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                // line 5
                echo "      <div class=\"col-6\">
        ";
                // line 6
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['post'] = $context["post"]                ;
                $context['__cms_partial_params']['isTall'] = true                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@_post"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 7
                echo "      </div>
    ";
            } else {
                // line 9
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 2)) {
                    // line 10
                    echo "        <div class=\"col-6\">
      ";
                }
                // line 12
                echo "        ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['post'] = $context["post"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@_post"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 13
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 14
                    echo "        </div>
      ";
                }
                // line 16
                echo "    ";
            }
            // line 17
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
<!-- /First row -->

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_slice($this->env, ($context["posts"] ?? null), 3, twig_length_filter($this->env, ($context["posts"] ?? null))), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 22
            echo "  <div class=\"row\">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 24
                echo "      <div class=\"col-6\">
        ";
                // line 25
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['post'] = $context["post"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@_post"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 26
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/runcloud/webapps/area17/plugins/area17/news/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  121 => 26,  116 => 25,  113 => 24,  109 => 23,  106 => 22,  102 => 21,  97 => 18,  83 => 17,  80 => 16,  76 => 14,  73 => 13,  67 => 12,  63 => 10,  60 => 9,  56 => 7,  50 => 6,  47 => 5,  44 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- First row -->
<div class=\"row\">
  {% for post in posts|slice(0, 3) %}
    {% if loop.first %}
      <div class=\"col-6\">
        {% partial '@_post' post=post isTall=true %}
      </div>
    {% else %}
      {% if loop.index == 2 %}
        <div class=\"col-6\">
      {% endif %}
        {% partial '@_post' post=post %}
      {% if loop.last %}
        </div>
      {% endif %}
    {% endif %}
  {% endfor %}
</div>
<!-- /First row -->

{% for row in posts|slice(3, posts|length)|batch(2) %}
  <div class=\"row\">
    {% for post in row %}
      <div class=\"col-6\">
        {% partial '@_post' post=post %}
      </div>
    {% endfor %}
  </div>
{% endfor %}
", "/home/runcloud/webapps/area17/plugins/area17/news/components/posts/default.htm", "");
    }
}
