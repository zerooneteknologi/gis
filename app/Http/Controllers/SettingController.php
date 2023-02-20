<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.index', [
            'setting' => Setting::first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        // return $request->file('logo')->store('logo');

        $validatoData = $request->validate([
            'tittleWeb' => 'required|max:70',
            'descWeb' => 'required',
            'tittleAdmin' => 'required|max:70',
            'officeAddress' => 'required|max:70',
            'logo' => '',
            'facebook' => '',
            'twitter' => '',
            'instagram' => '',
            'youtube' => '',
            'tiktok' => '',
            'linked' => ''
        ]);

        if (Storage::exists($setting->logo)) {
            Storage::delete($setting->logo);
        }

        if ($request->file('logo')) {
            $validatoData['logo'] = $request->file('logo')->store('/img/logo');
        }

        Setting::where('id', $setting->id)->update($validatoData);

        return back()->with('success', 'data berhasil diubah');
    }
}
