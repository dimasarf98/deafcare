@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="{{$artikel->judul}}"
            :back-url="route('deafcare.informasi.artikel.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <div class="row">
            <div class="col-12">
                <article>
                    @foreach($artikel->kategoris as $tag)
                        <div class="badge badge-pill badge-danger px-3 py-2 mb-3 mr-1">
                            {{$tag->nama}}
                        </div>
                    @endforeach
                    <h1 class="h3 font-weight-bold">{{$artikel->judul}}</h1>
                    <p><small>Ditulis pada {{$artikel->created_at->format('d M Y')}}</small></p>
                    <div class="w-100 d-flex justify-content-center mb-4">
                        <img src="{{$artikel->gambar ?? asset('img/dummy.jpg')}}" class="border rounded-lg w-100" alt="Foto {{$artikel->judul}}" style="object-fit: cover">
                    </div>
                    <div>
                        {!! $artikel->isi !!}
                    </div>
                    @foreach($artikel->kategoris as $tag)
                        <div class="badge badge-pill badge-danger px-3 py-2 mb-3 mr-1">
                            {{$tag->nama}}
                        </div>
                    @endforeach
                    <div class="mb-3">
                        <a href="{{route('deafcare.informasi.artikel.edit', $artikel->id)}}" class="btn btn-success">
                            <i class="fas fa-edit"></i>
                            Edit Artikel
                        </a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalHapusArtikel-{{$artikel->id}}">
                            <i class="fas fa-trash"></i>
                            Hapus Artikel
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="modalHapusArtikel-{{$artikel->id}}" tabindex="-1" role="dialog" aria-labelledby="modalHapusArtikel-{{$artikel->id}}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalHapusArtikel-{{$artikel->id}}Label">Apakah anda yakin?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Data artikel yang dipilih akan terhapus!
                                    </div>
                                    <form method="POST" action="{{route('deafcare.informasi.artikel.destroy', $artikel->id)}}" class="modal-footer">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>
@endsection
