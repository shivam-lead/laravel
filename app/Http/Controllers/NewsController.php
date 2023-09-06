<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewNews;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

class NewsController extends Controller
{
    public function newsdetails()
    {

        $currentDate = Carbon::now()->format('d-m-Y');
        // $currentDate = '18-07-2023';
        $response = Http::withHeaders([
            "X-RapidAPI-Host" => "reuters-business-and-financial-news.p.rapidapi.com",
            "X-RapidAPI-Key" => "362c3a86f9msh80ba36e1d1f870fp116898jsnc0d1a27ee891"
        ])->get("https://reuters-business-and-financial-news.p.rapidapi.com/category-id/10/article-date/23-07-2023?category-id=10&ArticleDate=23-07-2023");

        dd($response->json());
        $news = $response->json();
        $news404 = 'assets/images/news404.png';
        $newdiscription = '';
        if ($news == null) {
            return back();
        }
        foreach ($news as $article) {
            $description = json_decode($article['articlesDescription'], true);
            $newdiscription = '';

            foreach ($description as $dis) {
                $newdiscription .= '<p>' . $dis['content'] . '</p>';
            }
            $newz = new News;
            $newz->title = $article['articlesName'];
            $newz->description = $newdiscription;
            if ($article['files'] == null) {
                $newz->image = $news404;
            } else {
                $newz->image = $article['files'][0]['urlCdn'];
            }
            $newz->date = $article['publishedAt']['date'];
            $newz->save();
        }
    }
    
    public function news_detail(Request $request ,$id)
    {
        // dd($id);
         $news = News::where('id',$id)->first();
        $allnewz = News::latest()->paginate(10);
        return view('news-detail',compact('news','allnewz'));
        
    }
    
    public function all_news(){
        $news = News::latest()->get();
        return view('all-news',compact('news'));
    }
    
    public function add_news(){
        return view('admin.add-news');
    }
    
    
    public function submit_news(Request $request){
        // dd($request->all());
        
         $request->validate([
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Adjust the allowed file types and maximum size as needed
        'description' => 'required',
        'slug' => 'required|unique:blogs,slug', // Assuming the table name for blogs is 'blogs'
        'meta_title' => 'required',
        'meta_description' => 'nullable',
        'date' => 'required|date',
        'meta_keywords' => 'nullable' // You can adjust this as needed, but it's recommended to make it nullable since it's optional
    ]);
        $image = $request->file('image');
        $imageName = uniqid().'.'. $image->extension();
        $image->move(public_path('images'),$imageName);
        $news = new NewNews;
        $news->title = $request->title;
        $news->image = $imageName;
        $news->description = $request->description;
        $news->slug = $request->slug;
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_descripition;
        $news->date = $request->date;
        $news->meta_keywords = $request->meta_keywords;
        $news->save();
        return back()->with('success','Submit Successfully');
    }
    
    public function news_list(){
        
        $new_news = NewNews::all();
        return view('admin.news-list',compact('new_news'));
    }
    
    public function edit($id){
        $blog = NewNews::find($id);
        return view('admin.news-edit',compact('blog'));
    }
    
    public function update(Request $request ,$id){
        
              $request->validate([
        'title' => 'required',
        'description' => 'required',
        'slug' => 'required|unique:blogs,slug', // Assuming the table name for blogs is 'blogs'
        'meta_title' => 'required',
        'meta_description' => 'nullable',
        'date' => 'required|date',
        'meta_keywords' => 'nullable' // You can adjust this as needed, but it's recommended to make it nullable since it's optional
    ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
        } else {
            $country = NewNews::find($id);
            $imageName = $country->image;
        }
        $news = NewNews::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->image = $imageName;
        $news->slug = $request->slug;
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_descripition;
        $news->meta_keywords = $request->meta_keywords;
        $news->date = $request->date;
        $news->save();
        return back()->with('success','Update successfully');
    }
    
    public function delete($id){
        $news = NewNews::find($id);
        $news->delete();
         return back()->with('success','Delete successfully');
    }

}
