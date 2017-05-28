<?php

namespace App\Http\Controllers;

use App\Models\GuideService;
use Illuminate\Http\Request;

class GuideServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Все сервисы',
            'description' => 'Список сервисов',
            'list' => GuideService::all(),
            'link' => '#',
            'linkTitle' => 'Ссылка на что-то пока не существующее',
            'routeShow' => 'serviceShow',
            'routeDel' => 'serviceDelete',
        ];
        return view('list', $data);
    }

    public function show($id)
    {
        $a = (int) $id;
        if ($a) {
            $service = GuideService::find($a);
        }
        else {
            $service = GuideService::where('alias', $id)->first();
        }
        return view('services.content', ['service' => $service]);

    }
}
