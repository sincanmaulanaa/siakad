@extends("layouts.admin-layout")
@section("content")
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include("components.navbar")
    <!-- End Navbar -->
    <div class="container-fluid py-4 text-white">
        NIS : {{ $data_student->nis }} <br />
        Nama Lengkap : {{ $data_student->name }} <br />
        Kelas : {{ $data_student->class }} <br />
        Alamat : {{ $data_student->address }} <br />
        Jenis Kelamin : {{ $data_student->gender }} <br />
        created_at : {{ $data_student->created_at }} <br />
        updated_at : {{ $data_student->updated_at }} <br />
        @include("components.footer")
    </div>
</main>
@endsection
