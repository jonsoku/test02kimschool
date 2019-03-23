const description = document.querySelectorAll('.subjects-slide-description');
const length = description.length;
let page = 0;
const title = document.querySelectorAll('.subjects-slide-title');

/* click event */
for(let i = 0 ; i < length ; i++){
    title[i].addEventListener('click', function(){
        moveTo(i);
        page = i;
    });
};

/* 슬라이드 코어 로직 */
function moveTo(index){
    index = index % length;
    for(let i = 0 ; i < length ; i++){
        for(let j = 0 ; j < length ; j++){
            if(description[j].classList.contains('slideDescription__showing')){
                description[j].classList.remove('slideDescription__showing')
            }
        }
        description[index].classList.add('slideDescription__showing');
    }

    for(let i = 0 ; i < length ; i++){
        for(let j = 0 ; j < length ; j++){
            if(title[j].classList.contains('slideTitle__showing')){
                title[j].classList.remove('slideTitle__showing')
            }
        }
        title[index].classList.add('slideTitle__showing')
    }

}

function init(){
    moveTo(0);
}
init();
