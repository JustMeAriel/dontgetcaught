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

                    $galeriData = [
                        'title' => $request->input('title'),
                        'content' => $request->input('content'),
                    ];

                    if ($request->hasFile('featured_image') && $request->file('featured_image')->isValid()) {
                        $originalFileName = $request->file('featured_image')->getClientOriginalName();
                        $directory = public_path('images');
                        $counter = 1;

                        $name = pathinfo($originalFileName, PATHINFO_FILENAME);
                        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                        $fileName = $originalFileName;

                        while (file_exists($directory . '/' . $fileName)) {
                            $fileName = $name . '(' . $counter . ').' . $extension;
                            $counter++;
                        }

                        $request->file('featured_image')->move($directory, $fileName);
                        $galeriData['featured_image'] = $fileName;
                    }

                    Galeri::create($galeriData);

                    return redirect()->route('galeri.index')->with('success', 'Galeri Berhasil Dibuat.');
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
                        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:20048',
                    ]);

                    // Retrieve the current image file name from the database
                    $galeri = Galeri::findOrFail($id);
                    $currentImage = $galeri->featured_image;

                    $galeriData = [
                        'title' => $request->input('title'),
                        'content' => $request->input('content'),
                    ];

                    // Check if an image is provided for update
                    if ($request->hasFile('featured_image') && $request->file('featured_image')->isValid()) {
                        $originalFileName = $request->file('featured_image')->getClientOriginalName();
                        $directory = public_path('images');
                        $counter = 1;

                        $name = pathinfo($originalFileName, PATHINFO_FILENAME);
                        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                        $fileName = $originalFileName;

                        // Generate a unique filename if it already exists
                        while (file_exists($directory . '/' . $fileName)) {
                            $fileName = $name . '(' . $counter . ').' . $extension;
                            $counter++;
                        }

                        // Move and save the new image
                        $request->file('featured_image')->move($directory, $fileName);
                        $galeriData['featured_image'] = $fileName;

                        // Delete the current image file if it exists
                        if ($currentImage && File::exists($directory . '/' . $currentImage)) {
                            File::delete($directory . '/' . $currentImage);
                        }
                    }

                    // Update existing record
                    $galeri->update($galeriData);

                    return redirect()->route('galeri.index')->with('success', 'Galeri Berhasil Diperbarui.');
                }



                public function destroy($id)
                {
                    $galeri = Galeri::findOrFail($id);
                    File::delete(public_path('images/' . $galeri->featured_image));
                    $galeri->delete();
                    return redirect()->route('galeri.index')->with('success', 'Galeri Berhasil Dihapus.');
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

