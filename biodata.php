<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Biodata</title>
</head>
<body>
    <h2>Biodata</h2>
    <form method="POST" action="actionbiodata.php">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" id="" required>
            </td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir</td>
                <td>
                    <input type="text" name="ttl" id="" required>
            </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>
                    <input type="text" name="umur" id="" required>
            </td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>
                    <input type="text" name="kota" id="" required>
            </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <input type="text" name="hobi" id="" required>
            </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" id="" required>
            </td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td>
                    <input type="number" name="nhp" id="" required>
            </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" id="" required>
            </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>
                    <input type="text" name="pekerjaan" id="" required>
            </td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>
                    <input type="text" name="pendidikan" id="" required>
            </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Kirim">
            </td>
                <td>
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
</form>
</body>
</html>