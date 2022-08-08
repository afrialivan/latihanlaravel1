<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class catatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $catatan = Catatan::latest();
        if (request('search')){
            $catatan->where('suhu', 'like', '%' . request('search') . '%')
                    ->orWhere('lokasi', 'like', '%' . request('search') . '%');
        }

        return view('catatan', [
            'title' => 'Catatan Perjalanan',
            // 'catatan' => Catatan::where('user_id', auth()->user()->id)->get()
            'catatan' => $catatan->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('isidata', [
            'title' => 'Isi Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cara create tanpa validasi = 
        // $catatan = new Catatan;

        // $catatan->tanggal = $request->tanggal;
        // $catatan->jam = $request->jam;
        // $catatan->lokasi = $request->lokasi;
        // $catatan->suhu = $request->suhu;
        // $catatan->user_id = Auth::user()->id;

        // $catatan->save();

        // return back();

        $validatedDate = $request->validate([
            'tanggal' => 'required',
            'jam' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required'
        ]);

        $validatedDate['user_id'] = Auth::user()->id;
        // return $validatedDate;

        Catatan::create($validatedDate);

        return redirect('/catatan-perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function show(Catatan $catatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Catatan $catatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catatan $catatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catatan  $catatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catatan $catatan)
    {
        //
    }
}
