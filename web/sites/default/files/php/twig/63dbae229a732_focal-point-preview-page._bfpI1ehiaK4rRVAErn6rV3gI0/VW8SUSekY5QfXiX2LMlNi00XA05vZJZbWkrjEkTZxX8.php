<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/focal_point/templates/focal-point-preview-page.html.twig */
class __TwigTemplate_f605b5441d9cc926481a6743581f6384 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("focal_point/drupal.focal_point_preview"), "html", null, true);
        echo "

<div id=\"focal-point-preview-wrapper\">
  <span class=\"derivatives-note note\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["derivative_image_note"] ?? null), 4, $this->source), "html", null, true);
        echo "</span>
  <div id=\"focal-point-derivatives\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["derivative_images"] ?? null));
        foreach ($context['_seq'] as $context["style"] => $context["derivative"]) {
            // line 7
            echo "      <div id=\"focal-point-derivative-preview-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["style"], 7, $this->source), "html", null, true);
            echo "\" class=\"focal-point-derivative-preview\" data-image-style=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["style"], 7, $this->source), "html", null, true);
            echo "\">
        <h3 class=\"focal-point-derivative-preview-label\">";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["derivative"], "style", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</h3>
        ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["derivative"], "image", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style'], $context['derivative'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>

  <div id=\"focal-point-preview\">
    <h2 id=\"focal-point-preview-label\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Original image"));
        echo "</h2>
    ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["original_image"] ?? null), 16, $this->source), "html", null, true);
        echo "
  </div>
  <span class=\"preview-note note\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["preview_image_note"] ?? null), 18, $this->source), "html", null, true);
        echo "</span>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/focal_point/templates/focal-point-preview-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  83 => 16,  79 => 15,  74 => 12,  65 => 9,  61 => 8,  54 => 7,  50 => 6,  45 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/focal_point/templates/focal-point-preview-page.html.twig", "C:\\xampp3\\htdocs\\php-advanced-projects\\drupal_test_dir\\web\\modules\\contrib\\focal_point\\templates\\focal-point-preview-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 6);
        static $filters = array("escape" => 1, "t" => 15);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 't'],
                ['attach_library']
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
