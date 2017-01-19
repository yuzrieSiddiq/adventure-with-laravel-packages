<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JasperPHP\JasperPHP;

class ReportingController extends Controller
{
    public function genHelloWorld()
    {
        return "Hello World";
    }

    public function genUsersTable()
    {
        return "Users Table";
    }

    public function genUsersChart()
    {
        return "Users Chart";
    }
}
