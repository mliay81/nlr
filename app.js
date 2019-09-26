
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

  app.get('/races.html', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/races.html"))
  })

  app.get('/calendar.html', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/calendar.html"))
  })

  
  app.get('/sponsors.html', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/sponsors.html"))
  })

  app.get('/outreach.html', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/outreach.html"))
  })

  app.get('/contact.html', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/contact.html"))
  })


  app.get('/', function(req, res) {
    res.sendFile('./index.html')
  })

  app.get('*', function(req, res) {
    res.sendFile(path.join(__dirname, "./public/index.html"))
  })


