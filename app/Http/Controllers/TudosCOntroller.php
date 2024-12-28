<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TudosController extends Controller
{
    public function getTableSize()
    {
        $tableName = 'tudos'; // Todo jadvali nomi

        // SHOW TABLE STATUS so'rovini bajarish
        $result = DB::select(DB::raw("SHOW TABLE STATUS WHERE Name = :tableName"), ['tableName' => $tableName]);

        // Agar natija bo'lmasa
        if (empty($result)) {
            return response()->json([
                'error' => 'Jadval ma\'lumotlari topilmadi',
            ], 404);
        }

        // Jadvaldagi ma'lumotlar hajmini olish
        $dataSize = $result[0]->Data_length; // Baytlarda hajmi

        // Baytni MB va GB ga aylantirish
        $dataSizeMB = $dataSize / 1024 / 1024; // MB ga aylantirish
        $dataSizeGB = $dataSizeMB / 1024; // GB ga aylantirish

        return response()->json([
            'data_size_mb' => round($dataSizeMB, 2), // MB
            'data_size_gb' => round($dataSizeGB, 2), // GB
        ]);
    }
}
