<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f599536538ba58f01ef3e18e8b8ab0b539948b53f51428421bd4d746afbafffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f599536538ba58f01ef3e18e8b8ab0b539948b53f51428421bd4d746afbafffa->enter($__internal_f599536538ba58f01ef3e18e8b8ab0b539948b53f51428421bd4d746afbafffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e879fa42ebaa19d10405eeea89307d96d4847587c19d29f81bed258ca2031721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e879fa42ebaa19d10405eeea89307d96d4847587c19d29f81bed258ca2031721->enter($__internal_e879fa42ebaa19d10405eeea89307d96d4847587c19d29f81bed258ca2031721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f599536538ba58f01ef3e18e8b8ab0b539948b53f51428421bd4d746afbafffa->leave($__internal_f599536538ba58f01ef3e18e8b8ab0b539948b53f51428421bd4d746afbafffa_prof);

        
        $__internal_e879fa42ebaa19d10405eeea89307d96d4847587c19d29f81bed258ca2031721->leave($__internal_e879fa42ebaa19d10405eeea89307d96d4847587c19d29f81bed258ca2031721_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93dc75cfa4ad1d5557ad090c25439910313a36d637e7647db5708203922d1555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93dc75cfa4ad1d5557ad090c25439910313a36d637e7647db5708203922d1555->enter($__internal_93dc75cfa4ad1d5557ad090c25439910313a36d637e7647db5708203922d1555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2fa1eb104088fc5b65ac712ae8f52f1a31c287794f628c5efd8d33b9dd9e3657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa1eb104088fc5b65ac712ae8f52f1a31c287794f628c5efd8d33b9dd9e3657->enter($__internal_2fa1eb104088fc5b65ac712ae8f52f1a31c287794f628c5efd8d33b9dd9e3657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2fa1eb104088fc5b65ac712ae8f52f1a31c287794f628c5efd8d33b9dd9e3657->leave($__internal_2fa1eb104088fc5b65ac712ae8f52f1a31c287794f628c5efd8d33b9dd9e3657_prof);

        
        $__internal_93dc75cfa4ad1d5557ad090c25439910313a36d637e7647db5708203922d1555->leave($__internal_93dc75cfa4ad1d5557ad090c25439910313a36d637e7647db5708203922d1555_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_442dd2b3e4c9981b501b256a881657a5314dab013c11fd94424f87f3144c3538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442dd2b3e4c9981b501b256a881657a5314dab013c11fd94424f87f3144c3538->enter($__internal_442dd2b3e4c9981b501b256a881657a5314dab013c11fd94424f87f3144c3538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_89305cfd562b77ec838a93cd4a1d465a187352f109133ec695f18f471fd833cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89305cfd562b77ec838a93cd4a1d465a187352f109133ec695f18f471fd833cd->enter($__internal_89305cfd562b77ec838a93cd4a1d465a187352f109133ec695f18f471fd833cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89305cfd562b77ec838a93cd4a1d465a187352f109133ec695f18f471fd833cd->leave($__internal_89305cfd562b77ec838a93cd4a1d465a187352f109133ec695f18f471fd833cd_prof);

        
        $__internal_442dd2b3e4c9981b501b256a881657a5314dab013c11fd94424f87f3144c3538->leave($__internal_442dd2b3e4c9981b501b256a881657a5314dab013c11fd94424f87f3144c3538_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1630b7604afac7a3f4fc4793d211f8e7bd1c0ea9aa8fca71b088edbc5823454b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1630b7604afac7a3f4fc4793d211f8e7bd1c0ea9aa8fca71b088edbc5823454b->enter($__internal_1630b7604afac7a3f4fc4793d211f8e7bd1c0ea9aa8fca71b088edbc5823454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06f4bb469bd4630d824bf4bae55afdaaee73a5d4cb7cf1d9cac71ca0a953b97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f4bb469bd4630d824bf4bae55afdaaee73a5d4cb7cf1d9cac71ca0a953b97d->enter($__internal_06f4bb469bd4630d824bf4bae55afdaaee73a5d4cb7cf1d9cac71ca0a953b97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06f4bb469bd4630d824bf4bae55afdaaee73a5d4cb7cf1d9cac71ca0a953b97d->leave($__internal_06f4bb469bd4630d824bf4bae55afdaaee73a5d4cb7cf1d9cac71ca0a953b97d_prof);

        
        $__internal_1630b7604afac7a3f4fc4793d211f8e7bd1c0ea9aa8fca71b088edbc5823454b->leave($__internal_1630b7604afac7a3f4fc4793d211f8e7bd1c0ea9aa8fca71b088edbc5823454b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\php_projects\\babycare-server-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
