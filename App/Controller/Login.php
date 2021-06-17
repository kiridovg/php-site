<?php
namespace App\Controller;

use App\Mapper\ProductMapper;
use Framework\Authentication\Authentication;
use Framework\Core\Controller;
use Framework\Core\View;

class Login extends Controller
{

    public Authentication $authentication;

    public View $view;

    public function register()
    {
        return $this->view->render('../App/View/Templates/home.php', null, 'layout.php');
    }

    public function login()
    {
        return $this->view->render('../App/View/Templates/login.php', null, 'layout.php');
    }

    public function user()
    {
        return $this->view->render('../App/View/Templates/user.php', [$this->authentication->getLogin()], 'layout.php');
    }

    public function authorization()
    {
        $this->authentication = new Authentication();
        if ($this->authentication->isAuth() == true) {
            $this->user();
        } else {
            $this->register();
        }
    }

    public function logout()
    {
        $this->authentication = new Authentication();
        $this->authentication->logOut();
        $this->register();
    }

}