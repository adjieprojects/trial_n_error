@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header align-middle">
                    <div class="float-right">
                        @role('super-admin') <button type="button" class="btn btn-outline-primary">Add Post</button> @endrole
                    </div>
                </div>

                <div class="card-body">

                    <table class="table table-hover">
                        <tbody>
                            @foreach($Posts as $post)

                            <tr>
                                <td class="align-middle">{{ $post->id }}</td>
                                <td class="align-middle">{{ $post->title }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-info">Edit</button>
                                        <button type="button" class="btn btn-info">Trash</button>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    {{ $Posts->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
