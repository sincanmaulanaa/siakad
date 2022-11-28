@extends("layouts.admin-layout")
@section("content")
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include("components.navbar")
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <h6>Data Mata Pelajaran</h6>
                        <a href="{{ route("mapel_formulir") }}">
                            <button class="btn btn-primary">Tambah Mata Pelajaran</button>
                        </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Mata Pelajaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_subject as $subject)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm text-secondary">{{ $subject->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $subject->name }}</p>
                                        </td>
                                        <td class="align-middle d-flex">
                                            <a href="{{ route("mapel_detail", ['id' => $subject->id])}}" class="text-white font-weight-bold text-xs btn btn-info">
                                                Detail
                                            </a>
                                            <a href="{{ route("mapel_edit", ['id' => $subject->id])}}" class="text-white font-weight-bold text-xs btn btn-primary mx-2">
                                                Edit
                                            </a>
                                            <form action={{ route("mapel_delete", ['id' => $subject->id])}} method="post">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" class="text-white font-weight-bold text-xs btn btn-danger">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include("components.footer")
    </div>
</main>
@endsection
