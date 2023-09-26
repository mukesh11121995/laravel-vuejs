@extends('layouts.app')

@section('content')
    <div id="app">

    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/vue-app.js') }}" defer></script>
    <script src="{{ mix('js/routes.js') }}"></script>

@endpush
