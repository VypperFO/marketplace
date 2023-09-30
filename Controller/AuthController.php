<?php

namespace Controller;

use Model\User;
use Repository\AuthRepository;
use ViewModel\AuthLoginVM;
use ViewModel\AuthRegisterVM;
use \Utils\Session;

class AuthController extends BaseController
{
    public function register(): void
    {
        $error = "";
        $userRepo = new AuthRepository();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if ($_POST["csrf_token"] != $_SESSION["CSRF"]) {
                $error = "Erreur système, veuillez réessayer";
            }
            if (!$_POST['username'] || !$_POST['password'] || !$_POST['password_confirmation']) {
                $error = "Veuillez remplir tous les champs";
            } else if ($_POST['password'] < 8) {
                $error = 'mot de passe doit avoir au moins 8 caracteres';
            } else if ($_POST['password'] != $_POST['password_confirmation']) {
                $error = 'Confirmation du mot de passe invalide';
            } else if ($userRepo->getOne('username', $_POST['username'])) {
                $error = 'utilisateur deja existant';
            } else {
                $user = new User();
                $user->username = $_POST['username'];
                $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $userRepo->create($user);

                Session::setMessage("Votre compte a bien ete créé, vous pouvez vous connectez");
                $this->redirect('/auth/login');
            }
        }
        $_SESSION['CSRF'] = bin2hex(random_bytes(16));

        $vm = new AuthRegisterVM();
        $vm->error = $error;
        $vm->username = $_POST['username'] ?? '';
        $vm->csrf = $_SESSION['CSRF'];

        require('../views/auth/register.php');
    }

    public function login(): void
    {
        //$this->showView();
        $error = "";
        $userRepo = new AuthRepository();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST["csrf_token"] != $_SESSION["CSRF"]) {
                $error = "Erreur système, veuillez réessayer";
            }
            if (!$_POST['username'] || !$_POST['password']) {
                $error = "Veuillez remplir tous les champs";
            } else if (!$userRepo->getOne('username', $_POST['username'])) {
                $error = 'utilisateur  inexistant';
            } else if (!password_verify($_POST['password'], $userRepo->getPassword($_POST['username']))) {
                $error = 'mauvais mot de passe';
            } else {
                $this->connect();
            }
        }
        $_SESSION['CSRF'] = bin2hex(random_bytes(16));

        $vm = new AuthLoginVM();
        $vm->error = $error;
        $vm->username = $_POST['username'] ?? '';
        $vm->csrf = $_SESSION['CSRF'];

        require('../views/auth/login.php');
    }

    private function connect(): void
    {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        Session::setMessage("Vous etes connectez");

        $this->redirect('/');
    }

    public function deconnect(): void
    {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        //Session::setMessage("Vous etes deconnecter");

        $this->redirect('/');
    }
}