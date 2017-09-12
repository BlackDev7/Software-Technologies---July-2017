<?php

/* base.html.twig */
class __TwigTemplate_2d04cb95e59f1b8a53d95fa197a1ccdb458b6022e1a38eaf7cbf09899b2e2df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c674f473ab6b82a7158ed3a927c3ef41019e9668bd33d10a9dd306dae2827bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c674f473ab6b82a7158ed3a927c3ef41019e9668bd33d10a9dd306dae2827bd->enter($__internal_2c674f473ab6b82a7158ed3a927c3ef41019e9668bd33d10a9dd306dae2827bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_2c674f473ab6b82a7158ed3a927c3ef41019e9668bd33d10a9dd306dae2827bd->leave($__internal_2c674f473ab6b82a7158ed3a927c3ef41019e9668bd33d10a9dd306dae2827bd_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e7a5bc969ed5e060ce76f00cca014b01f150cb2175a32b28a83948f957708a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7a5bc969ed5e060ce76f00cca014b01f150cb2175a32b28a83948f957708a1->enter($__internal_6e7a5bc969ed5e060ce76f00cca014b01f150cb2175a32b28a83948f957708a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_6e7a5bc969ed5e060ce76f00cca014b01f150cb2175a32b28a83948f957708a1->leave($__internal_6e7a5bc969ed5e060ce76f00cca014b01f150cb2175a32b28a83948f957708a1_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8400a2c1ad62484781dc6f595db9e09ea716f8f590fcb8b8b831d4ecee5c6525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8400a2c1ad62484781dc6f595db9e09ea716f8f590fcb8b8b831d4ecee5c6525->enter($__internal_8400a2c1ad62484781dc6f595db9e09ea716f8f590fcb8b8b831d4ecee5c6525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_8400a2c1ad62484781dc6f595db9e09ea716f8f590fcb8b8b831d4ecee5c6525->leave($__internal_8400a2c1ad62484781dc6f595db9e09ea716f8f590fcb8b8b831d4ecee5c6525_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_309052a374c326c1f4a867893c42de7064de432b9abecb89903a0bb47066ed90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309052a374c326c1f4a867893c42de7064de432b9abecb89903a0bb47066ed90->enter($__internal_309052a374c326c1f4a867893c42de7064de432b9abecb89903a0bb47066ed90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_309052a374c326c1f4a867893c42de7064de432b9abecb89903a0bb47066ed90->leave($__internal_309052a374c326c1f4a867893c42de7064de432b9abecb89903a0bb47066ed90_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_411a5a2daf4ccc5e20b6e6add6e02b0117f76acc0fd14b0a1b5fc59f6b5cb7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411a5a2daf4ccc5e20b6e6add6e02b0117f76acc0fd14b0a1b5fc59f6b5cb7ff->enter($__internal_411a5a2daf4ccc5e20b6e6add6e02b0117f76acc0fd14b0a1b5fc59f6b5cb7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_411a5a2daf4ccc5e20b6e6add6e02b0117f76acc0fd14b0a1b5fc59f6b5cb7ff->leave($__internal_411a5a2daf4ccc5e20b6e6add6e02b0117f76acc0fd14b0a1b5fc59f6b5cb7ff_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc538d781020c83da4b235085a26183d20dbc31fd8154a9fe7f0d9da56acb2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc538d781020c83da4b235085a26183d20dbc31fd8154a9fe7f0d9da56acb2a9->enter($__internal_cc538d781020c83da4b235085a26183d20dbc31fd8154a9fe7f0d9da56acb2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_cc538d781020c83da4b235085a26183d20dbc31fd8154a9fe7f0d9da56acb2a9->leave($__internal_cc538d781020c83da4b235085a26183d20dbc31fd8154a9fe7f0d9da56acb2a9_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_b2eb4e7c35102dc71abd0276f09f4145530ec37fe70f243baaa8eb818ed87a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2eb4e7c35102dc71abd0276f09f4145530ec37fe70f243baaa8eb818ed87a87->enter($__internal_b2eb4e7c35102dc71abd0276f09f4145530ec37fe70f243baaa8eb818ed87a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b2eb4e7c35102dc71abd0276f09f4145530ec37fe70f243baaa8eb818ed87a87->leave($__internal_b2eb4e7c35102dc71abd0276f09f4145530ec37fe70f243baaa8eb818ed87a87_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54d67309396b792a76addedc8a2b9bcaa4d51bd5d38b3179586656af223c4186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d67309396b792a76addedc8a2b9bcaa4d51bd5d38b3179586656af223c4186->enter($__internal_54d67309396b792a76addedc8a2b9bcaa4d51bd5d38b3179586656af223c4186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_54d67309396b792a76addedc8a2b9bcaa4d51bd5d38b3179586656af223c4186->leave($__internal_54d67309396b792a76addedc8a2b9bcaa4d51bd5d38b3179586656af223c4186_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
