<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_70b9cea358859dc31ffdf7b9b360fc65703746c8744ba28748e04d55ed31ef9b extends Twig_Template
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
        $__internal_fffa917242dc71e645aa82e009c01428af8421675231bc73481d7b61f9590297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fffa917242dc71e645aa82e009c01428af8421675231bc73481d7b61f9590297->enter($__internal_fffa917242dc71e645aa82e009c01428af8421675231bc73481d7b61f9590297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_90bfd73c8d81fff9148bcf7dea00551e27a54148f272070dd6ce57d59850036c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bfd73c8d81fff9148bcf7dea00551e27a54148f272070dd6ce57d59850036c->enter($__internal_90bfd73c8d81fff9148bcf7dea00551e27a54148f272070dd6ce57d59850036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_fffa917242dc71e645aa82e009c01428af8421675231bc73481d7b61f9590297->leave($__internal_fffa917242dc71e645aa82e009c01428af8421675231bc73481d7b61f9590297_prof);

        
        $__internal_90bfd73c8d81fff9148bcf7dea00551e27a54148f272070dd6ce57d59850036c->leave($__internal_90bfd73c8d81fff9148bcf7dea00551e27a54148f272070dd6ce57d59850036c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}