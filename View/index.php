<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Menu Konsultasi</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <h2>Data Pasien</h2>
        <p>Isilah Data Diri Anda Terlebih Dahulu</p>
        <form action="hasil.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" /></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="number" name="umur" /></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="kelamin" value="Laki-laki" />Laki-laki <input type="radio" name="kelamin" value="Perempuan" />Perempuan</td>
                </tr>
            </table>
            <h2>Daftar Keluhan</h2>
            <p>Isilah Form Keluhan dibawah ini sesuai dengan kondisi yang anda alami saat ini.</p>
            <table>
                <tr>
                    <th>No</th>
                    <th>Daftar Gejala</th>
                    <th>Pilih Kondisi</th>
                </tr>
                <tr>
                    <th>1.</th>
                    <th>Batuk</th>
                    <th>
                        <select id="gejala" name="gejala">
                            <option value="tidak">Tidak</option>
                            <option value="tidaktahu">Tidak Tahu</option>
                            <option value="sedikityakin">Sedikit Yakin</option>
                            <option value="cukupyakin">Cukup Yakin</option>
                            <option value="yakin">Yakin</option>
                            <option value="sangatyakin">Sangat Yakin</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>2.</th>
                    <th>Demam</th>
                    <th>
                        <select id="gejala" name="gejala">
                            <option value="tidak">Tidak</option>
                            <option value="tidaktahu">Tidak Tahu</option>
                            <option value="sedikityakin">Sedikit Yakin</option>
                            <option value="cukupyakin">Cukup Yakin</option>
                            <option value="yakin">Yakin</option>
                            <option value="sangatyakin">Sangat Yakin</option>
                    </th>
                </tr>
                <tr>
                    <th>3.</th>
                    <th>Sesak Napas</th>
                    <th>
                        <select id="gejala" name="gejala">
                            <option value="tidak">Tidak</option>
                            <option value="tidaktahu">Tidak Tahu</option>
                            <option value="sedikityakin">Sedikit Yakin</option>
                            <option value="cukupyakin">Cukup Yakin</option>
                            <option value="yakin">Yakin</option>
                            <option value="sangatyakin">Sangat Yakin</option>
                    </th>
                </tr>
                <tr>
                    <th>4.</th>
                    <th>Pilek</th>
                    <th>
                        <select id="gejala" name="gejala">
                            <option value="tidak">Tidak</option>
                            <option value="tidaktahu">Tidak Tahu</option>
                            <option value="sedikityakin">Sedikit Yakin</option>
                            <option value="cukupyakin">Cukup Yakin</option>
                            <option value="yakin">Yakin</option>
                            <option value="sangatyakin">Sangat Yakin</option>
                    </th>
                </tr>
                <tr>
                    <th>5.</th>
                    <th>Mengi</th>
                    <th>
                        <select id="gejala" name="gejala">
                            <option value="tidak">Tidak</option>
                            <option value="tidaktahu">Tidak Tahu</option>
                            <option value="sedikityakin">Sedikit Yakin</option>
                            <option value="cukupyakin">Cukup Yakin</option>
                            <option value="yakin">Yakin</option>
                            <option value="sangatyakin">Sangat Yakin</option>
                    </th>
                </tr>
                <tr>
                    <th>6.</th>
                    <th>Napas Cepat</th>
                    <th>
                        <select id="gejala" name="gejala">
                            <option value="tidak">Tidak</option>
                            <option value="tidaktahu">Tidak Tahu</option>
                            <option value="sedikityakin">Sedikit Yakin</option>
                            <option value="cukupyakin">Cukup Yakin</option>
                            <option value="yakin">Yakin</option>
                            <option value="sangatyakin">Sangat Yakin</option>
                    </th>
                </tr>
                <tr>
                    <th>7.</th>
                    <th>Diare</th>
                    <th>
                        <select id="gejala" name="gejala">
                            <option value="tidak">Tidak</option>
                            <option value="tidaktahu">Tidak Tahu</option>
                            <option value="sedikityakin">Sedikit Yakin</option>
                            <option value="cukupyakin">Cukup Yakin</option>
                            <option value="yakin">Yakin</option>
                            <option value="sangatyakin">Sangat Yakin</option>
                    </th>
                </tr>
                <tr>
                    <th>8.</th>
                    <th>Muka Kemerahan</th>
                    <th>
                        <select id="gejala" name="gejala">
                            <option value="tidak">Tidak</option>
                            <option value="tidaktahu">Tidak Tahu</option>
                            <option value="sedikityakin">Sedikit Yakin</option>
                            <option value="cukupyakin">Cukup Yakin</option>
                            <option value="yakin">Yakin</option>
                            <option value="sangatyakin">Sangat Yakin</option>
                    </th>
                </tr>
                <tr>
                    <th>9.</th>
                    <th>Suara Kering</th>
                    <th>
                        <select id="gejala" name="gejala">
                            <option value="tidak">Tidak</option>
                            <option value="tidaktahu">Tidak Tahu</option>
                            <option value="sedikityakin">Sedikit Yakin</option>
                            <option value="cukupyakin">Cukup Yakin</option>
                            <option value="yakin">Yakin</option>
                            <option value="sangatyakin">Sangat Yakin</option>
                    </th>
                </tr>
            </table>
            <input type="submit" name="submit" value="Submit"></input>
        </form>
        <!-- <button id="submit" onclick="toHasil()" type="button">Submit</button> -->
        <!-- <input type="submit" name="submit" value="Submit"></input> -->
        <!-- <script src="pindah.js"></script> -->
    </main>
</body>

</html>