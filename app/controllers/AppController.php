<?php

class AppController
{
    protected $routes = [
        'acasa' => 'AcasaController',
        'despre_noi' => 'DespreNoiController',
        'contact' => 'ContactController',
        'usi' => 'UsiController',
        'geamuri' => 'GeamuriController',
        'feronerie' => 'FeronerieController',
        'case' => 'CaseController',
        'blocuri' => 'BlocuriController',
        'balcoane' => 'BalcoaneController',
        'login' => 'LoginController',
        'signup' => 'SignupController',
        'logout' => 'LogoutController',

    ];

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {


        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 'acasa';
        }

        if (array_key_exists($page, $this->routes)) {
            $className = $this->routes[$page];
        } else $className = $this->routes['acasa'];
        new $className;
    }

    public function render($page, $data)
    {
        $template = file_get_contents($page);

        preg_match_all("[{{\w+}}]", $template, $matches);

        foreach ($matches[0] as $value) {
            $item = str_replace('{{', '', $value);
            $item = str_replace('}}', '', $item);
            if (array_key_exists($item, $data)) {
                $template = str_replace($value, $data[$item], $template);
            }
        }
        return $template;
    }
}
