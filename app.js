
var express = require("express")
var app = express()
const port = process.env.PORT || 3000
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

  app.get('/team', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/team.html"))
  })

  app.get('/calendar', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/calendar.html"))
  })

  
  app.get('/sponsors', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/sponsors.html"))
  })


  app.get('/', function(req, res) {
    res.sendFile('./index.html')
  })

  app.get('*', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/index.html"))
  })


