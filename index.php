<?php
#------------------------------------------------------------------------------------------#
#  Combwebchess                                                                            #
#  Copyright (c) Dr. R. Urban                                                              #
#  22.12.2014                                                                              #
#  Released under the MIT license                                                          #
#  https://github.com/antiproton                                                           #
#------------------------------------------------------------------------------------------#
/* load settings */
        if (!isset($_CONFIG))
                require 'includes/config.php';


?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

  <link rel="stylesheet" href="css/chessboard.css" />
   <link rel="stylesheet" href="css/style.css" />


<script src="js/json3.min.js"></script>
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/chessboard.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<title><?php echo $CFG_SITE_NAME?></title>


</head>

<body>

<div id="page">
	<div id="header"><div id="headerleft">
		<h1><a href="#"><?php echo $CFG_SITE_NAME?></a></h1></div>
	<div id="menulinks">
		<a href="#">Contact Us</a>
		<a href="#">Pricing</a>
		<a href="#">Services</a>
		<a class="active" href="#">Home</a>
	</div>
	</div>

	<div id="mainarea">
	<div id="contentarea">
		<h2>WELCOME</h2>
		<!-- start example HTML --->
<script src="js/chess.js"></script>
<div id="board" style="width: 400px"></div>
<!-- end example HTML --->

<script>
var init = function() {

//--- start example JS ---
var board,
  game = new Chess();

var makeRandomMove = function() {
  var possibleMoves = game.moves();

  // exit if the game is over
  if (game.game_over() === true ||
    game.in_draw() === true ||
    possibleMoves.length === 0) return;

  var randomIndex = Math.floor(Math.random() * possibleMoves.length);
  game.move(possibleMoves[randomIndex]);
  board.position(game.fen());

  window.setTimeout(makeRandomMove, 500);
};

board = new ChessBoard('board', 'start');

window.setTimeout(makeRandomMove, 500);
//--- end example JS ---

}; // end init()
$(document).ready(init);
</script>
<br><br>Dr. R. Urban
		<br>

	  </div>

	<div id="sidebar">
		<h2>LOGIN</h2>
		<form name="form1" method="post" action="">
		  <p>
		    <input type="text" name="textfield">
USER </p>
		  <p>
		    <input type="text" name="textfield">
		    PASS
		    <input type="submit" name="Submit" value="Senden">
		  </p>
		</form>
		<h2>&nbsp;</h2>
		<br/>
	  </div>
	</div>

	<div id="footer">
		<?php include "footer.php"; ?></div>


</div>

</body>

</html>