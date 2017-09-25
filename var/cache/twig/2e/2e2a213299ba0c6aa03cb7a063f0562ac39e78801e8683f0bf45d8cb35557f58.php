<?php

/* layout.html.twig */
class __TwigTemplate_f92fe55e983443d36ca0a179d9ae6effee5839656a0aa04aed2dd7153360b0ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c1d8dd6197d43cb912ec6eb15b91b6c74763c7f316e6a4096d53b36f6e06d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1d8dd6197d43cb912ec6eb15b91b6c74763c7f316e6a4096d53b36f6e06d21->enter($__internal_3c1d8dd6197d43cb912ec6eb15b91b6c74763c7f316e6a4096d53b36f6e06d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_8ff85e828b1094eec17c9cc751a5f91ffec8e3206b1142098c0571e6b0282f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff85e828b1094eec17c9cc751a5f91ffec8e3206b1142098c0571e6b0282f26->enter($__internal_8ff85e828b1094eec17c9cc751a5f91ffec8e3206b1142098c0571e6b0282f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>
       
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"HANDICAP\">
        <meta name=\"author\" content=\"WF3\">
        <!-- Favicon -->
        <link rel=\"icon\" href=\"assets/icon/favicon.ico\">

        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo " - projet wf3 </title>

        <!-- Bootstrap core CSS -->

        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-3.3.4/css/bootstrap.min.css"), "html", null, true);
        echo "\" type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src=\"assets/js/html5shiv.min.js\"></script>
              <script src=\"assets/js/respond.min.js\"></script>
            <![endif]-->

    </head>
    
    <body>
         ";
        // line 29
        $this->loadTemplate("header.html.twig", "layout.html.twig", 29)->display($context);
        echo "  
         
        <div class=\"container\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 33
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                echo " 
                    ";
                // line 34
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 35
                echo "                    <div class=\"aler alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo $context["flash"];
                echo " </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "        </div>
           
        ";
        // line 43
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 43)->display($context);
        // line 44
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "        

    </body>
</html>
";
        
        $__internal_3c1d8dd6197d43cb912ec6eb15b91b6c74763c7f316e6a4096d53b36f6e06d21->leave($__internal_3c1d8dd6197d43cb912ec6eb15b91b6c74763c7f316e6a4096d53b36f6e06d21_prof);

        
        $__internal_8ff85e828b1094eec17c9cc751a5f91ffec8e3206b1142098c0571e6b0282f26->leave($__internal_8ff85e828b1094eec17c9cc751a5f91ffec8e3206b1142098c0571e6b0282f26_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4a5c67dbe0945a45750f6310b4994ec17adcc35095ca3603eed198c700cee2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a5c67dbe0945a45750f6310b4994ec17adcc35095ca3603eed198c700cee2d->enter($__internal_b4a5c67dbe0945a45750f6310b4994ec17adcc35095ca3603eed198c700cee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bbd40f226aa9cb53bebbfb10a3d056524ba55e4858991a13faabdb8aa41aeaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbd40f226aa9cb53bebbfb10a3d056524ba55e4858991a13faabdb8aa41aeaa->enter($__internal_4bbd40f226aa9cb53bebbfb10a3d056524ba55e4858991a13faabdb8aa41aeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_4bbd40f226aa9cb53bebbfb10a3d056524ba55e4858991a13faabdb8aa41aeaa->leave($__internal_4bbd40f226aa9cb53bebbfb10a3d056524ba55e4858991a13faabdb8aa41aeaa_prof);

        
        $__internal_b4a5c67dbe0945a45750f6310b4994ec17adcc35095ca3603eed198c700cee2d->leave($__internal_b4a5c67dbe0945a45750f6310b4994ec17adcc35095ca3603eed198c700cee2d_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc08e555fd48030d0110318a61850cdd0e7b001a7fa1aee7c75862c051f24706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc08e555fd48030d0110318a61850cdd0e7b001a7fa1aee7c75862c051f24706->enter($__internal_bc08e555fd48030d0110318a61850cdd0e7b001a7fa1aee7c75862c051f24706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6fc46864c82d64a4238c40572da09a2ef8678510e361d08e29552cf4f9cdbac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc46864c82d64a4238c40572da09a2ef8678510e361d08e29552cf4f9cdbac6->enter($__internal_6fc46864c82d64a4238c40572da09a2ef8678510e361d08e29552cf4f9cdbac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6fc46864c82d64a4238c40572da09a2ef8678510e361d08e29552cf4f9cdbac6->leave($__internal_6fc46864c82d64a4238c40572da09a2ef8678510e361d08e29552cf4f9cdbac6_prof);

        
        $__internal_bc08e555fd48030d0110318a61850cdd0e7b001a7fa1aee7c75862c051f24706->leave($__internal_bc08e555fd48030d0110318a61850cdd0e7b001a7fa1aee7c75862c051f24706_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b098efdcbb0e7c6b0e20c1500bcf5f6f49743b09b919a6cb2c7a0c07e05bae8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b098efdcbb0e7c6b0e20c1500bcf5f6f49743b09b919a6cb2c7a0c07e05bae8e->enter($__internal_b098efdcbb0e7c6b0e20c1500bcf5f6f49743b09b919a6cb2c7a0c07e05bae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ee0f25ece35c47eeec17bd0786575748bd3f2bd8165268b5ea7f54be0c1bd9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0f25ece35c47eeec17bd0786575748bd3f2bd8165268b5ea7f54be0c1bd9f0->enter($__internal_ee0f25ece35c47eeec17bd0786575748bd3f2bd8165268b5ea7f54be0c1bd9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "
                 <!-- Bootstrap core JavaScript
        ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap -->\t
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-3.3.4/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <!-- owl-carousel -->
\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <!-- masonry -->
\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/masonry/masonry.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Form Validation -->
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- custom -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ee0f25ece35c47eeec17bd0786575748bd3f2bd8165268b5ea7f54be0c1bd9f0->leave($__internal_ee0f25ece35c47eeec17bd0786575748bd3f2bd8165268b5ea7f54be0c1bd9f0_prof);

        
        $__internal_b098efdcbb0e7c6b0e20c1500bcf5f6f49743b09b919a6cb2c7a0c07e05bae8e->leave($__internal_b098efdcbb0e7c6b0e20c1500bcf5f6f49743b09b919a6cb2c7a0c07e05bae8e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 60,  210 => 58,  205 => 56,  200 => 54,  195 => 52,  191 => 51,  186 => 49,  180 => 45,  171 => 44,  154 => 40,  136 => 14,  122 => 62,  119 => 44,  117 => 43,  113 => 41,  111 => 40,  108 => 39,  102 => 38,  90 => 35,  84 => 34,  77 => 33,  73 => 32,  67 => 29,  54 => 19,  50 => 18,  43 => 14,  28 => 1,);
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
<html lang=\"fr\">

    <head>
       
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"HANDICAP\">
        <meta name=\"author\" content=\"WF3\">
        <!-- Favicon -->
        <link rel=\"icon\" href=\"assets/icon/favicon.ico\">

        <title>{% block title '' %} - projet wf3 </title>

        <!-- Bootstrap core CSS -->

        <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/bootstrap-3.3.4/css/bootstrap.min.css') }}\" type='text/css'>
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" type=\"text/css\">
         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src=\"assets/js/html5shiv.min.js\"></script>
              <script src=\"assets/js/respond.min.js\"></script>
            <![endif]-->

    </head>
    
    <body>
         {% include 'header.html.twig'%}  
         
        <div class=\"container\">
            {% for type, flashes in app.session.flashbag.all %}
                {% for  flash in flashes %} 
                    {% if type == 'error' %} {% set type = 'danger' %} {% endif %}
                    <div class=\"aler alert-{{type}}\"> {{ flash | raw }} </div>

                {% endfor %}
            {% endfor %}

            {% block content %}{% endblock %}
        </div>
           
        {% include 'footer.html.twig'%}
        {% block javascripts %}

                 <!-- Bootstrap core JavaScript
        ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src=\"{{ asset('assets/js/jquery-1.11.2.min.js') }}\"></script>
    <!-- bootstrap -->\t
    <script src=\"{{ asset('assets/plugins/bootstrap-3.3.4/js/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/modernizr.js') }}\"></script>
    <!-- owl-carousel -->
\t<script src=\"{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}\"></script>
    <!-- masonry -->
\t<script src=\"{{ asset('assets/plugins/masonry/masonry.min.js') }}\"></script>
    <!-- Form Validation -->
    <script src=\"{{ asset('assets/plugins/jquery-validate/jquery.validate.min.js') }}\"></script>
    <!-- custom -->
    <script src=\"{{ asset('assets/js/app.js') }}\"></script>
        {% endblock %}
        

    </body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\layout.html.twig");
    }
}
