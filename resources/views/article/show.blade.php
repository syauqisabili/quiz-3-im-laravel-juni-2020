@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h3 class="m-0 font-weight-bold text-primary">{{$item->judul}}</h3>

      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
          <div class="dropdown-header">Actions</div>
          <a class="dropdown-item" href="/artikel/{{$item->id}}/edit">Edit</a>
          <form action=" {{ route('artikel.destroy', ['id' => $item->id]) }} " method="POST">
            @csrf
            @method('DELETE')
            <button class="dropdown-item" type="submit">Delete</button>
          </form>
        </div>
      </div>
    </div>
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Slug: {{$item->slug}}</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      {{$item->isi}}
    </div>
  </div>

@endsection
