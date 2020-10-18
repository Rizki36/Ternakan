@extends('layout.main')

@section('title')
    {{ env('APP_NAME') }} | Add Animals 
@endsection

@section('stylesheet')

@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <h3>Update Animals</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('animals.update',['id'=>$animal->id]) }}" method="post">
            @csrf
            @method("PATCH")
            <div class="row">
                <div class="form-group col-12">
                    <label for="id">ID</label>
                    <input id="id" name="id" type="text" class="form-control @error('id') is-invalid @enderror" value="{{ $animal->id ?? "" }}">
                    <div class="invalid-feedback">
                        @error('id')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $animal->name ?? "" }}">
                    <div class="invalid-feedback">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                        <option value=""></option>
                        <option value="m" {{ $animal->gender ?? "" == "m" ? 'selected' : '' }}>Male</option>
                        <option value="f" {{ $animal->gender ?? "" == "f" ? 'selected' : '' }}>Female</option>
                    </select>
                    <div class="invalid-feedback">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="birthday">Birthday</label>
                    <input id="birthday" placeholder="YYYY-MM-DD" name="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" value="{{ $animal->birthday ?? "" }}">
                    <div class="invalid-feedback">
                        @error('birthday')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                
                <div class="form-group col-12 d-none">
                    <label for="parent">Parent</label>
                    <input id="parent" name="parent" type="text" class="form-control @error('parent') is-invalid @enderror" value="">
                    <div class="invalid-feedback">
                        @error('parent')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="child_num">Child Number</label>
                    <input id="child_num" name="child_num" type="text" class="form-control @error('child_num') is-invalid @enderror" value="{{ $animal->child_num ?? "" }}">
                    <div class="invalid-feedback">
                        @error('child_num')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <button class="btn bg-purple w-100" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')

@endsection
