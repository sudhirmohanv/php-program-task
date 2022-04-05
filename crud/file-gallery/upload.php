
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tmpname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "image/".$filename;
		
	$db = mysqli_connect("localhost", "root", "", "photos");

		//Get all the submitted data from the form
		$sql = "INSERT INTO image (filename) VALUES ('$filename')";

		// Execute query
		mysqli_query($db, $sql);
		
		//Now let's move the uploaded image into the folder: image
		$new_location = __DIR__."/upload/{$new_file}";
		if (move_uploaded_file($tmpname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
			
			
	}
}
$result = mysqli_query($db, "SELECT * FROM image");
while($data = mysqli_fetch_array($result))
{

	?>
<img src="<?php echo $data['image']; ?>"/>

<?php
}
?>


