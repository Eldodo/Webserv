<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_1d45e4b55f90aeeb9bb06128ec08f51a39af7dd22172f09da904c21dca269d90 extends Twig_Template
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
        $__internal_a863b5b4aed9c7b59508856fe361d2ae5e659b89ab105ddf7ebae87a8582b1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a863b5b4aed9c7b59508856fe361d2ae5e659b89ab105ddf7ebae87a8582b1ec->enter($__internal_a863b5b4aed9c7b59508856fe361d2ae5e659b89ab105ddf7ebae87a8582b1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_33747d0faefcc6c951c68363daa1811290e52594bf71981bbd2dafb96f080ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33747d0faefcc6c951c68363daa1811290e52594bf71981bbd2dafb96f080ef1->enter($__internal_33747d0faefcc6c951c68363daa1811290e52594bf71981bbd2dafb96f080ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a863b5b4aed9c7b59508856fe361d2ae5e659b89ab105ddf7ebae87a8582b1ec->leave($__internal_a863b5b4aed9c7b59508856fe361d2ae5e659b89ab105ddf7ebae87a8582b1ec_prof);

        
        $__internal_33747d0faefcc6c951c68363daa1811290e52594bf71981bbd2dafb96f080ef1->leave($__internal_33747d0faefcc6c951c68363daa1811290e52594bf71981bbd2dafb96f080ef1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
