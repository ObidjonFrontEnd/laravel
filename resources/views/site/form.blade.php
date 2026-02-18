@extends('layouts.main')

@section('title')
    form
@endsection

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $err)
            <ul>
                {{$err}}
            </ul>
        @endforeach
    @endif
    <form action="{{route('submit')}}" method="post">
    @csrf
        <input type="text" name="name" class="p-[10px] border-[1px] text-red-500 outline-0 rounded-lg border-black" value="{{old('name')}}">
        <button type="submit">send</button>
    </form>
@endsection
