<?php

require_once('User.php');

class SignInForm
{
    /**
     * @var User[] пользователи из базы данных
     */
    private $users = [];

    /**
     * @var string логин
     */
    protected $login;

    /**
     * @var string пароль
     */
    protected $password;

    public function __construct()
    {
        $user = new User();
        $user->login = 'ivan@ya.ru';
        $user->password = 'ivan321';
        $this->users[] = $user;

        $user = new User();
        $user->login = 'dima@ya.ru';
        $user->password = 'dima321';
        $this->users[] = $user;
    }

    /**
     * Возращает true, если пользователь найден, иначе false.
     *
     * @return bool
     */
    public function isLogin() {
        foreach ($this->users as $user) {
            if ($user->login === $this->login && $user->password === $this->password) {
                return true;
            }
        }

        return false;
    }

    /**
     * Загружает данные в форму.
     *
     * @param array $data
     */
    public function load($data)
    {
        $this->login = $data['login'];
        $this->password = $data['password'];
    }
}