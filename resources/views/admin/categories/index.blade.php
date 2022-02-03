@extends('admin.layouts.main')
@section('content')

<body>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Categories</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('admin/categories')}}">Categories</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
              </nav>
            </div>
            <!-- <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
        
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Categories</h3>
            </div>

        <div class="ibox-title">
            <div class="pull-right">
                <a href="{{url('admin/categories/create')}}" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Adding
                </a>
            </div>
        </div><br>

            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th scope="col" class="sort" data-sort="name">name</th>
                    <th scope="col" class="sort" data-sort="email">meta keywords</th>
                    <th scope="col" class="sort" data-sort="phone">meta description</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">delate</th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach($records as $record)
                            <tr id="removable{{$record->id}}">
                                <td>{{($records->perPage() * ($records->currentPage() - 1)) + $loop->iteration}}</td>
                                <td>{{$record->name}}</td>
                                <td>{{$record->meta_keywords}}</td>
                                <td>{{$record->meta_des}}</td>
                                <td class="text-center"><a href="{{url('admin/categories/' . $record->id .'/edit')}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a></td>
                                <td class="text-center">
                                    <button
                                            id="{{$record->id}}"
                                            data-token="{{ csrf_token() }}"
                                            data-route="{{url('admin/categories/'.$record->id)}}"
                                            type="button"
                                            class="destroy btn btn-danger btn-xs">
                                           <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr>
                            </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

@endsection
