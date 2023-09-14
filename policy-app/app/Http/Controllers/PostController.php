<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function update(Request $request, Post $post){
        $this->authorize('update',$post);
        $post->update($request->all());
        return redirect()->route('post.show',$post);
    }
}
