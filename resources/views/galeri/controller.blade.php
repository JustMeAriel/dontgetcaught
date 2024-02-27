@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h2>GaleriController.php</h2>

            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" id="copyButton" onclick="copyCode()">
                    <i class="bi bi-copy"></i>
                </button>
            </div>

            <pre><code id="codeSnippet">
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index()
    {
        $data = Galeri::orderByDesc('id')->get();
        return view('galeri.index', compact('data'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg|max:20048',
        ]);

        $featuredImage = $request->file('featured_image')->getClientOriginalName();
        $request->file('featured_image')->move(public_path('images'), $featuredImage);

        Galeri::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'featured_image' => $featuredImage,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri Berhasil Dibuat!');
    }

    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.show', compact('galeri'));
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'featured_image' => 'image|mimes:jpeg,png,jpg|max:20048',
        ]);

        $galeri = Galeri::findOrFail($id);
        $galeri->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        if ($request->hasFile('featured_image')) {
            File::delete(public_path('images/' . $galeri->featured_image));
            $featuredImage = $request->file('featured_image')->getClientOriginalName();
            $request->file('featured_image')->move(public_path('images'), $featuredImage);
            $galeri->update(['featured_image' => $featuredImage]);
        }

        return redirect()->route('galeri.index')->with('success', 'Galeri Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        File::delete(public_path('images/' . $galeri->featured_image));
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Galeri Berhasil Dihapus!');
    }
}
</code></pre>
        </div>
    </div>
</div>

<script>
    function copyCode() {
        const codeSnippet = document.getElementById('codeSnippet');
        const tempTextArea = document.createElement('textarea');
        tempTextArea.value = codeSnippet.innerText;
        document.body.appendChild(tempTextArea);
        tempTextArea.select();
        document.execCommand('copy');
        document.body.removeChild(tempTextArea);

        // Disable the button after copying
        const copyButton = document.getElementById('copyButton');
        copyButton.disabled = true;
        copyButton.classList.add('btn-secondary');
        copyButton.innerHTML = '<i class="bi bi-check"></i>'; // Optionally, change the button style
    }
</script>



<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h2>AuthController.php</h2>

            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" id="copyButton" onclick="copyCode()">
                    <i class="bi bi-copy"></i>
                </button>
            </div>

            <pre><code id="codeSnippet">
            

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('/galeri')->with('success', 'Login berhasil.'); 
        }
    
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:2',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        Auth::login($user);
    
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.'); 
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logout berhasil.'); 
    }
}
</code></pre>
        </div>
    </div>
</div>

<script>
    function copyCode() {
        const codeSnippet = document.getElementById('codeSnippet');
        const tempTextArea = document.createElement('textarea');
        tempTextArea.value = codeSnippet.innerText;
        document.body.appendChild(tempTextArea);
        tempTextArea.select();
        document.execCommand('copy');
        document.body.removeChild(tempTextArea);

        // Disable the button after copying
        const copyButton = document.getElementById('copyButton');
        copyButton.disabled = true;
        copyButton.classList.add('btn-secondary');
        copyButton.innerHTML = '<i class="bi bi-check"></i>'; // Optionally, change the button style
    }
</script>
@endsection

