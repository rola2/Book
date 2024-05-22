
<div class="card">
     <div class="card-header">
        <h2>
            Add Product
             <br><a class="btn btn-danger float-end" href="{{ route('books.index') }}"> Back</a>
        </h2>
      </div>
        <div class="card-body">


            <form action="{{ route('books.store') }}" method="POST">
                @csrf

                 <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" />
                        </div> <br>
                    </div>
                    <div class="col-md-12 col-12">

                        <div class="mb-3">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" placeholder="author" />
                        </div> <br>
                        <div class="mb-3">
                            <label>numPages</label>
                            <input type="number" name="numPages" class="form-control" placeholder="numPages" />
                        </div> <br>
                    </div>
                    <div class="col-md-12 col-12 text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </form>

        </div>
    </div>




