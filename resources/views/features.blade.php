@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of <strong>Features</strong></div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="float-right">
                                <a href="{{ route('features.create') }}" class="btn btn-sm btn-info">ADD FEATURES</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">##</th>
                                        <th>PROFILE</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-sm btn-info"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <a href="#">Permission</a><br/>
                                            ON <code>Permission</code><br/>
                                            Commit id: <code>24f87r2u</code>
                                        </td>
                                        <td class="align-middle" width="180px">
                                            <select class="form-control">
                                                <option value="PLAN">ON PLANING</option>
                                                <option value="PND">PENDING</option>
                                                <option value="OP">ON PROGRESS</option>
                                                <option value="CO">COMPLETE</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
