<?php
namespace App\Controllers;

use Neat\Attributes\Http\HttpGet;
use Neat\Http\ActionResult\ActionResult;

use function Neat\Http\Status\OK;

class IndexController
{
    public function __construct()
    {
    }

    #[HttpGet]
    public function index(): ActionResult
    {
        return OK();
    }
}