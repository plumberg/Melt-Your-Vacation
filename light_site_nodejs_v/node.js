var mysql = require('mysql');
var express = require('express');
var bodyParser = require('body-parser');
var nodemailer = require('nodemailer');
var app = express();
app.set('view engine', 'ejs');
//app.use( express.static('WebProject'));
app.use( express.static('img'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.get('/', (req, res)=>{
    res.render('home');
});

app.get('/about', (req, res)=>{
    res.render('about');
});

//for mailing contact us:
app.get('/contactus', (req, res)=>{
    res.render('contactus');
});

app.post('/mailwassent',(req,res)=>{
    console.log(req.body.message);

    var message = `
    <h5>Your message:</h5>
    <p>${req.body.message}</p>`;

    var transporter = nodemailer.createTransport({
        service: 'hotmail',
        host: 'localhost',
        port: 8080,
        debug: true,
        logger:true,
        secure: false,
        auth: {
            user: '********@hotmail.com',
            pass: '********'
        },
        tls:{
            rejectUnauthorized:false
        }
    });


    var mailOptions = {
        from: '"Hannah R 👻" <********@hotmail.com>',
        to: '**********@gmail.com',
        subject: "Mail for Melt You Vacation Support Team",
        text: "Hello",
        html: message
    };

    transporter.sendMail(mailOptions, function(error, info){
        if (error) {
            console.log(error);
        } else {
            console.log('Email sent: ' + info.response);
            console.log("Message sent: %s", info.messageId);
            console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));
            res.render('mailwassent', {data: req.body});
        }
    });
    res.render('mailwassent');
});



//for adding user:
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "vacation_db"
});

var isEmpty = function(obj) {
  return Object.keys(obj) === null;
}

var queryUsernames = "SELECT userName FROM authorizedusers";

con.connect(function(err) {
    if (err) console.log(JSON.stringify(err, undefined, 2));
    else console.log('Connection to DB succeded');
});

//address:
//http://localhost:8080/register_authorized_node
//XAMPP should be online in order to conect to db.
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

app.listen(8080, ()=>console.log('Server is running'));
