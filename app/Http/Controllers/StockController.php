<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Inertia\Inertia;
use Inertia\Response;

class StockController extends Controller
{
    public function index(): Response
    {
//        $stock = Stock::with('user')->withCount('episodes')->get();
        $stock = Stock::all();

        return Inertia::render('Devis/Calcul', [
            'stocks' => $stock
        ]);

    }
}
