<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="form-style.css">
<title>InSpiral Dance Company Finland Grades 2016</title>

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

<h2>InSpiral Dance Company Finland Grades registration form</h2>

                  
<form id="create1" method="post" action="grades.php">
<table>
<tr><td class='otsikko' colspan=2> Basic information</td></tr>
    <tr>
        <td>Firstname: </td>
        <td><input type="text" name="firstname" required></td>
    <tr>

    <tr>
        <td>Lastname: </td>
        <td><input type="text" name="lastname" required></td>
    </tr>

        <td>Date of birth</td>
        <td><input type='date' name='birthday' required></td>
    </tr>
        <td>E-mail address</td>
        <td><input type='text' name='email' required></td>
    <tr>
     </tr>
        <td>Address</td>
        <td><input type='text' name='address'></td>
    <tr>
        <td>Mobile phone number (incl. country code)</td>
        <td><input type='text' name='phone'></td>
    </tr>

     <tr>
        <td>Dance school</td>
        <td><input type='text' name='danceschool' required></td>
    </tr>

  



  
</table>



        

<p>



   <table>
<tr>
    <td class='otsikko' colspan=6>Grades</td>
</tr>
  <tr>
    <th>Prelim</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
  </tr>

  <tr>
  <td><input type='hidden' name='prelim' value='0'><input type='checkbox' name='prelim' value='1'></td>
  <td><input type='hidden' name='one' value='0'><input type='checkbox' name='one' value='1'></td>
  <td><input type='hidden' name='two' value='0'><input type='checkbox' name='two' value='1'></td>
  <td><input type='hidden' name='three' value='0'><input type='checkbox' name='three' value='1'></td>
  <td><input type='hidden' name='four' value='0'><input type='checkbox' name='four' value='1'></td>
  <td><input type='hidden' name='five' value='0'><input type='checkbox' name='five' value='1'></td>
  <td><input type='hidden' name='six' value='0'><input type='checkbox' name='six' value='1'></td>
  <td><input type='hidden' name='seven' value='0'><input type='checkbox' name='seven' value='1'></td>
  <td><input type='hidden' name='eight' value='0'><input type='checkbox' name='eight' value='1'></td>
  <td><input type='hidden' name='nine' value='0'><input type='checkbox' name='nine' value='1'></td>
  <td><input type='hidden' name='ten' value='0'><input type='checkbox' name='ten' value='1'></td>
  </tr>
</table>
<p>
<table>
  <tr>
  <td colspan=3 class='otsikko'>Please indicate all suitable times (Saturday, October 22nd)</td>
  </tr>
  <td>12noon-3pm</td>
  <td>3pm-6pm</td>
  <td>6pm-9pm</td>
</tr>
<tr>
<td><input type='hidden' name='noontothree' value='0'><input type='checkbox' name='noontothree' value='1'></td>
 <td><input type='hidden' name='threetosix' value='0'><input type='checkbox' name='threetosix' value='1'></td>
  <td><input type='hidden' name='sixtonine' value='0'><input type='checkbox' name='sixtonine' value='1'></td>
</tr>
  </table>
  <p>
<table>
  <tr>
  <td>Parent's name & contact for under 18</td>
  <td><input type='text' name='parent'></td>
  <tr>

  </table>
<p>
  <table>
  <tr>
  <td>Additional information</td>
<td><input type="textarea" name="more"></td>
  </tr>

  </table>
</p>
<p>
  Problems or questions? Please send email to inspiralhelsinki@gmail.com 
</p>

    

   

  

    <input class="submit" type="submit" value="Send">





</form>


  








</body>
</html>