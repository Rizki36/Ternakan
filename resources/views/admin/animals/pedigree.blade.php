@extends('layout.main')

@section('title')

@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('plugins/treant/Treant.css') }}">
@endsection

@section('main')
    
@endsection

@section('scripts')
    <script src="{{ asset('plugins/treant/vendor/raphael.js') }}"></script>
    <script src="{{ asset('plugins/treant/Treant.js') }}"></script>
    <script>
        let animals = @json($animals);
        let parent_node_id = @json($parent_node_id);
        let node = {};

        function pedigree(animals_,id){
            let temp_key;
            animals.forEach((element,index) => {
                if(element["id"] == id){
                    temp_index = index;
                    console.log("parent node founded");
                    console.log("parent node id :" + element.id);
                    console.log("parent node id :" + element.id);
                }
            });
            
        }
        pedigree(animals,parent_node_id)
        
    </script>
@endsection
