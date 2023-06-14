<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css3.css">
</head>
    <body style="background-image: url(book.png);">
    <style>
        table {
            position: absolute;
            width: 1309px;
            height: 157px;
            right: 200px;
            bottom: 80px;
            background-color: #D9D9D9;
            border-radius: 15px;
        }
        table,th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
        }
        /* td {
            background-color: RGB(211, 211, 211,0.5);
            color: white;
        }
        th {
            background-color: RGB(211, 211, 211,0.5);;
            color: white;
        } */
    </style>
    </body>
<body>
        <div class="header">
            <div class="logo"></div>
            <div class="posisi">
                <nav>
				    <ul>
					    <li><a href="" style="position: absolute;
                        width: 1000px;
                        height: 28px;
                        left: 1100px;
                        top: 45px;

                        font-family: 'Baloo 2';
                        font-style: normal;
                        font-weight: 700;
                        font-size: 38px;
                        line-height: 20px;

                        display: flex;
                        align-items: center;
                        text-align: center;
                        letter-spacing: 1px;

                        color: #FFFFFF;">RIWAYAT SEWA</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    <title></title>
<body>
    

<?php
              $host = 'localhost';
              $username = 'root';
              $password = '';
              $database = 'rentalin';
              
              $connection = new mysqli($host, $username, $password, $database);
              if ($connection->connect_error) {
                  die('Koneksi gagal: ' . $connection->connect_error);
              }
        $sql = "SELECT * FROM peminjam"; // Ganti "nama_tabel" dengan nama tabel yang ingin Anda tampilkan

        $result = $connection->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>NO</th><th>Nama Lengkap</th><th>No Hp</th><th>Nama Mobil</th><th>Tgl Peminjmanan</th>
            <th>Tgl Pengembalian</th><th>Total Unit</th><th>Jenis Jaminan</th><th>Total Biaya</tr>"; // Ganti kolom sesuai dengan tabel Anda
        $no = 1;
            // Menampilkan data dalam tabel
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$no++."</td><td>".$row["NAMA_LENGKAP"]."</td><td>".$row["NO_HP"]."</td><td>".$row["Nama_mobil"]."</td>
                <td>".$row["TGL_PEMINJAMAN"]."</td><td>".$row["TGL_PENGEMBALIAN"]."</td><td>".$row["total_unit"]."</td>
                <td>".$row["TOTAL_BIAYA_SEWA"]."</td><td>".$row["JENIS_JAMINAN"]."</td>
                
                </tr>"; // Ganti kolom sesuai dengan tabel Anda
            }
        
            echo "</table>";
        } else {
            echo "Tidak ada data dalam tabel.";
        }
        
        // Menutup koneksi ke database
        $connection->close();
        ?>
      
</body>
</html>