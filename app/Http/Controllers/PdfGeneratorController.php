<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Импортируйте модель User
use PDF;

class PdfGeneratorController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id); 
        $data = [
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email,
        ];
        $pdf = PDF::loadView('resume', $data);
        return $pdf->stream('resume.pdf');
    }
}