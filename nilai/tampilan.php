<html>
  <head>
    <title>tampilan</title>
    <?php
  require('function.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

  $nilai = query("SELECT * FROM nilai");
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Nilai Mahasiswa</title>
    <style type="text/css">
      * {
        
        font-family: "Trebuchet MS";
      }
      body{
        background-image: url('binus4.jpg');
        background-repeat: no-repeat;
        background-size: 1500px;
       
      }
      #table{
        margin-top: 3%;
      }
      h1 {
        margin-top: 10%;
        text-align: center;
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 85%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    @media print{
      .form, .action{
        display: none;
      }
    }
    </style>
  </head>
  <body>
    <h1>NILAI MAHASISWA UNIVERSITAS PELITA BANGSA</h1>
    <br>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>ID Mahasiswa</th>
          <th>ID Mata Kuliah</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <?php
                
                $query = "SELECT * FROM nilai";
                $result = mysqli_query($koneksi, $query);

                if (!$result) {
                  die("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                }

                $no = 1;

                while ($row = mysqli_fetch_assoc($result)) {
                  
        ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['mahasiswa_id']; ?></td>
          <td><?php echo $row['mk_id']; ?></td>
          <td><?php echo $row['nilai']; ?></td>
       </tr>
                 
            <?php
                $no++; //untuk nomor urut terus bertambah 1
            }
           ?>
      </tbody>
    </table>
    </div>
  </body>
</html>