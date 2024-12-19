console.log('Hello World!');


var right_nav = document.getElementById("right_nav");


function yy() {

   for (var i = 1; 9 > i; i++) {

      setTimeout(function() {
         right_nav.style.width = `${i*10}%`;
      }, 300)


   }

}


function yyt() {
   for (var i = 1; i < 10; i++) {
      (function(index) {
         setTimeout(function() {
            right_nav.style.width = `${index * 10}%`;
         }, 300 * index);
      })(i);
   }
}


let input= document.createElement('input');
input.setAttribute('type','range');

let body = document.querySelector('body');

body.appendChild(input);

input.addEventListener("touchmove",function(){
   
  //input.value=body.style.width;
   screen.width=`${10}`
   console.log(input.value)
   
})











