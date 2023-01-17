<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | Silakan Mendafta</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>

            <p>
                <label for="nama">Nama</label>
                <input type="text" name="nama" placeholder="nama lengkap">
            </p>
            <p>
                <label for="alamat">Alamat</label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama.</label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>KhongHucu</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" placeholder="Nama sekolah" >
            </p>
            <p>
            <input  type="submit" value="Daftar" name="daftar" onClick="return confirm('Tambahkan Data?')"/>  
               </p> 
                
            
        </fieldset>
    </form>
</body>
</html>