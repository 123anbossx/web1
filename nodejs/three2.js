/**
 * Created by ���� on 2017/2/19.
 */
var http=require('http');
var fs=require('fs');
var url=require('url');
var querystring=require('querystring')
http.createServer(function(req,res){
     var geturl=url.parse(req.url).pathname;
    //console.log(geturl);
    switch(geturl){
        case '/login':
            reslogin(res);
            break
        case '/dologin':
            respost(req,res);
            break;
        default :
            resError(res);
            break;
    }
}).listen(3000);
function resError(res){
    res.writeHead(404,{'content-type':'text/plain'});
    res.end('page miss');
}
function reslogin(res){
    res.writeHead(200,{'Content-type':'text/html'});
    var realPath=__dirname+"/"+url.parse('three2.html').pathname
    //console.log(realPath);
    var loginpage=fs.readFileSync(realPath,'utf-8')
    res.end(loginpage);
}
function respost(req,res){
   var postData;
    req.setEncoding('utf8');
    req.addListener('data',function(postChunkData){
            postData+=postChunkData;

    });
   req.addListener('end',function(){
       //console.log(postData);
       var reqobj=querystring.parse(postData);
       console.log(reqobj);
       var name=reqobj.undefinedusername;
       var pass=reqobj.pass;
       if(name==123&&pass==456){
           res.writeHead(200,{"content-type":"text/plain"});
           res.end('登录成功');
       }else{
           res.writeHead(200,{"content-type":"text/plain"})
           res.end("登陆失败");
       }
   });
}