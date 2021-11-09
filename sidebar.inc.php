
		
				
						
					<?php
                                        
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "job_portle";



                                            $link = mysqli_connect($servername, $username, $password, $dbname);
												
						$q="select * from categories";
                                                
						$res=mysqli_query($link,$q) or die("cant connect");
                                                
						while($row=mysqli_fetch_assoc($res))
						{
							echo '<li><a href="jobs_by_category.php?cat='.$row['cat_nm'].'">'.$row['cat_nm'].'</a></li>';
						}
						mysqli_close($link);
					?>
	
				</form>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
							



						</ul>
					</li>
					
				</ul>