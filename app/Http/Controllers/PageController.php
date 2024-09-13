<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{   
    // Return della home page;
    public function index()
    {

        return view('home');
    }

    //Salvo tutti i treni dal database;
    public function trains()
    {

        // Variabile per salvare le info del DB dei treni;
        $trains = Train::all();

        return view('trains', compact('trains'));
    }

    // Treni in partenza oggi
    public function nowTrains()
    {  
        // Salvo in una variabile i treni in data odierna convertita in stringa
        $today = now()->toDateString(); 

        // Dentro un altra variabile savo i treni che corrispondo la data odierna nella section ('data_di_partenza);
        $now_trains = Train::whereDate('data_di_partenza', $today)->get();

        return view('last-minut', compact('now_trains'));
    }

    //Creo una funzione per gestire i pacchetti di viaggio offerti;
    public function packages(){

        // Salvo in una variabile i pacchetti disponibili dal DB;
        

        //Debug
        return 'pagina dei pacchetti viaggio';
    }
}
