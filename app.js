var express = require("express")
var app = express()
const port = 3000
var http = require("http")
const path = require('path')
// app.set("view engine", "html")

app.listen(port, () => console.log(`Example app listening on port ${port}!`))

app.use(express.static(__dirname + '/public'));

// New code based on Stack Overflow that didn't fix routing.
// app.use('/', express.static(__dirname + '/public'));

// app.get('/public/sponsors.html', function(req, res) {
//     res.sendFile('sponsors')
//   })

  app.get('/', function(req, res) {
    res.sendFile('index')
  })

  app.get('/team', function(req, res) {
    res.sendFile('team')
  })