

<h1>Filmovi</h1>

<a href="{{ route('aliases.create') }}">Novi Film</a>

<table>
    <thead>
        <tr>
            <th>Title ID</th>
            <th>Ordering</th>
            <th>Title</th>
            <th>Region</th>
            <th>Language</th>
            <th>Is Original Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($aliases as $alias)
        <tr>
            <td>{{ $alias->title_id }}</td>
            <td>{{ $alias->ordering }}</td>
            <td>{{ $alias->title }}</td>
            <td>{{ $alias->region }}</td>
            <td>{{ $alias->language }}</td>
            <td>{{ $alias->is_original_title ? 'Yes' : 'No' }}</td>
            <td>
                <a href="{{ route('aliases.show', ['alias' => $alias->id]) }}">View</a>
                <a href="{{ route('aliases.edit', ['alias' => $alias->id]) }}">Edit</a>
                <form action="{{ route('aliases.destroy', ['alias' => $alias->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
