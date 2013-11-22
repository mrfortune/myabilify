			<header>
				<div class="container">
					<h1 class="tos">
						<a href="/hcp">
							<?php
								//Use the $template variable to decide which logo should be presented here..
								echo '<img src="src/img/master/abilify.tablet.oral.logo.png" width="225" alt="Abilify (aripiprazole) TABLETS and ORAL SOLUTION 1mg/mL">';
							?>
						</a>
					</h1>
					<div class="black-box-warning">
						<p class="navy">IMPORTANT SAFETY INFORMATION<br><a href="#">US FULL PRESCRIBING INFORMATION, including Boxed WARNINGS</a>, and <a href="#">Medication Guide</a>
						<p>Elderly patients with dementia-related psychosis treated with antipsychotic drugs are at an increased risk of death. ABILIFY is not approved for the treatment of patients with dementia-related psychosis.</p>
						<p><a class="scroll-to" href="#isi">IMPORTANT SAFETY INFORMATION CONTINUED BELOW</a></p>
					</div>
					<div class="utility">
						<nav>
							<ul>
								<li><a href="#">Patient Site</a></li>
								<li class="last-child"><a href="#">ABILIFYAssist</a></li>
							</ul>
						</nav>
						<p class="light-blue center"><strong>For US Healthcare Professionals</strong></p>
						<form>
							<div>
								<input type="text" value="" placeholder="Search">
								<input type="submit" value="GO">
								<div class="clear"></div>
							</div>
						</form>
					</div>
					<div class="clear"></div>
					<nav class="main">
						<ul>
							<?php
								$array = array("mdd" => "Major Depressive Disorder (MDD) Adjunctive Therapy in Adults",
								 "abi-adjunctive" => "Bipolar I Disorder, Manic or Mixed, Adjunctive Therapy in Adults",
								 "abi-monotherapy" => "Bipolar I Disorder, Manic or Mixed, Monotherapy in Adults",
								 "schizophrenia" => "Schizophrenia<br>in Adults",
								 "pbi" => "Pediatric<br>Bipolar I Disorder, Manic or Mixed (Ages 10 to 17 years)",
								 "adolescent-schizophrenia" => "Adolescent Schizophrenia (Ages 13 to<br>17 years)",
								 "autistic" => "Irritability Associated with Autistic Disorder (Ages 6 to<br>17 years)",
								 "resources" => "Professional Resources");
								 
								 foreach ($array as $key=>$title) {
								 	echo '<li';
								 	if ($template == $key) { echo ' class="selected"'; };
								 	echo '><a href="abilify.php?' . $key . '" data-hover-indication="' . $key . '">' . $title . '<br></a></li>
								 	';
								 }
							?>
						</ul>
				
						<div class="hover-indications">
							<p data-indication="mdd">ABILIFY<sup>&reg;</sup> (aripiprazole) is indicated for use as an adjunctive therapy to<br>antidepressants in adults with Major Depressive Disorder who have had<br>an inadequate response to antidepressant therapy.</p>
							<p data-indication="abi-adjunctive">Adult Bipolar I Disorder, Manic or Mixed, Adjunctive Therapy Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p data-indication="abi-monotherapy">Adult Bipolar I Disorder, Manic or Mixed, Monotherapy Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p data-indication="schizophrenia">Adult Schizophrenia Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p data-indication="pbi">Pediatric Bipolar I Disorder, Manic or Mixed (Ages 10 to 17 years) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p data-indication="adolescent-schizophrenia">Adolescent Schizophrenia (Ages 13 to 17 years) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p data-indication="autistic">Irritability Associated with Autistic Disorder (Ages 6 to 17 years) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p data-indication="resources">Professional Resources Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</nav>
				</div>
			</header>
			