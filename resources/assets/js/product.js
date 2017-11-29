
if(document.getElementById('productPage')){
    require('lightgallery');
    require('lightgallery/modules/lg-video');
    $('.prod-slider').slick({
        rows:0,
        fade:true,
        arrows:false,
        asNavFor:'.slider-nav',

    });
    $('.slider-nav').slick({
        rows:0,
        slidesToShow:4,
        vertical:true,
        arrows:false,
        focusOnSelect: true,
        asNavFor:'.prod-slider',
        arrows:true,
        prevArrow:'<div class="slick-arrow prevArrow">' +
        '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="13px" viewBox="0 0 307.054 307.054" style="enable-background:new 0 0 307.054 307.054;" xml:space="preserve"><g><g id="_x34_85._Up"><g><path d="M302.445,205.788L164.63,67.959c-6.136-6.13-16.074-6.13-22.203,0L4.597,205.788c-6.129,6.132-6.129,16.069,0,22.201     l11.101,11.101c6.129,6.136,16.076,6.136,22.209,0l115.62-115.626L269.151,239.09c6.128,6.136,16.07,6.136,22.201,0     l11.101-11.101C308.589,221.85,308.589,211.92,302.445,205.788z"/></g></g></g></svg>' +
        '</div>',
        nextArrow:'<div class="slick-arrow nextArrow">' +
        '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="13px" viewBox="0 0 307.054 307.054" style="enable-background:new 0 0 307.054 307.054;" xml:space="preserve"><g><g id="_x34_85._Up"><g><path d="M302.445,205.788L164.63,67.959c-6.136-6.13-16.074-6.13-22.203,0L4.597,205.788c-6.129,6.132-6.129,16.069,0,22.201     l11.101,11.101c6.129,6.136,16.076,6.136,22.209,0l115.62-115.626L269.151,239.09c6.128,6.136,16.07,6.136,22.201,0     l11.101-11.101C308.589,221.85,308.589,211.92,302.445,205.788z"/></g></g></g></svg>' +
        '</div>',
        responsive:[
            {
                breakpoint:1170 ,
                settings:'unslick'
            },
        ]
    });
    window.ChangeTab=(num)=>{
        let show , hide , actBtn ,inActBtn ;
        if(num > 0 ){
            show = document.getElementsByClassName('tab-desc')[0];
            hide = document.getElementsByClassName('tab-specs')[0];
            actBtn = document.querySelectorAll('.tab-butts button')[1];
            inActBtn = document.querySelectorAll('.tab-butts button')[0];
        }else{
            show = document.getElementsByClassName('tab-specs')[0];
            hide = document.getElementsByClassName('tab-desc')[0];
            actBtn = document.querySelectorAll('.tab-butts button')[0];
            inActBtn = document.querySelectorAll('.tab-butts button')[1];
        }
        show.style.display = 'block';
        hide.style.display = 'none';
        actBtn.classList.add('active');
        inActBtn.classList.remove('active');
    }
    window.galleryLoad = ()=>{
         for (let i = 0 ; i < window.galeryItems.length ; i++){
            let gElem = document.createElement('div');
             gElem.classList.add('img');
             console.log(window.galeryItems[i].type);
             if(window.galeryItems[i].type !== 'img'){
                 gElem.classList.add('video');
                 gElem.setAttribute('data-src','https://www.youtube.com/watch?v='+window.galeryItems[i].link)
                 gElem.style.backgroundImage='url(https://img.youtube.com/vi/'+window.galeryItems[i].link+'/hqdefault.jpg)';
             }else{
                 gElem.style.backgroundImage='url('+window.galeryItems[i].link+')';
                 gElem.setAttribute('data-src',window.galeryItems[i].link);
             }
             document.getElementsByClassName('gallery')[0].appendChild(gElem);
         }
        $('.gallery').lightGallery();
    }
    window.addEventListener('load',()=>{
        window.galleryLoad();
        let navSliderArray =  document.querySelectorAll('.slider-nav .img');
        for(let i = 0 ; i < navSliderArray.length; i++ ){
            navSliderArray[i].addEventListener('click',()=>{
                if(window.innerWidth < 1170 ){
                    $('.prod-slider').slick('slickGoTo' , i);
                }
            });
        }
    });
    let mtimer;
    window.addEventListener('resize' , ()=>{
        clearTimeout(mtimer);

        if(window.innerWidth > 1170 ){
            mtimer =  setTimeout(() => {
                $('.slider-nav').slick({
                    rows:0,
                    slidesToShow:4,
                    vertical:true,
                    arrows:false,
                    focusOnSelect: true,
                    asNavFor:'.prod-slider',
                    arrows:true,
                    prevArrow:'<div class="slick-arrow prevArrow">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="13px" viewBox="0 0 307.054 307.054" style="enable-background:new 0 0 307.054 307.054;" xml:space="preserve"><g><g id="_x34_85._Up"><g><path d="M302.445,205.788L164.63,67.959c-6.136-6.13-16.074-6.13-22.203,0L4.597,205.788c-6.129,6.132-6.129,16.069,0,22.201     l11.101,11.101c6.129,6.136,16.076,6.136,22.209,0l115.62-115.626L269.151,239.09c6.128,6.136,16.07,6.136,22.201,0     l11.101-11.101C308.589,221.85,308.589,211.92,302.445,205.788z"/></g></g></g></svg>' +
                    '</div>',
                    nextArrow:'<div class="slick-arrow nextArrow">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="13px" viewBox="0 0 307.054 307.054" style="enable-background:new 0 0 307.054 307.054;" xml:space="preserve"><g><g id="_x34_85._Up"><g><path d="M302.445,205.788L164.63,67.959c-6.136-6.13-16.074-6.13-22.203,0L4.597,205.788c-6.129,6.132-6.129,16.069,0,22.201     l11.101,11.101c6.129,6.136,16.076,6.136,22.209,0l115.62-115.626L269.151,239.09c6.128,6.136,16.07,6.136,22.201,0     l11.101-11.101C308.589,221.85,308.589,211.92,302.445,205.788z"/></g></g></g></svg>' +
                    '</div>',
                    responsive:[
                        {
                            breakpoint:1170 ,
                            settings:'unslick'
                        },
                    ]
                });
            },500)
        }

    });
}