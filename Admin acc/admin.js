window.onload = function() {
    var options = {
      useEasing : true, 
      useGrouping : true, 
      separator : ',', 
      decimal : '.', 
      prefix: '',
      suffix: ',000'
    };
    var demo = new CountUp("number", 0, 300, 0, 2.5, options);
    demo.start();
    
    var options1 = {
      useEasing : true, 
      useGrouping : true, 
      separator : ',', 
      decimal : '.', 
      prefix: 'Given ',
      suffix: ''
    };
    
    var demo1 = new CountUp("number1", 0, 15000, 0, 2.5, options1);
    demo1.start();
    
    var options2 = {
      useEasing : true, 
      useGrouping : true, 
      separator : ',', 
      decimal : '.', 
      prefix: '',
      suffix: ',000'
    };
    
  }