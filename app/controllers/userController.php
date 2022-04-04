<?php
namespace coding\app\controllers;

use coding\app\models\CityModel;

class UserController extends Controller{

    function newCity()
    {
        $this->view('new_city');
    }

    function showProfile()
    {
        $this->view('user_profile');
    }

       
    




}
?>