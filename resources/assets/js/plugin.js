window.addEventListener('load',function(){
    document.getElementsByClassName('footer-menu-title')[0].addEventListener('click',function(e){
        let el = e.currentTarget ;

        if(el.closest('.footer-top-wrapper').querySelector('ul').style.display !== 'block'){
            el.classList.add('opened');
            Velocity(el.closest('.footer-top-wrapper').getElementsByTagName('ul')[0],'slideDown',{duration:500})
        }  else{
            el.classList.remove('opened');
            Velocity(el.closest('.footer-top-wrapper').getElementsByTagName('ul')[0],'slideUp',{duration:500})

        }
    });
    document.getElementsByClassName('m-menu-butt')[0].addEventListener('click',function () {
         Velocity(document.getElementsByClassName('header-bottom-wrapper')[0] , {left:0});
         document.querySelector("html , body").classList.add('scr-no');
    })
    document.getElementsByClassName('close-m-menu')[0].addEventListener('click',function () {
        Velocity(document.getElementsByClassName('header-bottom-wrapper')[0] , {left:'100vw'});
        document.querySelector("html , body").classList.remove('scr-no');
    });
    document.querySelector('.lang>.m-title').addEventListener('click' , function(e){
        let el = e.currentTarget;
        if( el.closest('.lang').getElementsByTagName('ul')[0].style.display !== 'block'){
            Velocity(el.closest('.lang').getElementsByTagName('ul')[0],'slideDown',{duration:500})
        }  else{
            el.classList.remove('opened');
            Velocity(el.closest('.lang').getElementsByTagName('ul')[0],'slideUp',{duration:500})

        }


    })
    document.querySelector('.deep>span').addEventListener('click',function (e) {
        let el=e.currentTarget;
        console.log(el.closest('.deep').querySelector('.subc'));
        if(el.closest('.deep').querySelector('.subc').style.display !== 'block'){
            Velocity(el.closest('.deep').querySelector('.subc'),'slideDown',{duration:500})
        }else{
            Velocity(el.closest('.deep').querySelector('.subc'),'slideUp',{duration:500})
        }

    });
    window.addEventListener('resize',function(){
        if(window.innerWidth >1170 ) {
                document.getElementsByClassName('footer-menu')[0].style.display='flex';
        };
    });

});

