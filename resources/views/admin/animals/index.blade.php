@extends('layout.main')

@section('title')
    {{ env('APP_NAME') }} | Animals
@endsection

@section('stylesheet')

@endsection

@section('main')
    <div class="card w-100">
        <div class="card-header d-flex">
            <span class="ml-auto"><a href="{{ route('animals.create') }}" class="btn bg-purple">Add Animals</a></span>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Gender</td>
                            <td>Birthday</td>
                            <td>Is Life</td>
                            <td>Child Number</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                        <tr class="text-center">
                            <td>{{ $animal->id }}</td>
                            <td>{{ $animal->name }}</td>
                            <td>
                                @if ($animal->gender === "m")
                                    Male
                                @elseif($animal->gender === "f")
                                    Female
                                @else

                                @endif
                                
                            </td>
                            <td>{{ $animal->birthday }}</td>
                            <td>{{ $animal->is_life }}</td>
                            
                            <td>{{ $animal->child_num }}</td>
                            <td>
                                <a href="{{ route("animals.parent",["parent_id"=>'a']) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                <a href="{{ route("animals.edit",['id'=>$animal->id]) }}" class="btn btn-sm bg-gradient-yellow"><i class="fa fa-edit"></i></a>
                                <form class="d-inline" action="{{ route("animals.delete",['id'=>$animal->id]) }}" method="post">
                                    @csrf
                                    @method("DELETE")

                                    <button type="submit" href="{{ route("animals.delete",['id'=>$animal->id]) }}" class="btn btn-sm bg-gradient-red"><i class="fa fa-trash"></i></button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection

