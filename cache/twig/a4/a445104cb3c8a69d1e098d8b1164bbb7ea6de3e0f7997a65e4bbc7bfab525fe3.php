<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* parts/image-slider.twig */
class __TwigTemplate_c10f26ab209c3302c94296b177d49cb0de17a391a534b51a02c36c9367301db9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- templates/parts/image-slider.twig -->
<div class=\"slider-image\">
    <div class=\"slider-image__wrap\">
        ";
        // line 4
        if (($context["title"] ?? null)) {
            // line 5
            yield "            <h1 class=\"slider-image__wrap_title\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</h1>
        ";
        }
        // line 7
        yield "        ";
        if (($context["description"] ?? null)) {
            // line 8
            yield "            <p class=\"slider-image__wrap_desc\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
            yield "</p>
        ";
        }
        // line 10
        yield "        ";
        if (($context["images"] ?? null)) {
            // line 11
            yield "            <div class=\"slider-image__wrap_swiper\">
                <div class=\"swiper-wrapper\">
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 14
                yield "                        <div class=\"slider-image__wrap_swiper-img swiper-slide\">
                            <img src=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "urls", [], "any", false, false, false, 15), "small", [], "any", false, false, false, 15), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "alt_description", [], "any", false, false, false, 15), "html", null, true);
                yield "\">
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "                </div>
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
            </div>
            <div class=\"swiper-pagination\"></div>
        ";
        }
        // line 24
        yield "        ";
        if (($context["error"] ?? null)) {
            // line 25
            yield "            <p class=\"slider-image__wrap_error\">
                ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "
            </p>
        ";
        }
        // line 29
        yield "    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "parts/image-slider.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  105 => 29,  99 => 26,  96 => 25,  93 => 24,  85 => 18,  74 => 15,  71 => 14,  67 => 13,  63 => 11,  60 => 10,  54 => 8,  51 => 7,  45 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/parts/image-slider.twig -->
<div class=\"slider-image\">
    <div class=\"slider-image__wrap\">
        {% if title %}
            <h1 class=\"slider-image__wrap_title\">{{ title }}</h1>
        {% endif %}
        {% if description %}
            <p class=\"slider-image__wrap_desc\">{{ description }}</p>
        {% endif %}
        {% if images %}
            <div class=\"slider-image__wrap_swiper\">
                <div class=\"swiper-wrapper\">
                    {% for photo in images %}
                        <div class=\"slider-image__wrap_swiper-img swiper-slide\">
                            <img src=\"{{ photo.urls.small }}\" alt=\"{{ photo.alt_description }}\">
                        </div>
                    {% endfor %}
                </div>
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
            </div>
            <div class=\"swiper-pagination\"></div>
        {% endif %}
        {% if error %}
            <p class=\"slider-image__wrap_error\">
                {{ error }}
            </p>
        {% endif %}
    </div>
</div>", "parts/image-slider.twig", "D:\\OpenServer\\domains\\bootstrap-wp-theme-main\\wp-content\\themes\\project_name\\templates\\parts\\image-slider.twig");
    }
}
