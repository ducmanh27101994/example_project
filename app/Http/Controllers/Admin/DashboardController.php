<?php


namespace App\Http\Controllers\Admin;


class DashboardController
{
    public function __construct()
    {

    }

    public function indexDashboard()
    {
        return view('admin.dashboard');
    }
}
