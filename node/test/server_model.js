var http=require("http");//引入http模块
http.createServer(function (req,res) {
	 res.writeHead(200,{"Content-Type":"text/html;charset:utf-8"}) ;//设置返回的数据格式以及编码 
	 /*这里写执行程序*/
         

	 res.end("服务器搭载成功");//服务程序结束      
}).listen(9001);//创建和监听服务器端口
console.log("运行成功");