<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Request;

class CategoryController extends Controller
{
	// section index
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public final function index(): Response
	{
		$categories = Category::all();
		$count_category = Category::with('products')->count();

		return Inertia::render('Categorie/Index', [
			'categories' => $categories,
			'count_category' => $count_category
		]);
	}

	// section create

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public final function create(): Response
	{
		$categories = Category::all();

		return Inertia::render('Categorie/Create', [
			'categories' => $categories,
		]);
	}

	// section store

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return RedirectResponse
	 */
	public final function store(): RedirectResponse
	{
		Request::validate([
			'name' => ['required', 'max:70', 'string'],
		]);

//		Validator::make($request->all(), [
//			'name' 				=> ['required', 'max:70', 'string'],
//		])->validate();

		Category::create(Request::all());
//		Category::create($request->all());

		return Redirect::route('categorie.index')->with('message', 'Catégorie Créer.');
	}

	// section show

	/**
	 * Display the specified resource.
	 *
	 * @param $id
	 * @return Response
	 */
	public final function show($id): Response
	{
		$category = Category::with('products')->where('id', $id)->first();

		return Inertia::render('Categorie/Show', [
			'category' => $category
		]);
	}

	// section edit

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param $id
	 * @return Response
	 */
	public final function edit($id): Response
	{
		$category = Category::with('products')->where('id', $id)->first();

		return Inertia::render('Categorie/Edit', [
			'category' => $category
		]);
	}

	// section update

	/**
	 * Update the specified resource in storage.
	 *
	 * @return RedirectResponse
	 */
	public final function update(): RedirectResponse
	{
		Request::validate([
			'id' => ['nullable', 'integer', 'numeric'],
			'name' => ['required', 'max:70', 'string'],
		]);

		if (Request::has('id')) {
			Category::find(Request::input('id'))->update(Request::all());
		}
		return Redirect::route('categorie.index')->with('message', 'Catégorie modifier.');
	}

	// section destroy

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param $id
	 * @return RedirectResponse
	 */
	public final function destroy($id): RedirectResponse
	{
		$category = Category::find($id);

		$category->delete();

		return Redirect::route('categorie.index');
	}
}
