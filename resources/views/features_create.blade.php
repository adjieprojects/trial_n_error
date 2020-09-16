@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create <strong>Features</strong></div>

                <div class="card-body">

                    <form>
                        <div class="form-group row">
                            <label for="inputFeatureName" class="col-sm-2 col-form-label"><strong>Name</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputFeatureName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFeatureDesc" class="col-sm-2 col-form-label"><strong>Desc.</strong></label>
                            <div class="col-sm-10">
                                <textarea name="description" rows="3" class="form-control" id="inputFeatureDesc"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFeaturePath" class="col-sm-2 col-form-label"><strong>Path / Route</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputFeaturePath">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFeatureBranch" class="col-sm-2 col-form-label"><strong>Branch</strong></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputFeatureBranch">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFeatureCommitId" class="col-sm-2 col-form-label"><strong>Commit ID</strong></label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputFeatureCommitId">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFeatureStatus" class="col-sm-2 col-form-label"><strong>Status</strong></label>
                            <div class="col-sm-3">
                                <select class="form-control" id="inputFeatureStatus">
                                    <option value="PLAN">ON PLANING</option>
                                    <option value="PND">PENDING</option>
                                    <option value="OP">ON PROGRESS</option>
                                    <option value="CO">COMPLETE</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="inputFeatureActive"><strong>Active</strong></label></div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox" id="inputFeatureActive" value="1" aria-label="Features Active" checked>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="card-footer">

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="float-right">
                                    <a href="{{ route('features.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
