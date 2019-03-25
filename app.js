var express = require("express")
var app = express()
const port = 3000

app.listen(port, () => console.log(`Example app listening on port ${port}!`))

app.use(express.static(__dirname + '/public'));

app.get('/sponsors', function(req, res) {
    res.render('/sponsors')
  })

  app.get('/', function(req, res) {
    res.render('index')
  })

  app.get('/team', function(req, res) {
    res.render('/team')
  })