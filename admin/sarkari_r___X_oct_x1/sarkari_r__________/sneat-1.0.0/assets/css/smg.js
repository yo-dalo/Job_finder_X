//var success_smg = document.getElementById('success_smg');

function show_success_smg(smg) {
   var success_smg = document.createElement('div');
   success_smg.setAttribute('class', 'alert alert-success');
   success_smg.setAttribute('role', 'alert');
   success_smg.setAttribute('id', 'success_smg');
   document.body.appendChild(success_smg);


   success_smg.style.display = 'block';
   success_smg.innerHTML = `${smg}`;
   setTimeout(() => {
      success_smg.style.display = 'none';
   }, 3500)

};

/*


            */
            
            
  function showSuccessMessage(message) {
   // Check if the message is valid
   if (!message) {
      console.error('Invalid message provided.');
      return;
   }

   // Get the success_smg element from the HTML
   var success_smg = document.getElementById('success_smg');

   if (!success_smg) {
      console.error('Element with id "success_smg" not found in the HTML.');
      return;
   }

   // Set the message and display the element
   success_smg.innerHTML = message;
   success_smg.style.display = 'block';

   // Automatically hide after 3.5 seconds
   setTimeout(() => {
      success_smg.style.display = 'none';
   }, 3500);
}



function clearForm(form_id) {
  var form = document.querySelector(form_id);
  form.reset();
}


function closeModal(modalId) {
    document.querySelector(modalId).click();
}


function action_tr(){
var action = document.querySelector(".dropdown");
var closestTr = action.closest('tr');
if (closestTr) {
  closestTr.style.background = 'green';
}
}
