var begin=require('./route-server');
var router=require('./router');
begin.start(router.route);