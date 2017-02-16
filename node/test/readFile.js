var rf=require("fs");//引入异步读取文件模块
rf.readFile("../html/details.html", function(err,data){
	if (err) {return console.error(err);}//错误断点
     console.log(data.toString());//转换成字符串输出
});
console.log("执行结束");