<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class DevisController extends Controller
{
	public final function index(): Response
	{
//        $courses = Course::with('user')->withCount('episodes')->get();

		return Inertia::render('Devis/Index', [
//            'courses' => $courses
		]);

	}

//	public final function devis(): Response
//	{
//        $products = Products::get();
//
//		return Inertia::render('Devis/Devis', [
//            'products' => $products
//		]);
//	}

}
