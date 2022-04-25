<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController
{
	public function login()
	{
		return view('page.admin.login');
	}

	public function checkLogin(Request $request)
	{
		$request->validate([
			'username' => 'required',
			'password' => 'required',
			]);

		$validUsername = ['L2FkYTNkYWEyZFNE','VlNEU0QyM1NBc2RzZHM='];
		if (in_array($request->username, $validUsername) AND $request->password === 'c2RhZGEyMSJBQVM=')
			{
			session(['username' => $request->username]);
				return redirect()->route('YWRtaW5rYWg.index');
			}

			else {
				return back()->withInput()->with('pesan',"Username | Pass False");
			}
	}

	public function logout()
	{
		session()->forget('username');
		return redirect()->route('home');
	}
}

 ?>
