<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="form-style.css">
<meta charset="UTF-8">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
$(document).ready(function() {
$('#create1').submit(function() { // catch the form's submit event
    $.ajax({ // create an AJAX call...
        data: $(this).serialize(), // get the form data
        type: $(this).attr('method'), // GET or POST
        url: $(this).attr('action'), // the file to call
        success: function(response) { // on success..
            $('#created1').html(response); // update the DIV
        }
    });
    return false; // cancel original event to prevent form submitting
});
});



</script>




<div id="created1">



                  
<form id="create1" method="post" action="feis.php">
<h1>InSpiral Dance Company Finland Class Feis registration form</h1>
<table>
    <tr>
        <td>Etunimi / Firstname: </td>
        <td><input type="text" name="firstname" required></td>
    <tr>

    <tr>
        <td>Sukunimi / Lastname: </td>
        <td><input type="text" name="lastname" required></td>
    </tr>

        <td>Syntymäaika / Date of birth</td>
        <td><input type='date' name='birthday' required></td>
    </tr>
        <td>Sähköposti / E-mail:</td>
        <td><input type='text' name='email' required></td>
    <tr>
        <td>Puhelinnumero / Phonenumber:</td>
        <td><input type='text' name='phone'></td>
    </tr>

    <tr>
        <td>Kaupunki / City</td>
        <td>
        <select name='city' class='select'>
        <option value=""></option>
        <option value="Helsinki">Helsinki</option>
        <option value="Tampere">Tampere</option>
        <option value="Turku">Turku</option>
        <option value="Other">Muu / Other</option>
        </select>
        </td>
    </tr>



  
</table>



        

<p>

<h2>Soolotanssit / Solo dances</h2>

   <table>

  <tr>
    <th>Tanssi / Dance</th>
    <th>Beginner</th>
    <th>Primary</th>
    <th>Intermediate / Open</th>
    <th colspan="2"></th>
    
  </tr>
  <tr>
    <td>Reel</td>
    <td class='checkbox'><input type='hidden' name='reelbeginner' value=''><input type='checkbox' name='reelbeginner' value='1'></td>
    <td class='checkbox'><input type='hidden' name='reelprimary' value='0'><input type='checkbox' name='reelprimary' value='1'></td>
    <td class='checkbox'><input type='hidden' name='reelintopen' value='0'><input type='checkbox' name='reelintopen' value='1'></td>
    <td colspan=2></td>
   
    
  </tr>
   <tr>
    <td>Slipjig</td>
    <td class='checkbox'><input type='hidden' name='slipjigbeginner' value='0'><input type='checkbox' name='slipjigbeginner' value='1'></td>
    <td class='checkbox'><input type='hidden' name='slipjigprimary' value='0'><input type='checkbox' name='slipjigprimary' value='1'></td>
    <td class='checkbox'><input type='hidden' name='slipjigintopen' value='0'><input type='checkbox' name='slipjigintopen' value='1'></td>
    <td colspan=2></td>
   
  </tr>
  <tr>
    <td>Lightjig</td>
    <td class='checkbox'><input type='hidden' name='lightjigbeginner' value='0'><input type='checkbox' name='lightjigbeginner' value='1'></td>
    <td class='checkbox'><input type='hidden' name='lightjigprimary' value='0'><input type='checkbox' name='lightjigprimary' value='1'></td>
    <td colspan=3></td>
   
  </tr>
  <tr>
    <td>Singlejig</td>
    <td class='checkbox'><input type='hidden' name='singlejigbeginner' value='0'><input type='checkbox' name='singlejigbeginner' value='1'></td>
    <td class='checkbox'><input type='hidden' name='singlejigprimary' value='0'><input type='checkbox' name='singlejigprimary' value='1'></td>
    <td colspan=3></td>
    
  </tr>
 
  <tr>
    <td>Heavyjig</td>
    <td class='checkbox'><input type='hidden' name='heavyjigbeginner' value="0"><input type='checkbox' name='heavyjigbeginner' value='1'></td>
    <td class='checkbox'><input type='hidden' name='heavyjigprimary' value="0"><input type='checkbox' name='heavyjigprimary' value='1'></td>
    <td class='checkbox'><input type='hidden' name='heavyjigintopen' value="0"><input type='checkbox' name='heavyjigintopen' value='1'></td>
    <td colspan=2></td>
  </tr>
  
  <tr>
    <td>Hornpipe</td>
    <td class='checkbox'><input type='hidden' name='hornpipebeginner' value="0"><input type='checkbox' name='hornpipebeginner' value='1'></td>
    <td class='checkbox'><input type='hidden' name='hornpipeprimary' value="0"><input type='checkbox' name='hornpipeprimary' value='1'></td>
    <td class='checkbox'><input type='hidden' name='hornpipeintopen' value="0"><input type='checkbox' name='hornpipeintopen' value='1'></td>
    <td colspan=2></td>
    
  </tr>

        <td>Traditional Set Dance</td>

        <td class='checkbox' colspan=2><input type='hidden' name='tradsetbeginnerprimary' value='0'><input type='checkbox' name='tradsetbeginnerprimary' value='1'>
        <td class='checkbox'><input type='hidden' name='tradsetintopen' value='0'><input type='checkbox' name='tradsetintopen' value='1'>

        <td colspan="2">
        <select name='tradsetname' class='select'>
        <option value="">Valitse tanssi / choose dance</option>
        <option value="st Patricks Day">St. Patrick's Day</option>
        <option value="Blackbird">Blackbird</option>
        <option value="Job of Journeywork">Job of Journeywork</option>
        <option value="Garden of Daisies">Garden of Daisies</option>
        <option value="King of the Fairies">King of the Fairies</option>
        <option value="Jockey to the Fair">Jockey to the Fair</option>
        <option value="Three Sea Captains">Three Sea Captains</option>
        </td>
       
   

    </tr>

    <tr>
        <td>Modern Set Dance</td>
        <td colspan=2></td>
        <td class='checkbox'><input type='hidden' name='modernsetdance' value='0'><input type='checkbox' name='modernsetdance' value='1'></td>
        <td><input type="text" name='modernsetname' placeholder="tanssin nimi / name of the dance"></td>
        <td><input type='text' class="nopeus" name='modernsetspeed' placeholder="nopeus / speed">
    </tr>

    <tr>
    <td>Treble Reel (All levels)</td>
    <td colspan=3 class='checkbox'><input type='hidden' name='treblereel value='0'><input type='checkbox' name='treblereel' value='1'></td>
    <td colspan="2"></td>
    </tr>
</table>
</p>
<table>
<p>
<h2>Ryhmätanssit / Team dances</h2>
<p>
<i>Kaikki tiimin jäsenet ilmoittautuvat omalta osaltaan. Tanssin nimi sekä lista tiimin tanssijoista riittää yhdeltä tiimin jäseneltä.<br>All team members register themselves. The name of the dance and list of all team members needs to be submitted by one team member only.</i>
</p>
</p>

<tr>
<tr>
<td>2 Hands</td>
<td><input type='hidden' name='twohands' value='0'><input type='checkbox' name='twohands' value='1'></td>
<td></td>
<td><input type='textarea' class='ikkuna' name='twohandsmembers' placeholder=" tiimin jäsenet / team members"></td>
</tr>

<td>3 Hands</td>
<td><input type='hidden' name='threehands' value='0'><input type='checkbox' name='threehands' value='1'></td>
<td></td>
<td><input type='textarea' class='ikkuna' name='threehandsmembers' placeholder=" tiimin jäsenet / team members"></td>
</tr>

<tr>
<td>4 Hands</td>
<td><input type='hidden' name='fourhands' value='0'><input type='checkbox' name='fourhands' value='1'></td>
<td><input type='text' name='fourhandsname' placeholder="tanssin nimi / name of the dance"></td>
<td><input type='textarea' class='ikkuna' name='fourhandsmembers' placeholder=" tiimin jäsenet / team members"></td>
</tr>

<tr>
    <td>6 hands</td>
    <td><input type='hidden' name='sixhands' value='0'><input type='checkbox' name='sixhands' value='1'></td>
    <td><input type='text' name='sixhandsname' placeholder="tanssin nimi / name of the dance"></td>
    <td><input type='textarea' class="ikkuna" name='sixhandsmembers' placeholder=" tiimin jäsenet / team members"></td>
</tr>

<tr>
    <td>8 hands</td>
    <td><input type='hidden' name='eighthands' value='0'><input type='checkbox' name='eighthands' value='1'></td>
    
    <td><input type='text' name='eighthandsname' placeholder="tanssin nimi / name of the dance"></td>
    <td><input type='textarea' class="ikkuna" name='eighthandsmembers' placeholder=" tiimin jäsenet / team members"></td>
</tr>
</table>
<p>


<table class='muut'>
    <tr>
        
        <td>Katsojaliput / Ticket's for spectators (5e)</td>
        <td><select name='tickets' class="numero">
        <option value=""></option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        <option value=6>6</option>
        <option value=7>7</option>
        <option value=8>8</option>
        <option value=9>9</option>
        <option value=10>10</option>

        </select>
    </tr>
</table> 
<p>
<table class='muut'>
<tr>
<td>Lisätietoja / Additional information: </td>
<td><input type='textarea' name='more'></td>
</table>
<p>
 <input type="submit" value="Lähetä">

</form>


  








</body>
</html>