<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * php artisan make:controller Web\SaludarController
 * @package App\Http\Controllers\Basic
 */
class SaludarController extends Controller
{
    public function greet($name = '') {
        return 'Hola ' . $name;
    }
}
