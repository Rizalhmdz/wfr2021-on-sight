@include('admin.main')
 <!-- Top Selling -->
            <div class="card-body">
                @if($books->count())
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Action</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Regular Price</th>
                            <th>Discount</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Action</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Regular Price</th>
                            <th>Discount</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>
                                {{-- {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminBooksController@destroy', $book->id]]) !!}
                                <div class="action d-flex flex-row">
                                    <a href="{{route('books.edit', $book->id)}}" class="btn-primary btn btn-sm mr-2"><i class="fas fa-edit"></i></a>

                                    <button type="submit" onclick="return confirm('Book will move to trash! Are you sure to delete??')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                                {!! Form::close() !!} --}}
                            </td>
                            <td><img src="{{$book->image_url}}" width="60" height="70" alt=""></td>
                            <td><a href="{{route('books.edit', $book->id)}}">{{$book->title}}</a></td>
                            <td>{{$book->category->name}}</td>
                            <td>{{$book->author->name}}</td>
                            <td>{{$book->init_price}}</td>
                            <td>{{$book->discount_rate}}%</td>
                            <td>{{$book->price}}</td>
                            <td>{{$book->quantity}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
