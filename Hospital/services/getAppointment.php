<?php
$con = mysqli_connect("localhost","root","","hms");
if (!$con)
  {
  die('Could not connect: ');
  }


$sql="INSERT INTO appointment(doctor,patient,registrationNumber,day,time)
VALUES
('$_POST[doctor]','$_POST[patient]','$_POST[registration]','$_POST[day]','$_POST[time]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ');
  }
echo "	<h3>APPOINTMENT DETAILS</h3><hr />
		Thank You for having the appointment. We are here to help you.<br /><br />
		<u><b>Appointment Details:</b></u><br />
		<b>Patient:</b> $_POST[patient]<br />
		<b>Doctor:</b> $_POST[doctor]<br />
		<b>Day:</b> Next Week's $_POST[day]<br />
		<b>Time Slot Booked:</b> $_POST[time]
	";

mysqli_close($con);
?>
