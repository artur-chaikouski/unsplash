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

/* header.twig */
class __TwigTemplate_73d2f3a50c3266ccc1f70d5cbace12b0328572b6624dcbb0e3cb3208fd5f1e22 extends Template
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
        yield "<!-- templates/header.twig -->
<!DOCTYPE html>
<html ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('language_attributes')->getCallable()(), "html", null, true);
        yield ">
<head>
    <meta charset=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('bloginfo')->getCallable()("charset"), "html", null, true);
        yield "\">
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('wp_title')->getCallable()(""), "html", null, true);
        yield "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('bloginfo')->getCallable()("stylesheet_url"), "html", null, true);
        yield "\">
    ";
        // line 8
        yield $this->env->getFunction('wp_head')->getCallable()();
        yield "
</head>
<body ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('body_class')->getCallable()(), "html", null, true);
        yield ">

";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logo"] ?? null), "html", null, true);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.twig";
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
        return array (  69 => 12,  64 => 10,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/header.twig -->
<!DOCTYPE html>
<html {{ language_attributes() }}>
<head>
    <meta charset=\"{{ bloginfo('charset') }}\">
    <title>{{ wp_title('') }}</title>
    <link rel=\"stylesheet\" href=\"{{ bloginfo('stylesheet_url') }}\">
    {{ wp_head()|raw }}
</head>
<body {{ body_class() }}>

{{ logo }}
", "header.twig", "D:\\OpenServer\\domains\\bootstrap-wp-theme-main\\wp-content\\themes\\project_name\\templates\\header.twig");
    }
}
