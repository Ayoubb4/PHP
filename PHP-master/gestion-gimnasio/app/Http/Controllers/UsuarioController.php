<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Clase;

class UsuarioController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->rol = $request->rol;
        $usuario->membresia = $request->membresia;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('profiles', 'public');
            $usuario->foto = $path;
        }

        $usuario->save();

        Auth::login($usuario);

        return redirect()->route('profile');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('profile');
        }

        if ($request->email == 'admin@admin.es' && $request->password == 'admin') {
            // Obtener todos los usuarios y clases
            $usuarios = Usuario::all();
            $clases = Clase::with('profesor')->get();
    
            // Redirigir a la vista de administración con los datos
            return view('admin', compact('usuarios', 'clases'));
        }
    
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('profile');
        }
    
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    public function showProfile()
    {
        $usuario = Auth::user()->load('reservas.clase');
        return view('profile', ['usuario' => $usuario]);
    }

    public function updateProfile(Request $request)
    {
        $usuario = Auth::user();

        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('profiles', 'public');
            $usuario->foto = $path;
        }

        $usuario->save();

        return redirect()->route('profile')->with('success', 'Perfil actualizado correctamente.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('admin.users')->with('success', 'Usuario eliminado correctamente.');
    }

    public function adminDashboard()
    {
        $usuarios = Usuario::all();
        $clases = Clase::with('profesor')->get();
        return view('admin', compact('usuarios', 'clases'));
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('admin.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->rol = $request->rol;
        $usuario->membresia = $request->membresia;
    
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('profiles', 'public');
            $usuario->foto = $path;
        }
    
        $usuario->save();
    
        return redirect()->route('admin.users')->with('success', 'Usuario actualizado correctamente.');
    }

    public function manageUsers()
    {
        $usuarios = Usuario::all();
        return view('admin.users', compact('usuarios'));
    }
}