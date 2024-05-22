
    <div class="card">
        <div class="card-header">
            <h2>
                Show Book
                <br>
            </h2>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="mb-3">
                        <label>Name</label>
                        <p>{{ $book->name }}</p>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="mb-3">
                        <label>Author</label>
                        <p>{{ $book->author }}</p>
                    </div>
                    <div class="mb-3">
                        <label>numPages</label>
                        <p>{{ $book->numPages }}</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-danger float-end" href="{{ route('books.index') }}"> Back</a>


        </div>
    </div>

