<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lancer;
use SebastianBergmann\Environment\Console;

class LanceController extends Controller
{
    public function index()
    {
        
        $lancer = Lancer::all()->take(6);
        return $lancer;
    }

    public function lancer($id)
    {
        // $lancer = Lancer::all()->take(1);
        $lancer = Lancer::where('id',$id)->get();
        return $lancer;
    }

    public function it()
    {
        // $lancer = Lancer::all()->take(1);
        // $lancer_it = Lancer::where('occupation','it')->get();
        $lancerit = Lancer::all()->take(6);
        return 1;
    }

}