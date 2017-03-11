/**
 * Created by °²²¨ on 2017/3/2.
 */
var mysql=require('mysql');
var connection = mysql.createConnection({
    host     : '127.0.0.1',
    user     : 'root',
    password : '',
    database : 'anbo1'
});
connection.connect();
exports.getname=function(uname,pass1,callback){
    var sql="select * from user where uname=?and pass=?";
    connection.query(sql,[uname,pass1],function (error, results) {
        if (error) {
            throw error;
        }else{
            callback&&callback(results)
            }

        });
        //console.log('The solution is: ', results[0].solution);
        connection.end();
    };
exports.inname=function(uname,pass1,callback){
    //var sql='insert into user("uname","pass")values(uanme=?,pass=?)';
    var sql='insert into user(uname,pass)values("'+uname+'","'+pass1+'")';
    connection.query(sql,function(error,results){
         if(error){
             throw error;
         }else{
             callback&&callback(results)
         }
    });
};
exports.check=function(uname,callback){
    var sql='select uname from user where uname="'+uname+'"';
    connection.query(sql,function(error,results){
        if(error){
            throw error;
        }else{
            callback&&callback(results)
        }
    });
};
exports.select=function(uname,pass,callback){
    var sql="select * from user where uname='"+uname+"'and pass='"+pass+"'";
    connection.query(sql,function(error,results){
        if(error){
            throw error;
        }else{
            callback&&callback(results)
        }
    })
}


