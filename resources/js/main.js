let navbar = document.querySelector('nav');
let alert = document.querySelector('.alert');
let links = document.querySelectorAll('.links');
let a=45
let modal = document.querySelector('#registerModal');
let body = document.querySelector('body');
let btnWord = document.querySelectorAll('.span-add-btn-small')
let btnAdd = document.querySelector('.btn-add-annuoncement')
let priceTot = document.querySelectorAll('.card-price')
let semaforo = document.querySelectorAll('.semaforo')

let carouselControlPrev = document.querySelector('.carousel-control-prev')
let carouselControlNext = document.querySelector('.carousel-control-next')


// Redirect alla home/tegister
if (modal.dataset.duck=="Gatto") {
    let btn = document.querySelector("#btnRegister")
    btn.click();
}

// //btn disabled
let disabled = document.querySelectorAll('.disabledBtn');
let checkClick = false;

function gestioneClick(){
    if (!checkClick){
        checkClick = true;
    disabled.forEach(el=> {
            el.disabled=false;
        });
    setTimeout(function () {
        checkClick = false;
        disabled.forEach(el=> {
            el.disabled=true;
        });
    },10)
    }
};

disabled.forEach(el=> {
    el.addEventListener("click",()=> {
        gestioneClick();
    });
});


// Link navbar
links.forEach( (el)=>{
    el.addEventListener('mouseenter', ()=>{
        el.classList.remove('fc-darkblue');
        el.classList.add('fc-lightblue');
    })
    el.addEventListener('mouseleave', ()=>{
        el.classList.remove('fc-lightblue');
        el.classList.add('fc-darkblue');
    })
})

// Effetto scroll navbar
window.addEventListener('scroll',()=>{
    if (window.scrollY>0) {
        navbar.classList.remove('navbar-static')
        navbar.classList.add('navbar-scroll')
    } else{
        navbar.classList.remove('navbar-scroll')
        navbar.classList.add('navbar-static')
    }
})







let lang = body.dataset.lang

if(lang != 'it' || lang == null){
    btnWord.forEach(el => {
        // console.log('ciao');
        el.innerHTML = '';
        btnAdd.classList.add('not-it-btn-add')
    });

}

priceTot.forEach(price => {
    let priceVal = price.innerHTML
    if(priceVal[priceVal.length-1]=='0' && priceVal[priceVal.length-2]=='0'){
        // console.log('ciao');
        price.innerHTML = priceVal.slice(0,priceVal.length-3) 
    }
});

// animation footer
// function splitColor(riga,position) {
//     let row = document.querySelector(`.row-${riga}`)
//     let text = row.textContent
//     let part1 = text.slice(0, position);
//     let part2 = text.slice(position + 1);
//     let coloredChar = `<span style="color: red;">${text[position]}</span>`;
//     row.innerHTML = `${part1}${coloredChar}${part2}`;
// }



// Timeout alert di successo
setTimeout(function() {
    alert.style.display = 'none';
}, 3000);


function indexActive(){
    let imgCarousel = document.querySelectorAll('.carousel-item')
    
    let IMGC = Array.from(imgCarousel)

    let index=0

    imgCarousel.forEach(el => {
        // console.log(el);      
        if (el.classList.contains('active')) {  
            index = IMGC.indexOf(el) 
            // console.log(index);
        }
    });
    return index
}

function semaforoHider(index) {
    let SAM = Array.from(semaforo)

    semaforo.forEach(el => {
        if (SAM.indexOf(el)==index) {
            el.classList.remove('d-none')
        }else{
            el.classList.add('d-none')
        }
    });
}

carouselControlPrev.addEventListener("click",()=>{
    let imgCarousel = document.querySelectorAll('.carousel-item')

    let index = indexActive() -1

    if (index == -1) {
        index = imgCarousel.length-1
    }
    semaforoHider(index)
})

carouselControlNext.addEventListener("click",()=>{
    let imgCarousel = document.querySelectorAll('.carousel-item')
    
    let index = indexActive() +1
    
    if (index == imgCarousel.length) {
        index =0
    }
    semaforoHider(index)
})

semaforoHider(indexActive())