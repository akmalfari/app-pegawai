<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->nama_lengkap = $request->nama_lengkap;
        $employee->email = $request->email;
        $employee->nomor_telepon = $request->nomor_telepon;
        $employee->tanggal_lahir = $request->tanggal_lahir;
        $employee->alamat = $request-> alamat;
        $employee->tanggal_masuk = $request ->tanggal_masuk;
        $employee->status = $request->status;
        $employee->save();
        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }

   public function update(Request $request, String $id)
{
     

    $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'nomor_telepon' => 'required|string|max:20',
        'tanggal_lahir' => 'required|date',
        'alamat' => 'required|string|max:255',
        'tanggal_masuk' => 'required|date',
        'status' => 'required|in:Aktif,Tidak Aktif',
    ]);

    \DB::enableQuerylog();

    $employee = Employee::findOrFail($id);
    $employee->update($request->only([
        'nama_lengkap',
        'email',
        'nomor_telepon',
        'tanggal_lahir',
        'alamat',
        'tanggal_masuk',
        'status',
    ]));
    
    dd(\DB::getQueryLog());

    return redirect()->route('employees.index');    
}



    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil dihapus!');
            return redirect()->route('employees.index');
    }
}
