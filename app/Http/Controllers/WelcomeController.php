<?php
namespace App\Http\Controllers;
use App\Trabajo;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools;

class WelcomeController extends Controller
{

    use SEOTools;
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
