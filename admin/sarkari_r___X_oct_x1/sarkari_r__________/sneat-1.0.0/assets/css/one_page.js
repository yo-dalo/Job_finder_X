/*

var open_page_1= document.getElementById('open_page_1');
var page_1= document.getElementById('page_1');

open_page_1.addEventListener('click',() => {
   page_1.style.display='block';
      

   
   close_left_nav
})

*/

var all_page = document.getElementsByClassName('all_page');
var all_open_btn = document.getElementsByClassName('all_open_btn');
var close_left_nav = document.getElementById('close_left_nav');

var page_1_open = document.getElementById('page_1_open');
var page1 = document.getElementById('page1');
var page_2_open = document.getElementById('page_2_open');
var page2 = document.getElementById('page2');
var page_3_open = document.getElementById('page_3_open');
var page3 = document.getElementById('page3');
var page_4_open = document.getElementById('page_4_open');
var page4 = document.getElementById('page4');
var page_5_open = document.getElementById('page_5_open');
var page5 = document.getElementById('page5');
var page_6_open = document.getElementById('page_6_open');
var page6 = document.getElementById('page6');


function open_page(page_id_open, pageid) {

   page_id_open.addEventListener('click', () => {

      for (let i = 0; i < all_page.length; i++) {
         all_page[i].style.display = 'none';
      }

      for (let i = 0; i < all_open_btn.length; i++) {
         let deactivate = all_open_btn[i].closest('li');
         if (deactivate) {
            deactivate.classList.remove('active');
         }
      }

      pageid.style.display = 'block';
      let activate = page_id_open.closest('li');
      if (activate) {
         activate.classList.add('active');
      }

      setTimeout(() => {
         close_left_nav.click();


      }, 100)


   });

}






open_page(page_1_open, page1)
open_page(page_2_open, page2)
open_page(page_3_open, page3)

/*

page_1_open.addEventListener('click',() => {
  
  
   for (var i=0;i<all_page.length;i++) {
        all_page[i].style.display='none';
        
       
      //console.log(i);
   }
   
      for (var i = 0; i < all_open_btn.length; i++) {
         var deactivate = all_open_btn[i].closest('li');
         //console.log(deactivate);
         activate.removeAttribute('class','active');
   
         //console.log(i);
      }
   
   
   
   

  page1.style.display='block';
var activate = page_1_open.closest('li');
activate.classList.add('active');
});



page_2_open.addEventListener('click', () => {
  
     for (var i=0;i<all_page.length;i++) {
        all_page[i].style.display='none';
        
      //console.log(i);
   }

  page2.style.display = 'block';
  //var activate = document.querySelector('.menu-item');
  //activate.classList.add('active');
 
var activate = page_2_open.closest('li');
activate.classList.add('active');
  //console.log(page_2_open.closest('li'));
  
  
});







page_3_open.addEventListener('click', () => {

        for (var i = 0; i < all_page.length; i++) {
                all_page[i].style.display = 'none';
                //console.log(i);
        }

        page3.style.display = 'block';
});


page_4_open.addEventListener('click', () => {

        for (var i = 0; i < all_page.length; i++) {
                all_page[i].style.display = 'none';
                //console.log(i);
        }

        page4.style.display = 'block';
});



page_5_open.addEventListener('click', () => {

        for (var i = 0; i < all_page.length; i++) {
                all_page[i].style.display = 'none';
                //console.log(i);
        }

        page5.style.display = 'block';
});

page_6_open.addEventListener('click', () => {

   for (var i = 0; i < all_page.length; i++) {
      all_page[i].style.display = 'none';
      //console.log(i);
   }

   page6.style.display = 'block';
});






var success_smg=document.getElementById('success_smg');

function show_success_smg(smg){
      var success_smg=document.getElementById('success_smg');
      success_smg.style.display='block';
      success_smg.innerHTML=`${smg}`;
      setTimeout(() => {
      success_smg.style.display='none';
      },3500)

};

*/