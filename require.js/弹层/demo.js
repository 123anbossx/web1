/**
 * Created by °²²¨ on 2017/2/19.
 */
require(['jquery','dalog'],function($,Dalog){
    $('.open').on('click',function(){
        Dalog.open(
            {
              height:500,
                title:'µÇÂ¼',
                url:'biaodan.html'

            }
        );
    })

})