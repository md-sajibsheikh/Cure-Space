<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function add_blog()
    {
        return view('backend.pages.blog.add-blog');
    }

    public function blog_store(Request $req)
    {
        if (!is_dir(public_path('backend/assets/img/blog'))) {
            mkdir(public_path('backend/assets/img/blog'), 0777, true);
        }

        $imagePath = null;

        if ($req->img) {
            $image = $req->img;
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'backend/assets/img/blog/' . $imageName;

            $image->move(public_path('backend/assets/img/blog'), $imageName);
            $data['img'] = $imagePath;
        }

      
        $data['title'] = $req->title;
        $data['subtitle'] = $req->subtitle;

        Blog::create($data);
        Alert::success('Success', 'Blog create successfully');


        return redirect()->route('all-blog');
    }



    public function all_blog()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('backend.pages.blog.all-blog', ['blogs' => $blogs]);
    }

    public function edit_blog($id)
    {
        $blogs = Blog::where('id', $id)->first();

        return view('backend.pages.blog.edit-blog', ['blog' => $blogs]);
    }
    public function blog_update(Request $req, $id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->route('all-blog')->with('error', 'Blog not found.');
        }

        $data = [];
        if ($req->img) {
            if (file_exists(public_path($blog->img))) {
                unlink(public_path($blog->img));
            }

            $image = $req->img;
            $name = time() . '.' . $image->getClientOriginalExtension();
            $data['img'] = 'backend/assets/img/blog/' . $name;

            $image->move(public_path('backend/assets/img/blog'), $name);
        } else {
            $data['img'] = $blog->img;
        }

        $data['title'] = $req->title;
        $data['subtitle'] = $req->subtitle;

        $blog->update($data);
        Alert::success('Success', 'Blog update successfully');


        return redirect()->route('all-blog');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);

        if ($blog) {

            if ($blog->img && file_exists(public_path($blog->img))) {
                unlink(public_path($blog->img));
            }

            $blog->delete();

            Alert::success('Success', 'Blog deleted successfully');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
