let img = document.getElementsByClassName('selectBookImg');
let chekboxes = document.getElementsByClassName('fakeCheckBox');
let txt = document.getElementsByClassName('selText');

let checkCount = [];

for(let i = 0; i< img.length; i++){
    checkCount[i] = 0;
    
    img[i].addEventListener('click',()=>{ 
        if(checkCount[i]%2==0){
        chekboxes[i].style.display = 'block';
        document.getElementsByClassName('selectBookImg')[i].style.border = '4px solid #5ec35e';
        }else{
            chekboxes[i].style.display = 'none';
            document.getElementsByClassName('selectBookImg')[i].style.border = '4px solid white';
        }
        checkCount[i]++;
    })
}
for(let i = 0; i< txt.length;i ++){
        txt[i].addEventListener('click',()=>{
        if(checkCount[i + img.length - txt.length]%2==0){
        chekboxes[i + img.length - txt.length].style.display = 'block';
        document.getElementsByClassName('selectBookImg')[i + img.length - txt.length].style.border = '4px solid #5ec35e';
        }else{
            chekboxes[i + img.length - txt.length].style.display = 'none';
            document.getElementsByClassName('selectBookImg')[i + img.length - txt.length].style.border = '4px solid white';
        }
        checkCount[i + img.length - txt.length]++;
    })
}
document.getElementById('startQues').onmousemove = () => {
    return false
}
document.getElementById('startQues').onmousedown = () => {
    return false
}