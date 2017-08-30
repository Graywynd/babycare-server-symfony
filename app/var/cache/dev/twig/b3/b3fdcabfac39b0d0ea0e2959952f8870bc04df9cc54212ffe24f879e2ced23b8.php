<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c77f11f0d09bd42916cdae7f47072f32b749c4d7900daeb6d45fea48275c1068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77f11f0d09bd42916cdae7f47072f32b749c4d7900daeb6d45fea48275c1068->enter($__internal_c77f11f0d09bd42916cdae7f47072f32b749c4d7900daeb6d45fea48275c1068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c54565a75c2633d0c42ebb2c95c40073374181c9c2a32de6072687c75462fdb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54565a75c2633d0c42ebb2c95c40073374181c9c2a32de6072687c75462fdb6->enter($__internal_c54565a75c2633d0c42ebb2c95c40073374181c9c2a32de6072687c75462fdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c77f11f0d09bd42916cdae7f47072f32b749c4d7900daeb6d45fea48275c1068->leave($__internal_c77f11f0d09bd42916cdae7f47072f32b749c4d7900daeb6d45fea48275c1068_prof);

        
        $__internal_c54565a75c2633d0c42ebb2c95c40073374181c9c2a32de6072687c75462fdb6->leave($__internal_c54565a75c2633d0c42ebb2c95c40073374181c9c2a32de6072687c75462fdb6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ddd08d93631f3e57cd53088a63e12c2708cb424548dcd1dd1e8d30bb7c43185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddd08d93631f3e57cd53088a63e12c2708cb424548dcd1dd1e8d30bb7c43185->enter($__internal_5ddd08d93631f3e57cd53088a63e12c2708cb424548dcd1dd1e8d30bb7c43185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_040b5fc2a2ea68026955a30427d5fbde997c21ceffe41c4e2615d88021e524cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040b5fc2a2ea68026955a30427d5fbde997c21ceffe41c4e2615d88021e524cc->enter($__internal_040b5fc2a2ea68026955a30427d5fbde997c21ceffe41c4e2615d88021e524cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_040b5fc2a2ea68026955a30427d5fbde997c21ceffe41c4e2615d88021e524cc->leave($__internal_040b5fc2a2ea68026955a30427d5fbde997c21ceffe41c4e2615d88021e524cc_prof);

        
        $__internal_5ddd08d93631f3e57cd53088a63e12c2708cb424548dcd1dd1e8d30bb7c43185->leave($__internal_5ddd08d93631f3e57cd53088a63e12c2708cb424548dcd1dd1e8d30bb7c43185_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a2cad68aa0d74a89c49355d2eb72b6a0d080c5993e87f27e8d8d731132cae7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2cad68aa0d74a89c49355d2eb72b6a0d080c5993e87f27e8d8d731132cae7c->enter($__internal_7a2cad68aa0d74a89c49355d2eb72b6a0d080c5993e87f27e8d8d731132cae7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8918c63ad5f8b95bd2c731ad32cbb94fdca730ea924a0a0dd3b97e3d0d05d50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8918c63ad5f8b95bd2c731ad32cbb94fdca730ea924a0a0dd3b97e3d0d05d50b->enter($__internal_8918c63ad5f8b95bd2c731ad32cbb94fdca730ea924a0a0dd3b97e3d0d05d50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8918c63ad5f8b95bd2c731ad32cbb94fdca730ea924a0a0dd3b97e3d0d05d50b->leave($__internal_8918c63ad5f8b95bd2c731ad32cbb94fdca730ea924a0a0dd3b97e3d0d05d50b_prof);

        
        $__internal_7a2cad68aa0d74a89c49355d2eb72b6a0d080c5993e87f27e8d8d731132cae7c->leave($__internal_7a2cad68aa0d74a89c49355d2eb72b6a0d080c5993e87f27e8d8d731132cae7c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_72dc3dc3716a6c7af39944f1938f9410e46906c370fbfc56fd9b99f72ee65106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72dc3dc3716a6c7af39944f1938f9410e46906c370fbfc56fd9b99f72ee65106->enter($__internal_72dc3dc3716a6c7af39944f1938f9410e46906c370fbfc56fd9b99f72ee65106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1bfa9b4547fed66c3cfbdef6ab4a85b85003745e16f97af90b0c3a261bbfe1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bfa9b4547fed66c3cfbdef6ab4a85b85003745e16f97af90b0c3a261bbfe1d->enter($__internal_b1bfa9b4547fed66c3cfbdef6ab4a85b85003745e16f97af90b0c3a261bbfe1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1bfa9b4547fed66c3cfbdef6ab4a85b85003745e16f97af90b0c3a261bbfe1d->leave($__internal_b1bfa9b4547fed66c3cfbdef6ab4a85b85003745e16f97af90b0c3a261bbfe1d_prof);

        
        $__internal_72dc3dc3716a6c7af39944f1938f9410e46906c370fbfc56fd9b99f72ee65106->leave($__internal_72dc3dc3716a6c7af39944f1938f9410e46906c370fbfc56fd9b99f72ee65106_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\php_projects\\babycare-server-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
