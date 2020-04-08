<form method="POST" action="/categories" enctype="multipart/form-data">

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    @csrf
    
    Category Name: <input type="text" name="name"><br><br>
    Category Description: <input type="text" name="description"><br><br>
    Category Images : <input type="file" name="image"> <br><br>
    <input type="submit" value="submit">
</form>