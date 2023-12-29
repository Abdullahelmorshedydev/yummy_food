<?php

namespace App\Http\Controllers\Web\Admin\Settings;

use App\Helpers\FilesHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Rawilk\Settings\Facades\Settings;
use App\Http\Requests\Web\Admin\Settings\FilesSettingsRequest;

class FilesSettingsController extends Controller
{
    public function index()
    {
        return view('web.admin.pages.settings.files_settings');
    }

    public function update(FilesSettingsRequest $request)
    {
        foreach ($request->validated() as $key => $value) {
            
            if ($request->hasFile($key)) {

                FilesHelper::delete(settings()->get($key));
                $image = FilesHelper::store($request->file($key), 'uploads/settings');
                Settings::set($key, $image);
            }
        }
        return back()->with('success', 'Files Settings Updated Successfully :)');
    }
}
