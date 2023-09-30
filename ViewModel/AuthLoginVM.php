<?php

namespace ViewModel;

class AuthLoginVM
{
    public string|false $error;
    public string $username;
    public string $csrf;
}