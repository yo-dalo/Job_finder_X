var all_page=document.getElementsByClassName('all_page');
var page_1_open=document.getElementById('page_1_open');
var page1=document.getElementById('page1');
var page_2_open=document.getElementById('page_2_open');
var page2=document.getElementById('page2');
var page_3_open=document.getElementById('page_3_open');
var page3=document.getElementById('page3');
var page_4_open=document.getElementById('page_4_open');
var page4=document.getElementById('page4');
var page_5_open=document.getElementById('page_5_open');
var page5=document.getElementById('page5');
var page_6_open=document.getElementById('page_6_open');
var page6=document.getElementById('page6');


page_1_open.addEventListener('click',() => {
  
  
   for (var i=0;i<all_page.length;i++) {
        all_page[i].style.display='none';
        
       
      //console.log(i);
   }

  page1.style.display='block';
  
});

page_2_open.addEventListener('click', () => {
  
     for (var i=0;i<all_page.length;i++) {
        all_page[i].style.display='none';
      //console.log(i);
   }

  page2.style.display = 'block';
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




