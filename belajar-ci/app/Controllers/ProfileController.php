<?php 
namespace App\Controllers;

class ProfileController extends BaseController {
    public function index() {
       
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('v_profile'); 
    }
}