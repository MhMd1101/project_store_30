<form method="POST" action="/categories/{{ $category->id }}">
    @method('PUT')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf
    
    Category Name: <input type="text" name="name" value="{{ $category -> name }}"><br><br>
    Category Description: <input type="text" name="description" value="{{ $category -> description }}" ><br>
    <input type="submit" value="submit">
</form>