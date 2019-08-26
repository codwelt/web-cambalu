<?php
namespace App\Http\Controllers;
use App\Trabajo;
use Illuminate\Http\Request;

class WelcomerController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function garden()
    {
        $trabajos = Trabajo::all();
        return view('garden',[
            'trabajos' => $trabajos
        ]);
    }
}
