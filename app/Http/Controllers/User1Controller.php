<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //Handling http request from lumen
use App\Models\User; //My Model
use App\Traits\ApiResponser; //Standard API response
use DB; // can be use if not using eloquent, you can use DB component in lumen
use App\Services\User1Service;
use Illuminate\Http\Response;

Class UserController extends Controller {
    use ApiResponser;
    public $user1Service;
    private $request;

    public function __construct(User1Service $user1Service)
    {
     $this->user1Service = $user1Service;
     }

    public function getUsers()
    {
        
    }

    public function index(){
        return $this -> successResponse($this->User1Service->obtainUsers1());
    }
    public function obtainUsers1(){
        return $this->performRequest('GET','/users');
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
