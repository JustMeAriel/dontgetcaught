@extends('layouts.app')

@section('content')
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

