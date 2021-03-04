<?php
include('db.ini.php');

							$query = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".md5($_POST['pass'])."'";
							//echo $query;
							$result = mysqli_query($con,$query) or die(mysqli_error($con));
							if(mysqli_num_rows($result)==0)
							{
								echo "Incorrect Details!";
								header("location: login.htm?err=1&user=".$_POST['email']);
							}
							else
							{
								while($roww = mysqli_fetch_array($result))
										{
											$_SESSION['id']=$roww['id'];
											$_SESSION['name']=$roww['name'];
											$_SESSION['email']=$roww['email'];
											$_SESSION['type']=$roww['type'];
											if($roww['type']==1)
											{
												header("location: admin/dashboard/index.php?dashboard=1");
											}
											else
											{
												header("location: labs.php");
											}
											echo "Redirecting Please Wait!";
										}
							}
							?>