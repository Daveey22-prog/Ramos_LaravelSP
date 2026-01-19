@extends('layout')

@section('title', 'Add Student - Student Portal')

@section('content')
<div class="max-w-2xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <h2 class="text-4xl font-bold text-gray-800 mb-2">Add New Student</h2>
        <p class="text-gray-600">Fill in the form below to add a new student to the system</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-xl shadow-lg p-8">
        <form action="/students" method="POST" class="space-y-6">
            @csrf
            
            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fas fa-user text-indigo-600 mr-2"></i>Full Name
                </label>
                <input type="text" id="name" name="name" placeholder="Enter student name" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-indigo-600 transition-colors duration-200">
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fas fa-envelope text-indigo-600 mr-2"></i>Email Address
                </label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-indigo-600 transition-colors duration-200">
            </div>

            <!-- Course Field -->
            <div>
                <label for="course" class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fas fa-book text-indigo-600 mr-2"></i>Course
                </label>
                <select id="course" name="course" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-indigo-600 transition-colors duration-200">
                    <option value="">Select a course</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Business Administration">Business Administration</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Nursing">Nursing</option>
                    <option value="Arts">Arts</option>
                    <option value="Science">Science</option>
                </select>
            </div>

            <!-- Year Level Field -->
            <div>
                <label for="year_level" class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fas fa-graduation-cap text-indigo-600 mr-2"></i>Year Level
                </label>
                <select id="year_level" name="year_level" required
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-indigo-600 transition-colors duration-200">
                    <option value="">Select year level</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4 pt-6">
                <button type="submit" class="flex-1 bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center space-x-2 shadow-lg">
                    <i class="fas fa-save"></i>
                    <span>Add Student</span>
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