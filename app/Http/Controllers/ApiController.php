<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService) {
        $this->apiService = $apiService;
    }

    public function getData() {
        $data = $this->apiService->get('api/usuarios');
        return response()->json($data);
    }

    public function postData(Request $request) {
        $userData = $request->all();
        $response = $this->apiService->post('api/usuarios', $userData);
        return response()->json($response);
    }
}
