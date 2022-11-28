@extends("layouts.admin-layout")
@section("content")
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include("components.navbar")
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Ubah Kelas</h6>
            </div>
            <div class="container-lg">
                <form action="{{ route("kelas_update", ['id' => $id]) }}" method="post">
                    @csrf
                    @method("put")
                    <div class="mb-3">
                        <label for="classname" class="form-label">Nama Kelas</label>
                        <input type="text" name="classname" class="form-control" id="classname">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
        @include("components.footer")
    </div>
</main>
@endsection
