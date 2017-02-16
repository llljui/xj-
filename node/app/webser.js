var http=require('http');
var fs=require('fs');
var url=require('url');
var i=0;
http.createServer(function (req,res) {
	var pathname=url.parse(req.url).pathname;
	pathroute=pathname.substr(1);
	fs.readFile(pathroute, function(err,data){
		if (err) {
			res.writeHead(404,{'Content-Type':'text/html;charset=utf-8'});
			res.write('404-NOTFINDFILE');
			res.end();
			console.log(err);}
		else{res.writeHead(200,{'Content-Type':'text/html;charset=utf-8'});
	 		res.write(data);
	 		res.end();
	 		i++;
	 		console.log('前端路由完成'+i);}
	});
}).listen(8090);
console.log('服务器运行在8090端口');

