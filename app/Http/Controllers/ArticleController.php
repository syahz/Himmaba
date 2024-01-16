<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Article::all();

        return view('Admin.pages.article.index')->with([
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->tittle);

        $data['photo'] = $request->file('photo')->store('assets/article_images', 'public');
        Article::create($data);
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Article::findOrFail($id);
        return view('Admin.pages.article.edit')->with([
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:200',
        ]);

        $data = $request->all();
        $item = Article::findOrFail($id);
        $slug= Str::slug($request->tittle);
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('assets/article_image', 'public');
            $photo = $data['photo'];

            $item->update([
                'tittle' => $request->input('tittle'),
                'slug' => $slug,
                'photo' => $photo,
                'detail_content' => $request->input('detail_content'),
            ]);

            return redirect()->route('article.index');
        } else {
            $item->update([
                'tittle' => $request->input('tittle'),
                'slug' => $slug,
                'detail_content' => $request->input('detail_content'),
            ]);
            return redirect()->route('article.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
