
<form action="{{ route('aliases.update', ['alias' => $alias->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title_id">Title ID:</label>
    <input type="text" name="title_id" id="title_id" value="{{ $alias->title_id }}" required>

    

    <button type="submit">Update</button>
</form>
