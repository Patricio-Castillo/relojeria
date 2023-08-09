let imgArticulo=document.querySelector('.img-articulo');
let masImg=document.getElementsByClassName('otra-img');
for(let i=0;i<masImg.length;i++){
    masImg[i].addEventListener('click',()=>{
        imgArticulo.src=masImg[i].src;
    });
}