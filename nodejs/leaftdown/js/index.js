/**
 * Created by °²²¨ on 2017/2/15.
 */
require(["./leaf"],function(Leaf){
    var ocontainer=document.getElementById('container');
    var winwidth=document.documentElement.clientWidth;
     for(var i=0;i<4;i++){
         var iwidth=50+parseInt(Math.random()*51);
         var leaf=new Leaf(
             {
                 width:iwidth,
                 left:parseInt(Math.random()*(winwidth-iwidth)),
                 container:ocontainer
             });
      leaf.fall();
     }
});