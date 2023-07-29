<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;

class KaryawanController extends Controller
{
    public function index() {
        $karyawan = User::all();

        return view('data-karyawan.index', compact('karyawan'));
    }

    public function create() {
        return view('data-karyawan.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        dd($data);
    }
}
