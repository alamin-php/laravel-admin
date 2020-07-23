<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if (!Gate::allows('isAdmin')) {
            // abort(404, "Sorry, You can do this actions");
            return view('backend.404');
        }else{
        $data = DB::table('users')->get();
            return view('backend.user.index',['data'=>$data]);
        }
    }    

    public function create(){
        if (!Gate::allows('isAdmin')) {
            return view('backend.404');
        }else{
            return view('backend.user.create');
        }
    }    

    public function edit($id){
        if (!Gate::allows('isAdmin')) {
            return view('backend.404');
        }else{
            $data = DB::table('users')->where('id', $id)->first();
        return view('backend.user.edit',['data'=>$data]);
        }
    }         

    public function profile(){
        $userid = Auth::User()->id;
        $data = DB::table('users')->where('id', $userid)->first();
        return view('backend.user.profile',['data'=>$data]);
    }

    public function changePassword(){
    
        return view('backend.user.change-password');
    }

    public function updatePassword(Request $request){
    
        $password = Auth::user()->password;
        $oldPass = $request->oldPass;
        
        if (Hash::check($oldPass, $password)) {
            
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            if ($user->save()) {
                Toastr::success('Your Password Changed Successfully', 'Success');
                return redirect()->route('login');
            }else{
                Toastr::warning('Password Not Matched!', 'Warning');
                return redirect()->back();
            }

        }else{
            Toastr::error('Something error for password not change', 'Warning');
            return redirect()->back();
        }
    }

    public function delete($id){
        if (!Gate::allows('isAdmin')) {
            return view('backend.404');
        }else{
            $data = DB::table('users')->where('id', $id)->first();
            $image = $data->image;
            unlink($image);

            $delete = DB::table('users')->where('id', $id)->delete();
            if ($delete) {
                Toastr::success('Data Successfully Deleted', 'Success');
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        }
    }

}
