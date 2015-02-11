							<?php
								$thumal=strtolower($_GET["thumal"]);
								$thumalentu=simplexml_load_file("data.xml");
									foreach($thumalentu -> thupui as $thumalhmu){
										print "<b>".ucfirst($thumal)."</b><br>";
										if($thumalhmu -> $thumal==''){
											print "<font color=red>I thumal zawn sawifiahna hi kan la nei lo tlat!</font>";
										}else{
											print "<em>".$thumalhmu -> $thumal."</em>";
										}
										
								}
							?>
