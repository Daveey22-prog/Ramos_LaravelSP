@extends('layout')

@section('title', 'Student List - Student Portal')

@section('content')
<div class="space-y-8">
    <!-- Header Section -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-4xl font-bold text-gray-800 mb-2">Student List</h2>
            <p class="text-gray-600">Manage and view all registered students</p>
        </div>
        <a href="/students/create" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center space-x-2 shadow-lg">
            <i class="fas fa-plus-circle"></i>
            <span>Add New Student</span>
        </a>
    </div>

    <!-- Table Section -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left font-semibold">Name</th>
                        <th class="px-6 py-4 text-left font-semibold">Course</th>
                        <th class="px-6 py-4 text-left font-semibold">Year Level</th>
                        <th class="px-6 py-4 text-center font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-indigo-50 transition-colors duration-200">
                        <td class="px-6 py-4 font-medium text-gray-800">Dave Ramos</td>
                        <td class="px-6 py-4 text-gray-600">Information Technology</td>
                        <td class="px-6 py-4"><span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">2nd Year</span></td>
                        <td class="px-6 py-4 text-center space-x-3">
                            <x-view-button href="/students/1" />
                            <x-edit-button href="/students/1/edit" />
                        </td>
                    </tr>
                    <tr class="hover:bg-indigo-50 transition-colors duration-200">
                        <td class="px-6 py-4 font-medium text-gray-800">Renz Tristan</td>
                        <td class="px-6 py-4 text-gray-600">Business Administration</td>
                        <td class="px-6 py-4"><span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">1st Year</span></td>
                        <td class="px-6 py-4 text-center space-x-3">
                            <x-view-button href="/students/2" />
                            <x-edit-button href="/students/2/edit" />
                        </td>
                    </tr>
                    <tr class="hover:bg-indigo-50 transition-colors duration-200">
                        <td class="px-6 py-4 font-medium text-gray-800">Michael Ramos</td>
                        <td class="px-6 py-4 text-gray-600">Engineering</td>
                        <td class="px-6 py-4"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">3rd Year</span></td>
                        <td class="px-6 py-4 text-center space-x-3">
                            <x-view-button href="/students/3" />
                            <x-edit-button href="/students/3/edit" />
                        </td>
                    </tr>
                    <tr class="hover:bg-indigo-50 transition-colors duration-200">
                        <td class="px-6 py-4 font-medium text-gray-800">Anthony Davis</td>
                        <td class="px-6 py-4 text-gray-600">Nursing</td>
                        <td class="px-6 py-4"><span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-medium">4th Year</span></td>
                        <td class="px-6 py-4 text-center space-x-3">
                            <x-view-button href="/students/4" />
                            <x-edit-button href="/students/4/edit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection