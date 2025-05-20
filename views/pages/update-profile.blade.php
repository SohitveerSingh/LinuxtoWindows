@extends('layout.main')
@section('pageContent')

<div class="row">
    <div class="card">
        <div class="card-header">
            <h4 class="header-title" id="tableTitle">Update Profile</h4>
        </div>
        <div class="card-body">
            <div class="col-lg-12">
                <div class="card">
                    @if (session('status'))

                    <div class="mb-4 font-medium text-sm text-green-600">
                
                        {{ session('status') }}
                
                    </div>
                
                @endif
                    <div class="card-body">

                        <form method="POST"  action="{{ route('user-profile-information.update') }}" class="">
                            @csrf
                            @method('PUT')
                            <div id="formDesign">

                                <div class="col-lg-5 ">

                                    <div class="mb-3 row">
                                        <label for="email" class="form-label col-form-label col-sm-3">
                                            Email
                                        </label>
                                        <div class="col-sm-9">
                                            <input placeholder="email" name="email" type="email"
                                                class="form-control" value="{{ old('email') ?? auth()->user()->email }}" >
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="name" class="form-label col-form-label col-sm-3">
                                            Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input placeholder="name" name="name" type="text" value="{{ old('name') ?? auth()->user()->name }}"
                                                class="form-control">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="centerBtn" >
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

@endsection