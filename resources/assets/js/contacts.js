'use strict';
if(document.getElementById('contactsPage')){
    for(let i =0 ; i < document.querySelectorAll('.map-tab').length;i++){
        document.querySelectorAll('.map-tab')[i].addEventListener('click',function(e){
            let el = e.currentTarget;
            if(window.innerWidth < 1170  ){
                if(el.classList.contains('active')){
                    let disp = ''
                    if(el.closest('.map-tabs').classList.contains('opened')){
                       disp='none';
                        el.closest('.map-tabs').classList.remove('opened');
                    }else{
                        disp='block';
                        el.closest('.map-tabs').classList.add('opened');
                    }
                    for(let j = 0 ; j <document.querySelectorAll('.map-tab').length;j++ ){
                        document.querySelectorAll('.map-tab')[j].style.display=disp;
                    }
                }else{
                    document.querySelector('.map-tab.active').classList.remove('active');
                    el.classList.add('active');
                    for(let j = 0; j < document.querySelectorAll('.map-tab:not(.active)').length;j++){
                        document.querySelectorAll('.map-tab:not(.active)')[j].style.display='none';
                    }
                    el.closest('.map-tabs').classList.remove('opened')
                }
            }
            document.querySelector('.info-wrap.active').classList.remove('active');
            document.querySelectorAll('.info-wrap')[el.getAttribute('data-num')].classList.add('active');
            window.map.panTo(pins[el.getAttribute('data-num')]);
        });
    }
    let inputsArr = document.querySelectorAll('.input-wrapper input , .input-wrapper textarea');
    for(let i = 0 ; i < inputsArr.length ; i++){
        inputsArr[i].addEventListener('focus' , function(e){
            let el = e.currentTarget;
            el.closest('.v-input').querySelector('.error').style.display='none';
        });
    }
    window.addEventListener('resize' , function(){
        for(let i =0 ; i < document.querySelectorAll('.map-tab').length;i++){
            document.querySelectorAll('.map-tab')[i].setAttribute('style','');
        }
    });
    document.getElementsByClassName('submit')[0].addEventListener('click' , function(e){
            e.preventDefault();
          let feedback = {name:'',emailPhone:'',desc:''};
          let input=document.querySelectorAll('.input-wrapper');
            let send = [false , false , false];
          for(let i=0; i < input.length; i++) {
              let inputEl = input[i].querySelector('input') || input[i].querySelector('textarea');
              switch (inputEl.getAttribute('name')) {
                  case 'feedback_name':
                      if (inputEl.value.length > 3) {
                          feedback.name= inputEl.value;
                          send[i] = true;
                      }
                      break;
                  case 'feedback_email':
                      if (inputEl.value.length > 3) {
                          feedback.emailPhone = inputEl.value;
                          send[i] = true;
                      }
                      break;
                  case 'feedback_desc':
                      if (inputEl.value.length > 30) {
                          feedback.desc= inputEl.value;
                          send[i] = true;
                      }
                      break;
              }
          }
          if(send[0] && send[1] && send[2] ){
              console.log(feedback);
              console.log('sent');

          }else{
              for(let j = 0 ; j < send.length; j++){
                  if(!send[j]){
                      input[j].querySelector('.error').style.display='block';
                  }
              }
          }
    });

}