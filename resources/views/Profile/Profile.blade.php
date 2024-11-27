@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profile</h2>

    @if($user)  <!-- Memastikan user ada -->
        <p>Welcome, {{ $user->name }}!</p>  <!-- Menampilkan nama pengguna -->
        
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            <!-- <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="school" class="form-label">School Name</label>
                <input type="text" name="school" id="school" class="form-control" value="{{ old('school', $profile->school ?? '') }}">
            </div>

            <div class="mb-3">
                <label for="grade" class="form-label">Grade</label>
                <input type="text" name="grade" id="grade" class="form-control" value="{{ old('grade', $profile->grade ?? '') }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $profile->phone ?? '') }}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a> -->

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="form-control" 
                    value="{{ old('name', $user->name) }}" 
                    placeholder="Enter your full name" 
                    required>
                @error('name')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="school" class="form-label">School Name</label>
                    <input 
                        type="text" 
                        name="school" 
                        id="school" 
                        class="form-control" 
                        value="{{ old('school', $profile->school ?? '') }}" 
                        placeholder="Enter your school name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="grade" class="form-label">Grade Level</label>
                    <input 
                        type="text" 
                        name="grade" 
                        id="grade" 
                        class="form-control" 
                        value="{{ old('grade', $profile->grade ?? '') }}" 
                        placeholder="Enter your grade level">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input 
                        type="number" 
                        name="age" 
                        id="age" 
                        class="form-control" 
                        value="{{ old('age', $profile->age ?? '') }}" 
                        placeholder="Enter your age">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                    <input 
                        type="date" 
                        name="date_of_birth" 
                        id="date_of_birth" 
                        class="form-control" 
                        value="{{ old('date_of_birth', $profile->date_of_birth ?? '') }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="form-control" 
                    value="{{ old('email', $user->email) }}" 
                    placeholder="Enter your email" 
                    required>
                @error('email')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input 
                    type="text" 
                    name="phone" 
                    id="phone" 
                    class="form-control" 
                    value="{{ old('phone', $profile->phone ?? '') }}" 
                    placeholder="Enter your phone number">
            </div>

            <div class="d-flex justify-content-end gap-2">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    @else
        <p>User not found or not authenticated!</p>  <!-- Pesan jika user tidak ada -->
    @endif
</div>
@endsection