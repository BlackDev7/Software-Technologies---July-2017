<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f46b4be4efe994c710d0766f84459b95aabe42346c769cc52f7ed303e0e8f04e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b13177188f3f693e05ae701b3b1024de219ced0362f98e46fd31d14fe44a89c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13177188f3f693e05ae701b3b1024de219ced0362f98e46fd31d14fe44a89c2->enter($__internal_b13177188f3f693e05ae701b3b1024de219ced0362f98e46fd31d14fe44a89c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b13177188f3f693e05ae701b3b1024de219ced0362f98e46fd31d14fe44a89c2->leave($__internal_b13177188f3f693e05ae701b3b1024de219ced0362f98e46fd31d14fe44a89c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a5349c72e50d6f5db99a4a644314a675cf8d78beabfeec8a4650fc39a715968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5349c72e50d6f5db99a4a644314a675cf8d78beabfeec8a4650fc39a715968->enter($__internal_3a5349c72e50d6f5db99a4a644314a675cf8d78beabfeec8a4650fc39a715968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a5349c72e50d6f5db99a4a644314a675cf8d78beabfeec8a4650fc39a715968->leave($__internal_3a5349c72e50d6f5db99a4a644314a675cf8d78beabfeec8a4650fc39a715968_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc777627f40914ecd600e9e024c3168f11cc250473c5cab2e2fde4754778d7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc777627f40914ecd600e9e024c3168f11cc250473c5cab2e2fde4754778d7f3->enter($__internal_fc777627f40914ecd600e9e024c3168f11cc250473c5cab2e2fde4754778d7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fc777627f40914ecd600e9e024c3168f11cc250473c5cab2e2fde4754778d7f3->leave($__internal_fc777627f40914ecd600e9e024c3168f11cc250473c5cab2e2fde4754778d7f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ceb3b65f920f94a75dbc6ecf57dabd3dddca0dfda950cd6580097e68bba17e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ceb3b65f920f94a75dbc6ecf57dabd3dddca0dfda950cd6580097e68bba17e7->enter($__internal_5ceb3b65f920f94a75dbc6ecf57dabd3dddca0dfda950cd6580097e68bba17e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5ceb3b65f920f94a75dbc6ecf57dabd3dddca0dfda950cd6580097e68bba17e7->leave($__internal_5ceb3b65f920f94a75dbc6ecf57dabd3dddca0dfda950cd6580097e68bba17e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
