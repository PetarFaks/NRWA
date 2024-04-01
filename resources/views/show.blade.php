
<h1>Alias Details</h1>
<p><strong>Title ID:</strong> {{ $alias->title_id }}</p>


<p><strong>Title:</strong> {{ $alias->title }}</p>
<p><strong>Region:</strong> {{ $alias->region }}</p>
<p><strong>Language:</strong> {{ $alias->language }}</p>
<p><strong>Is Original Title:</strong> {{ $alias->is_original_title ? 'Yes' : 'No' }}</p>

<a href="{{ route('aliases.index') }}">Back to List</a>
