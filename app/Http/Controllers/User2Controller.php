<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //Handling http request from lumen
use App\Models\User; //My Model
use App\Traits\ApiResponser; //Standard API response
use DB; // can be use if not using eloquent, you can use DB component in lumen
use App\Services\User2Service;
use Illuminate\Http\Response;

Class UserController extends Controller {
    use ApiResponser;
    public $user2Service;
    private $request;

    public function __construct(User2Service $user2Service)
    {
     $this->user2Service = $user2Service;
     }

    public function getUsers()
    {
        
    }

    public function index(){

    }
    
    public function add(Request $request){

    }

    public function show($id){
       
        
    }

    public function update(Request  $request,$id)
    {
        
    }


    public function delete($id)
    {
     
    }
}
