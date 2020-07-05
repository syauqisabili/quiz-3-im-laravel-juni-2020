@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List Artikel</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive mb-auto">
        <a href="/artikel/create" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Artikel Baru</span>
        </a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Dibuat</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($items as $key => $item)
              <tr>
                <td> {{ $key+1 }} </td>
                <td> {{ $item->judul }} </td>
                <td> {{ $item->created_at }} </td>
                <td> <a href="/artikel/{{$item->id}}" class="btn btn-primary">Show</a> </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
    <!-- Page level plugins -->
    <script src=" {{asset('/sbadmin2/vendor/datatables/jquery.dataTables.min.js')}} "></script>
    <script src=" {{asset('/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}} "></script>

    <!-- Page level custom scripts -->
    <script src=" {{asset('/sbadmin2/js/demo/datatables-demo.js')}} "></script>
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush
