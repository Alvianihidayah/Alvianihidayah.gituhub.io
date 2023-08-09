<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-widht,initial-scale=1.0">
        <title>Pemesanan nasi kotak</title>

    </head>
    <body>
        <form action=""method="post">
            <table border="0"align="center">
            <h1>Form Pemesanan Nasi Kotak</h1>
            <img src="RPL.png"
            style="width:90px;height:90px;">
            <br>
            <label for="">Cabang :</label>
            <select name="branch" id="">
                <option value="pilih cabang">-Pilih Cabang-</option>
                <option value="majalengka">majalengka</option>
                <option value="bandung">Bandung</option>
                <option value="ciamis">ciamis</option>
            </select>
            <br>
            <label for="">Nama Pelanggan :</label>
            <input type="text" name="name"><br>
            <label for="">Nomor Hp :</label>
            <input type="text" name="PhoneNumber"><br>
            <label for="">Jumlah Kotak :</label>
            <input type="text" name="quantity"><br>
            <input type="submit" name="submit" value="Pesan"><br>
        </form>
        

<?php
 if(isset($_POST['submit'])) {
    $branch = $_POST['branch'];
    $name = $_POST['name'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $quantity = $_POST['quantity'];
    $pricePerItem = 50000; //harga satunya (50 ribu)
    $discountPerItem = 50000;
    $MinimumQuantityForDiscount = 10;
    $totalPriceBeforeDiscount = $pricePerItem * $quantity;
    $totalDiscount = 0;
     if ($quantity > $MinimumQuantityForDiscount) {
        $totalDiscount = $discountPerItem * floor($quantity / $MinimumQuantityForDiscount);
     }
     $totalPriceAfterDiscount = $totalPriceBeforeDiscount -$totalDiscount;

     echo "Pesanan telah diterima :<br>";
     echo "Cabang: " . $branch . "<br>";
     echo "Nama: " . $name . "<br>";
     echo "Nomor Hp: " . $PhoneNumber . "<br>";
     echo "Jumlah  : " . $quantity . "<br>";
     echo "Tagihan Awal Sebelum Diskon : Rp " . number_format($totalPriceBeforeDiscount, 0,',', '.') . "<br>";
     
     if ($totalDiscount > 0) {
        echo "Diskon: Rp " . number_format($totalDiscount, 0, ',', '.') . "<br>";
     }
     echo "Tagihan Akhir Setelah Diskon: Rp " . number_format($totalPriceAfterDiscount, 0, ',', '.') . "<br>";
     
 }
 ?>

       </body>
</html>