z=0;

function slider(){
    let images1=document.getElementById("images");
    
    if(z==4){
        z=0;
    }
    z1=z*25;
    zz="translate(-"+z1+"%)";
    images1.style.transform=zz;
    z=z+1;

    setTimeout(slider,4000)
}

slider();

function dot(n){

    images1=document.getElementById("images");
    d11=document.getElementById("d1");

    if(n==1){
        images1.style.transform="translatex(-0%)";
        d11.style.backgroundColor=" rgb(101, 101, 101)";
    }

    if(n==2){
        images1.style.transform="translatex(-25%)";
    }

    if(n==3){
        images1.style.transform="translatex(-50%)";
    }

    if(n==4){
        images1.style.transform="translatex(-75%)";
    }
}


let msg11=document.getelementbyid("msg1").innerHTML;

alert("msg11");