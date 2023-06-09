<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Pendaftaran</title>
</head>

<body>
    <form action="/asisten/simpan" method="post">
        <?= csrf_field() ?>
        <div class="container mt-3">
            <div class="p-5 bg-primary text-white rounded">
                <h1>Pendaftaran Asisten Praktikum</h1>
                <p>
                    Asisten Praktikum mempunyai peran yang sangat penting dalam kegiatan
                    Praktikum di kelas. Keberadaannya sangat dibutuhkan oleh dosen
                    pengampu untuk membantu dosen dalam mendampingi peserta praktikum
                    dalam melaksanakan percobaan-percobaan yang telah disiapkan oleh dosen
                    pengampu. Mahasiswa-mahasiswa sangat didorong untuk dapat menjadi
                    seorang asisten praktikum. Selain memberikan pengalaman bekerja
                    bersama dosen, menjadi Asisten Praktikum dapat mengasah kepedulian
                    terhadap orang lain yang membutuhkan. Jika anda terpanggil untuk
                    menjadi Asisten Praktikum, silahkan daftar diri anda pada form dibawah
                    ini...
                </p>
            </div>
            <p>
                <label for="nim">NIM</label><br />
                <input name="nim" type="text" class="form-control" placeholder="Masukkan NIM" />
            </p>
            <p>
                <label for="nama">NAMA:</label><br />
                <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" />
            </p>
            <p>
                <label for="praktikum">KELAS PRAKTIKUM:</label><br />
                <input name="praktikum" type="text" class="form-control" placeholder="Masukkan Kelas Praktikum" />
            </p>

            <p>
                <label for="ipk">IPK:</label>
                <input name="ipk" id="ipk" type="number" class="form-control" placeholder="Masukkan IPK" />
            <div id="feedback"></div>
            </p>
            <button type="submit" class="btn btn-primary" name="" value="Simpan">Submit</button>
        </div>
    </form>
</body>

</html>