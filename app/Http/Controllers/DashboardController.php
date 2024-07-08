<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_book = Book::count();
        $jumlah_mahasiswa = Mahasiswa::count();
        return view('dashboard', compact('jumlah_book', 'jumlah_mahasiswa'));
    }
}
