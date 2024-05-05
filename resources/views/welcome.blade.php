@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="pb-3 me-0">Data Diri</h3>
            </div>
            <div class="col-auto">
                <h3>Welcome Page</h3>
            </div>
        </div>
        <div class="home container-xxl w-75">
            <div class="mb-4 text-center">
                <img class="w-25" src="{{ Vite::asset('resources/images/foto.jpg') }}" alt="">
            </div>
            <div class="row pt-3 pb-5">
                <div class="col-6 align-items-center py-4 pb-0 px-4">
                    <h3>Biodata</h3>
                    <div class="mb-4">
                        <label class="pb-1">Nama Lengkap</label>
                        <h5> Abi Krisnayuda</h5>
                    </div>
                    <div class="mb-4">
                        <label class="pb-1">NIM</label>
                        <h5>1204220029</h5>
                    </div>
                    <div class="mb-4">
                        <label class="pb-1">No HP</label>
                        <h5>1204220029</h5>
                    </div>
                    <div class="mb-4">
                        <label class="pb-1">Email</label>
                        <h5>akrisnayuda@gmail.com</h5>
                    </div>
                </div>
                <div class="col-6 py-4 pb-0 px-4">
                    <h3>Keahlian</h3>
                    <div class="bar-skills my-3">
                        <p class="mb-0">Communication</p>
                        <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="bar-skills my-3">
                        <p class="mb-0">Microsoft Word</p>
                        <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="bar-skills my-3">
                        <p class="mb-0">Power Point</p>
                        <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="bar-skills my-3">
                        <p class="mb-0">Wordpress</p>
                        <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
