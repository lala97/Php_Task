<?php
// Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table sheklinde muvafiq melumatlarla ekrana
//cixmali ve hal hazirki gunde dogum gunu olan ishcinin melumatlari qirmizi rengle yazilmalidir.
class Workers {
	public $host;
	public $user;
  public $pass;
  public $db;
  public $conn;
	function __construct($host,$user,$pass,$db)
	{
	   $this->host=$host;
	   $this->user=$user;
	   $this->pass=$pass;
	   $this->db=$db;
		 $this->conn=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		 if(!$this->conn){
 					echo "you can not access your database";
 				}
	}
	public function select($tname){
		$sql="SELECT * FROM $tname";
		$query=mysqli_query($this->conn,$sql);
		return $query;
	}

	// public $name;
	// public $surname;
	// public $position;
	// public $birthDate;

	// public function addWorker($ad,$soyad,$position,$adgunu){
	// 		$this->name=$ad;
	// 		$this->surname=$soyad;
	// 		$this->position=$position;
	// 		$this->birthDate=$adgunu;
	// 		$sql="SELECT FROM "
	// }
}
$a= new Workers('localhost','root','','lala');


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<table class="table table-bordered">
	<tr>
		<td>Ad</td>
		<td>Soyad</td>
		<td>Status</td>
		<td>Dogum tarixi</td>
	</tr>
	<?php
		$query=$a->select('task');
	while($row=mysqli_fetch_assoc($query)){
    $dayMonth=date_format(new DateTime($row['adgunu']),'d-M');
				$nowDate = date("d-M");
				$nowDayMonth= date_format(new DateTime($nowDate), 'd-M');
				$style="";
				 if($dayMonth==$nowDayMonth){
				 	$style = "color:red";
				 }
				 else {
				 	 	$style="";
				 }
		 ?>
			<tr style=<?php echo $style?>>
					<td><?= $row['ad']; ?></td>
					<td><?= $row['soyad']; ?></td>
					<td><?= $row['status']; ?></td>
					<td><?= $dayMonth; ?></td>
				</tr>
<?php	} 	?>

</table>
</body>
</html>
