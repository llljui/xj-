var events=require("events");
var eventEmitter=new events.EventEmitter();
eventEmitter.on("ev1",eventHandler);
eventEmitter.emit("ev1");