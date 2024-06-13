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
?>