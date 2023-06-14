<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css3.css">
    </head>
<body style="background-image: url(book.png);">
	<div class="header">
		<div class="logo"></div>
		<div class="posisi">
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
				    <li><a href="tentang.php">TENTANG</a></li>
				    <li><a href="listsewa.php">SEWA MOBIL</a></li>
                    <li><a href="history.php">RIWAYAT SEWA</a></li>
				    <li><a href="signup.php">LOGIN/DAFTAR</a></li>
                        <img src="pesan3.png" alt="Mobil 2" style ="position: absolute;
                        width: 346px;
                        height: 175px;
                        left: 300px;
                        top: 326px;
                        ">
				</ul>
		    </nav>
		</div>
	</div>

    <form method="POST" action="koneksi.php">
    <div class="form" style="position: relative; border-radius:20px; border-style: solid; border-color: #D3D3D3; padding: 30px; left:650px; width: 400px; top:300px; margin: auto; background-color: RGB(211, 211, 211,0.5);">
                <label>Nama Lengkap</label><br>
                <input style="margin-top: 5px; box-sizing: border-box; display: block; width: 100%; padding: 0.375rem 0.75rem; color: #495057; background-color: #ffff; border: 1px solid #ced4da; border-radius: 0.50rem;" type="text" name="nama" required><br>
    
                <label>No.Hp/Whatsapp</label><br>
                <input style="margin-top: 5px; box-sizing: border-box; display: block; width: 100%; padding: 0.375rem 0.75rem; color: #495057; background-color: #ffff; border: 1px solid #ced4da; border-radius: 0.50rem;" type="text" name="nohp" required><br>
                
                <label>Nama Mobil</label><br>
                <select style="margin-top: 5px; box-sizing: border-box; display: block; width: 100%; padding: 0.375rem 0.75rem; color: #495057; background-color: #ffff; border: 1px solid #ced4da; border-radius: 0.50rem;" name="namamobil" required>
                <option value="">Pilih Mobil</option>
                <option value="Innova Reborn">Innova Reborn</option>
                </select>
                
                <label>Tanggal Peminjaman</label><br>
                <input style="margin-top: 5px; box-sizing: border-box; display: block; width: 100%; padding: 0.375rem 0.75rem; color: #495057; background-color: #ffff; border: 1px solid #ced4da; border-radius: 0.50rem;" type="date" name="pinjam" placeholder="mm/dd/yy" required><br>

                <label>Tanggal Pengembalian</label><br>
                <input style="margin-top: 5px; box-sizing: border-box; display: block; width: 100%; padding: 0.375rem 0.75rem; color: #495057; background-color: #ffff; border: 1px solid #ced4da; border-radius: 0.50rem;" type="date" name="pengembalian" placeholder="mm/dd/yy"required><br>

                <label>Total Unit</label></br>
                <input style="margin-top: 5px; box-sizing: border-box; display: block; width: 100%; padding: 0.375rem 0.75rem; color: #495057; background-color: #ffff; border: 1px solid #ced4da; border-radius: 0.50rem;" type="number" name="unit" required><br>
                
                <label>Total Biaya Sewa</label></br>
                <input style="margin-top: 5px; box-sizing: border-box; display: block; width: 100%; padding: 0.375rem 0.75rem; color: #495057; background-color: #ffff; border: 1px solid #ced4da; border-radius: 0.50rem;" type="text" name="sewa" required><br>
                
                <label>Jenis Jaminan</label></br>
                <input style="margin-top: 5px; box-sizing: border-box; display: block; width: 100%; padding: 0.375rem 0.75rem; color: #495057; background-color: #ffff; border: 1px solid #ced4da; border-radius: 0.50rem;" type="text" name="jaminan" required><br>
                
                <label>Bukti DP Unit</label></br>
                <input style="margin-top: 5px; box-sizing: border-box; display: block; width: 100%; padding: 0.375rem 0.75rem; color: #495057; background-color: #ffff; border: 1px solid #ced4da; border-radius: 0.50rem;" type="file" name="bukti" required><br>

                <font color="red">*Silahkan transfer total biaya sewa ke </font><br>
                <font color="red">*Setelah submit akan otomatis mendapat whatsaap dari admin untuk konfirmasi </font></br><br>
                <label>Silahkan anda membayar tagihan anda dengan cara transfer via Bank BCA di nomor rekening:
                (9231036512a/n Bintang Tiara) untuk menyelesaikan pembayaran dan uang muka minimal setengah dari harga sewa. </label></br>

                <br>
                <div style="text-align: right;">
                <button style="width: 100px; padding: 7px; color: #fff; background-color: #007aff; border-style: none; border-radius: 3px;" type="paynow" name="paynow">Pay Now</button>
                </div> 
                <button style="position: absolute; bottom: 31px; margin-top: -50px; width: 100px; padding: 7px; color: #fff; background-color: #007aff; border-style: none; border-radius: 3px" onclick="window.location.href='index.php'" >Back</button>
    </div>

    <div style="position: absolute;
        width: 400px;
        height: 20px;
        left: 700px;
        top: 356px;
        font-family: 'Baloo';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 38px;
        color: #000000;">
        <p><b>TOYOTA INNOVA REBORN 2.4 G </b></p>
    </div>


    <div style= "position: absolute;
        width: 400px;
        height: 20px;
        left: 700px;
        top: 460px;
        font-family: 'Basic';
        font-style: normal;
        font-weight: 400;
        font-size: 26px;
        line-height: 33px;
        display: flex;
        align-items: center;
        text-align: center;
        color: #000000;">
        <p>Transmisi : Automatic</p>
	</div>
</body>
</html>
