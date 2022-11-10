<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Models\Admin;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */


    public function admin()
    {
       
        return view('admin_login');
    }

    public function logout(){
		Session::flush();
		return redirect('/admin');
	}


    public function login(Request $request){
        
        if($request->isMethod('post')){
            $data = $request->input();
            $user = DB::table('admins')->where(['email'=> $data['email'],'password' => $data['password']])->count(); 
            if($user > 0){
                //echo "Success"; die;
                $user = DB::table('admins')->where(['email'=> $data['email']])->first(); 
                $user_name = $user->first_name.' '.$user->last_name; 
                //echo "<pre>"; print_r($user_name); die;
                Session::put('adminSession', $data['email']);
                Session::put('AdminName', $user_name);
                
                return redirect('/over-view');
        	}else{
                
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
        	}
        }    
    }


    public function index()
    {
        //
        $employe=Admin::get(); 
        //echo "<pre>"; print_r($employe); die;
        return view('admin.admin')->with(compact('employe'));
    }

    public function create()
    {
        //
        return view('admin.create_admin');
    }

    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input();
            //echo "<pre>"; print_r($data); die;
            $admin = new Admin;
            //echo "<pre>"; print_r($employ); die;
            $admin->first_name = $data['first_name'];  
            $admin->last_name= $data['last_name'];    
            $admin->email = $data['email'];
            $admin->department = $data['department'];
            $admin->designation = $data['position'];
            $admin->role = $data['role'];           
            $admin->save();
            return redirect('/Admins');
        }
        return view('admin.create_admin');
    }

    public function show($id)
    {
        //echo"my work";die;
        
    }


    public function edit($id)
    {
        //
        $employe = Admin::where(['id'=>$id])->first();
        return view('admin.edit_admin')->with(compact('employe'));
    }
 
    public function update(Request $request, $id)
    {
        //
        $employe= Admin::find($id);
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;
        $employe->first_name = $data['first_name']; 
        $employe->last_name= $data['last_name'];     
        $employe->email = $data['email'];
        $employe->department = $data['department'];
        $employe->designation = $data['position'];
        $employe->role = $data['role'];
      
        $employe->save();
    
        return redirect('/Admins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employe = Admin::find($id);
        $employe->delete();
        return redirect('/Admins')->with('flash_message_error','Employe Data delete Successfully');
    }


}
