@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List Kategori Artikel</div>
    
                    <div class="card-body">
                            <div>
                            <a href="{!! route('kategori_artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <table class ="table">
                                    <tr class="table-danger">
                                        <td>ID</td>
                                        <td>Nama</td>
                                        <td>Users</td>
                                        <td>Created_at</td>
                                    </tr>
                                    @foreach($listkategoriArtikel as $item)
                                    <tr>
                                        <td>{!! $item->id !!}</td>
                                        <td>{!! $item->nama !!}</td>
                                        <td>{!! $item->users_id !!}</td>
                                        <td>{!! $item->created_at !!}</td>
                                    </tr>
                                    @endforeach
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
