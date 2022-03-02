@extends('layouts.admin_main')

@section('container_admin')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">



            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling">
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
                            <td><a href="">{{$book->title}}</a></td>
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
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->
@endsection
