<?php 
namespace App\Http\Controllers;
use App\post;
class pagesController extends Controller {
    public function getIndex(){
       $posts = Post::orderBy('created_at','desc')->limit(3)->get();
    return view('Pages.welcome')->withPosts($posts);
    }
    public function getAbout(){
        $first = 'sangram';
        $second = 'mahadik';
        $fullname= $first." ".$second;
        $email = 'sangrammahadik62@gmai.com';
        $data =[];
        $data['email'] = $email;
        $data['fullname']= $fullname;
        return view('Pages.about')->withData($data);
    }
    public function getContact(){
        return view('Pages.contact'); 
    }
}