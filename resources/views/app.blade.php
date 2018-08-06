@extends('layouts.app')

@section('title', 'Override Title Here')
@endsection
@component('components.drawer')
    wef
@endcomponent

@push('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endpush