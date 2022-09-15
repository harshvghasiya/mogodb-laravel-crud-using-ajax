<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function create()
    {
    	return view('addedit');
    }

    public function store(Request $request)
    {
    	if (isset($request->id) && $request->id != null) {
    		$res = User::find(\Crypt::decryptString($request->id));
    	}else{
    		$res = new User;
    	}

    		$res->first_name = $request->first_name;
    		$res->last_name = $request->last_name;
    		$res->save();

    		$url = route('admin.user.index');
    		$msg = "User Created successfully";
    		flashMessage('success',$msg);
            return response()->json(['msg' => $msg, 'status' => true, 'url' => $url]);

    }

    public function index()
    {
    	$users = User::all();
    	return view('index',compact('users'));
    }

    public function edit(Request $request, $id)
    {
        $encryptedId = $id;
        
        $user = User::where('_id',\Crypt::decryptString($id))->first();
        return view('addedit',compact('encryptedId','user'));
    }

    public function destroy($id)
    {
        User::where('_id',\Crypt::decryptString($id))->delete();
        return response()->json(['success' => 1, 'msg' => 'User Deleted successfully']);

    }


}
