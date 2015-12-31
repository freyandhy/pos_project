<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
		$data['page_title'] = 'Dashboard';
		$data['page_desc']  = 'Control Panel';
    	return view('dashboard',$data);
    }
}
