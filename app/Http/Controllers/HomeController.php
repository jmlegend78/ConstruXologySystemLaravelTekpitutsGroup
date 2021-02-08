<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
class HomeController extends Controller
{
/*


function checklogin(Request $request){
    $this->validate($request,[
'username'  =>  'required|username',
'password'  =>  'required|alphaNum|min:3'


    ]);

    $user_data = array(
        'username'  =>  $request->get('username'),
        'password'  =>  $request->get('password')

    );

    if(Auth::attemp($user_data))
    {
        return redirect('home');
    }
    else
    {
        return back()->with('error', ' Wrong Login Details');
    }
}

function successlogin()
{
    return view('home');

}
*/
public function login(){
return view ('login');
    }


    
    public function loginAccess(Request $request){
        //initialization
        $username=$request->input('username'); 
        $password=$request->input('password');
$selectadmin = DB::SELECT("SELECT * FROM tblLibrary WHERE username =? && password =?",[$username,$password]);
if ($selectadmin == TRUE) {
    
    return redirect('home');
}
else{
    
    return back()->with('error', ' Wrong Login Details');
}

    }
public function home(){
return view ('home');
    }


public function updateaccount($id){

$profile = DB::SELECT("SELECT * FROM tblLibrary ");
       
        return view('updateaccount',['profile'=> $profile]);

    }


public function updatedata(Request $request,$id){
$fnameUp=$request->input('fnameUp'); 
        $lnameUp=$request->input('lnameUp');
        $username=$request->input('emailUp'); 
        $newPass=$request->input('newPass');
       $upLFname = DB::UPDATE('UPDATE tblLibrary set fname=?,lname=?,username=?,password=? WHERE id_number=?',[$fnameUp,$lnameUp,$username,$newPass,$id]);
        $profile = DB::SELECT("SELECT * FROM tblLibrary ");
         
   
                   
       if ($upLFname == TRUE) {
                    $msg =  "Record Updated";
                    return view('updateaccount',['profile'=> $profile,'msg' => $msg]);
               }else{
                    $msg =  "Record not Updated";
               } 
}





public function addbook(){
return view ('addbook');
    }

public function booklist(){
     //command for retrieving records from the mysql database

        $users =  DB::SELECT("SELECT * FROM tblBook");
        return view('booklist',['users' => $users]);
    }


public function deleteData($author_id){

        DB::DELETE("DELETE FROM tblBook WHERE author_id=?",[$author_id]);
          $users =  DB::SELECT("SELECT * FROM tblBook");
        return view('booklist',['users' => $users]);
    }


public function selectItemData($author_id){

$usert = DB::SELECT("SELECT * FROM tblBook WHERE author_id=?",[$author_id]);
       
        return view('edititem',['usert'=> $usert]);

    }
    public function updateItemData(Request $request,$author_id){
$fnameUp=$request->input('fnameUp'); 
        $lnameUp=$request->input('lnameUp');
        $bnumber=$request->input('bnumber'); 
        $btitle=$request->input('btitle'); 
        $bdesc=$request->input('bdesc');
        $bprice=$request->input('bprice'); 
        $pname=$request->input('pname'); 
        $yrpublish=$request->input('yrpublish');
        $mnthpublish=$request->input('mnthpublish'); 
        $dypublish=$request->input('dypublish');

        DB::UPDATE('UPDATE tblBook set author_fname=?,author_lname=?,book_number=?,book_title=?,book_desc=?,book_price=?,publisher_name=?,year_pub=?,month_pub=?,day_pub=? WHERE author_id=?',[$fnameUp,$lnameUp,$bnumber,$btitle,$bdesc,$bprice,$pname,$yrpublish,$mnthpublish,$dypublish,$author_id]);
        $usert = DB::SELECT("SELECT * FROM tblBook WHERE author_id=?",[$author_id]);
        return view('edititem',['usert'=> $usert]);
    }









public function insertData(Request $request){
        //initialization
        $firstname=$request->input('firstname'); 
        $lastname=$request->input('lastname');
        $booknum=$request->input('booknum');
        $bookt=$request->input('bookt'); 
        $bookdesc=$request->input('bookdesc');
        $bookprice=$request->input('bookprice');
        $pubname=$request->input('pubname'); 
        $month=$request->input('month');
        $day=$request->input('day');
        $year=$request->input('year'); 

        //mysql insert command
     $insert  = DB::INSERT("INSERT into tblBook(author_fname,author_lname,book_number,book_title,book_desc,book_price,publisher_name,month_pub,day_pub,year_pub)VALUES(?,?,?,?,?,?,?,?,?,?)", [$firstname,$lastname,$booknum,$bookt,$bookdesc,$bookprice,$pubname,$month,$day,$year]);
        $users =  DB::SELECT("SELECT * FROM tblBook");
        if ($insert == TRUE) {
                    $msg =  "Record Added";
               }else{
                    $msg =  "Record not Added";
               } 
        return view('addbook',['users' => $users,'msg' => $msg]);

    }
    	
    












}
/*
class HomeController extends Controller
{
    public function regform(){
        return view ('regform');
    }


    public function displayData(Request $request){

        $name = $request->input('name');
        $father_name = $request->input('father_name');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $state = $request->input('state');
        $city = $request->input('city');
        $birth_date = $request->input('birth_date');
        $pincode = $request->input('pincode');
        $course = $request->input('course');
        $email = $request->input('email');

        return view ('outputform',['name' => $name , 'father_name' => $father_name , 'address' => $address , 'gender' => $gender , 'state' => $state , 'city' => $city , 'birth_date' => $birth_date , 'pincode' => $pincode , 'course' => $course , 'email' => $email]);
    }
    
    class HomeController extends Controller
{
    public function regform(){
        return view ('regform');
    }


    public function displayData(Request $request){

        $name = $request->input('name');
        $father_name = $request->input('father_name');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $state = $request->input('state');
        $city = $request->input('city');
        $birth_date = $request->input('birth_date');
        $pincode = $request->input('pincode');
        $course = $request->input('course');
        $email = $request->input('email');

        return view ('outputform',['name' => $name , 'father_name' => $father_name , 'address' => $address , 'gender' => $gender , 'state' => $state , 'city' => $city , 'birth_date' => $birth_date , 'pincode' => $pincode , 'course' => $course , 'email' => $email]);
    }

}
*/