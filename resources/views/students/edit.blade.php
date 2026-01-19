@extends('layout')

@section('title', 'Edit Student - Student Portal')

@section('content')
<div class="max-w-2xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <a href="/students" class="text-indigo-600 hover:text-indigo-700 font-semibold flex items-center space-x-1 mb-4">
            <i class="fas fa-arrow-left"></i>
            <span>Back to Student List</span>
        </a>
        <h2 class="text-4xl font-bold text-gray-800 mb-2">Edit Student</h2>
        <p class="text-gray-600">Update student information below</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-xl shadow-lg p-8">
        <form action="/students/{{ $student['id'] }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fas fa-user text-indigo-600 mr-2"></i>Full Name
                </label>
                <input type="text" id="name" name="name" value="{{ $student['name'] }}" placeholder="Enter student name" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-indigo-600 transition-colors duration-200">
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fas fa-envelope text-indigo-600 mr-2"></i>Email Address
                </label>
                <input type="email" id="email" name="email" value="{{ $student['email'] }}" placeholder="Enter email address" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-indigo-600 transition-colors duration-200">
            </div>

            <!-- Course Field -->
            <div>
                <label for="course" class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fas fa-book text-indigo-600 mr-2"></i>Course
                </label>
                <select id="course" name="course" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-indigo-600 transition-colors duration-200">
                    <option value="Computer Science" {{ $student['course'] === 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                    <option value="Information Technology" {{ $student['course'] === 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
                    <option value="Business Administration" {{ $student['course'] === 'Business Administration' ? 'selected' : '' }}>Business Administration</option>
                    <option value="Engineering" {{ $student['course'] === 'Engineering' ? 'selected' : '' }}>Engineering</option>
                    <option value="Nursing" {{ $student['course'] === 'Nursing' ? 'selected' : '' }}>Nursing</option>
                    <option value="Arts" {{ $student['course'] === 'Arts' ? 'selected' : '' }}>Arts</option>
                    <option value="Science" {{ $student['course'] === 'Science' ? 'selected' : '' }}>Science</option>
                </select>
            </div>

            <!-- Year Level Field -->
            <div>
                <label for="year_level" class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fas fa-graduation-cap text-indigo-600 mr-2"></i>Year Level
                </label>
                <select id="year_level" name="year_level" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-indigo-600 transition-colors duration-200">
                    <option value="1st Year" {{ $student['year_level'] === '1st Year' ? 'selected' : '' }}>1st Year</option>
                    <option value="2nd Year" {{ $student['year_level'] === '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                    <option value="3rd Year" {{ $student['year_level'] === '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                    <option value="4th Year" {{ $student['year_level'] === '4th Year' ? 'selected' : '' }}>4th Year</option>
                </select>
            </div>

            <!-- Status Field -->
            <div>
                <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fas fa-toggle-on text-indigo-600 mr-2"></i>Status
                </label>
                <select id="status" name="status" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-indigo-600 transition-colors duration-200">
                    <option value="Active" selected>Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="On Leave">On Leave</option>
                </select>
            </div>

            <!-- Alert Box -->
            <div class="p-4 bg-blue-50 border-l-4 border-blue-600 rounded">
                <p class="text-blue-800 text-sm">
                    <i class="fas fa-lightbulb mr-2"></i>
                    <strong>Note:</strong> All changes will be saved to the student's record.
                </p>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4 pt-6">
                <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center space-x-2 shadow-lg">
                    <i class="fas fa-save"></i>
                    <span>Update Student</span>
                </button>
                <a href="/students" class="flex-1 bg-gray-600 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center space-x-2 shadow-lg">
                    <i class="fas fa-times"></i>
                    <span>Cancel</span>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
