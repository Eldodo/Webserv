<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3379747899575c8f27cbcfaecff9311706b4538f5723275cc90d8bc6cedf152c extends Twig_Template
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
        $__internal_9b295dfdf0e3954b8fbcd5b54b9756592956e8d6c619b52292e59a57bcc950d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b295dfdf0e3954b8fbcd5b54b9756592956e8d6c619b52292e59a57bcc950d5->enter($__internal_9b295dfdf0e3954b8fbcd5b54b9756592956e8d6c619b52292e59a57bcc950d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_94d0398e0634a3295ba7e7efd8eaba29c5d215310b5346f356d889ee26599124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d0398e0634a3295ba7e7efd8eaba29c5d215310b5346f356d889ee26599124->enter($__internal_94d0398e0634a3295ba7e7efd8eaba29c5d215310b5346f356d889ee26599124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9b295dfdf0e3954b8fbcd5b54b9756592956e8d6c619b52292e59a57bcc950d5->leave($__internal_9b295dfdf0e3954b8fbcd5b54b9756592956e8d6c619b52292e59a57bcc950d5_prof);

        
        $__internal_94d0398e0634a3295ba7e7efd8eaba29c5d215310b5346f356d889ee26599124->leave($__internal_94d0398e0634a3295ba7e7efd8eaba29c5d215310b5346f356d889ee26599124_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}