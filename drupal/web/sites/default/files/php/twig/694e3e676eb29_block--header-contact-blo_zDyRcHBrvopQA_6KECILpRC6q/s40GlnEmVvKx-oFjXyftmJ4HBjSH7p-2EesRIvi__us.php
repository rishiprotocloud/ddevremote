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

/* themes/villaagency/templates/block/block--header-contact-block.html.twig */
class __TwigTemplate_b340fb9b9828062bd388f75b7ad62508 extends Template
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
        yield "abcdddd
<div class=\"header-contact-info\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            yield "    <span class=\"contact-item\">
      ";
            // line 5
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, true, 5)) {
                // line 6
                yield "        <i class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, true, 6), "html", null, true);
                yield "\"></i>
      ";
            }
            // line 8
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 8)) {
                // line 9
                yield "        <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 9), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 9), "html", null, true);
                yield "</a>
      ";
            } else {
                // line 11
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 11), "html", null, true);
                yield "
      ";
            }
            // line 13
            yield "    </span>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/villaagency/templates/block/block--header-contact-block.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  87 => 15,  80 => 13,  74 => 11,  66 => 9,  63 => 8,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("abcdddd
<div class=\"header-contact-info\">
  {% for item in items %}
    <span class=\"contact-item\">
      {% if item.icon %}
        <i class=\"{{ item.icon }}\"></i>
      {% endif %}
      {% if item.link %}
        <a href=\"{{ item.link }}\">{{ item.value }}</a>
      {% else %}
        {{ item.value }}
      {% endif %}
    </span>
  {% endfor %}
</div>", "themes/villaagency/templates/block/block--header-contact-block.html.twig", "/var/www/html/web/themes/villaagency/templates/block/block--header-contact-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 3, "if" => 5];
        static $filters = ["escape" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
