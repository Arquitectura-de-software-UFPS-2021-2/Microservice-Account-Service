<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    private $notificationService;

    public function __construct(NotificationService $notificationService){
        $this->notificationService = $notificationService;
    }

    public function index(){
    }

    public function fetchReadAll(Request $request){
        return $this->successResponse($this->notificationService->fetchReadAll($request->all()));
    }

    public function create(Request $request){
        return $this->successResponse($this->notificationService->create($request->all()));
    }

    public function sendMailRegistro(Request $request){
        return $this->successResponse($this->notificationService->sendMailRegistro($request->all()));
    }
}