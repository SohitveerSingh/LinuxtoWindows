@extends('layout.main')
@section('pageContent')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title" id="tableTitle">Update Password</h4>
                </div>
                <div class="card-body">
                    <div class="col-lg-12">
                        @if (session('status'))

    <div class="mb-4 font-medium text-sm text-green-600">

        {{ session('status') }}

    </div>

@endif
                        <div class="card">
                            <div class="card-body">

                                <form class="styleForm" action="{{ route('password.update') }}" method="POST">
                                    @csrf
                                    <div id="formDesign">
                                        <div class="col-lg-6 ">

                                            <div class="mb-3 row">
                                                <label for="email" class="form-label col-form-label col-sm-3">
                                                    email
                                                </label>
                                                <div class="col-sm-9">
                                                    <input placeholder="email" type="email" class="form-control">
                                                </div>
                                            </div>


                                            <div class="mb-3 row">
                                                <label for="password" class="form-label col-form-label col-sm-3">
                                                    New Password
                                                </label>
                                                <div class="col-sm-9">
                                                    <input placeholder="New Password" type="password" class="form-control">
                                                </div>
                                            </div>


                                            <div class="mb-3 row">
                                                <label for="password_confirmation"
                                                    class="form-label col-form-label col-sm-3">
                                                    Confirm Password
                                                </label>
                                                <div class="col-sm-9">
                                                    <input placeholder="Confirm Password" type="password_confirmation"
                                                        class="form-control">
                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                    <input type="hidden" name="token" value="{{ $request->route('tokrn') }}">

                                    <div class="centerBtn">
                                        <div>
                                            <button type="submit" class="btn stylebtn btn-info">
                                                Confirm
                                            </button>
                                            {{-- <button type="submit" class="btn stylebtnCancel ">
                                                Cancel
                                            </button> --}}

                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
