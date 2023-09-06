<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Http\Controllers\Controller;

class DocumentManagementController extends Controller
{
    public function index()
    {
        return view('pages.document_management.index');
    }
}
