@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-body">
            <h5>Command Untuk Instalasi Laravel</h5>
            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" onclick="copyCode('codeSnippet1', 'copyButton1')">
                    <i class="bi bi-copy"></i>
                </button>
            </div>
            <pre><code id="codeSnippet1">composer create-project --prefer-dist laravel/laravel web-galeri</code></pre>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <h5>Command Untuk Membuat Migration</h5>
            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" onclick="copyCode('codeSnippet2', 'copyButton2')">
                    <i class="bi bi-copy"></i>
                </button>
            </div>
            <pre><code id="codeSnippet2">php artisan make:migration create_galeri</code></pre>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <h5>Command Untuk Membuat Model</h5>
            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" onclick="copyCode('codeSnippet3', 'copyButton3')">
                    <i class="bi bi-copy"></i>
                </button>
            </div>
            <pre><code id="codeSnippet3">php artisan make:model Galeri</code></pre>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <h5>Command Untuk Membuat GaleriController</h5>
            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" onclick="copyCode('codeSnippet4', 'copyButton4')">
                    <i class="bi bi-copy"></i>
                </button>
            </div>
            <pre><code id="codeSnippet4">php artisan make:controller GaleriController --resource</code></pre>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <h5>Command Untuk Membuat AuthController</h5>
            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" onclick="copyCode('codeSnippet7', 'copyButton7')">
                    <i class="bi bi-copy"></i>
                </button>
            </div>
            <pre><code id="codeSnippet7">php artisan make:controller AuthController</code></pre>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <h5>Command Untuk Migrasi Database</h5>
            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" onclick="copyCode('codeSnippet5', 'copyButton5')">
                    <i class="bi bi-copy"></i>
                </button>
            </div>
            <pre><code id="codeSnippet5">php artisan migrate</code></pre>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <h5>Command Untuk Menjalankan Laravel</h5>
            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" onclick="copyCode('codeSnippet6', 'copyButton6')">
                    <i class="bi bi-copy"></i>
                </button>
            </div>
            <pre><code id="codeSnippet6">php artisan serve</code></pre>
        </div>
    </div>
    
</div>
<script>
    function copyCode(codeId, buttonId) {
        const codeSnippet = document.getElementById(codeId);
        const tempTextArea = document.createElement('textarea');
        tempTextArea.value = codeSnippet.innerText;
        document.body.appendChild(tempTextArea);
        tempTextArea.select();
        document.execCommand('copy');
        document.body.removeChild(tempTextArea);

        // Disable the button after copying
        const copyButton = document.getElementById(buttonId);
        copyButton.disabled = true;
        copyButton.classList.add('btn-secondary'); 
        copyButton.innerHTML = '<i class="bi bi-check"></i>'; // Optionally, change the button content
    }
</script>


@endsection
