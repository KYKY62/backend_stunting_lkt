<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stunting;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class StuntingController extends Controller
{
    public function index(): JsonResponse
    {
        $data = Stunting::select('kecamatan', 'jumlah_stunting')->get();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
}
