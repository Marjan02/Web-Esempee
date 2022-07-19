<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>MTS Assa'adah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="stylesheet" href="/assets/css/ppdb.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" type="image/png" href="./assets/images/cirno.jpg" />
    <link rel="stylesheet" href="/assets/css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <!-- LOGO -->
                <h2 class="logo">MTS Assaadah</h2>
                <!-- HAMBURGER ICON -->
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <!-- NAVIGATION -->
                <ul class="nav-ul">
                    <i class="fas fa-times close"></i>
                    <li><a href="/" class="nav-link current">Home</a></li>
                    <li><a href="about" class="nav-link">About</a></li>
                    <li><a href="contact" class="nav-link">Contact</a></li>
                    <li><a href="#" class="nav-link">PPDB</a></li>
                    <li><a href="students" class="nav-link">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="form-signin w-100">

        @if (session()->has('success'))
            <div class="fs-3 alert alert-success alert-dismissible fade show" role="alert">
                {!! session('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <form method="POST" action="/daftarppdb">
            @csrf
            <h1 class="h3 mb-3 text-center mt-4"><strong>Pendaftaran PPDB</strong></h1>

            <h5 class="fs-3 fw-normal text-light">1. Data Calon Siswa</h5>

            {{-- tanggal --}}
            {{ date_default_timezone_set('Asia/Jakarta') }}
            <input type="hidden" name="tgl" value="{{ date('d F Y H:i') }}">

            <div class="form-floating fs-3">
                <input style="height: 50px;" type="text" name="name" id="name"
                    class="form-control @error('name') is-invalid @enderror" id="floatingInput"
                    placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                <label for="floatingInput">Nama Lengkap</label>
                @error('name')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating fs-3">
                <select style="height: 50px;" name="kelamin"
                    class="mb-2 py-2 px-2 @error('kelamin') is-invalid @enderror" style="border-radius: 5px;"
                    id="kelamin">
                    <option value="" selected>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                {{-- <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Nama Lengkap" value="{{ old('name') }}" required> --}}
                @error('kelamin')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating fs-3">
                <input style="height: 50px;" type="number" name="nisn" id="nisn"
                    class="form-control @error('nisn') is-invalid @enderror" id="floatingPassword"
                    placeholder="Password" value="{{ old('nisn') }}" required>
                <label for="floatingPassword">NISN</label>
                @error('nisn')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating fs-3">
                <input style="height: 50px;" type="number" name="nik" id="nik"
                    class="form-control @error('nik') is-invalid @enderror" id="floatingPassword" placeholder="Password"
                    value="{{ old('nik') }}" required>
                <label for="floatingPassword">NIK</label>
                @error('nik')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating fs-3">
                <input style="height: 50px;" type="text" name="asalsekolah" id="asalsekolah"
                    class="form-control @error('asalsekolah') is-invalid @enderror" id="floatingPassword"
                    placeholder="Password" value="{{ old('asalsekolah') }}" required>
                <label for="floatingPassword">Asal Sekolah</label>
                @error('asalsekolah')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating fs-3">
                <input style="height: 50px;" type="text" name="lahir" id="lahir"
                    class="form-control @error('lahir') is-invalid @enderror" id="floatingPassword"
                    placeholder="Password" value="{{ old('lahir') }}" required>
                <label for="floatingPassword">Tempat / Tgl Lahir</label>
                @error('lahir')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating fs-3">
                <input style="height: 50px;" type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="Password"value="{{ old('email') }}" required>
                <label for="floatingPassword">Email Aktif</label>
                @error('email')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating fs-3">
                <input style="height: 50px;" type="number" name="no_hp" id="no_hp"
                    class="form-control @error('no_hp') is-invalid @enderror" id="floatingPassword"
                    placeholder="Password" value="{{ old('no_hp') }}" required>
                <label for="floatingPassword">No. HP / WhatsApp</label>
                @error('no_hp')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>

            <h5 class="mb-2 mt-5 fw-normal text-light fs-3">2. Data Orang Tua</h5>
            <div class="form-floating fs-3">
                <input style="height: 50px;" type="text" name="namaortu" id="namaortu"
                    class="form-control @error('namaortu') is-invalid @enderror" id="floatingPassword"
                    placeholder="Password" value="{{ old('namaortu') }}" required>
                <label for="floatingPassword">Nama Orang Tua / Wali</label>
                @error('namaortu')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating fs-3">
                <input style="height: 50px;" type="text" name="alamat" id="alamat"
                    class="form-control @error('alamat') is-invalid @enderror" id="floatingPassword"
                    placeholder="Password" value="{{ old('alamat') }}" required>
                <label for="floatingPassword">Alamat Orang Tua / Wali</label>
                @error('alamat')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating fs-3">
                <input style="height: 50px;" type="number" name="hportu" id="hportu"
                    class="form-control @error('hportu') is-invalid @enderror" id="floatingPassword"
                    placeholder="Password" value="{{ old('hportu') }}" required>
                <label for="floatingPassword">Nomor HP/WA Orang Tua / Wali</label>
                @error('hportu')
                    <div class="invalid-feedback mb-4">{{ $message }}</div>
                @enderror
            </div>

            <button style="height: 50px;" class="btn btn-light btn-lg fs-3" type="submit">Daftar</button>
        </form>
    </main>
    <footer>
        <div class="container">
            <p>2022 &copy; Kevin Yardan. All Rights Reserved</p>
        </div>
    </footer>

    <div class="modal" id="modal">
        <span class="close-modal">&times;</span>
        <div class="modal-content">
            <form action="">
                <input type="text" placeholder="Search" />
                <i class="fas fa-search search"></i>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
