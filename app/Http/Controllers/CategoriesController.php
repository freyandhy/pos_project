<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index() {
    	$data['page_title'] = 'Data Kategori';
		$data['categories'] = Categories::all();
		return view('categories.index',$data);
	}

	public function create() {
		if (Request::isMethod('get')) {
    		$data['page_title'] = 'Data Kategori';
			return view('categories.create',$data);
		}

		else if (Request::isMethod('post')) {
			$nama = Input::get('nama');
			$kode = Input::get('kode');

			$item = array('name' => $nama);
			Categories::create($item);
			return redirect('categories');
		}
	}

	public function update($id) {
		if (Request::isMethod('get')) {
			$item['page_title'] = 'Data Kategori';
			$item['categories'] = Categories::find($id);
			return view('categories.update',$item);
		}

		else if (Request::isMethod('post')) {
			$nama = Input::get('nama');

			$item = Categories::find($id);
			$item->name = $nama;
			$item->save();
			return redirect('categories');
		}
	}

	public function delete($id) {
		$item = Categories::find($id);
		$item->delete();
		return redirect('categories');
	}
}
