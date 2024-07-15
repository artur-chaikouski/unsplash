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

/* footer.twig */
class __TwigTemplate_793013944f87d4e30506e044440b2f5608611155d4915e9aa29a5cbf27a0904b extends Template
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
        yield "        <!-- templates/footer.twig -->
        ";
        // line 2
        yield ($context["footer_content"] ?? null);
        yield "
    </body>
</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.twig";
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
        return new Source("        <!-- templates/footer.twig -->
        {{ footer_content | raw }}
    </body>
</html>", "footer.twig", "D:\\OpenServer\\domains\\bootstrap-wp-theme-main\\wp-content\\themes\\project_name\\templates\\footer.twig");
    }
}
