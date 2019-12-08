@extends('admin.layouts.app')

@section('content')
@if(session('success'))
    <div class="aler alert-success">
        {{session('success')}}
    </div>
@endif
<div class="row">
        <div class="col-md-2">
          @component('admin.layouts.menus.sidebar')

          @endcomponent


    <div class="col-sm-5">
       <div class="card">
            <div class="card-body">
                <button class="btn btn-block btn-primary" id="show-new-user-form">Add a new user</button>
                @component('admin.layouts.components.forms.add_user')

                @endcomponent
            </div>
       </div>
    </div>

    <div class="col-sm-5">
        <div class="card">
            <div class="card-header">
                Current Users
            </div>
            <ul class="list-group list-group-flus">
                @if($users)
                    @foreach ($users as $user)
            <li class="list-group-item">{{ $user->name }}</li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>

</div>
{{-- /.row --}}

@endsection

@push('admin.layouts.scripts.scripts')
<script src="{{asset('js/admin/users.js')}}"></script>
@endpush
