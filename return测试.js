var http = require('http')

var server = http.createServer()

server.on('request', function (req, res) {
    var url = req.url
    console.log(url)
    res.end('12132132134')
    console.log('shit')
})

server.listen(3000,function () {
    console.log('服务器启动成功了')
})
