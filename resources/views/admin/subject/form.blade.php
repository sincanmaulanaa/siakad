@extends("layouts.admin-layout")
@section("content")
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include("components.navbar")
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Tambah Mata Pelajaran</h6>
            </div>
            <div class="container-lg">
                <form action="{{ route("mapel_simpan") }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama mata pelajaran</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        @include("components.footer")
    </div>
</main>
@endsection
