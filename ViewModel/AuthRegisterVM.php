<?php

namespace ViewModel;

class AuthRegisterVM
{
    public string|false $error;
    public string $username;
    public string $csrf;
}