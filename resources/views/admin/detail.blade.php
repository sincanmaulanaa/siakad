@extends("layouts.admin-layout")
@section("content")
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include("components.navbar")
    <!-- End Navbar -->
    <div class="container-fluid py-4 text-white">
        Nama : {{ $data_user->name }} <br />
        Username : {{ $data_user->username }} <br />
        Email : {{ $data_user->email }} <br />
        created_at : {{ $data_user->created_at }} <br />
        updated_at : {{ $data_user->updated_at }} <br />
        @include("components.footer")
    </div>
</main>
@endsection
