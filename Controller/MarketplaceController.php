<?php

namespace Controller;

class MarketplaceController extends BaseController
{
  function index(): void
  {
    require("../views/marketplace/index.php");
  }

  function bought(): void
  {
  }

  function buy(): void
  {
    require("../views/marketplace/buy.php");
  }

  function myproduct(): void
  {
  }

  function sell(): void
  {
    require("../views/marketplace/sell.php");
  }
}
