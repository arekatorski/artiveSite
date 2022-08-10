const arrow = document.querySelectorAll(".arrow");
const card_content = document.querySelector(".card-list-content");
let content = 0;
let move = 0;

function update(arrow){
    if(window.innerWidth >= 1835){
        if((content + move) < 1260){
            move = 1260;
        }
        else if(arrow === "left"){
            move = 1260; 
        }
        else{
           console.log(move);
        }
    }
    else if(window.innerWidth < 1835 && window.innerWidth > 1360){
        move = 1260;
    }
    else if(window.innerWidth <= 1360 && window.innerWidth > 909){
        move = 840;
    }
    else if(window.innerWidth <= 909 && window.innerWidth > 0){
        move = 420;
    }
    
    if(arrow === "left"){
        card_content.scrollTo({
            top: 0,
            left: content-=move,
            behavior: 'smooth'
        });
    }
    else{
        card_content.scrollTo({
            top: 0,
            left: content+=move,
            behavior: 'smooth'
        });
    }
}

arrow[0].addEventListener("click", () => {
    if(content > 0){
        update("left");
        console.log("left");
    }
})

arrow[1].addEventListener("click", () => {
    if(content < 2520 ){
        update("right");
        console.log("right");
    }
})