<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9180ece55a1d6e178d05e18ba2cbbc42d59183df6c1aa11037f0ec8ef46ede2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee32fe9e2f8e9e76c6d4e194a49556ad6d31345e060a525d5be078ea7674b255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee32fe9e2f8e9e76c6d4e194a49556ad6d31345e060a525d5be078ea7674b255->enter($__internal_ee32fe9e2f8e9e76c6d4e194a49556ad6d31345e060a525d5be078ea7674b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_275e704fe8b2d54ca823f53f62773a12e3780e2f048e56a0e666fe39597af5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275e704fe8b2d54ca823f53f62773a12e3780e2f048e56a0e666fe39597af5ba->enter($__internal_275e704fe8b2d54ca823f53f62773a12e3780e2f048e56a0e666fe39597af5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ee32fe9e2f8e9e76c6d4e194a49556ad6d31345e060a525d5be078ea7674b255->leave($__internal_ee32fe9e2f8e9e76c6d4e194a49556ad6d31345e060a525d5be078ea7674b255_prof);

        
        $__internal_275e704fe8b2d54ca823f53f62773a12e3780e2f048e56a0e666fe39597af5ba->leave($__internal_275e704fe8b2d54ca823f53f62773a12e3780e2f048e56a0e666fe39597af5ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}