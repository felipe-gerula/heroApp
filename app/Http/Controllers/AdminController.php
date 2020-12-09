<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Item;
use App\Enemy;

class AdminController extends Controller
{
    public function index(){
        $heroCounter = Hero::count();
        $itemCounter = Item::count();
        $enemyCounter = Enemy::count();

        $report = [
           ['name'=>'Heroes','counter' =>$heroCounter,'route' => 'admin.heroes'],
           ['name'=>'Items','counter' =>$itemCounter,'route' => 'admin.items'],
           ['name'=>'Enemys','counter' =>$enemyCounter,'route' => 'admin.enemies']
        ];

        return view('admin.index',['report' => $report]);
    }
}
