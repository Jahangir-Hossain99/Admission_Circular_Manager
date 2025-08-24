@extends('layout')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Create Circular</h2>
    <form action="{{ route('circulars.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="UniversityName" class="block text-sm font-medium text-gray-700">University Name</label>
            <input type="text" name="UniversityName" id="UniversityName" required
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <div>
            <label for="ProgrameName" class="block text-sm font-medium text-gray-700">Programe Name</label>
            <input type="text" name="ProgrameName" id="ProgrameName" required
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <div>
            <label for="Description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" name="Description" id="Description"
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <div>
            <label for="Link" class="block text-sm font-medium text-gray-700">Link</label>
            <input type="text" name="Link" id="Link"
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <div>
            <label for="ApplicationDeadline" class="block text-sm font-medium text-gray-700">Application Deadline</label>
            <input type="date" name="ApplicationDeadline" id="ApplicationDeadline"
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>
        
        <div>
            <button type="submit"
                class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition">Create Post</button>
        </div>
    </form>
</div>
@endsection