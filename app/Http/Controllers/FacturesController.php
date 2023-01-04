<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class FacturesController extends Controller
{
    public function index(): \Inertia\Response
    {
        $courses = Course::with('user')->withCount('episodes')->get();

        return Inertia::render('Devis/Facture', [
            'courses' => $courses
        ]);

    }

}
