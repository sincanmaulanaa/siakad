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
                        <h6>Data Guru</h6>
                        <a href="{{ route("guru_formulir") }}">
                            <button class="btn btn-primary">Tambah Guru</button>
                        </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIP</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Lengkap</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_teacher as $teacher)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm text-secondary">{{ $teacher->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm text-secondary">{{ $teacher->nip }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $teacher->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $teacher->address }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm text-secondary">{{ $teacher->gender }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle d-flex">
                                            <a href="{{ route("guru_detail", ['id' => $teacher->id])}}" class="text-white font-weight-bold text-xs btn btn-info">
                                                Detail
                                            </a>
                                            <a href="{{ route("guru_edit", ['id' => $teacher->id])}}" class="text-white font-weight-bold text-xs btn btn-primary mx-2">
                                                Edit
                                            </a>
                                            <form action={{ route("guru_delete", ['id' => $teacher->id])}} method="post">
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
