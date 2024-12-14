<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showSignupForm()
    {
        return view('Login.signup'); // Sesuaikan dengan lokasi file blade Anda
    }

    public function signup(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
    
        // Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
        ]);
    
        // Buat profil baru yang terkait dengan pengguna yang baru dibuat
        Profile::create([
            'user_id' => $user->id,  // Pastikan user_id dimasukkan
            'school' => $request->school ?? '',  // Optional field, jika ada
            'grade' => $request->grade ?? '',    // Optional field, jika ada
            'phone' => $request->phone ?? '',    // Optional field, jika ada
        ]);
    
        // Redirect ke halaman signin setelah akun berhasil dibuat
        return redirect()->route('signin')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    public function showSigninForm()
    {
        return view('Login.signin'); // Sesuaikan dengan lokasi file blade Anda
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        // Cek kredensial user
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate(); // Regenerate session for security
            return redirect()->intended('/profile/edit'); // Redirect setelah login
        }
        
        // Jika gagal login
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function signout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/signin'); // Redirect setelah logout
    }

    public function index()
    {
        $user = Auth::user();
        $profile = $user->profile;

        dd($user);

        return view('Profile.Profile', compact('user', 'profile'));
    }

    public function edit()
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect()->route('signin');
        }

        // Ambil data user yang sedang login
        $user = Auth::user();

        // Cek jika profile ada
        $profile = $user->profile;

        // Jika profile belum ada, buatkan profile baru
        if (!$profile) {
            $profile = new Profile();
            $profile->user_id = $user->id;  // Pastikan user_id ada
            $profile->save();
        }

        // Kirimkan data user dan profile ke view
        return view('Profile.Profile', compact('user', 'profile')); 
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'school' => 'nullable|string|max:255',
            'grade' => 'nullable|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'age' => 'nullable|integer|min:0', 
            'date_of_birth' => 'nullable|date',
        ]);

        // Update user data
        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);

        // Update profile data
        $user->profile()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'school' => $validatedData['school'],
                'grade' => $validatedData['grade'],
                'phone' => $validatedData['phone'],
                'age' => $request->input('age'),
                'date_of_birth' => $request->input('date_of_birth'),
            ]
        );

        // Setelah update, tampilkan view dengan data user dan profile yang baru
        return view('Profile.Profile', [
            'user' => $user,
            'profile' => $user->profile,
        ])->with('success', 'Profile updated successfully!');
    }
}
