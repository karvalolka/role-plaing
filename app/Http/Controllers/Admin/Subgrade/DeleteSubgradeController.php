<?php

namespace App\Http\Controllers\Admin\Subgrade;

use App\Http\Controllers\Controller;
use App\Models\Subgrade;

class DeleteSubgradeController extends Controller
{
    public function __invoke(Subgrade $subgrade)
    {
        $subgrade->delete();
        return redirect()->route('admin.subgrade.index');
    }
}
