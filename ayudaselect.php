                    <Select  class="grado" name="grado" id="grado" onchange="myFunction()" >
                    </Select>
                    <Select  name="curso" id="curso" class="curso" onchange="myFunction()">
                    <!-- <option value="0"selected>Elija su curso</option> -->
                    </select>
<p id="demo"></p>
<script>
function myFunction() {
  var x = document.getElementById("grado").value;
  document.getElementById("demo").innerHTML = "You selected: " + x;
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous"></script>
		
    <script src="js/select.js"></script>
	<script src="js/popup.js"></script>