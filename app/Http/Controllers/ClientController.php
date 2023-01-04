<?php

namespace App\Http\Controllers;

use App\Models\Civility;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;
use Request;

class ClientController extends Controller
{
	// section index
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(): Response
	{
		$clients = Client::with('civility')->get();
		$count_clients = Client::with('clients')->count();
		$civilities = Civility::all();

		return Inertia::render('Clients/Index', [
			'clients' => $clients,
			'count_clients' => $count_clients,
			'civilities' => $civilities
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
		$clients = Client::all();

		return Inertia::render('Clients/Create', [
			'clients' => $clients,
		]);
	}

	// section store

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return RedirectResponse
	 */
	public function store(): RedirectResponse
	{
				dd(Request::all());

//				Validator::make($request->all(), [
//					'civility_id' => ['nullable', 'integer', 'numeric'],
//					'first_name' => ['required', 'max:25', 'string'],
//					'last_name' => ['required', 'max:25', 'string'],
//					'phone' => ['required', 'max:20', 'string'],
//					'street_number' => ['required', 'max:4', 'string'],
//					'street' => ['required', 'string', 'max:255'],
//					'city' => ['required', 'string', 'max:255'],
//					'post_code' => ['required', 'string', 'max:8'],
//					'region' => ['nullable', 'string', 'max:50'],
//					'country' => ['nullable', 'string', 'max:50'],
//					'email' => ['required', 'string', 'max:255'],
//				])->validate();

		Request::validate([
			'civility_id' => ['nullable', 'integer', 'numeric'],
			'first_name' => ['required', 'max:25', 'string'],
			'last_name' => ['required', 'max:25', 'string'],
			'phone' => ['required', 'max:20', 'string'],
			'street_number' => ['required', 'max:4', 'string'],
			'street' => ['required', 'string', 'max:255'],
			'city' => ['required', 'string', 'max:255'],
			'post_code' => ['required', 'string', 'max:8'],
			'region' => ['nullable', 'string', 'max:50'],
			'country' => ['nullable', 'string', 'max:50'],
			'email' => ['required', 'string', 'max:255'],
		]);

		Client::create(
			Request::all()
//			(new Request)->only('first_name', 'last_name', 'email')
		);

		return Redirect::back();

//		Validator::make($request->all(), [
//			'civility_id' 				=> ['nullable', 'integer', 'numeric'],
//			'name' 					=> ['required', 'max:25', 'string'],
//			'last_name' 			=> ['required', 'max:25', 'string'],
//			'phone' 				=> ['required', 'max:20', 'string'],
//			'street_number' 		=> ['required', 'max:4', 'string'],
//			'street' 				=> ['required', 'string', 'max:255'],
//			'city' 					=> ['required', 'string', 'max:255'],
//			'post_code'				=> ['required', 'string', 'max:8'],
//			'region'	 			=> ['nullable', 'string', 'max:50'],
//			'country'	 			=> ['nullable', 'string', 'max:50'],
//			'email'		 			=> ['required', 'string', 'max:255'],
//		])->validate();

		Clients::create($request->all());
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
		$clients = Client::with('clients')->where('id', $id)->first();

		return Inertia::render('Clients/Show', [
			'clients' => $clients
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
		$clients = Client::with('clients')->where('id', $id)->first();

		return Inertia::render('Clients/Edit', [
			'clients' => $clients
		]);
	}

	// section update

	/**
	 * Update the specified resource in storage.
	 *
	 * @return RedirectResponse
	 */
	public function update(): RedirectResponse
	{
		Request::validate([
			'id' => ['required', 'integer', 'numeric'],
			'civility_id' => ['required', 'integer', 'numeric'],
			'first_name' => ['required', 'max:25', 'string'],
			'last_name' => ['required', 'max:25', 'string'],
			'phone' => ['required', 'max:20', 'string'],
			'street_number' => ['nullable', 'max:4', 'string'],
			'street' => ['required', 'string', 'max:255'],
			'city' => ['required', 'string', 'max:255'],
			'post_code' => ['nullable', 'string', 'max:8'],
			'region' => ['nullable', 'string', 'max:50'],
			'country' => ['nullable', 'string', 'max:50'],
			'email' => ['nullable', 'string', 'max:255'],
		]);

		if (Request::has('id')) {
			Client::find(Request::input('id'))->update(Request::all());
		}

		return Redirect::route('clients.index')->with('message', 'Clients modifier.');
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
		$clients = Client::find($id);

		$clients->delete();
		return Redirect::route('clients.index');
	}
}
