    <!-- <style>
        input[type="file"]::-webkit-file-upload-button {
        visibility: hidden;
        }

        /* Ganti dengan teks kustom */
        input[type="file"]::before {
            content: "MENU";
        position: absolute;
        top: 5px;
        right: 0;
        left: 0;
        /* color: #111827; */
        color: #fff;
        font-size: 10px;
        font-weight: bold;
        text-align: center;
            
        }
    </style> -->

    <div class="modal-header">
        <h1 class="modal-title fs-5" id="userAddModalLabel">Tambah User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <form action="adduser" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="modal-body">
            
            <!-- <div class="mb-3">
                <label for="username" class="form-label">Nama Pengguna</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Nama Pengguna">
            </div> -->
            
            <!-- <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Kata Sandi">
            </div> -->
            
            <!-- <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi Kata Sandi">
            </div> -->

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 5px 0 0 5px;" >
                    <i class="bi bi-person-fill"></i>
                    </span>
                </div>
                <input id="username" type="text" class="form-control" name="username" placeholder="Nama Pengguna" required>
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 5px 0 0 5px;" >
                    <i class="bi bi-key-fill"></i>
                    </span>
                </div>
                <input id="password" type="password" class="form-control" name="password" placeholder="Kata Sandi" required>
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 0 5px 5px 0;" >
                    <i class="bi bi-eye" id="togglePassword"></i>
                    </span>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 5px 0 0 5px;" >
                    <i class="bi bi-key-fill"></i>
                    </span>
                </div>
                <input id="confirmpassword" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 0 5px 5px 0;" >
                    <!-- <i class="fas fa-eye" id="togglePassword1"></i> -->
                    <i class="bi bi-eye" id="togglePassword1"></i>
                    </span>
                </div>
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 5px 0 0 5px;" >
                    <i class="bi bi-telephone"></i>
                    </span>
                </div>
                <input id="phone" type="text" class="form-control" name="phone" placeholder="No Telepon" required>
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 5px 0 0 5px; height: 100%;" >
                    <i class="bi bi-house-fill"></i>
                    </span>
                </div>
                <textarea id="address" class="form-control" name="address" placeholder="Alamat" required></textarea>
            </div>
            
            <!-- <div class="input-group mb-3">
                <input id="image" type="file" class="form-control" name="image" placeholder="Tidak ada foto yang dipilih" onchange="updateFileName(this)" required>
                <div class="input-group-prepend">
                    <span class="input-group-text" style="border-radius: 0 5px 5px 0; height: 100%;" >
                    <i class="bi bi-image"></i>
                    </span>
                </div>
            </div> -->
            
            <!-- <div class="mb-3">
                <label for="phone" class="form-label">No Telepon</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="No Telepon">
            </div> -->
            
            <!-- <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Alamat">
            </div> -->
            
            <div class="mb-3">
                <label for="image" class="form-label">Foto Profil</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>            
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondarySmall" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
        </div>
    </form>

    <script>
        document.getElementById("togglePassword").addEventListener("click", function(e) {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                e.target.classList.add("bi-eye-slash"); // Ganti ke ikon mata tertutup
                e.target.classList.remove("bi-eye");
            } else {
                passwordInput.type = "password";
                e.target.classList.add("bi-eye"); // Ganti ke ikon mata terbuka
                e.target.classList.remove("bi-eye-slash");
            }
        });
    </script>

    <script>
        document.getElementById("togglePassword1").addEventListener("click", function(e) {
            var passwordInput = document.getElementById("confirmpassword");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                e.target.classList.add("bi-eye-slash"); // Ganti ke ikon mata tertutup
                e.target.classList.remove("bi-eye");
            } else {
                passwordInput.type = "password";
                e.target.classList.add("bi-eye"); // Ganti ke ikon mata terbuka
                e.target.classList.remove("bi-eye-slash");
            }
        });
    </script>

<!-- <script>
function updateFileName(input) {
    const label = input.previousElementSibling; // Mendapatkan elemen label

    if (input.files.length > 0) {
        label.textContent = input.files[0].name; // Mengganti teks label dengan nama file yang dipilih
    } else {
        label.textContent = "Foto Profil"; // Mengembalikan teks label ke teks awal jika tidak ada file yang dipilih
    }
}
</script> -->