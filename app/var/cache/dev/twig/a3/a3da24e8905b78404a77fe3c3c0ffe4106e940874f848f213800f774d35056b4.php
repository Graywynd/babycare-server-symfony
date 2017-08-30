<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d9a02a412831db7278c2e18bcb3d0ec793bb0027bc37bb25699ac730211962f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9a02a412831db7278c2e18bcb3d0ec793bb0027bc37bb25699ac730211962f->enter($__internal_3d9a02a412831db7278c2e18bcb3d0ec793bb0027bc37bb25699ac730211962f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e0fb0f9077dc8a85e244b24e1ef21064772ce6366a7a20e801152349c16a99d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fb0f9077dc8a85e244b24e1ef21064772ce6366a7a20e801152349c16a99d8->enter($__internal_e0fb0f9077dc8a85e244b24e1ef21064772ce6366a7a20e801152349c16a99d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3d9a02a412831db7278c2e18bcb3d0ec793bb0027bc37bb25699ac730211962f->leave($__internal_3d9a02a412831db7278c2e18bcb3d0ec793bb0027bc37bb25699ac730211962f_prof);

        
        $__internal_e0fb0f9077dc8a85e244b24e1ef21064772ce6366a7a20e801152349c16a99d8->leave($__internal_e0fb0f9077dc8a85e244b24e1ef21064772ce6366a7a20e801152349c16a99d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3da8a42fe79597c862261c53f5cf86a668053da12a59ee842bf03338caa7b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3da8a42fe79597c862261c53f5cf86a668053da12a59ee842bf03338caa7b1d->enter($__internal_f3da8a42fe79597c862261c53f5cf86a668053da12a59ee842bf03338caa7b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a46c22e9f4b6a1639b190ea211d110f909a43069b13a4997cc8a64ef5a318eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a46c22e9f4b6a1639b190ea211d110f909a43069b13a4997cc8a64ef5a318eb->enter($__internal_3a46c22e9f4b6a1639b190ea211d110f909a43069b13a4997cc8a64ef5a318eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3a46c22e9f4b6a1639b190ea211d110f909a43069b13a4997cc8a64ef5a318eb->leave($__internal_3a46c22e9f4b6a1639b190ea211d110f909a43069b13a4997cc8a64ef5a318eb_prof);

        
        $__internal_f3da8a42fe79597c862261c53f5cf86a668053da12a59ee842bf03338caa7b1d->leave($__internal_f3da8a42fe79597c862261c53f5cf86a668053da12a59ee842bf03338caa7b1d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d0f23936139ef7a8cc1c59b542d4569d7c712ff225572ceb418144c5727d94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0f23936139ef7a8cc1c59b542d4569d7c712ff225572ceb418144c5727d94c->enter($__internal_2d0f23936139ef7a8cc1c59b542d4569d7c712ff225572ceb418144c5727d94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0e850966aa124470e495e6d1d80e26fc5b9eb87de715858e58414472ebdbed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e850966aa124470e495e6d1d80e26fc5b9eb87de715858e58414472ebdbed1->enter($__internal_e0e850966aa124470e495e6d1d80e26fc5b9eb87de715858e58414472ebdbed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0e850966aa124470e495e6d1d80e26fc5b9eb87de715858e58414472ebdbed1->leave($__internal_e0e850966aa124470e495e6d1d80e26fc5b9eb87de715858e58414472ebdbed1_prof);

        
        $__internal_2d0f23936139ef7a8cc1c59b542d4569d7c712ff225572ceb418144c5727d94c->leave($__internal_2d0f23936139ef7a8cc1c59b542d4569d7c712ff225572ceb418144c5727d94c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f4d6d6c1a9de0dbd645229728be3da777d90edeadb7658f8584cd9fcbebb227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4d6d6c1a9de0dbd645229728be3da777d90edeadb7658f8584cd9fcbebb227->enter($__internal_6f4d6d6c1a9de0dbd645229728be3da777d90edeadb7658f8584cd9fcbebb227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4502c9580b651562272456afe7f251fd4374013da355df5126ab7770684a49c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4502c9580b651562272456afe7f251fd4374013da355df5126ab7770684a49c5->enter($__internal_4502c9580b651562272456afe7f251fd4374013da355df5126ab7770684a49c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4502c9580b651562272456afe7f251fd4374013da355df5126ab7770684a49c5->leave($__internal_4502c9580b651562272456afe7f251fd4374013da355df5126ab7770684a49c5_prof);

        
        $__internal_6f4d6d6c1a9de0dbd645229728be3da777d90edeadb7658f8584cd9fcbebb227->leave($__internal_6f4d6d6c1a9de0dbd645229728be3da777d90edeadb7658f8584cd9fcbebb227_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_829752d3587972a9ffc436c3fcb5fbe14393d0c66e8f5274d65b4efd538661c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829752d3587972a9ffc436c3fcb5fbe14393d0c66e8f5274d65b4efd538661c9->enter($__internal_829752d3587972a9ffc436c3fcb5fbe14393d0c66e8f5274d65b4efd538661c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_13c885916ca3d7afe413e45b7e41dbfd565cb309d5955b44abb0795d5eb08f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c885916ca3d7afe413e45b7e41dbfd565cb309d5955b44abb0795d5eb08f21->enter($__internal_13c885916ca3d7afe413e45b7e41dbfd565cb309d5955b44abb0795d5eb08f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13c885916ca3d7afe413e45b7e41dbfd565cb309d5955b44abb0795d5eb08f21->leave($__internal_13c885916ca3d7afe413e45b7e41dbfd565cb309d5955b44abb0795d5eb08f21_prof);

        
        $__internal_829752d3587972a9ffc436c3fcb5fbe14393d0c66e8f5274d65b4efd538661c9->leave($__internal_829752d3587972a9ffc436c3fcb5fbe14393d0c66e8f5274d65b4efd538661c9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\php_projects\\babycare-server-symfony\\app\\Resources\\views\\base.html.twig");
    }
}
