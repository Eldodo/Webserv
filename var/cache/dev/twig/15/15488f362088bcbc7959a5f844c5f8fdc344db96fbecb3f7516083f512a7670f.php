<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_962e36dd7239c1464884932fbb52a8753ea9421e99719a7f5bdad27552086077 extends Twig_Template
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
        $__internal_4b7e5e4bb89d32e2136422dfdcf0ccabb4e43678f8af57fd59d73c84dfc9b78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7e5e4bb89d32e2136422dfdcf0ccabb4e43678f8af57fd59d73c84dfc9b78e->enter($__internal_4b7e5e4bb89d32e2136422dfdcf0ccabb4e43678f8af57fd59d73c84dfc9b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_18f8208d16bdd3179b01c733cc27ea2e499fcd4395e386a10676f2dbc66f453e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f8208d16bdd3179b01c733cc27ea2e499fcd4395e386a10676f2dbc66f453e->enter($__internal_18f8208d16bdd3179b01c733cc27ea2e499fcd4395e386a10676f2dbc66f453e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4b7e5e4bb89d32e2136422dfdcf0ccabb4e43678f8af57fd59d73c84dfc9b78e->leave($__internal_4b7e5e4bb89d32e2136422dfdcf0ccabb4e43678f8af57fd59d73c84dfc9b78e_prof);

        
        $__internal_18f8208d16bdd3179b01c733cc27ea2e499fcd4395e386a10676f2dbc66f453e->leave($__internal_18f8208d16bdd3179b01c733cc27ea2e499fcd4395e386a10676f2dbc66f453e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}