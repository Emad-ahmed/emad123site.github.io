<?php include 'navbar.php' ?>


<style>
.title{
border-radius: 10px;
margin-bottom: 10px;
text-align:center;
width: 210px;
color:#ff4456;
border: solid black 1px;
}

table
{
    display: flex;
    justify-content: center;
    margin-top: 5%;
    
}
input[type="button"]
{
border-radius: 10px;
background-color:#111212;
color: whitesmoke;
border-color:#538887;
width: 17rem;
height: 5rem;
font-size: 3rem;
}
input[type="text"]
        {
        border-radius: 10px;
        text-align: right;
        color: white;
        border-color: khaki;
        width: 100%;
        font-size: 3rem;
        color: rgb(245, 240, 239);
        background-color: #354443;
        text-align: center;
        height: 5rem;
        }

@media (max-width: 980px)
{
  input[type="text"]
        {
        border-radius: 10px;
        text-align: right;
        color: white;
        border-color: khaki;
        width: 100%;
        font-size: 1rem;
        color: rgb(245, 240, 239);
        background-color: #354443;
        text-align: center;
        height: 3rem;
        }

  input[type="button"]
    {
    border-radius: 4px;
    background-color:#111212;
    color: whitesmoke;
    border-color:#538887;
    width: 3.4rem;
    height: 3.4rem;
    font-size: 1rem;
    }
}

@media (max-width: 980px)
{
  input[type="text"]
        {
        border-radius: 10px;
        text-align: right;
        color: white;
        border-color: khaki;
        width: 100%;
        font-size: .8rem;
        color: rgb(245, 240, 239);
        background-color: #354443;
        text-align: center;
        height: 3.5rem;
        }

  input[type="button"]
    {
    border-radius: 4px;
    background-color:#111212;
    color: whitesmoke;
    border-color:#538887;
    width: 3.9rem;
    height: 3.4rem;
    font-size: 1rem;
    }
    .jumbotron
    {
      height: 1000px;
    }
}

</style>


    
<div class="jumbotron" style="background: blanchedalmond;">

    <h1 class="text-center" style="color: #F44747;">Simple Calculator</h1>

        <table>
        <tr>
        <td><input type="button" style="background-color: #1F2424;" value="c" onclick="clr()"/> </td>
        <td colspan="3"><input type="text" id="edu"/></td>
        <!-- clr() function will call clr to clear all value -->
        </tr>
        <tr>
        <!-- creating buttons and assigning values-->
        <td><input type="button" style="background-color: #1F2424;" value="+" onclick="dis('+')"/> </td>
        <td><input type="button" value="1" onclick="dis('1')"/> </td>
        <td><input type="button" value="2" onclick="dis('2')"/> </td>
        <td><input type="button" value="3" onclick="dis('3')"/> </td>
        </tr>
        <tr>
        <td><input type="button" style="background-color: #1F2424;" value="-" onclick="dis('-')"/> </td>
        <td><input type="button" value="4" onclick="dis('4')"/> </td>
        <td><input type="button" value="5" onclick="dis('5')"/> </td>
        <td><input type="button" value="6" onclick="dis('6')"/> </td>
        </tr>
        <tr>
        <td><input type="button" style="background-color: #1F2424;" value="*" onclick="dis('*')"/> </td>
        <td><input type="button" value="7" onclick="dis('7')"/> </td>
        <td><input type="button" value="8" onclick="dis('8')"/> </td>
        <td><input type="button" value="9" onclick="dis('9')"/> </td>
        </tr>
        <tr>
        <td><input type="button" style="background-color: #1F2424;" value="/" onclick="dis('/')"/> </td>
        <td><input type="button" value="." onclick="dis('.')"/> </td>
        <td><input type="button" value="0" onclick="dis('0')"/> </td>
        <!-- Evaluating function call eval()-->
        <td><input type="button" value="=" onclick="solve()"/> </td>
    </tr>
</table>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script>
        //function for displaying values
        function dis(val)
        {
        document.getElementById("edu").value+=val
        }
        //function for evaluation
        function solve()
        {
        let x = document.getElementById("edu").value
        let y = eval(x)
        document.getElementById("edu").value = y
        }
        //function for clearing the display
        function clr()
        {
        document.getElementById("edu").value = ""
        }
        </script>
    
    <script type="text/javascript" src="typed.js"></script>
    <script type="text/javascript">
          var typed = new Typed('.bestde', {
        strings: ["THIS IS A SAMPLE OF OUR CALCULATOR PROJECT"],
        typeSpeed: 100,
        backSpeed: 100,
        loop:true,
      });
    </script>
    <script>
      var bleep = new Audio()
     bleep.src = "this is.mp3";
   </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  