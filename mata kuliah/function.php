  <?php 
	$koneksi = mysqli_connect("localhost", "root", "", "nazhifah_312310227");

	function query($query){
		global $koneksi;

		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah ($data) {
		global $koneksi;
		$id = ($_POST["id"]);
		$nama_mk = ($_POST["nama_mk"]);
		$dosen_id = ($_POST["dosen_id"]);


		$query = "INSERT INTO mata_kuliah VALUES ('$id','$nama_mk','$dosen_id')";
		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);
	}

?>