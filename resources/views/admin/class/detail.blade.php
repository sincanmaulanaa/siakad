@extends("layouts.admin-layout")
@section("content")
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include("components.navbar")
    <!-- End Navbar -->
    <div class="container-fluid py-4 text-white">
        Nama Kelas : {{ $data_class->classname }} <br />
        @include("components.footer")
    </div>
</main>
@endsection
