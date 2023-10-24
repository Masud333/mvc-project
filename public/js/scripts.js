/**
 * This file simply proves that we can import our own javascript from views.
 * This file is included from app/views/partials/footer
 * 
 */

function showModal() {
    // Get the modal
    var modal = document.getElementById("myModal");
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on the button, open the modal
    btn.onclick = function() {
    modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }  
}




// document.getElementById("firstname").value = getSavedValue("firstname");  // set the value to this input
// document.getElementById("lastname").value = getSavedValue("lastname");   // set the value to this input
// document.getElementById("username").value = getSavedValue("username");   // set the value to this input



// //Save the value function - save it to localStorage as (ID, VALUE)
// function saveValue(e){
//     var id = e.id;  // get the sender's id to save it . 
//     var val = e.value; // get the value. 
//     sessionStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
// }

// //get the saved value function - return the value of "v" from localStorage. 
// function getSavedValue  (v){
//     if (!sessionStorage.getItem(v)) {
//         return "";// You can change this to your defualt value. 
//     }
//     return sessionStorage.getItem(v);
// }


// document.getElementsByClassName("box").addEventListener("click"), function() {
//     this.remove();
// }





// function makeAjaxCall(url, methodType) {
//     var xhr = new XMLHttpRequest();
//     xhr.open(methodType, url, true);
//     xhr.send();
 
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4) {
//             if (xhr.status === 200) {
//                 console.log(xhr.responseText);
//             } else {
//                 console.log("XMLHttpRequest error: " + xhr.statusText);
//             }
//         }
//     }
//  }
 
//  // Example usage: make an HTTP GET request to the URL '/api/data'
//  makeAjaxCall('/api/data', 'GET');