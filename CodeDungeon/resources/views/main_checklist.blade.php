@extends('layout')

@section('content')

<div class="container">

	<div class="step-container">
		<h3>Welcome, {{ Auth::user()->first_name }}!</h3>
		<h3 class="application">Application ID: {{ $application->application_id }}

		<h2>Pre-work Checklist</h2>
		<div>
			Congratulations on taking the first step in becoming a Web Developer. You will find the 
			pre­work is arranged in mini­milestones. Each milestone has objectives for you to achieve. 
			Don't worry if you don't immediately understand the terms and concepts; we've included 
			materials in each milestone to help you learn.
		</div>

	</div>

	<div class="step-container">

			<h2>Step 0</h2>
			<h2>Setup Accounts</h2>
			
			<div>Please make an account at these websites if you don’t have one already:</div>
				<li>
					<form class="accounts-form" method="POST" action="/api/application_google/{application_id}" id="google"> 
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a href="http://plus.google.com/">Google Plus</a>:
						<label>Username</label>
						<input name="google_username" value="{{ $application->google_username }}">
						<button type="submit" class="btn btn-primary" name="google">Add</button>
					</form>
				</li>

				<li>
					<form class="accounts-form" method="POST" action="/api/application_github/{application_id}" id="github">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a href="http://github.com/">GitHub</a>:
						<label>Username</label>
						<input action="" name="github_username" value="{{ $application->github_username }}">
						<button type="submit" class="btn btn-primary" name="github">Add</button>
					</form>
				</li>

				<li>
					<form class="accounts-form" method="POST" action="/api/application_twitter/{application_id}" id="twitter">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a href="http://twitter.com/">Twitter</a>:
						<label>Username</label>
						<input name="twitter_username" value="{{ $application->twitter_username}}">
						<button type="submit" class="btn btn-primary" name="twitter">Add</button>
					</form>
				</li>
			
			<div class="incomplete">Incomplete</div>
			<div class="complete">Complete</div>

	</div>

	<div class="accordion">

		<div class="step-container" id="accordion-section">
			<a class="accordion-section-title" href="#step-1-content">
				<h2>Step 1</h2>
				<h2>Terminology</h2>
				
				<div class="incomplete">Incomplete</div>
				<div class="complete">Complete</div>
			</a>

			<div id="step-1-content" class="accordion-section-content active">
				Our industry is full of new terms for you to learn. Start off by reading the Programming Terminology and Conversations document to get started (In the pre­work folder) 
			</div>
		</div>
		
		<div class="step-container" id="accordion-section">
			<a class="accordion-section-title" href="#step-2-content">
				<h2>Step 2</h2>
				<h2>Sublime Text Editor</h2>
				
				<div class="incomplete">Incomplete</div>
				<div class="complete">Complete</div>
			</a>
			
			<div id="step-2-content" class="accordion-section-content">
				<div>
					When you come to class on the first day, we will need you to have a code editor installed on 
					your computer. Sublime Text editor is very popular in the web­development community.
					Download it here: <a href="http://www.sublimetext.com/3">http://www.sublimetext.com/3</a>
				</div>

				<h3>Objectives</h3>
				<ul>In this milestone, we hope you achieve the following objectives:
					<li>Install Sublime Text Editor</li>
					<li>Explain how settings are managed in Sublime</li>
				</ul>

				<h3>Review the following materials:</h3>
				<div>
					Below is a list of videos that will help you get familiar with Sublime and to learn the above 
					objectives. We know that you won’t understand every part of these two videos. That’s okay, 
					watch them anyways just to get started:
				</div>
					<li><a href="http://www.google.com/url?q=http%3A%2F%2Fcode.tutsplus.com%2Fcourses%2Fperfect-workflow-in-sublime-text-2%2Flessons%2Fwelcome&sa=D&sntz=1&usg=AFQjCNEZBFlUmBcHmzK2g5pTFhjDSyZr2A">
					Welcome</a></li>
					<li><a href="http://www.google.com/url?q=http%3A%2F%2Fcode.tutsplus.com%2Fcourses%2Fperfect-workflow-in-sublime-text-2%2Flessons%2Finstallation-and-base-settings&sa=D&sntz=1&usg=AFQjCNFpbo27lG0ZQJdA0VyVVZOPi9Jc_A">
					Installation and Base Settings</a></li>
			</div> 
				{{-- end Accordion Section/ Step 2 Content --}}
		</div>
		{{-- end Accordion Section/ Step 2 --}}

		<div class="step-container" id="accordion-section">
			<a class="accordion-section-title" href="#step-3-content">
				<h2>Step 3</h2>
				<h2>HTML Basic Concepts</h2>
				
				<div class="incomplete">Incomplete</div>
				<div class="complete">Complete</div>
			</a>
			<div id="step-3-content" class="accordion-section-content">
				<h3>Objectives</h3>
					<div>In this milestone, we hope you achieve the following objectives:</div>
					<ul>
						<li>Demonstrate opening and closing tag syntax</li>
							<li>Demonstrate empty tag (one-sided tags) syntax</li>
							<li>Know the purpose and syntax of these Inline Elements:</li>
							<ul>
								<li>&lt;span&gt; </li>
								<li>&lt;a&gt; </li>
								<li>&lt;img&gt; </li>
								<li>&lt;b&gt; </li>
								<li>&lt;strong&gt; </li>
								<li>&lt;i&gt; </li>
								<li>&lt;em&gt;</li>
								<li>&lt;u&gt;</li>
							</ul>
						<li>Know the purpose and syntax of these Block Elements</li>
							<ul>
								<li>&lt;div&gt; </li>
								<li>&lt;p&gt; </li>
								<li>&lt;h1&gt; </li>
								<li>&lt;ul&gt; </li>
								<li>&lt;ol&gt; </li>
								<li>&lt;li&gt; </li>
							</ul>
						<li>Describe how whitespace works in HTML</li>
					</ul>
					<h3>Review the following materials:</h3>
						<ul>
							<li>The <strong>HTML 1.1 Basic Concepts</strong> document in the <a href="http://www.google.com/url?q=http%3A%2F%2Fwww.w3schools.com%2Fhtml%2Fhtml_basic.asp&sa=D&sntz=1&usg=AFQjCNGlkuPYRBfaQIV-g_TOq7UduzQezQ">
								Pre-Work folder</a></li>
							<li><a href="http://www.google.com/url?q=http%3A%2F%2Fwww.w3schools.com%2Fhtml%2Fhtml_intro.asp&sa=D&sntz=1&usg=AFQjCNFK4gkGsLeDdLAcSJ5a6XzMiiE1pQ">
								HTML Intro</a></li>
							<li><a href="http://www.google.com/url?q=http%3A%2F%2Fwww.w3schools.com%2Fhtml%2Fhtml_basic.asp&sa=D&sntz=1&usg=AFQjCNGlkuPYRBfaQIV-g_TOq7UduzQezQ">
								HTML Basics</a></li>
						</ul>
					<h3>Code Academy Exercise</h3>
					<div>Navigate to <a href="http://www.codecademy.com/tracks/web">http://www.codecademy.com/tracks/web</a>. Instead of clicking the start button to 
						start all tracks, scroll down to see a list of available tracks. Below is a list of tracks we would 
						like you to complete: </div>
						<ul>
							<li>Introduction to HTML</li>
								<ul>
									<li>HTML Basics</li>
									<li>Build Your Own Webpage</li>
								</ul>
							<li>HTML Structure: Using Lists</li>
								<ul>
									<li>HTML Basics II</li>
									<li>Social Networking ProfileProject: My Bio Page</li>
								</ul>
						</ul>
					<h3>My Profile Project</h3>
					<div>
						Similar to your “Social Networking Profile” created at Code Academy, Create an HTML file 
						called myprofile.html that tells a little bit about yourself. Use Sublime Text Editor to create this 
						file.
					</div>
					<div>It should include:</div>
					<div>Name, favorite foods, where you grew up, hobbies, and a picture of yourself. For this small 
					project, do not do any CSS.</div>
					<div>Once you are complete, email myprofile.html to <a href="mailto:rockit@apollo.edu">rockit@apollo.edu</a>.</div>
			</div>
			{{-- end Accordion Section / Step 3 Content --}}
		</div>
		{{-- end Accordion Section / Step 3 --}}

		<div class="step-container" id="accordion-section">
			<a class="accordion-section-title" href="#step-4-content">
				<h2>Step 4</h2>
				<h2>CSS Basic Selectors</h2>
				
				<div class="incomplete">Incomplete</div>
				<div class="complete">Complete</div>
			</a>
			<div id="step-4-content" class="accordion-section-content">
				<h3>Objectives:</h3>
				
					<li>Define: Declaration, Declaration block, ruleset, property, value, and selector </li>
					<li>Use Tag, Class, and ID selectors </li>
					<li>Use individual and combination selectors </li>
					<li>Use Multiple Selectors (separated by commas) </li>
					<li>Use Descendant selectors </li>
					<li>Demonstrate Child selectors </li>
				
				<h3>Review the following materials</h3>
					<li>The CSS: 1.1 Basic Selectors document in the <a href="https://drive.google.com/drive/#folders/0Bx5x0ObRW281SjFJcXoxOWtMeU0/0Bx5x0ObRW281N0Y2R0dEOXJITXM">
						Pre­Work folder</a> </li>
					<li><a href="http://www.google.com/url?q=http%3A%2F%2Flearn.shayhowe.com%2Fhtml-css%2Fgetting-to-know-css%2F&sa=D&sntz=1&usg=AFQjCNEgWdkbsH9FwPFP0Te2dwcjMj5T1A">
						W3C ­- CSS</a> </li>
					<li><a href="http://www.google.com/url?q=http%3A%2F%2Flearn.shayhowe.com%2Fhtml-css%2Fgetting-to-know-css%2F&sa=D&sntz=1&usg=AFQjCNEgWdkbsH9FwPFP0Te2dwcjMj5T1A">
						Getting to know CSS</a></li>
					<li><a href="http://www.google.com/url?q=http%3A%2F%2Fcss-tricks.com%2Flittle-css-stuff-newcomers-get-confused-about%2F&sa=D&sntz=1&usg=AFQjCNEAmTNjccyD1MZ424UXkrx17x0khQ">
						Little CSS stuff newcomers get confused about </a></li>
				<h3>Code Academy</h3>
				<div>Navigate to <a href="http://www.codecademy.com/tracks/web">http://www.codecademy.com/tracks/web</a> and complete: </div>
				<ul>
					<li>Introduction to CSS </li>
					<ul>
						<li>CSS: An Overview </li>
						<li>Design a button for your website </li>
					</ul>
					<li>CSS Classes and IDs </li>
					<ul>
						<li>CSS Selector </li>
					</ul>
				</ul>
				 
				<h3>Project: My Bio Page Stylized</h3>
				<div>
					Using the previous My Bio Page that you created for the HTML Milestone, make as many 
					style changes to your bio as possible without considering how good it looks. The goal here is 
					to try to use as many different CSS properties as you know. 
					 
					Once you are complete, email the styled myprofile.html to <a href="mailto:rockit@apollo.edu">rockit@apollo.edu</a>.
				</div>
			</div>	
			{{-- end Accordion Section / Step 4 Content --}}
		</div>
		{{-- end Accordion Section / Step 4 --}}

		<div class="step-container" id="accordion-section">
			<a class="accordion-section-title" href="#step-5-content">
				<h2>Step 5</h2>
				<h2>Unix Basics</h2>
				
				<div class="incomplete">Incomplete</div>
				<div class="complete">Complete</div>
			</a>
			<div id="step-5-content" class="accordion-section-content">
				<div>
				Unix is an operating system which is the core of Linux Operating Systems and Mac OS X. It is 
				important to know basic Unix concepts to be good at web development. If you’re using a 
				Windows operating system then you don’t have Unix to practice on and you will need to use 
				this emulator instead:  <a href="http://www.bellard.org/jslinux/">http://www.bellard.org/jslinux/</a>
				</div>

				<h3>Objectives</h3>
					<li>Identify basic linux folder structure/directories </li>
					<li>Use file/directory commands (ls, cd, pwd, mkdir, rm, mv, cp, cat) </li>
					<li>Use Linux Help Commands (man, whatis) </li>
					<li>Explain intermediate commands (grep, head, tail) </li>
				
				<h3>Review the following materials</h3>
					<li>Unix / Linux 101 </li>
					<li>11 Unix Commands </li>
					<li>Play a game with Unix </li>

				<h3>More advanced materials for those that wish to go further</h3>
					<li>http://www.slideshare.net/TusharadriSarkar/a­quick­introduction­to­linux  </li>
					<li>http://www.ee.surrey.ac.uk/Teaching/Unix/ </li>
						<ul><li>keep reading past 1 &amp; 2</li></ul>
				<h3>Exercise: Explore the Shell</h3>
					<li>Print the current directory </li>
					<li>Move to /etc </li>
					<li>See what’s inside </li>
					<li>Move to home directory </li>
					<li>Exercise Find Hidden Directories </li>
					<li>Find many hidden directories in home note: hidden directories start with a . (dot) </li>
					<li>Exercise Using Help</li>
					<ul>
						<li>Run the command man ls</li>
						<li>Run the command info ls </li>
					</ul>
			</div>
			{{-- end Accordion Section / Step 4=5 Content --}}
		</div>
		{{-- end Accordion Section / Step 5 --}}

		<div class="step-container" id="accordion section">
			<a class="accordion-section-title" href="#step-6-content">
				<h2>Step 6</h2>
				<h2>Learning Git and GitHub</h2>
				
				<div class="incomplete">Incomplete</div>
				<div class="complete">Complete</div>
			</a>
			<div id="step-6-content" class="accordion-section-content">
				<div>
				Git is an amazing tool for managing code. It’s so amazing that practically every company that 
				develops code in any programming language uses Git. A body of code in Git is called a 
				<strong>repository</strong>. GitHub is a place for hosting Git Repositories so developers can collaborate on 
				teams. Imagine one developer makes changes to some code on their local computer, then 
				uses Git on their computer to <strong>push</strong> the code to GitHub. Now all the other developers on the 
				team can <strong>pull</strong> (or download) the code changes down to their local computers. 
				</div>

				<div>
				Git is typically managed through command­line. So make sure you learn some basic 
				command­line concepts before you start to learn Git. As a part of the bootcamp pre­work, 
				you’ll see some other assignments related to Unix which you should follow before you 
				continue to learn Git.
				</div>

				<h3>Objectives</h3>
					<li>Describe Git version control </li>
					<li>Understand basic Git commands: </li>
				<ul>
					<li>Use <em>git init</em> </li>
					<li>Use <em>git status</em> </li>
					<li>Use <em>git add</em> </li>
					<li>Use <em>git commit</em> </li>
					<li>Use <em>git log</em> </li>
				</ul>
				<h3>Materials</h3>
					<li>Watch these videos: </li>
				<ul>
					<li><a href="http://www.google.com/url?q=http%3A%2F%2Fgit-scm.com%2Fvideo%2Fwhat-is-version-control&sa=D&sntz=1&usg=AFQjCNGnRW4hSuTWkUxzHDuMLzYqYLnRFQ">
					What is Version Control</a> </li>
					<li><a href="http://www.google.com/url?q=http%3A%2F%2Fgit-scm.com%2Fvideo%2Fwhat-is-git&sa=D&sntz=1&usg=AFQjCNE9n-DL7O6I1s5cTYRRHQPF0Hfigg">
					What is Git</a> </li>
				</ul>
					<li>Complete the Try Git tutorial <a href="https://www.google.com/url?q=https%3A%2F%2Ftry.github.io%2Flevels%2F1%2Fchallenges%2F1&sa=D&sntz=1&usg=AFQjCNEh4cCUyx3fETi0Ihh1On6EqQXpOQ">
					Git Challenge</a>  </li>
				<ul>
					<li>Get to 1.9. Any further progress can be considered extra learning </li>
				</ul>
				<h3>Project: Github</h3>
				 <li>Create an account at GitHub <a href="https://github.com/">https://github.com/</a>  </li>
					<li>Create a repsository <a href="https://help.github.com/articles/create­a­repo">https://help.github.com/articles/createarepo</a></li>
					<li>Create a ReadMe file in your repository. Include a link to <a href="http://rockitbootcamp.com/">http://rockitbootcamp.com</a></li>
			</div>
		</div>
	</div>
	{{-- end Accordion --}}
</div>
@stop