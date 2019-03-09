<title>VIEW DATA</title/>
<font size="15" color="white">HASIL DATA SENSUS!</font>
<br>
</br>
 <body background="image1.jpg"><table border="2">
</form>
    <tr><th>ID</th><th>EMAIL</th><th>NAMA</th><th>ALAMAT</th><th>PROVINSI</th><th>PENDAPATAN</th><th>TANGGAL</th><th>STATUS</th></tr>
    <?php
    include 'config.php';
    $sensus = mysqli_query($koneksi, "SELECT * from sensus");
    $no=1;
    foreach ($sensus as $row){
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['email']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['alamat']."</td>
			<td>".$row['alamat']."</td>
            <td>".$row['pendapatan']."</td>
			<td>".$row['CreatedOn']."</td>
              </tr>";
        $no++;
		
    }
    ?>
</table>