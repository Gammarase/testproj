<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    public $avaible_pages = ['main_page', 'about_us', 'portfolio', 'contacts', 'form'];


    use AuthorizesRequests, ValidatesRequests;

    public function getPage($pagename = ''){
        $user = new ModelsUser($_COOKIE['user']??'', $_COOKIE['email']??'');
        if (in_array($pagename, $this->avaible_pages))
        {
            return view($pagename, ['user' => $user, 'reviews' => json_decode(file_get_contents(storage_path('app/reviews.json')), true)]);
        }
        elseif($pagename == '')
        {
            return view('main_page', ['user' => $user]);
        }
        else
        {
            return view('error', ['user' => $user]);
        }
    }

    public function postRegistration(){
        if ($_POST['name'] ?? false && $_POST['email'] ?? false){
        setcookie('user', strip_tags($_POST['name']));
        setcookie('email', strip_tags($_POST['email']));
    }
    return redirect('/');
    }
}
