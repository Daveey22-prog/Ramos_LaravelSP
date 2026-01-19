@extends('layout')

@section('title', 'Welcome - Student Portal')

@section('content')
<div class="space-y-12">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-2xl shadow-2xl overflow-hidden">
        <div class="px-8 py-16 text-center text-white">
            <h2 class="text-5xl font-bold mb-4">Welcome to the Student Portal</h2>
            <p class="text-xl opacity-90">Your gateway to academic excellence and student management</p>
        </div>
    </div>

    <!-- Features Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 border-l-4 border-indigo-500">
            <i class="fas fa-users text-indigo-600 text-4xl mb-4"></i>
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Student Management</h3>
            <p class="text-gray-600">Efficiently manage student information and records in one centralized location.</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 border-l-4 border-purple-500">
            <i class="fas fa-chart-bar text-purple-600 text-4xl mb-4"></i>
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Track Progress</h3>
            <p class="text-gray-600">Monitor student progress and performance with comprehensive tracking tools.</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 border-l-4 border-pink-500">
            <i class="fas fa-shield-alt text-pink-600 text-4xl mb-4"></i>
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Secure & Reliable</h3>
            <p class="text-gray-600">Your data is safe and secure with our advanced security measures.</p>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-white rounded-2xl shadow-lg p-12 text-center">
        <h3 class="text-3xl font-bold text-gray-800 mb-6">Ready to get started?</h3>
        <p class="text-gray-600 mb-8 text-lg">View all registered students or add a new student to the system.</p>
        <div class="flex gap-4 justify-center flex-wrap">
            <a href="/students" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-lg transition-colors duration-200 flex items-center space-x-2">
                <i class="fas fa-eye"></i>
                <span>View Students</span>
            </a>
            <a href="/students/create" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg transition-colors duration-200 flex items-center space-x-2">
                <i class="fas fa-plus"></i>
                <span>Add New Student</span>
            </a>
        </div>
    </div>
</div>
@endsection