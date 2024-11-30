<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModuleController extends Controller
{
    public function listModuleSd()
    {
        // Get all files from the "public/storage/sd" directory
        $files = Storage::files('public/sd');

        // If you want to remove the "public/sd/" prefix and only show the file names
        $fileNames = array_map(function ($file) {
            return basename($file);
        }, $files);

        // Return the file names as a response
        return response()->json($fileNames);
    }

    public function downloadModuleSd($fileName)
    {
        // Path ke file di dalam "public/sd"
        $filePath = 'public/sd/' . $fileName;

        // Cek apakah file ada
        if (Storage::exists($filePath)) {
            // Mengirim file untuk di-download
            return Storage::download($filePath);
        } else {
            // Jika file tidak ditemukan, tampilkan error
            return response()->json(['error' => 'File not found.'], 404);
        }
    }

    public function listModuleSmp()
    {
        // Get all files from the "public/storage/sd" directory
        $files = Storage::files('public/smp');

        // If you want to remove the "public/sd/" prefix and only show the file names
        $fileNames = array_map(function ($file) {
            return basename($file);
        }, $files);

        // Return the file names as a response
        return response()->json($fileNames);
    }

    public function downloadModuleSmp($fileName)
    {
        // Path ke file di dalam "public/sd"
        $filePath = 'public/smp/' . $fileName;

        // Cek apakah file ada
        if (Storage::exists($filePath)) {
            // Mengirim file untuk di-download
            return Storage::download($filePath);
        } else {
            // Jika file tidak ditemukan, tampilkan error
            return response()->json(['error' => 'File not found.'], 404);
        }
    }

    public function listModuleSma()
    {
        // Get all files from the "public/storage/sd" directory
        $files = Storage::files('public/sma');

        // If you want to remove the "public/sd/" prefix and only show the file names
        $fileNames = array_map(function ($file) {
            return basename($file);
        }, $files);

        // Return the file names as a response
        return response()->json($fileNames);
    }

    public function downloadModuleSma($fileName)
    {
        // Path ke file di dalam "public/sd"
        $filePath = 'public/sma/' . $fileName;

        // Cek apakah file ada
        if (Storage::exists($filePath)) {
            // Mengirim file untuk di-download
            return Storage::download($filePath);
        } else {
            // Jika file tidak ditemukan, tampilkan error
            return response()->json(['error' => 'File not found.'], 404);
        }
    }
}
