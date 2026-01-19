@extends('layout')

@section('title', 'Student Profile - Student Portal')

@section('content')
<div class="max-w-2xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <a href="/students" class="text-indigo-600 hover:text-indigo-700 font-semibold flex items-center space-x-1 mb-4">
            <i class="fas fa-arrow-left"></i>
            <span>Back to Student List</span>
        </a>
        <h2 class="text-4xl font-bold text-gray-800">Student Profile</h2>
    </div>

    <!-- Profile Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Header Background -->
        <div class="h-32 bg-gradient-to-r from-indigo-600 to-indigo-700"></div>

        <!-- Content -->
        <div class="px-8 pb-8">
            <!-- Avatar Section -->
            <div class="flex items-end -mt-16 mb-6">
                <div class="w-32 h-32 bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-full border-4 border-white shadow-lg flex items-center justify-center">
                    <i class="fas fa-user text-white text-5xl"></i>
                </div>
                <div class="ml-6 pb-2">
                    <h3 class="text-3xl font-bold text-gray-800">{{ $student['name'] }}</h3>
                    <p class="text-gray-600">Student ID: {{ $student['id'] }}</p>
                </div>
            </div>

            <!-- Information Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8 pt-8 border-t-2 border-gray-200">
                <!-- Name -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-500 uppercase tracking-wide">
                        <i class="fas fa-user text-indigo-600 mr-2"></i>Full Name
                    </label>
                    <p class="text-xl font-semibold text-gray-800">{{ $student['name'] }}</p>
                </div>

                <!-- Email -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-500 uppercase tracking-wide">
                        <i class="fas fa-envelope text-indigo-600 mr-2"></i>Email Address
                    </label>
                    <p class="text-xl font-semibold text-gray-800">{{ $student['email'] }}</p>
                </div>

                <!-- Course -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-500 uppercase tracking-wide">
                        <i class="fas fa-book text-indigo-600 mr-2"></i>Course
                    </label>
                    <p class="text-xl font-semibold text-gray-800">{{ $student['course'] }}</p>
                </div>

                <!-- Year Level -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-500 uppercase tracking-wide">
                        <i class="fas fa-graduation-cap text-indigo-600 mr-2"></i>Year Level
                    </label>
                    <p class="text-xl font-semibold"><span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">{{ $student['year_level'] }}</span></p>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-8 p-6 bg-indigo-50 rounded-lg border-l-4 border-indigo-600">
                <h4 class="font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                    <i class="fas fa-info-circle text-indigo-600"></i>
                    <span>Additional Information</span>
                </h4>
                <ul class="space-y-2 text-gray-700">
                    <li><strong>Status:</strong> Active</li>
                    <li><strong>Enrollment Date:</strong> January 15, 2024</li>
                    <li><strong>GPA:</strong> 3.85</li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-4 mt-8">
                <a href="/students/{{ $student['id'] }}/edit" class="flex-1 bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center space-x-2 shadow-lg">
                    <i class="fas fa-edit"></i>
                    <span>Edit Student</span>
                </a>
                <a href="/students" class="flex-1 bg-gray-600 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center space-x-2 shadow-lg">
                    <i class="fas fa-arrow-left"></i>
                    <span>Back to List</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
