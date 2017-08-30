<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a7f10127228c56baabd90523b06b420896d0960e3197f956664a767cec66d0bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f10127228c56baabd90523b06b420896d0960e3197f956664a767cec66d0bb->enter($__internal_a7f10127228c56baabd90523b06b420896d0960e3197f956664a767cec66d0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f9496737a5358496000f30a73612b2b1c049d26bdb6c33fc4bf914ee45bb0506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9496737a5358496000f30a73612b2b1c049d26bdb6c33fc4bf914ee45bb0506->enter($__internal_f9496737a5358496000f30a73612b2b1c049d26bdb6c33fc4bf914ee45bb0506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7f10127228c56baabd90523b06b420896d0960e3197f956664a767cec66d0bb->leave($__internal_a7f10127228c56baabd90523b06b420896d0960e3197f956664a767cec66d0bb_prof);

        
        $__internal_f9496737a5358496000f30a73612b2b1c049d26bdb6c33fc4bf914ee45bb0506->leave($__internal_f9496737a5358496000f30a73612b2b1c049d26bdb6c33fc4bf914ee45bb0506_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ad3e35d0a84f0534bf5856117134dbd8c74c63e77cbab58b9ebd42e27d34ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad3e35d0a84f0534bf5856117134dbd8c74c63e77cbab58b9ebd42e27d34ab7->enter($__internal_0ad3e35d0a84f0534bf5856117134dbd8c74c63e77cbab58b9ebd42e27d34ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dcbd66bd2518842303477dedb56cc2f68d0adb817199e299916d2301128a2353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbd66bd2518842303477dedb56cc2f68d0adb817199e299916d2301128a2353->enter($__internal_dcbd66bd2518842303477dedb56cc2f68d0adb817199e299916d2301128a2353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dcbd66bd2518842303477dedb56cc2f68d0adb817199e299916d2301128a2353->leave($__internal_dcbd66bd2518842303477dedb56cc2f68d0adb817199e299916d2301128a2353_prof);

        
        $__internal_0ad3e35d0a84f0534bf5856117134dbd8c74c63e77cbab58b9ebd42e27d34ab7->leave($__internal_0ad3e35d0a84f0534bf5856117134dbd8c74c63e77cbab58b9ebd42e27d34ab7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bfc831a13ea8b1fa21597e1cbd7876beaf38cf696cd1195739106b418ebd117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfc831a13ea8b1fa21597e1cbd7876beaf38cf696cd1195739106b418ebd117->enter($__internal_3bfc831a13ea8b1fa21597e1cbd7876beaf38cf696cd1195739106b418ebd117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ced97c88fca2c10de82410d0f7f34971e1216c13995fc8144c48e475fdaa0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ced97c88fca2c10de82410d0f7f34971e1216c13995fc8144c48e475fdaa0d6->enter($__internal_3ced97c88fca2c10de82410d0f7f34971e1216c13995fc8144c48e475fdaa0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3ced97c88fca2c10de82410d0f7f34971e1216c13995fc8144c48e475fdaa0d6->leave($__internal_3ced97c88fca2c10de82410d0f7f34971e1216c13995fc8144c48e475fdaa0d6_prof);

        
        $__internal_3bfc831a13ea8b1fa21597e1cbd7876beaf38cf696cd1195739106b418ebd117->leave($__internal_3bfc831a13ea8b1fa21597e1cbd7876beaf38cf696cd1195739106b418ebd117_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f5b3973f41380ae9f39b865130cdc0434deb387ef040015fa1253f20e21b5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5b3973f41380ae9f39b865130cdc0434deb387ef040015fa1253f20e21b5c2->enter($__internal_7f5b3973f41380ae9f39b865130cdc0434deb387ef040015fa1253f20e21b5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_86c2bdd0bc51d146b53380e078fb11129e58165261cc4f1b9ba654e730c54652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c2bdd0bc51d146b53380e078fb11129e58165261cc4f1b9ba654e730c54652->enter($__internal_86c2bdd0bc51d146b53380e078fb11129e58165261cc4f1b9ba654e730c54652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_86c2bdd0bc51d146b53380e078fb11129e58165261cc4f1b9ba654e730c54652->leave($__internal_86c2bdd0bc51d146b53380e078fb11129e58165261cc4f1b9ba654e730c54652_prof);

        
        $__internal_7f5b3973f41380ae9f39b865130cdc0434deb387ef040015fa1253f20e21b5c2->leave($__internal_7f5b3973f41380ae9f39b865130cdc0434deb387ef040015fa1253f20e21b5c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\php_projects\\babycare-server-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
