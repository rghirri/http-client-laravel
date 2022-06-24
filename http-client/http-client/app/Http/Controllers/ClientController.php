<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class ClientController extends Controller
{
    private $items;

    public function __construct()
    {
        $this->items = Http::get('https://jsonplaceholder.typicode.com/posts');
        //-------------------------------------------------------------------
        // $this->items = Http::get(
        //     'https://dev.shepherd.appoly.io/fruit.json'
        // ) /*->json()*/;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->items;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    //-----------------------------------------------------------------------

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getPostById($id)
    {
        $post = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}");
        return $post->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function AddPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New Post Title',
            'body' => 'New Post Description',
        ]);
        return $post->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdatePost($id)
    {
        $post = Http::put("https://jsonplaceholder.typicode.com/posts/{$id}", [
            'title' => 'Updated Title',
            'body' => 'Updated Description',
        ]);
        return $post->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePost($id)
    {
        $post = Http::delete(
            "https://jsonplaceholder.typicode.com/posts/{$id}",
            [
                'title' => 'Updated Title',
                'body' => 'Updated Description',
            ]
        );
        return $post->json();
    }

    //------------------------------------------------------

    // public function getAllLabel()
    // {
    //     $response = Http::get(
    //         'https://dev.shepherd.appoly.io/fruit.json'
    //     )->json();
    //     return $response['menu_items'];
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function getPostByLabel($label)
    // {
    //     $response = Http::get(
    //         "https://dev.shepherd.appoly.io/fruit.json/{$label}"
    //     )->json();
    //     return $response['menu_items'];
    // }
    //------------------------------------------------------

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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