<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Title</th>
            <th>Feature Image</th>
            <th>Description</th>
            <th>Action</th> <!-- New Action Column -->
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td  style="width: 20%;"><img src="{{ asset($post->featured_image) }}" alt=""></td>
            <td>{{ Str::words(strip_tags(html_entity_decode($post->description)), 10) }}</td>
            <td>
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

