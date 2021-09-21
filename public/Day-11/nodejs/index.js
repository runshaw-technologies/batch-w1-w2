var http = require('http');


// create a server object:
http.createServer(function(req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.end('Welcome to WDesign Tech.');
}).listen(8080);