@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h2>create_table_galeri.php</h2>

            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-primary" id="copyButton" onclick="copyCode()">
                    <i class="bi bi-copy"></i>
                </button>
            </div>


            <pre><code id="codeSnippet">
            use Illuminate\Database\Migrations\Migration;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Support\Facades\Schema;

            return new class extends Migration
            {
                /**
                * Run the migrations.
                */
                public function up(): void
                {
                    Schema::create('galeri', function (Blueprint $table) {
                        $table->id();
                        $table->string('title');
                        $table->text('content');
                        $table->text('featured_image');
                        $table->timestamps();
                    });
                }

                /**
                * Reverse the migrations.
                */
                public function down(): void
                {
                    Schema::dropIfExists('galeri');
                }
            };

                
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
        copyButton.innerHTML = '<i class="bi bi-check"></i>';// Optionally, change the button style
    }
</script>
@endsection

                
