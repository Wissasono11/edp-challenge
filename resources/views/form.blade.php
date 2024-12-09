<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">   
</head>
<body>
    <div class="container mt-5">
        <div class="row ">
            <!-- Form Column -->
            <div class="col-md-10">
                <h2>Data Pribadi</h2>
                <form id="inputForm" action="/submit" method="POST">
                    @csrf

                    <!-- Program Studi -->
                    <div class="mb-3">
                        <label for="program_studi" class="form-label">Program Studi</label>
                        <select class="form-select" id="program_studi" name="program_studi" required>
                            <option value="">Pilih Program Studi</option>
                            <option value="S1-TI">S1 - Teknik Informatika</option>
                            <option value="S1-SI">S1 - Sistem Informasi</option>
                            <option value="S2-TI">S2 - Teknik Informatika</option>
                            <option value="D3-TK">D3 - Teknik Komputer  </option>
                        </select>
                    </div>  

                    <!-- Kelas -->
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" id="kelas" name="kelas" required>
                            <option value="">Pilih Kelas</option>
                            <option value="pagi">Kelas Pagi</option>
                            <option value="sore">Kelas Sore</option>
                            <option value="malam">Kelas Malam</option>
                        </select>
                    </div>

                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" 
                               class="form-control" 
                               id="name" 
                               name="name"
                               pattern="[A-Za-z\s]+" 
                               minlength="3"
                               maxlength="50"
                               required>
                    </div>

                    <!-- NIK -->
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                         <input type="text" 
                                class="form-control" 
                                id="nik" 
                                name="nik"
                                pattern="[0-9]{16}"
                                minlength="16"
                                maxlength="16"
                                title="NIK harus 16 digit angka"
                                required>
                    </div>

                    <!-- Gender -->
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" 
                               pattern="(Laki-laki|Perempuan)" 
                               title="Masukkan 'Laki-laki' atau 'Perempuan'" required>
                    </div>

                    <!-- Tempat Lahir -->
                    <div class="mb-3">
                        <label for="birthplace" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="birthplace" name="birthplace" required>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    </div>

                    <!-- Sumber Informasi -->
                    <div class="mb-3">
                        <label class="form-label">  <h5>Sumber Informasi</h5></label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="internet" name="information_source" value="internet" required>
                            <label class="form-check-label" for="internet">Internet</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="socialmedia" name="information_source" value="socialmedia" required>
                            <label class="form-check-label" for="socialmedia">Media Sosial</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="friend" name="information_source" value="friend" required>
                            <label class="form-check-label" for="friend">Teman</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="family" name="information_source" value="family" required>
                            <label class="form-check-label" for="family">Keluarga</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="other" name="information_source" value="other" required>
                            <label class="form-check-label" for="other">Lainnya</label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">&copy; 2024 Bayu Wicaksono | Wissasono. All rights reserved.</p>
                <div class="social-links mt-3">
                    <a href="#" class="mx-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- First load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- script validation forms -->
<script>
$(document).ready(function () {
    $("#program_studi").change(function () {
        const programStudi = $(this).val();
        if (programStudi) {
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });

    $("#kelas").change(function () {
        const kelas = $(this).val();
        if (kelas) {
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });

    $("#name").on("input", function () {
        const name = $(this).val();
        const nameRegex = /^[A-Za-z\s]+$/;

        if (nameRegex.test(name)) {
            $(this).removeClass("is-invalid").addClass("is-valid");
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });

    $("#nik").on("input", function () {
        const nik = $(this).val();
        const nikRegex = /^\d{16}$/;

        if (nikRegex.test(nik)) {
            $(this).removeClass("is-invalid").addClass("is-valid");

            const genderDigit = parseInt(nik.substring(6, 8));
            const gender = genderDigit > 40 ? "Perempuan" : "Laki-laki";
            $("#gender")
                .val(gender)
                .removeClass("is-invalid")
                .addClass("is-valid");
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });

    $("#gender").on("input", function () {
        const gender = $(this).val();
        if (gender === "Laki-laki" || gender === "Perempuan") {
            $(this).removeClass("is-invalid").addClass("is-valid");
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });

    $("#birthplace").on("input", function () {
        const birthplace = $(this).val();
        if (birthplace.length > 2) {
            $(this).removeClass("is-invalid").addClass("is-valid");
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });

    $("#birthdate").change(function () {
        const birthdate = $(this).val();
        if (birthdate) {
            $(this).removeClass("is-invalid").addClass("is-valid");
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });

    $("#email").on("input", function () {
        const email = $(this).val();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (emailRegex.test(email)) {
            $(this).removeClass("is-invalid").addClass("is-valid");
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });

    $("#address").on("input", function () {
        const address = $(this).val();
        if (address.length > 10) {
            $(this).removeClass("is-invalid").addClass("is-valid");
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });

    $("#inputForm").submit(function (event) {
        event.preventDefault();

        const isValid = $(".form-control:required, .form-select:required")
            .toArray()
            .every((element) => $(element).hasClass("is-valid"));

        if (isValid) {
            this.submit();
        } else {
            alert("Mohon lengkapi semua field dengan benar");
        }
    });
});
</script>
</body>
</html>