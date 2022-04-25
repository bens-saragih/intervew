<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TesApi extends Controller
{
	public function ambil()
	{
		$response = Http::get('https://jsonplaceholder.typicode.com/posts');
		$jsonData = $response->body();
		return ($jsonData);

	}
	
}

 ?>