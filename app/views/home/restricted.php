<!DOCTYPE html>
<html lang="en">
<body>

<div class="left_background">
    <div class="left_add"><span>Absolute greatest place for ads!</span></div>
</div>



<div class="centering_grid">



<h2>For the GET method</h2>
<button id="myButton">Make AJAX Call</button>
<div id="output"></div>


<br> <br> <br>

<h2>For the POST method</h2>
<form id="myForm">
  <button type="submit">Submit Form</button>
</form>

<script>
// JavaScript code
function makeAjaxCall(url, methodType) {
  // code for making the AJAX call goes here
    var xhr = new XMLHttpRequest();
    console.log("Ready state: " + xhr.readyState);
    xhr.open(methodType, url, true);
    xhr.send();
 
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Set the content of the element with the ID "output" to the response text
                document.getElementById("output").innerHTML = xhr.responseText;
                // console.log(xhr.responseText);
            } else {
                console.log("XMLHttpRequest error: " + xhr.statusText);
            }
        }
    }
}

// Add an event listener to the form
document.getElementById("myForm").addEventListener("submit", function(event) {
  // Prevent the form from submitting normally
  event.preventDefault();

  // Make the AJAX call
  makeAjaxCall('/api/users', 'POST');});

// Add an event listener to the button
document.getElementById("myButton").addEventListener("click", function() {

    // When the button is clicked, make the AJAX call
    makeAjaxCall('/api/users', 'GET');
});
</script>


<div class="right_background">
    <div class="right_add"><span>Absolute greatest place for ads!</span></div>
</div>

</body>
</html>