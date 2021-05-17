const nav =document.getElementById("nav")
const nav2 =document.getElementById("nav2")
const posYNav= nav.offsetTop;
const btnMenu=document.getElementById('btn-menu')
const a =document.getElementById('a')

/* const pour media query*/

const mediaQueryList = window.matchMedia("only screen and (max-width: 600px");


console.log(posYNav); 

   if(mediaQueryList.match){
      console.log('plus petit que 600px')

    window.addEventListener('scroll',()=>{
  
    
      if(window.scrollY > posYNav-0){
         nav.style.position='fixed';
         nav.style.alignItems='center';
        
         nav.style.top="0px";
        
      }else if (window.scrollY <posYNav){
         nav.style.position='';
   
   
      }
   
   
   
    }) 
   } else{
      console.log('plus grand que 600px')

   }




 /*animation du menu reposnsive */

 btnMenu.addEventListener('click',()=>{
    console.log("menu cliqué")
    nav2.classList.toggle('nav-reponsive');
 })

//  a.addEventListener('click',()=>{
//    //  console.log('cliquer sur le lien')
//      nav2.classList.toggle('nav-reponsive');
//  })

