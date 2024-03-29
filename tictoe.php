
  
<link rel='stylesheet prefetch' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,700;1,600&family=Lobster&family=Peddana&family=Piazzolla:wght@600&family=Sansita+Swashed:wght@800&family=Teko:wght@600&display=swap" rel="stylesheet">
<style>
.jumbotron
{
    background: url('img/1586351.jpg');
}


    
.cell{
  background-color: #111212;
  width: 200px;
  height: 200px;
  margin: 10px;
  font-size: 100px;
  color: white;
  text-align: center;
  line-height: 200px;
  border: 1 px solid #538887;
}
#main{
  min-height: 100%;
  min-height: 100vh;
  
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: 25%;
}
.nav-item a {
    color: black;
    text-decoration: none;
    font-size: 1.2rem;
    font-family: 'Kanit', sans-serif;
    
}

.klm
{
  border-bottom: 1px solid sienna;
  margin-left: 10%;
  margin-right: 10%;
  animation-name: emad;
  animation-duration: 2s;
  animation-iteration-count: infinite;
  margin-bottom: 2%;
}

@keyframes emad
{
  0%
  {
    color: brown;
  }
  10%{
    color: cornflowerblue;
  }
  30%
  {
    color: crimson;
  }
  50%
  {
    color: darkcyan;
  }
  70%
  {
    color: darksalmon;
  }
  90%
  {
    color: darkslateblue;
  }

  100%
  {
    color: khaki;
  }
}
.dropbtn {
    
    
    color: black;
    padding: 16px;
    font-size: 1.2rem;
    border: none;
    text-decoration: none;
  }
  
@media (max-width: 980px)
{
  #main{
  min-height: 100%;
  min-height: 40vh;
  
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: 15%;
}
.jio8
{
  padding: 30px;
}


}

  </style>


  
  <div class="jumbotron">

    <h1 class="text-center klm" style="color: black">TIC TOE GAME</h1>
    <h1 class="text-center text-dark">You Can Play Game</h1>
  <div id="main">
<div class="container-fluid">
<div class="row">
  <div class="col-xs-4 cell" id="c11">
  </div>
  <div class="col-xs-4 cell" id="c12">
  </div>
  <div class="col-xs-4 cell" id="c13">
  </div>
</div>
  <div class="row">
<div class="col-xs-4 cell" id="c21">
</div>
<div class="col-xs-4 cell" id="c22">
</div>
<div class="col-xs-4 cell" id="c23">
</div>
  </div>
  <div class="row">
<div class="col-xs-4 cell" id="c31">
</div>
<div class="col-xs-4 cell" id="c32">
</div>
<div class="col-xs-4 cell" id="c33">
</div>
  </div>
</div>
</div>
 
<div id="dialog-confirm" title="CHOOSE X OR O">
 
</div>

</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
 
    <script>
      var isX = true;
      var isValid = false;
var cells = [];
var player = 1;
var computer = 0;
var onMove = 1;
var result = "";
var intervalId;
 
$(document).ready(function(){
 
 
  $( "#dialog-confirm" ).dialog({
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "X": function() {
          isX = true;
          $( this ).dialog( "close" );
          startGame();
        },
        "O": function() {
          isX = false;
          $( this ).dialog( "close" );
          startGame();
        }
      }
    });
});
 
function startGame(){
  emptyCells();
  if(isX){
    player = 1;
    computer = 0;
  }else{
    player = 0;
    computer = 1;
  }
 
  var rnd = Math.round(Math.random());
    if(rnd === 1){
      onMove = player;
    }else{
      onMove = computer;
    }
 
 
  intervalId = setInterval(loop, 100);
 
 
}
 
function loop(){
 
 
 
 
  if(onMove === player){
      isValid = true;
    }else{
      computerMove();
      onMove = player;
    }
 
 
  $(".cell").on("click", function(){
  if(isValid){
 
    var sign = player === 0 ? "O" : "X";
 
    var i = $(this).attr("id")[1]-1;
    var j = $(this).attr("id")[2]-1;
    if(cells[i][j] === -1){
      cells[i][j] = player;
      $(this).html(sign);
      isValid = false;
    if(!whoWon(cells)){
   onMove = computer;
    }
    }
  }
});
 
 
 
    var winner = whoWon(cells);
    if(winner){
    if(winner === "computer"){
    alert("You Lost, Better Luck Next Time");
    }else{
    alert("Congratulation!! You Won");
      }
    result = winner;
    }
    else if(isTableFull(cells)){
     result = "Draw";
      alert("Match Is "+ result);
    }
    if(result !== ""){
    clearInterval(intervalId);
    result = "";
    cells = [];
    clearTable();
    startGame();
    }
}
 
 
function isTableFull(cells){
  for(var i in cells){
    for(var j in cells[i]){
      if(cells[i][j] === -1){
        return false;
      }
    }
    }
  return true;
}
 
function whoWon(cells){
  for(var i in cells){
    if(cells[i][0] !== -1 &&
       cells[i][1] !== -1 &&
       cells[i][2] !== -1 &&
       cells[i][0] === cells[i][1] && cells[i][0] === cells[i][2]){
      if(cells[i][0] === player){
        return "player";
      }
      else{
        return "computer";
      }
    }
    }
  for(var i in cells){
    if(cells[0][i] !== -1 &&
       cells[1][i] !== -1 &&
       cells[2][i] !== -1 &&
       cells[0][i] === cells[1][i] && cells[0][i] === cells[2][i]){
      if(cells[0][i] === player){
        return "player";
      }
      else{
        return "computer";
      }
    }
    }
 
  if((cells[0][0] !== -1 &&
      cells[1][1] !== -1 &&
      cells[2][2] !== -1 &&
      cells[0][0] === cells[1][1] &&
    cells[0][0] === cells[2][2]) ||
    (cells[0][2] !== -1 &&
     cells[1][1] !== -1 &&
     cells[2][0] !== -1 &&
    cells[0][2] === cells[1][1] &&
    cells[0][2] === cells[2][0])){
    if(cells[1][1] === player){
        return "player";
      }
      else{
        return "computer";
      }
  }
 
  return false;
}
 
 
 
function computerMove(){
  var arr = freeCells();
  var arr2 = bestMove();
  var sign = computer === 0 ? "O" : "X";
  var x = Math.round(Math.random()*arr.length);
 
  if(arr2.length >= 1){
    var i = arr2[0];
    var j = arr2[1];
  }else if(arr.length >= 1){
    var i = arr[x][0];
    var j = arr[x][1];
  }
  if((arr.length >= 1 || arr2.length >= 1) && cells[i][j] === -1){
    var a = parseInt(i) + 1;
    var b = parseInt(j) + 1;
    new Promise(function(resolve, reject){
      $("#c"+a+b).html(sign);
      resolve();
    }).then(function(){
       cells[i++][j++] = computer; })
    return 0;
  }
 
}
 
function freeCells(){
  var arr = [];
  for(var i in cells){
    for(var j in cells[i]){
    if(cells[i][j] === -1){
    arr.push([i,j]);
    }
    }
  }
  return arr;
}
 
function bestMove(){
  var computerInLine = 0;
  var playerInLine = 0;
  var a = 0;
  var maybe = null;
  //check rows
  for(var i in cells){
    for(var j in cells[i]){
    if(cells[i][j] !== -1){
    if(cells[i][j] === computer){
    computerInLine++;
    }else{
    playerInLine++;
    }
    }else{
    a = j;
    }
    }
    if(computerInLine === 2 && a !== 0){
    return [i, a];
    }else if(playerInLine === 2 && a !== 0){
    maybe = [i, a];
    }
    a = 0;
    computerInLine = 0;
    playerInLine = 0;
  }
 
  //check columns
 
  for(var j in cells){
    for(var i in cells[i]){
    if(cells[i][j] !== -1){
    if(cells[i][j] === computer){
    computerInLine++;
    }else{
    playerInLine++;
    }
    }else{
    a = i;
    }
    }
    if(computerInLine === 2 && a !== 0){
    return [a, j];
    }else if(playerInLine === 2 && a !== 0){
    maybe = [a, j];
    }
    a = 0;
    computerInLine = 0;
    playerInLine = 0;
  }
 
  //check diagonals
  var h = 0;
  a = -1;
  var b = -1;
  playerInLine = 0;
  computerInLine = 0;
  for(var k = 0; k < 3; k++){
    if(cells[k][h] !== -1){
    if(cells[k][h] === computer){
    computerInLine++;
    }else{
    playerInLine++;
    }
    }else{
    a = k;
    b = h;
    }
 
    if(computerInLine === 2 && a !== -1 && b !== -1){
    return [a, b];
    }else if(playerInLine === 2 && a !== -1 && b != -1){
    maybe = [a, b];
    }
 
    h++;
  }
 
  h = 0;
  a = -1;
  b = -1;
  playerInLine = 0;
  computerInLine = 0;
 
  for(var k = 2; k >= 0; k--){
    if(cells[k][h] !== -1){
    if(cells[k][h] === computer){
    computerInLine++;
    }else{
    playerInLine++;
    }
    }else{
    a = k;
    b = h;
    }
 
    if(computerInLine === 2 && a !== -1 && b !== -1){
    return [a, b];
    }else if(playerInLine === 2 && a !== -1 && b != -1){
    maybe = [a, b];
    }
 
    h++;
  }
 
 
 
  if(maybe !== null) return maybe;
 
  return [];
}
 
function clearTable(){
  for(var a = 1; a<= 3; a++){
    for(var b = 1; b<=3; b++){
    $("#c"+a+b).html("");
    }
  }
}
 
 
function emptyCells(){
  for(var a = 0; a < 3; a++){
    cells.push([-1,-1,-1]);
  }
}
    </script>

<script type="text/javascript" src="typed.js"></script>
    <script type="text/javascript">
          var typed = new Typed('.bestde', {
        strings: ["THIS IS A SAMPLE OF OUR TIC TOE GAME"],
        typeSpeed: 100,
        backSpeed: 100,
        loop:true,
      });
</script>

