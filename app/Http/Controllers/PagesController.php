<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu_item;
use App\Page;
use App\Post;
use App\Slider;
use Illuminate\Http\Request;
use Response;

class PagesController extends Controller
{
    public function pages()
    {
        return Response::json(['pages' =>
            Page::all(),

        ]);

    }
    public function page(Request $request)
    {
        $slug = $request->validate(['slug' => 'required']);
        return Response::json(['page' =>
            Page::where('slug', $slug)->get(),

        ]);

    }
    public function categorys()
    {
        return Response::json(['categorys' =>
            Category::all(),

        ]);

    }
    public function posts()
    {
        // return "anas";
        return Response::json(['posts' =>
            Post::all(),

        ]);

    }
    public function sliders()
    {
        return Response::json(['sliders' =>
            Slider::all(),

        ]);

    }
    public function menus()
    {
        return Response::json(['menus' =>
            Menu_item::where("menu_id", 2)->get(),

        ]);

        // return 'anas';
        return Menu_item::where("menu_id", 2);
    }
}
