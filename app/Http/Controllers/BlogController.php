<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Blog;
use App\Models\News;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }
    public function blogDetails()
    {
        
     return view('blog-details');
    }


    public function add_blog(){
        return view('admin.add-blog');
    }

    public function submit_blog(Request $request){
        // dd($request->all());
        
         $request->validate([
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Adjust the allowed file types and maximum size as needed
        'description' => 'required',
        'slug' => 'required|unique:blogs,slug', // Assuming the table name for blogs is 'blogs'
        'meta_title' => 'required',
        'meta_description' => 'nullable',
        'date' => 'required|date',
        'meta_keywords' => 'nullable', // You can adjust this as needed, but it's recommended to make it nullable since it's optional
    ]);
        $image = $request->file('image');
        $imageName = uniqid().'.'. $image->extension();
        $image->move(public_path('images'),$imageName);
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->image = $imageName;
        $blog->description = $request->description;
        $blog->slug = $request->slug;
        $blog->meta_title = $request->meta_title;
        $blog->meta_descripition = $request->meta_descripition;
        $blog->date = $request->date;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->save();
        return back()->with('success','Submit Successfully');

    }

    public function detail($slug){
        $blog = Blog::where('slug',$slug)->first();
        $blogs = Blog::latest()->get();
        $news = News::where('id',$slug)->first();
        $allnewz = News::latest()->paginate(10);
        // dd($news);
        if($blog != null){
            return view('blog-details',compact('blog','blogs'));
        }

        if($news != null){
            return view('news-detail',compact('news','allnewz'));
        }

        else{
            return "not Found";
        }
    }


    public function list(){
        $blogs = Blog::all();
        return view('admin.blog-list',compact('blogs'));
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('admin.blog-edit',compact('blog'));
    }

    public function update(Request $request ,$id){
        
        $request->validate([
        'title' => 'required',
        
        'description' => 'required',
        'slug' => 'required', // Assuming the table name for blogs is 'blogs'
        'meta_title' => 'required',
        'meta_description' => 'nullable',
        'date' => 'required|date',
        'meta_keywords' => 'nullable', // You can adjust this as needed, but it's recommended to make it nullable since it's optional
    ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
        } else {
            $country = Blog::find($id);
            $imageName = $country->image;
        }
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $imageName;
        $blog->slug = $request->slug;
        $blog->meta_title = $request->meta_title;
        $blog->meta_descripition = $request->meta_descripition;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->date = $request->date;
        $blog->save();
        return back()->with('success','Update successfully');
    }

    public function delete($id){
        $blog = Blog::find($id);
        $blog->delete();
        return back()->with('success','Delete successfully');
    }

    public function test(){
        return view('test');
    }

    public function test_submit(Request $request){
        dd($request->test);
    }
}
