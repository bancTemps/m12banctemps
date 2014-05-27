@extends('admin.layouts.modal')


@section('content')
    <!-- Tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
        </ul>
    <!-- ./ tabs -->

    {{-- Delete User Form --}}
    <form id="blockForm" class="form-horizontal" method="post" action="{{ URL::to('admin/reports/' . $report->id . '/blockUser') }}" autocomplete="off">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="idReport" value="{{ $report->id }}" />
        <!-- ./ csrf token -->

        <!-- Form Actions -->
        <div class="form-group">
            <div class="controls">
                Bloquear usuario <b>{{ $user->username }}</b>?
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
        <!-- ./ form actions -->
        
    </form>
@stop
