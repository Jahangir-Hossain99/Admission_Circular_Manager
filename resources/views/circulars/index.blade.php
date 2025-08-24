@extends('layout');

@section('content')
    <h1 class="text-center my-4">All Circulars</h1>
    <div class="container">
        <div class="row shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            @forelse ( $circulars as $circular  )
              <table class="table-auto min-w-full divide-y divide-gray-200" >
                <thead>
                    <tr class="bg-gray-200 w-full">
                        <th>ID</th>
                        <th>University Name</th>
                        <th>Program Name</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Application Deadline</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-3 text-center text-xs font-medium text-gray-500  tracking-wider" >{{ $circular->id }}</td>
                        <td class="px-6 py-3 text-center text-xs font-medium text-gray-500  tracking-wider" >{{ $circular->UniversityName }}</td>
                        <td class="px-6 py-3 text-center text-xs font-medium text-gray-500  tracking-wider" >{{ $circular->ProgramName }}</td>
                        <td class="px-6 py-3 text-center text-xs font-medium text-gray-500  tracking-wider" >{{ $circular->Description }}</td>
                        <td class="px-6 py-3 text-center text-xs font-medium text-gray-500  tracking-wider" >{{ $circular->Link }}</td>
                        <td class="px-6 py-3 text-center text-xs font-medium text-gray-500  tracking-wider" >{{ $circular->ApplicationDeadline }}</td>
                        <td class="px-6 py-3 text-center text-xs font-medium text-gray-500  tracking-wider" >{{ $circular->Status }}</td>
                        <td class="px-6 py-3 text-center text-xs font-medium text-gray-500  tracking-wider" >
                            <a href="{{ route('circulars.show', $user->id) }}" class="py-3 px-3 bg-yellow-500 text-sm font-bold text-stone-50 rounded-lg ">View</a>
                            <a href="{{ route('circulars.edit', $user->id) }}" class="py-3 px-3 bg-blue-600 text-sm font-bold text-stone-50 rounded-lg">Edit</a>
                            <form action="{{ route('circulars.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="py-[10.5px] px-3 bg-red-600 text-sm font-bold text-stone-50 rounded-lg" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
              </table>
            @empty
                <p class="text-center">No users found.</p>
            @endforelse
        </div>
    </div>  
@endsection