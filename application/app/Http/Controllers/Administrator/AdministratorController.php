<?php

namespace SaaSrv\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class AdministratorController extends Controller
{
    /**
     * Show admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.index');
    }
}
