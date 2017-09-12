<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_348c1f0089bb001fab17f4cac64a056cc9a8cc60400c9be47d1490374a1049f9 extends Twig_Template
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
        $__internal_13f14f558c8325638208212c60d450f61762475c9d2c41b4e313bc01afe450d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f14f558c8325638208212c60d450f61762475c9d2c41b4e313bc01afe450d3->enter($__internal_13f14f558c8325638208212c60d450f61762475c9d2c41b4e313bc01afe450d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f14f558c8325638208212c60d450f61762475c9d2c41b4e313bc01afe450d3->leave($__internal_13f14f558c8325638208212c60d450f61762475c9d2c41b4e313bc01afe450d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3f354531059b1595c16f6b6950d1f3fb3362aac8b033ff62551742a36e5bd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f354531059b1595c16f6b6950d1f3fb3362aac8b033ff62551742a36e5bd35->enter($__internal_d3f354531059b1595c16f6b6950d1f3fb3362aac8b033ff62551742a36e5bd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3f354531059b1595c16f6b6950d1f3fb3362aac8b033ff62551742a36e5bd35->leave($__internal_d3f354531059b1595c16f6b6950d1f3fb3362aac8b033ff62551742a36e5bd35_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7e4a288540ee34f6975467e873909d4c19a6a8dcef8b369add859e3f6d2b24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e4a288540ee34f6975467e873909d4c19a6a8dcef8b369add859e3f6d2b24f->enter($__internal_c7e4a288540ee34f6975467e873909d4c19a6a8dcef8b369add859e3f6d2b24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c7e4a288540ee34f6975467e873909d4c19a6a8dcef8b369add859e3f6d2b24f->leave($__internal_c7e4a288540ee34f6975467e873909d4c19a6a8dcef8b369add859e3f6d2b24f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b3d36c2695c19a5e3c436a5f8e074f6aceedcd10e60dc72729b0fc1f5a95283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3d36c2695c19a5e3c436a5f8e074f6aceedcd10e60dc72729b0fc1f5a95283->enter($__internal_7b3d36c2695c19a5e3c436a5f8e074f6aceedcd10e60dc72729b0fc1f5a95283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b3d36c2695c19a5e3c436a5f8e074f6aceedcd10e60dc72729b0fc1f5a95283->leave($__internal_7b3d36c2695c19a5e3c436a5f8e074f6aceedcd10e60dc72729b0fc1f5a95283_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
