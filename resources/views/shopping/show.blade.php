@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="{{$item->nama}}"
            :back-url="route('deafcare.belanja.user.item.index')"></x-title-bar>
    </header>
    <main class="p-3">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('img/dummy.jpg')}}" class="w-100 mb-3 rounded-lg" alt="Dummy">
                <h2 class="h4 font-weight-bold">{{$item->nama}}</h2>
                <p>Rp {{$item->harga}}</p>

                <p class="small text-uppercase mb-1">Deskripsi</p>
                <p>{{$item->deskripsi ?? '-'}}</p>

                <p class="small text-uppercase mb-1">Jenis</p>
                <p>{{$item->jenis->name ?? '-'}}</p>

                <a href="{{route('deafcare.belanja.vendor.item.edit', $item->id)}}" class="btn btn-success">
                    <i class="fas fa-edit"></i>
                    Edit
                </a>
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus-{{$item->id}}">
                    <i class="fas fa-trash"></i>
                    Hapus
                </a>
                <!-- Modal -->
                <div class="modal fade" id="modalHapus-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modalHapus-{{$item->id}}Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalHapus-{{$item->id}}Label">Apakah anda yakin?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Data barang yang dipilih akan terhapus!
                            </div>
                            <form method="POST" action="{{route('deafcare.belanja.vendor.item.destroy', $item->id)}}" class="modal-footer">
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
    </main>
@endsection
