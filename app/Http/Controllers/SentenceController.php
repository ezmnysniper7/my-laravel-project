<?php

namespace App\Http\Controllers;

use App\Models\Sentence;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
    public function index()
    {
        $sentences = Sentence::all();
        return view('index', compact('sentences'));
    }

    public function manage()
    {
        $sentences = Sentence::all();
        return view('manage', compact('sentences'));
    }

    public function update(Request $request)
    {
        $positions = [];
        $sentencesData = $request->input('sentences', []);
    
        foreach ($sentencesData as $id => $data) {
            $row = $data['row'];
            $column = $data['column'];
            $positionKey = $row . '-' . $column;
            if (isset($positions[$positionKey])) {
                return redirect()->back()->withErrors(['duplicate' => 'Multiple sentences cannot occupy the same position (Row ' . $row . ', Column ' . $column . ').']);
            }
            $positions[$positionKey] = true;
        }
    
        foreach ($sentencesData as $id => $data) {
            $sentence = Sentence::find($id);
            if ($sentence) {
                $sentence->update($data); 
            }
        }
    
        return redirect()->route('home')->with('success', 'Sentences updated successfully!');
    }
    
    
}

