<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Biodata Diri</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #ffdaf2;
        margin: 0;
        padding: 0;
      }
      .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h2 {
        text-align: center;
        color: #333;
      }
      input[type="text"],
      input[type="email"],
      input[type="date"],
      input[type="number"],
      textarea,
      select {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      .birth {
        width: 49% !important;
      }

      select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"><path d="M7 10l5 5 5-5z"/></svg>');
        background-repeat: no-repeat;
        background-position-x: calc(100% - 12px);
        background-position-y: center;
      }
      input[type="submit"] {
        background-color: #ffb6c1;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
      }
      input[type="submit"]:hover {
        background-color: #e6a8b0;
      }
      .error {
        color: red;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Formulir Biodata Diri</h2>
      <form id="form" action="" method="post">
        <label for="nama">Nama Lengkap</label>
        <input
          type="text"
          id="nama"
          name="nama"
          placeholder="Masukkan nama.."
          required
        />
        <span id="namaError" class="error"></span><br />

        <label for="lahir">Tempat, Tanggal Lahir</label><br />
        <input
          class="birth"
          type="text"
          id="kotalahir"
          name="kotalahir"
          placeholder="Masukkan Kota Kelahiran.."
          required
        />

        <input type="date" id="lahir" name="lahir" class="birth" required />
        <span id="kotalahirError" class="error"></span><br />

        <label for="alamat">Alamat</label>
        <textarea
          id="alamat"
          name="alamat"
          placeholder="Masukkan alamat.."
          rows="4"
          required
        ></textarea>
        <span id="alamatError" class="error"></span><br />

        <label for="jk">Jenis Kelamin</label>
        <select id="jk" name="jk">
          <option value="laki">Laki - laki</option>
          <option value="perempuan">Perempuan</option>
        </select>

        <label for="agama">Agama</label>
        <select id="agama" name="agama">
          <option value="islam">Islam</option>
          <option value="kristen">Kristen</option>
          <option value="katolik">Katolik</option>
          <option value="hindu">Hindu</option>
          <option value="buddha">Buddha</option>
          <option value="khonghucu">Khonghucu</option>
        </select>

        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Masukkan email.."
          required
        />
        <span id="emailError" class="error"></span> <br />

        <label for="phone">Nomer Telepon</label>
        <input
          type="number"
          id="phone"
          name="phone"
          placeholder="Masukkan phone telepon.."
          pattern="[0-9]{10,12}"
          required
        />
        <span id="phoneError" class="error"></span><br />

        <input type="submit" value="Kirim" />
      </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $kotalahir = $_POST['kotalahir'];
        $lahir = $_POST['lahir'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        echo '<script>';
        echo 'alert("Data telah diterima!\nNama: ' . $nama . '\nKota Lahir: ' . $kotalahir . '\nTanggal Lahir: ' . $lahir . '\nAlamat: ' . $alamat . '\nJenis Kelamin: ' . $jk . '\nAgama: ' . $agama . '\nEmail: ' . $email . '\nTelepon: ' . $phone . '");';
        echo '</script>';
    }
    ?>


    <script>
      document
        .getElementById("form")
        .addEventListener("submit", function (event) {
          event.preventDefault();

          var nama = document.getElementById("nama").value;
          var kotalahir = document.getElementById("kotalahir").value;
          var lahir = document.getElementById("lahir").value;
          var alamat = document.getElementById("alamat").value;
          var jk = document.getElementById("jk").value;
          var agama = document.getElementById("agama").value;
          var email = document.getElementById("email").value;
          var phone = document.getElementById("phone").value;

          // Validasi nama lengkap
          var namePattern = /^[A-Za-z\s]+$/;
          if (!namePattern.test(nama.trim())) {
            document.getElementById("namaError").textContent =
              "Nama harus berupa huruf";
            return false;
          } else {
            document.getElementById("namaError").textContent = "";
          }

          // Validasi tempat lahir
          if (kotalahir.trim() === "") {
            document.getElementById("kotalahirError").textContent =
              "Tempat lahir harus diisi";
            return false;
          } else {
            document.getElementById("kotalahirError").textContent = "";
          }

          // Validasi tanggal lahir
          if (lahir === "") {
            document.getElementById("kotalahirError").textContent =
              "Tanggal lahir harus diisi";
            return false;
          } else {
            document.getElementById("kotalahirError").textContent = "";
          }

          // Validasi alamat
          if (alamat.trim() === "") {
            document.getElementById("alamatError").textContent =
              "Alamat harus diisi";
            return false;
          } else {
            document.getElementById("alamatError").textContent = "";
          }

          // Validasi email
          var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailPattern.test(email)) {
            document.getElementById("emailError").textContent =
              "Format email tidak valid";
            return false;
          } else {
            document.getElementById("emailError").textContent = "";
          }

          // Validasi nomor telepon
          var phonePattern = /^\d{10,12}$/; // Angka 10 hingga 12 digit
          if (!phonePattern.test(phone)) {
            document.getElementById("phoneError").textContent =
              "Nomor telepon harus terdiri dari 10 hingga 12 digit";
            return false;
          } else {
            document.getElementById("phoneError").textContent = "";
          }

          // Jika semua validasi terpenuhi, formulir dikirim
          alert("Formulir berhasil dikirim!");

          var message = "Nama: " + nama + "\n";
          message += "Email: " + email + "\n";
          message += "Phone: " + phone + "\n";
          message += "Alamat: " + alamat + "\n";
          message += "Jenis Kelamin: " + jk + "\n";
          message += "Agama: " + agama + "\n";
          message += "Tanggal Lahir: " + lahir + "\n";
          message += "Tempat Kelahiran: " + kotalahir + "\n";

          // Tampilkan pesan alert dengan nilai input
          alert(message);
        });
    </script>
  </body>
</html>
