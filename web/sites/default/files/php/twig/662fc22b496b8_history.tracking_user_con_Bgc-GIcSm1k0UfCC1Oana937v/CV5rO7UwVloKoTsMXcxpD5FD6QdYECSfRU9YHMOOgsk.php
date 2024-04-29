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

/* @help_topics/history.tracking_user_content.html.twig */
class __TwigTemplate_5508b19a2e2c106d6ed629a277ffe6d5 extends Template
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
        // line 6
        echo "<h2>";
        echo t("What content visits are tracked?", array());
        echo "</h2>
<p>";
        // line 7
        echo t("The core History module tracks when each logged-in user has most recently visited each content item page on the site. This allows content to be marked as <em>new</em> or <em>updated</em> for each user, meaning that it was newly created or has been updated since the last time they visited its page. These records are kept for one month, meaning that content older than one month is never marked as new or updated.", array());
        echo "</p>
<h2>";
        // line 8
        echo t("What options are available for using this tracking information?", array());
        echo "</h2>
<p>";
        // line 9
        echo t("You can display the new/updated status of content by creating or editing a view. There is a <em>Has new content</em> field for <em>Content</em> views, which displays the new/updated marker. There is also a <em>Has new content</em> filter, which limits the view to new and updated content.", array());
        echo "</p>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/history.tracking_user_content.html.twig";
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
        return array (  52 => 9,  48 => 8,  44 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}<h2>{% trans %}What content visits are tracked?{% endtrans %}</h2>
<p>{% trans %}The core History module tracks when each logged-in user has most recently visited each content item page on the site. This allows content to be marked as <em>new</em> or <em>updated</em> for each user, meaning that it was newly created or has been updated since the last time they visited its page. These records are kept for one month, meaning that content older than one month is never marked as new or updated.{% endtrans %}</p>
<h2>{% trans %}What options are available for using this tracking information?{% endtrans %}</h2>
<p>{% trans %}You can display the new/updated status of content by creating or editing a view. There is a <em>Has new content</em> field for <em>Content</em> views, which displays the new/updated marker. There is also a <em>Has new content</em> filter, which limits the view to new and updated content.{% endtrans %}</p>", "@help_topics/history.tracking_user_content.html.twig", "/var/www/votacao/web/core/modules/history/help_topics/history.tracking_user_content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
                []
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
