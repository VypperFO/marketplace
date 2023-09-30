<?php

namespace Controller;

class HomeController extends BaseController
{
    function index(): void
    {
        require("../views/home/index.php");
    }
}
