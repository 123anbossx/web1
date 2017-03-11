/**
 * Created by ���� on 2017/3/4.
 */
var userModels = require('../models/usermodels.js');
exports.register = function (req, res, next) {
    res.render('register');
};
exports.chongfu = function (req, res, next) {
    var uname = req.body.uname;
    var pass1 = req.body.pass1;
    //userModels.getname(uname,pass1,function(result){
    //    console.log(result);
    //});
    userModels.inname(uname, pass1, function (result) {
        res.redirect('/login');
    });

    //res.redirect('/login');
    //console.log(uname);
    //console.log(pass1);

};
exports.yonghu=function(req,res,next){
    var uname = req.body.uname;

    userModels.check(uname,function(result){
             if(result.length==0)
             {
               res.send("success");
             }
       else{
              res.send("false");
             }

    })
};
exports.login = function (req, res, next) {
    res.render('login');

};
exports.denglu=function(req, res, next){
      var uname=req.body.uname;
      var pass=req.body.pass;
    userModels.select(uname,pass,function(result){
    if(result.length==0){
      //req.session.loginuser="账号或密码失败";
        res.send("false");

    }else{
       res.send('success');
    }
    });
};
exports.zhuye = function (req, res, next) {
    res.render('zhuye');

};
