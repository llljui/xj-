var http=require('http');
var url=require('url');
module.exports={
	start:function (route) {
			http.createServer(function (req,res) {
			if (req.url!=='/favicon.ico') {
				var pathname=url.parse(req.url).pathname;
				pathname=pathname.replace(/\//,'');
				route(pathname);
				res.writeHead(200,{"Content-Type":"text/html"});
				res.end();
					}		
    }).listen(9000);
			console.log('服务器运行在9000端口');
				}
}
