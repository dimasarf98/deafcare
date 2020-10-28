@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        :title="$jenisKesehatan->judul"
        :back-url="route('deafcare.kesehatan.user.jenis.index')"></x-title-bar>
</header>
<main class="px-3 pt-3">
    <div class="row mb-3">
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari dokter" aria-label="Cari dokter" aria-describedby="btn-search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="btn-search">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{-- Filter Area --}}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @forelse ($dokters as $dokter)
            <div class = 'card rounded-xl link-style-none mb-3' href="#">
                <div class="card-body d-flex">
                    <img class="rounded mr-3" src="{{$dokter->gambar}}" alt="..." style="width: 90px; height:90px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <p class="font-weight-bold mb-1 text-truncate" style="line-height:1rem">{{$dokter->nama}}</p>
                            <p class="mb-0">
                                <small>
                                    <i class="fa fa-briefcase mr-1"></i> {{$dokter->pengalaman}}
                                </small>
                            </p>
                        </div>
                        <div class="">
                            {{-- <a href="" class="badge badge-success rounded-pill px-3 py-1 mr-2">Chat</a> --}}
                            <a href="{{route('deafcare.kesehatan.user.jadwal.show', $dokter->id)}}" class="badge badge-danger rounded-pill px-3 py-1 mr-1">Jadwal</a>
                            @if (Auth()->user()->roles()->admin() || Auth()->user()->roles()->tenagaMedis())
                                <a href="{{route('deafcare.kesehatan.admin.tenagaKesehatan.edit', $dokter->id)}}" class="badge badge-success rounded-pill px-3 py-1 mr-1">Edit</a>
                                <a href="#" class="badge badge-secondary rounded-pill px-3 py-1" data-toggle="modal" data-target="#modalHapusDokter-{{$dokter->id}}">Hapus</a>      
                            @endif
                            
                            <!-- Modal -->
                            <div class="modal fade" id="modalHapusDokter-{{$dokter->id}}" tabindex="-1" role="dialog" aria-labelledby="modalHapusDokter-{{$dokter->id}}Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalHapusDokter-{{$dokter->id}}Label">Apakah anda yakin?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Data tenaga kesehatan yang dipilih akan terhapus!
                                        </div>
                                        <form method="POST" action="{{route('deafcare.kesehatan.admin.tenagaKesehatan.destroy', $dokter->id)}}" class="modal-footer">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
        </div>
    </div>
    @if (Auth()->user()->roles()->admin()))
        
        <x-floating-add-button
            :url="route('deafcare.kesehatan.admin.tenagaKesehatan.create')"
        ></x-floating-add-button>
    @endif

</main>
@endsection
