<?php

namespace App\Http\Controllers\Admin;


class MainPageController
{
    public function mainIndex()
    {
        return view('admin.pages.main.index');
    }

}
