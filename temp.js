<script>
function myFunction() {
    alert("js alert box\nbutton via js");
} 
function myFunction2() {
    alert("js alert box\nonload via js");
} 

/* window.onload = myFunction2; */

function chatFix() {
  document.getElementById("test").setAttribute("name", "test via chatFix function js onload");
}
window.onload = chatFix;

$(document).ready( function() {
  /*$("#test").attr("name", "test-name-400");*/
  alert("alert box\nonload via jquery");
  /*jAlert('Example of a basic alert box in jquery', 'jquery basic alert box');*/
});

$(document).ready(function() {
  /*alert("alert box\nonload via jquery");*/
  /*jAlert('This is a custom alert box', 'Alert Dialog');*/
  /*$("#test").attr("style", "padding:3px;")*/
});

</script>
