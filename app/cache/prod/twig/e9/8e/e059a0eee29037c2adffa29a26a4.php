<?php

/* UserBundle:Login:login.html.twig */
class __TwigTemplate_e98ee059a0eee29037c2adffa29a26a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Добро пожаловать!";
    }

    // line 5
    public function block_bodyclass($context, array $blocks = array())
    {
        echo "welcome";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"welcome\">
        <div id=\"password\" class=\"animated fadeInDown\">
            <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">
                <div class=\"input username\"><input type=\"text\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Имя пользователя\" /></div>
                <div class=\"input password\"><input type=\"password\" name=\"_password\" placeholder=\"Пароль\" /></div>
                <button>Войти</button>
            </form>
        </div>
    </div>

";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/static/scripts/login.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  68 => 20,  56 => 11,  52 => 10,  48 => 8,  45 => 7,  39 => 5,  31 => 3,);
    }
}
