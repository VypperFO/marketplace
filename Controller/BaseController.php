<?php

namespace Controller;

abstract class BaseController
{
    protected function showView()
    {
        var_dump(debug_backtrace());
        // TODO: A completer pour afficher vue automatiquement
    }

    protected function redirect($url)
    {
        header('location: ' . $url);
        die();
    }
}