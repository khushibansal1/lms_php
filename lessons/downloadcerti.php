<?php 
include("conn.php");
session_start();
$qry="select * from completioncertificate where sid=".$_SESSION['sid'];

$res=mysqli_query($con,$qry);

if(mysqli_num_rows($res)==0)
{
	echo"no data found";
}
?>
	<?php 
	while($row=mysqli_fetch_array($res))
	{
		?>
        <div align="center  ">
			<?php echo"<img src='$row[1]'/>"; ?>
    </div>  
		
		<?php 
	}

   mysqli_close($con);

			?>
		</table>

