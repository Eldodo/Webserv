<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_20ba3b2b4dd2a1442de899007c26160e2fb3d3593b152bbc9ad5190b91eb0ddb extends Twig_Template
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
        $__internal_106e1265bdb0bcae73c2e73913943374c5460a9c960c1575a7bf6527baafd910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106e1265bdb0bcae73c2e73913943374c5460a9c960c1575a7bf6527baafd910->enter($__internal_106e1265bdb0bcae73c2e73913943374c5460a9c960c1575a7bf6527baafd910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ec3909b6e4e36bab1ab946b46f4b2c506dd829c577897aec4199317a3c57a2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3909b6e4e36bab1ab946b46f4b2c506dd829c577897aec4199317a3c57a2db->enter($__internal_ec3909b6e4e36bab1ab946b46f4b2c506dd829c577897aec4199317a3c57a2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_106e1265bdb0bcae73c2e73913943374c5460a9c960c1575a7bf6527baafd910->leave($__internal_106e1265bdb0bcae73c2e73913943374c5460a9c960c1575a7bf6527baafd910_prof);

        
        $__internal_ec3909b6e4e36bab1ab946b46f4b2c506dd829c577897aec4199317a3c57a2db->leave($__internal_ec3909b6e4e36bab1ab946b46f4b2c506dd829c577897aec4199317a3c57a2db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
