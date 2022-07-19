<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $students = Student::latest()->paginate(5);
            $students = Student::latest()->paginate(5);

            return view('students.index', compact('students'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        return redirect("login")->withSuccess('are not allowed to access');
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kelamin' => 'required',
            'nisn' => 'required|unique:students',
            'nik' => 'required|unique:students',
            'asalsekolah' => 'required',
            'lahir' => 'required',
            'email' => 'required|unique:students',
            'no_hp' => 'required',
            'namaortu' => 'required',
            'alamat' => 'required',
            'hportu' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'kelamin' => 'required',
            'nisn' => 'required',
            'nik' => 'required',
            'asalsekolah' => 'required',
            'lahir' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'namaortu' => 'required',
            'alamat' => 'required',
            'hportu' => 'required',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully');
    }
}
