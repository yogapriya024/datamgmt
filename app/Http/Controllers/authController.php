<?php

namespace App\Http\Controllers;
use Auth;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\contact;
use App\Models\photo;
class authController extends Controller
{
    
		
		public function addregister()
		{
			$user=new user();
			$method="post";
			return view('register', compact('user','method'));
		
		}
	
		public function storeregister(Request $request)
		{
			$request->validate(["username"=>'required',"email"=>'required',"password"=>'required']);
			$user= User::create([
				'username'=>$request->username,
				'firstname'=>$request->firstname,
				'lastname'=>$request->lastname,
				'email'=>$request->email,
				"password"=>$request->password,
				"usertype"=>$request->usertype
			]);
			
			$user->contact()->create([
				"phone"=>$request->phone,
				"city"=>$request->city,
				"address"=>$request->address,
				"state"=>$request->state,
				"zipcode"=>$request->zipcode
			]);
			return view("login");
		}
		
		
	public function addmail($id)
	{$user= user::find($id);
		$method="post";
		
        return view('TestMail', compact('user','method'));
		
	}
	
	public function storemail(Request $request)
	{  
	$user= user::find($request->id);
	   $details = [
				'title' => 'Mail from admin@gmail.com',
				'body' => 'This is for testing email using smtp'
				];
   
    \Mail::to('your_receiver_user@gmail.com')->send(new \App\Mail\TestMail($details));
			$user->email()->create([
			"title"=>$title,
			"body"=>$body
			]);
			
			return redirect()->route('adminpanel');
	}
	
	
	public function addimage($id)
	{
	
       $user= user::find($id);
		$method="post";
		
        return view('image', compact('user','method'));
		
	}	
	
	public function storeimage(Request $request)
	{  $user= user::find($request->id);
		$validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
 
        ]);
 	
        $name = $request->file('image')->getClientOriginalName();
		
		$path = $request->file('image')->store('storage/image');
		
       	$user->photo()->create([
			"name"=>$name,
			"path"=>$path
	]);
	
		return redirect()->route('adminpanel');
		

    }
			
			
	public function adduser()
    {
		$user=new user();
		$method="post";
        return view('add', compact('user','method'));
	}
	public function storeuser(Request $request)
    {
			$request->validate(["username"=>'required',"email"=>'required',"password"=>'required']);
			$user= User::create([
			'username'=>$request->username,
			'firstname'=>$request->firstname,
			'lastname'=>$request->lastname,
			'email'=>$request->email,
			"password"=>$request->password,
			"usertype"=>$request->usertype
			]);
			
		$user->contact()->create([
			"phone"=>$request->phone,
			"city"=>$request->city,
			"address"=>$request->address,
			"state"=>$request->state,
			"zipcode"=>$request->zipcode
			]);
				return redirect()->route("adminpanel");
    }
	public function login(Request $req)
	{
			$req->validate(['username'=>'required','password'=>'required','usertype'=>'required']);
			$data= $req->input();
			$req->session()->put('usertype',$data['usertype']);
			$req->session()->put('user',$data['username']);
			
			echo session('usertype');
			echo"<br>";
			echo session('user');
			
		if(session('usertype')=='admin')
		{
			 return redirect()->route('adminpanel');
		}
		else
		{
			 return redirect()->route('userpanel');
			
		}
	}
	
	
	public function logout()
	{
		return redirect()->route("login");
	}
		
		
	public function register()
	{
		return redirect()->route("register");
	}
	
	
	public function adminpanel()
	{
		$users = user::all();
        return view('adminpanel',compact('users'));
	}
	
	
	public function userpanel()
	{
		$user= Auth::user();
		dd($user);
		return view('userpanel',compact('user'));
		
	}
	
	
	public function viewuser($id)
    {
		$user= user::findOrFail($id);
        return view('view', compact('user'));
    }
	
	
	public function edituser($id)
    {
		
		$user= user::findOrFail($id);
		$method="put";
		
        return view('update', compact('user','method'));
    }
	
	
	public function updateuser(Request $request, $id)
    {
		$user= user::findOrFail($id);
		$user->name = $request->username;
		$user->save();
		$cont = array_intersect($user->contact->getFillable(), array_keys($request->all()));
		$user->contact()->update($request->only($cont));
		
        return redirect()->route("adminpanel");
    }
	
	
	public function deluser($id)
    {
		$user= user::findOrFail($id);
		$user->delete();
        return redirect()->route("adminpanel");
    }
    
}