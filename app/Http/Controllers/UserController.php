<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Спосіб1: 
class UserController extends Controller
{
    public function getUser() {
        return 'Hello user';
    }
}

//Спосіб2: додавання параметрів до маршруту
// class UserController extends Controller
// {
//     public function getUser($id, $groupId) {
//         return 'Hello user, '. $id . $groupId;
//     }
// }
