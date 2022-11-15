<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

    class UsersController extends Controller
    {
        public function index()
        {
            if(Gate::denies('access_users')) {
                ray('Access has been denied');
            } else {
                ray('Access has been approved');
            }
        }
    }
