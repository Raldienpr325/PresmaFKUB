<?php

namespace App\Http\Controllers;

use App\Models\TokenUser;
use App\Models\User;
use App\Models\Ceknim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.logintoken');
    }

    public function cektoken(Request $request){
        // $tokenuser =DB::table('token-users')->where('token', $request )->value('token');
        $tokenuser = TokenUser::where('token', $request['token'])->first();
        if($tokenuser){
            // dd('asdfasd');
            $validasiuser = User::where('google_id', $tokenuser['google_id'])->first();
            if($validasiuser){
                // return redirect('halaman-logintoken')->with('already-token', 'Maaf TOKEN anda Sudah digunakan !!');
                Auth::login($validasiuser);
                return redirect('/vote-presma');
            }
            else{
                // dd($tokenuser);
                $newUser = User::create([
                    'name' => $tokenuser->name,
                    'email' => $tokenuser->email,
                    'google_id' => $tokenuser->google_id,
                    'locale' => $tokenuser->locale,
                    'password' => $tokenuser->password,
                    'level' => $tokenuser->level,
                ]);
                Auth::login($newUser);
                Ceknim::create([
                    'nama' => $tokenuser->name,
                    'NIM' => $tokenuser->google_id,
                    'email' => $tokenuser->email
                ]);
                // return view('user.personaltoken', ['kirimtoken' => $request['token']]);
                return redirect('/vote-presma');
            }
        }
        else{
            return redirect('halaman-logintoken')->with('false-token', 'Maaf TOKEN anda SALAH !!');
        }
    }

    public function datadairiuser(Request $request){
        // dd([
        //     $request['nama'],
        //     $request['NIP']
        // ]);
        $newUser = User::create([
            'name' => $request->nama,
            'email' => "$request->NIP" . '@daritoken.com',
            'google_id' => $request->token,
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);
        Auth::login($newUser);
        Ceknim::create([
            'nama' => $request->nama,
            'NIM' => $request->NIP,
        ]);
        return redirect('/vote-presma');
    }

    public function halamanusertambahan(){
        return view('user.usertambahan');
    }

    public function kirimpesanmasalah(Request $request){
        $name = $request['name'];
        $NIM = $request['NIM'];
        $prodi = $request['prodi'];
        $email = $request['email'];
        $pesan = $request['pesan'];
        $nomor_tempat_kirim = $request['nomor_wa'];
        return redirect("https://api.whatsapp.com/send?phone=$nomor_tempat_kirim&text=Nama:%20$name%20%0DNIM:%20$NIM%20%0DProdi:%20$prodi%20%0DEmail:%20$email%20%0DPesan:%20$pesan");

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TokenUser  $tokenUser
     * @return \Illuminate\Http\Response
     */
    public function show(TokenUser $tokenUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TokenUser  $tokenUser
     * @return \Illuminate\Http\Response
     */
    public function edit(TokenUser $tokenUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TokenUser  $tokenUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TokenUser $tokenUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TokenUser  $tokenUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(TokenUser $tokenUser)
    {
        //
    }

}
