<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactValidation;

class ContactController extends Controller
{
	
	public function index(){
		$contacts = Contact::get();
		return view('contact.index', compact('contacts'));
	}

	public function create(){
		return view('contact.create');
	}

	public function store(ContactValidation $request){
		Contact::create([
			'name' => $request->get('name'),
			'address' => $request->get('address'),
			'phone' => $request->get('phone')
		]);
		return redirect()->route('contact.index');
	}

	public function edit($id){
		$contact = Contact::findOrFail($id);
		return view('contact.edit', compact('contact'));
	}

	public function update($id){
		$contact = Contact::findOrFail($id);
		$contact->name = request('name');
		$contact->address = request('address');		
		$contact->phone = request('phone');
		$contact->save();
		return redirect()->route('contact.index');
	}

	public function view($id){
		$contact = Contact::findOrFail($id);
		return view('contact.view', compact('contact'));
	}

	public function delete($id){
		$contact = Contact::findOrFail($id);
		$contact->delete();
		return redirect()->route('contact.index');
	}

}
