<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\User2Service;

class User2Controller extends Controller
{
    use ApiResponser;

    private $User1Service;

    public function __construct(User2Service $User2Service)
    {
        $this->User2Service = $User2Service;
    }

    public function index()
    {
        return $this->successResponse($this->User2Service->obtainUser2());
    }
    public function add(Request $request ){
        return $this->successResponse($this->User2Service->createUser2($request->all(), Response::HTTP_CREATED));
    }
    public function show($id)
    {
        return $this->successResponse($this->User2Service->showUser2($id));
    }
    public function updateUser(Request $request, $id)
    {
        return $this->successResponse($this->User2Service->updateUser2($request->all(),$id));
    }
    public function deleteUser($id)
    {
        return $this->successResponse($this->User2Service->deleteUser2($id));
    }
}
