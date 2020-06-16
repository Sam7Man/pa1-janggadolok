$(document).ready(function () {
        const nav = document.querySelector('.navbar');
        const carousel = document.querySelector('.carousel-inner');
        const headline = document.querySelector('.headline');
        const image = document.querySelector('#image');
        const headlineParag = document.querySelector('.headlineParag');
        // const inputsearch = document.querySelector('.input-search');
        // const btnsearch = document.querySelector('.btn-search');
        
        const tl = new TimelineMax();
        tl.fromTo(carousel, 1.4, {
                width: "0%",
                left: "50%",
                right: "50%"
            }, {
                width: "100%",
                left: "0%",
                right: "0%",
            })
            .fromTo(image, 1, {
                opacity: "0"
            }, {
                opacity: "0.7"
            })
            .fromTo(headline, 0.8, {
                opacity: "0"
            }, {
                opacity: "0.7"
            })
            .fromTo(headlineParag, 0.8, {
                opacity: "0"
            }, {
                opacity: "0.7"
            })
            
            $(window).scroll(function () {
                var wintop = $(window).scrollTop();
                if (wintop >= 116) {
                    // $('.carousel').addClass('mt-5');
                    $('.navbar').addClass('backgroundDefault'); 
                    $('.nav-link').addClass('navAnimate');
                } else {
                    // $('.carousel').removeClass('mt-5');
                    $('.navbar').removeClass('backgroundDefault');
                    $('.nav-link').removeClass('navAnimate');
                }
            });


            $('.nav-link').hover(function () { 
                $(this).addClass('animated pulse infinite');
            });
            $('.nav-link').mouseleave(function () { 
                $(this).removeClass('animated pulse infinite');
            });

        const images = document.querySelector('.images').children;
        let index;
        let imgsrc;
        for(let i = 0; i < images.length; i++){
            images[i].addEventListener('click', function(){
                index = i;
                changeImage();
                lightBox(); 
            })
        }

        $('.lightbox-close').on('click', function(){
            $('.lightbox').removeClass('open');
        })
        $('.next').on('click', function(){
            if(index == images.length - 1){
                index = 0;
            }else{
                index++;
            }
            changeImage()
            
        })
        $('.prev').on('click', function(){
            if(index == 0){
                index = images.length - 1
            }else{
                index--;
            }
            changeImage();
        })
        function lightBox(){
            $('.lightbox').toggleClass('open');
        }
        function changeImage(){
            imgsrc = images[index].querySelector('img').getAttribute('src');
            $('.image-lightbox').attr('src', imgsrc).fadeIn();
            $('.lightbox-counter').html((index + 1) + ' of ' + images.length);
            
        }
    }) 
