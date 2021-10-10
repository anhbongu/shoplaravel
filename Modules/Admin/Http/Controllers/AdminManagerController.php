<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Admin;
use App\Http\Requests\RequestUser;

class AdminManagerController extends Controller
{

    public function index()
    {
        $admin = Admin::get();

        return view('admin::admin.index',[
            'admin'=>$admin
        ]);
    }

    public function create(){
        return view('admin::admin.create');
    }

    public function store(RequestUser $request){
        $this->insertOrUpdate($request);
        return redirect()->route('admin.manager');
        
    }


    public function edit($id){
        $admin = Admin::find($id);

        return view('admin::admin.edit', [
            'admin'=>$admin
        ]);
    }


    public function update(Request $request, $id){
        // dd($request->all());
        // dd($request->all());
       $this->insertOrUpdate($request, $id);
        return redirect()->back();
    }




    public function insertOrUpdate($request, $id =''){
        //create
        $admin = new Admin();
        //update
        if($id){
            $admin = Admin::find($id);
        }else{
            $admin->password = bcrypt($request->password) ;
        }
       
        $admin->name     = $request->name;
        
        $admin->email = $request->email;
        $admin->phone = $request->phone;

        $admin->save();
    }


    public function action(Request $request, $action, $id){
        $admin = Admin::find($id);

        switch ($action) {
            case 'delete':
                $admin->delete();
                return redirect()->back();
                break;
            case 'changstatus':

                $status = ($request->status==1) ? 0 : 1;

                $admin->active = $status;

                $admin->save();
                return redirect()->back();
                break;

        }
        
    }

    public function getCategory(){
        return $category = DB::table('categories')->select('id','c_name')->get();

       
    }


}
