require(['jquery','kr-danmu'],function ($,Danmu) {
     var danmu=new Danmu();
      $('#btn').on('click',function () {
          var danmu_value=$('#danmu_value').val();
          danmu.move({
              text:danmu_value,
              color:'white',
              fontsize:'20',
              backgroundcolor:'black',
              opacity: 0.5,
              borderradius:20
          });
      });



});
