<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Title</th>
            <th>Client Name</th>
            <th>Industry</th>
            <th>Website</th>
            <th>Time Needed</th>
            <th>Status</th>
            <th>Action</th> <!-- New Action Column -->
        </tr>
    </thead>
    <tbody>
        @foreach($portfolios as $portfolio)
        <tr>
            <td>{{ $portfolio->title }}</td>
            <td>{{ $portfolio->client_name }}</td>
            <td>{{ $portfolio->industry }}</td>
            <td><a href="{{ $portfolio->website }}" target="_blank">{{ $portfolio->website }}</a></td>
            <td>{{ $portfolio->time_needed }}</td>
            <td>{{ $portfolio->status ? 'Completed' : 'In Progress' }}</td>
            <td>
                <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this portfolio?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

