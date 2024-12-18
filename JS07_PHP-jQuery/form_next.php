<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="post" action="proses_lanjut.php">
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruuk">Jeruk</option>
        </select>

        <br>

        <label>Pilih Warna Favorit:</label>
        <br>
        <input type="checkbox" name="warna[]" value="merah"> Merah <br>
        <input type="checkbox" name="warna[]" value="biru"> Biru <br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau <br>

        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-lakai<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

        <br>
        <input type="submit" value="Submit">
    </form>

    <div id="hasil">
        <!-- Hasil akan ditampilkan di sini -->
    </div>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function (e){
                e.preventDefault();//Mencegah pengiriman form secara default

                //Mengumpulkan data form
                var formData = $("#myForm").serialize();

                //Kirim data ke server PHP
                $.ajax({
                    url: "proses_lanjut.php",
                    type: "POST",
                    data: formData,
                    success: function (response){
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>