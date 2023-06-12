<?php

    namespace App\Http\Controllers;

    use App\Models\News;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use \Cviebrock\EloquentSluggable\Services\SlugService;


    class AdminController extends Controller
    {
        
        public function settings(){
            return view('adminsettings',[
                'halaman' => 'GoWell : Admin Settings',
                'css' => 'adminsettings.css',
            ]);
        }
        public function user(){
            return view('adminuser',[
                'halaman' => 'GoWell : Admin User',
                'css' => 'adminuser.css',
                'Users'=> User::all(),
                'admin' => Auth::user(),
            ]);
        }
        public function article(){
            return view('adminarticle',[
                'halaman' => 'GoWell : Admin article',
                'css' => 'adminarticle.css',
                'News' => News::all(),
                'User' => Auth::user(),
                'admin' => Auth::user(),
            ]);
        }
        public function profile(){
            return view('adminprofile',[
                'halaman' => 'GoWell : Admin profile',
                'css' => 'adminprofile.css',
            ]); 
        }
        public function store (Request $request){
            $validateData = $request->validate([
                'author' => 'required',
                'title' => 'required',
                'slug' => 'required',
                'excerpt' => 'required',
                'body' => 'required',
                'cover' => 'required',

            ]);
            News::create($validateData);
            return redirect('/admin/news')->with('success', 'New Article Has Been Added');
        }
        public function deleteArticle($id){
            $news = News::findOrFail($id);

            $news->delete();

            return redirect('/admin/news')->with('success', ' Article Has Been Deleted');
        }
        public function updateArticle(Request $request, $id)
        {
            $News = News::findOrFail($id);
            $News->author = $request->input('author');
            $News->title = $request->input('title');
            $News->excerpt = $request->input('excerpt');
            $News->slug = $request->input('slug');
            $News->cover = $request->input('cover');
            $News->body = $request->input('isi');
            $News->update();
            return redirect('/admin/news')->with('success', ' Article Has Been Updated');
        }
        public function deleteUser($id){
            $User = User::findOrFail($id);

            $User->delete();

            return redirect('/admin/user')->with('success', ' User Has Been Deleted');
        }
        public function updateUsers(Request $request, $id)
        {
            $User = User::findOrFail($id);
            $User->fullname = $request->input('fullname');
            $User->username = $request->input('username');
            $User->email = $request->input('email');
            $User->is_admin = $request->input('is_admin');
            $User->update();
            return redirect('/admin/user')->with('success', ' User Has Been Updated');
        }
    }
