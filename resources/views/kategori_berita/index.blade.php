@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List Kategori Berita</div>
    
                    <div class="card-body">
                            <table class ="table">
                                    <tr class="table-danger">
                                        <td>ID</td>
                                        <td>Nama</td>
                                        <td>Users</td>
                                        <td>Create</td>
                                    </tr>
                                    @foreach($listKategoriBerita as $item)
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
