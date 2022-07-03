<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menus'] = Menu::paginate(42);
        $data['categories'] = Category::all();
        return view('menu.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['menus'] = Menu::all();
        $data['categories'] = Category::all();
        return view('menu.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->name = $request->post('name');
        $menu->price = $request->post('price');
        $menu->description = $request->post('description');
        $path = $request->file('image')->store('public/images');
        $menu->image = $path;
        $menu->category_id = $request->post('category_id');
        $menu->enable = $request->post('enable');

        $menu->save();
        return redirect()->route('menu.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $data['categories'] = Category::all();
        $data['menus'] = $menu;

        return view('menu.edit', $data);
    }
}
