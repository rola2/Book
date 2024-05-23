
<div class="col-md-9">
             <a href="{{ url('/books/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
               <i class="fa fa-plus" aria-hidden="true"></i> Add New Book
             </a>

       <br/>
       <br>
        <br/>
<div class="table-responsive">
  <table class="table" border="2">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Author</td>
          <td>numPages</td>

        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->name }}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->numPages}}</td>
            <td class="text-center">
            <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>

            <a href="{{ route('books.edit', $book->id)}}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('books.destroy', $book->id)}}" method="post" style="display: inline-block">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> <br>
<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
</div>
</div>
</div>

