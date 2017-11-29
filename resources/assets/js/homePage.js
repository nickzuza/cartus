"use strict";
require('slick-carousel');
    if(document.getElementById('homePage')){
       $('.main-slider').slick({
           slidesToShow:1,
           arrows:true,
           rows:0,
           dots:true,
           prevArrow:'<div class = "slick-arrow prevArrow">' +
           '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 250.738 250.738" style="enable-background:new 0 0 250.738 250.738;" xml:space="preserve" width="17px" height="17px"><g id="Rounded_Rectangle_33_copy_4_1_"><path style="fill-rule:evenodd;clip-rule:evenodd;" d="M96.633,125.369l95.053-94.533c7.101-7.055,7.101-18.492,0-25.546   c-7.1-7.054-18.613-7.054-25.714,0L58.989,111.689c-3.784,3.759-5.487,8.759-5.238,13.68c-0.249,4.922,1.454,9.921,5.238,13.681   l106.983,106.398c7.101,7.055,18.613,7.055,25.714,0c7.101-7.054,7.101-18.491,0-25.544L96.633,125.369z"/> </g> </svg>' +
           '</div>',
           nextArrow:'<div class = "slick-arrow nextArrow">' +
           '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 250.738 250.738" style="enable-background:new 0 0 250.738 250.738;" xml:space="preserve" width="17px" height="17px"><g id="Rounded_Rectangle_33_copy_4_1_"><path style="fill-rule:evenodd;clip-rule:evenodd;" d="M96.633,125.369l95.053-94.533c7.101-7.055,7.101-18.492,0-25.546   c-7.1-7.054-18.613-7.054-25.714,0L58.989,111.689c-3.784,3.759-5.487,8.759-5.238,13.68c-0.249,4.922,1.454,9.921,5.238,13.681   l106.983,106.398c7.101,7.055,18.613,7.055,25.714,0c7.101-7.054,7.101-18.491,0-25.544L96.633,125.369z"/> </g> </svg>' +
           '</div>',
           responsive:[
               {
                   breakpoint:1170 , settings:{arrows:false}
               }
           ]
       })
    }
