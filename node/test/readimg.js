var imgfn=require("./imgfn");
var http=require('http');
http.createServer(function (req,res) {
	res.writeHead(200,{"Content-Type":"image/jpeg"});
    imgfn.readImg('../img/b1.png',res);
}).listen(8000);
console.log("服务器运行在8000端口");