<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b416f70a7eb484e054215570fdf9a18b2904e1557cbf2f70bd67dec3b3bbc33c extends Twig_Template
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
        $__internal_a54753f91eddb95f22ca9c29743f4fed5c34d05f39451ddb0e237210ebb55cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54753f91eddb95f22ca9c29743f4fed5c34d05f39451ddb0e237210ebb55cc0->enter($__internal_a54753f91eddb95f22ca9c29743f4fed5c34d05f39451ddb0e237210ebb55cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54753f91eddb95f22ca9c29743f4fed5c34d05f39451ddb0e237210ebb55cc0->leave($__internal_a54753f91eddb95f22ca9c29743f4fed5c34d05f39451ddb0e237210ebb55cc0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1c362ca6fc699be7181dc1a3aacba42b9733616c661349ee70570af3e4f58ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c362ca6fc699be7181dc1a3aacba42b9733616c661349ee70570af3e4f58ef->enter($__internal_c1c362ca6fc699be7181dc1a3aacba42b9733616c661349ee70570af3e4f58ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c1c362ca6fc699be7181dc1a3aacba42b9733616c661349ee70570af3e4f58ef->leave($__internal_c1c362ca6fc699be7181dc1a3aacba42b9733616c661349ee70570af3e4f58ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0190148510a0e5752c01607a9c4e389a89fa9026bf26d8d05c3431140a19d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0190148510a0e5752c01607a9c4e389a89fa9026bf26d8d05c3431140a19d29->enter($__internal_c0190148510a0e5752c01607a9c4e389a89fa9026bf26d8d05c3431140a19d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c0190148510a0e5752c01607a9c4e389a89fa9026bf26d8d05c3431140a19d29->leave($__internal_c0190148510a0e5752c01607a9c4e389a89fa9026bf26d8d05c3431140a19d29_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a016966084bb9333cc77ae9f2d1a219f8882eafeb2da08b3dc59aeafcd92c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a016966084bb9333cc77ae9f2d1a219f8882eafeb2da08b3dc59aeafcd92c33->enter($__internal_0a016966084bb9333cc77ae9f2d1a219f8882eafeb2da08b3dc59aeafcd92c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0a016966084bb9333cc77ae9f2d1a219f8882eafeb2da08b3dc59aeafcd92c33->leave($__internal_0a016966084bb9333cc77ae9f2d1a219f8882eafeb2da08b3dc59aeafcd92c33_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
