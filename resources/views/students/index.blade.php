@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>PPDB CRUD</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create New student</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Kelamin</th>
            <th>NISN</th>
            <th>NIK</th>
            <th>Asal Sekolah</th>
            <th>Tempat Dan Tanggal Lahir</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Nama Ortu</th>
            <th>Alamat</th>
            <th>No HP Ortu</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->kelamin }}</td>
                <td>{{ $student->nisn }}</td>
                <td>{{ $student->nik }}</td>
                <td>{{ $student->asalsekolah }}</td>
                <td>{{ $student->lahir }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->no_hp }}</td>
                <td>{{ $student->namaortu }}</td>
                <td>{{ $student->alamat }}</td>
                <td>{{ $student->hportu }}</td>
                <td>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $students->links() !!}
    </div>
@endsection
