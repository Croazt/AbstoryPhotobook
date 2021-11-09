<?php

namespace App\Http\Controllers;

use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;
use Illuminate\Http\Request;

class DependentDropdownController extends Controller
{
    public function index()
    {
        $provinces = Province::pluck('name', 'id');

        return view('dependent-dropdown.index', [
            'provinces' => $provinces,
        ]);
    }
    public function regist_drop()
    {
        $provinces = Province::pluck('name', 'code');

        return view('template', [
            'provinces' => $provinces,
        ]);
    }
    public function store(Request $request)
    {
        $cities = City::where('province_code', $request->get('id'))
            ->pluck('name', 'code');
    
        return response()->json($cities);
    }
    public function store_city(Request $request)
    {
        $districts = District::where('city_code', $request->get('id'))
            ->pluck('name', 'code');
    
        return response()->json($districts);
    }
    public function store_district(Request $request)
    {
        $villages = Village::where('district_code', $request->get('id'))
            ->pluck('name', 'code');
    
        return response()->json($villages);
    }
}