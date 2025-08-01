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
use Twig\TemplateWrapper;

/* @olivero/../images/drupal.svg */
class __TwigTemplate_9e326374e513bfdfad11869718e5ffc7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<svg width=\"14\" height=\"19\" viewBox=\"0 0 42.15 55.08\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M29.75 11.73C25.87 7.86 22.18 4.16 21.08 0 20 4.16 16.28 7.86 12.4 11.73 6.59 17.54 0 24.12 0 34a21.08 21.08 0 1042.15 0c0-9.88-6.59-16.46-12.4-22.27zM10.84 35.92a14.13 14.13 0 00-1.65 2.62.54.54 0 01-.36.3h-.18c-.47 0-1-.92-1-.92-.14-.22-.27-.45-.4-.69l-.09-.19C5.94 34.25 7 30.28 7 30.28a17.42 17.42 0 012.52-5.41 31.53 31.53 0 012.28-3l1 1 4.72 4.82a.54.54 0 010 .72l-4.93 5.47zm10.48 13.81a7.29 7.29 0 01-5.4-12.14c1.54-1.83 3.42-3.63 5.46-6 2.42 2.58 4 4.35 5.55 6.29a3.08 3.08 0 01.32.48 7.15 7.15 0 011.3 4.12 7.23 7.23 0 01-7.23 7.25zM35 38.14a.84.84 0 01-.67.58h-.14a1.22 1.22 0 01-.68-.55 37.77 37.77 0 00-4.28-5.31l-1.93-2-6.41-6.65a54 54 0 01-3.84-3.94 1.3 1.3 0 00-.1-.15 3.84 3.84 0 01-.51-1v-.19a3.4 3.4 0 011-3c1.24-1.24 2.49-2.49 3.67-3.79 1.3 1.44 2.69 2.82 4.06 4.19a57.6 57.6 0 017.55 8.58A16 16 0 0135.65 34a14.55 14.55 0 01-.65 4.14z\"/>
</svg>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@olivero/../images/drupal.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@olivero/../images/drupal.svg", "C:\\laragon\\www\\localdummy\\web\\core\\themes\\olivero\\images\\drupal.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
