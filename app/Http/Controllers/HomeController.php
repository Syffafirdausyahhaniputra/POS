<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function home() {
        return view('blog.home')
        -> with('home', 'Toko Syffa Firdausyah Hani Putra');
    }
}
