<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Calon Asisten</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
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
        <div class="container-fluid">
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas Praktikum</th>
                    <td>IPK</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($asisten as $ast): ?>
                    <tr>
                        <td>
                            <?= $i++ ?>
                        </td>
                        <td>
                            <?= esc($ast['nim']) ?>
                        </td>
                        <td>
                            <?= esc($ast['nama']) ?>
                        </td>
                        <td>
                            <?= esc($ast['praktikum']) ?>
                        </td>
                        <td>
                            <?= esc($ast['ipk']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>