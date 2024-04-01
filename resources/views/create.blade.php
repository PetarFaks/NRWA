
<form action="{{ route('aliases.store') }}" method="POST">
    @csrf
    <label for="title_id">Title ID:</label>
    <input type="text" name="title_id" id="title_id" required>

   

    <button type="submit">Submit</button>
</form>
