<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard_Pegawai extends Controller
{
    public function index() {
        $stats = [
            'growth' => 12.34,
            'revenue' => 17.34,
            'daily_income' => 12.34,
            'expense' => 31.53,
        ];

        $projects = [
            'Admin dashboard design',
            'Wordpress Development',
            'Project meeting',
        ];

        return view('dashboard_pegawai');

    }
}
