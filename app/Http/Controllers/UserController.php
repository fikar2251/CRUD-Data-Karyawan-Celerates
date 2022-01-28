<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|unique:users',
            'salary' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasfile('image')) {
            $validated['image'] = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('img'), $validated['image']);
        }

        User::create($validated);

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userdetail = User::find($id);
        return view('detail', compact('userdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $useredit = User::find($id);
        return view('edit', compact('useredit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $userupdate = User::find($id);
        if ($request->file('image') == '') {
            $userupdate->update([
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'salary' => $request->salary,
            ]);
        } else {
            $dgambar = $request->image;
            $filename = $dgambar->getClientOriginalName();

            $userupdate->update([
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'salary' => $request->salary,
                'image' => $filename,
            ]);
        }
        $dgambar->move(public_path('img'), $filename);

        return redirect('/user');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userdelete = User::find($id);
        $userdelete->delete();
        return redirect()->route('user.index');
    }

    public function export($id)
    {
        $userdetail = User::find($id);
        return view('export', compact('userdetail'));

    }
}
