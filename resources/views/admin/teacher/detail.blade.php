@extends("layouts.admin-layout")
@section("content")
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include("components.navbar")
    <!-- End Navbar -->
    <div class="container-fluid py-4 text-white">
        NIP : {{ $data_teacher->nip }} <br />
        Nama Lengkap : {{ $data_teacher->name }} <br />
        Alamat : {{ $data_teacher->address }} <br />
        Jenis Kelamin : {{ $data_teacher->gender }} <br />
        created_at : {{ $data_teacher->created_at }} <br />
        updated_at : {{ $data_teacher->updated_at }} <br />
        @include("components.footer")
    </div>
</main>
@endsection
