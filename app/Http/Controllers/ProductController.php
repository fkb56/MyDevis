<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MeasureUnit;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{
	// section index
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(): Response
	{
		$products = Product::with(['category', 'measureUnit'])->get();
		$count_product = Product::with('category')->count();
		$categories = Category::all();
		$measure_units = MeasureUnit::all();

		return Inertia::render('Produits/Index', [
			'products' => $products,
			'count_product' => $count_product,
			'categories' => $categories,
			'measure_units' => $measure_units,
		]);
	}

	// section create

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(): Response
	{
		$categories = Category::all();

		return Inertia::render('Produits/Create', [
			'categories' => $categories,
		]);
	}

	// section store

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return RedirectResponse
	 */
	public function store(Request $request): RedirectResponse
	{
		Validator::make($request->all(), [
			'name' => ['required', 'max:70', 'string'],
			'quantity' => ['required', 'integer', 'numeric'],
			'reference' => ['required', 'string'],
			'measure_unit_id' => ['nullable', 'max:10', 'string'],
			'buying_price' => ['required', 'integer', 'numeric'],
			'selling_price' => ['required', 'integer', 'numeric'],
			'image' => ['nullable', 'string'],
			'category_id' => ['required', 'integer', 'numeric'],
		]);

		Product::create($request->all());

		return Redirect::route('produits.index');
	}

	// section show

	/**
	 * Display the specified resource.
	 *
	 * @param $id
	 * @return Response
	 */
	public function show($id): Response
	{
		$product = Product::with('category')->where('id', $id)->first();

		return Inertia::render('Produits/Show', [
			'product' => $product
		]);
	}

	// section edit

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param $id
	 * @return Response
	 */
	public function edit($id): Response
	{
		$product = Product::with('category')->where('id', $id)->first();
		$categories = Category::with('products')->get();

		return Inertia::render('Produits/Edit', [
			'product' => $product,
			'categories' => $categories
		]);
	}

	// section update

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @return RedirectResponse
	 */
	public function update(Request $request): RedirectResponse
	{
//		dd($request);
		Validator::make($request->all(), [
			'name' => ['required', 'max:70', 'string'],
			'quantity' => ['required', 'integer', 'numeric'],
			'reference' => ['required', 'string'],
			'measure_unit_id' => ['required', 'max:10', 'string'],
			'buying_price' => ['required', 'integer', 'numeric'],
			'selling_price' => ['required', 'integer', 'numeric'],
			'image' => ['nullable', 'string'],
			'category_id' => ['required', 'integer', 'numeric'],
		]);

		if ($request->has('id')) {
			Product::find($request->input('id'))->update($request->all());
		}

		return Redirect::route('produits.index')
			->with('message', 'Produit modifier.');
	}

	// section destroy

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param $id
	 * @return RedirectResponse
	 */
	public function destroy($id): RedirectResponse
	{
		$product = Product::find($id);

		$product->delete();

		return Redirect::route('produits.index');

	}
}
