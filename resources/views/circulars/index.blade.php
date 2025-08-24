@extends('layout')

@section('content')
<h1 class="text-center my-4">All Circulars</h1>
<div class="container mx-auto">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        @forelse ($circulars as $circular)
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">University Name</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Program Name</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Link</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Application Deadline</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $circular->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $circular->UniversityName }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $circular->ProgramName }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $circular->Description }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <a href="{{ $circular->Link }}" class="text-blue-600 hover:underline">{{ $circular->Link }}</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $circular->ApplicationDeadline }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $circular->Status }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                        <a href="{{ route('circulars.show', $circular->id) }}" class="py-2 px-4 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition">View</a>
                        <a href="{{ route('circulars.edit', $circular->id) }}" class="py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Edit</a>
                        <form action="{{ route('circulars.destroy', $circular->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="py-2 px-4 bg-red-600 text-white rounded-lg hover:bg-red-700 transition" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        @empty
            <p class="text-center py-4">No circulars found.</p>
        @endforelse
    </div>
</div>
@endsection