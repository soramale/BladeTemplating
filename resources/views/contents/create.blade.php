@extends('adminlte.master')


@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Contents.index</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <p>ini adalah halaman create folder contents</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
    <script>
        var wrappers = document.getElementsByClassName('col-md-6')
        var items = ["ini", "hanya", "contoh"]

        console.log("ini items: ", items)
    </script>
@endpush