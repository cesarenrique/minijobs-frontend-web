@extends('app')

@section('content')
<div class="w-100">
    <div class="grid grid-cols-2 sm:grid-cols-3">
        <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
            <a href='{{route("registro")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Usuario</h2>
            </a>
        </div>
    </div>
</div>
@endsection
