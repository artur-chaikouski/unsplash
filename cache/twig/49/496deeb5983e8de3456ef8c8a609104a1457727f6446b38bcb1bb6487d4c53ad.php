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

/* page.twig */
class __TwigTemplate_7ac0cac70dff2cb4c6b5774dacb058e6c8bd8427820f5ac98621a143d214dc21 extends Template
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
        yield "<main id=\"main\" class=\"site-main\" role=\"main\">
    ";
        // line 2
        yield ($context["post"] ?? null);
        yield "
</main>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "page.twig";
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
        return array (  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main id=\"main\" class=\"site-main\" role=\"main\">
    {{ post | raw }}
</main>", "page.twig", "D:\\OpenServer\\domains\\bootstrap-wp-theme-main\\wp-content\\themes\\project_name\\templates\\page.twig");
    }
}
