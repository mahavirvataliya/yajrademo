@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="notes-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
    <script>
        $(function() {
            $('#notes-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('notes.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'body', name: 'body' }
                ]
            });
        });
    </script>
@endpush