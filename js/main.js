    var $win = $(window);
    var winWidth = $win.width();
    var $body = $('body, html');
    var $nav = $('nav');
    var navHeight = $nav.outerHeight() - 12 // height of the border;
    var navHeightCollapsed = 70 - 12;
    var $pageIntroWrapper = $('.page-intro-wrapper');
    var pageIntroWrapperHeight = $pageIntroWrapper.outerHeight();
    var homePageRotator = $('#home-page-rotator');
    
    
    $win.load(function(){
        
            setEqualHeightDivs()
        
                
        
    });
    

    
    
    function setEqualHeightDivs( ) {
        
        // set each case study column to the appropriate height
        $('.case-study').each(function(){
            
            var refRatio = 16/9;
            
            // grab each column
            fortyPercent = $(this).children('.forty-percent');
            sixtyPercent = $(this).children('.sixty-percent');
            imageWrapper = fortyPercent.children('.image-wrapper');
            
            // find out it's current height
            fortyPercentHeight = fortyPercent.outerHeight();
            fortyPercentWidth = fortyPercent.outerWidth();
            sixtyPercentHeight = sixtyPercent.outerHeight();
            sixtyPercentWidth = sixtyPercent.outerWidth();
            
            fortyPercentImgHeight = fortyPercent.children('img').height();
            fortyPercentImgWidth = fortyPercent.children('img').width();
            
            
            // set the height of each image
            $(imageWrapper.children('img')).each(function(){

                image = $(this);
                
                if ( $('html').hasClass('no-touch') ) { 
                    
                    // make the image column the same height as the copy column
                    fortyPercent.css({height:sixtyPercentHeight});
                    
        
                    imageWrapperRatio = imageWrapper.width() / imageWrapper.height();
                    imageRatio = image.width() / image.height();
                    
                    console.log(image)
                    console.log(imageWrapper.height() )
                    console.log(imageWrapper.width() )
                    console.log(imageWrapperRatio)
                    console.log(imageRatio)
                    
                    
                    
                    
                    if (imageWrapperRatio > imageRatio) {
                        
                        image.css({height:'auto', width:'100%'})
                        
                    } else if (imageRatio > imageWrapperRatio) {
                        image.css({height:'100%', width:'auto'})
                    }
                    
                } 
                
                // if mobile
                else {
                    
                    // make the image column the same height as the copy column
                    fortyPercent.css({height:'300'});
                    
        
                    imageWrapperRatio = imageWrapper.width() / imageWrapper.height();
                    imageRatio = image.width() / image.height();
        
                    console.log(image)
                    console.log(imageWrapper.height() )
                    console.log(imageWrapperRatio)
                    console.log(imageRatio)
                    
                    if (imageWrapperRatio > imageRatio) {
                        
                        console.log(image)
                        image.css({height:'auto', width:'100%'})
                        
                    } else if (imageRatio > imageWrapperRatio) {
                        image.css({height:'100%', width:'auto'})
                    }
                    
                }


            })
            
            
            
                
            
                        
            
        });        
        
        
    }
    
    
    // homepage roatator function
    if ( homePageRotator.length ) {
        
        console.log('yes')
        
        
        
        //grab the first one, fade it out and set it to the back
        
        setInterval(function(){

            var active = $('#home-page-rotator .content li').last();

            active.addClass('fadeOut');
            setTimeout(function(){
                $('ul.content').prepend(active)
                active.removeClass('fadeOut')
            }, 1000); // lenght of css animation
            
        }, 5000);
        
    }

    
    
    
    $('.scroll-to-section').click(function(){
        
        self = this;
        
        scrollToTarget(self);
        
        return false;
        
    });
    
    
    $('.scroll-to-first').click(function(){
        
        scrollToFirst();  
        
        return false;
        
    });
        
    function scrollToFirst() {
        
        console.log('scrolltofirst')      
        
        if (winWidth > 900) {
            $body.animate({scrollTop:pageIntroWrapperHeight - navHeightCollapsed });
        } else {
            $body.animate({scrollTop:pageIntroWrapperHeight});
        }
    }
    
    
    function scrollToTarget(self) {
        
        target = $(self).attr('href'); 
        targetTop = $(target).offset().top;
        
        if (winWidth > 900) {
            $body.animate({scrollTop:targetTop - navHeightCollapsed});
        } else {
            $body.animate({scrollTop:targetTop});
        }
        
        
    }
    
    
    $win.on('scroll', function(e) {
              
       if (winWidth > 900) {
           if ($win.scrollTop() > navHeight) {
               
               $nav.addClass('fixed');
                
           } else {
               $nav.removeClass('fixed');
           }
       }
                   
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    