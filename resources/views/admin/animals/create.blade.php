@extends('layout.main')

@section('title')
    {{ env('APP_NAME') }} | Add Animals 

@endsection

@section('stylesheet')

@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <h3>Form Animals</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('animals.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-12">
                    <label for="id">ID</label>
                    <input id="id" name="id" type="text" class="form-control @error('id') is-invalid @enderror" value="{{ old("id") }}">
                    <div class="invalid-feedback">
                        @error('id')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old("name") }}">
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
                        <option value="m" {{ old('gender') == "m" ? 'selected' : '' }}>Male</option>
                        <option value="f" {{ old('gender') == "f" ? 'selected' : '' }}>Female</option>
                    </select>
                    <div class="invalid-feedback">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="birthday">Birthday</label>
                    <input id="birthday" placeholder="YYYY-MM-DD" name="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" value="{{ old("birthday") }}">
                    <div class="invalid-feedback">
                        @error('birthday')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                
                <div class="form-group col-12">
                    <label for="father_id">Father</label>
                    <select name="father_id" class="form-control" id="father_id">
                        @foreach ($fathers as $father)
                        <option value="{{ $father["id"] }}">{{ $father["id"] }} - {{ $father["name"] }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        @error('father_id')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group col-12">
                    <label for="mother_id">Mother</label>
                    <select name="mother_id" class="form-control" id="mother_id">
                        @foreach ($mothers as $mother)
                        <option value="{{ $mother["id"] }}">{{ $mother["id"] }} - {{ $mother["name"] }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        @error('mother_id')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group col-12">
                    <label for="child_num">Child Number</label>
                    <input id="child_num" name="child_num" type="text" class="form-control @error('child_num') is-invalid @enderror" value="{{ old("child_num") }}">
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
