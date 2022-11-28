@extends("layouts.admin-layout")
@section("content")
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include("components.navbar")
    <!-- End Navbar -->
    <div class="container-fluid py-4 text-white">
        Nama Mata Pelajaran : {{ $data_subject->name }} <br />
        @include("components.footer")
    </div>
</main>
@endsection
