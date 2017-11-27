function animate(elem, attr,callback){
			clearInterval(elem.timer);
			elem.timer = setInterval(function(){
				var bStop = true;
				for(var p in attr){
					var curr = parseInt(getStyle(elem, p));//去掉px 
					if(p == 'opacity'){
						curr = parseInt(getStyle(elem, p)*100);
					}
					var speed = (attr[p] - curr) / 8;
					speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
					if(curr != attr[p]){
						bStop = false;
					}
					if(p == 'opacity'){
						elem.style.opacity = (curr + speed) / 100;
						elem.style.filter = 'alpha(opacity'+(curr + speed)+')'
					}else{
						elem.style[p] = curr + speed + 'px';
					}
				}

				if(bStop){
					clearInterval(elem.timer);
					callback && callback();
				}
				
			},30);
		}
		function getStyle(elem, attr){
			if(elem.currentStyle){
				return elem.currentStyle[attr];//有px单位
			}else{
				return getComputedStyle(elem, false)[attr];
			}
		}