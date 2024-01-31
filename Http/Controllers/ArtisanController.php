<?php

namespace Modules\Artisan\Http\Controllers;

use App\Facades\AdminTheme;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function index()
    {
        return view(AdminTheme::serviceView('artisan', 'index'));
    }

    public function command()
    {
        $command = request()->input('command');
        Artisan::call($command);
        return redirect()->back()->with('success', Artisan::output());
    }
}
