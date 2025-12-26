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

/* themes/villaagency/templates/page/page.html.twig */
class __TwigTemplate_469b3e52a301dd376c9707074d9a4027 extends Template
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
        // line 48
        yield "<div class=\"layout-container \">
  <!-- ***** Preloader Start ***** -->
  ";
        // line 60
        yield "  <!-- ***** Preloader End ***** -->

  <div class=\"sub-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
          <ul class=\"info\">
            <li><i class=\"fa fa-envelope\"></i> info@company.com2222</li>
            <li><i class=\"fa fa-map\"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class=\"col-lg-4 col-md-4\">
            ";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "subheader", [], "any", false, false, true, 72), "html", null, true);
        yield "
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <h1>Villa</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                      <li><a href=\"index.html\" class=\"active\">Home</a></li>
                      <li><a href=\"properties.html\">Properties</a></li>
                      <li><a href=\"property-details.html\">Property Details</a></li>
                      <li><a href=\"contact.html\">Contact Us</a></li>
                      <li><a href=\"#\"><i class=\"fa fa-calendar\"></i> Schedule a visit</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
    ";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_banner", [], "any", false, false, true, 105), "html", null, true);
        yield "
  
  <!-- ***** Header Area End ***** -->
  ";
        // line 111
        yield "
  ";
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 112), "html", null, true);
        yield "
  ";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 113), "html", null, true);
        yield "

  ";
        // line 115
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 115), "html", null, true);
        yield "

  ";
        // line 117
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 117), "html", null, true);
        yield "

  ";
        // line 119
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 119), "html", null, true);
        yield "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 123
        yield "
    <div class=\"layout-content\">
      ";
        // line 125
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 125), "html", null, true);
        yield "
    </div>";
        // line 127
        yield "
    ";
        // line 128
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 128)) {
            // line 129
            yield "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 130
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 133
        yield "
    ";
        // line 134
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 134)) {
            // line 135
            yield "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 136
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 136), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 139
        yield "
  </main>

  ";
        // line 142
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 142)) {
            // line 143
            yield "    <footer role=\"contentinfo\">
      ";
            // line 144
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 144), "html", null, true);
            yield "
    </footer>
  ";
        }
        // line 147
        yield "
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/villaagency/templates/page/page.html.twig";
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
        return array (  184 => 147,  178 => 144,  175 => 143,  173 => 142,  168 => 139,  162 => 136,  159 => 135,  157 => 134,  154 => 133,  148 => 130,  145 => 129,  143 => 128,  140 => 127,  136 => 125,  132 => 123,  126 => 119,  121 => 117,  116 => 115,  111 => 113,  107 => 112,  104 => 111,  98 => 105,  62 => 72,  48 => 60,  44 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<div class=\"layout-container \">
  <!-- ***** Preloader Start ***** -->
  {# <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> #}
  <!-- ***** Preloader End ***** -->

  <div class=\"sub-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-8\">
          <ul class=\"info\">
            <li><i class=\"fa fa-envelope\"></i> info@company.com2222</li>
            <li><i class=\"fa fa-map\"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class=\"col-lg-4 col-md-4\">
            {{page.subheader}}
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <h1>Villa</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                      <li><a href=\"index.html\" class=\"active\">Home</a></li>
                      <li><a href=\"properties.html\">Properties</a></li>
                      <li><a href=\"property-details.html\">Property Details</a></li>
                      <li><a href=\"contact.html\">Contact Us</a></li>
                      <li><a href=\"#\"><i class=\"fa fa-calendar\"></i> Schedule a visit</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
    {{ page.main_banner }}
  
  <!-- ***** Header Area End ***** -->
  {# <header role=\"banner\">
    {{ page.header }}
  </header> #}

  {{ page.primary_menu }}
  {{ page.secondary_menu }}

  {{ page.breadcrumb }}

  {{ page.highlighted }}

  {{ page.help }}

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"layout-content\">
      {{ page.content }}
    </div>{# /.layout-content #}

    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
", "themes/villaagency/templates/page/page.html.twig", "/var/www/html/web/themes/villaagency/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 128];
        static $filters = ["escape" => 72];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
