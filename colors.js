var Links = {
      setColor: function(color){
       //var aList = document.querySelectorAll('a');
       //var i = 0;
       //while (i<aList.length) {
        //aList[i].style.color=color;
        //i = i+1;
      //}
      $('a').css('color', color);
    }
  }
  var Body = {
    setColor: function(color){
      //document.querySelector('body').style.color=color;
      $('body').css('color', color);
    },
    setBackgroundColor: function(color){
     //document.querySelector('body').style.backgroundColor=color;
     $('body').css('backgroundColor', color);
    }
  }
  function nightDayHandler(self){
    if (self.value === 'this.night'){
      Body.setBackgroundColor('black');
      Body.setColor('white');
      self.value='this.day';
      Links.setColor('powderBlue');
    } else {
      Body.setBackgroundColor('white');
      Body.setColor('black');
      self.value='this.night';
      Links.setColor('blue');
    }
  }
