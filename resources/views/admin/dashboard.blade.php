@extends('layout')

@section('content')
<div class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Total Users Card -->
        <div class="bg-white shadow rounded-lg flex items-center p-6">
            <div class="mr-4">
                <span class="bg-blue-500 text-white rounded-full p-4">
                    <i class="fas fa-users fa-2x"></i>
                </span>
            </div>
            <div>
                <h5 class="text-gray-500 mb-1 font-semibold">Total Users</h5>
                <h2 class="text-2xl font-bold">{{ $users->count() }}</h2>
            </div>
        </div>
        <!-- Total Circulars Card -->
        <div class="bg-white shadow rounded-lg flex items-center p-6">
            <div class="mr-4">
                <span class="bg-green-500 text-white rounded-full p-4">
                    <i class="fas fa-file-alt fa-2x"></i>
                </span>
            </div>
            <div>
                <h5 class="text-gray-500 mb-1 font-semibold">Total Circulars</h5>
                <h2 class="text-2xl font-bold">{{ 0 }}</h2>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Users List -->
        <div class="bg-white shadow rounded-lg">
            <div class="bg-blue-500 text-white rounded-t-lg px-6 py-3 font-bold">
                All Users
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">No users found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Circulars List -->
        <div class="bg-white shadow rounded-lg">
            <div class="bg-green-500 text-white rounded-t-lg px-6 py-3 font-bold">
                All Circulars
            </div>
            {{-- <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Published At</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($circulars as $circular)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $circular->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $circular->created_at->format('d M Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-gray-500">No circulars found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
</div>

<!-- FontAwesome CDN for icons (if not already included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

@endsection
