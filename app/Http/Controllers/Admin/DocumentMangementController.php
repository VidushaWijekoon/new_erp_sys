<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentMangementController extends Controller
{
    public function index()
    {
        return view('pages.document-management.index');
    }
}
