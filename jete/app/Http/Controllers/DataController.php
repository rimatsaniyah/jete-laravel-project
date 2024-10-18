<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    // Fungsi untuk menampilkan semua data
    public function index()
    {
        // Di sini biasanya mengambil data dari database
        return response()->json([
            'message' => 'Menampilkan semua data',
            'data' => ['data1', 'data2', 'data3']  // Contoh data
        ], 200);
    }

    // Fungsi untuk menambah data baru
    public function store(Request $request)
    {
        // Di sini kamu bisa menambahkan validasi dan simpan data ke database
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simulasi menyimpan data
        return response()->json([
            'message' => 'Data baru berhasil ditambahkan',
            'data' => $data
        ], 201);
    }

    // Fungsi untuk menampilkan data berdasarkan id
    public function show($id)
    {
        // Misal mengambil data berdasarkan id dari database
        return response()->json([
            'message' => 'Menampilkan data dengan id ' . $id,
            'data' => ['id' => $id, 'name' => 'Data ' . $id]  // Contoh data
        ], 200);
    }

    // Fungsi untuk memperbarui data berdasarkan id
    public function update(Request $request, $id)
    {
        // Validasi dan perbarui data di database
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return response()->json([
            'message' => 'Data dengan id ' . $id . ' berhasil diperbarui',
            'updated_data' => $data
        ], 200);
    }

    // Fungsi untuk menghapus data berdasarkan id
    public function destroy($id)
    {
        // Simulasi menghapus data berdasarkan id
        return response()->json([
            'message' => 'Data dengan id ' . $id . ' berhasil dihapus',
        ], 200);
    }
}
