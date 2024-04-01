<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogsBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 1. Blog oluştur
        $blog1 = new Blog();
        $blog1->title = 'İlk Blog Başlığı';
        $blog1->content = 'İlk blog içeriği buraya gelecek.';
        $blog1->summary = 'İlk blog özeti buraya gelecek.';
        $blog1->save();

// 2. Blog oluştur
        $blog2 = new Blog();
        $blog2->title = 'İkinci Blog Başlığı';
        $blog2->content = 'İkinci blog içeriği buraya gelecek.';
        $blog2->summary = 'İkinci blog özeti buraya gelecek.';
        $blog2->save();

// 3. Blog oluştur
        $blog3 = new Blog();
        $blog3->title = 'Üçüncü Blog Başlığı';
        $blog3->content = 'Üçüncü blog içeriği buraya gelecek.';
        $blog3->summary = 'Üçüncü blog özeti buraya gelecek.';
        $blog3->save();

        //düzenli bir şekilde sıralanma sağlar . id numarasına göre yukarıdan aşağı
        $blogs = Blog ::orderBy('id')->get();
        return view('front.blogs.index' , compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    public function createUser(Request $request){

        $validatedData=$request->validate([
            'email'=>'required |email | unique:users',
            'password'=>'required | min:6',
        ]);

        $user=new User();
        $user->email=$validatedData['email'];
        $user->password=bcrypt($validatedData['password']);
        $user->save();

        return redirect()->route('front.success')->with('success', ' Datas is succesfuly added !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
