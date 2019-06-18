var mysql = require('mysql');
var express = require('express');
var bodyParser = require('body-parser');

var app = express();
app.set('view engine', 'ejs');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "vacation_db"
});

var isEmpty = function(obj) {
  return Object.keys(obj) === null;
}

var queryUsernames = "SELECT userName FROM authorizedusers";
app.get('/', (req, res) => {
  res.render('home');
});


con.connect(function(err) {
    if (err) console.log(JSON.stringify(err, undefined, 2));
    else console.log('Connection to DB succeded');
});

//address:
//http://localhost:8080/register_authorized_node
app.get('/register_authorized_node', (req, res) => {
con.query(queryUsernames, function (err, result, fields) {
    if (err) console.log(JSON.stringify(err, undefined, 2));
    console.log(result.length);
    var usersRows = JSON.stringify(result);

    console.log(usersRows);
        res.render('register_authorized_node', { data: result });
    });
})

app.post('/register_authorized_node', (req, res) => {
    if (!isEmpty(req)){
    let newUser = {
        name : req.body.newName,
        password : req.body.newPassword
    };
        console.log("req body is not empty");
        console.log(req.body.newName);
        console.log(req.body.newPassword);

    var sql = "INSERT INTO authorizedusers (password, userName) VALUES (?,?)";
     con.query(sql,[req.body.newPassword,req.body.newName], function (err, result) {
        if (err) throw err;
        else
        console.log("New record inserted");
    });

//To update the screen list of authorised users on the same page:
  con.query(queryUsernames, function (err, result, fields) {
      if (err) console.log(JSON.stringify(err, undefined, 2));
      var usersRows = JSON.stringify(result);
      console.log(usersRows);
          res.render('register_authorized_node', { data: result });
      });
}

})

app.listen(8080, ()=>console.log('Server my_database is running'));
