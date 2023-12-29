<?php

namespace App\Http\Controllers\Web\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\Settings\GeneralSettingsRequest;
use Rawilk\Settings\Facades\Settings;

class GeneralSettingsController extends Controller
{
    public function index()
    {
        return view('web.admin.pages.settings.general_settings');
    }

    public function update(GeneralSettingsRequest $request)
    {
        foreach ($request->validated() as $key => $value) {
            Settings::set($key, $value);
        }
        return back()->with('success', 'General Settings Updated Successfully :)');
    }
}
