<?php
header('Content-Type: application/xhtml+xml');

$customCSS = array('css/flashcards.css',
                   'css/jquery-ui-1.10.3_smooth.css');

include 'views/_header.tpl.php';

?>

	<div class="contentBox">
		<ul class="menu">
			<li><a href=".">Vocab</a></li>
			<li><a href="#!/addition">Addition Tables</a></li>
			<li><a href="#!/multitables">Multiplication Tables</a></li>
			<li><a href="#!/division">Division</a></li>
		</ul>
		<div class="inner">
			<div id="jumpListBox">Jump to
				<select id="listJumpBox">
				</select>
			</div>
			<h3 id="listtitle"><span id="title663"></span> Question #<span id="qNo"></span></h3>
			<h2 id="term"></h2>
			<div style="position: relative; height: 35px">
				<input type="text" id="def" class="typeInBox" name="def" accesskey="d" />
				<input type="text" id="defHint" class="typeOverBox" name="def" accesskey="d" />
			</div>
			<div id="showAnswerBox">
				<input type="checkbox" id="showAnswer" accesskey="s"/> <label for="showAnswer">Show answer</label>
				<input type="checkbox" id="alwaysShowHint" accesskey="a"/> <label for="alwaysShowHint">Always show answer</label>
			</div>
			<img class="wrongAnswer" style="display: none" src="images/exclaim.png"/>
			<div id="correctAnswer">
				<h4>Correct!</h4>
				<button class="red" style="font-weight: bold" id="next" accesskey="n">Next...</button>
			</div>
			<div id="wrongAnswer"><h4>Wrong! Try again.</h4></div>
			<div id="wonBox">
				<h2>Congratulations! You've won!</h2>
				<table class="score">
					<tr>
						<th>Cards</th>
						<td class="terms"></td>
					</tr>
					<tr>
						<th>Correct</th>
						<td class="correct"></td>
					</tr>
					<tr>
						<th>Wrong</th>
						<td class="wrong"></td>
					</tr>
				</table>
				<p>Go to the <a id="nextLessonLink" href="#" accesskey="n"><strong><label>next lesson</label></strong></a>, <br/>
				   or <strong><a href="javascript: randomizeLesson();" accesskey="r"><label>randomize</label></a></strong> the current flash cards and play again.</p>
			</div>
		</div>
	</div>
	<div id="progressbar"></div>
	<div class="contentBox">
		<div style="text-align: center">
			<div style="position: absolute; top: 10px; left: 15px"><button class="blue" id="randomizeList" accesskey="P" onclick="randomizeLesson();">Practice</button></div>
			<button class="red" id="startTestMode" accesskey="T">Test</button>
		</div>
	</div>
	<div class="contentBox" id="todoBox">
		<div class="inner">
			<h4>TODO List</h4>
			<?php include '_todo.php'; ?>
		</div>
	</div>
	<div id="dedication">Dedicated to Hudson Q. Lee</div>
	<script src="js/jquery.address-1.6.min.js"/>
	<script src="js/jquery-ui-1.10.3.min.js"></script>
	<script src="js/flashcards.js"/>
	<script src="js/accesskeys.js"/>

<?php
include 'views/_footer.tpl.php';

