<form method="POST" action="/items">

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
    
    Items Name: <input type="text" name="name"><br><br>
    Items Description: <input type="text" name="description"><br><br>
    Items Price: <input type="text" name="price"><br><br>
    Items Photo: <input type="text" name="photo"><br><br>
    Items category_id: <input type="text" name="category_id"><br><br>
    <input type="submit" value="submit"> 
</form>