process.env.NODE_TLS_REJECT_UNAUTHORIZED = "0";
var http = require('http');
    const fs = require('fs');
    const ytdl = require('ytdl-core');

    ytdl('https://youtu.be/g4f1vvXUBYQ')
            //.pipe(fs.createWriteStream('C:\\xampp\\htdocs\\ventanaE\\public\\g4f1vvXUBYQ.mp4'));
            .pipe(fs.createWriteStream('g4f1vvXUBYQ.mp4'));
            
    console.log('ejecutado');
 
/*http.createServer(function (req, res) {
    
    const fs = require('fs');
    const ytdl = require('ytdl-core');

    ytdl('https://youtu.be/g4f1vvXUBYQ')
            //.pipe(fs.createWriteStream('C:\\xampp\\htdocs\\ventanaE\\public\\g4f1vvXUBYQ.mp4'));
            .pipe(fs.createWriteStream('g4f1vvXUBYQ.mp4'));

    res.writeHead(200, {'Content-Type': 'text/html'});
    res.end('Mensaje Prueba Descarga!');
    
}).listen(8085);*/