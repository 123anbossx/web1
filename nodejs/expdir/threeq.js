/**
 * Created by ���� on 2017/2/23.
 */
var express=require('express');
var app=express();
app.get('/',function(req,res){
 res.send("施思旭，么么么");
});
app.listen(3000);