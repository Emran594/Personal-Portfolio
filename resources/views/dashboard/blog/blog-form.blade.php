<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-12xl">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="title" 
                                name="title" 
                                placeholder="Enter Post Title" 
                                required
                            >
                        </div>
                    
                        <div class="form-group mt-4">
                            <label for="description">Post Description</label>
                            <textarea 
                                class="form-control" 
                                id="description" 
                                name="description"
                                placeholder="Enter Post Description"
                            ></textarea>
                        </div>
                    
                        <div class="form-group mt-4">
                            <label for="featured_image">Featured Image</label>
                            <input 
                                type="file" 
                                class="form-control" 
                                id="featured_image" 
                                name="featured_image"
                                required
                            >
                        </div>
                    
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Submit Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        tinymce.init({
            selector: '#description',
            plugins: [
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 
                'searchreplace', 'table', 'visualblocks', 'wordcount', 'checklist', 'mediaembed', 'casechange', 
                'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 
                'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'mentions', 'tinycomments', 
                'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown'
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script>
</x-app-layout>
