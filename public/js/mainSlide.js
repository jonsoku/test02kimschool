const topContainerList = document.querySelectorAll('.top-container-slider li');
const topContainerLength = topContainerList.length;
let topContainerPage = 0;
const topContainerDots = document.querySelector('.top-slider-dots');

for(let i = 0; i < topContainerLength ; i++){
    const topContainerDot = document.createElement('div');
    topContainerDots.appendChild(topContainerDot);
    topContainerDot.classList.add('top-slider-dot');
}

const topContainerDot = document.querySelectorAll('.top-slider-dot')

for(let i = 0 ; i < topContainerLength ; i++){
    topContainerDot[i].addEventListener('click', function(){
        moveContainer(i)
        topContainerPage = i;
    });
}


function moveContainer(index){
    index = index % topContainerLength;

    for(let i = 0 ; i < topContainerLength ; i++){
        for(let j = 0 ; j < topContainerLength ; j++){
            if(topContainerList[j].classList.contains('tcw__showing')){
                topContainerList[j].classList.remove('tcw__showing')
            }
        }
        topContainerList[index].classList.add('tcw__showing')
    }

    for(let i = 0 ; i < topContainerLength ; i++){
        for(let j = 0 ; j < topContainerLength ; j++){
            if(topContainerDot[j].classList.contains('tcb__showing')){
                topContainerDot[j].classList.remove('tcb__showing')
            }
        }
        topContainerDot[index].classList.add('tcb__showing')
    }
}

function moveContainerInit(){
    moveContainer(0);
    setInterval(function(){
        moveContainer(topContainerPage+1);
        topContainerPage++;
        if(topContainerPage===length){
            topContainerPage=0;
        }
    }, 1000*3)

}

moveContainerInit();


