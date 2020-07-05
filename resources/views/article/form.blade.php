@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
      <div class="p-5">
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">Membuat Artikel Baru</h1>
        </div>
        <form class="user" action="/artikel" method="POST">
            @csrf
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" name="judul" class="form-control form-control-user" id="judul" placeholder="Judul">
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="slug" class="form-control form-control-user" id="slug" placeholder="" readonly>
            </div>
          </div>
          <div class="form-group">
            <textarea name="isi" id="isi" class="form-control" rows="3" placeholder="Isi"></textarea>
          </div>
          <div class="form-group">
            <input name="tag" type="text" value="" data-role="tagsinput">
            <div class="btn btn-primary btn-sm btn-icon-split" style="cursor: default;">
                <span class="icon text-white-50">
                  <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Tag</span>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
        </form>
      </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        const slugGenerate = () => {
            let title = document.getElementById('judul').value
            let slug = title.toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-')
            document.getElementById('slug').value = slug
        }
        document.getElementById('judul').addEventListener("input", slugGenerate)
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
@endpush
