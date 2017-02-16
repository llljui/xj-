var fs=require('fs');
var readstream=fs.createReadStream('../html/stream1.html');//里面有两个参数一个是文件地址，另外一个是所要读取文件里面的内容参数例如json文件
var writestream=fs.createWriteStream('../html/stream2.html');//参数同上
readstream.on('data',function (chunk) {
	console.log('数据开始读取并写入');
	writestream.write(chunk);
});
readstream.on('end',function () {
	writestream.end();
	console.log('写入结束');
});
console.log('begin....');
