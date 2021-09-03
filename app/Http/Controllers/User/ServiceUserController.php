<?php

namespace App\Http\Controllers\User;

use App\Models\Service\Entity\Service;

class ServiceUserController
{
    public function index()
    {
        $service = Service::all();

        return view('user.service.index', compact('service'));
    }
}
