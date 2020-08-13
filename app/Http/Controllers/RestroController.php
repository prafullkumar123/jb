<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contant_master;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\SendMail;


class RestroController extends Controller
{
    //
    function index(){
        return view('home');
    }
    function about(){
       
        return view('about');
    }
    function contact(){
        return view('contact');
    }

    function contactMail(Request $req){
        $this->validate($req,[
             'name'  =>  'required',
             'email'  =>  'required|email',
             'mobile'  =>  'required',
             'msg'  =>  'required',
        ]);
        $mail = array(
            'name' => $req->name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'msg' => $req->msg,
        );
        Mail::to('jbrother.software@gmail.com')->send(new SendMail($mail));
        Session::flash('status','Successfully Updated..');
        return redirect('contact',["data"=>$mail]);
    }
    function blog($id){
        $data = DB::table('contant_masters')
        ->join('courses', 'cid', '=', 'contant_masters.courseid')
        ->select('contant_masters.*', 'courses.cid','courses.cname')
        ->where('cid', $id)
        ->get();
        return view('techBlog',["data"=>$data]);
    }
    function blogDesc($id){
        $data = contant_master::find($id);
        return view('techBlogDesc',["data"=>$data]);
    }
    
    function add(Request $req){
       // return $req->input();
       $contant = new contant_master();
       $contant->title= $req->input('title');
       $contant->type= $req->input('techType');
       $contant->author= $req->input('author');
       $contant->cdesc= $req->input('desc');
       $contant->contant= $req->input('contant');
       $contant->code= $req->input('code');
       $contant->save();
       //$req->session()->flush('status','Entered contant Successfully inserted...');
       return back()->with('status', 'successfully inserted');
    }

    function list(){
        $list =   DB::table('contant_masters')
        ->join('courses', 'cid', '=', 'contant_masters.courseid')
        ->select('contant_masters.*', 'courses.cname')
        ->get();
        return view('contantList',["data"=>$list]);
    }
    function delete($id){
        contant_master::find($id)->delete();
        Session::flash('status','Successfully Deleted..');
        return redirect('list');
    }
    function edit($id){
        $list = DB::table('contant_masters')
        ->join('courses', 'cid', '=', 'contant_masters.courseid')
        ->select('contant_masters.*','courses.cid', 'courses.cname')
        ->find($id);
        $list2 = Course::all();
        return view('editContant',["data"=>$list],["techdata"=>$list2]);
    }
    function update(Request $req){
        $contant = contant_master::find($req->id);
        $contant->title= $req->input('title');
        $contant->courseid= $req->input('techType');
        $contant->author= $req->input('author');
        $contant->cdesc= $req->input('desc');
        $contant->contant= $req->input('contant');
        $contant->code= $req->input('code');
        $contant->save();
        Session::flash('status','Successfully Updated..');
        $list =   DB::table('contant_masters')
        ->join('courses', 'cid', '=', 'contant_masters.courseid')
        ->select('contant_masters.*','courses.cid', 'courses.cname')
        ->get();
        return view('contantList',["data"=>$list]);
    }



    function userIndex(){
        return view('/user/index');
    }

    function userRegView(){
        return view("userReg");
    }

    function userReg(Request $req){
        $user = new User();
        $user ->name = $req->input('name');
        $user ->email = $req->input('email');
        $user ->mobile = $req->input('mobile');
        $user ->password = Crypt :: encrypt($req->input('pass'));
        $user ->save();
        Session::flash('status','Successfully Registered..');
        return redirect("/userReg");
    }

}