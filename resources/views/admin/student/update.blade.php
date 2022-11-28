@extends("layouts.admin-layout")
@section("content")
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include("components.navbar")
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Ubah Data Siswa</h6>
            </div>
            <div class="container-lg">
                <form action="{{ route("siswa_update", ['id' => $id]) }}" method="post">
                    @csrf
                    @method("put")
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" name="nis" class="form-control" id="nis">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="name" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <input type="text" name="gender" class="form-control" id="gender">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" name="address" class="form-control" id="address">
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Kelas</label>
                        <input type="text" name="class" class="form-control" id="class">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
        @include("components.footer")
    </div>
</main>
@endsection
